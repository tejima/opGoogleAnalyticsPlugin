
<h2>プラグイン設定</h2>

<h3>GoogleAnalyticsについて</h3>


この画面からアカウント情報を入力することで<a href="http://www.google.com/analytics/">Google Analytics</a>によるアクセス解析を簡単に行うことができます。

<br />
<a href="http://dl.dropbox.com/u/151520/permalink/20091230opMarketingPlugin/20091229.png">説明画像</a>を参考に、アカウント情報を入力してください。

<h3>設定フォーム</h3>

<form action="<?php echo url_for('opMarketingPlugin/index') ?>" method="post">
<table>
<?php echo $form ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('設定変更') ?>" /></td>
</tr>
</table>
</form>

<h3>フィードバック</h3>

<script type="text/javascript">
 function _loadUserVoice() {
    var s = document.createElement('script');
    s.src = ("https:" == document.location.protocol ? "https://" : "http://") + "cdn.uservoice.com/javascripts/widgets/tab.js";
    document.getElementsByTagName('head')[0].appendChild(s);
  }
  _loadSuper = window.onload;
  window.onload = (typeof window.onload != 'function') ? _loadUserVoice : function() { _loadSuper(); _loadUserVoice(); };

</script>

<script type="text/javascript">
  var openpneOptions = {
    key: 'openpne',
    host: 'openpne.uservoice.com', 
    forum: '33439',
    lang: 'ja',
    showTab: false
  };
</script>
<script type="text/javascript">
  var marketingOpptions = {
    key: 'openpne',
    host: 'openpne.uservoice.com', 
    forum: '37098',
    lang: 'ja',
    showTab: false
  };
</script>
<a href="#" onclick="UserVoice.Popin.show(openpneOptions); return false;"><img src="http://dl.dropbox.com/u/151520/permalink/20091230opMarketingPlugin/openpnefeedback.png" /></a>
<br />
<br />
<a href="#" onclick="UserVoice.Popin.show(marketingOpptions); return false;"><img src="http://dl.dropbox.com/u/151520/permalink/20091230opMarketingPlugin/opMarketingPlugin.png" /></a>
<br />
