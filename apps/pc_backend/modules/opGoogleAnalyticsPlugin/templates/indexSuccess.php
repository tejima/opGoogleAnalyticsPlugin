
<h2>プラグイン設定</h2>

<h3>GoogleAnalyticsについて</h3>


この画面からアカウント情報を入力することで<a href="http://www.google.com/analytics/">Google Analytics</a>によるアクセス解析を簡単に行うことができます。

<br />
<a href="http://dl.dropbox.com/u/151520/permalink/20091230opMarketingPlugin/20091229.png">説明画像</a>を参考に、アカウント情報を入力してください。

<h3>設定フォーム</h3>

<form action="<?php echo url_for('opGoogleAnalyticsPlugin/index') ?>" method="post">
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('設定変更') ?>" /></td>
</tr>
</table>
</form>
