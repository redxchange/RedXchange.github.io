<?php
include "usr/referral/calc.php"; 
?>
<?php

$dtetmenow= date("Y-m-d H:i:s" , time());

if( isset($_SESSION['sid']) )
	{
$uid=$_SESSION["sid"];

$qryusrchk = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusrchk=mysql_query($qryusrchk);
//$arrusrchk =  mysql_fetch_row($rslusrchk);
$nusrchk = mysql_num_rows($rslusrchk);

if($nusrchk!='0')
{
  if( !isset($_SESSION['usrvstd']) )
  {
$_SESSION['usrvstd'] = "$uid";
$usrvstupd=usrVisits($uid,0);
referralIndirectPoints($uid);  
  }

$qryusr = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusr=mysql_query($qryusr);
$arrusr =  mysql_fetch_row($rslusr);
$nusr = mysql_num_rows($rslusr);
}
else
{
echo "<font color='red'>User does not exist<br></font>";
exit();
}
	
}
else
{
echo "<font color='red'>You are not authorized to access this page<br></font>";
exit();
}
?>