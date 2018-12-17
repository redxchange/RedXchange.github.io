
<html>
<head>
<title>Logout</title>
</head>
<body>
<h2>Logout</h2>


<table border="0" width="100%">
  <tr>
    <td width="100%" valign="top">
    <?php

if( isset($_SESSION['sid']))
	{
	
	if( isset($_SESSION['sid']) )
	{
		$old_user = $_SESSION['sid'];
		unset($_SESSION['sid']);
		unset($_SESSION['usrvstd']);
	}	
			
		session_destroy();
		if(!empty($old_user))
		{
			echo "<font color='#0000FF'>You have Logged out safely.</font><br>Thanx for using our services.";
		}
		else
		{
			echo "You were not Logged in but came to this page somehow.<br>";	
		}
	
	}
else
	{
			echo "You were not Logged in but came to this page somehow.<br>";	
	}
?>
    </td>
  </tr>
</table>
</body>
</html>