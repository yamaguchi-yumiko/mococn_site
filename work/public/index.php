<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="home home-top">
	<section class="top">
	</section>
	<section class="index-section concept">
		<h2>Concept</h2>
		<div class="concept-brand">
			<div class="concept-top">
				<div class="concept-history">
					<div class="concept-text">
						<p>Wool&Natural,WA</p>
						<p>羊毛フェルトの歴史は古く、その始まりは紀元前とも言われています。</p>
						<p>その製法はフワフワかわいいものから、カチッと固く押し固めきちんとしたものまで形を</p>
						<p>自由に変えられる優れた素材です。</p>
						<p>自然の風合いを生かし、時には草木染めから施し制作しています。</p>
						<a href="about.php" class="button"><span>VIEW MORE</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="index-section fadein">
		<h2>Category</h2>
		<div class="item-category-top">
			<article class="item-box-index">
				<figure><a href="Accessories.php"><img src="common/img/IMG_8123.JPG" alt="アクセサリー"></a></figure>
				<h3>Accessories</h3>
			</article>
			<article class="item-box-index">
				<figure><a href="original-mascot.php"><img src="common/img/DrflGoRV4AIeoRz.jpeg" alt="オリジナルマスコット"></a></figure>
				<h3>Original&nbsp;mascot</h3>
			</article>
			<article class="item-box-index">
				<figure><a href="tie.php"><img src="common/img/Tie1.jpg" alt="ネクタイ"></a></figure>
				<h3>Tie</h3>
			</article>
			<article class="item-box-index">
				<figure><a href="bag.php"><img src="common/img/IMG_74442-1.JPG" alt="バック"></a></figure>
				<h3>Bag</h3>
			</article>
			<article class="item-box-index">
				<figure><a href="Animals.php"><img src="common/img/403904_o.jpg" alt="その他"></a></figure>
				<h3>Animals</h3>
			</article>
		</div>
	</section>
	<section class="index-section news fadein">
		<h2>News</h2>
		<div class="news-wrap">
			<div class="news-first">
				<div class="news_text">
					<h3>◆◆◆クリエーターズマーケットvol.52◆◆◆</h3>
					<p>日時:2025/06/21(sat.)・22(sun.)&nbsp;11:00〜18:00&nbsp;※両日参加 </p>
					<p>場所:ポートメッセなごや2号館・3号館</p>
					<p style="margin-top: 20px;">【MayuANZÏ_WORCS】</p>
					<p>現在テーマにしている絶滅危惧の生きもの&想像して止まないオリジナルの生きものをマスコットや<br>模様にして雑貨を発表したいと思っています。</p>
					<p style="margin-top: 15px;">カラーリーディングも生かしてたまに、色に意味がある作品も作ります。<br>久々の遠征なので準備がんばってます。(2025.4.2)</p>
					<div class="event_dm">
						<img src="common/img/news/news_20250621.jpg" alt="イベントDM前">
					</div>
					<a href="https://www.creatorsmarket.com/" target="_blank" style="font-size: 14px;">https://www.creatorsmarket.com/</a>
				</div>
				<div class="news_text">
					<h3>◆◆◆DESIGN FESTA vol.61◆◆◆</h3>
					<p>日時:2025/7/6(sun.)&nbsp;10:00〜18:00&nbsp;※日曜のみ出展 </p>
					<p>場所:東京ビッグサイト西&南館</p>
					<p style="margin-top: 20px;">【モココン(mococon)】</p>
					<p>指のかたちの’モコ’をはじめオリジナルキャラクターのぬいぐるみ<br>マスコットやステーショナリー他、グッズの展示販売します。<br>ブースや詳細は後日snsで発表します。</p>
					<p style="margin-top: 15px;"><a href="https://designfesta.com/" target="_blank" style="font-size: 14px;">https://designfesta.com/</a></p>
				</div>
				<div class="arrow-content"><a href="news.php" target="_blank">more</a></div>
			</div>
	</section>
</main>
<?php require_once('footer.php'); ?>
</body>
<script>
	$('#accordion').on('click', function() {
		$('#accordion-content').slideToggle();
	});
</script>

</html>