<?php
    session_start();
    
    function add($image, $name, $price, $user) 
    {
        $con = mysqli_connect("localhost","root","" ,"user");
        $query = "INSERT INTO product (image, name, price, user) VALUES( '$image', '$name', $price, '$user')";
        mysqli_query($con, $query);
    }

    if (isset($_GET['hello1'])){ add('images/sneakers1.jpg', 'Comme des garcon', 75, $_SESSION["email"]);}
    if (isset($_GET['hello2'])){ add('images/sneakers2.jpg', 'Vans Strike', 45, $_SESSION["email"]);}
    if (isset($_GET['hello3'])){ add('images/sneakers3.jpg', 'Mickey Sneakers', 65, $_SESSION["email"]);}
    if (isset($_GET['hello4'])){ add('images/sneakers4.jpg', 'Air Nike Black', 50, $_SESSION["email"]);}
    if (isset($_GET['hello5'])){ add('images/boots1.jpg', 'Brown Boots', 30, $_SESSION["email"]);}
    if (isset($_GET['hello6'])){ add('images/boots2.jpg', 'Louis Light Boots', 85, $_SESSION["email"]);}
    if (isset($_GET['hello7'])){ add('images/boots3.jpg', 'Blue Boots', 25, $_SESSION["email"]);}
    if (isset($_GET['hello8'])){ add('images/boots4.jpg', 'Gucci Mix Boots', 77, $_SESSION["email"]);}
    if (isset($_GET['hello9'])){ add('images/sandals1.jpg', 'Black Sandals', 10, $_SESSION["email"]);}
    if (isset($_GET['hello10'])){ add('images/sandals2.jpg', 'Brown Sandals', 15, $_SESSION["email"]);}
    if (isset($_GET['hello11'])){ add('images/sandals3.jpg', 'Black and White Sandals', 20, $_SESSION["email"]);}
    if (isset($_GET['hello12'])){ add('images/sandals4.jpg', 'Blue Sandals', 32, $_SESSION["email"]);}
    if (isset($_GET['hello13'])){ add('images/basket1.png', 'Light Green Jordans', 75, $_SESSION["email"]);}
    if (isset($_GET['hello14'])){ add('images/basket2.png', 'Black Jordans 3', 80, $_SESSION["email"]);}
    if (isset($_GET['hello15'])){ add('images/basket3.png', 'Blue Check Jordans', 95, $_SESSION["email"]);}
    if (isset($_GET['hello16'])){ add('images/basket4.png', 'White Check Jordans', 100, $_SESSION["email"]);}
    
    function searching()
    {
        $input = $_POST["searchBar"];
        $sql = "SELECT * FROM product_display WHERE title LIKE '%$input%' OR price LIKE '%$input%'";
                $counter = 0;
                $con = mysqli_connect('localhost', 'root', '', 'user');
                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con , $sql);
        while($row = mysqli_fetch_array($result))
        {
            $counter ++;
            ?>
               <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="<?php echo $row['image']?>" alt="" class="img-fluid pb-1" >
                        <div class="figure-caption">
                            <h6><?php echo $row['title'] ?></h6>
                            <h6><?php echo $row['price'] ?></h6>
                            <p><a href='products.php?hello<?php echo $sneakerss['id']?>=true' role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <p><a href='edit.php?editId=<?php echo $sneakerss['id'] ?>' role="button" class="btn btn-warning  text-white ">Edit</a></p>
                        </div>
                    </div>
               </div>
            <?php 
        } 
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footwear</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <?php
include 'includes/header_menu.php';


$textObj = new Text();
$text = $textObj->displayRecordById(5); 
?>

<div class="container" style="margin-top:65px">
    <form class="form-inline " method="post">
      <input class="form-control form-control-lg mr-5 w-75" type="text" placeholder="Search" aria-label="Search" name="searchBar">
        <button method="post" class="btn btn-warning btn-lg text-white mr-4" name="btnSearch">Search</button>
        <!--<input type="submit" method="POST" id="signIn" name="btnSearch" value="Log In" style="float:right;">-->
        <a href='products.php' role="button" class="btn btn-warning btn-lg text-white " name="btnRefresh">Refresh</a>
    </form>
    </br>    
    <div class="jumbotron text-center">
        <h1><?php echo $text['text1']?></h1>
        <p><?php echo $text['text2']?></p>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><?php echo $text['text3']?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $text['text4']?></li>
        </ol>
    </nav>    

    <div class="row text-center" id="sneakers">
    <?php
        if (isset($_POST['btnSearch'])){ searching();}
        else {include 'includes/displayAllProducts.php';}
    ?>
    </div>
    

    <div id="pagination">
            <?php
                $con = mysqli_connect("localhost","root","" ,"user");
                // check if param page exists or not
                if (isset($_GET['p']) && $_GET['p']!="") {
                    $page = $_GET['p'];
                } else {
                    $page = 1;
                }

                $total_records_per_page = 4;
                $offset = ($page - 1) * $total_records_per_page;
                $previous_page = $page - 1;
                $next_page = $page + 1;
                $adjacents = "2";

                $queryNumbersOfPage = "SELECT COUNT(*) As total_records FROM product_display";
                
                $result_count = mysqli_query($con, $queryNumbersOfPage);
                $total_records = mysqli_fetch_array($result_count);
                $total_records = $total_records['total_records'];
                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                $second_last = $total_no_of_pages - 1; // total pages minus 1
            ?>

            <ul class="pagination" >
            <?php if($page > 1){
            echo "<li style='margin:4px;'><a href='?p=1'>&lsaquo;&lsaquo; First Page </a></li>";
            } ?>
                
            <li style='margin:4px;'<?php if($page <= 1){ echo "class='disabled'"; } ?> > 
            <a <?php if($page > 1){
            echo "href='?p=$previous_page'";
            } ?>>Previous</a>
            </li>
                
            <li style='margin:4px;'<?php if($page >= $total_no_of_pages){
            echo "class='disabled'";
            } ?>>
            <a <?php if($page < $total_no_of_pages) {
            echo "href='?p=$next_page'";
            } ?>>Next</a>
            </li>

            <?php if($page < $total_no_of_pages){
            echo "<li style='margin:4px;'><a href='?p=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
            } ?>
            </ul>
        </div>


        <?php include 'includes/footer.php'?>

</body>

</html>