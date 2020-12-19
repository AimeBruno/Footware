<?php
session_start();

$name = "";
$password = "";
$email    = "";
$address = "";
$phone = "";


$con = mysqli_connect("localhost","root","" ,"user");

if(isset($_POST["signUp"])){
   
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);


    $user_check_query = "SELECT * FROM register WHERE user='$name' OR email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if (empty($name)) {  echo("<h2>Name is empty</h2>");}
    else if (empty($password)) {  echo("<h2>Password is empty</h2>");}
    else if (empty($email)) {  echo("<h2>Email is empty</h2>"); }
    else if (empty($address)) {  echo("<h2>Address is empty</h2>");}
    else if (empty($phone)) {  echo("<h2>Phone is empty</h2>");}
    else if($user['name'] === $name || $user['email'] === $email ){
            echo("<h2>Name or email already exist</h2>");
    }
    else{
        $query = "INSERT INTO register (user, password, email, address, phone) VALUES( '$name', '$password', '$email' , '$address', '$phone')";
        mysqli_query($con, $query);
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['phone'] = $phone;
        header('location: index.php');
    }
}

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
<body >
    <?php
        include 'includes/header_menu.php';

        $textObj = new Text();
        $text = $textObj->displayRecordById(7); 
        $text_2 = $textObj->displayRecordById(3);
    ?>


<div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6" >
<form class="col-md-12" method="POST" name="_next">
        <h3 class="text-warning pt-3 title mx-auto" style="text-align:center;"><?php echo $text_2['text6']?></h3>
        <div class="form-group">
        <table style="margin-left:auto; margin-right:auto;">
          <tr>
              <th><label><?php echo $text['text1']?></label></th>
              <th><input type="text" id="name" name="name"></th>
          </tr>
          <tr>
              <th><label><?php echo $text['text2']?></label></th>
              <th><input type="password" id="password" name="password"></th>
          </tr>
          <tr>
              <th><label><?php echo $text['text3']?></label></th>
              <th><input type="text"  id="email" name="email"></th>
          </tr>
          <tr>
              <th><label><?php echo $text['text4']?></label></th>
              <th><input type="text"  id="address" name="address"></th>
          </tr>
          <tr>
              <th><label><?php echo $text['text5']?></label></th>
              <th><input type="text" id="phone" name="phone"></th>
          </tr>
          
          <table>
          <tr>
              <!--<input type="submit"  id="signUp" name="signUp" value="Sign Up" style="float:right;">-->
              <button method="POST" id="signUp" class="btn btn-warning text-white mr-4" name="signUp" style="float:right;">Sign Up</button>
          </tr>
        </div>
    
    </form>
</div>

</body>
</html>