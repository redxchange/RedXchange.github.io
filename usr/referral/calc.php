<?php

function referralCount($uid,$reflvl)
{

$qryusrref1 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$uid'";
$rslusrref1=mysql_query($qryusrref1);
//$arrusrref1 =  mysql_fetch_row($rslusrref1);
$nusrref1 = mysql_num_rows($rslusrref1);

$reflvl1=$nusrref1;
$ttlreflvl2="0";
$ttlreflvl3="0";

for ($i=0; $i<$nusrref1; $i++)
{
$arrusrref1 =  mysql_fetch_row($rslusrref1);

	$qryusrref2 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$arrusrref1[0]'";
	$rslusrref2=mysql_query($qryusrref2);
	//$arrusrref2 =  mysql_fetch_row($rslusrref2);
	$nusrref2 = mysql_num_rows($rslusrref2);
	$ttlreflvl2=$ttlreflvl2+$nusrref2;


		for ($j=0; $j<$nusrref2; $j++)
		{
		$arrusrref2 =  mysql_fetch_row($rslusrref2);

		$qryusrref3 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$arrusrref2[0]'";
		$rslusrref3=mysql_query($qryusrref3);
		//$arrusrref3 =  mysql_fetch_row($rslusrref3);
		$nusrref3 = mysql_num_rows($rslusrref3);
		$ttlreflvl3=$ttlreflvl3+$nusrref3;
		}
}
$reflvl2=$ttlreflvl2;
$reflvl3=$ttlreflvl3;
if($reflvl=='1')
{
return($reflvl1);
}
elseif($reflvl=='2')
{
return($reflvl2);
}
elseif($reflvl=='3')
{
return($reflvl3);
}

}


function usrVisits($uid,$act)
{
$dtenow= date("Y-m-d" , time());
$dtetmenow= date("Y-m-d H:i:s" , time());

$qryusrref = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusrref=mysql_query($qryusrref);
$arrusrref =  mysql_fetch_row($rslusrref);
//$nusrref = mysql_num_rows($rslusrref);

$dteformatvst= date('Y-m-d',strtotime($arrusrref[9]));
		if($dtenow==$dteformatvst)
		{
		$usrvsttdy=$arrusrref[11];
		}
		else
		{
		$usrvsttdy="0";
$qryusrvsttdyupd = "UPDATE scraffiliateusr SET
usrvsttdy='$usrvsttdy' WHERE usrid= '$uid'";
$rslusrvsttdyupd = mysql_query($qryusrvsttdyupd);
		}
$usrvstlast=$arrusrref[9];
$usrvstttl=$arrusrref[10];

if($act=='0')
{
$usrvstttl++;
$usrvsttdy++;
$qryusrvstupd = "UPDATE scraffiliateusr SET
usrlstvstdtetme='$dtetmenow', usrvst='$usrvstttl', usrvsttdy='$usrvsttdy' WHERE usrid= '$uid'";
$rslusrvstupd = mysql_query($qryusrvstupd);

if($dtenow!=$dteformatvst)
{
$pointsnum="1";
pointsinc($uid,$pointsnum);
}

}
if($act=='1')
{
return($usrvstttl);
}
elseif($act=='2')
{
return($usrvsttdy);
}
elseif($act=='3')
{
return($usrvstlast);
}
}



function prfViews($uid,$act)
{
$dtenow= date("Y-m-d" , time());
$dtetmenow= date("Y-m-d H:i:s" , time());

$qryusrref = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusrref=mysql_query($qryusrref);
$arrusrref =  mysql_fetch_row($rslusrref);
//$nusrref = mysql_num_rows($rslusrref);

$dteformatprf= date('Y-m-d',strtotime($arrusrref[12]));
		if($dtenow==$dteformatprf)
		{
		$profilevsttdy=$arrusrref[14];
		}
		else
		{
		$profilevsttdy="0";
$qryprfvsttdyupd = "UPDATE scraffiliateusr SET
usrprfvsttdy='$profilevsttdy' WHERE usrid= '$uid'";
$rslprfvsttdyupd = mysql_query($qryprfvsttdyupd);
		}
$profilevstlast=$arrusrref[12];
$profilevstttl=$arrusrref[13];

if($act=='0')
{
$profilevstttl++;
$profilevsttdy++;
$qryprfvstupd = "UPDATE scraffiliateusr SET
usrprflstvstdtetme='$dtetmenow', usrprfvst='$profilevstttl', usrprfvsttdy='$profilevsttdy' WHERE usrid= '$uid'";
$rslprfvstupd = mysql_query($qryprfvstupd);

$pointsnum="1";
pointsinc($uid,$pointsnum);
}
if($act=='1')
{
return($profilevstttl);
}
elseif($act=='2')
{
return($profilevsttdy);
}
elseif($act=='3')
{
return($profilevstlast);
}
}


