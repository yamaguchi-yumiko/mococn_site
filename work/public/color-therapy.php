<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="color-therapy-content color_therapy">
    <section class="color-therapy-section">
        <div class="color-therapy-container">
            <h1>Color Therapy</h1>
    </section>
</main>
<?php require_once('footer.php'); ?>
<script src="common/js/jquery.js"></script>
<script src="common/js/index.js"></script>
<script src="common/slick/slick/slick.min.js"></script>
<script>
    $('.frist,.tow').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 4000,
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
</body>

</html>