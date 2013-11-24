<?php
//■ＭｙＳＱＬ用設定ファイル

$db_server = "192.168.100.232";
$db_user = "_testh421";
$db_pass = "passw0rd";
$db_name = "_test421";

//■データベースに接続
$link=mysql_connect($db_server,$db_user,$db_pass)
	or die("データベースの接続に失敗しました");
	
//■データベースを選択
$db_select=mysql_select_db($db_name,$link);
	if(!$db_select){
		die("データベースの選択に失敗しました。".mysql_error());
	}

//■文字コードの設定
mysql_set_charset('utf8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
</body>
</html>