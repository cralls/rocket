<?php
/*if ($_SERVER['HTTPS'] == "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
} */
?>
<?php session_start(); ?>

<!DOCTYPE html>

<!--[if lt IE 7 ]>
<html lang="en" id="top" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>
<html lang="en" id="top" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" id="top" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" id="top" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" id="top" class="no-js"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Custom Recap</title>


    <meta http-equiv="Cache-Control" content="max-age=3600"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="Default Description"/>
    <meta name="keywords" content="Magento, Varien, E-commerce"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="https://www.rocketsciencesports.com/media/favicon/default/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="https://www.rocketsciencesports.com/media/favicon/default/favicon.ico"
          type="image/x-icon"/>
    <!--[if lt IE 7]>
    <script type="text/javascript">
        //<![CDATA[
    var BLANK_URL = 'https://www.rocketsciencesports.com/js/blank.html';
    var BLANK_IMG = 'https://www.rocketsciencesports.com/js/spacer.gif';
//]]>
</script>
<![endif]-->
    <!--[if lt IE 10]>
    <div style=' clear: both; text-align:center; position: relative; margin: 0 auto;'>
        <a href="//windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"
           style='display:inline-block; margin: 0 auto;'><img
                src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/warning_bar_0000_us.jpg"
                border="0" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a>
    </div>
    <style>
        body {
            min-width: 960px !important;
        }
    </style>
    <![endif]-->
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/base/default/ajaxcartpro/css/styles.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/aw_blog.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/base/default/css/style-newssubscribers.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/tm/productlistgallery/style.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/bootstrap.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/owlcarousel/owl.carousel.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/owlcarousel/owl.theme.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/font-awesome.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/material-design.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/material-icons.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/camera/css/camera.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/styles.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/global.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/header.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/header-nav.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/header-search.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/header-account.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/header-cart.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/layout/footer.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/catalog-product.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/checkout-cart.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/product-list.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/account-reviews.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/catalogsale.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/catalog-compare.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/checkout-multi-address.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/checkout-cart-minicart.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/checkout-onepage.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/cms.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/configurableswatches.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/contacts.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/pricing_conditions.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/newsletterpopup.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/customer.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/review.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/search.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/tags.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/wishlist.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/catalog-msrp.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/sidebar.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/megamenu.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/module/superfish.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/css/easydropdown.css" media="all"/>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/prototype/prototype.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/lib/jquery/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/lib/jquery/noconflict.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/lib/ccard.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/prototype/validation.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/scriptaculous/builder.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/scriptaculous/effects.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/scriptaculous/dragdrop.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/scriptaculous/controls.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/scriptaculous/slider.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/varien/js.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/varien/form.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/mage/translate.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/mage/cookies.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/ajaxcartpro.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/cart.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/sidebar.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/topLinks.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/skipLinks.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/options.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/wishlist.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/miniWishlist.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/addProductConfirmation.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/updaters/removeProductConfirmation.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/observers/clickOnButtonInCartPageForm.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/observers/clickOnAddToCartInCategoryList.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/observers/clickOnAddToCartInOptionsPopup.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/observers/clickOnAddToCartInProductPage.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/observers/clickOnDeleteFromCart.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/observers/clickOnAddToCartInMiniWishlist.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/varien/product.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/aw_ajaxcartpro/product.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/js/newssubscribers/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="https://www.rocketsciencesports.com/js/newssubscribers/script.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/lib/modernizr.custom.min.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/lib/selectivizr.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/lib/matchMedia.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/lib/matchMedia.addListener.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/lib/enquire.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/app.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/lib/imagesloaded.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/minicart.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/base/default/js/bundle.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/rwd/default/ajaxcartpro/js/productList.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/cmsmart/megamenu/cmsmartmenu.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/tm/productlistgallery/thumbs.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/tm-stick-up.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/front.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/jquery.easydropdown.min.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/jquery.animateNumber.js"></script>
    <script type="text/javascript"
            src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/js/jquery-ui.js"></script>
    <link href="https://www.rocketsciencesports.com/news/rss/index/store_id/1/" title="News" rel="alternate"
          type="application/rss+xml"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=latin,cyrillic"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:400,500,300,700&amp;subset=latin,cyrillic"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"/>
    <!--[if  (lte IE 8) & (!IEMobile)]>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/rwd/default/css/styles-ie8.css" media="all"/>
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css"
          href="https://www.rocketsciencesports.com/skin/frontend/base/default/ajaxcartpro/css/ie7-style.css"
          media="all"/>
    <![endif]-->

    <script type="text/javascript">
        //<![CDATA[
        Mage.Cookies.path = '/';
        Mage.Cookies.domain = '.rocketsciencesports.com';
        //]]>
    </script>
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>

    <script type="text/javascript">
        //<![CDATA[
        optionalZipCountries = [];
        //]]>
    </script>
    <!-- BEGIN GOOGLE ANALYTICS CODE -->
    <script type="text/javascript">
        //<![CDATA[
        var _gaq = _gaq || [];

        _gaq.push(['_setAccount', 'UA-2378880-1']);

        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        //]]>
    </script>
    <!-- END GOOGLE ANALYTICS CODE -->
    <script type="text/javascript">
        //<![CDATA[
        var AWACP_CONFIG = {
            mageVersion: '1.9.2.1',
            useProgress: 1,
            addProductConfirmationEnabled: 1,
            removeProductConfirmationEnabled: 0,
            dialogsVAlign: 'center',
            cartAnimation: 'opacity',
            addProductCounterBeginFrom: 0,
            removeProductCounterBeginFrom: 0,


            hasFileOption: false
        };

        Event.observe(document, 'dom:loaded', function () {
            AW_AjaxCartPro.init(AWACP_CONFIG);
        });

        //]]>
    </script>
    <script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script>
    <script type='text/javascript'
            src='https://www.rocketsciencesports.com/js/lightwindow/javascript/lightwindow.js'></script>
    <link rel='stylesheet' href='https://www.rocketsciencesports.com/js/lightwindow/css/lightwindow.css' type='text/css'
          media='screen'/>
    <script type="text/javascript"
            src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.3/scriptaculous.js"></script>
    <link rel='stylesheet' href='https://www.rocketsciencesports.com/js/protoshow/css/protoshow.css' type='text/css'
          media='screen'/>
    <script type='text/javascript' src='https://www.rocketsciencesports.com/js/protoshow/protoshow.js'></script>
    <script type='text/javascript' src='https://www.rocketsciencesports.com/js/protoshow/js/site.js'></script>
    <script type='text/javascript' src='https://www.rocketsciencesports.com/js/carousel.js'></script>
