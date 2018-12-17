<?php include "usr/auth.php"; ?>
<?php

$qryusrreftree = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusrreftree=mysql_query($qryusrreftree);
$arrusrreftree =  mysql_fetch_row($rslusrreftree);
//$nusrreftree = mysql_num_rows($rslusrreftree);

echo "
<ul>
<li>$arrusrreftree[2]</li>
";
$qryusrreftree1 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$uid'";
$rslusrreftree1=mysql_query($qryusrreftree1);
//$arrusrreftree1 =  mysql_fetch_row($rslusrreftree1);
$nusrreftree1 = mysql_num_rows($rslusrreftree1);

for ($i=0; $i<$nusrreftree1; $i++)
{
$arrusrreftree1 =  mysql_fetch_row($rslusrreftree1);
if($nusrreftree1!='0')
{
echo "
<ul>
<li><a href='index.php?page=usr/referral/profile&refusrid=$arrusrreftree1[0]'>$arrusrreftree1[2]</a></li>
";

	$qryusrreftree2 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$arrusrreftree1[0]'";
	$rslusrreftree2=mysql_query($qryusrreftree2);
	//$arrusrreftree2 =  mysql_fetch_row($rslusrreftree2);
	$nusrreftree2 = mysql_num_rows($rslusrreftree2);
	
		for ($j=0; $j<$nusrreftree2; $j++)
		{
		$arrusrreftree2 =  mysql_fetch_row($rslusrreftree2);
		if($nusrreftree2!='0')
		{
		echo "
		<ul>
		<li><a href='index.php?page=usr/referral/profile&refusrid=$arrusrreftree2[0]'>$arrusrreftree2[2]</a></li>
		";
		
		$qryusrreftree3 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$arrusrreftree2[0]'";
		$rslusrreftree3=mysql_query($qryusrreftree3);
		//$arrusrreftree3 =  mysql_fetch_row($rslusrreftree3);
		$nusrreftree3 = mysql_num_rows($rslusrreftree3);
				
				for ($k=0; $k<$nusrreftree3; $k++)
				{
				$arrusrreftree3 =  mysql_fetch_row($rslusrreftree3);	
			if($nusrreftree3!='0')
			{
			echo "
			<ul>
			<li><a href='index.php?page=usr/referral/profile&refusrid=$arrusrreftree3[0]'>$arrusrreftree3[2]</a></li>
			";
			echo "
			</ul>
			";
			}
				
				}
				
		echo "
		</ul>
		";
		}
		
		}


echo "
</ul>
";
}

}


echo "
</ul>
";
?>