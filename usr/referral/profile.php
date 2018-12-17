<?php include "usr/auth.php"; ?>
<h2>Profile</h2>
<?php
if( isset($_GET['refusrid']) )
{
$refusrid=$_GET["refusrid"];
$usrprfviewcheck=prfViewCheck($uid,$refusrid,0);	
}
else
{
echo "<font color='red'>User not selected</font><br>";
}

?>