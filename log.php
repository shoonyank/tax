<?php
if(isset($_POST['login']))
{
   $user_name = addslashes(strip_tags($_POST['user_name']));
   $user_pass = addslashes(strip_tags($_POST['user_pass']));
   if (!$user_name||!$user_pass){
      echo "Error: Enter some username and password<br>Please wait...";
      header( "refresh:1");
      }
   else
   {
    //log in
    $login = $cxn->query("SELECT * FROM login WHERE user='".$user_name."'");
    if ($login->num_rows==0){
       echo "No such user<br>Try again...";
      header( "refresh:1");
       }
    else
    {
      while ($login_row = $login->fetch_assoc())
      {
      	$user_pass_db = $login_row['pass'];
      	$user_id=$login_row['sn'];
      	if ($user_pass!=$user_pass_db){
          echo "Incorrect password<br>Try again...";
          header( "refresh:1");
          }
       else
       {
       	session_start();
        $_SESSION['newsigned_in'] = true;
        $_SESSION['newuser_name'] = $user_name; //assign session
    	$_SESSION['newuser_id'] = $user_id;
	header("location:?run=0");
         }
        }
     }
   }  
}
else
{

  if (isset($_SESSION['newsigned_in']))
  {
  	$query="SELECT * FROM  login  WHERE user = '".$_SESSION['newuser_name']."'";
  	$sqlq=mysqli_query($cxn,$query) or die ("Could not execute query");
	while($_sqlq=mysqli_fetch_assoc($sqlq))
   	{
   		extract($_sqlq);
   		echo "<form action='' method='POST'>You are logged in. <input type='submit' name='logout' value='Log out'></form>";
   	}
   	if (isset($_POST['logout']))
	{
		$_SESSION['newsigned_in'] = NULL;
		$_SESSION['newuser_name'] = NULL;
		$_SESSION['newuser_id']   = NULL;
		session_destroy();
		header("location:?run=0");
	}
  }
  else
  {
   	echo "<form action='' method='POST'>";
   	echo "Username: <input type='text' name='user_name' maxlength='' style='width:200px;'><br>";
   	echo "Password: <input type='password' name='user_pass' maxlength='' style='width:200px;'><br>";
   	echo "<input type='submit' name='login' value='Log in'>";
   	echo "</form>";
  }
}
?>
