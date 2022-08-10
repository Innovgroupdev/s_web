
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<footer id="colophon" class="site-footer2">
    <!-- Address -->
    <div class="container">
        <div class="row">


            <div class="col-md-6 col-lg-4">
                <div class="iq-fancy-box-04">
                    <div class="iq-icon">
                        <i aria-hidden="true" class="ion-ios-location-outline"></i>
                    </div>
                    <div class="fancy-content">
                        <h5>Siège social</h5>
                        <span>
                        Immeuble FADEL, Agbalépédogan, Lomé-TOGO</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="iq-fancy-box-04">
                    <div class="iq-icon">
                        <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                    </div>
                    <div class="fancy-content">
                        <h5>Contactez-nous</h5>
                        <span class="lead"><a href="tel:+22899328853">+228 99 32 88 53</a></span>
                        <p>Lundi – Vendredi : 09h 00 – 18h 00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="iq-fancy-box-04">
                    <div class="iq-icon">
                        <i aria-hidden="true" class="ion-ios-email-outline"></i>
                    </div>
                    <div class="fancy-content">
                        <h5>Email</h5>
                        <span><a href="mailto:Support@cible-app.com">Support@cible-app.com </a></span>
                        <p>Réponse dans 1h maximum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address END -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row flex-row-reverse">


                <div class="col-lg-6">
                    <!-- <ul class="info-share">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.instagram.com/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill : #fff; width:14px;height : 14px">
                                <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a></li>
                    </ul> -->
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="footer-copyright">
                        Copyright 2021 <a href="http://www.innovgroup.tech/" target="_blank">DIGITAL INNOV GROUP</a> All
                        Rights Reserved. </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- === back-to-top End === -->

<script>
    jQuery(document).ready(function () {
        jQuery(document).on('submit', 'form#appino_subscription', function (e) {
            e.preventDefault();
            var sub_name = jQuery('#subnewsname').val();
            var sub_email = jQuery('#subnewsemail').val();
            //alert(sub_email);
            jQuery.ajax({
                url: "wpadmin/admin-ajax.php",
                type: 'POST',
                data: {
                    sub_email: sub_email,
                    action: 'check_info_details'
                },
                success: function (results) {
                    jQuery('.epic_results').html(results);
                    jQuery('#subnewsemail').val('');
                },
                complete: function () {
                    jQuery('.loading').hide();
                    jQuery(".news_text").show();
                    jQuery("#sidebar_button").show();
                    jQuery('.epic_results').show();
                },
                beforeSend: function () {
                    jQuery('.loading').show();
                    jQuery(".news_text").show();
                    jQuery("#sidebar_button").show();
                    jQuery('.epic_results').hide();
                }
            });

        });

    });


</script>

<script>
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<link rel='stylesheet' id='font-awesome-css'
      href='../../../maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min4698.css?ver=4.6.3' media='all' />
<style id='font-awesome-inline-css'>
    [data-font="FontAwesome"]:before {
        font-family: 'FontAwesome' !important;
        content: attr(data-icon) !important;
        speak: none !important;
        font-weight: normal !important;
        font-variant: normal !important;
        text-transform: none !important;
        line-height: 1 !important;
        font-style: normal !important;
        -webkit-font-smoothing: antialiased !important;
        -moz-osx-font-smoothing: grayscale !important;
    }
</style>
<link rel='stylesheet' id='vc_openiconic-css'
      href="{{ asset('wp-content/plugins/js_composer/assets/css/lib/vc-open-iconic/vc_openiconic.min31dc.css?ver=6.6.0')}}"
      media='all' />
<link rel='stylesheet' id='vc_typicons-css'
      href="{{ asset('wp-content/plugins/js_composer/assets/css/lib/typicons/src/font/typicons.min31dc.css?ver=6.6.0')}}"
      media='all' />
<link rel='stylesheet' id='vc_entypo-css'
      href="{{ asset('wp-content/plugins/js_composer/assets/css/lib/vc-entypo/vc_entypo.min31dc.css?ver=6.6.0')}}" media='all' />
<link rel='stylesheet' id='vc_linecons-css'
      href="{{ asset('wp-content/plugins/js_composer/assets/css/lib/vc-linecons/vc_linecons_icons.min31dc.css?ver=6.6.0')}}"
      media='all' />
<script src="{{ asset('wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0')}}"
        id='jquery-selectBox-js'></script>
<script src="{{ asset('wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6')}}"
        id='prettyPhoto-js'></script>
