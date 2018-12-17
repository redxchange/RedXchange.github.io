<?
$server = 'Server Name or localhost';
$dbuser = 'Database Username';
$dbpass = 'Database Password';
$dbname = 'Database Name';

$connect = mysql_connect($server,$dbuser,$dbpass);
mysql_select_db($dbname,$connect);
?>