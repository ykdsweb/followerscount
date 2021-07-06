<?php
include("./header.php");
?>
<body>
<div id="formWrap_main">
  <div class="mainimg">
    <div class="pc">
        <img src="img/twitterFollowersCount_logo_PC.png" alt="メインビジュアル">
    </div>
    <div class="sp">
        <img src="img/twitterFollowersCount_logo_SP.png" alt="メインビジュアル">
    </div>
  </div>
  <h2 class="center"><span class="bold__01 wf-roundedmplus1c">入力はこちらから</span></h2>
  <div id="form__body" class="form__body scroll-fade">
  <p>以下、今週の目標値を入力後、【確認ボタン】を押してください。</p>
  <form method="post" action="./push.php">
    <table class="formTable">
      <tr>
        <th>お名前</th>
        <td><input size="20" type="text" name="yourName" placeholder="お名前を入力してください"/> ※必須</td>
      </tr>
      <tr>
        <th>Mail(半角)</th>
        <td><input size="30" type="text" name="email" placeholder="example@mail.com"/> ※必須</td>
      </tr>
      <tr>
        <th class="formTable__th">今週の目標</th>
        <td class="formTable__td"><input name="number[]" size="30" type="number" min="1" max="400" placeholder="[1〜400]目標値を入力" value="" /> ※必須</td>
      </tr>
      <tr>
        <th>メッセージ<br />(任意・非公開)</th>
        <td><textarea name="message" cols="50" rows="10" placeholder="不明点などあれば、こちらで質問なども受け付けています。"></textarea></td>
      </tr>
    </table>
    <div class="p_notice">
      <p>問題なければ【確認ボタン】を押下し、やり直す場合には【リセット】を押してください。</p>
    </div>
    <p align="center">
      <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
    </p>
  </form>
</div>
<br />
<!-- ランキングは「ranking」から読み込む -->
<?php include("./ranking.php"); ?>
<!-- ランキングは「ranking」から読み込む -->
</div>
<section id="1" class="blue_back">
<h2 class="center"><span class="bold__01 wf-roundedmplus1c">YKGの発信力を上げよう</span></h2>
<div class="container">
<div class="row flow">
    <div class="col span-3">
		<img src="img/goal_00.png" alt="ミッション1">
    </div>
    <div class="col span-9"><h3>2021年、年内に<span class="red">一人2,000フォロワー</span>を目指して</h3><br />
    <p>みんなで力を合わせて、YKG全体で10万フォロワーを目指します。たくさんの人に見て欲しい・知って欲しい弊社の情報を届けましょう。</p>
    </div>
    </div>	
<div class="row flow">
    <div class="col span-3">
		<img src="img/RT_00.png" alt="ミッション2">
    </div>
    <div class="col span-9"><h3>YKG公式アカウントの投稿をRTして、<span class="red">最新情報</span>を拡散！</h3><br />
    <p>YKG公式アカウントが発信したらそれをRTします。みんなの援護射撃で日本中のお客様に最新情報を発信します。</p>
    </div>
    </div>
<div class="row flow">
    <div class="col span-3">
		<img src="img/PDCA_01.png" alt="ミッション3">
    </div>
    <div class="col span-9"><h3>Plan(計画)・Do(実行)・Check(評価)・Action(改善)</h3>
    <p>YK Twitter Followers Countに目標値を入力して、計画しよう。毎週月曜日に一週間の目標値を入力します。チームで切磋琢磨し、みんなで一緒に目標達成してください。</p>
    </div>
    </div>
	</div>
  <div class="toForm__button">
  <a class="toForm__button__a" href="./index">
    <span class="toForm__button__span">
      <div>
      </div>
    </span>
  </a>
  </div>
</section>
		
<section id="2">
<h2 class="center"><span class="bold__01 wf-roundedmplus1c">タイトル</span></h2>
<div class="container center">
<div class="row">
    <div class="col span-4">
		<img src="img/comingsoon_00.png" alt="テキスト">
		<h3>サブタイトル</h3>
		<p>テキストテキストテキスト</p>
    </div>
    <div class="col span-4">
		<img src="img/comingsoon_00.png" alt="テキスト">
		<h3>サブタイトル</h3>
		<p>テキストテキストテキスト</p>
    </div>
    <div class="col span-4">
		<img src="img/comingsoon_00.png" alt="テキスト">
		<h3>サブタイトル</h3>
		<p>テキストテキストテキスト</p>
    </div>
    </div>
	</div>
</section>
		
