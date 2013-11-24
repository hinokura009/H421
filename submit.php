<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
	<form action="submit_cmp.php" method="post">
    <dl>
        <dt>タイトル</dt>
            <dd><input type="text" name="ttl" style="width:300px" /></dt>
        <dt>画像</dt>
            <dd><input type="file" name="tag_new" /></dd>
        <dt>凡例</dt>
            <dd><input type="text" name="exa" style="width:300px" /></dd>
        <dt>解決案</dt>
            <dd><input type="text" name="sol" style="width:300px" /></dd>
        <dt>カテゴリ</dt>
            <dd><select name="cate">
                    <option value="cate1">陸</option>
                    <option value="cate2">海</option>
                    <option value="cate3">空</option>
                </select>
            </dd>
        <dt>タグ</dt>
            <dd>
            	<input type="text" name="tag1" style="width:80px" />
            	<input type="text" name="tag2" style="width:80px" />
            	<input type="text" name="tag3" style="width:80px" />
            </dd>
        <dt>場所</dt>
            <dd><input type="text" name="place" style="width:300px" /></dd>
        <dt>内容</dt>
            <dd><textarea name="sentence" style="width:500px;height:300px"></textarea></dd>
            <dt><input type="submit" class="btn btn-primary" value="投稿">
            	<input type="reset" class="btn btn-primary" value="クリア">
            </dt>
    </dl>
    </form>
</body>
</html>