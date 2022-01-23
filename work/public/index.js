//ふわっと出るアニメーション
$(window).on('load', function() {
	$('#loader-bg').hide();
});

window.onload = function() {
	scroll_effect();
	$(window).scroll(function() {
		scroll_effect();
	});

	function scroll_effect() {
		$('.fadein').each(function() {
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > elemPos - windowHeight) {
				$(this).addClass('scrollin');
			}
		});
	}
};

//アイテムビュー
    // var itemHeights = [];
    // $(function() {
    //     $(".grad-item").each(function() { //ターゲット(縮めるアイテム)
    //         var thisHeight = $(this).height(); //ターゲットの高さを取得
    //         itemHeights.push(thisHeight); //それぞれの高さを配列に入れる
    //         $(this).addClass("is-hide"); //CSSで指定した高さにする
    //     });
    // });
    // $("#grad-trigger").click(function() {
    //     var index = $(this).index("#grad-trigger"); //トリガーが何個目か
    //     var addHeight = itemHeights[index]; //個数に対応する高さを取得
    //     $(this).fadeOut().addClass("is-show").next().animate({
    //         height: addHeight
    //     }, 200).removeClass("is-hide"); //高さを元に戻す
    // });