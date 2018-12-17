<?php include "usr/auth.php"; ?>
<html>

<head>
<title>Welcome <?php echo "$arrusr[2]"; ?>!</title>
</head>

<body>
<?php

echo "<h2>Welcome $arrusr[2]!</h2>";

echo "
<table>
<tr>
<td><b>Referral Link</b></td>
</tr>
<tr>
<td>index.php?page=act/register& invcod=$arrusr[0]<br>
<i>Add your site address before index.php<?i>
</td>
</tr>
</table>
";
?>
<table>

<tr>
<td>You can use points system too.<br>
Display points for user and give weightage to different levels of referral.</td>
</tr>

</table>
</body>

</html>