<?php
// require_once __DIR__ . '/vendor/autoload.php';
 
// $key =  __DIR__ . '/gs-academy-384209-878b2ee9ec3c.json';//取得したサービスキーのパスを指定
 
// $client = new Google_Client();//Googleクライアントインスタンスを作成
// $client->setScopes([//スコープを以下の内容でセット
//     \Google_Service_Sheets::SPREADSHEETS,
//     \Google_Service_Sheets::DRIVE,]);
// $client->setAuthConfig($key);//サービスキーをセット
 
// $sheet = new Google_Service_Sheets($client);//シートを操作するインスタンス
// $sheet_id = '1-yK48SkzPNe5vD571uyWbxC7X1z_9wP5WN0zy4UqhWU';//対象のスプレッドシートのIDを指定
// $range = 'sheet1';//対象のスプレッドシートで書き込む範囲を指定（今回の場合、sheet1）
 
// //※この行より上は前回の記事と同一です。
// //書き込む内容を配列にて指定指定
// $values = [
// ["A1セルに書き込む内容", "B1セルに書き込む内容", "C1セルに書き込む内容"],
// ["A2セルに書き込む内容", "B2セルに書き込む内容", "C2セルに書き込む内容"],
// ["A3セルに書き込む内容", "B3セルに書き込む内容", "C3セルに書き込む内容"]
// ];
 
// //書き込む内容を収めた配列をbodyに格納
// $body = new Google_Service_Sheets_ValueRange(['values' => $values,]);
 
// /*
// 　いよいよシートの該当範囲に書き込む内容を反映します。
// 　ValueInputOptionは値を書き込む際の形式指定で、
// 　「RAWS」、もしくは「USER_ENTERED」のいずれかで指定します。
// 　特にこだわりがない場合は「USER_ENTERED」で問題ありません。
// */
// $sheet->spreadsheets_values->update($spreadsheetId, $range, $body, ["valueInputOption" => 'USER_ENTERED']);

// 変数とタイムゾーンを初期化
    $header = null;
	$auto_reply_subject = null;
	$auto_reply_text = null;
	date_default_timezone_set('Asia/Tokyo');

    // ヘッダー情報を設定
	$header = "MIME-Version: 1.0\n";
	$header .= "From: Cheese Academy <masato23.maruyama@gmail.com>\n";
	$header .= "Reply-To: Cheese Academy <masato23.maruyama@gmail.com>\n";

	// 件名を設定
	$auto_reply_subject = 'お問い合わせありがとうございます。';

	// 本文を設定
	$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
下記の内容でお問い合わせを受け付けました。\n\n";
	$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	$auto_reply_text .= "氏名：" . $_POST['name'] . "\n";
	$auto_reply_text .= "メールアドレス：" . $_POST['mail'] . "\n\n";
    $auto_reply_text .= "お問い合わせ内容：" . $_POST['inquiry'] . "\n\n";
	$auto_reply_text .= "Cheese Academy 事務局";

    mb_language('Japanese'); 
    mb_internal_encoding("UTF-8"); 
	// メール送信
	mb_send_mail( $_POST['mail'], $auto_reply_subject, $auto_reply_text, $header);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
 
<body>
 
<h2>メール送信完了</h2>    
 
<p class="message">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
自動返信メールをお送りしておりますのでご確認ください。<br>
1時間たっても届かない場合はお手数ですがこちらからご連絡ください。
</p>
<a href="../index.html">チーズアカデミーのHPへ戻る</a>
</body>
</html>

