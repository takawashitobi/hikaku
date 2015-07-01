<?php

//タイトルタグ
$titletag = "お問い合わせ";

//実行ファイル名
$selfile = "contact.html";

//フォームを囲っているテーブルのCSSクラス名
$tableClass = "table-form";

//必須項目のCSSクラス名
$hissClass = "hiss";

//エラー時のCSSクラス名
$errorClass = "err";

//控えのメールを送るか（送る=1 送らない=0）
$mailReturn = 1;

//件名が項目で設定されていない場合の件名
$subject = "お問い合わせ【MAIL】";

//控えメールの場合
$resubject = "お問い合わせの控え【MAIL】";

//宛先
$mailTo = "vancom-k@castle.ocn.ne.jp";

//送信者表示
$mailFrom = "vancom-k@castle.ocn.ne.jp";

//入力時ボタン
$inputBtn = "確認画面へ進む";
$inputBtnClass = "input-m";

//確認時ボタン
$registBtn = "送　信";
$registBtnClass = "input-m";

//戻るボタン
$returnBtn = "戻　る";
$returnBtnClass = "input-m";

//入力時メッセージ
$inputMessage = <<<EOM

EOM;

//確認時メッセージ
//$registMessage = <<<EOM
//<div class="message">
//	入力内容を確認していただき、「{$inputBtn}」ボタンを押してください。<br />
//	訂正は「{$returnBtn}」ボタンで戻って訂正ください。
//</div>
EOM;

//エラー時メッセージ
$errorMessage = <<<EOM
<div class="message {$errorClass}">
	エラーが発生しています。<br />
	指示に従って、訂正ください。
</div>
EOM;

//完了時メッセージ
$endMessage = <<<EOM
<p style="text-align:left; margin-left:20px; margin-top:20px" {$errorClass}">
お問い合わせ内容の送信が完了いたしました。<br />
後日、担当者よりご連絡いたします。<br /><br />
万一、ご回答メールが届かない場合はトラブルの可能性もありますので、<br />
大変お手数ではございますが、もう一度お問い合わせいただくか、<br />
お電話にてお問い合わせください。<br /><br />
今後ともご愛顧賜りますよう、よろしくお願い申し上げます。<br /><br />
有限会社　バンコム企興<br />
本社 : 〒871-0902 福岡県築上郡上毛町大ノ瀬68-1<br />
(TEL 0979-84-7677)<br />
総社事業所 : 〒719-1131 岡山県総社市中央5-5-103 B-102<br />
(TEL 0866-31-7477)<br /><br />
<a href="/">>>>トップページへ戻る</a>
</p>
<br style="mce" />
EOM;

//送信メールヘッダー
$mailHeader = <<<EOM
ホームページより
お問い合わせが届きました。
-------------------------------
EOM;

//送信メールフッター
$mailFooter = <<<EOM
-------------------------------
EOM;

//控えメールヘッダー
$mailReturnHeader = <<<EOM
この度はお問い合わせいただきありがとうございます。
後日、当社担当者よりご連絡させていただきます。

-------------------------------
EOM;

//控えメールフッター
$mailReturnFooter = <<<EOM
-------------------------------
本メールに心当たりがない場合、
お手数をおかけいたしますが、
下記連絡先ににご返信いただけましたら
幸いです。
-------------------------------

有限会社　バンコム企興
【本社】
〒871-0902 福岡県築上郡上毛町大ノ瀬68-1
TEL:0979-84-7677
【総社事務所】
〒719-1131 岡山県総社市中央5-5-103 B-102
TEL:0866-31-7477

フリーダイヤル：0120-862-808
E-MAIL:{$mailTo}
URL:http://www.vancom.co.jp/
EOM;

?>