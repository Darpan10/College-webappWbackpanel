
<?php
$id=1;

$conn=mysqli_connect("localhost","root","","cms");
if(isset($_POST['next']))
{
	
	$date1=$_POST['date1'];
	$news1=$_POST['news1'];
	$date2=$_POST['date2'];
	$news2=$_POST['news2'];
	$date3=$_POST['date3'];
	$news3=$_POST['news3'];
	$cover=$_POST['cover'];


	if((empty($date1)) || (empty($news1))|| (empty($date2))|| (empty($news2))|| (empty($date3)) || (empty($news3)))
	{
	header('Location:message.php');
    exit;

	}
	else 
	{

	$query= "INSERT INTO news (date1,news1,date2,news2,date3,news3,cover)values('$date1','$news1','$date2','$news2','$date3','$news3','$cover')";
	$res=mysqli_query($conn, $query);
	 if($res)
	 {
	 header('Location:about.php');
	 	exit();
	 }


	
}
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="new_page_index">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
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



    
    <title>Hello, world!</title>
  

  </head>
  <body>


</ul>
</div>


</div>
</div>
</div>


<div class="container">
  <nav class="navbar navbar-expand-lg"style="background-color:#2e353d;color:white ;">
    <a class="navbar-brand">news</a>
  </nav>
</div>
    

     
<div class="input"style="margin-top:7%;margin-left:2%;margin-bottom:10%;">

  <form action="" method="post">
 
 

<div class="form-group">
    

<div class="form-group">
    <label for="t2">date:</label>
    <textarea class="form-control" id="date1" rows="2" name="date1"></textarea>
  </div>

<div class="form-group">
    <label for="t3">news:</label>
    <textarea class="form-control" id="news1" rows="3" name="news1"></textarea>
  </div>

<div class="form-group">
    <label for="t4">date:</label>
    <textarea class="form-control" id="date2" rows="2" name="date2"></textarea>
  </div>

<div class="form-group">
    <label for="t5">news:</label>
    <textarea class="form-control" id="news2" rows="3" name="news2"></textarea>
  </div>

<div class="form-group">
    <label for="t6">date:</label>
    <textarea class="form-control" id="date3" rows="2" name="date3"></textarea>
  </div>

  <div class="form-group">
    <label for="t5">news:</label>
    <textarea class="form-control" id="news3" rows="3" name="news3"></textarea>
  </div>

  <label>cover pictures</label>

 <div class="upload">
<div class="file btn btn-xs">
             
              <input type="file" name="cover" value="upload">
            </div>
          </div>
            <br>
            <br>
  </div>
<button type="submit" class="btn btn-primary" value="next" name="next">next</button>



</form>
</div>

  

  
</body>

</html>