</head>
<body class="ps-static  cms-page-view cms-custom-recap">
<div class="wrapper ps-static en-lang-class">
    <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br/>
                    You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
            </div>
        </div>
    </noscript>
    <div class="page">


        <!-- Ajax Login -->
        <div class="skip-links2"><span class="skip-link2 skip-account2"></span></div>
        <div id="header-account2" class="skip-content2"></div>
        <!-- End Ajax Login -->

        <header id="header" class="page-header">

        </header>
        <div class="main-container col1-layout">
            <div class="container">
                <div class="main">
                    <div class="col-main">
                        <div class="padding-s">
                            <div class="std">
                                <style type="text/css">
                                    input {
                                        width: 400px;
                                        height: 40px;
                                    }

                                    label {
                                        margin-right: 10px;
                                    }

                                    .custom-continue {
                                        text-align: right;
                                        margin: 40px;
                                    }

                                    .custom-continue a {
                                        color: #e92d46;
                                        font-size: 32px;
                                        text-decoration: none;
                                    }

                                    .custom-continue a:hover {
                                        text-decoration: underline;
                                    }

                                    .design-instructions-textarea {
                                        width: 400px;
                                        height: 150px;
                                    }

                                    .edit-link {
                                        width: 60px;
                                        font-size: 22px;
                                        background-color: #e92d46;
                                        color: white;
                                        padding: 7px;
                                        top: 3px;
                                        position: relative;
                                    }
                                </style>
                                <div style="background-color: #e92d46; width: 100%; padding: 8px 20px 1px;">
                                    <p style="text-align: center; margin-bottom: 10px;"><strong><span
                                                    style="font-size: xx-large; color: #ffffff;"><img
                                                        src="https://www.rocketsciencesports.com/media/wysiwyg/custom-rss.png"
                                                        alt="" class="custom-rss-img"/>RECAP</span></strong></p>
                                </div>

                                <div style="text-align: center; max-width: 1120px; margin: 0 auto;">
                                    <form id="custom-recap-form" action="/custom.php?s=recap" method="post">
                                        <p style="font-size: 22px; text-align: center; margin-top: 20px; color: black;">
                                            Here is a summary of what you requested. Any mistakes? Update it now!
                                        </p>
                                        <div style="margin: 20px; display: inline-block; max-width:600px; vertical-align: bottom; font-size: 22px; text-align: right;">
                                            <label>PROJECT NAME </label><input type='text' name="project-name"
                                                                               disabled="disabled"
                                                                               value="<?= $_SESSION['custom']['design-project'] ?>"><a
                                                    href="https://www.rocketsciencesports.com/custom-design-instructions"
                                                    class="edit-link">EDIT</a><br><br>
                                            <label>TEAM SIZE </label><input type='text' name="team-size"
                                                                            disabled="disabled"
                                                                            value="<?= $_SESSION['custom']['team-size'] ?>"><a
                                                    href="https://www.rocketsciencesports.com/custom-team-size"
                                                    class="edit-link">EDIT</a><br><br>
                                            <label>DESIRED DELIVERY </label><input type='text' name="desired-delivery"
                                                                                   disabled="disabled"
                                                                                   value="<?= $_SESSION['custom']['delivery'] ?>"><a
                                                    href="https://www.rocketsciencesports.com/custom-team-size"
                                                    class="edit-link">EDIT</a><br><br>
                                            <label>STYLE </label><input type='text' name="style" disabled="disabled"
                                                                        value="<?= $_SESSION['custom']['taste'] ?>"><a
                                                    href="https://www.rocketsciencesports.com/custom-taste"
                                                    class="edit-link">EDIT</a><br><br>
                                            <label>COLORS </label>
                                            <?php
                                            if (strpos($_SESSION['custom']['mainColor'], "sciencesports")) {
                                                echo "<img src='" . $_SESSION['custom']['mainColor'] . "' style='display: inline-block;'> ";
                                                $additionalImages = explode(",", $_SESSION['custom']['additionalColors']);
                                                foreach ($additionalImages as $image) {
                                                    echo "<img src='" . $image . "' style='display: inline-block;'> ";
                                                }
                                            } else {
                                                echo "<input type='text' name='colors' disabled='disabled' value='" . $_SESSION['custom']['mainColor'] . " - " . $_SESSION['custom']['additionalColors'] . "'>";
                                            }
                                            ?>
                                            <a href="https://www.rocketsciencesports.com/custom-select-your-colors"
                                               class="edit-link">EDIT</a><br><br>
                                            <?php $i = 0; ?>
                                            <?php if (!empty($_SESSION['custom']['filename'])) {
                                                $i++;
                                            } ?>
                                            <?php if (!empty($_SESSION['custom']['filename2'])) {
                                                $i++;
                                            } ?>
                                            <?php if (!empty($_SESSION['custom']['filename3'])) {
                                                $i++;
                                            } ?>
                                            <?php if (!empty($_SESSION['custom']['filename4'])) {
                                                $i++;
                                            } ?>
                                            <?php if (!empty($_SESSION['custom']['filename5'])) {
                                                $i++;
                                            } ?>
                                            <label><?php echo "<span style='color: #e92d46;font-weight: bold;'>" . $i . "</span>"; ?>
                                                UPLOADED FILES </label>
                                            <a href="https://www.rocketsciencesports.com/custom-file-upload"
                                               class="edit-link">EDIT</a><br><br>
                                            <label>DESIGN INSTRUCTIONS </label><input type='text' name="notes"
                                                                                      disabled="disabled"
                                                                                      value="<?= $_SESSION['custom']['design-instructions'] ?>"><a
                                                    href="https://www.rocketsciencesports.com/custom-design-instructions"
                                                    class="edit-link">EDIT</a><br><br>
                                        </div>
                                        <p style="font-size: 22px;">Design deposit: 200 USD.<br>
                                            100% of the deposit will be refunded upon your first order.
                                        </p>
                                        <div class="custom-continue">
                                            <a href="custom.php?s=recap"
                                               onclick="document.getElementById('custom-recap-form').submit">SUBMIT</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promos" style="background-color: white;">
        <span class="sect-title">FOLLOW US</span>
        <div class="follow-us">
            <div class="follow-item">
                <div style="float: left; margin: 0 5px;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://www.facebook.com/rocketsciencesports"><img
                                style="width: 100px;"
                                src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/facebook.png"
                                alt=""/></a>
                </div>
                <div
                        style="float: left; margin: 72px 15px 0 0; width: 105px; line-height: 10px; text-align: left;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://www.facebook.com/rocketsciencesports" target="_blank">FACEBOOK
                        <span style="font-size: 10px; color: darkgrey;">FOLLOW</span>
                    </a>
                </div>
            </div>
            <div class="follow-item">
                <div style="float: left; margin: 0 5px;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://twitter.com/rocketmanmarcin"><img
                                style="width: 100px;"
                                src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/twitter.png"
                                alt=""/></a>
                </div>
                <div
                        style="float: left; margin: 72px 15px 0 0; width: 88px; line-height: 10px; text-align: left;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://twitter.com/rocketmanmarcin" target="_blank">TWITTER
                        <span style="font-size: 10px; color: darkgrey;">FOLLOW</span>
                    </a>
                </div>
            </div>
            <div class="follow-item">
                <div style="float: left; margin: 0 5px;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://www.pinterest.com/rocketsciences/"><img
                                style="width: 100px;"
                                src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/pinterest.png"
                                alt=""/></a>
                </div>
                <div
                        style="float: left; margin: 72px 15px 0 0; width: 105px; line-height: 10px; text-align: left;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://www.pinterest.com/rocketsciences/">PINTEREST <span
                                style="font-size: 10px; color: darkgrey;">FOLLOW</span></a>
                </div>
            </div>
            <div class="follow-item">
                <div style="float: left; margin: 0 5px;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://www.rocketsciencesports.com/wechat/"><img
                                style="width: 100px;"
                                src="https://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/wechat-logo.jpg"
                                alt=""/></a>
                </div>
                <div
                        style="float: left; margin: 72px 15px 0 0; width: 105px; line-height: 10px; text-align: left;">
                    <a style="color: #777; font-size: 18px; text-decoration: none;"
                       href="https://www.rocketsciencesports.com/wechat/">WECHAT <span
                                style="font-size: 10px; color: darkgrey;">FOLLOW</span></a>
                </div>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
    </div>
    <div class="footer-container">


        <div class="container">
            <div class="row footer-banners">
                <div class="col-sm-4">
                    <h2>SAVE 10%</h2>
                    <h3>WITH NEWSLETTER SUBSCRIPTION</h3>
                </div>
                <div class="col-sm-4">
                    <h2>ORDER ONLINE</h2>
                    <h3>24 HOURS A DAY</h3>
                </div>
                <div class="col-sm-4">
                    <h2>FREE SHIPPING</h2>
                    <h3>ON ORDERS OVER $50</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer">
                        <p id="back-top">
                            <a href="#top"><span></span></a>
                        </p>
                        <div class="footer-cols-wrapper">
                            <div class="footer-col">
                                <h4>Information</h4>
                                <div class="footer-col-content">
                                    <ul>
                                        <li><a href="https://www.rocketsciencesports.com/about-us.html">About Us</a>
                                        </li>
                                        <li><a href="https://www.rocketsciencesports.com/contacts">Contact Us</a></li>
                                        <li><a href="https://www.rocketsciencesports.com/gift-card.html">Gift Cards</a>
                                        </li>
                                        <li><a href="https://www.rocketsciencesports.com/downloads">Downloads</a></li>
                                        <li style="background: none;"><a
                                                    href="https://www.rocketsciencesports.com/sponsor-signup">Athletes
                                                Sponsorship</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col">
                                <h4>Why buy from us</h4>
                                <div class="footer-col-content">
                                    <ul>
                                        <li><a href="https://www.rocketsciencesports.com/warranty/">Warranty</a></li>
                                        <li><a href="#">Shipping &amp; Returns</a></li>
                                        <li><a href="#">International Shipping</a></li>
                                        <li><a href="https://www.rocketsciencesports.com/contacts/">Group Sales</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col">
                                <h4>My account</h4>
                                <div class="footer-col-content">
                                    <ul>
                                        <li><a href="https://www.rocketsciencesports.com/customer/account/login/">Sign
                                                In</a></li>
                                        <li><a href="https://www.rocketsciencesports.com/checkout/cart/">View Cart</a>
                                        </li>
                                        <li><a href="https://www.rocketsciencesports.com/wishlist/">My Wishlist</a></li>
                                        <li><a href="#">Track My Order</a></li>
                                        <li><a href="#">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col last">
                                <h4>Contact Us</h4>
                                <div class="footer-col-content">
                                    <ul>
                                        <li>Rocket Science Sports<br>
                                            3267 Bee Cave Road Suit 107<br>
                                            Austin, TX 78746<br>
                                            USA
                                        </li>
                                        <li>Tel: +1 (512) 782-4448</li>
                                        <li><a href="mailto:sales@rocketsciencesports.com">sales (at)
                                                rocketsciencesports.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <address>&copy; Rocket Science Sports Store. All Rights Reserved.</address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div id="acp-overlay" class="ajaxcartpro-box-hide"></div>
