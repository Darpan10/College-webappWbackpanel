<?php


$conn=mysqli_connect("localhost","root","","cms");







if(isset($_POST['create']))
{
	
	$text1=$_POST['text1'];
	$text2=$_POST['text2'];
	$text3=$_POST['text3'];
	$text4=$_POST['text4'];
	$text5=$_POST['text5'];
	$text6=$_POST['text6'];
	$upload=$_POST['upload'];


	if((empty($text1)) || (empty($text2))|| (empty($text3))|| (empty($text4))|| (empty($text5))|| (empty($text6)))
	{
	header('Location:message.php');
    exit;

	}
	else 
	{

	$query= "INSERT INTO posts (text1,text2,text3,text4,text5,text6,upload)values('$text1','$text2','$text3','$text4','$text5','$text6','$upload')";
	$res = mysqli_query($conn, $query);
	
}
}
?>


