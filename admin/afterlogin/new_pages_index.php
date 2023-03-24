
<?php include("new_page.php")?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="new_page_index.css">
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

<link rel="stylesheet" href="new_page_index.css">

    
    <title>Hello, world!</title>
  

  </head>
  <body>







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
                  <a href="new_pages_index.php"><i class="fa fa-car fa-lg"></i> New Page </a>
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



    

     
<div class="input">

  <form action="" method="post">
 
 

<div class="form-group">
    <label for="t1">text1:</label>
    <textarea class="form-control" id="t1" rows="3" name="text1"></textarea>
  </div>

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

<div class="form-group">
    <label for="t6">text6:</label>
    <textarea class="form-control" id="t6" rows="3" name="text6"></textarea>
  </div>

 <div class=upload>
<div class="file btn btn-xs btn-primary">
              Upload
              <input type="file" name="upload" value="upload">
            </div>
          </div>
            <br>
            <br>


<button type="submit" class="btn btn-primary" value="create" name="create">create</button>



</form>
</div>

  

  
</body>

</html>