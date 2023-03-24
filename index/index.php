
<?php


$conn=mysqli_connect("localhost","root","","cms");

$id=isset($_GET["id"]) ? (int) $_GET["id"] : 0;

$query = "SELECT home.id,home.message,home.text2,home.text3,home.text4,home.text5,home.coverpic1,home.coverpic2,home.gpic1,home.gpic2,home.gpic3,news.date1,news.news1,news.date2,news.news2,news.date3,news.news3,news.cover,about.keyp,about.central,about.tha,about.pur FROM home,news,about WHERE home.id=about.id=news.id=$id";
$r=mysqli_query($conn,$query);
$home= mysqli_fetch_assoc($r);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <script src="../js/jquery.js"></script>

<script>



</script>


  <body>
  
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<style type="text/css">
  .dropdown:hover>.dropdown-menu{
  display:block;
}




</style>




<div class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" style="margin-top: -.5% ">
    
      <a><img src="logo"></a>
    
    <ul class="nav navbar-nav pull-right" style="margin-top:3.5%;margin-right: 4%;">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="..\details\news\news.php">news</a></li>
      <li><a href="..\details\event\event.php">events</a></li>
      <li><a href="..\details\about\about.php">about</a></li>
      
<li> <div class="dropdown"style="margin-top: 25%;
    margin-right: auto;
    margin-left: 20%;
    color: #777;">
  program
  <div class="dropdown-menu" >
    <div class="yes"style="margin-left:5%">
    <a class="dropdown-item" href="..\details\program\under.php" style="color:#777">Under graduate</a><br>
    <a class="dropdown-item" href="..\details\program\grad.php"style="color:#777">Graduate</a><br>
    <a class="dropdown-item" href="..\details\program\post.php"style="color:#777">Post graduate</a>
  </div>
  </div>
</div>
</li>
</ul>
</div>
</nav>
 </div>

<hr></hr>
<?php include("index2.php")?>
<hr> </hr>

<?php include("index3.php")?>


</body>





</html>


