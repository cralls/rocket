<?php
/*if ($_SERVER['HTTPS'] == "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
} */
?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <script>
        var BASE_URL = 'http://rocket.vectorns.com/';
        var require = {
            "baseUrl": "http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US"
        };
    </script>
    <meta charset="utf-8"/>
    <meta name="description" content="Default Description"/>
    <meta name="keywords" content="Magento, Varien, E-commerce"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Rocket Science Sports</title>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/mage/calendar.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_FeaturedProduct/fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/mage/gallery/gallery.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_ShopByBrand/fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_ShopByBrand/css/module.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_LayoutSwitcher/css/module.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/css/grid.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/css/material-icons.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/css/linearicons.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/css/modules.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/css/style.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_CountdownTimer/css/timer.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_FilmSlider/css/slider-pro.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_FilmSlider/css/animate.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_Parallax/css/rd-parallax/style.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/TemplateMonster_Parallax/css/jquery-youtubebackground/style.css"/>
    <script type="text/javascript"
            src="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/requirejs/require.js"></script>
    <script type="text/javascript"
            src="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/mage/requirejs/mixins.js"></script>
    <script type="text/javascript"
            src="http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/requirejs-config.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="http://rocket.vectorns.com/theme_options/css/index/"/>
    <link rel="stylesheet" type="text/css" media="all" href="http://rocket.vectorns.com/newsletter_popup/css/index/"/>
    <link rel="icon" type="image/x-icon"
          href="http://rocket.vectorns.com/pub/media/theme_options/default/LOGO-for-Web_1.jpg"/>
    <link rel="shortcut icon" type="image/x-icon"
          href="http://rocket.vectorns.com/pub/media/theme_options/default/LOGO-for-Web_1.jpg"/>
    <!-- BEGIN GOOGLE ANALYTICS CODE -->
    <script type="text/x-magento-init">
{
    "*": {
        "Magento_GoogleAnalytics/js/google-analytics": {
            "isCookieRestrictionModeEnabled": 0,
            "currentWebsite": 1,
            "cookieName": "user_allowed_save_cookie",
            "ordersTrackingData": [],
            "pageTrackingData": {"optPageUrl":"","isAnonymizedIpActive":null,"accountId":"UA-2378880-1"}        }
    }
}




    </script>
    <!-- END GOOGLE ANALYTICS CODE -->
</head>
<body data-container="body"
      data-mage-init='{"loaderAjax": {}, "loader": { "icon": "http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/images/loader-2.gif"}}'
      class="cms-amp-homepage cms-index-index page-layout-1column">
<script>
    var compareProductAddAjax = 0;</script>

<script>
    try {
        if (!window.localStorage || !window.sessionStorage) {
            throw new Error();
        }

        localStorage.setItem('storage_test', 1);
        localStorage.removeItem('storage_test');
    } catch (e) {
        (function () {
            var Storage = function (type) {
                var data;

                function createCookie(name, value, days) {
                    var date, expires;

                    if (days) {
                        date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = '; expires=' + date.toGMTString();
                    } else {
                        expires = '';
                    }
                    document.cookie = name + '=' + value + expires + '; path=/';
                }

                function readCookie(name) {
                    var nameEQ = name + '=',
                        ca = document.cookie.split(';'),
                        i = 0,
                        c;

                    for (i = 0; i < ca.length; i++) {
                        c = ca[i];

                        while (c.charAt(0) === ' ') {
                            c = c.substring(1, c.length);
                        }

                        if (c.indexOf(nameEQ) === 0) {
                            return c.substring(nameEQ.length, c.length);
                        }
                    }

                    return null;
                }

                function setData(data) {
                    data = encodeURIComponent(JSON.stringify(data));
                    createCookie(type === 'session' ? getSessionName() : 'localStorage', data, 365);
                }

                function clearData() {
                    createCookie(type === 'session' ? getSessionName() : 'localStorage', '', 365);
                }

                function getData() {
                    var data = type === 'session' ? readCookie(getSessionName()) : readCookie('localStorage');

                    return data ? JSON.parse(decodeURIComponent(data)) : {};
                }

                function getSessionName() {
                    if (!window.name) {
                        window.name = new Date().getTime();
                    }

                    return 'sessionStorage' + window.name;
                }

                data = getData();

                return {
                    length: 0,
                    clear: function () {
                        data = {};
                        this.length = 0;
                        clearData();
                    },

                    getItem: function (key) {
                        return data[key] === undefined ? null : data[key];
                    },

                    key: function (i) {
                        var ctr = 0,
                            k;

                        for (k in data) {
                            if (ctr.toString() === i.toString()) {
                                return k;
                            } else {
                                ctr++
                            }
                        }

                        return null;
                    },

                    removeItem: function (key) {
                        delete data[key];
                        this.length--;
                        setData(data);
                    },

                    setItem: function (key, value) {
                        data[key] = value.toString();
                        this.length++;
                        setData(data);
                    }
                };
            };

            window.localStorage.__proto__ = window.localStorage = new Storage('local');
            window.sessionStorage.__proto__ = window.sessionStorage = new Storage('session');
        })();
    }
</script>
<script type="text/x-magento-init">
{"*": {"showCompareProduct": []}}




</script>
<div id="productComparePopup" style="display: none;">
</div>
<style>

    #page-preloader {
        background-color: transparent;
    }

