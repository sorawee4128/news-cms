<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use backend\models\ContentSearch;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                   
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $searchModel = new ContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('../content/index',['searchModel' => $searchModel,
            'dataProvider' => $dataProvider]);
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionUpload()
    {
        $uploadedFile = UploadedFile::getInstanceByName('upload');
        $mime = \yii\helpers\FileHelper::getMimeType($uploadedFile->tempName);
        $file = time()."_".$uploadedFile->name;

        $user_id = Yii::$app->user->getId();

        $url = Yii::$app->urlManager->createAbsoluteUrl('/uploads/'.$user_id.'/'.$file);
        $uploadPath = Yii::getAlias('@webroot').'/uploads/'.$user_id.'/'.$file;

        if (!is_dir(Yii::getAlias('@webroot').'/uploads/'.$user_id)) { //ถ้ายังไม่มี folder ให้สร้าง folder ตาม user id
            mkdir(Yii::getAlias('@webroot').'/uploads/'.$user_id);
        }

        //ตรวจสอบ
        if ($uploadedFile==null)
        {
            $message = "ไม่มีไฟล์ที่ Upload";
        }
        else if ($uploadedFile->size == 0)
        {
            $message = "ไฟล์มีขนาด 0";
        }
        else if ($mime!="image/jpeg" && $mime!="image/png" && $mime != "image/gif")
        {
            $message = "รูปภาพควรเป็น JPG หรือ PNG";
        }
        else if ($uploadedFile->tempName==null)
        {
            $message = "มีข้อผิดพลาด";
        }
        else {
            $message = "";
            $move = $uploadedFile->saveAs($uploadPath);
            if(!$move)
            {
                $message = "ไม่สามารถนำไฟล์ไปไว้ใน Folder ได้กรุณาตรวจสอบ Permission Read/Write/Modify";
            }
        }
        $funcNum = $_GET['CKEditorFuncNum'] ;
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    }
}
