<?php
include "usr/referral/calc.php"; 
?>
<html>
<head>
  <title>KB Affiliate/Referral PHP Script!</title>

</head>
<body>
<h1>Register</h1>
<?php
$err="0";
$err1="";

if( isset($_REQUEST['invcod']) )
{
$invcod=$_REQUEST['invcod'];

if($invcod!='')
{
$qryusrinv="SELECT * FROM scraffiliateusr WHERE usrid='$invcod'";
$rslusrinv=mysql_query($qryusrinv);
$nusrinv = mysql_num_rows($rslusrinv);

if($nusrinv=='0')
{
$invcod="";
		$err="1";
		$err1="Please Enter valid Referral Id<br>";
}
else
{
	if(!isset($_SESSION['invvisited']))
	{
$arrusrinv =  mysql_fetch_row($rslusrinv);

$invurlclkupd=urlClick($invcod,0);	

$_SESSION["invvisited"] = "1";
	}
	
}	

}

}
else
{
$invcod="";
}
?>


<?php

if(isset($_REQUEST['registersub']))
{
$crr="0";
$err2="";
$err3="";
$err4="";
$err5="";
$crr1="";

	$username=$_POST['username'];
	if($username=='')
	{
		$err="1";
		$err2="Please Enter Your User Name<br>";
	}


	$password=$_POST['password'];
	if($password=='')
	{
	$err="1";
	$err3="Please Enter Password<br>";
	}
	
}


