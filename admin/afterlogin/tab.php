
<?php



$conn=mysqli_connect("localhost","root","","cms");

$sql="SELECT home.id,home.message,home.text2,home.text3,home.text4,home.text5,home.coverpic1,home.coverpic2,home.gpic1,home.gpic2,home.gpic3,news.date1,news.news1,news.date2,news.news2,news.date3,news.news3,news.cover,about.keyp,about.central,about.tha,about.pur FROM home,news,about WHERE home.id=news.id=about.id ORDER BY home.id";
$result=$conn->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

<div class="container-fluid">


<table class="table table-striped"style="margin-right: 10%;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">message from dean</th>
      <th scope="col">text2</th>
      <th scope="col">text3</th>
      <th scope="col">text4</th>
      <th scope="col">text5</th>
      <th scope="col">coverpic1</th>
      <th scope="col">coverpic2</th>
      <th scope="col">gpic1</th>
      <th scope="col">gpic2</th>
      <th scope="col">date1</th>
      <th scope="col">news1</th>
      <th scope="col">date2</th>
      <th scope="col">news2</th>
      <th scope="col">date3</th>
      <th scope="col">news3</th>
      <th scope="col">keyp</th>
      <th scope="col">central</th>
      <th scope="col">tha</th>
      <th scope="col">pur</th>
      
    </tr>
  </thead>
  



  <tbody>
    <?php while ($row=$result->fetch_assoc()) { ?>
    
    <tr>
      <th><?php echo ($row['id']);?></th>
      
      <td><?php echo ($row['message']);?></td>
      <td><?php echo ($row['text2']);?></td>
      <td><?php echo ($row['text3']);?></td>
      <td><?php echo ($row['text4']);?></td>
      <td><?php echo ($row['text5']);?></td>
      <td><?php echo ($row['coverpic1']);?></td>
      <td><?php echo ($row['coverpic2']);?></td>
      <td><?php echo ($row['gpic1']);?></td>
      <td><?php echo ($row['gpic2']);?></td>
      <td><?php echo ($row['date1']);?></td>
      <td><?php echo ($row['news1']);?></td>
      <td><?php echo ($row['date2']);?></td>
      <td><?php echo ($row['news2']);?></td>
      <td><?php echo ($row['date3']);?></td>
      <td><?php echo ($row['news3']);?></td>
      <td><?php echo ($row['keyp']);?></td>
      <td><?php echo ($row['central']);?></td>
      <td><?php echo ($row['tha']);?></td>
      <td><?php echo ($row['pur']);?></td>
      
    </tr>
    <tr>
      
     <?php } ?>
  </tbody>
</table>



</div>
</tr>


</html>