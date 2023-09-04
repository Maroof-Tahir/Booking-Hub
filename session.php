
<?php
session_start();
$conn=new mysqli('localhost','root','','first');
if(isset($_POST['login']))
{
 $session1=$_POST['username'];
 $session=$_POST['password'];
 $query="SELECT username,password FROM cs WHERE username='$session1' && password='$session'";
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
 if($total==1)
 {
    header("Location: afterlog.php");
 }
 else
 {
    header("location:lo.php?error=1");
 }
}

?>