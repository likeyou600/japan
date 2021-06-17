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
        <script src="snow/snowstorm-min.js"></script>
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
    <script src="slider/jquery.flexslider.js"></script>
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
    <link rel="stylesheet" href="{{ asset('css/homenavsetting.css') }}">
    <link rel="icon" href="{{ asset('japan.ico') }}" type="image/x-icon" />
    <title>日本中部、關西 九天八夜</title>
    <meta name="description" content="人生中的第一次出國旅遊該怎麼規劃呢?!快來看看第一次去日本中部關該怎麼安排!!!"/>

</head>

<body class="bodycolor">
    <header>
        <div style="position: relative;">
            <div class="picdiv">
                <div class="flexslider mobilediv" style="z-index: 0;">
                    <ul class="slides">
                        @for($i=1;$i<=27;$i++)
                        <li><img src="picture/headerpic/japan{{$i}}.jpg"></li>
                        @endfor
                    </ul>

                </div>
                <img src="picture/fincircle.png" class="circle" style="z-index: 1;">
            </div>
            <img src="picture/pluscircle.png" class="circleicon" style="z-index: 2;">
            <img src="picture/headerfont.png" class="headerfont" style="z-index: 2;">
        </div>
    </header>
    <nav class="navstyle">
        <ul style="list-style: none;">
            <li class="absolute navi1 navli navliup">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/point.png);"
                onclick="location.href='https://bakerychu.ddns.net/japan/point'">
                <p class="navfont">景點簡介</p>
            </li>
            <li class="absolute navi2 navli navliup">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/home.png);"
                onclick="location.href='https://bakerychu.ddns.net/japan/stay'">
                <p class="navfont">住宿簡介</p>
            </li>
            <li class="absolute navi3 navli navlidown">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/plane.png);">
                <p class="navfont">詳細行程</p>
            </li>
            <li class="absolute navi4 navli navlidown">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/camera.png);"
                    onclick="location.href='https://www.instagram.com/plus3u_u3ultra/'">
                <p class="navfont">更多照片</p>
            </li>
        </ul>
    </nav>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

</body>

</html>
