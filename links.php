<?php
echo "<a href='index.php'>Home</a> | ";
if( isset($_SESSION['sid']) )
	{
echo "
<a href='index.php?page=usr/referral/points'>Points</a> | 
<a href='index.php?page=usr/referral/stats'>Stats</a> | 
<a href='index.php?page=usr/referral/tree'>Referral Tree</a> | 
<a href='index.php?page=usr/referral/invite'>Invite</a> | 
<a href='index.php?page=act/logout'>Logout</a>
";
	}
else
	{	
echo "
<a href='index.php?page=act/login'>Login</a> | 
<a href='index.php?page=act/register'>Register</a>
";
	}

?>