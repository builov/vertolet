<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'config.php';

$mail = new PHPMailer(true);

try {
    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = SMTP_PORT;

    //Recipients
    $mail->setFrom(SMTP_FROM_DEFAULT, 'Mailer');
    $mail->addAddress('5905@lst.gr', 'Joe User');
//    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo(SMTP_FROM_DEFAULT, 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//    $mail->send();
//    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//echo 'ok';

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Компания Вертолет</title>

    <script src="js/fancybox.umd.js"></script>
    <link rel="stylesheet" href="js/fancybox.css" />

    <!--	<link rel='stylesheet' id='wp-block-library-css'  href='https://ld-wp.template-help.com/wordpress_free/23520/wp-includes/css/dist/block-library/style.min.css?ver=5.1.1' type='text/css' media='all' />-->
    <!--	<link rel='stylesheet' id='contact-form-7-css'  href='https://ld-wp.template-help.com/wordpress_free/23520/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.1' type='text/css' media='all' />-->
    <!--	<link rel='stylesheet' id='font-awesome-css'  href='https://ld-wp.template-help.com/wordpress_free/23520/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />-->

    <link rel='stylesheet' href='css/fonts.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='worky-theme-style-css'  href='css/workylite/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='worky-theme-style-inline-css'  href='css/worky-theme-style-inline.css' type='text/css' />

    <link rel='stylesheet' id='cx-google-fonts-worky-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A300%2C700%7CRoboto%3A400%2C300%2C500%2C900&#038;subset=latin&#038;ver=5.1.1' type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-icons-css'  href='css/elementor-icons.min.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css'  href='css/animations.min.css?ver=2.5.13' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'  href='css/frontend.min.css?ver=2.5.13' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-inline-css'  href='css/elementor-frontend-inline.css' type='text/css' />

    <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COswald%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.1.1' type='text/css' media='all' />

    <script type='text/javascript' src='js/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.4.1'></script>

    <!--	<link rel='https://api.w.org/' href='https://ld-wp.template-help.com/wordpress_free/23520/wp-json/' />-->
    <!--	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ld-wp.template-help.com/wordpress_free/23520/xmlrpc.php?rsd" />-->
    <!--	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ld-wp.template-help.com/wordpress_free/23520/wp-includes/wlwmanifest.xml" />-->
    <!--	<meta name="generator" content="WordPress 5.1.1" />-->
    <!--	<link rel="canonical" href="https://ld-wp.template-help.com/wordpress_free/23520/" />-->
    <!--	<link rel='shortlink' href='https://ld-wp.template-help.com/wordpress_free/23520/' />-->
    <!--	<link rel="alternate" type="application/json+oembed" href="https://ld-wp.template-help.com/wordpress_free/23520/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_free%2F23520%2F" />-->
    <!--	<link rel="alternate" type="text/xml+oembed" href="https://ld-wp.template-help.com/wordpress_free/23520/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_free%2F23520%2F&#038;format=xml" />-->

    <!--	<link rel="icon" href="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />-->
    <!--	<link rel="icon" href="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/cropped-favicon-192x192.png" sizes="192x192" />-->
    <!--	<link rel="apple-touch-icon-precomposed" href="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />-->
    <!--	<meta name="msapplication-TileImage" content="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />-->

    <style>
        body {
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 2.142;
            font-family: Montserrat, sans-serif;
            letter-spacing: 0px;
            text-align: left;
            color: #3b3d42;
        }
    </style>
</head>

<body class="home page-template page-template-page-templates page-template-fullwidth-content page-template-page-templatesfullwidth-content-php page page-id-8 top-panel-invisible layout-fullwidth blog- elementor-default elementor-page elementor-page-8">

<div class="page-preloader-cover">
    <div class="page-preloader"></div>
</div>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <style>
        @font-face {
            font-family: 'Fontin-Sans-CR-Regular';
            src:url('fonts/Fontin-Sans-CR-Regular.ttf.woff') format('woff'),
            url('fonts/Fontin-Sans-CR-Regular.ttf.svg#Fontin-Sans-CR-Regular') format('svg'),
            url('fonts/Fontin-Sans-CR-Regular.ttf.eot'),
            url('fonts/Fontin-Sans-CR-Regular.ttf.eot?#iefix') format('embedded-opentype');
            font-weight: normal;
            font-style: normal;
        }
        header#masthead {
            background: #000000;
            height: 0;
            overflow: visible;
        }
        header#masthead div {
            background: #000000;
        }
        @media(min-width:640px) {
            header#masthead,
            header#masthead div
            {
                height: auto;
            }
        }
        .site-branding img {
            width: 200px;
            height: auto;
        }
        .site-branding a.text {
            color: #ffffff;
            font-style: normal;
            font-weight: 500;
            font-size: 19px;
            line-height: 1.4;
            font-family: 'Fontin-Sans-CR-Regular';
            letter-spacing: 4px;
            display: none;
        }
        @media(min-width:640px) {
            header#masthead.sticky {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 99999;
            }
            header#masthead.sticky .site-branding a.text {
                display: inherit;
            }
        }
        .sticky .site-branding img {
            display: none;
        }
    </style>

    <header id="masthead" class="site-header ">
        <div class="site-header__wrap container">
            <div class="space-between-content">

                <div class="site-branding">
                    <a href="/" rel="home"><img src="img/logo3.png" class="logo" alt=""></a>
                    <a href="/" rel="home" class="text">VERTOLЁT</a>
                </div>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <div class="main-navigation-inner">
                        <ul id="main-menu" class="menu">
                            <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="#about" aria-current="page">О КОМПАНИИ</a></li>
                            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="#products">ПРОДУКЦИЯ</a></li>
                            <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="#partners">ПАРТНЕРЫ</a></li>
                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="#contact">КОНТАКТЫ</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- #site-navigation -->
            </div>
        </div>
    </header><!-- #masthead -->


    <div id="content" class="site-content ">
        <article id="post-8" class="post-8 page type-page status-publish hentry">
            <div data-elementor-type="post" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">


                        <style>
                            .elementor-8 .elementor-element.elementor-element-bdc61ec > .elementor-container {
                                max-width:1200px;
                                /*min-height:100vh;*/
                                min-height: calc(100vh - 80px);
                            }
                            .elementor-8 .elementor-element.elementor-element-bdc61ec .elementor-background-overlay {
                                overflow: hidden;
                            }
                            .elementor-8 .elementor-element.elementor-element-bdc61ec .elementor-background-overlay:before {
                                content: "";
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                /*height: calc(100vh - 138px);*/
                                background: rgba(0, 0, 0, .5) url("img/pattern-dotted.svg") 0 0 repeat;
                                /*z-index: 2;*/
                            }
                            .elementor embed, .elementor iframe, .elementor object, .elementor video {
                                min-width: 100%;
                                max-width: 1000%;
                                width: auto;
                                min-height: 100%;
                                /*min-height: calc(100vh - 138px);*/
                            }

                            .elementor-8 .elementor-element.elementor-element-3fdfd82 .elementor-heading-title {
                                font-family: 'Fontin-Sans-CR-Regular';
                                letter-spacing: 9px;
                                display: inline-block;
                                padding: 0 50px 12px;
                                border-bottom: 2px solid aliceblue;
                            }
                            .elementor-8 .elementor-element.elementor-element-c9417bc {
                                color: #ffffff;
                                /*font-family: "Oswald", Sans-serif;*/
                                /*font-family: Roboto, sans-serif;*/
                                font-family: Montserrat, sans-serif;
                                font-size: 15px;
                                font-weight: 500;
                                text-transform: uppercase;
                                font-style: normal;
                                line-height: 42px;
                                letter-spacing: 5px;
                            }
                        </style>


                        <section class="elementor-element elementor-element-bdc61ec elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="bdc61ec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

                            <div class="elementor-background-overlay">
                                <video muted="muted" loop autoplay="autoplay">
                                    <source src="bg7.mp4" type="video/mp4">
                                    <!--source src="" type="video/webm"-->
                                </video>
                            </div>

                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-cc3646a elementor-column elementor-col-100 elementor-top-column" data-id="cc3646a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3fdfd82 elementor-widget elementor-widget-heading" data-id="3fdfd82" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">VERTOLЁT</h2>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-c9417bc elementor-widget elementor-widget-text-editor" data-id="c9417bc" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">Для нас нет нерешаемых задач</div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cbb5de5 elementor-align-center elementor-widget elementor-widget-button" data-id="cbb5de5" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a id="testlink" href="https://ld-wp.template-help.com/wordpress_free/23520/about/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span id="order-button" class="elementor-button-text">Оставить заявку</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <!-- About company -->

                        <style>
                            ul.check {
                                /*list-style-image: url(img/success-green-check-mark-icon.svg);*/
                                list-style: none inside;
                                margin: 0;
                            }
                            ul.check li {
                                margin-left: 35px;
                            }
                            ul.check li:before {
                                content: '';
                                display: inline-block;
                                height: 25px;
                                width: 35px;
                                background-image: url('img/success-green-check-mark-icon.svg');
                                background-size: contain;
                                background-repeat: no-repeat;
                                margin-left: -35px;
                                top: 7px;
                                position: relative;
                            }
                            .elementor-8 .elementor-element.elementor-element-4e8da247 {
                                font-family: "Montserrat", Sans-serif;
                                font-size: 16px;
                                font-weight: 300;
                                line-height: 2.143em;
                            }
                            .elementor-8 .elementor-element.elementor-element-10623144 {
                                font-family: "Montserrat", Sans-serif;
                                font-size: 16px;
                                font-weight: 500;
                                line-height: 2.143em;
                            }
                        </style>

                        <a id="about"></a>

                        <section class="elementor-element elementor-element-46dc31bf elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="46dc31bf" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-element elementor-element-7fb97a98 elementor-column elementor-col-50 elementor-top-column" data-id="7fb97a98" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-14d56e7 elementor-invisible elementor-widget elementor-widget-heading" data-id="14d56e7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">О компании</h5>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-538b817f elementor-invisible elementor-widget elementor-widget-heading" data-id="538b817f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Для нас нет нерешаемых задач</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-18b57201 animated-slow elementor-invisible elementor-widget elementor-widget-divider" data-id="18b57201" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-element elementor-element-2ddaae7 elementor-column elementor-col-50 elementor-top-column" data-id="2ddaae7" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4e8da247 elementor-widget elementor-widget-text-editor" data-id="10623144" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Несмотря на относительную молодость, компания «Вертолёт» занимает прочные позиции на рынке
                                                                поставок строительного оборудования. Благодаря знанию специфики отрасли,
                                                                гибкой ценовой политике, особому вниманию к качеству поставляемых товаров и
                                                                оперативному выполнению заказов, компания пользуется заслуженным уважением у
                                                                своих деловых партнеров.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-10623144 elementor-widget elementor-widget-text-editor" data-id="4e8da247" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Наши преимущества:</p>
                                                            <ul class="check">
                                                                <li>гибкие условия сотрудничества</li>
                                                                <li>ценообразование, низкие цены благодаря прямым договорам с производимтельями</li>
                                                                <li>оперативная доставка</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <style>
                            .elementor-8 .elementor-element-3864ebd0 a.elementor-button,
                            .elementor-8 .elementor-element-3864ebd0 .elementor-button
                            {
                                font-family: "Oswald", Sans-serif;
                                font-size: 24px;
                                font-weight: 700;
                                text-transform: uppercase;
                                font-style: normal;
                                line-height: 54px;
                                letter-spacing: 0px;
                                color: #ffffff;

                                text-shadow: -1px -1px 1px #fff, 1px 1px 1px #000;
                                /*text-shadow: 0 0 10px #000;*/
                            }
                        </style>
                        <section class="elementor-element elementor-element-3864ebd0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3864ebd0" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-element elementor-element-5c62f5e6 elementor-invisible elementor-column elementor-col-33 elementor-top-column" data-id="5c62f5e6" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-e7a365d elementor-align-center elementor-widget elementor-widget-button" data-id="e7a365d" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">ИНДИВИДУАЛЬНЫЙ<br>ПОДХОД</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-element elementor-element-7a805b44 elementor-invisible elementor-column elementor-col-33 elementor-top-column" data-id="7a805b44" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;}">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-a5307ad elementor-align-center elementor-widget elementor-widget-button" data-id="a5307ad" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						                                        <span class="elementor-button-content-wrapper">
						                                            <span class="elementor-button-text">ГИБКОЕ<br>ЦЕНООБРАЗОВАНИЕ</span>
		                                                        </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-element elementor-element-73cd257f elementor-invisible elementor-column elementor-col-33 elementor-top-column" data-id="73cd257f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-979df34 elementor-align-center elementor-widget elementor-widget-button" data-id="979df34" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">ОПЕРАТИВНАЯ<br>ДОСТАВКА</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>





                        <!-- advantages & Testimonials -->


                        <section class="elementor-element elementor-element-73d12977 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="73d12977" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">


                                    <!-- advantages -->


                                    <div class="elementor-element elementor-element-80bcbe7 elementor-column elementor-col-50 elementor-top-column" data-id="80bcbe7" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7d0b3c7b elementor-widget elementor-widget-spacer" data-id="7d0b3c7b" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6edb5ed7 elementor-invisible elementor-widget elementor-widget-heading" data-id="6edb5ed7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">advantages</h5>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-759009da elementor-invisible elementor-widget elementor-widget-heading" data-id="759009da" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Working On <br>
                                                            Exclusive Projects</h2>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-545790df animated-slow elementor-invisible elementor-widget elementor-widget-divider" data-id="545790df" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-49d33cb3 elementor-widget elementor-widget-text-editor" data-id="49d33cb3" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Designing sustainable, high-performance buildings requires an
                                                                integration of architectural and engineered systems into a balanced
                                                                design of sustainability and cost-effectiveness. Archus merges these
                                                                practices with the unique requirements and guidelines necessary for
                                                                advanced technology facilities.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-694ed43b elementor-widget elementor-widget-button" data-id="694ed43b" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://ld-wp.template-help.com/wordpress_free/23520/about/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">view more</span>
		</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-2d4c986b elementor-widget elementor-widget-spacer" data-id="2d4c986b" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Testimonials -->

                                    <style>
                                        i.fa {
                                            font-style: normal;
                                        }
                                    </style>


                                    <div class="elementor-element elementor-element-5d7a8a3a elementor-column elementor-col-50 elementor-top-column" data-id="5d7a8a3a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-54b87d59 elementor-view-default elementor-widget elementor-widget-icon" data-id="54b87d59" data-element_type="widget" data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <div class="elementor-icon">
                                                                <i class="fa fa-quote-right" style="" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-403d51d4 elementor-widget elementor-widget-heading" data-id="403d51d4" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">Testimonials</h5>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-754d4c4a elementor-widget elementor-widget-heading" data-id="754d4c4a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">What our <br>
                                                            clients say</h2>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-100cd068 elementor-widget elementor-widget-divider" data-id="100cd068" data-element_type="widget" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f223197 elementor-widget elementor-widget-text-editor" data-id="f223197" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">It is not every construction company that can build a building from ground up and complete 80,000 sq. ft. of first class office improvement space in 13 months. </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1dc591b elementor-widget elementor-widget-text-editor" data-id="1dc591b" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><b>Kent</b>, posted on Everywhere</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <!-- PORTFOLIO -->

                        <style>
                            h2.elementor-heading-title.nowrap {
                                white-space: nowrap;
                            }
                            .elementor-8 .elementor-element.elementor-element-4a4acb90 {
                                font-family: "Montserrat", Sans-serif;
                                font-size: 16px;
                                font-weight: 300;
                                line-height: 2.143em;
                            }
                        </style>

                        <a id="products"></a>

                        <section class="elementor-element elementor-element-673a6327 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="673a6327" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-2ddef62 elementor-column elementor-col-50 elementor-top-column" data-id="2ddef62" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-26b34b81 elementor-invisible elementor-widget elementor-widget-heading" data-id="26b34b81" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">КАТАЛОГ</h5>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f6ee7e3 elementor-invisible elementor-widget elementor-widget-heading" data-id="1f6ee7e3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default nowrap">поставляемая<br>
                                                            продукция</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1e312b67 animated-slow elementor-invisible elementor-widget elementor-widget-divider" data-id="1e312b67" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2d37130 elementor-column elementor-col-50 elementor-top-column" data-id="2d37130" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4a4acb90 elementor-widget elementor-widget-text-editor" data-id="4a4acb90" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Мы предлагаеи строительные и расходные материалы как от ведущих отечественных, так и от зарубежных производителей.
                                                                Уделяем особое внимание качеству поставляемой продукции.
                                                                Отслеживаем актуальные для наших партнеров новинки в производстве товаров для стройиндустрии,
                                                                оперативно добавляем их в свой каталог.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>





                        <!-- Gallery -->

                        <style>
                            .elementor-8 .elementor-element.elementor-element-373a07a > .elementor-container {
                                max-width:1060px;
                            }
                        </style>

                        <section class="elementor-element elementor-element-373a07a elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="373a07a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-4770a53 elementor-column elementor-col-100 elementor-top-column" data-id="4770a53" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-938fadc gallery-spacing-custom elementor-widget elementor-widget-image-gallery" data-id="938fadc" data-element_type="widget" data-widget_type="image-gallery.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-gallery">
                                                            <div id='gallery-1' class='gallery galleryid-8 gallery-columns-6 gallery-size-worky-thumb-masonry'>

                                                                <figure class='gallery-item'>
                                                                    <img width="600" height="616" src="img/catalog/pilo.webp" />
                                                                    <h5>Пиломатериалы</h5>
                                                                </figure><figure class='gallery-item'>
                                                                    <img width="600" height="616" src="img/catalog/zapor.webp" />
                                                                    <h5>Запорная арматура и электроприводы</h5>
                                                                </figure><figure class='gallery-item'>
                                                                    <img width="600" height="616" src="img/catalog/stroy.webp" />
                                                                    <h5>Стройматериалы</h5>
                                                                </figure><figure class='gallery-item'>
                                                                    <img width="600" height="616" src="img/catalog/trub.webp" />
                                                                    <h5>Трубы и фитинги</h5>
                                                                </figure><figure class='gallery-item'>
                                                                    <img width="600" height="616" src="img/catalog/santeh.webp" />
                                                                    <h5>Сантехника</h5>
                                                                </figure><figure class='gallery-item'>
                                                                    <img width="600" height="616" src="img/catalog/radiat.webp" />
                                                                    <h5>Радиаторы отопления (батареи) </h5>
                                                                </figure>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-77141a4 elementor-align-center elementor-widget elementor-widget-button" data-id="77141a4" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href=""
                                                               class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">скачать каталог</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>





                        <!-- partners -->

                        <style>
                            .elementor-element-7c27a44a .elementor-widget-container {
                                margin: 0px 0px 30px 0px;
                            }
                        </style>

                        <a id="partners"></a>

                        <section class="elementor-element elementor-element-7e8fc924 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7e8fc924" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-54fd60f8 elementor-column elementor-col-50 elementor-top-column" data-id="54fd60f8" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2db20220 elementor-invisible elementor-widget elementor-widget-heading" data-id="2db20220" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">партнеры</h5>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-da918c4 elementor-invisible elementor-widget elementor-widget-heading" data-id="da918c4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">НАШИ ЗАКАЗЧИКИ И ПАРТНЕРЫ</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-674e0e44 animated-slow elementor-invisible elementor-widget elementor-widget-divider" data-id="674e0e44" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5fdd8755 elementor-column elementor-col-50 elementor-top-column"
                                         data-id="5fdd8755" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">

                                                <section class="elementor-element elementor-element-7c27a44a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7c27a44a" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-widget-container">
                                                                <p>Среди наших партнеров – и небольшие организации, и крупнейшие компании-застройщики Москвы и Московской области,
                                                                    производственные и эксплуатирующие организации в том числе федерального уровня.
                                                                    Мы заинтересованы в каждом нашем заказчике, поэтому постоянно совершенствуемся, работаем над ассортиментом и ценообразованием.
                                                                    Мы успешно сотрудничали с такими компаниями, как:</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="elementor-element elementor-element-7c27a44a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7c27a44a" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-24986649 elementor-column elementor-col-33 elementor-inner-column" data-id="24986649" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-38abf7fb elementor-widget elementor-widget-image" data-id="38abf7fb" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="135" height="102" src="img/pik.svg" class="attachment-full size-full" alt="" />											</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-da56123 elementor-column elementor-col-33 elementor-inner-column" data-id="da56123" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-63bd0f73 elementor-widget elementor-widget-image" data-id="63bd0f73" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="144" height="73" src="img/Russian_Railways_logo.svg" class="attachment-full size-full" alt="" />											</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1a572cb9 elementor-column elementor-col-33 elementor-inner-column" data-id="1a572cb9" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-696e50b9 elementor-widget elementor-widget-image" data-id="696e50b9" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="160" height="76" src="img/smlt_logo_blue_ru.svg" class="attachment-full size-full" alt="" />											</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

