<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>登山しよう</title>
<meta name="Keywords" content="登山、山登り、MountainClimbing" />
<meta name="Description" content="登山しよう　好きな山を見つけよう" />

<link rel="stylesheet" href="/public/css/style.css" />
<link rel="stylesheet" href="/public/css/slider-pro.css"/>

<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(function(){
	var loader = $('.loader-wrap');

	$(window).on('load',function(){
		loader.fadeOut();
	});

	setTimeout(function(){
		loader.fadeOut();
	},10000);
});
</script>

<div class="loader-wrap">
	<div class="loader">Loading...</div>
</div>



<header>

<div class="bg_bl"></div>

    <h1><a href="index.html"><img src="img/logo.png" alt="登山しよう"></a></h1>

<a class="menu_btn">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
</a>

<div class="h_btn"><a href="contact.html"><i class="fas fa-envelope"></i><span>お問合わせ</span></a></div>
<div class="h_tel font_mincho"><a href="tel:"><i class="fas fa-phone"></i><span>0123-<strong>456-7890</strong></span></a></div>
<nav id="g_navi">
    <ul class="navi_base">
        <li><a href="index.html">HOME</a></li>
            <li><a class="ac_menu">登山の基本</a>
            <div class="ac_list">
                <ul>
                    <li><a href="#">登山の心得</a></li>
                    <li><a href="#">持ち物</a></li>
                    <li><a href="#">準備する物</a></li>
                </ul>
            </div>
        </li>
        <li><a class="ac_menu">地域から探す</a></a>
            <div class="ac_list">
                <ul>
                    <li><a href="#">北海道・東北</a></li>
                    <li><a href="#">関東・甲信越</a></li>
                    <li><a href="#">中部・近畿・東海</a></li>
                    <li><a href="#">中国・四国</a></li>
                    <li><a href="#">九州・沖縄</a></li>
                    <li><a href="#">離島・その他国内</a></li>
                    <li><a href="#">海外（アメリカ・ヨーロッパ）</a></li>
                </ul>
            </div>
        <li><a class="ac_menu">みんなの登山報告</a></li>
            <div class="ac_list">
                <ul>
                    <li><a href="#">掲示板</a></li>
                    <li><a href="#">写真館</a></li>
                    <li><a href="#">登山具サイトへのリンク</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>


<ul class="h_sns">
      <li><a href="#"><i class="fas fa-book"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</header>


<!--　削除禁止【ＰＲ枠】ここから　-->
<!--prno.190909ver2.2-->
<div class="box_pr"><ul>
<li>Design by <a href="https://www.megapx.com/" title="ホームページ制作・ロゴデザイン：メガピクス" target="_blank">Megapx</a></li>
<li>Template by <a href="http://www.s-hoshino.com/" title="HTMLテンプレート配布元：フリー素材屋Hoshino" target="_blank">s-hoshino.com</a></li>
</ul></div>
<!--　/削除禁止【ＰＲ枠】ここまで　-->

</footer>

<div class="to_top"><a href="#" title="トップへ戻る"><i class="fas fa-chevron-up"></i></a></div>


<script src="js/jquery.sliderPro.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/script.js"></script>

<script>
$( document ).ready(function( $ ) {
  $('#top_slide').sliderPro({
    width: 1400,
    arrows: true,
	buttons: true,
    aspectRatio: 1.8,
    slideDistance:0,
	fadeDuration: 1000,
	smallSize: 640,
	visibleSize:"100%",
    breakpoints: {
      640: {
	  width: '100%',
	  arrows: false,
	  aspectRatio: 1.6,
      }
    }
  });
});
</script>

</body>
</html>
