<html>
<head>
  <title>KB Affiliate/Referral PHP Script!</title>

</head>
<body>
<h1>Login</h1>
<?php

if(isset($_REQUEST['loginsub']))
{

$err="0";
$crr="0";
$err1="";
$err1_1="";
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


if(isset($_REQUEST['loginsub']) && $err=="0")
{

	$qryusrchk="SELECT * FROM scraffiliateusr WHERE usrnam='$username' AND usrpwd='$password'";
	$rslusrchk=mysql_query($qryusrchk);
	$nusrchk = mysql_num_rows($rslusrchk);
    $arrusrchk =  mysql_fetch_row($rslusrchk);
    	
  	if($nusrchk=='0')
 	{
 	$err="1";
	$err4="Username/Password does not match<br>";
 	}
 	else
 	{
 	$_SESSION["sid"] = $arrusrchk[0];
 	$loginurl="index.php";
 	echo "<meta http-equiv='refresh' content='0;URL=$loginurl'>";
 	}

}




if( (isset($_REQUEST['loginsub']) && $err!="0") || (!isset($_REQUEST['loginsub'])) )
{
	if(isset($_REQUEST['loginsub']) && $err!="0")
	{
	echo "<font color='red'>
	$err1 $err1_1 $err2 $err3 $err4 $err5
	</font><br>";
	}

?>

<table  border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
		<tr>
        <td width="60%" valign="top">
        <!--Table for the User Login form-->	
		<form method="POST" action="" onsubmit="return loginverify(this.username, this.password, this.captcha)">
         <table width="70%" border="1">
            	<tr>
			<td width="40%">User Name: user</td>
			<td width="60%">Password: password</td>
           	</tr>          	
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
			<td colspan='2'>
			<input type='submit' value='Login' name='loginsub'>
			<input type='reset' value='Reset' name='reset'>

			</td>
			</tr>
           
      	  	
        </table>
        </form>
<?php
}
	elseif(isset($_REQUEST['loginsub']) && $crr!="0")
	{
	echo "<font color='green'>
	$crr1
	</font><br>";
	}

?>        
     </td>
    </tr>
   </table>
   <script>

function loginverify(username, password, captcha)
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
	if(captcha.value=='')
 		{
  		alert("Please fill the value in Real User Check")
  		captcha.focus()
 		}  				
			
	else
  		passed=true
return passed
}
</script>
</body>
</html>