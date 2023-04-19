<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/style.css"> -->
<title>確認画面</title>
</head>
 
<body>
 
<?php
$motivation = $_POST['motivation'];
?>

<h2>問い合わせ内容</h2>    
 
<form action="./mailto.php" method="post">
 
<table border="1">
<tr>
<td>名前</td>
<td><?php echo $_POST["name"]; ?></td>
</tr>
<tr>
<td>メールアドレス</td>
<td><?php echo $_POST["mail"]; ?></td>
</tr>
<td>チーズアカデミーを知ったきっかけ</td>
<td><?php echo $_POST["howtoknow"]; ?></td>
</tr>
<td>志望動機</td>
<td><?php foreach($motivation as $motivation_value){
echo '<span>'.$motivation_value. '</span> ';}; ?></td>
</tr>
<tr>
<td>問い合わせ内容</td>
<td><?php echo $_POST["inquiry"]; ?></td>
</tr>
</table>
 
<input type="submit" value="送信" />
</form>

</body>
    
</html>