function invSend($uid,$act)
{
$dtenow= date("Y-m-d" , time());
$dtetmenow= date("Y-m-d H:i:s" , time());

$qryusrref = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusrref=mysql_query($qryusrref);
$arrusrref =  mysql_fetch_row($rslusrref);
//$nusrref = mysql_num_rows($rslusrref);

$dteformatinv= date('Y-m-d',strtotime($arrusrref[15]));
		if($dtenow==$dteformatinv)
		{
		$invsndtdy=$arrusrref[17];
		}
		else
		{
		$invsndtdy="0";
$qryinvsndtdyupd = "UPDATE scraffiliateusr SET
usrinvsndtdy='$invsndtdy' WHERE usrid= '$uid'";
$rslinvsndtdyupd = mysql_query($qryinvsndtdyupd);
		}

$invsndlast=$arrusrref[15];
$invsendttl=$arrusrref[16];
$invsendmax=$arrusrref[21];

if($act=='0')
{
$invsendttl++;
$invsndtdy++;
$qryinvsndupd = "UPDATE scraffiliateusr SET
usrinvlstsnddtetme='$dtetmenow', usrinvsnd='$invsendttl', usrinvsndtdy='$invsndtdy' WHERE usrid= '$uid'";
$rslinvsndupd = mysql_query($qryinvsndupd);

$pointsnum="1";
pointsinc($uid,$pointsnum);
}
if($act=='1')
{
return($invsendttl);
}
elseif($act=='2')
{
return($invsndtdy);
}
elseif($act=='3')
{
return($invsndlast);
}
elseif($act=='4')
{
return($invsendmax);
}
}


function urlClick($uid,$act)
{
$dtenow= date("Y-m-d" , time());
$dtetmenow= date("Y-m-d H:i:s" , time());

$ipaddress = $_SERVER['REMOTE_ADDR'];
$timestamp=time();

$qryusrref = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
$rslusrref=mysql_query($qryusrref);
$arrusrref =  mysql_fetch_row($rslusrref);
//$nusrref = mysql_num_rows($rslusrref);

$dteformaturlclk= date('Y-m-d',strtotime($arrusrref[18]));
		if($dtenow==$dteformaturlclk)
		{
		$urlclktdy=$arrusrref[20];
		}
		else
		{
		$urlclktdy="0";
$qryurlclktdyupd = "UPDATE scraffiliateusr SET
usrinvurlclktdy='$urlclktdy' WHERE usrid= '$uid'";
$rslurlclktdyupd = mysql_query($qryurlclktdyupd);
		}
$urlclklast=$arrusrref[18];
$urlclkttl=$arrusrref[19];

if($act=='0')
{
$urlclkttl++;
$urlclktdy++;
$qryurlclkupd = "UPDATE scraffiliateusr SET
usrinvurllstclkdtetme='$dtetmenow', usrinvurlclk='$urlclkttl', usrinvurlclktdy='$urlclktdy' WHERE usrid= '$uid'";
$rslurlclkupd = mysql_query($qryurlclkupd);

$urlclktmevalid="3600";
$urlclktmedel=$timestamp-$urlclktmevalid;
$qryurlclkdel = "DELETE FROM scraffiliateurlclk WHERE urlclktmestmp<= '$urlclktmedel'";
$rslurlclkdel = mysql_query($qryurlclkdel);

$qryusrclkchk = "SELECT * FROM scraffiliateurlclk WHERE urlclkipaddress='$ipaddress'";
$rslusrclkchk=mysql_query($qryusrclkchk);
//$arrusrclkchk =  mysql_fetch_row($rslusrclkchk);
$nusrclkchk = mysql_num_rows($rslusrclkchk);

if($nusrclkchk=='0')
{
$qryurlclkins = "INSERT into scraffiliateurlclk SET
urlclkusrid='$uid', urlclkipaddress='$ipaddress', urlclktmestmp='$timestamp'";
$rslurlclkins = mysql_query($qryurlclkins);

$pointsnum="1";
pointsinc($uid,$pointsnum);
}

}
if($act=='1')
{
return($urlclkttl);
}
elseif($act=='2')
{
return($urlclktdy);
}
elseif($act=='3')
{
return($urlclklast);
}
}