if(isset($_REQUEST['registersub']) && $err=="0")
{

	$qryusrchk="SELECT * FROM scraffiliateusr WHERE usrnam='$username'";
	$rslusrchk=mysql_query($qryusrchk);
	$nusrchk = mysql_num_rows($rslusrchk);
    $arrusrchk =  mysql_fetch_row($rslusrchk);
    	
  	if($nusrchk!='0')
 	{
 	$err="1";
	$err4="Username already exists<br>";
 	}
 	else
 	{	
 		$dtetmenow= date("Y-m-d H:i:s" , time());
 		$timestamp=time();
		$act=0;
		$actkey=$timestamp;
		$ipaddress = $_SERVER['REMOTE_ADDR'];
		$usrinvsndmax="10";

		$newusrins = mysql_query ("INSERT INTO scraffiliateusr SET 
		usract='$act', 
		usrnam='$username',
		usrpwd='$password',
		usractkey='$actkey',
		usrip='$ipaddress',
		usrjondtetme='$dtetmenow',
		usrinvby='$invcod',
		usrinvsndmax='$usrinvsndmax'		
		");
		
		
		if($newusrins)
		{
		
		if($invcod!='' && $invcod!='0')
		{		
		$ref1usrid=$invcod;
		$qryusrref1 = "SELECT * FROM scraffiliateusr WHERE usrid='$ref1usrid'";
		$rslusrref1=mysql_query($qryusrref1);
		$arrusrref1 =  mysql_fetch_row($rslusrref1);
		$nusrref1 = mysql_num_rows($rslusrref1);
		
		if($nusrref1!='0')
		{
		$pointsref1=$arrusrref1[22]+5;
		$qryusrref1upd = "UPDATE scraffiliateusr SET 
		usrpoints='$pointsref1' WHERE usrid= '$ref1usrid'";
		$rslusrref1upd = mysql_query($qryusrref1upd);
		
			if($arrusrref1[8]!='0')
			{
	$ref2usrid=$arrusrref1[8];		
	$qryusrref2 = "SELECT * FROM scraffiliateusr WHERE usrid='$ref2usrid'";
	$rslusrref2=mysql_query($qryusrref2);
	$arrusrref2 =  mysql_fetch_row($rslusrref2);
	$nusrref2 = mysql_num_rows($rslusrref2);
	
	if($nusrref2!='0')
				{
				
		$pointsref2=$arrusrref2[22]+3;
		$qryusrref2upd = "UPDATE scraffiliateusr SET 
		usrpoints='$pointsref2' WHERE usrid= '$ref2usrid'";
		$rslusrref2upd = mysql_query($qryusrref2upd);
		
				if($arrusrref2[8]!='0')
				{
	$ref3usrid=$arrusrref2[8];			
	$qryusrref3 = "SELECT * FROM scraffiliateusr WHERE usrid='$ref3usrid'";
	$rslusrref3=mysql_query($qryusrref3);
	$arrusrref3 =  mysql_fetch_row($rslusrref3);
	$nusrref3 = mysql_num_rows($rslusrref3);
	
		$pointsref3=$arrusrref3[22]+1;
		$qryusrref3upd = "UPDATE scraffiliateusr SET 
		usrpoints='$pointsref3' WHERE usrid= '$ref3usrid'";
		$rslusrref3upd = mysql_query($qryusrref3upd);
				}
				}
			}
			}
		}
		
		echo "	
		<table class='border' cellspacing='2' cellpadding='2'>
		
		<tr>
		<td>		
		<table class='border' cellspacing='2' cellpadding='2' width='100%'>
		<tr>
		<td><b>Congratulations!</b></td>
		</tr>
		<tr>
		<td>Registered successfully.</td>
		</tr>
		</table>		
		</td>
		</tr>
		
		<tr>
		<td>		
		<table class='border' cellspacing='2' cellpadding='2' width='100%'>
		<tr>
		<td><b>Username</b> $username</td>
		</tr>
		<tr>
		<td><b>Password</b> $password</td>
		</tr>		
		</table>		
		</td>
		</tr>
		";
		if($invcod!='')
		{
		echo "
		<tr>
		<td><b>Referred by</b> $invcod</td>
		</tr>
		";
		}	
		echo "
		</table>
		";
		}
		else
		{
		echo "
		<table class='border' cellspacing='2' cellpadding='2' width='100%'>
		<tr>
		<td>You were not able to register</td>
		</tr>	
		</table>	
		";
		}
 	}

}
if( (isset($_REQUEST['registersub']) && ($err!="0" ||$crr!="0") ) || (!isset($_REQUEST['registersub'])) )
{
	if(isset($_REQUEST['registersub']) && $err!="0")
	{
	echo "<font color='red'>
	$err1 $err2 $err3 $err4 $err5
	</font><br>";
	}
	if(isset($_REQUEST['registersub']) && $crr!="0")
	{
	echo "<font color='green'>
	$crr1
	</font><br>";
	}
?>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
		<tr>
        <td valign="top">
        <!--Table for the User Login form-->	
		<form method="POST" action="" onsubmit="return registerverify(this.username, this.password)">
         <table width="100%" border="1">
       	
           	<tr>
			<td width="40%"><b>User Name</b></td>
			<td width="60%">
			<input type="text" name="username" value="" size="20">
			</td>
           	</tr>
                       	
           	<tr>
			<td width="40%"><b>Password</b></td>
			<td width="60%"><input type="password" name="password" size="20" value=""></td>
           	</tr>
            
            <tr>
			<td width="40%">Referred By</td>
			<td width="60%">
			<?php
			if($invcod!='')
			{
			echo "$invcod";
			}
			else
			{
			echo "
			<input type='text' name='invcod' value='' size='20'><br>
			<b>If you want to be referred</b><br>
			Enter a valid Referral Id you know OR Enter a value between 1001-1015<br>
			<br>
			<b>If you do not want to be referred</b><br>
			Leave it blank
			$invcod
			";
			}
			?>
			&nbsp;</td>
           	</tr>  
           	                      
            <tr>
			<td colspan='2'>
			<input type='submit' value='Register' name='registersub'>
			<input type='reset' value='Reset' name='reset'>
			<?php
			if($invcod!='')
			{
			echo "<input type='hidden' value='$invcod' name='invcod'>";
			}		
			?>
			</td>
			</tr>
           
      	  	
        </table>
        </form>
<?php
}
?>        
     </td>
    </tr>
   </table>
   <script>

function registerverify(username, password)
//(suf, nam,element1, msg,count)
{
	var passed=false
	
 	if (username.value=='')
 			{
  			alert("Please fill in your User Name")
  			username.focus()
 			}
	else
 	if (username.value==0)
  			{
 			alert("Please fill a valid User Name.")
 			username.focus()  		  			                
 			}
	else
        if (password.value=='')
 			{
  			alert("Please fill Password")
  			password.focus()
 			}
			
	else
 	if (password.value.length >=13 || password.value.length <=3)
  			{
 			alert("Please fill a Password between 4 to 12 characters. ")
 			password.focus()  
  			}			
			
	else
  		passed=true
return passed
}
</script>
</body>
</html>