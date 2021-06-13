<html>
    <head>
        <meta charset="utf-8">
        <title>アンケートです。</title>
    </head>
<body>
<div class="form_wrapper">
<form action="write.php" method="post">
    <dl class="form_inner">
	<dt class="form_title">お名前:</dt>
    <dd class="form_item"><input type="text" name="name"></dd>
    <dt class="form_title">カナ:</dt>
    <dd class="form_item"><input type="text" name="name_kana"></dd>
	<dt class="form_title">EMAIL:</dt>
    <dd class="form_item"><input type="text" name="email"></dd>
    <dt class="form_title">MILを知ったきっかけ:</dt>
        <dd class="form_item">
            <select name="mil">
                <option value="">以下から選択</option>
                <option value="google検索">google検索</option>
                <option value="SNS">SNS</option>
                <option value="紹介">紹介</option>
                <option value="MCスクエア">MCスクエア</option>
                <option value="転職">転職</option>
                <option value="その他">その他</option>
            </select>
        </dd>
    <dt class="form_title">志望動機:</dt>
        <dd class="form_item">
            <select name="reason">
                <option value="">以下から選択</option>
                <option value="">新規事業立ち上げ</option>
                <option value="独立したい">独立したい</option>
                <option value="転職したい">転職したい</option>
                <option value="MCを変えたい">MCを変えたい</option>
                <option value="世界を変えたい">世界を変えたい</option>
                <option value="その他">その他</option>
            </select>
         </dd>
    <dt class="form_title">事業領域：</dt>
        <dd class="form_item">
            <select name="business_area">
                <option value="">以下から選択</option>
                <option value="環境">環境</option>
                <option value="健康">健康</option>
                <option value="不動産">不動産</option>
                <option value="自動車">自動車</option>
                <option value="物流">物流</option>
                <option value="その他">その他</option>          
            </select>
        </dd>
    <dt class="form_title">想定する事業規模(億円):</dt>
        <dd class="form_item">
             <input type="text" name="money">
        </dd>
</div>    
	<input type="submit" value="送信">
</form>

<!-- 以下にPHPを記述 -->


<!-- echoで表示される。 -->


</body>
</html>