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
                onclick="location.href='https://bakerychu.ddns.net/japan'">
            <input type="image" src="picture/headerfont.png" class="headerfont" style="z-index: 2;"
                onclick="location.href='https://bakerychu.ddns.net/japan'">
        </div>
    </header>
    <nav class="navstyle" style="z-index: 1">
        <ul style="list-style: none;">
            <li class="absolute navi1 navli">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/point.png);"
                    onclick="location.href='https://bakerychu.ddns.net/japan/point'">
                <p class="navfont">景點簡介</p>
            </li>
            <li class="absolute navi2 navli">
                <input type="button" class="navicon" style="background-image: url(picture/navpic/home.png);"
                    onclick="location.href='https://bakerychu.ddns.net/japan/stay'">
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
        <div class="modal fade" id="stay1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            名古屋-300HOSTEL
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="picture/stay/stay1.jpg" class="radius" style="width: 70%">
                        <p class="userfontfamily4">
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.819941064014!2d136.89114461525065!3d35.16111108031887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003772f81b102f9%3A0xb6f6de5b01ed133f!2s300HOSTEL%20Nagoya%20Osu%20Kannon!5e0!3m2!1szh-TW!2stw!4v1613755781056!5m2!1szh-TW!2stw"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="stay2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            平湯-鴨蹠草旅莊
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="picture/stay/stay2.jpg" class="radius" style="width: 70%">
                        <p class="userfontfamily4">
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3219.970503122695!2d137.5535307!3d36.1915992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d493e0de29611%3A0xd57747321e057077!2z5peF6I2YIOOBpOOChuOBj-OBlSBUU1VZVUtVU0E!5e0!3m2!1szh-TW!2stw!4v1613755914757!5m2!1szh-TW!2stw"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="stay3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            高山-青年旅館
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="picture/stay/stay3.jpg" class="radius" style="width: 70%">
                        <p class="userfontfamily4">
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6443.920802880711!2d137.2536549762221!3d36.143177420356636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3b5d00e3a3161ba!2sThe%20Takayama%20Station%20Hostel!5e0!3m2!1szh-TW!2stw!4v1613756039646!5m2!1szh-TW!2stw"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="stay45" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            金澤-Resol Trinity
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="picture/stay/stay4,5.jpg" class="radius" style="width: 70%">
                        <p class="userfontfamily4">
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3204.3248778734924!2d136.6523856152894!3d36.5703881799966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8337077cab425%3A0x196b3684b8a4c33a!2z6YeR5r6kUkVTT0wgVFJJTklUWemFkuW6lw!5e0!3m2!1szh-TW!2stw!4v1613756125837!5m2!1szh-TW!2stw"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="stay6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            大阪-Drop Inn Osaka
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="picture/stay/stay6.jpg" class="radius" style="width: 70%">
                        <p class="userfontfamily4">
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.1990585074273!2d135.48643021523836!3d34.700158880434685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68a186eff3f%3A0x632ea3dbf08ffb5b!2sDrop%20Inn%20Osaka!5e0!3m2!1szh-TW!2stw!4v1613756191472!5m2!1szh-TW!2stw"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="stay78" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 2.3rem;">
                    <div class="modal-header">
                        <p class="modal-title pointfont changename_modalsize" id="exampleModalCenterTitle">
                            京都-蘭多爾 Hotel
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="picture/stay/stay7,8.jpg" class="radius" style="width: 70%">
                        <p class="userfontfamily4">
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5658.960246725362!2d135.75954534425298!3d34.980471191936566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010f4d73c8bd8d%3A0xd18c042fc85a6999!2sRandor%20Residence%20Kyoto%20Classic!5e0!3m2!1szh-TW!2stw!4v1613756363752!5m2!1szh-TW!2stw"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <section id="stay">
        <div class="staybackground" style="position: relative;">
            <ul style="list-style: none;">
                <li class="absolute stay1 stayup stay11">
                    <input type="button" class="stayicon" style="background-image: url(picture/stay/stay1.png);"
                        data-toggle="modal" data-target="#stay1">
                    <p class="stayfont">名古屋-300HOSTEL</p>
                </li>
                <li class="absolute stay2 staydown stay11">
                    <input type="button" class="stayicon" style="background-image: url(picture/stay/stay2.png);"
                        data-toggle="modal" data-target="#stay2">
                    <p class="stayfont">平湯-鴨蹠草旅莊</p>
                </li>
                <li class="absolute stay3 stayup stay22">
                    <input type="button" class="stayicon" style="background-image: url(picture/stay/stay3.png);"
                        data-toggle="modal" data-target="#stay3">
                    <p class="stayfont">高山-青年旅館</p>
                </li>
                <li class="absolute stay45 staydown stay22">
                    <input type="button" class="stayicon"
                        style="background-image: url(picture/stay/stay4,5.png);" data-toggle="modal"
                        data-target="#stay45">
                    <p class="stayfont">金澤-Resol Trinity</p>
                </li>
                <li class="absolute stay6 stayup stay33">
                    <input type="button" class="stayicon" style="background-image: url(picture/stay/stay6.png);"
                        data-toggle="modal" data-target="#stay6">
                    <p class="stayfont">大阪-Drop Inn Osaka</p>
                </li>
                <li class="absolute stay78 staydown stay33">
                    <input type="button" class="stayicon"
                        style="background-image: url(picture/stay/stay7,8.png);" data-toggle="modal"
                        data-target="#stay78">
                    <p class="stayfont">京都-蘭多爾 Hotel</p>
                </li>
            </ul>

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