<div id="ajaxcartpro-progress" class="ajaxcartpro-box-hide">
    <img src="https://www.rocketsciencesports.com/skin/frontend/base/default/ajaxcartpro/images/al.gif" alt=""/>
    <p>Please wait...</p>
</div>
<div id="ajaxcartpro-add-confirm" class="ajaxcartpro-box-hide">
    <p><strong>You Added to the Cart</strong></p>

    <br/>
    {{var product.name}}
    <br/>
    <br/>
    <a class="aw-acp-continue focus">Continue shopping</a>
    <br/>
    <a href="https://www.rocketsciencesports.com/checkout/cart/" class="aw-acp-checkout">View cart &amp; checkout</a>
</div>
<div id="ajaxcartpro-remove-confirm" class="ajaxcartpro-box-hide">
    <a class="aw-acp-continue focus">Continue shopping</a>
    <br/>
    <a href="https://www.rocketsciencesports.com/checkout/cart/" class="aw-acp-checkout">View cart &amp; checkout</a>
</div>
<div id="acp-configurable-block"></div><!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
            d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set._.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute('charset', 'utf-8');
        $.src = '//v2.zopim.com/?2SvxWAuQo78JuT5NOUMQv2C6L6Hz4xD7';
        z.t = +new Date;
        $.type = 'text/javascript';
        e.parentNode.insertBefore($, e)
    })(document, 'script');
