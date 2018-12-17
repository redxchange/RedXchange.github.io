<?php include "usr/auth.php"; ?>
<h2>Stats</h2>
<?php

$reflvl1=referralCount($uid,1);
$reflvl2=referralCount($uid,2);
$reflvl3=referralCount($uid,3);

$usrvstttl=usrVisits($uid,1);
$usrvsttdy=usrVisits($uid,2);
$usrvstlast=usrVisits($uid,3);

$profilevstttl=prfViews($uid,1);
$profilevsttdy=prfViews($uid,2);
$profilevstlast=prfViews($uid,3);

$invsendttl=invSend($uid,1);
$invsndtdy=invSend($uid,2);
$invsndlast=invSend($uid,3);

$urlclkttl=urlClick($uid,1);
$urlclktdy=urlClick($uid,2);
$urlclklast=urlClick($uid,3);

echo "
<table>

<tr>
<td><b>No. of Referrals</b></td>
</tr>

<tr>
<td>

<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>1st Level</td>
<td>$reflvl1</td>
</tr>

<tr>
<td>2nd Level</td>
<td>$reflvl2</td>
</tr>

<tr>
<td>3rd Level</td>
<td>$reflvl3</td>
</tr>
</table>

</td>
</tr>

<tr>
<td><b>Your Visits</b></td>
</tr>

<tr>
<td>

<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>Total</td>
<td>$usrvstttl</td>
</tr>

<tr>
<td>Today</td>
<td>$usrvsttdy</td>
</tr>

<tr>
<td>Last Visited On</td>
<td>$usrvstlast</td>
</tr>
</table>

</td>
</tr>


<tr>
<td><b>Profile Views</b></td>
</tr>

<tr>
<td>

<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>Total</td>
<td>$profilevstttl</td>
</tr>

<tr>
<td>Today</td>
<td>$profilevsttdy</td>
</tr>

<tr>
<td>Last Viewed On</td>
<td>$profilevstlast</td>
</tr>
</table>

</td>
</tr>

<tr>
<td><b>Invitations</b></td>
</tr>

<tr>
<td>

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

</td>
</tr>

<tr>
<td><b>URL Clicks</b></td>
</tr>

<tr>
<td>

<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>Total</td>
<td>$urlclkttl</td>
</tr>

<tr>
<td>Today</td>
<td>$urlclktdy</td>
</tr>

<tr>
<td>Last Clicked On</td>
<td>$urlclklast</td>
</tr>
</table>

</td>
</tr>

</table>
";

?>