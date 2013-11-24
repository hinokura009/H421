<?php
//----------------------------------------------------------------------------
//■post受け取り
//■タイトル
if(isset($_REQUEST["ttl"])){  
	$cmp_ttl=htmlspecialchars(stripslashes($_REQUEST["ttl"]));
}
//---------------------------
//■画像のことはあとでやる。
//---------------------------
//■凡例
if(isset($_REQUEST["exa"])){  
	$cmp_exa=htmlspecialchars(stripslashes($_REQUEST["exa"]));
}
//■解決案
if(isset($_REQUEST["sol"])){  
	$cmp_sol=htmlspecialchars(stripslashes($_REQUEST["sol"]));
}
//■カテゴリ
if(isset($_REQUEST["cate"])){  
	$cmp_cate=htmlspecialchars(stripslashes($_REQUEST["cate"]));
	switch($cmp_cate){
		case "cate1":
			$cmp_cate2 = "陸";
			break;
		case "cate2":
			$cmp_cate2 = "海";
			break;
		case "cate3":
			$cmp_cate2 = "空";
			break;
	}
}
//■タグ
if(isset($_REQUEST["tag1"])){  
	$cmp_tag1=htmlspecialchars(stripslashes($_REQUEST["tag1"]));
}
if(isset($_REQUEST["tag2"])){
	$cmp_tag2=htmlspecialchars(stripslashes($_REQUEST["tag2"]));
}
if(isset($_REQUEST["tag3"])){
	$cmp_tag3=htmlspecialchars(stripslashes($_REQUEST["tag3"]));
}
//■場所
if(isset($_REQUEST["place"])){
	$cmp_place=htmlspecialchars(stripslashes($_REQUEST["place"]));
}
//■内容
if(isset($_REQUEST["sentence"])){
	$cmp_sent=htmlspecialchars(stripslashes($_REQUEST["sentence"]));
	$cmp_sent=nl2br($cmp_sent);
}
//----------------------------------
//■作成時間取得
$create_time=date('Y-m-d H:i');
//----------------------------------
//■mysql初期設定
/*include("mysqluser.php");
//----------------------------------------
//■SQL文
	//-----------------------------------------
	//■小説テーブル取得
	$sql="select novel_id from t_novel";
	$db_result_novel=mysql_query($sql);
	if($db_result_novel==0){
		echo "該当データが存在しません";
		exit;
	}
	//-----------------------------------------
	//■novel_id取得
	while($row=mysql_fetch_array($db_result_novel,MYSQL_ASSOC)){
		$num=$row["novel_id"];
	}
	$num+=1;
	$num=sprintf("%05d",$num);
	//-----------------------------------
	//■小説テーブル格納用
	$sql_query=mysql_query("insert into t_novel(novel_id,novel_name,novel_tag,sentence,user_id,create_time,edit_time,good_user) values('$num','$novel_ttl','$novel_tag','$novel_sent','$log_user_id','$create_time',null,null)");
	if(!$sql_query){
		die('insertクエリ―が失敗しました。'.mysql_error());
	}
//-----------------------------------------
//■メモリ解放
$db_flg=mysql_free_result($db_result_novel);
if(!$db_flg){
	die("メモリの解放に失敗しました".mysql_error());
}
//-----------------------------------------
//■mysqlとの接続を切断する
$close_flag = mysql_close($link);
if(!$close_flag){
	die("データベースを閉じられませんでした。".mysql_error());
}
//-----------------------------------------
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/common.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
<!--javascript-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--javascript-->
<title>投稿完了</title>
</head>

<body>
	タイトル<br />
	<?php echo $cmp_ttl; ?><br />
    画像<br />
	<?php echo "ここに画像が入ります"; ?><br />
	凡例<br />
	<?php echo $cmp_exa; ?><br />
	解決案<br />
	<?php echo $cmp_sol; ?><br />
    カテゴリ<br />
    <?php echo $cmp_cate2; ?><br />
    タグ<br />
    <?php echo $cmp_tag1; ?><br />
    <?php echo $cmp_tag2; ?><br />
    <?php echo $cmp_tag3; ?><br />
	場所<br />
	<?php echo $cmp_place; ?><br />
    内容<br />
    <?php echo $cmp_sent; ?><br />
<a href="submit.php">戻る</a>
</body>
</html>