<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Footwear</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">

    <?php
include 'includes/header_menu.php';

$textObj = new Text();
$text = $textObj->displayRecordById(1); 

?>

    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1><?php echo $text['text1']?></h1>
            <p><?php echo $text['text2']?> </p>
            <a href="products.php" class="btn btn-warning btn-lg text-white" ><?php echo $text['text4']?></a>

            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
    <?php echo $text['text3']?>
    </div>
<?php
    $text2 = $textObj->displayRecordById(2); 

?>

 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#sneakers"> <img src="<?php echo $text2['text1']?>" class="img-fluid " alt="" style="border-radius:0.5rem;width:255px;height:170.2px;" >
                    <div class="h5 pt-3 font-weight-bolder">
                    <?php echo $text2['text2']?>
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#boots"  >
                  <img src="<?php echo $text2['text3']?>" class="img-fluid zoom" alt="" style="border-radius:0.5rem;width:255px;height:170.2px;" >
                     <div class="h5 pt-3 font-weight-bolder">
                     <?php echo $text2['text4']?>
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#sandals">
                 <img src="<?php echo $text2['text5']?>" class="img-fluid   " alt="" style="border-radius:0.5rem;width:255px;height:170.2px;">
                <div class="h5 pt-3 font-weight-bolder">
                <?php echo $text2['text6']?>
                 </div>
             </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#basket">
                 <img src="<?php echo $text2['text7']?>" class="img-fluid  " alt="" style="border-radius:0.5rem;width:255px;height:170.2px;">
                 <div class="h5 pt-3 font-weight-bolder">
                 <?php echo $text2['text8']?>
                 </div>
              </div>
            </a>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
</body>
</html>