<?php include "usr/auth.php"; ?>
<h2>Invite</h2>
<?php

$dtenow= date("Y-m-d H:i:s" , time());
$tmenow= date(time());
$timestamp=time();
if(isset($_REQUEST['invitesub']))
{

$err="0";

	$recnam=$_POST['recnam'];
	if($recnam=='')
	{
		$err="1";
		$err1_2="Please Enter Receiver Name<br>";
	}
	
	$receml=$_POST['receml'];
	if($receml=='')
	{
		$err="1";
		$err2_2="Please Enter Receiver Email<br>";
	}



}


if(isset($_REQUEST['invitesub']) && $err=="0")
{
$sbj = "Invitation";
$msg = "You are invited";


		$recmsg =
"
You have received an invitation
" .
	
"
-----------------------------------------------------------\n
Invitation Message
-----------------------------------------------------------\n
"
;
		
//$recemlsnd=mail($receml, $sbj, $recmsg, "From: \"$sndnam\" <$sndeml>\r\nReply-To: \"$sndnam\" <$sndeml>");
		
echo "The actual mail sending in demo is disabled<br>";					
				if(@$recemlsnd)
					{
$invsndupd=invSend($uid,0);					
					echo "
			<table border='1'>
			<tr><td colspan='2'>Your invitation</td></tr>
			<tr><td>Subject</td><td>$sbj</td></tr>
			<tr><td colspan='2'>has been sent to</td></tr>
			<tr><td>Email</td><td>$receml</td></tr>
			</table>
						";
	

					}
					
				else
				{
$invsndupd=invSend($uid,0);	
					echo "

			<table border='1'>
			<tr><td colspan='2'>Your invitation</td></tr>
			<tr><td>Subject</td><td>$sbj</td></tr>
			<tr><td colspan='2'>was not sent to</td></tr>
			<tr><td>Email</td><td>$receml</td></tr>
			</table>
						";
				}

}


if( (isset($_REQUEST['invitesub']) && $err!="0") || (!isset($_REQUEST['invitesub'])) )
{
	if(isset($_REQUEST['invitesub']) && $err!="0")
	{
	echo "<font color='red'>
	$err1_2 $err2_2
	</font><br>";
	}
		
$invsendttl=invSend($uid,1);
$invsndtdy=invSend($uid,2);
$invsndlast=invSend($uid,3);
$invsndmax=invSend($uid,4);
	echo "
<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>Total</td>
<td>$invsendttl</td>
</tr>

<tr>
<td>Today</td>
<td>$invsndtdy</td>
</tr>

<tr>
<td>Last Send On</td>
<td>$invsndlast</td>
</tr>
</table>
			";	

if($invsndtdy>=$invsndmax)
{
echo "<font color='red'>Cannot send more Invitations today.</font><br>";
}
else
{
?>
<form method='POST' action='index.php?page=usr/referral/invite' onsubmit="return verifyinvite(this.recnam, this.receml)">
Receiver Name<br><input value='' name='recnam' size='12'><br>
Receiver Email<br><input value='' name='receml' size='12'><br>
<input type='submit' value='Invite' name='invitesub'>
</form>
<?php
}
}
?> 
 <script>

var fieldalias="Email Address field"

var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

function emailcheck(e){
var returnval=emailfilter.test(e.value)
if (returnval==false){
return returnval
e.select()
}
return returnval
}


function verifyinvite(recnam, receml)
{
	var passed=false
 	
	if (recnam.value=='')
 			{
 			alert("Please enter the Recepient Name")
 			recnam.focus()
 			}
	else
	         if (receml.value=='' )
 		{
  		alert("Recepient Email Address can not be blank.")
  		receml.focus()
 		}
 	else 
		 if (!emailcheck(receml))
 			{
 			alert("ERROR : Please enter valid Email Address")
 			receml.focus()
 			}		
 	else 
		 if (sndeml.value==receml.value)
 			{
 			alert("You cannot invite with the same Email Address as Recepient Email Address.")
 			receml.focus()
 			}				 				
else
  passed=true
return passed
}
</script>