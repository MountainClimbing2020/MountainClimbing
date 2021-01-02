<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <!--
        +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        原則として、許可なしの再配布は禁止させていただきます。
        また、無料でお使いになる場合は、【ＰＲ枠】のリンクは全て削除禁止です。
        （※加工後の削除も禁止させていただいておりますのでご了承ください。）
        PR枠の削除（有料プラン）に関するお問い合わせや、その他ご不明な点は、
        http://www.s-hoshino.com/info.html、または、
        https://www.megapx.com/contact.åçhtmlのフォームよりお問い合わせください。
        +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <title>登山しよう</title>
        <meta name="Keywords" content="登山、山登り、MountainClimbing" />
        <meta name="Description" content="登山しよう　好きな山を見つけよう" />
        <link rel="stylesheet" href="http://localhost:8888/MountainClimbing/public/css/style.css" />
        <link rel="stylesheet" href="http://localhost:8888/MountainClimbing/public/css/slider-pro.css"/>
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
                <h1><a href="index.html"><img src="http://localhost:8888/MountainClimbing/storage/app/public/image/logo.png" alt="登山しよう"></a>
                </h1>
                <a class="menu_btn">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
                </a>
            <div class="h_btn">
                <a href="contact.html">
                    <i class="fas fa-envelope"></i>
                    <span>ご意見・要望</span></a>
            </div>
            <nav id="g_navi">
                <ul class="navi_base">
                <li>
                    <a href="index.html">HOME</a>
                </li>
                <li>
                    <a class="ac_menu">登山の基本</a>
                        <div class="ac_list">
                            <ul>
                                <li><a href="#">登山の心得</a></li>
                                <li><a href="#">持ち物</a></li>
                                <li><a href="#">準備する物</a></li>
                            </ul>
                        </div>
                </li>
                <li>
                    <a class="ac_menu">地域から探す</a></a>
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
                </li>
                <li>
                    <a class="ac_menu">計画を立てる</a></a>
                        <div class="ac_list">
                            <ul>
                                <li><a href="#">計画のアドバイス</a></li>
                                <li><a href="#">タイムスケジュールサンプル</a></li>
                            </ul>
                        </div>
                </li>
                <li>
                    <a href="ac_menu.html">みんなの登山報告</a>
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
        <div class="slider-pro" id="top_slide">
            <div class="sp-slides">
                    <div class="sp-slide">
                    <div class="top_base cl_01"><!--背景画像うすい時用　赤系--></div>
                    <div class="top_catch">立山<br>
                <span>XXXXXX</span></div>
            <div class="slide_btn">
                <a href="#">詳しくはコチラ</a></div>
                        <img class="sp-image" src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/tateyama.jp" data-small="http://localhost:8888/MountainClimbing/storage/app/public/image/top/tateyama.jpg"/>
            </div><!-- /sp-slide -->
            <div class="sp-slide">
                <div class="top_catch">乗鞍岳<br>
                    <span>XXXXX</span>
            </div>
            <div class="slide_btn"><a href="#">詳しくはコチラ</a></div>
                        <img class="sp-image" src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/norikueatatamidaira.jpg" data-small="http://localhost:8888/MountainClimbing/storage/app/public/image/top/norikueatatamidaira.jpg"/>
            </div><!-- /sp-slide -->
            <div class="sp-slide">
                <div class="top_catch">至仏山<br>
                    <span>XXXXX</span>
                </div>
                <div class="slide_btn"><a href="#">詳しくはコチラ</a></div>
                            <img class="sp-image" src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/norikueatatamidaira.jpg" data-small="http://localhost:8888/MountainClimbing/storage/app/public/image/top/shibutu.jpg"/>
            </div><!-- /sp-slide -->
        </div><!-- /slider-pro -->
        <div class="pickup">
            <ul>
                <li class="effect">
                    <a href="#" ><img src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/event_1.jpeg" alt="サンプル画像" >
                        <span class="pu_icon">NEW!</span>
                        <div class="pu_title">最新イベント情報</div>
                            <p>最新のイベント情報を随時更新中です。詳しくはこちらからご覧ください。</p></a>
                </li>
                <li class="effect">
                    <a href="#" ><img src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/event_2.JPG" alt="サンプル画像" >
                        <span class="pu_icon">NEW!</span>
                        <div class="pu_title">最新イベント情報</div>
                            <p>最新のイベント情報を随時更新中です。詳しくはこちらからご覧ください。</p></a>
                </li>
                <li class="effect">
                    <a href="#" ><img src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/event_3.jpeg" alt="サンプル画像" >
                        <span class="pu_icon">NEW!</span>
                        <div class="pu_title">最新イベント情報</div>
                            <p>最新のイベント情報を随時更新中です。詳しくはこちらからご覧ください。</p></a>
                </li>

                <li class="effect">
                    <a href="#" ><img src="http://localhost:8888/MountainClimbing/storage/app/public/image/top/event_4.jpeg" alt="サンプル画像" >
                            <span class="pu_icon cl_02">イチオシ</span>
                            <div class="pu_title">最新イベント情報</div>
                                <p>最新のイベント情報を随時更新中です。詳しくはこちらからご覧ください。</p></a>
                </li>
            </ul>
        </div><!-- /pickup -->
        <div class="content">
            <div class="cont_wrap effect d_04">
                <h2>お知らせ<br><span>News</span></h2>
                <ul class="ul_news">
                    <li>
                        <span class="news_date">2020.11.01</span>
                        <span class="news_icon cl_02">EVENT</span>
                        <a href="#">みんなの登山報告</a>を追加いたしました。
                    </li>
                    <li>
                        <span class="news_date">2020.10.01</span>
                        <span class="news_icon">WORKS</span><a href="#">登山の基本</a>を追加いたしました。
                    </li>
                    <li>
                        <span class="news_date">2020.09.01</span>ホームページをリニューアルいたしました。
                    </li>
            </ul>
            </div><!--/cont_wrap-->
        </div><!--/content-->
        <footer>
        <ul class="f_bn">
            <li><a href="#"><i class="fas fa-book"></i><span>Blog</span></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="fab fa-facebook-square"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
        </ul>
        <div class="cont_wrap">
            <ul class="f_list">
            <li class="list_top"><a href="index.html">HOME</a></li>
            <li class="list_top"><a href="#">登山の基本</a>
                <ul>
                    <li><a href="#">登山の心得</a></li>
                    <li><a href="#">持ち物</a></li>
                    <li><a href="#">準備する物</a></li>
                </ul>
            </li>
            </ul>
            <ul class="f_list">
            <li class="list_top"><a href="#">地域から探す</a>
                <ul>
                    <li><a href="#">北海道・東北</a></li>
                    <li><a href="#">関東・甲信越</a></li>
                    <li><a href="#">中部・近畿・東海</a></li>
                    <li><a href="#">中国・四国</a></li>
                    <li><a href="#">九州・沖縄</a></li>
                    <li><a href="#">離島・その他国内</a></li>
                    <li><a href="#">海外（アメリカ・ヨーロッパ）</a></li>
                </ul>
            </li>
            </ul>
            <ul class="f_list">
            <li class="list_top"><a href="faq.html">計画を立てる</a></li>
            <li class="list_top"><a href="#">イベント情報</a></li>
            <li class="list_top"><a href="#">会社案内</a>
            <ul>
                <li><a href="company.html">会社概要（サンプル）</a></li>
                <li><a href="#">企業理念</a></li>
                <li><a href="#">採用情報</a></li>
                <li><a href="#">アクセス</a></li>
                </ul>
            </li>
            </ul>
        </div>
        <address>
        Copyright (C) MegaPx. All Rights Reserved.
        </address>
        <!--　削除禁止【ＰＲ枠】ここから　-->
        <!--prno.190909ver2.2-->
        <div class="box_pr"><ul>
        <li>Design by <a href="https://www.megapx.com/" title="ホームページ制作・ロゴデザイン：メガピクス" target="_blank">Megapx</a></li>
        <li>Template by <a href="http://www.s-hoshino.com/" title="HTMLテンプレート配布元：フリー素材屋Hoshino" target="_blank">s-hoshino.com</a></li>
        </ul></div>
        <!--　/削除禁止【ＰＲ枠】ここまで　-->
        </footer>
        <div class="to_top">
            <a href="#" title="トップへ戻る"><i class="fas fa-chevron-up"></i></a>
        </div>
        <script src="http://localhost:8888/MountainClimbing/public/js/jquery.sliderPro.min.js"></script>
        <script src="http://localhost:8888/MountainClimbing/public/js/jquery.inview.min.js"></script>
        <script src="http://localhost:8888/MountainClimbing/public/js/script.js"></script>
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
                    breakpoints:
                    {
                        640:{
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