</script><!--End of Zopim Live Chat Script-->
<!--Zopim Options-->
<script>$zopim(function () {
        $zopim.livechat.setLanguage('en');
    });
</script>
<!--EOF Zopim Options-->
<script type="text/javascript">
    EsNewsSubscribers.setCookieLiveTime(999);
    EsNewsSubscribers.setCookieName('es_newssubscribers');
    EsNewsSubscribers.setBaseUrl('https://www.rocketsciencesports.com/');
</script>
<div id="esns_background_layer">
    <div id="esns_box_layer">
        <div id="esns_box_close"></div>
        <div id="esns_box_title">
            <div id="esns_box_block_1">
                Get Your Gift Now.
            </div>
            <div id="esns_box_block_2">
                10% OFF on your purchase!
            </div>
        </div>

        <div class="esns_box_lines"></div>
        <div id="esns_box_block_3">
            Would you like to be one of the first to receive exclusive information about the latest
            RocketScienceSports.com offers and events? Then subscribe to our newsletter now and get 10% off your
            purchase in our Online-Shop.
        </div>
        <div class="esns_box_lines"></div>
        <div id="esns_box_subscribe">
            <div id="esns_box_subscribe_response_error"></div>
            <div id="esns_box_subscribe_response_success"></div>
            <div id="esns_box_subscribe_form">
                <div id="esns_box_subscribe_input"><input onclick="if(this.value=='Email') this.value=''"
                                                          onblur="if(this.value=='') this.value='Email'" id="esns_email"
                                                          name="subscribe_email" value="Email" type="text"></div>
                <div id="esns_box_subscribe_submit"><a href="javascript:void(0)" id="esns_submit">Subscribe</a></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


