<?php
    session_start();
    if(isset($_POST["login"]))
    {
        $con = mysqli_connect('localhost', 'root', '', 'user');
        $sql = "SELECT * FROM register WHERE user = '".$_POST["name"]."' and password = '".$_POST["password"]."'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if(is_array($row)){
            $_SESSION["name"] = $row['name'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["address"] = $row['address'];
            header("Location: index.php");
            exit();
        }
        else
        {
            $message = "Invalid Username or Password";
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
        ?>

        <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6" >
            <form class="col-md-12" method="POST" name="_next">
                <h3 class="text-warning pt-3 title mx-auto" style="text-align:center;"><?php echo $text['text3']?></h3>
                <div class="form-group">
                    <table style="margin-left:auto; margin-right:auto;">
                          <tr>
                              <th><label><?php echo $text['text1']?></label></th>
                              <th><input type="text"  id="name" name="name"></th>
                          </tr>
                          <tr>
                              <th><label><?php echo $text['text2']?></label></th>
                              <th><input type="password" id="password" name="password"></th>
                          </tr>
                          <tr>
                              <!--<input type="submit" method="POST" id="signIn" name="login" value="Log In" style="float:right;">-->
                          </tr>
                    </table>
                    <button method="POST" class="btn btn-warning text-white mr-3" name="login" style="float:right;">Log In</button>
                </div>
    
            </form>
        </div>
        <?php include 'includes/footer.php'?>
    </body>
</html>