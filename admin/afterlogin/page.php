


<?php
$conn=mysqli_connect("localhost","root","","cms");

$results=mysqli_query($conn,"SELECT * FROM posts");



//delete

if(isset($_GET['delete'])) {


$id=$_GET['delete'];
mysqli_query($conn,"DELETE FROM posts WHERE id='$id'");
header('location:page.php');
}


if(isset($_GET['submit'])) {


$id=$_POST['id'];
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="i"> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="page.css.css" rel="stylesheet">



    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
 






<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="index_dashboard.php">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="page.php"><i class="fa fa-gift fa-lg"></i>Pages</a>
                </li>
                

                  
               

                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="home.php"><i class="fa fa-car fa-lg"></i> New Page </a>
                </li>
                

                 <li>
                  <a href="">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>

                 <li>
                  <a href="">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>

</ul>
</div>
</div>



<div class="table">

 <table class="table">
  
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">text1</th>
      <th scope="col">text2</th>
      <th scope="col">text3</th>
      <th scope="col">text4</th>
      <th scope="col">text5</th>
      <th scope="col">text6</th>
      <th scope="col">upload</th>
      <th scope="col">action</th>


      
    </tr>
  </thead>
  <tbody>
    <?php while ($row=mysqli_fetch_array($results)) { ?>
    <tr>
      <th><?php echo ($row['id']);?></th>
     
      <td><?php echo ($row['text1']);?></td>
      <td><?php echo ($row['text2']);?></td>
      <td><?php echo ($row['text3']);?></td>
      <td><?php echo ($row['text4']);?></td>
      <td><?php echo ($row['text5']);?></td>
      <td><?php echo ($row['text6']);?></td>
      
      <td><?php echo ($row['upload']);?></td>


       <td><button type="button3" class="btn btn-danger" name="delete" value="delete" ><a href="page.php?delete=<?php echo $row['id'];?>"style="color:#ffffff">delete</a></button></td>

       </tr>
    
    <?php } ?>
  </tbody>
</table>
</div>



<form action="" method="post">
  <div class="form-group">
    <label for="id">select id </label>

    <input type="id" class="form-control" id="id" aria-describedby="emailHelp" placeholder="id">
  <button type="button" class="btn btn-primary btn-md" name="submit" value="submit">submit</button>
  </div>
</form>



</body>
</html>