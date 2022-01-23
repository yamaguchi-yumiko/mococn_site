<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="home home-top">
	<section class="top">
	</section>
	<section class="index-section concept">
		<h2>Concept</h2>
		<p>Wool&nbsp;Natural&nbsp;Cool&Cute</p>
		<p>かわいいだけじゃないシックな雑貨をハンドメイドする<br>羊毛フィルトハンドメイド専門店[mococon]</p>
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
	<section class="index-section pickup fadein">
		<h2>Pickup</h2>
		<div>
			<ul class="slider">
				<li><img src="common/img/IMG_5689.jpg" alt="ピックアップ商品"></li>
				<li><img src="common/img/IMG_8120.JPG" alt="ピックアップ商品"></li>
				<li><img src="common/img/IMG_8129.JPG" alt="ピックアップ商品"></li>
				<li><img src="common/img/IMG_8114.JPG" alt="ピックアップ商品"></li>
				<li><img src="common/img/IMG_8134.JPG" alt="ピックアップ商品"></li>
				<li><img src="common/img/IMG_8115.JPG" alt="ピックアップ商品"></li>
			</ul>
		</div>
	</section>
	<section class="index-section about-wrapper fadein">
		<h2>About</h2>
		<div class="about-brand">
			<div class="about-top">
				<img src="common/img/top_tree.gif" alt="モコのツリー画像">
				<div class="about-history">
					<div>
						<p>what is mococon?</p>
						<p> mococon（モココン）とは<br>
							指の形から生まれた不思議生物<br>オリジナルマスコット！</p>
						<p>羊毛フィルトの特徴を活かしてほわほわ感のある<br>可愛いらしいモココン</p>
						<p>他にも、羊毛フィルトを使ったアクセサリー<br>雑貨などの作品もございます！</p>
						<a href="about.php" class="button"><span>VIEW MORE</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="index-section news fadein">
		<h2>News</h2>
		<div class="news-wrap">
			<div class="news-first">
				<p>ritmarus&nbsp;x&nbsp;mococon&nbsp;Exhibition<br>Collaboration&nbsp;Workbr<br>『FACE&nbsp;-&nbsp;BACK』展</p>
				<p>2021年11月23日(火・祝)〜30日まで<br>OPEN&nbsp;12:00&nbsp;-&nbsp;21:00<br>※25日(木)はお休み、在店日はSNS等情報をご確認ください。</p>
				<p></p>
				<p>COFFEE&nbsp;ritmos</p>
				<p>東京都八王子市子安町4-10-10 松屋ビル1F</p>
				<p>Tel.&nbsp;042-686-1670</p>
				<div class="event_dm">
				<img src="common/img/ritmos_expo.jpg" alt="イベントDM前">
				<img src="common/img/ritmos_expo_FACE.jpg" alt="イベントDM後">
				</div>
			</div>
			<div class="arrow-content"><a href="news.php" target="_blank">more</a></div>
		</div>
	</section>
</main>
<?php require_once('footer.php'); ?>
</body>
<script>
	//ピックアップのスライダー
	$('.slider').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerMode: true,
					centerPadding: '30px',
					slidesToShow: 1
				}
			}
		]
	});
	$('#accordion').on('click', function() {
		$('#accordion-content').slideToggle();
	});
</script>

</html>