<script id='jquery-yith-wcwl-js-extra'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = { "ajax_url": "\/appino\/particles-3\wpadmin\/admin-ajax.php", "redirect_to_cart": "no", "multi_wishlist": "", "hide_add_button": "1", "enable_ajax_loading": "", "ajax_loader_url": "https:\/\/wordpress.iqonic.design\/appino\/particles-3\wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg", "remove_from_wishlist_after_add_to_cart": "1", "is_wishlist_responsive": "1", "time_to_close_prettyphoto": "3000", "fragments_index_glue": ".", "reload_on_found_variation": "1", "mobile_media_query": "768", "labels": { "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.", "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>" }, "actions": { "add_to_wishlist_action": "add_to_wishlist", "remove_from_wishlist_action": "remove_from_wishlist", "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem", "load_mobile_action": "load_mobile", "delete_item_action": "delete_item", "save_title_action": "save_title", "save_privacy_action": "save_privacy", "load_fragments": "load_fragments" } };
    /* ]]> */
</script>
<script src="{{ asset('wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min7ee6.js?ver=3.0.23')}}"
        id='jquery-yith-wcwl-js'></script>
<script src="{{ asset('wp-includes/js/dist/vendorwppolyfill.min89b1.js?ver=7.4.4')}}" id='wp-polyfill-js'></script>
<script id='wp-polyfill-js-after'>
    ('fetch' in window) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>'); (document.contains) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>'); (window.DOMRect) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>'); (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>'); (window.FormData && window.FormData.prototype.keys) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>'); (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>'); ('objectFit' in document.documentElement.style) || document.write('<script src="wp-includes/js/dist/vendorwppolyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>');
</script>
<script id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = { "api": { "root": "https:\/\/wordpress.iqonic.design\/appino\/particles-3\wpjson\/", "namespace": "contact-form-7\/v1" } };
    /* ]]> */
</script>
<script src="{{ asset('wp-content/plugins/contact-form-7/includes/js/indexc225.js?ver=5.4.1')}}" id='contact-form-7-js'></script>
<script src="{{ asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4')}}"
        id='js-cookie-js'></script>
<script id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = { "ajax_url": "\/appino\/particles-3\wpadmin\/admin-ajax.php", "wc_ajax_url": "\/appino\/particles-3\/?wc-ajax=%%endpoint%%" };
    /* ]]> */
</script>
<script src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7e15.js?ver=5.5.4')}}"
        id='woocommerce-js'></script>
<script id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = { "ajax_url": "\/appino\/particles-3\wpadmin\/admin-ajax.php", "wc_ajax_url": "\/appino\/particles-3\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_fc8b276b20d7aef014dcaa208eaa6441", "fragment_name": "wc_fragments_fc8b276b20d7aef014dcaa208eaa6441", "request_timeout": "5000" };
    /* ]]> */
</script>
<script src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7e15.js?ver=5.5.4')}}"
        id='wc-cart-fragments-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/bootstrap.min5152.js?ver=1.0')}}" id='bootstrap-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/owl.carousel.min5152.js?ver=1.0')}}" id='carousel-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/counter/jquery.countTo5152.js?ver=1.0')}}"
        id='jquery-counter-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/jquery.appear5152.js?ver=1.0')}}" id='jquery-appear-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/magnific-popup/jquery.magnific-popup.min5152.js?ver=1.0')}}"
        id='jquery-magnific-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/skrollr5152.js?ver=1.0')}}" id='skrollr-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/wow.min5152.js?ver=1.0')}}" id='wow-js'></script>
<script src="{{ asset('wp-content/themes/appino/woocommerce/assets/wishlist5152.js?ver=1.0')}}" id='wishlist-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/jquery.countdown.min5152.js?ver=1.0')}}"
        id='jquery-countdown-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/appino-custom5152.js?ver=1.0')}}" id='appino-custom-js'></script>
<script src="{{ asset('wp-includes/jswpembed.mincfaa.js?ver=5.7.6')}}" id='wp-embed-js'></script>
<script src="{{ asset('wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min31dc.js?ver=6.6.0')}}"
        id='wpb_composer_front_js-js'></script>
<script src="{{ asset('wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min31dc.js?ver=6.6.0')}}"
        id='vc_jquery_skrollr_js-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/particles/particles.min5152.js?ver=1.0')}}"
        id='jquery-particles-js'></script>
<script src="{{ asset('wp-content/themes/appino/assets/js/particles/app5152.js?ver=1.0')}}" id='jquery-app-js'></script>

<!-- === back-to-top End === -->

</body>
</html>
