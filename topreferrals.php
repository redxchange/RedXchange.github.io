<table border="1" width='150px'>
<tr>
<td>
<b>Top Referrals</b>
</td>
</tr>

<tr>
<td>

<?php

$dsplynumreftop="5";

$qryreftop = "SELECT usrnam, (usrpoints + usrpointsindirect) AS maxpoints FROM scraffiliateusr ORDER BY maxpoints desc";
$rslreftop=mysql_query($qryreftop);
//$arrreftop =  mysql_fetch_row($rslreftop);
$nreftop = mysql_num_rows($rslreftop);

for ($i=0; $i<$dsplynumreftop; $i++)
{
$arrreftop =  mysql_fetch_row($rslreftop);

echo "$arrreftop[0]<br>";
}
?>
</td>
</tr>
</table>