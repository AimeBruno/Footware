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
    <body >
        <?php
            include 'includes/header_menu.php';
        ?>
        <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6" >
            <h1 id="foo">This is the page for cart information!</h1>
            <?php
                $shopper = $_SESSION["email"];
                $sql = "SELECT * FROM product WHERE user= '".$_SESSION["email"]."'";
                $sum = 0;
                $con = mysqli_connect('localhost', 'root', '', 'user');
                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con , $sql);

                echo "<div class='row text-center' id='sneakers'>";

                while($row = mysqli_fetch_array($result))
                {
                    echo "<div class='col-md-3 col-6 py-2'>";
                        echo "<div class='card' style='max-width: 8rem; max-height: 11rem;'>";

                            echo "<img src=" . $row['image'] . " alt='' class='img-fluid pb-1' style='max-height: 4rem; max-width: 8rem;'>";
                            echo "<div class='figure-caption'>";

                                 echo "<h6>" . $row['name'] . "</h6>";
                                 echo "<h6>$" . $row['price'] . "</h6>";
                                 ?> <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning text-white">Delete</button> </a>
                                 <?php
                               //  echo "<p><input type='submit' method='post' name='btn1' value='Remove Item' class='btn btn-primary  text-white '/></p>";
                            echo "</div>";
                            echo "</br>";
                        echo "</div>";
                    echo "</div>";
                    $sum += $row['price'];
                }

                echo "</div>";
                echo "<br>";
                echo "<h2>Shipping address: </h2>";
                echo "<div class='card'>";
                    echo "<h5  class='m-3'>" . $_SESSION['address'] . " </h5>";
                echo "</div>";
                echo "<h4 class='m-3'>Total: $" . $sum . " + HST</h4>";
                echo "</br><a href='' role='button' class='btn btn-success btn-lg  text-white '>Checkout</a>";
                mysqli_close($con);
             
            ?>
        </div>
        <?php include 'includes/footer.php'?>
    </body>
</html>