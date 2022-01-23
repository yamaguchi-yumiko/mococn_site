<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="Bag-content category">
	<section class="category-section">
		<h1>Bag</h1>
		<div class="items">
			<div class="item-category">
				<div class="items-text">
					<p>Purse&nbsp;bag</p>
				</div>
				<div class="item-category-items">
					<article class="item-box">
						<figure><img src="common/img/IMG_74452.JPG" alt="バックno.1"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/IMG_74442.JPG" alt="バックno.2"></figure>
					</article>
					<article class="item-box">
						<figure><img src="common/img/" alt=""></figure>
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