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
						<p>
							羊毛フェルトの歴史は古く、その始まりは紀元前とも言われています。</p>
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
				    <p>◆◆◆ハレマルシェ・プレシャスマーケット◆◆◆</p>
					<p>日時:2023年12月02(土)11:00〜19:00</p>
					<p>場所:ルミネ有楽町1Fパッサージュ</p>
				</div>
				<div class="event_dm">
					<img src="common/img/news/news_20231202.jpg" alt="イベントDM前">
				</div>
				<div class="news_text">
					<p>◆◆◆Teyney&nbsp;Teyney&nbsp;Felt&nbsp;POP&nbsp;UP&nbsp;SHOP!◆◆◆</p>
					<p>2023年12月14日(木)~12月25日(月) 10:00-20:00</p>
					<p>*最終日は19時まで</p>
					<p>[会場]東京都武蔵野市吉祥寺本町2-3-1 東急百貨店 </p>
					<p>吉祥寺店 1F イベントスペース</p>
					<p>[TEL] 0422-21-5111</p>
				</div>
				<div class="event_dm">
					<img src="common/img/news/news_20231214.jpg" alt="イベントDM前">
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