</style>
<div class="page-wrapper">
    <style>
        body[data-mage-init] {
            overflow: hidden;
        }

        /*#page-preloader {*/
        /*position: fixed;*/
        /*left: 0;*/
        /*top: 0;*/
        /*right: 0;*/
        /*bottom: 0;*/
        /*z-index: 9999;*/
        /*opacity: 0;*/
        /*transition: .4s all ease-out;*/
        /*visibility: hidden;*/
        /*}*/

        /*body[data-mage-init] #page-preloader{*/
        /*opacity: 1;*/
        /*height: auto;*/
        /*visibility: visible;*/
        /*}*/

        /*#page-preloader .spinner {*/
        /*position: absolute;*/
        /*left: 50%;*/
        /*top: 50%;*/
        /*margin: -45px 0 0 -45px;*/
        /*width: 90px;*/
        /*height: 90px;*/
        /*line-height: 90px;*/
        /*box-sizing: border-box;*/
        /*text-align: center;*/
        /*z-index: 0;*/
        /*text-transform: uppercase;*/
        /*-o-text-transform: uppercase;*/
        /*-ms-text-transform: uppercase;*/
        /*-webkit-text-transform: uppercase;*/
        /*-moz-text-transform: uppercase;*/
        /*}*/

        /*#page-preloader .spinner:before,*/
        /*#page-preloader .spinner:after {*/
        /*opacity: 0;*/
        /*box-sizing: border-box;*/
        /*-o-box-sizing: border-box;*/
        /*-ms-box-sizing: border-box;*/
        /*-webkit-box-sizing: border-box;*/
        /*-moz-box-sizing: border-box;*/
        /*content: "\0020";*/
        /*position: absolute;*/
        /*top: 0;*/
        /*left: 0;*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*border-radius: 60px;*/
        /*}*/

        /*#page-preloader .spinner:after {*/
        /*z-index: 1;*/
        /*animation: cssload-gogoloader 2.3s infinite 1.15s;*/
        /*-o-animation: cssload-gogoloader 2.3s infinite 1.15s;*/
        /*-ms-animation: cssload-gogoloader 2.3s infinite 1.15s;*/
        /*-webkit-animation: cssload-gogoloader 2.3s infinite 1.15s;*/
        /*-moz-animation: cssload-gogoloader 2.3s infinite 1.15s;*/
        /*}*/

        /*#page-preloader .spinner:before {*/
        /*z-index: 2;*/
        /*animation: cssload-gogoloader 2.3s infinite;*/
        /*-o-animation: cssload-gogoloader 2.3s infinite;*/
        /*-ms-animation: cssload-gogoloader 2.3s infinite;*/
        /*-webkit-animation: cssload-gogoloader 2.3s infinite;*/
        /*-moz-animation: cssload-gogoloader 2.3s infinite;*/
        /*}*/

        @keyframes cssload-gogoloader {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

        @-o-keyframes cssload-gogoloader {
            0% {
                -o-transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                -o-transform: scale(1);
                opacity: 0;
            }
        }

        @-ms-keyframes cssload-gogoloader {
            0% {
                -ms-transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                -ms-transform: scale(1);
                opacity: 0;
            }
        }

        @-webkit-keyframes cssload-gogoloader {
            0% {
                -webkit-transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0;
            }
        }

        @-moz-keyframes cssload-gogoloader {
            0% {
                -moz-transform: scale(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                -moz-transform: scale(1);
                opacity: 0;
            }
        }
    </style>

    <div id="page-preloader">
        <div class="spinner"></div>
    </div>
    <header class="page-header">
        <div class="rd-navbar">
            <div class="layout_5">
                <div class="panel page-header__panel">
                    <div class="container">
                        <div class="panel-container-wrap">
                            <div class="greet welcome" data-bind="scope: 'customer'">
                                <!-- ko if: customer().fullname  -->
                                <span data-bind="text: new String('Welcome, %1!').replace('%1', customer().firstname)">
            </span>
                                <!-- /ko -->
                                <!-- ko ifnot: customer().fullname  -->
                                <span data-bind="html:'Welcome to Rocket Science Sports'"></span>
                                <!-- /ko -->
                            </div>
                            <script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "customer": {
                            "component": "Magento_Customer/js/view/customer"
                        }
                    }
                }
            }
        }




                            </script>
                            <div class="header-switchers">
                                <div class="switcher language switcher-language" data-ui-id="language-switcher"
                                     id="switcher-language">
                                    <strong class="label switcher-label"><span>Language</span></strong>
                                    <div class="actions dropdown options switcher-options">
                                        <div class="action toggle switcher-trigger" id="switcher-language-trigger">
                                            <strong class="view-en">
                                                <span>Eng</span>
                                            </strong>
                                        </div>
                                        <ul class="dropdown switcher-dropdown"
                                            data-mage-init='{"dropdownDialog":{
                "appendTo":"#switcher-language > .options",
                "triggerTarget":"#switcher-language-trigger",
                "closeOnMouseLeave": false,
                "triggerClass":"active",
                "parentClass":"active",
                "buttons":null}}'>
                                            <li class="view-cn switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/stores\/store\/redirect\/","data":{"___store":"cn","___from_store":"en","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20vP19fX3N0b3JlPWNu"}}'>
                                                    中 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="switcher currency switcher-currency" id="switcher-currency">
                                    <strong class="label switcher-label"><span>Currency</span></strong>
                                    <div class="actions dropdown options switcher-options">
                                        <div class="action toggle switcher-trigger" id="switcher-currency-trigger">
                                            <strong class="language-USD">
                                                <span>USD </span>
                                            </strong>
                                        </div>
                                        <ul class="dropdown switcher-dropdown" data-mage-init='{"dropdownDialog":{
            "appendTo":"#switcher-currency > .options",
            "triggerTarget":"#switcher-currency-trigger",
            "closeOnMouseLeave": false,
            "triggerClass":"active",
            "parentClass":"active",
            "buttons":null}}'>
                                            <li class="currency-AUD switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"AUD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>AUD
                                                    - Australian Dollar</a>
                                            </li>
                                            <li class="currency-GBP switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"GBP","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>GBP
                                                    - British Pound Sterling</a>
                                            </li>
                                            <li class="currency-CAD switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"CAD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>CAD
                                                    - Canadian Dollar</a>
                                            </li>
                                            <li class="currency-CNY switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"CNY","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>CNY
                                                    - Chinese Yuan</a>
                                            </li>
                                            <li class="currency-EUR switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"EUR","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>EUR
                                                    - Euro</a>
                                            </li>
                                            <li class="currency-HKD switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"HKD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>HKD
                                                    - Hong Kong Dollar</a>
                                            </li>
                                            <li class="currency-JPY switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"JPY","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>JPY
                                                    - Japanese Yen</a>
                                            </li>
                                            <li class="currency-MOP switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"MOP","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>MOP
                                                    - Macanese Pataca</a>
                                            </li>
                                            <li class="currency-MYR switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"MYR","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>MYR
                                                    - Malaysian Ringgit</a>
                                            </li>
                                            <li class="currency-MXN switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"MXN","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>MXN
                                                    - Mexican Peso</a>
                                            </li>
                                            <li class="currency-TWD switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"TWD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>TWD
                                                    - New Taiwan Dollar</a>
                                            </li>
                                            <li class="currency-NZD switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"NZD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>NZD
                                                    - New Zealand Dollar</a>
                                            </li>
                                            <li class="currency-PLN switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"PLN","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>PLN
                                                    - Polish Zloty</a>
                                            </li>
                                            <li class="currency-RUB switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"RUB","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>RUB
                                                    - Russian Ruble</a>
                                            </li>
                                            <li class="currency-SGD switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"SGD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>SGD
                                                    - Singapore Dollar</a>
                                            </li>
                                            <li class="currency-SEK switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"SEK","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>SEK
                                                    - Swedish Krona</a>
                                            </li>
                                            <li class="currency-CHF switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"CHF","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>CHF
                                                    - Swiss Franc</a>
                                            </li>
                                            <li class="currency-THB switcher-option">
                                                <a href="#"
                                                   data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"THB","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>THB
                                                    - Thai Baht</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-navbar-collapse-container">
                                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">
                                    <span></span></button>
                                <div class="rd-navbar-collapse">
                                    <div class="switcher language switcher-language"
                                         data-ui-id="mobile-language-switcher" id="mobile-switcher-language">
                                        <strong class="label switcher-label"><span>Language</span></strong>
                                        <div class="actions dropdown options switcher-options">
                                            <div class="action toggle switcher-trigger"
                                                 id="mobile-switcher-language-trigger">
                                                <strong class="view-en">
                                                    <span>English</span>
                                                </strong>
                                            </div>
                                            <ul class="dropdown switcher-dropdown"
                                                data-mage-init='{"dropdownDialog":{
                "appendTo":"#mobile-switcher-language > .options",
                "triggerTarget":"#mobile-switcher-language-trigger",
                "closeOnMouseLeave": false,
                "triggerClass":"active",
                "parentClass":"active",
                "buttons":null}}'>
                                                <li class="view-cn switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/stores\/store\/redirect\/","data":{"___store":"cn","___from_store":"en","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20vP19fX3N0b3JlPWNu"}}'>
                                                        中文</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="switcher currency switcher-currency" id="mobile-switcher-currency">
                                        <strong class="label switcher-label"><span>Currency</span></strong>
                                        <div class="actions dropdown options switcher-options">
                                            <div class="action toggle switcher-trigger"
                                                 id="mobile-switcher-currency-trigger">
                                                <strong class="language-USD">
                                                    <span>USD - US Dollar</span>
                                                </strong>
                                            </div>
                                            <ul class="dropdown switcher-dropdown" data-mage-init='{"dropdownDialog":{
            "appendTo":"#mobile-switcher-currency > .options",
            "triggerTarget":"#mobile-switcher-currency-trigger",
            "closeOnMouseLeave": false,
            "triggerClass":"active",
            "parentClass":"active",
            "buttons":null}}'>
                                                <li class="currency-AUD switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"AUD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>AUD
                                                        - Australian Dollar</a>
                                                </li>
                                                <li class="currency-GBP switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"GBP","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>GBP
                                                        - British Pound Sterling</a>
                                                </li>
                                                <li class="currency-CAD switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"CAD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>CAD
                                                        - Canadian Dollar</a>
                                                </li>
                                                <li class="currency-CNY switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"CNY","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>CNY
                                                        - Chinese Yuan</a>
                                                </li>
                                                <li class="currency-EUR switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"EUR","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>EUR
                                                        - Euro</a>
                                                </li>
                                                <li class="currency-HKD switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"HKD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>HKD
                                                        - Hong Kong Dollar</a>
                                                </li>
                                                <li class="currency-JPY switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"JPY","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>JPY
                                                        - Japanese Yen</a>
                                                </li>
                                                <li class="currency-MOP switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"MOP","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>MOP
                                                        - Macanese Pataca</a>
                                                </li>
                                                <li class="currency-MYR switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"MYR","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>MYR
                                                        - Malaysian Ringgit</a>
                                                </li>
                                                <li class="currency-MXN switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"MXN","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>MXN
                                                        - Mexican Peso</a>
                                                </li>
                                                <li class="currency-TWD switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"TWD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>TWD
                                                        - New Taiwan Dollar</a>
                                                </li>
                                                <li class="currency-NZD switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"NZD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>NZD
                                                        - New Zealand Dollar</a>
                                                </li>
                                                <li class="currency-PLN switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"PLN","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>PLN
                                                        - Polish Zloty</a>
                                                </li>
                                                <li class="currency-RUB switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"RUB","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>RUB
                                                        - Russian Ruble</a>
                                                </li>
                                                <li class="currency-SGD switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"SGD","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>SGD
                                                        - Singapore Dollar</a>
                                                </li>
                                                <li class="currency-SEK switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"SEK","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>SEK
                                                        - Swedish Krona</a>
                                                </li>
                                                <li class="currency-CHF switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"CHF","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>CHF
                                                        - Swiss Franc</a>
                                                </li>
                                                <li class="currency-THB switcher-option">
                                                    <a href="#"
                                                       data-post='{"action":"http:\/\/rocket.vectorns.com\/directory\/currency\/switch\/","data":{"currency":"THB","uenc":"aHR0cDovL3JvY2tldC52ZWN0b3Jucy5jb20v"}}'>THB
                                                        - Thai Baht</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="header links">
                                        <li><a href="http://rocket.vectorns.com/customer/account/" class="my-account">My
                                                Account</a></li>
                                        <li class="link wishlist" data-bind="scope: 'wishlist'">
                                            <a href="http://rocket.vectorns.com/wishlist/">My Wish List
                                                <!-- ko if: wishlist().counter -->
                                                <span data-bind="text: wishlist().counter" class="counter qty"></span>
                                                <!-- /ko -->
                                            </a>
                                        </li>
                                        <script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                    "wishlist": {
                        "component": "Magento_Wishlist/js/view/wishlist"
                    }
                }
            }
        }
    }





                                        </script>
                                        <li class="authorization-link" data-label="or">
                                            <a href="http://rocket.vectorns.com/customer/account/login/">
                                                Sign In </a>
                                        </li>
                                        <li class="item link compare" data-bind="scope: 'compareProducts'"
                                            data-role="compare-products-link">
                                            <a class="action compare " title="Compare"
                                               data-bind="attr: {'href': compareProducts().listUrl}, css: {'no-display': !compareProducts().count}"
                                            >
                                                Compare <span class="counter qty"
                                                              data-bind="text: compareProducts().countCaption"></span>
                                            </a>
                                            <!-- ko if: !compareProducts().count -->
                                            <style>
                                                .item.link.compare {
                                                    display: none;
                                                }
                                            </style>
                                            <!-- /ko -->
                                        </li>


                                        <script type="text/x-magento-init">
{"[data-role=compare-products-link]": {"Magento_Ui/js/core/app": {"components":{"compareProducts":{"component":"Magento_Catalog\/js\/view\/compare-products"}}}}}




                                        </script>
                                        <li><a href="http://rocket.vectorns.com/customer/account/create/"
                                               class="create-an-account">Create an Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header__content">
                    <div class="container">
                        <div class="header-center-wrap"><strong class="logo">
                                <img src="http://rocket.vectorns.com/pub/media/theme_options/default/LOGO-for-Web.jpg"
                                     alt="Rocket Science Sports"
                                     width="75" height="75"/>
                            </strong>
                            <div class="rd-navbar-cart-wrap">
                                <div data-block="minicart" class="minicart-wrapper">
                                    <div class="rd-navbar-cart-fixed">
                                        <a class="action showcart rd-navbar-cart-toggle" href=""
                                           data-bind="scope: 'minicart_content'">
                                            <span class="text">My Cart</span>
                                            <strong class="counter qty empty"
                                                    data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
                                                <strong class="counter-number">
                                                    <!-- ko text: getCartParam('summary_count') --><!-- /ko --></strong>
                                                <strong class="counter-label">
                                                    <!-- ko if: getCartParam('summary_count') -->
                                                    <!-- ko text: getCartParam('summary_count') --><!-- /ko -->
                                                    <!-- ko i18n: 'items' --><!-- /ko -->
                                                    <!-- /ko -->
                                                </strong>
                                            </strong>
                                        </a>
                                    </div>

                                    <div class="rd-navbar-cart" data-role="dropdownDialog"
                                         data-mage-init='{"dropdownDialog":{
                        "appendTo":"[data-block=minicart]",
                        "triggerTarget":".showcart",
                        "timeout": "2000",
                        "closeOnMouseLeave": false,
                        "closeOnEscape": true,
                        "parentClass":"active",
                        "buttons":[]}}'>
                                        <div class="block block-minicart empty">
                                            <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                                                <!-- ko template: getTemplate() --><!-- /ko -->
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        window.checkout = {
                                            "shoppingCartUrl": "http:\/\/rocket.vectorns.com\/checkout\/cart\/",
                                            "checkoutUrl": "http:\/\/rocket.vectorns.com\/checkout\/",
                                            "updateItemQtyUrl": "http:\/\/rocket.vectorns.com\/checkout\/sidebar\/updateItemQty\/",
                                            "removeItemUrl": "http:\/\/rocket.vectorns.com\/checkout\/sidebar\/removeItem\/",
                                            "imageTemplate": "Magento_Catalog\/product\/image_with_borders",
                                            "baseUrl": "http:\/\/rocket.vectorns.com\/",
                                            "minicartMaxItemsVisible": 5,
                                            "websiteId": "1",
                                            "maxItemsToDisplay": 10,
                                            "customerLoginUrl": "http:\/\/rocket.vectorns.com\/customer\/account\/login\/",
                                            "isRedirectRequired": false,
                                            "autocomplete": "off",
                                            "captcha": {
                                                "user_login": {
                                                    "isCaseSensitive": false,
                                                    "imageHeight": 50,
                                                    "imageSrc": "",
                                                    "refreshUrl": "http:\/\/rocket.vectorns.com\/captcha\/refresh\/",
                                                    "isRequired": false
                                                },
                                                "guest_checkout": {
                                                    "isCaseSensitive": false,
                                                    "imageHeight": 50,
                                                    "imageSrc": "",
                                                    "refreshUrl": "http:\/\/rocket.vectorns.com\/captcha\/refresh\/",
                                                    "isRequired": false
                                                }
                                            }
                                        };
                                    </script>
                                    <script type="text/x-magento-init">
        {
            "[data-block='minicart']": {
                "Magento_Ui/js/core/app": {"components":{"minicart_content":{"children":{"subtotal.container":{"children":{"subtotal":{"children":{"subtotal.totals":{"config":{"display_cart_subtotal_incl_tax":0,"display_cart_subtotal_excl_tax":1,"template":"Magento_Tax\/checkout\/minicart\/subtotal\/totals"},"children":{"subtotal.totals.msrp":{"component":"Magento_Msrp\/js\/view\/checkout\/minicart\/subtotal\/totals","config":{"displayArea":"minicart-subtotal-hidden","template":"Magento_Msrp\/checkout\/minicart\/subtotal\/totals"}}},"component":"Magento_Tax\/js\/view\/checkout\/minicart\/subtotal\/totals"}},"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/subtotal"}}},"component":"uiComponent","config":{"displayArea":"subtotalContainer"}},"item.renderer":{"component":"uiComponent","config":{"displayArea":"defaultRenderer","template":"Magento_Checkout\/minicart\/item\/default"},"children":{"item.image":{"component":"Magento_Catalog\/js\/view\/image","config":{"template":"Magento_Catalog\/product\/image","displayArea":"itemImage"}},"checkout.cart.item.price.sidebar":{"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/item\/price","displayArea":"priceSidebar"}}}},"extra_info":{"component":"uiComponent","config":{"displayArea":"extraInfo"}},"promotion":{"component":"uiComponent","config":{"displayArea":"promotion"}}},"config":{"itemRenderer":{"default":"defaultRenderer","simple":"defaultRenderer","virtual":"defaultRenderer"},"template":"Magento_Checkout\/minicart\/content"},"component":"Magento_Checkout\/js\/view\/minicart"}},"types":[]}            },
            "*": {
                "Magento_Ui/js/block-loader": "http://rocket.vectorns.com/pub/static/version1569976958/frontend/TemplateMonster/theme007/en_US/images/loader-1.gif"
            }
        }




                                    </script>

                                </div>
                            </div>

                        </div>
                        <div class="header-bottom-wrap-bg">
                            <div class="header-bottom-wrap">
                                <div class="rd-navbar-panel-canvas"></div>
                                <script>
                                    require([
                                        'jquery'
                                    ], function ($) {
                                        $('.tm-megamenu .price-box').removeClass('price-box');
                                    });
                                </script>

                                <nav class="navigation" role="navigation">
                                    <!-- RD Navbar Toggle -->
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
            <span>
                <strong>Categories </strong>
            </span>
                                    </button>
                                    <!-- END RD Navbar Toggle -->
                                    <div class="rd-navbar-nav-wrap">
                                        <ul class="rd-navbar-nav">
                                            <li class="level0 nav-1 first level-top  parent"><a
                                                        href="http://rocket.vectorns.com/shop.html"
                                                        class="level-top "><span>Shop</span></a>
                                                <ul class="level0 submenu rd-navbar-dropdown">
                                                    <li class="level1 nav-1-1 first parent"><a
                                                                href="http://rocket.vectorns.com/shop/man.html"><span>MEN</span></a>
                                                        <ul class="level1 submenu rd-navbar-dropdown">
                                                            <li class="level2 nav-1-1-1 first parent"><a
                                                                        href="http://rocket.vectorns.com/shop/man/triathlon.html"><span>Triathlon</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-1-1-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/man/triathlon/wetsuits.html"><span>Wetsuits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-1-2"><a
                                                                                href="http://rocket.vectorns.com/shop/man/triathlon/race-suits.html"><span>Tri Suits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-1-3"><a
                                                                                href="http://rocket.vectorns.com/shop/man/triathlon/bags.html"><span>Bags</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-1-4 last"><a
                                                                                href="http://rocket.vectorns.com/shop/man/triathlon/accessories.html"><span>Accessories</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 nav-1-1-2 parent"><a
                                                                        href="http://rocket.vectorns.com/shop/man/swimming.html"><span>Swimming</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-1-2-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/man/swimming/swimsuits.html"><span>Swimsuits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-2-2"><a
                                                                                href="http://rocket.vectorns.com/shop/man/swimming/caps.html"><span>Caps</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-2-3"><a
                                                                                href="http://rocket.vectorns.com/shop/man/swimming/goggles.html"><span>Goggles</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-2-4"><a
                                                                                href="http://rocket.vectorns.com/shop/man/swimming/bags.html"><span>Bags</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-2-5 last"><a
                                                                                href="http://rocket.vectorns.com/shop/man/swimming/active-wear.html"><span>Active Wear</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 nav-1-1-3 last parent"><a
                                                                        href="http://rocket.vectorns.com/shop/man/cycling.html"><span>Cycling</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-1-3-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/man/cycling/jerseys.html"><span>Jerseys</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-3-2"><a
                                                                                href="http://rocket.vectorns.com/shop/man/cycling/shorts.html"><span>Shorts</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-3-3"><a
                                                                                href="http://rocket.vectorns.com/shop/man/cycling/bibs.html"><span>Bibs</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-1-3-4 last"><a
                                                                                href="http://rocket.vectorns.com/shop/man/cycling/accessories.html"><span>Accessories</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="level1 nav-1-2 parent"><a
                                                                href="http://rocket.vectorns.com/shop/women.html"><span>WOMEN</span></a>
                                                        <ul class="level1 submenu rd-navbar-dropdown">
                                                            <li class="level2 nav-1-2-1 first parent"><a
                                                                        href="http://rocket.vectorns.com/shop/women/triathlon.html"><span>Triathlon</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-2-1-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/women/triathlon/wetsuits.html"><span>Wetsuits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-1-2"><a
                                                                                href="http://rocket.vectorns.com/shop/women/triathlon/trisuits.html"><span>Tri Suits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-1-3"><a
                                                                                href="http://rocket.vectorns.com/shop/women/triathlon/bags.html"><span>Bags</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-1-4 last"><a
                                                                                href="http://rocket.vectorns.com/shop/women/triathlon/accessories.html"><span>Accessories</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 nav-1-2-2 parent"><a
                                                                        href="http://rocket.vectorns.com/shop/women/swimming.html"><span>Swimming</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-2-2-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/women/swimming/swimsuits.html"><span>Swimsuits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-2-2"><a
                                                                                href="http://rocket.vectorns.com/shop/women/swimming/caps.html"><span>Caps</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-2-3"><a
                                                                                href="http://rocket.vectorns.com/shop/women/swimming/goggles.html"><span>Goggles</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-2-4"><a
                                                                                href="http://rocket.vectorns.com/shop/women/swimming/bags.html"><span>Bags</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-2-5 last"><a
                                                                                href="http://rocket.vectorns.com/shop/women/swimming/active-wear.html"><span>Active Wear</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 nav-1-2-3 last parent"><a
                                                                        href="http://rocket.vectorns.com/shop/women/cycling.html"><span>Cycling</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-2-3-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/women/cycling/jerseys.html"><span>Jerseys</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-3-2"><a
                                                                                href="http://rocket.vectorns.com/shop/women/cycling/shorts.html"><span>Shorts</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-3-3"><a
                                                                                href="http://rocket.vectorns.com/shop/women/cycling/bibs.html"><span>Bibs</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-2-3-4 last"><a
                                                                                href="http://rocket.vectorns.com/shop/women/cycling/accessories.html"><span>Accessories</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="level1 nav-1-3 last parent"><a
                                                                href="http://rocket.vectorns.com/shop/kids.html"><span>Kids</span></a>
                                                        <ul class="level1 submenu rd-navbar-dropdown">
                                                            <li class="level2 nav-1-3-1 first parent"><a
                                                                        href="http://rocket.vectorns.com/shop/kids/triathlon.html"><span>Triathlon</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-3-1-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/triathlon/trisuits.html"><span>Trisuits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-3-1-2"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/triathlon/bags.html"><span>Bags</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-3-1-3 last"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/triathlon/accessories.html"><span>Accessories</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 nav-1-3-2 last parent"><a
                                                                        href="http://rocket.vectorns.com/shop/kids/swimming.html"><span>Swimming</span></a>
                                                                <ul class="level2 submenu rd-navbar-dropdown">
                                                                    <li class="level3 nav-1-3-2-1 first"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/swimming/swimsuits.html"><span>Swimsuits</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-3-2-2"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/swimming/caps.html"><span>Caps</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-3-2-3"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/swimming/goggles.html"><span>Goggles</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-3-2-4"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/swimming/bags.html"><span>Bags</span></a>
                                                                    </li>
                                                                    <li class="level3 nav-1-3-2-5 last"><a
                                                                                href="http://rocket.vectorns.com/shop/kids/swimming/active-wear.html"><span>Active Wear</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level0 nav-2 level-top  parent"><a
                                                        href="http://rocket.vectorns.com/custom.html"
                                                        class="level-top "><span>Custom</span></a>
                                                <ul class="level0 submenu rd-navbar-dropdown">
                                                    <li class="level1 nav-2-1 first"><a
                                                                href="http://rocket.vectorns.com/custom/triathlon.html"><span>Triathlon</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-2"><a
                                                                href="http://rocket.vectorns.com/custom/swimming.html"><span>Swimming</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-3"><a
                                                                href="http://rocket.vectorns.com/custom/swim-caps.html"><span>Swim Caps</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-4"><a
                                                                href="http://rocket.vectorns.com/custom/cycling.html"><span>Cycling</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-5"><a
                                                                href="http://rocket.vectorns.com/custom/running.html"><span>Running</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-6"><a
                                                                href="http://rocket.vectorns.com/custom/soccer.html"><span>Soccer</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-7"><a
                                                                href="http://rocket.vectorns.com/custom/gym.html"><span>Gym</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-8"><a
                                                                href="http://rocket.vectorns.com/custom/yoga.html"><span>Yoga</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-9"><a
                                                                href="http://rocket.vectorns.com/custom/basketball.html"><span>Basketball</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-10"><a
                                                                href="http://rocket.vectorns.com/custom/volleyball.html"><span>Volleyball</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-11"><a
                                                                href="http://rocket.vectorns.com/custom/tennis.html"><span>Tennis</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-12"><a
                                                                href="http://rocket.vectorns.com/custom/rugby.html"><span>Rugby</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-13"><a
                                                                href="http://rocket.vectorns.com/custom/underwater-hockey.html"><span>Underwater Hockey</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-14"><a
                                                                href="http://rocket.vectorns.com/custom/p-e-uniforms.html"><span>P.E.</span></a>
                                                    </li>
                                                    <li class="level1 nav-2-15 last"><a
                                                                href="http://rocket.vectorns.com/custom/water-polo.html"><span>Water Polo</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level0 nav-3 level-top "><a
                                                        href="http://rocket.vectorns.com/team-portal.html"
                                                        class="level-top "><span>Team Portal</span></a></li>
                                            <li class="level0 nav-4 level-top  parent"><a
                                                        href="http://rocket.vectorns.com/events.html"
                                                        class="level-top "><span>Events</span></a>
                                                <ul class="level0 submenu rd-navbar-dropdown">
                                                    <li class="level1 nav-4-1 first"><a
                                                                href="http://rocket.vectorns.com/events/phuket-swim-meet.html"><span>Phuket Swim Meet</span></a>
                                                    </li>
                                                    <li class="level1 nav-4-2"><a
                                                                href="http://rocket.vectorns.com/events/shanghai-swim-meet.html"><span>Shanghai Swim Meet</span></a>
                                                    </li>
                                                    <li class="level1 nav-4-3"><a
                                                                href="http://rocket.vectorns.com/events/phuket-swim-camp.html"><span>Phuket Swim Camp </span></a>
                                                    </li>
                                                    <li class="level1 nav-4-4"><a
                                                                href="http://rocket.vectorns.com/events/phuket-triathlon-camp.html"><span>Phuket Triathlon Camp</span></a>
                                                    </li>
                                                    <li class="level1 nav-4-5 last"><a
                                                                href="http://rocket.vectorns.com/events/taihu-300.html"><span>TAIHU 300</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level0 nav-5 last level-top "><a
                                                        href="http://rocket.vectorns.com/team-of-one.html"
                                                        class="level-top "><span>Team of One</span></a></li>
                                        </ul>
                                    </div>
                                </nav>

                                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search">
                                    <span></span></button>
                                <div class="block block-search rd-navbar-search">
                                    <div class="block-title"><strong>Search</strong></div>
                                    <div class="block-content form-group">
                                        <form class="form minisearch rd-navbar-search-form" id="search_mini_form"
                                              action="http://rocket.vectorns.com/catalogsearch/result/" method="get">
                                            <div class="field search">
                                                <label class="label" for="search" data-role="minisearch-label">
                                                    <span>Search</span>
                                                </label>
                                                <div class="control rd-navbar-search-form-input">
                                                    <input id="search"
                                                           data-mage-init='{"quickSearch":{
                                  "formSelector":"#search_mini_form",
                                  "url":"http://rocket.vectorns.com/search/ajax/suggest/",
                                  "destinationSelector":"#search_autocomplete"}
                             }'
                                                           type="text"
                                                           name="q"
                                                           value=""
                                                           placeholder="Search entire store here..."
                                                           class="input-text"
                                                           maxlength="128"
                                                           role="combobox"
                                                           aria-haspopup="false"
                                                           aria-autocomplete="both"
                                                           autocomplete="off"/>
                                                    <div id="search_autocomplete" class="search-autocomplete"></div>
                                                    <div class="nested">
                                                        <a class="action advanced"
                                                           href="http://rocket.vectorns.com/catalogsearch/advanced/"
                                                           data-action="advanced-search">
                                                            Advanced Search </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <button type="submit"
                                                        title="Search"
                                                        class="action search rd-navbar-search-form-submit">
                                                    <span>Search</span>
                                                </button>
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
    </header>

    <main id="maincontent" class="page-main fix-indent-2">
        <a id="contentarea" tabindex="-1"></a>
        <style type="text/css">
            input {
                width: 400px;
                height: 40px;
            }

            label {
                margin-right: 10px;                display: block;                margin-top: 20px;
            }
            #custom-recap-form input {                display: inline-block;                width: 400px;                clear: none;                float: left;            }
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
                position: relative;                                width: 68px;                font-size: 22px;                background-color: #e92d46;                color: white;                padding: 14px;                position: relative;                display: inline-block;                float: right;                height: 50px;
            }                        .page-main.fix-indent-2 {                padding-top: 0px;            }
        </style>
        <div style="background-color: #e92d46; width: 100%; padding: 8px 20px 1px;">
            <p style="text-align: center; margin-bottom: 10px;">
                <strong>
                    <span style="font-size: xx-large; color: #ffffff;"><img
                                src="https://www.rocketsciencesports.com/media/wysiwyg/custom-rss.png"
                                alt="" class="custom-rss-img"
                                style="vertical-align: middle"/> RECAP</span>
                </strong>
            </p>
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
    </main>
    <footer class="page-footer layout_5">
        <div class="block-newsletter">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <strong>Get the Latest News Delivered Daily.</strong>
                        <span class="slog-newsletter">Give us your email and you will be daily updated with the latest events, in detail.</span>
                    </div>
                    <div class="content">
                        <form class="form subscribe"
                              novalidate
                              action="http://rocket.vectorns.com/newsletter/subscriber/new/"
                              method="post"
                              data-mage-init='{"validation": {"errorClass": "mage-error"}}'
                              id="newsletter-validate-detail">
                            <div class="field newsletter">
                                <div class="control">
                                    <input
                                            name="email"
                                            type="email"
                                            id="newsletter"
                                            placeholder="Enter your email address"
                                            data-validate="{required:true, 'validate-email':true}"/>
                                </div>
                                <button class="action subscribe primary" title="Subscribe" type="submit">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container content footer">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-block-4 footer-col">
                        <h4 class="hidden-title">Information</h4>
                        <div class="footer-col-content">
                            <div class="footer-logo">
                                <div class="logoAfter"></div>
                            </div>
                            <ul class="list-icon">
                                <li><a target="_blank" href="//www.facebook.com/TemplateMonster/"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="//twitter.com/TemplateMonster"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="//plus.google.com/+TemplateMonster"><i
                                                class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="//www.instagram.com/template_monster/"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li><a target="_blank" href="//www.pinterest.com/templatemonster/"><i
                                                class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <strong class="logo">
                        <img src="http://rocket.vectorns.com/pub/media/theme_options/default/LOGO-for-Web.jpg"
                             alt="Rocket Science Sports"
                             width="75" height="75"/>
                    </strong>
                </div>
                <div class="col-sm-8 align-right">
                    <div class="list-ul">
                        <div class="footer-col">
                            <h4>Why buy from us</h4>
                            <div class="footer-col-content">
                                <ul>
                                    <li><a href="http://rocket.vectorns.com/shipping-delivery">Shipping & Delivery</a>
                                    </li>
                                    <li><a href="http://rocket.vectorns.com/secure-payment">Secure payment</a></li>
                                    <li><a href="http://rocket.vectorns.com/support">Support</a></li>
                                    <li><a href="http://rocket.vectorns.com/guarantee">Guarantee</a></li>
                                    <li><a href="http://rocket.vectorns.com/terms-conditions">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="list-ul">
                        <div class="footer-col"><h4>Information</h4>
                            <div class="footer-col-content">
                                <ul>
                                    <li><a href="http://rocket.vectorns.com/about-us">About Us</a></li>
                                    <li><a href="http://rocket.vectorns.com/customer-service">Customer Service</a></li>
                                    <li><a href="http://rocket.vectorns.com/template-settings">Template Settings</a>
                                    </li>
                                </ul>
                                <ul class="footer links">
                                    <li class="nav item"><a
                                                href="http://rocket.vectorns.com/privacy-policy-cookie-restriction-mode/">Privacy
                                            Policy</a></li>
                                    <li class="nav item"><a href="http://rocket.vectorns.com/sales/guest/form/">Orders
                                            and Returns</a></li>
                                    <li class="nav item"><a href="http://rocket.vectorns.com/search/term/popular/">Search
                                            Terms</a></li>
                                    <li class="nav item"><a href="http://rocket.vectorns.com/contact/">Contact Us</a>
                                    </li>
                                    <li class="nav item"><a href="http://rocket.vectorns.com/catalogsearch/advanced/"
                                                            data-action="advanced-search">Advanced Search</a></li>
                                    <li class="nav item"><a href="http://rocket.vectorns.com/newsletter/manage/index/"
                                                            class="newsletter-popup-link">Newsletter Subscription</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <small class="copyright">
                        <span>&copy; Rocket Science Sports Store. All Rights Reserved.</span>
                    </small>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/x-magento-init">
    {
        "*": {
            "themeChild": {}
        }
    }




    </script>
    <script type="text/x-magento-init">
    {
        "*": {
            "theme": {}
        }
    }




    </script>
    <script type="text/x-magento-init">
{"*": {"googleMapOptions": {"pluginPageData":{"contacts":{"width":null,"height":null,"show_on":null,"selector":null},"api":null}}}}




    </script>


    <script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "storage-manager": {
                            "component": "Magento_Catalog/js/storage-manager",
                            "appendTo": "",
                            "storagesConfiguration" :
                                         {"recently_viewed_product":{"requestConfig":{"syncUrl":"http:\/\/rocket.vectorns.com\/catalog\/product\/frontend_action_synchronize\/"},"lifetime":"1000","allowToSendRequest":null},"recently_compared_product":{"requestConfig":{"syncUrl":"http:\/\/rocket.vectorns.com\/catalog\/product\/frontend_action_synchronize\/"},"lifetime":"1000","allowToSendRequest":null},"product_data_storage":{"updateRequestConfig":{"url":"http:\/\/rocket.vectorns.com\/rest\/en\/V1\/products-render-info"},"allowToSendRequest":null}}                        }
                    }
                }
            }
        }




    </script>
    <script>
        require.config({
            deps: [
                'jquery',
                'mage/translate',
                'jquery/jquery-storageapi'
            ],
            callback: function ($) {
                'use strict';

                var dependencies = [],
                    versionObj;

                $.initNamespaceStorage('mage-translation-storage');
                $.initNamespaceStorage('mage-translation-file-version');
                versionObj = $.localStorage.get('mage-translation-file-version');


                if (versionObj.version !== 'be498f6400a784e2f14cfca0c11c3f6d116d4d05') {
                    dependencies.push(
                        'text!js-translation.json'
                    );

                }

                require.config({
                    deps: dependencies,
                    callback: function (string) {
                        if (typeof string === 'string') {
                            $.mage.translate.add(JSON.parse(string));
                            $.localStorage.set('mage-translation-storage', string);
                            $.localStorage.set(
                                'mage-translation-file-version',
                                {
                                    version: 'be498f6400a784e2f14cfca0c11c3f6d116d4d05'
                                }
                            );
                        } else {
                            $.mage.translate.add($.localStorage.get('mage-translation-storage'));
                        }
                    }
                });
            }
        });
    </script>

    <script type="text/x-magento-init">
    {
        "*": {
            "mage/cookies": {
                "expires": null,
                "path": "/",
                "domain": ".rocket.vectorns.com",
                "secure": false,
                "lifetime": "3600"
            }
        }
    }




    </script>
    <noscript>
        <div class="message global noscript">
            <div class="content">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong>
                    <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span>
                </p>
            </div>
        </div>
    </noscript>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '955045701181380');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=955045701181380&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <script type="text/x-magento-init">
    {
        "body": {
            "ajaxWishlist": {"isShowSpinner":true,"isShowSuccessMessage":true,"successMessageText":"Product {product.name} has been added to your wishlist.","customerLoginUrl":"http:\/\/rocket.vectorns.com\/customer\/account\/login\/"}        }
    }




    </script>
    <script type="text/x-magento-init">
    {
        ".newsletter-popup": {
            "newsletterPopup": {"customClass":"","timeout":0,"isShowOnStartup":true,"isShowOnFooter":false,"title":"Newsletter Subscription","content":"Sign Up for Our Newsletter:","submit":"Subscribe","cancel":"Cancel","socialLinks":[]}        }
    }




    </script>
    <div class="newsletter-popup" style="display:none;">

        <div class="block newsletter">
            <form class="form subscribe"
                  novalidate
                  action="http://rocket.vectorns.com/newsletter/subscriber/new/"
                  method="post"
                  data-mage-init='{"validation": {"errorClass": "mage-error"}}'
                  id="newsletter-validate-detail_2">
                <div class="field newsletter">
                    <div class="control">
                        <input
                                name="email"
                                type="email" id="newsletter-5d9553321d2a8"
                                placeholder="Enter your email address"
                                data-validate="{required:true, 'validate-email':true}"/>
                    </div>
                </div>

                <div class="buttons-container">
                    <button class="subscribe" type="button" data-role="action"><span>Subscribe</span></button>
                    <button class="cancel" type="button" data-role="action"><span>Cancel</span></button>
                </div>
            </form>
            <!--    <div class="privacy-policy-check-box">-->
            <!--        <input type="checkbox" class="check_privacy" name="newsletter_tm_id" value="true" />-->
            <!--        <div class="privacy-policy-check-text">-->
            <!--        </div>-->
            <!--    </div>-->
        </div>
    </div>
    <div class="scrollToTop">To Top</div>
</div>
</body>
</html>
