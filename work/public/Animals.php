<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="Other-content category">
	<section class="category-section">
		<h1>Animals</h1>
		<div class="items">
			<div class="item-category">
				<div class="items-text">
					<p>Rabbit</p>
				</div>
				<div class="item-category-items">
					<article class="item-box">
						<figure><img src="common/img/IMG_8127.JPG" alt="ウサギのオブジェ"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/IMG_8122.JPG" alt="ウサギのペンカバー"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/IMG_8114.JPG" alt="ウサギのオブジェ"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/" alt=""></figure>
					</article>
				</div>
				<div class="items-text">
					<p>Flamingo</p>
				</div>
				<div class="item-category-items">
					<article class="item-box">
						<figure><img src="common/img/IMG_7446.JPG" alt="フラミンゴオブジェBig"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/IMG_7448.JPG" alt="フラミンゴオブジェ小さい"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/IMG_7434.JPG" alt="ペンカバー"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/" alt=""></figure>
					</article>
				</div>
			</div>
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