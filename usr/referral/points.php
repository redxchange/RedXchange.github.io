<?php include "usr/auth.php"; ?>
<h2>Points</h2>

<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>Points are awarded on two basis. You can change these points awarding method. Direct points and Indirect Points.<br>
<b>Direct Points</b> are awarded when someone clicks your Referral URL, an Invitation is Send, your profile is visited.
1 point is awarded for each action. For <b>referrals</b> 5 points for 1st level, 3 points for 2nd level and 1 point for 3rd level 
referral is awarded.<br>
<b>Indirect Points</b> are the weightage points from referrals points. 50% for 1st level referral direct points, 30% for 2nd level
referral direct points, 10% for 3rd level referral direct points.
</td>
</tr>

</table>

<?php
$pointsdirect=$arrusr[22];
$pointsindirect=$arrusr[23];
$pointsttl=$pointsdirect+$pointsindirect;

echo "
<table border='1' cellpadding='1' cellspacing='1'>

<tr>
<td>Direct Points</td>
<td>$pointsdirect</td>
</tr>

<tr>
<td>Indirect Points</td>
<td>$pointsindirect</td>
</tr>

<tr>
<td>Total</td>
<td>$pointsttl</td>
</tr>

</table>
";
?>