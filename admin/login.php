<?php




if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$query = "SELECT * FROM login where email='$email' and password = '$password'";
$res=mysqli_query($conn, $query);
$rowcount=mysqli_num_rows($res);
if ($rowcount==true) {


header('Location: afterlogin\index.php');
 exit();


}
  else
  {
    echo"invalid";
  }
    }
?>
