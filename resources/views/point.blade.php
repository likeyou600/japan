<!DOCTYPE html>
<html lang="zh-TW">

<script language="javascript">
    var point = ['', '桃園國際機場', '名古屋城 ', '大須觀音商店街', '高山駅', '高山老街', '新穗高高空纜車', '鐘乳岩洞', '合掌屋', '金澤駅', '近江町市場', '兼六園',
        '東茶屋街', '金澤城公園', '高岡駅', '道頓掘', '千房大阪燒', '大阪城公園', '梅田觀景台', '嵐山渡月橋', '嵐山竹林の小径', '嵐山小火車', '保津川遊船',
        '京都駅', '琵琶湖谷', '琵琶湖煙火', '産寧坂(三年坂)', '清水寺',
    ];

    function get($a) {
        document.write(point[$a]);
    }

</script>


<head>
    {{-- 下雪 --}}
    <script src="{{ asset('snow/snowstorm-min.js') }}"></script>
    <script>
        snowStorm.excludeMobile = false;
        snowStorm.animationInterval = 33;
        snowStorm.followMouse = false;
        snowStorm.flakesMaxActive = 35;

    </script>
    {{-- 下雪 --}}
    {{-- 圖片css --}}
    <link rel="stylesheet" href="{{ asset('slider/flexslider.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('slider/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.flexslider').flexslider({
                slideshowSpeed: 3000,
                animationSpeed: 1000,
                'directionNav': false,
                'controlNav': false

            });
        });

    </script>
    {{-- 圖片css --}}
    {{-- 動畫css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- 動畫css --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,user-scalable=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&family=Yusei+Magic&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/japan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainnavsetting.css') }}">
    <link rel="icon" href="{{ asset('japan.ico') }}" type="image/x-icon" />
    <title>日本中部、關西 九天八夜</title>
    <meta name="google-site-verification" content="Hl3TgEqr18nG3xghut6awJmWs6IJIKg-r1U1735PcVQ" />
</head>

<body class="bodycolor">
    <header>
        <div style="position: relative;">
            <input type="image" src="picture/pluscircle.png" class="circleicon" style="z-index: 2;"
                onclick="window.location='{{ route("japan")}}'">
            <input type="image" src="picture/headerfont.png" class="headerfont" style="z-index: 2;"
                onclick="window.location='{{ route("japan")}}'">
        </div>
    </header>
    <nav class="navstyle">
        <ul style="list-style: none;">
            <li class="absolute navi1 navli">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/point.png);"
                onclick="window.location='{{ route("point")}}'">
                <p class="navfont">景點簡介</p>
            </li>
            <li class="absolute navi2 navli">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/home.png);"
                onclick="window.location='{{ route("stay")}}'">
                <p class="navfont">住宿簡介</p>
            </li>
            <li class="absolute navi3 navli">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/plane.png);">
                <p class="navfont">詳細行程</p>
            </li>
            <li class="absolute navi4 navli">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/camera.png);"
                    onclick="location.href='https://www.instagram.com/plus3u_u3ultra/'">
                <p class="navfont">更多照片</p>
            </li>
        </ul>
    </nav>

    <section id="storage">
        <div class="modal fade" id="point1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            <script>
                                get(1);

                            </script>
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="picture/point/1.jpg" class="radius" style="width: 100%">
                        <p class="userfontfamily4">臺灣桃園國際機場，位於臺灣的桃園市大園區。
                            由桃園國際機場股份有限公司管理與營運，為臺灣主要的國際客運出入吞吐地，設有兩條跑道及112個停機位；是中華航空、華信航空、臺灣虎航、長榮航空、立榮航空、中華航空貨運與長榮航空貨運的樞紐飛機場，同時也是臺北的聯外國際機場。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="point2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            <script>
                                get(2);

                            </script>
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="picture/point/2.jpg" class="radius" style="width: 100%">
                        <p class="userfontfamily4">名古屋城是位於日本愛知縣名古屋市內的一座城堡，在江戶時代是作為 「尾張藩」 藩主的居住城堡，
                            別號又稱為金鯱城或金城，與大阪城和熊本城同被列為日本三大名城。名古屋城整個分為中心地帶的本丸區，而名古屋城的主建築天守閣就是位於本丸區內的西端，天守閣東南面為本丸御殿遺跡，本丸區的
                            兩角則分別建有西南角樓和東南角樓。現在每當櫻花盛開的時節，從各地湧來的人潮濟滿整個園區，觀賞櫻花吐艷的嬌麗秀色。
                        </p>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">區分</th>
                                <th scope="col">個人</th>
                                <th scope="col">30人以上的團體</th>
                                <th scope="col">100人以上的團體</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">成人</th>
                                <td>500</td>
                                <td>450</td>
                                <td>400</td>
                            </tr>
                            <tr>
                                <th scope="row">名古屋市內高齡人<br>持有名古屋市發行的敬老手冊者</th>
                                <td>100</td>
                                <td>90</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <th scope="row">中學生以下</th>
                                <td>免費</td>
                                <td>免費</td>
                                <td>免費</td>
                            </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>

       


    </section>




    <section id="in">
        <div class="bodybackground">
            {{-- <ul style="list-style: none;">
                <li class="absolute">
                </li> --}}
            <div class="mycontainer">
                
                <div class="row">
                    @for ($i = 1; $i < 25; $i++)
                    <div class="col-sm-3 col-6 text-center pointimagestyle">
                        <img src="picture/point/{{$i}}.jpg" class="full picshadow radius" data-toggle="modal"
                            data-target="#point{{$i}}">
                        <p class="pointfont">
                            <script>
                                get({{$i}});

                            </script>
                        </p>
                    </div>
                    @endfor
                    
                </div>
              
                <div class="row">
                    <div class="col-sm-4 col-6 text-center pointimagestyle">
                        <img src="picture/point/25.jpg" class="full picshadow radius" data-toggle="modal"
                            data-target="#point25">
                        <p class="pointfont">
                            <script>
                                get(25);

                            </script>
                        </p>
                    </div>
                    <div class="col-sm-4 col-6 text-center pointimagestyle">
                        <img src="picture/point/26.jpg" class="full picshadow radius" data-toggle="modal"
                            data-target="#point26">
                        <p class="pointfont">
                            <script>
                                get(26);

                            </script>
                        </p>
                    </div>
                    <div class="col-sm-4 col-12 text-center pointimagestyle">
                        <img src="picture/point/27.jpg" class="fin picshadow radius" data-toggle="modal"
                            data-target="#point27">
                        <p class="pointfont">
                            <script>
                                get(27);

                            </script>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

</body>

</html>
