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
  
</section>
		
<section id="2">
<h2 class="center"><span class="bold__01 wf-roundedmplus1c">このアプリケーションについて</span></h2>
<div class="container center">
<div class="row">
    <div class="col span-4">
      <a href="./use"><img class="row__contents" src="img/howToUse_main_SP.png" alt="使い方"></a>
      <h3>使い方を見る</h3>
      <p>FollowersCountってな〜に？？使い方を解説！</p>
    </div>
    <div class="col span-4">
      <a href="./champion"><img class="row__contents" src="img/imthechampion_SP.png" alt="ランキング"></a>
      <h3>殿堂入りを見る</h3>
      <p>過去のチャンピオンたち。歴戦の猛者を紹介！！</p>
    </div>
    <div class="col span-4">
      <a href="./update"><img class="row__contents" src="img/update_SP.png" alt="アップデート情報"></a>
      <h3>アップデート情報を見る</h3>
      <p>FollowersCountの更新や修正について。今後増える機能や変更された場合に何が変わったのかを掲載します。</p>
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
        <p>沖チームから一言</p><br />
        <p>チームワークで頑張ります。</p><br />
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.743886312351!2d133.75329171522912!3d34.5853464804642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355157fbeecc801b%3A0xc16c804e413ffc1!2z44Ki44OR44Oe44Oz44K344On44OD44OXIOWAieaVt-ayluaWsOW6lw!5e0!3m2!1sja!2sjp!4v1615515647689!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    </div>
    <div class="col span-4 blue_back">
    <h4>新倉敷駅前店</h4><br />
    <img src="img/shopimg_06.jpg" alt="新倉敷駅前店">
        <p>新倉チームから一言</p><br />
        <p>新倉のことなら何でも聞いてください。</p><br />
    </div>
    <div class="col span-4">
    <h4>倉敷水島店</h4><br />
    <img src="img/shopimg_07.jpg" alt="倉敷水島店">
        <p>水島チームから一言</p><br />
        <p>打倒、修繕・収納チーム</p><br />
    </div>
  </div>
  <!-- 1段目ここまで -->
  <!-- 2段目ここから -->
  <div class="row">
    <div class="col span-4 blue_back">
    <h4>売買事業部</h4><br />
    <img src="img/shop_01.jpg" alt="売買事業部">
        <p>売買チームから一言</p><br />
        <p>次回巻き返したる！</p><br />
    </div>
    <div class="col span-4">
    <h4>法人科</h4><br />
    <img src="img/ekimae_00.png" alt="法人科">
        <p>法人・テナントチームから一言</p><br />
        <p>頑張ります！</p><br />
    </div>
    <div class="col span-4 blue_back">
    <h4>修繕・収納</h4><br />
    <img src="img/YKG_00.png" alt="修繕・収納">
        <p>修繕・収納チームから一言</p><br />
        <p>ずっと首位を独走できるように走り続けます。</p><br />
    </div>
  </div>
  <!-- 2段目ここまで -->
  <!-- 3段目ここから -->
  <div class="row">
    <div class="col span-4">
    <h4>PM</h4><br />
    <img src="img/YKG_00.png" alt="PM">
        <p>PMチームから一言</p><br />
        <p>設定した目標をクリアできるように時間を作って頑張ります。</p><br />
    </div>
    <div class="col span-4 blue_back">
    <h4>YKGホールディングス</h4><br />
    <img src="img/YKG_00.png" alt="YKGホールディングス">
        <p>本社チームから一言</p><br />
        <p>みんなでできる範囲で進めていきます。</p><br />
    </div>
    <div class="col span-4">
    <h4>Web戦略/デザインスタジオ</h4><br />
    <img src="img/shop_01.jpg" alt="Web戦略/デザインスタジオ">
        <p>web戦・デザインから一言</p><br />
        <p>コンスタントに毎日少しずつ頑張ります。</p><br />
    </div>
  </div>
  <!-- 3段目ここまで -->
</div>
</section>
<?php
include("./footer.php");
?>