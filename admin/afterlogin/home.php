<?php
$id=1;

$conn=mysqli_connect("localhost","root","","cms");







if(isset($_POST['next']))
{
	
	$message=$_POST['message'];
	$text2=$_POST['text2'];
	$text3=$_POST['text3'];
	$text4=$_POST['text4'];
	$text5=$_POST['text5'];
	$coverpic1=$_POST['coverpic1'];
	$coverpic2=$_POST['coverpic2'];
	$gpic1=$_POST['gpic1'];
	$gpic2=$_POST['gpic2'];
	$gpic3=$_POST['gpic3'];
	
	if((empty($message)) || (empty($text2))|| (empty($text3))|| (empty($text4))|| (empty($text5)))
	{
	header('Location:message.php');
    exit;

	}
	else 
	{

	$query= "INSERT INTO home (message,text2,text3,text4,text5,coverpic1,coverpic2,gpic1,gpic2,gpic3)values('$message','$text2','$text3','$text4','$text5','$coverpic1','$coverpic2','$gpic1','$gpic2','$gpic3')";
	$res=mysqli_query($conn, $query);
	 if($res)
	 {
	 	header('Location:news.php');
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
    <a class="navbar-brand" >home</a>
  </nav>
</div>
    

     
<div class="input"style="margin-top:7%;margin-left:2%;margin-bottom:10%;">

  <form action="" method="post">
 
 

<div class="form-group">
    <label for="message">Message From Dean:</label>
    <textarea class="form-control" id="Message" rows="3" name="message"></textarea>
  </div>
<h3>IOE FOCUS AREA:</h3>
<div class="form-group">
    <label for="t2">text2:</label>
    <textarea class="form-control" id="t2" rows="3" name="text2"></textarea>
  </div>

<div class="form-group">
    <label for="t3">text3:</label>
    <textarea class="form-control" id="t3" rows="3" name="text3"></textarea>
  </div>

<div class="form-group">
    <label for="t4">text4:</label>
    <textarea class="form-control" id="t4" rows="3" name="text4"></textarea>
  </div>

<div class="form-group">
    <label for="t5">text5:</label>
    <textarea class="form-control" id="t5" rows="3" name="text5"></textarea>
  </div>


  <label>cover pictures</label>

 <div class="upload">
<div class="file btn btn-xs ">
              cover photo
              <input type="file" name="coverpic1" value="upload">
            </div>
          </div>
            <br>
            <br>
<div class="upload">
<div class="file btn btn-xs ">
              cover photo
              <input type="file" name="coverpic2" value="upload">
            </div>
          </div>
            <br>
            <br>
    
<label>Gallery Photos:</label>


 <div class="upload">
<div class="file btn btn-xs ">
              Gallery photo
              <input type="file" name="gpic1" value="upload">
            </div>
          </div>
            <br>
            <br>




 <div class="upload">
<div class="file btn btn-xs ">
              gallery photo
              <input type="file" name="gpic2" value="upload">
            </div>
          </div>
            <br>
            <br>

 <div class="upload">
<div class="file btn btn-xs ">
              gallery photo
              <input type="file" name="gpic3" value="upload">
            </div>
          </div>
            <br>
            <br>



<button type="submit" class="btn btn-primary" value="next" name="next">NEXT</button>



</form>
</div>

  

  
</body>

</html>