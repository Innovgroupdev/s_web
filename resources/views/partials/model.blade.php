<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- Section référencement ! -->
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg')}}" sizes="32x32"/>
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg')}}" sizes="16x16"/>
    <link rel="mask-icon" href="{{ asset('/images/logo.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/logo.svg')}}">


    @yield('ref')
    <!-- End section référencement ! -->

    <meta charset="UTF-8">
   
    <script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="preload" as="font">

    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            // "source": {
            //     "concatemoji": "https:\/\/wordpress.iqonic.design\/appino\/particles-3\wpincludes\/js\wpemoji-release.min.js?ver=5.7.6"
            // }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <link async rel="stylesheet" rel="preconnect" href="{{ asset('/css/styles.pure.css')}}" media='all'>
    <link async rel='stylesheet' rel="preconnect" id='appino-style-css' href="{{ asset('/css/appino-style5152.css')}}" media='all' />
    <link async rel='stylesheet' rel="preconnect" id='ionicons-css' href="{{ asset('/css/ionicons.min5152.css')}}" media='all' />
    <link async rel='stylesheet' rel="preconnect" id='appino-responsive-css' href="{{ asset('/css/responsive5152.css')}}" media='all' />
    <link async rel='stylesheet' rel="preconnect" id='owl-carousel-css' href="{{ asset('/css/owl-carousel/owl.carousel5152.css')}}" media='all' />
    <link async rel='stylesheet' rel="preconnect" id='font-awesomefont-css' href="{{ asset('/css/font-awesome5152.css')}}" media='all' />
</head>

<body data-spy="scroll" data-offset="80" class="home page-template-default page page-id-543 theme-appino woocommerce-no-js appino-front-page has-header-image page-two-column colors-light wpb-js-composer js-comp-ver-6.6.0 vc_responsive">

    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader02"></div>
        </div>
    </div>
    <!-- loading End -->
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content" title="screen-reader-text"></a>

        <!-----------------header -------------------------->
        @extends('partials.header')

        <!-----------------header -------------------------->
        @yield('content')

        <!-----------------footer -------------------------->
        @extends('partials.footer')

    </div><!-- #page -->
    <!-- === back-to-top === -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top" title="Haut"> <i class="ion-ios-arrow-up"></i> </a>
    </div>

</body>

<style>
    .imgBlog {
        height: 219px
    }

    select {
        border: none !important
    }
    @font-face {
    font-display: swap;
    }
    #loading{
        display : none;
    }
    @media(max-width : 1200px){
        .iq-blog-image{
            height : 350px !important
        }
    }
    @media(max-width : 993px){
        .iq-blog-image{
            height : 250px !important
        }
    }
    @media(max-width : 767px){
        .iq-blog-image{
            height : 300px !important
        }
    }
    @media(max-width : 450px){
        .iq-blog-image{
            height : 250px !important
        }
    }
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
   
</style>
<script rel="preconnect"  src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>