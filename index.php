<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sSiteTitle; ?> | Home</title>
    <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=G-5EKS4HV73Z"></script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-5EKS4HV73Z');
    </script>
    <meta name="description"
        content="Read Bangladesh latest news updates, political affairs news, business news, crime news, government briefings, Bangladesh law & rights at Businessinsiderbd.com">
    <meta name="keywords" content="<?php echo $sSiteTitle; ?>">
    <meta http-equiv="refresh" content="6000">
    <meta name="author" content="<?php echo $sAuthor; ?>">
    <meta name="Developer" content="<?php echo $sDeveloper; ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo $sEmail; ?>">
    <meta name="copyright"
        content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">
    <meta name="p:domain_verify" content="c0b55870314e28b95906c5cd302b5d39" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta property="fb:app_id" content="<?php echo $sAppId; ?>">
    <meta property="fb:pages" content="102310071621132">
    <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
    <meta property="og:title" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:description" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:url" content="<?php echo $sSiteURL; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
    <meta property="og:locale" content="en_US">
    <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
    <link rel="canonical" href="<?php echo $sSiteURL; ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">

    <?php echo $sCSSBootStrap;
    echo $sCSSFontAwesome;
    echo $sCSSSolaimanLipi;
    echo $sCSSBootstrapIcon;
    echo $sCSSEMM;
    ?>
</head>

