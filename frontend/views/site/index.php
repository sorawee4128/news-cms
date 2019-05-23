<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
         
          <?php 

 $link = mysqli_connect("localhost", "root", "", "news");

 if(!$link ) {exit("asdasd");}
 mysqli_set_charset($link,"utf8");
 //2.statement
 if (empty($_GET["page"])) $curpage = 0;

else $curpage = $_GET["page"] - 1;

$limit = 3  ;
$record = $curpage * $limit;

 $sql = "SELECT content.id,content.title,content.introtext,content.images,category.name,content.publish_up FROM content,category WHERE content.Category = category.id AND content.state = 1 ORDER BY content.publish_up DESC" ;
 $result= mysqli_query($link,$sql);

$totalrec = mysqli_num_rows($result);
$totalpage = ($totalrec / $limit);
if (($totalrec % $limit) != 0) $totalpage++;

$sql = "SELECT content.id,content.title,content.introtext,content.images,category.name,content.publish_up FROM content,category WHERE content.Category = category.id AND content.state = 1  ORDER BY content.publish_up DESC LIMIT $record, $limit";

$result=mysqli_query($link, $sql);
   
if($result){
while ($data= mysqli_fetch_array($result)) {
    echo  '  <div class="panel panel-default">
    <div class="panel-body">
    <div>
      
             <div class="text half-to-full">
             <h6 align = "left">'.$data["publish_up"].'</h6>
             <div align = "right">  <span class="category mb-5">'.$data["name"].'</span></div>
             
               <div class="post-meta " >
           <center> <img src="../../backend/web/uploads/'.$data["images"].'", width="100%" , height="300"></center>
           </div>
               <br>
            <center>   <h3>'.$data["title"].'</h3></center>
               <p>'.$data["introtext"].'</p>
               <br>
              <div align = "right" > <a href="index.php?r=content%2Fview&id='.$data["id"].'" ><button" class="btn btn-primary btn-sm">Continue</button></a></div>
             </div>
      
         </div>
         </div> </div>';
            }

 } 
else echo mysqli_error($link);
?>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12" style="text-align: center;">
    <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
<?php
  for ($i = 1; $i <= $totalpage; $i++)

echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
?>
       </ul>
</nav>
                </div>
              </div>
                         

            </div>
            <?php
//4.close
mysqli_close($link);

 ?> 