<!--                                                <section class="elementor-element elementor-element-50c644e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="50c644e6" data-element_type="section">-->
<!--                                                    <div class="elementor-container elementor-column-gap-default">-->
<!--                                                        <div class="elementor-row">-->
<!--                                                            <div class="elementor-element elementor-element-162eba31 elementor-column elementor-col-33 elementor-inner-column" data-id="162eba31" data-element_type="column">-->
<!--                                                                <div class="elementor-column-wrap  elementor-element-populated">-->
<!--                                                                    <div class="elementor-widget-wrap">-->
<!--                                                                        <div class="elementor-element elementor-element-49e89c75 elementor-widget elementor-widget-image" data-id="49e89c75" data-element_type="widget" data-widget_type="image.default">-->
<!--                                                                            <div class="elementor-widget-container">-->
<!--                                                                                <div class="elementor-image">-->
<!--                                                                                    <img width="139" height="76" src="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/home-brands-4.png" class="attachment-full size-full" alt="" />											</div>-->
<!--                                                                            </div>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="elementor-element elementor-element-1d840ef3 elementor-column elementor-col-33 elementor-inner-column" data-id="1d840ef3" data-element_type="column">-->
<!--                                                                <div class="elementor-column-wrap  elementor-element-populated">-->
<!--                                                                    <div class="elementor-widget-wrap">-->
<!--                                                                        <div class="elementor-element elementor-element-783f9473 elementor-widget elementor-widget-image" data-id="783f9473" data-element_type="widget" data-widget_type="image.default">-->
<!--                                                                            <div class="elementor-widget-container">-->
<!--                                                                                <div class="elementor-image">-->
<!--                                                                                    <img width="141" height="82" src="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/home-brands-5.png" class="attachment-full size-full" alt="" />											</div>-->
<!--                                                                            </div>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="elementor-element elementor-element-53be9e4b elementor-column elementor-col-33 elementor-inner-column" data-id="53be9e4b" data-element_type="column">-->
<!--                                                                <div class="elementor-column-wrap  elementor-element-populated">-->
<!--                                                                    <div class="elementor-widget-wrap">-->
<!--                                                                        <div class="elementor-element elementor-element-1807c3f1 elementor-widget elementor-widget-image" data-id="1807c3f1" data-element_type="widget" data-widget_type="image.default">-->
<!--                                                                            <div class="elementor-widget-container">-->
<!--                                                                                <div class="elementor-image">-->
<!--                                                                                    <img width="124" height="97" src="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/home-brands-6.png" class="attachment-full size-full" alt="" />											</div>-->
<!--                                                                            </div>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </section>-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!-- Contact -->

                        <style>
                            .elementor-8 .elementor-element.elementor-element-54d2b293 > .elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }
                            .elementor-8 .elementor-element.elementor-element-54d2b293 .elementor-social-icon {
                                padding: 0;
                            }
                        </style>

                        <a id="contact"></a>

                        <section class="elementor-element elementor-element-58631911 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="58631911" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-23b3e15b elementor-column elementor-col-50 elementor-top-column" data-id="23b3e15b" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-631bd0bc elementor-invisible elementor-widget elementor-widget-heading" data-id="631bd0bc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h5 class="elementor-heading-title elementor-size-default">Будем на связи</h5>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-620983a2 elementor-invisible elementor-widget elementor-widget-heading" data-id="620983a2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Наши контакты</h2>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-54314adc animated-slow elementor-invisible elementor-widget elementor-widget-divider" data-id="54314adc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-276ee3be elementor-widget elementor-widget-text-editor" data-id="276ee3be" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Телефон: <a href="tel:+5551234567">(555)123-4567</a><br />
                                                                E-mail: <a href="mailto:info@demolink.org">info@demolink.org</a><br />
                                                                Адрес: Alexandria, 32 Washingtorn str, 22303<br />
                                                                Время работы:<br />
                                                                Monday — Thursday 10:00 &#8211; 23:00<br />
                                                                Friday — Sunday 10:00 &#8211; 19:00
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-54d2b293 elementor-shape-rounded elementor-widget elementor-widget-social-icons" data-id="54d2b293" data-element_type="widget" data-widget_type="social-icons.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook"
                                                               href="https://api.whatsapp.com/send?phone=79153477071" target="_blank">
                                                                <img src="img/WhatsApp.svg" height="40" width="40" />
                                                            </a>

