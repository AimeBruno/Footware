<?php
  
  // Include database file
  include 'includes/displaysneakers.php';

  $sneakersObj = new Sneakers();

  // Edit customer record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $sneakers = $sneakersObj->displayRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['update'])) {
    $sneakersObj->updateRecord($_POST);
  }  
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Footware-edit </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <style>
      .form-group
      {
          margin-left:4px;
          margin-right:4px;
      }
  </style>
</head>
<body>


<div class="container">
  <form action="edit.php" method="POST">
    <h2 class="text-warning">Editing Item in progress.</h2>
    <div class="card">
    <div class="form-group">
      <label for="name">Image:</label><br />
      <div class="card" style='max-width: 12rem;'>
        <img src="<?php echo $sneakers['image']; ?>" alt='' class='img-fluid pb-1'>
      </div>
      <!--<input type="text" class="form-control" name="image" value="" required="" readonly>-->
    </div>
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control" name="title" value="<?php echo $sneakers['title']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="username">Price:</label>
      <input type="text" class="form-control" name="price" value="<?php echo $sneakers['price']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $sneakers['id']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
        </div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>