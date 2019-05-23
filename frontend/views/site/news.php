
<?
$link = mysqli_connect("localhost", "root", "", "news");

if(!$link ) {exit("asdasd");}
mysqli_set_charset($link,"utf8");
$a =$_GET["news_id"];
$sql = "SELECT content.id,content.title,content.introtext,content.images,category.name,content.publish_up,content.fulltext FROM content,category WHERE content.Category = category.id AND WHERE content.id = '$a' ";
$result = mysqli_query($link, $sql);
$data = mysqli_fetch_array($result);
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $data["title"]; ?>
                  </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php echo $data["images"];?>">
            </div>

            <div class="col-md-4">
                <h3>รายละเอียดสินค้า</h3>
                <p><?php echo $data["fulltext"];?></p>
                <h3>ราคาสินค้า</h3>
                <ul>
                    <li><?php echo $data["name"];?>  บาท</li>
                   </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
         <!-- /.row -->

        <hr>

        <!-- Footer -->
      
    </div>

<?php
//4.close
mysqli_close($link);

 ?> 