<!--                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook" href="https://www.facebook.com/zemezlab/" target="_blank">-->
<!--                                                                <span class="elementor-screen-only">Facebook</span>-->
<!--                                                                <i class="fa fa-facebook"></i>-->
<!--                                                            </a>-->
<!--                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter" href="https://twitter.com/zemezlab" target="_blank">-->
<!--                                                                <span class="elementor-screen-only">Twitter</span>-->
<!--                                                                <i class="fa fa-twitter"></i>-->
<!--                                                            </a>-->
<!--                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-google-plus" href="https://plus.google.com/" target="_blank">-->
<!--                                                                <span class="elementor-screen-only">Google-plus</span>-->
<!--                                                                <i class="fa fa-google-plus"></i>-->
<!--                                                            </a>-->
<!--                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-vimeo" href="https://vimeo.com/" target="_blank">-->
<!--                                                                <span class="elementor-screen-only">Vimeo</span>-->
<!--                                                                <i class="fa fa-vimeo"></i>-->
<!--                                                            </a>-->
<!--                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube" href="https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg" target="_blank">-->
<!--                                                                <span class="elementor-screen-only">Youtube</span>-->
<!--                                                                <i class="fa fa-youtube"></i>-->
<!--                                                            </a>-->
<!--                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest" href="https://www.pinterest.com/" target="_blank">-->
<!--                                                                <span class="elementor-screen-only">Pinterest</span>-->
<!--                                                                <i class="fa fa-pinterest"></i>-->
<!--                                                            </a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4b04b489 elementor-column elementor-col-50 elementor-top-column" data-id="4b04b489" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ede8185 elementor-widget elementor-widget-shortcode" data-id="ede8185" data-element_type="widget" data-widget_type="shortcode.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-shortcode">
                                                            <div role="form" class="wpcf7" id="wpcf7-f5-p8-o1" lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response"></div>
                                                                <form action="/" method="post" class="wpcf7-form" novalidate="novalidate">
                                                                    <p>
                                                                        <label><br />
                                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                                <input type="text" name="your-name" value="" size="40"
                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                                                                                       aria-invalid="false" placeholder="Your Name" />
                                                                            </span>
                                                                        </label>
                                                                    </p>
                                                                    <p>
                                                                        <label><br />
                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                <input type="email" name="your-email" value="" size="40"
                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                       aria-required="true" aria-invalid="false" placeholder="Your E-mail" />
                                                                            </span>
                                                                        </label>
                                                                    </p>
                                                                    <p>
                                                                        <label><br />
                                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                                                          aria-invalid="false" placeholder="Your Message"></textarea>
                                                                            </span>
                                                                        </label>
                                                                    </p>
                                                                    <p>
                                                                        <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit" />
                                                                    </p>
                                                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!--section class="elementor-element elementor-element-e20b287 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e20b287" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-0b9b66c elementor-column elementor-col-100 elementor-top-column" data-id="0b9b66c" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-f3daf03 elementor-widget elementor-widget-image" data-id="f3daf03" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <a href="https://www.templatemonster.com/wordpress-themes/worky-architectural-bureau-multipurpose-modern-elementor-wordpress-theme-76333.html" data-elementor-open-lightbox="">
                                                                <img width="1354" height="311" src="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/Group-2.1-1.png" class="attachment-full size-full" alt="" srcset="https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/Group-2.1-1.png 1354w, https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/Group-2.1-1-300x69.png 300w, https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/Group-2.1-1-768x176.png 768w, https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/Group-2.1-1-1024x235.png 1024w, https://ld-wp.template-help.com/wordpress_free/23520/wp-content/uploads/2019/04/Group-2.1-1-600x138.png 600w" sizes="(max-width: 1354px) 100vw, 1354px" />								</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section-->



                    </div>
                </div>
            </div>
        </article><!-- #post-8 -->
    </div><!-- #content -->




    <style>
        footer#colophon {
            background-color: #3b3d42;
        }
        .footer-copyright {
            color: #a1a2a4;
        }
    </style>

    <footer id="colophon" class="site-footer ">
        <div class="site-footer__wrap container">
            <div class="space-between-content"><div class="footer-copyright">© 2023</div></div>
        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<script type='text/javascript'>
    document.getElementById('testlink').addEventListener('click', function(event) {
        event.preventDefault();
        new Fancybox([
            {
                src: "#wpcf7-f5-p8-o1",
                type: "clone"
            },
        ]);
    });
    // Fancybox.bind(document.getElementById("order-button"), "[data-fancybox]", {
    //     // src: "#dialog-content",
    //     type: "inline"
    // });


    //sticky menu
    window.onscroll = function() {stick()};
    var navbar = document.getElementById("masthead");
    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function stick() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"https:\/\/ld-wp.template-help.com\/wordpress_free\/23520\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script type='text/javascript' src='js/scripts.js?ver=5.1.1'></script>
<script type='text/javascript' src='js/responsive-menu.js?ver=1.0.0'></script>
<script type='text/javascript' src='js/jquery.ui.totop.min.js?ver=1.2.0'></script>
<script type='text/javascript' src='js/theme-script.js?ver=1.0.0'></script>
<script type='text/javascript' src='js/wp-embed.min.js?ver=5.1.1'></script>
<script type='text/javascript' src='js/frontend-modules.min.js?ver=2.5.13'></script>
<script type='text/javascript' src='js/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/dialog.min.js?ver=4.7.1'></script>
<script type='text/javascript' src='js/waypoints.min.js?ver=4.0.2'></script>
<script type='text/javascript' src='js/swiper.min.js?ver=4.4.6'></script>
<script type='text/javascript'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.5.13","urls":{"assets":"https:\/\/ld-wp.template-help.com\/wordpress_free\/23520\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":8,"title":"HOME","excerpt":""}};
</script>
<script type='text/javascript' src='js/frontend.min.js?ver=2.5.13'></script>

</body>
</html>
