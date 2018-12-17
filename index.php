<?php SESSION_START(); ?>
<?php
include "config.php";
?>
<html>
<head>
  <title>KB Affiliate/Referral PHP Script!</title>

</head>
<body>
<h1>Demo Affiliate/Referral</h1>
<p>The demo here shows the Affiliate/Referral for a User.<br>
<?php include "links.php"; ?>

<table>
<tr>
<td>
<br>
    <?php
    if(!isset($_REQUEST['page']))
	{
if( isset($_SESSION['sid']))
{
$pageinc="usr/home.php";
}
else
{
$pageinc="home.php";
}	

include "$pageinc";	

	}
else
{
    $page = $_GET['page'];
    $pageinc=$page.".php";
if(file_exists($pageinc))
    {
     include "$pageinc";
    }
else
    {
      echo "<font color='red'>Page does not exist</font>";
    }
}
    ?> 
    
</td>

<td><?php include "topreferrals.php"; ?>
</td>
</tr>
</table>

</body>
</html>
