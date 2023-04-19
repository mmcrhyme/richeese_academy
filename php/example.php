<?php  
require \_\_DIR\_\_ . '/vendor/autoload.php';  
$client = new Google\_Client();  
$client->setScopes(Google\_Service\_Sheets::SPREADSHEETS);  
$client->setAuthConfig('gs-academy-384209-878b2ee9ec3c.json');  
$service = new Google\_Service\_Sheets($client);  
$spreadsheetId = '1-yK48SkzPNe5vD571uyWbxC7X1z_9wP5WN0zy4UqhWU';  
$range = 'sheet1';  
$values = [
    ["A1セルに書き込む内容", "B1セルに書き込む内容", "C1セルに書き込む内容"],
    ["A2セルに書き込む内容", "B2セルに書き込む内容", "C2セルに書き込む内容"],
    ["A3セルに書き込む内容", "B3セルに書き込む内容", "C3セルに書き込む内容"]
    ];

    $body = new Google_Service_Sheets_ValueRange(['values' => $values,]);
$sheet->spreadsheets_values->update($spreadsheetId, $range, $body, ["valueInputOption" => 'USER_ENTERED']);
printf("%d cells appended.", $result->getUpdates()->getUpdatedCells());
?>