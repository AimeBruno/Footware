<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Footwear </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';


        $textObj = new Text();
        $text = $textObj->displayRecordById(4); 
        $text_2 = $textObj->displayRecordById(5); 

    ?>

    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title"><?php echo $text['text1'] ?></h3>
          <hr />
          <p class="mt-2"><?php echo $text_2['text2'] ?>
</p>
        </div>
        </div>
      </div>

     
    </div>


  
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12"  method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto"><?php echo $text['text3'] ?></h3>
      <div class="form-group">
        <label style="font-weight:bold;"><?php echo $text['text4'] ?></label>
        <br>
        <label><?php echo $text['text5'] ?></label>
        <br>
        <label><?php echo $text['text6'] ?></label>
      </div>

      <div class="form-group">
        <label style="font-weight:bold;"><?php echo $text['text7'] ?></label>
        <br>
        <label><?php echo $text['text5'] ?></label>
        <br>
        <label><?php echo $text['text6'] ?></label>
      </div>

      
    </form>
  </div>


  </div>

  <?php include 'includes/footer.php'?>



</body>


</html>