function prfViewCheck($uid,$refusrid,$act)
{
$qryusrprofile = "SELECT * FROM scraffiliateusr WHERE usrid='$refusrid'";
$rslusrprofile=mysql_query($qryusrprofile);
$arrusrprofile =  mysql_fetch_row($rslusrprofile);
$nusrprofile = mysql_num_rows($rslusrprofile);

	if($nusrprofile=='0')
	{
	echo "<font color='red'>User does not exist</font><br>";
	}
	else
	{
	$profileview="0";
		if($arrusrprofile[8]!=$uid && $refusrid!=$uid)
		{
			$qryusrprofilelvl2 = "SELECT * FROM scraffiliateusr WHERE usrid='$arrusrprofile[8]'";
			$rslusrprofilelvl2=mysql_query($qryusrprofilelvl2);
			$arrusrprofilelvl2 =  mysql_fetch_row($rslusrprofilelvl2);
			$nusrprofilelvl2 = mysql_num_rows($rslusrprofilelvl2);

			if($arrusrprofilelvl2[8]!=$uid)
			{
			$qryusrprofilelvl3 = "SELECT * FROM scraffiliateusr WHERE usrid='$arrusrprofilelvl2[8]'";
			$rslusrprofilelvl3=mysql_query($qryusrprofilelvl3);
			$arrusrprofilelvl3 =  mysql_fetch_row($rslusrprofilelvl3);
			$nusrprofilelvl3 = mysql_num_rows($rslusrprofilelvl3);

			if($arrusrprofilelvl3[8]!=$uid)
			{
			$profileview="0";
			}
			else
			{
			$profileview="1";
			}


			}
			else
			{
			$profileview="1";
			}
		}
		else
		{
		$profileview="1";
		}

		if($profileview=='0')
		{
		echo "<font color='red'>You cannot view Profile for this user</font><br>";
		}
		else
		{
if(!isset($_SESSION['prfvisited_'.$refusrid]))
{
$usrprfvstupd=prfViews($refusrid,0);

$_SESSION['prfvisited_'.$refusrid] = "1";
}


		echo "<font color='green'>Show user profile here.</font><br>
		Note: If you select a user which does not come under 3 levels than you will not be able to
		view the profile. Try it by changing refusrid=$refusrid by refusrid=15 in the address bar above.
		";
		}
	}
}



function pointsinc($uid,$pointsnum)
{
			$qryusrpoints = "SELECT * FROM scraffiliateusr WHERE usrid='$uid'";
			$rslusrpoints=mysql_query($qryusrpoints);
			$arrusrpoints =  mysql_fetch_row($rslusrpoints);
			//$nusrpoints = mysql_num_rows($rslusrpoints);

$pointsttl=$arrusrpoints[22]+$pointsnum;

$qryusrpointsupd = "UPDATE scraffiliateusr SET
usrpoints='$pointsttl' WHERE usrid= '$uid'";
$rslusrpointsupd = mysql_query($qryusrpointsupd);
}


function referralIndirectPoints($uid)
{

$qryusrref1 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$uid'";
$rslusrref1=mysql_query($qryusrref1);
//$arrusrref1 =  mysql_fetch_row($rslusrref1);
$nusrref1 = mysql_num_rows($rslusrref1);

$ttlreflvl1points="0";
$ttlreflvl2points="0";
$ttlreflvl3points="0";

for ($i=0; $i<$nusrref1; $i++)
{
$arrusrref1 =  mysql_fetch_row($rslusrref1);
$ttlreflvl1points=$ttlreflvl1points+$arrusrref1[22];

	$qryusrref2 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$arrusrref1[0]'";
	$rslusrref2=mysql_query($qryusrref2);
	//$arrusrref2 =  mysql_fetch_row($rslusrref2);
	$nusrref2 = mysql_num_rows($rslusrref2);

		for ($j=0; $j<$nusrref2; $j++)
		{
		$arrusrref2 =  mysql_fetch_row($rslusrref2);
		$ttlreflvl2points=$ttlreflvl2points+$arrusrref2[22];

		$qryusrref3 = "SELECT * FROM scraffiliateusr WHERE usrinvby='$arrusrref2[0]'";
		$rslusrref3=mysql_query($qryusrref3);
		//$arrusrref3 =  mysql_fetch_row($rslusrref3);
		$nusrref3 = mysql_num_rows($rslusrref3);

			for ($k=0; $k<$nusrref3; $k++)
			{
			$arrusrref3 =  mysql_fetch_row($rslusrref3);
			$ttlreflvl3points=$ttlreflvl3points+$arrusrref3[22];
			}
		}
}


$ttlindirectpoints=($ttlreflvl1points*(1/2))+($ttlreflvl2points*(3/10))+($ttlreflvl3points*(1/10));

$qryindirectpointsupd = "UPDATE scraffiliateusr SET
usrpointsindirect='$ttlindirectpoints' WHERE usrid= '$uid'";
$rslindirectpointsupd = mysql_query($qryindirectpointsupd);

}
?>