<section id="3" class="blue_back">
<h2 class="center"><span class="bold__01 wf-roundedmplus1c">フォロワーを増やすコツ…</span></h2>
<div class="container">
<div class="row flow">
    <div class="col span-3">
		<img src="img/profile_00.png" alt="フォロワーを増やすコツ1">
    </div>
    <div class="col span-9"><h3>プロフィールを入力する</h3><br /><p>Twitterの向こう側にいるのは人間です。先ずアナタがどんな人なのか？何が好きなのか？を伝えましょう。</p>
    </div>
    </div>	
<div class="row flow">
    <div class="col span-3">
		<img src="img/follow_00.png" alt="フォロワーを増やすコツ2">
    </div>
    <div class="col span-9"><h3>先ずはこちらからフォロー</h3><br /><p>1日の上限フォローは400件です。根気よく、趣味の合いそうな人をフォローし、フォローバックを狙いましょう。</p>
    </div>
    </div>
<div class="row flow">
    <div class="col span-3">
		<img src="img/2post_00.png" alt="フォロワーを増やすコツ3">
    </div>
    <div class="col span-9"><h3>最低、1日2回は投稿!</h3><br /><p>フォローだけしていてもフォロワーは増えません。実際に好きなことをしている写真付きの投稿や、今考えていることを発信し【共感】してもらえることが大切です。できる範囲で、先ずは1日2投稿から初めてください (*^o^*)/~ </p>
    </div>
    </div>
	</div>
</section>
<section>
<div class="container">
<h2 class="center"><span class="bold__01 wf-roundedmplus1c">広報活動参加部門</span></h2>
  <div class="row">
    <!-- 1段目ここから -->
    <div class="col span-4">
    <h4>倉敷沖新店</h4><br />
    <img src="img/shop_01.jpg" alt="倉敷沖新店">
        <p>〒710-0832</p><br />
        <p>岡山県倉敷市田ノ上新町14-1</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.743886312351!2d133.75329171522912!3d34.5853464804642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355157fbeecc801b%3A0xc16c804e413ffc1!2z44Ki44OR44Oe44Oz44K344On44OD44OXIOWAieaVt-ayluaWsOW6lw!5e0!3m2!1sja!2sjp!4v1615515647689!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    </div>
    <div class="col span-4 blue_back">
    <h4>新倉敷駅前店</h4><br />
    <img src="img/shopimg_06.jpg" alt="新倉敷駅前店">
        <p>〒710-0253</p><br />
        <p>岡山県倉敷市新倉敷駅前3丁目7-1</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
    <div class="col span-4">
    <h4>倉敷水島店</h4><br />
    <img src="img/shopimg_07.jpg" alt="倉敷水島店">
        <p>〒712-8032</p><br />
        <p>岡山県倉敷市北畝6丁目1-7</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
  </div>
  <!-- 1段目ここまで -->
  <!-- 2段目ここから -->
  <div class="row">
    <div class="col span-4 blue_back">
    <h4>売買事業部</h4><br />
    <img src="img/shop_01.jpg" alt="売買事業部">
        <p>〒710-0832</p><br />
        <p>岡山県倉敷市田ノ上新町14-1</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
    <div class="col span-4">
    <h4>法人科</h4><br />
    <img src="img/shopimg_06.jpg" alt="法人科">
        <p>〒710-0253</p><br />
        <p>岡山県倉敷市新倉敷駅前3丁目7-1</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
    <div class="col span-4 blue_back">
    <h4>修繕・収納</h4><br />
    <img src="img/shopimg_07.jpg" alt="修繕・収納">
        <p>〒712-8032</p><br />
        <p>岡山県倉敷市北畝6丁目1-7</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
  </div>
  <!-- 2段目ここまで -->
  <!-- 3段目ここから -->
  <div class="row">
    <div class="col span-4">
    <h4>PM</h4><br />
    <img src="img/shop_01.jpg" alt="PM">
        <p>〒710-0832</p><br />
        <p>岡山県倉敷市田ノ上新町14-1</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
    <div class="col span-4 blue_back">
    <h4>YKGホールディングス</h4><br />
    <img src="img/shopimg_06.jpg" alt="YKGホールディングス">
        <p>〒710-0253</p><br />
        <p>岡山県倉敷市新倉敷駅前3丁目7-1</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
    <div class="col span-4">
    <h4>Web戦略/デザインスタジオ</h4><br />
    <img src="img/shopimg_07.jpg" alt="Web戦略/デザインスタジオ">
        <p>〒712-8032</p><br />
        <p>岡山県倉敷市北畝6丁目1-7</p><br />
        <p>営業時間&ensp;10:00〜18:00</p><br />
    </div>
  </div>
  <!-- 3段目ここまで -->
</div>
</section>
<?php
include("./footer.php");
?>