<body>
    <?php echo $sFbRoot; ?>
    <?php include_once("common/header.php"); ?>
    <main>
        <div class="container-fluid position-relative">
            <div class="overly"></div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $sSiteURL; ?>media/imgAll/s-1.webp" class="topslider">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $sSiteURL; ?>media/imgAll/s-2.jpg" class="topslider">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $sSiteURL; ?>media/imgAll/s-3.jpg" class="topslider">
                    </div>
                </div>
            </div>
            <div class="topText">
                <h2 class="topTitle"> English Department of Rajshahi University Alumni </h2>
                <p class="topSubTitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere fugiat placeat
                    praesentium dolores? Officia eos accusantium molestias. Vel, cum hic!</p>
            </div>
            <div class="multiColorBorder"></div>
        </div>
        <section class="welcomeSec">
            <div class="container">
                <h3 class="text-center">Welcome Alumni</h3>
                <p class="subtitle pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam saepe
                    consectetur?</p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="imgResize">
                            <figure class="imgViewer">
                                <picture class="fixingRatio">
                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/alumni.webp"
                                        class="img-fluid img100 imgRatio welImg">
                                </picture>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="welcomeNote">
                            <p><span><i class="fas fa-quote-left"></i></span> Quoth the stayed so eyes sculptured shore
                                rapping angels nothing that. Grim radiant louder
                                visiter
                                that stepped stood that. Be wondering what you we the and sitting get. Then truly no
                                reclining
                                marvelled the while nevermore. Oer no on and. A weary albions though where to, come
                                times
                                another ye
                                childe a few. Passed not monks come fame what womans scene old by, domestic passion
                                loved
                                shades
                                strange blast from, days is that say land evil steel isle heal virtues, breast festal
                                scorching he
                                nor and, paphian land any childe. shades
                                strange blast from, days is that say land evil steel isle heal virtues, breast festal
                                scorching he
                                nor and, paphian land any childe. rvelled the while nevermore. Oer no on and. A weary
                                albions though where to, come times
                                another ye
                                childe a few. Passed not monks come fame what womans scene old by, domestic passion
                                loved
                                shades
                                strange blast from, days is that say land evil steel isle heal virtues, breast festal
                                scorching he
                                nor and, paphian land any childe. shades
                                strange blast from, day <span><i class="fas fa-quote-right"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="videoSec">
            <div class="container">
                <h3 class="secTitle">Introduction Video</h3>
                <p class="subtitle pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam saepe
                    consectetur?</p>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/Fxa_tA8t6AU" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="RecentEvent">
            <div class="container">
                <h3 class="secTitle">Upcoming Event</h3>
                <p class="subtitle pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam saepe
                    consectetur?</p>
                <div id="events" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#">
                                <div class="row gx-0">
                                    <div class="col-5 offset-1">
                                        <div class="imgResize">
                                            <figure class="imgViewer">
                                                <picture class="fixingRatio">
                                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-1.jpg"
                                                        class="img-fluid img100 imgRatio eventImg">
                                                </picture>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-5 bgEvent p-3">
                                        <h2 class="eventTitle">
                                            Boat Capsize in Bangladesh - Urgent Funeral Support
                                        </h2>
                                        <p class="brief">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur rem
                                            quaerat
                                            odit obcaecati impedit perferendis, laborum nam quibusdam cupiditate in sint
                                            labore corrupti nemo laudantium! Deserunt ullam magni aut ut accusantium
                                            quam
                                            odit reiciendis perspiciatis!
                                        </p>
                                        <p class="date">18 June</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <div class="row gx-0">
                                    <div class="col-5 offset-1">
                                        <div class="imgResize">
                                            <figure class="imgViewer">
                                                <picture class="fixingRatio">
                                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-2.jpg"
                                                        class="img-fluid img100 imgRatio eventImg">
                                                </picture>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-5 bgEvent p-3">
                                        <h2 class="eventTitle">
                                            Boat Capsize in Bangladesh - Urgent Funeral Support
                                        </h2>
                                        <p class="brief">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur rem
                                            quaerat
                                            odit obcaecati impedit perferendis, laborum nam quibusdam cupiditate in sint
                                            labore corrupti nemo laudantium! Deserunt ullam magni aut ut accusantium
                                            quam
                                            odit reiciendis perspiciatis!
                                        </p>
                                        <p class="date">18 June</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <div class="row gx-0">
                                    <div class="col-5 offset-1">
                                        <div class="imgResize">
                                            <figure class="imgViewer">
                                                <picture class="fixingRatio">
                                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-3.jpg"
                                                        class="img-fluid img100 imgRatio eventImg">
                                                </picture>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-5 bgEvent p-3">
                                        <h2 class="eventTitle">
                                            Boat Capsize in Bangladesh - Urgent Funeral Support
                                        </h2>
                                        <p class="brief"> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Tenetur rem quaerat odit obcaecati impedit perferendis, laborum nam
                                            quibusdam cupiditate in sint labore corrupti nemo laudantium! Deserunt ullam
                                            magni aut ut accusantium quam odit reiciendis perspiciatis! </p>
                                        <p class="date">18 June</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <div class="row gx-0">
                                    <div class="col-5 offset-1">
                                        <div class="imgResize">
                                            <figure class="imgViewer">
                                                <picture class="fixingRatio">
                                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-2.jpg"
                                                        class="img-fluid img100 imgRatio eventImg">
                                                </picture>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-5 bgEvent p-3">
                                        <h2 class="eventTitle">
                                            Boat Capsize in Bangladesh - Urgent Funeral Support
                                        </h2>
                                        <p class="brief">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur rem
                                            quaerat
                                            odit obcaecati impedit perferendis, laborum nam quibusdam cupiditate in sint
                                            labore corrupti nemo laudantium! Deserunt ullam magni aut ut accusantium
                                            quam
                                            odit reiciendis perspiciatis!
                                        </p>
                                        <p class="date">18 June</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <div class="row gx-0">
                                    <div class="col-5 offset-1">
                                        <div class="imgResize">
                                            <figure class="imgViewer">
                                                <picture class="fixingRatio">
                                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-3.jpg"
                                                        class="img-fluid img100 imgRatio eventImg">
                                                </picture>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-5 bgEvent p-3">
                                        <h2 class="eventTitle">
                                            Boat Capsize in Bangladesh - Urgent Funeral Support
                                        </h2>
                                        <p class="brief">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur rem
                                            quaerat
                                            odit obcaecati impedit perferendis, laborum nam quibusdam cupiditate in sint
                                            labore corrupti nemo laudantium! Deserunt ullam magni aut ut accusantium
                                            quam
                                            odit reiciendis perspiciatis!
                                        </p>
                                        <p class="date">18 June</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#events" data-bs-slide="prev">
                        <span><i class="fas fa-arrow-left"></i></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#events" data-bs-slide="next">
                        <span><i class="fas fa-arrow-right"></i></span>
                    </button>
                </div>
            </div>
        </section>
        <section class="workSection">
            <div class="container">
                <h3 class="secTitle">Latest News</h3>
                <p class="subtitle pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quibusdam saepe
                    consectetur?</p>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="workDiv">
                            <a href="#">
                                <div class="imgResize">
                                    <figure class="imgViewer">
                                        <picture class="fixingRatio">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-1.jpg"
                                                class="img-fluid img100 imgRatio eventImg">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="details">
                                    <h3>Boat Capsize in Bangladesh - Urgent Funeral Support</h3>
                                    <p class="date">18 June 2021</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="workDiv">
                            <a href="#">
                                <div class="imgResize">
                                    <figure class="imgViewer">
                                        <picture class="fixingRatio">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-2.jpg"
                                                class="img-fluid img100 imgRatio eventImg">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="details">
                                    <h3>Devastating Flood of 2020 in Bangladesh</h3>
                                    <p class="date">21 July 2021</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="workDiv">
                            <a href="#">
                                <div class="imgResize">
                                    <figure class="imgViewer">
                                        <picture class="fixingRatio">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-3.jpg"
                                                class="img-fluid img100 imgRatio eventImg">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="details">
                                    <h3>Qurbani for the Deprived People in Bangladesh</h3>
                                    <p class="date">11 May 2021</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="workDiv">
                            <a href="#">
                                <div class="imgResize">
                                    <figure class="imgViewer">
                                        <picture class="fixingRatio">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-3.jpg"
                                                class="img-fluid img100 imgRatio eventImg">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="details">
                                    <h3>Qurbani for the Deprived People in Bangladesh</h3>
                                    <p class="date">11 May 2021</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="workDiv">
                            <a href="#">
                                <div class="imgResize">
                                    <figure class="imgViewer">
                                        <picture class="fixingRatio">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-1.jpg"
                                                class="img-fluid img100 imgRatio eventImg">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="details">
                                    <h3>Boat Capsize in Bangladesh - Urgent Funeral Support</h3>
                                    <p class="date">18 June 2021</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="workDiv">
                            <a href="#">
                                <div class="imgResize">
                                    <figure class="imgViewer">
                                        <picture class="fixingRatio">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/ev-2.jpg"
                                                class="img-fluid img100 imgRatio eventImg">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="details">
                                    <h3>Devastating Flood of 2020 in Bangladesh</h3>
                                    <p class="date">21 July 2021</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center py-4">
                <a href="#">
                    <h5 class="readMore">Read More <i class="fas fa-arrow-circle-right "></i></h5>
                </a>
            </div>
        </section>

    </main>
    <?php include_once("common/footer.php"); ?>
    <?php include_once("common/scrollBreaking.php"); ?>
    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <!--[if lt IE 9]>
    <?php echo $sJShtml5shiv; ?>
    <?php echo $sJSrespond; ?>
    <![endif]-->
    <?php echo $sJSEMM; ?>
    <script>
    $(document).ready(function() {

        var counters = $(".count");
        var countersQuantity = counters.length;
        var counter = [];

        for (i = 0; i < countersQuantity; i++) {
            counter[i] = parseInt(counters[i].innerHTML);
        }

        var count = function(start, value, id) {
            var localStart = start;
            setInterval(function() {
                if (localStart < value) {
                    localStart++;
                    counters[id].innerHTML = localStart;
                }
            }, 1);
        }

        for (j = 0; j < countersQuantity; j++) {
            count(0, counter[j], j);
        }
    });
    </script>
</body>

</html>