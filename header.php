<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Objects
 * @subpackage cross-leaf
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta name="google-site-verification" content="R7p8qWuRkis5HfnP9CrykXkEQ6z74KDoqRNdvIs2llk">
	<meta name="description" content="CrossLeaf Web Engineering provides bespoke HTML5 Website Design along with Network/ERP Web Automation Development services.  Book a meeting today.">
	<meta name="robots" content="noodp">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="CrossLeaf Web Engineering | ERP Dev. & Web Design">
	<meta property="og:description" content="CrossLeaf Web Engineering provides bespoke HTML5 Website Design along with Network/ERP Web Automation Development services.  Book a meeting today.">
	<meta property="og:url" content="http://www.Crossleaf.co">
	<meta property="og:site_name" content="Crossleaf.co">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:description" content="CrossLeaf Web Engineering provides bespoke HTML5 Website Design along with Network/ERP Web Automation Development services.  Book a meeting today.">
	<meta name="twitter:title" content="CrossLeaf Web Engineering | ERP Dev. & Web Design">
	<meta name="twitter:site" content="@contact@crossleaf.ca">
	<meta name="twitter:creator" content="@contact@crossleaf.ca">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--	<link rel="stylesheet" media="all" href="./crossleaf/style.css">-->
<!--	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
<!--	-->
<!--	<script async="" src="./crossleaf/analytics.js"></script>-->
<!--	<script type="text/javascript">-->
<!--		var frontpage_quote = "";-->
<!--	</script>-->
<!--	-->
<!--	<!-- / Yoast SEO plugin. -->-->
<!--	<script src="./crossleaf/wp-emoji-release.min.js" type="text/javascript"></script>-->
<!--	<style type="text/css">-->
<!--		img.wp-smiley,-->
<!--		img.emoji {-->
<!--			display: inline !important;-->
<!--			border: none !important;-->
<!--			box-shadow: none !important;-->
<!--			height: 1em !important;-->
<!--			width: 1em !important;-->
<!--			margin: 0 .07em !important;-->
<!--			vertical-align: -0.1em !important;-->
<!--			background: none !important;-->
<!--			padding: 0 !important;-->
<!--		}-->
<!--	</style>-->
<!--	<link rel="stylesheet" id="taxonomy-image-plugin-public-css" href="./crossleaf/style(1).css" type="text/css" media="screen">-->
<!--	<!-- This site uses the Google Analytics by Yoast plugin v5.4.6 - Universal enabled - https://yoast.com/wordpress/plugins/google-analytics/ -->-->
<!--	<script type="text/javascript">-->
<!--		(function (i, s, o, g, r, a, m) {-->
<!--			i['GoogleAnalyticsObject'] = r;-->
<!--			i[r] = i[r] || function () {-->
<!--					(i[r].q = i[r].q || []).push (arguments)-->
<!--				}, i[r].l = 1 * new Date ();-->
<!--			a = s.createElement (o),-->
<!--				m = s.getElementsByTagName (o)[0];-->
<!--			a.async = 1;-->
<!--			a.src = g;-->
<!--			m.parentNode.insertBefore (a, m)-->
<!--		}) (window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');-->
<!---->
<!--		__gaTracker ('create', 'UA-50008808-1', 'auto');-->
<!--		__gaTracker ('set', 'forceSSL', true);-->
<!--		__gaTracker ('send', 'pageview');-->
<!--	</script>-->
<!--	<!-- / Google Analytics by Yoast -->-->
<!--	<script src="./crossleaf/js"></script>-->
<!--	<script data-main="./crossleaf/main_release.js" src="./crossleaf/require.js"></script>-->
<!---->
<!--	<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main_release" src="./crossleaf/main_release.js"></script>-->
<!--	<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="particle_release" src="./crossleaf/particle_release.js"></script>-->
<!--	<style type="text/css">-->
<!--		.dg ul {-->
<!--			list-style: none;-->
<!--			margin: 0;-->
<!--			padding: 0;-->
<!--			width: 100%;-->
<!--			clear: both-->
<!--		}-->
<!---->
<!--		.dg.ac {-->
<!--			position: fixed;-->
<!--			top: 0;-->
<!--			left: 0;-->
<!--			right: 0;-->
<!--			height: 0;-->
<!--			z-index: 2000-->
<!--		}-->
<!---->
<!--		.dg:not(.ac) .main {-->
<!--			overflow: hidden-->
<!--		}-->
<!---->
<!--		.dg.main {-->
<!--			-webkit-transition: opacity 0.1s linear;-->
<!--			-o-transition: opacity 0.1s linear;-->
<!--			-moz-transition: opacity 0.1s linear;-->
<!--			transition: opacity 0.1s linear-->
<!--		}-->
<!---->
<!--		.dg.main.taller-than-window {-->
<!--			overflow-y: auto-->
<!--		}-->
<!---->
<!--		.dg.main.taller-than-window .close-button {-->
<!--			opacity: 1;-->
<!--			margin-top: -1px;-->
<!--			border-top: 1px solid #2c2c2c-->
<!--		}-->
<!---->
<!--		.dg.main ul.closed .close-button {-->
<!--			opacity: 1 !important-->
<!--		}-->
<!---->
<!--		.dg.main:hover .close-button,-->
<!--		.dg.main .close-button.drag {-->
<!--			opacity: 1-->
<!--		}-->
<!---->
<!--		.dg.main .close-button {-->
<!--			-webkit-transition: opacity 0.1s linear;-->
<!--			-o-transition: opacity 0.1s linear;-->
<!--			-moz-transition: opacity 0.1s linear;-->
<!--			transition: opacity 0.1s linear;-->
<!--			border: 0;-->
<!--			position: absolute;-->
<!--			line-height: 19px;-->
<!--			height: 20px;-->
<!--			cursor: pointer;-->
<!--			text-align: center;-->
<!--			background-color: #000-->
<!--		}-->
<!---->
<!--		.dg.main .close-button:hover {-->
<!--			background-color: #111-->
<!--		}-->
<!---->
<!--		.dg.a {-->
<!--			float: right;-->
<!--			margin-right: 15px;-->
<!--			overflow-x: hidden-->
<!--		}-->
<!---->
<!--		.dg.a.has-save ul {-->
<!--			margin-top: 27px-->
<!--		}-->
<!---->
<!--		.dg.a.has-save ul.closed {-->
<!--			margin-top: 0-->
<!--		}-->
<!---->
<!--		.dg.a .save-row {-->
<!--			position: fixed;-->
<!--			top: 0;-->
<!--			z-index: 1002-->
<!--		}-->
<!---->
<!--		.dg li {-->
<!--			-webkit-transition: height 0.1s ease-out;-->
<!--			-o-transition: height 0.1s ease-out;-->
<!--			-moz-transition: height 0.1s ease-out;-->
<!--			transition: height 0.1s ease-out-->
<!--		}-->
<!---->
<!--		.dg li:not(.folder) {-->
<!--			cursor: auto;-->
<!--			height: 27px;-->
<!--			line-height: 27px;-->
<!--			overflow: hidden;-->
<!--			padding: 0 4px 0 5px-->
<!--		}-->
<!---->
<!--		.dg li.folder {-->
<!--			padding: 0;-->
<!--			border-left: 4px solid rgba(0, 0, 0, 0)-->
<!--		}-->
<!---->
<!--		.dg li.title {-->
<!--			cursor: pointer;-->
<!--			margin-left: -4px-->
<!--		}-->
<!---->
<!--		.dg .closed li:not(.title),-->
<!--		.dg .closed ul li,-->
<!--		.dg .closed ul li > * {-->
<!--			height: 0;-->
<!--			overflow: hidden;-->
<!--			border: 0-->
<!--		}-->
<!---->
<!--		.dg .cr {-->
<!--			clear: both;-->
<!--			padding-left: 3px;-->
<!--			height: 27px-->
<!--		}-->
<!---->
<!--		.dg .property-name {-->
<!--			cursor: default;-->
<!--			float: left;-->
<!--			clear: left;-->
<!--			width: 40%;-->
<!--			overflow: hidden;-->
<!--			text-overflow: ellipsis-->
<!--		}-->
<!---->
<!--		.dg .c {-->
<!--			float: left;-->
<!--			width: 60%-->
<!--		}-->
<!---->
<!--		.dg .c input[type=text] {-->
<!--			border: 0;-->
<!--			margin-top: 4px;-->
<!--			padding: 3px;-->
<!--			width: 100%;-->
<!--			float: right-->
<!--		}-->
<!---->
<!--		.dg .has-slider input[type=text] {-->
<!--			width: 30%;-->
<!--			margin-left: 0-->
<!--		}-->
<!---->
<!--		.dg .slider {-->
<!--			float: left;-->
<!--			width: 66%;-->
<!--			margin-left: -5px;-->
<!--			margin-right: 0;-->
<!--			height: 19px;-->
<!--			margin-top: 4px-->
<!--		}-->
<!---->
<!--		.dg .slider-fg {-->
<!--			height: 100%-->
<!--		}-->
<!---->
<!--		.dg .c input[type=checkbox] {-->
<!--			margin-top: 9px-->
<!--		}-->
<!---->
<!--		.dg .c select {-->
<!--			margin-top: 5px-->
<!--		}-->
<!---->
<!--		.dg .cr.function,-->
<!--		.dg .cr.function .property-name,-->
<!--		.dg .cr.function *,-->
<!--		.dg .cr.boolean,-->
<!--		.dg .cr.boolean * {-->
<!--			cursor: pointer-->
<!--		}-->
<!---->
<!--		.dg .selector {-->
<!--			display: none;-->
<!--			position: absolute;-->
<!--			margin-left: -9px;-->
<!--			margin-top: 23px;-->
<!--			z-index: 10-->
<!--		}-->
<!---->
<!--		.dg .c:hover .selector,-->
<!--		.dg .selector.drag {-->
<!--			display: block-->
<!--		}-->
<!---->
<!--		.dg li.save-row {-->
<!--			padding: 0-->
<!--		}-->
<!---->
<!--		.dg li.save-row .button {-->
<!--			display: inline-block;-->
<!--			padding: 0px 6px-->
<!--		}-->
<!---->
<!--		.dg.dialogue {-->
<!--			background-color: #222;-->
<!--			width: 460px;-->
<!--			padding: 15px;-->
<!--			font-size: 13px;-->
<!--			line-height: 15px-->
<!--		}-->
<!---->
<!--		#dg-new-constructor {-->
<!--			padding: 10px;-->
<!--			color: #222;-->
<!--			font-family: Monaco, monospace;-->
<!--			font-size: 10px;-->
<!--			border: 0;-->
<!--			resize: none;-->
<!--			box-shadow: inset 1px 1px 1px #888;-->
<!--			word-wrap: break-word;-->
<!--			margin: 12px 0;-->
<!--			display: block;-->
<!--			width: 440px;-->
<!--			overflow-y: scroll;-->
<!--			height: 100px;-->
<!--			position: relative-->
<!--		}-->
<!---->
<!--		#dg-local-explain {-->
<!--			display: none;-->
<!--			font-size: 11px;-->
<!--			line-height: 17px;-->
<!--			border-radius: 3px;-->
<!--			background-color: #333;-->
<!--			padding: 8px;-->
<!--			margin-top: 10px-->
<!--		}-->
<!---->
<!--		#dg-local-explain code {-->
<!--			font-size: 10px-->
<!--		}-->
<!---->
<!--		#dat-gui-save-locally {-->
<!--			display: none-->
<!--		}-->
<!---->
<!--		.dg {-->
<!--			color: #eee;-->
<!--			font: 11px 'Lucida Grande', sans-serif;-->
<!--			text-shadow: 0 -1px 0 #111-->
<!--		}-->
<!---->
<!--		.dg.main::-webkit-scrollbar {-->
<!--			width: 5px;-->
<!--			background: #1a1a1a-->
<!--		}-->
<!---->
<!--		.dg.main::-webkit-scrollbar-corner {-->
<!--			height: 0;-->
<!--			display: none-->
<!--		}-->
<!---->
<!--		.dg.main::-webkit-scrollbar-thumb {-->
<!--			border-radius: 5px;-->
<!--			background: #676767-->
<!--		}-->
<!---->
<!--		.dg li:not(.folder) {-->
<!--			background: #1a1a1a;-->
<!--			border-bottom: 1px solid #2c2c2c-->
<!--		}-->
<!---->
<!--		.dg li.save-row {-->
<!--			line-height: 25px;-->
<!--			background: #dad5cb;-->
<!--			border: 0-->
<!--		}-->
<!---->
<!--		.dg li.save-row select {-->
<!--			margin-left: 5px;-->
<!--			width: 108px-->
<!--		}-->
<!---->
<!--		.dg li.save-row .button {-->
<!--			margin-left: 5px;-->
<!--			margin-top: 1px;-->
<!--			border-radius: 2px;-->
<!--			font-size: 9px;-->
<!--			line-height: 7px;-->
<!--			padding: 4px 4px 5px 4px;-->
<!--			background: #c5bdad;-->
<!--			color: #fff;-->
<!--			text-shadow: 0 1px 0 #b0a58f;-->
<!--			box-shadow: 0 -1px 0 #b0a58f;-->
<!--			cursor: pointer-->
<!--		}-->
<!---->
<!--		.dg li.save-row .button.gears {-->
<!--			background: #c5bdad url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAANCAYAAAB/9ZQ7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQJJREFUeNpiYKAU/P//PwGIC/ApCABiBSAW+I8AClAcgKxQ4T9hoMAEUrxx2QSGN6+egDX+/vWT4e7N82AMYoPAx/evwWoYoSYbACX2s7KxCxzcsezDh3evFoDEBYTEEqycggWAzA9AuUSQQgeYPa9fPv6/YWm/Acx5IPb7ty/fw+QZblw67vDs8R0YHyQhgObx+yAJkBqmG5dPPDh1aPOGR/eugW0G4vlIoTIfyFcA+QekhhHJhPdQxbiAIguMBTQZrPD7108M6roWYDFQiIAAv6Aow/1bFwXgis+f2LUAynwoIaNcz8XNx3Dl7MEJUDGQpx9gtQ8YCueB+D26OECAAQDadt7e46D42QAAAABJRU5ErkJggg==) 2px 1px no-repeat;-->
<!--			height: 7px;-->
<!--			width: 8px-->
<!--		}-->
<!---->
<!--		.dg li.save-row .button:hover {-->
<!--			background-color: #bab19e;-->
<!--			box-shadow: 0 -1px 0 #b0a58f-->
<!--		}-->
<!---->
<!--		.dg li.folder {-->
<!--			border-bottom: 0-->
<!--		}-->
<!---->
<!--		.dg li.title {-->
<!--			padding-left: 16px;-->
<!--			background: #000 url(data:image/gif;base64,R0lGODlhBQAFAJEAAP////Pz8////////yH5BAEAAAIALAAAAAAFAAUAAAIIlI+hKgFxoCgAOw==) 6px 10px no-repeat;-->
<!--			cursor: pointer;-->
<!--			border-bottom: 1px solid rgba(255, 255, 255, 0.2)-->
<!--		}-->
<!---->
<!--		.dg .closed li.title {-->
<!--			background-image: url(data:image/gif;base64,R0lGODlhBQAFAJEAAP////Pz8////////yH5BAEAAAIALAAAAAAFAAUAAAIIlGIWqMCbWAEAOw==)-->
<!--		}-->
<!---->
<!--		.dg .cr.boolean {-->
<!--			border-left: 3px solid #806787-->
<!--		}-->
<!---->
<!--		.dg .cr.function {-->
<!--			border-left: 3px solid #e61d5f-->
<!--		}-->
<!---->
<!--		.dg .cr.number {-->
<!--			border-left: 3px solid #2fa1d6-->
<!--		}-->
<!---->
<!--		.dg .cr.number input[type=text] {-->
<!--			color: #2fa1d6-->
<!--		}-->
<!---->
<!--		.dg .cr.string {-->
<!--			border-left: 3px solid #1ed36f-->
<!--		}-->
<!---->
<!--		.dg .cr.string input[type=text] {-->
<!--			color: #1ed36f-->
<!--		}-->
<!---->
<!--		.dg .cr.function:hover,-->
<!--		.dg .cr.boolean:hover {-->
<!--			background: #111-->
<!--		}-->
<!---->
<!--		.dg .c input[type=text] {-->
<!--			background: #303030;-->
<!--			outline: none-->
<!--		}-->
<!---->
<!--		.dg .c input[type=text]:hover {-->
<!--			background: #3c3c3c-->
<!--		}-->
<!---->
<!--		.dg .c input[type=text]:focus {-->
<!--			background: #494949;-->
<!--			color: #fff-->
<!--		}-->
<!---->
<!--		.dg .c .slider {-->
<!--			background: #303030;-->
<!--			cursor: ew-resize-->
<!--		}-->
<!---->
<!--		.dg .c .slider-fg {-->
<!--			background: #2fa1d6-->
<!--		}-->
<!---->
<!--		.dg .c .slider:hover {-->
<!--			background: #3c3c3c-->
<!--		}-->
<!---->
<!--		.dg .c .slider:hover .slider-fg {-->
<!--			background: #44abda-->
<!--		}-->
<!--		.crossleaf-logo {-->
<!--			z-index: 999999;-->
<!--			position: relative;-->
<!--			text-align: right;-->
<!--			width: 100%;-->
<!--			max-width: 211px;-->
<!--			margin-top: 30px;-->
<!--			float: right;-->
<!--		}-->
<!--		#buttons .view-site,-->
<!--		#buttons .contact-us {-->
<!--			line-height: 0.7;-->
<!--			-webkit-font-smoothing: subpixel-antialiased;-->
<!--			position: relative;-->
<!--		}-->
<!--		#buttons .view-site::hover:before {-->
<!--			width: 100%;-->
<!--			left: 0;-->
<!--			right: auto;-->
<!--		}-->
<!--		#buttons .view-site:hover ~ .contact-us:before {-->
<!--			width: 0%;-->
<!--			right: 0;-->
<!--			left: auto;-->
<!--		}-->
<!--		.front-page a.homeButtons{-->
<!--			display: none !important;-->
<!--		}-->
<!--		.contact-phone,-->
<!--		.contact-us,-->
<!--		.view-site {-->
<!--			color: black;-->
<!--		}-->
<!--	</style>-->
<!--	<script type="text/javascript" charset="UTF-8" src="./crossleaf/common.js"></script>-->
<!--	<script type="text/javascript" charset="UTF-8" src="./crossleaf/util.js"></script>-->
<!--	<script type="text/javascript" charset="UTF-8" src="./crossleaf/stats.js"></script>-->
<!--</head>-->
<!---->
<!--<body class="wordpress y2015 m11 d30 h08 home page pageid-1157 page-author-admin">-->
<!--<div id="responsive-width-aid"></div>-->
<!---->
<!--<div class="mobile-rotate-screen">-->
<!--	<div class="rotate-hero-container">-->
<!--		<figure class="rotate-icon rotate-phone"></figure>-->
<!--		<header>-->
<!--			<div>PLEASE ROTATE</div>-->
<!--			<div>YOUR {0}</div>-->
<!--		</header>-->
<!--	</div>-->
<!--	<div class="rotate-lock-container">-->
<!--		<figure class="rotate-icon rotate-lock"></figure>-->
<!--		<span>Lock your portrait orientation so you don't see this again.</span>-->
<!--	</div>-->
<!--</div>-->
<!---->
<!--<div id="menu-content-overlay" style="width: 1383px; height: 591px; visibility: hidden;"></div>-->
<!---->
<!--<div class="container">-->
<!--	<div class="menu-wrap" style="transform: matrix(1, 0, 0, 1, -260, 0);">-->
<!--	</div>-->
<!--	<div id="content-wrap" class="">-->
<!---->
<!---->
<!--		<div class="main-header-inner header-inner-content">-->
<!---->
<!--			<h1 class="blog-title">-->
<!--				<a href="http://www.Crossleaf.co" title="Crossleaf.co" rel="home"><img class="crossleaf-logo" src="CrossLeaf-Web-Engineering-Toronto.png" alt=""/></a>-->
<!--			</h1>-->
<!--		</div>-->
<!---->
<!---->
<!--		<main class="front-page" role="main" id="particles" style="visibility: inherit; opacity: 1;">-->
<!--			<a href="http://crossleaf.co/" class="homeButtons" style="margin-top: -58px; margin-left: -366px; width: 732px; padding-top: 154px; pointer-events: visible;">-->
<!--				<div id="reel-btn" class="btn btn-white site-link" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">-->
<!--					<span id="reelText" class="reelText">CONTACT US</span>-->
<!--				</div>-->
<!--				<div class="divider" style="transform: matrix(-0.49999, 0.86602, -0.86603, -0.49999, 7.5, 9);"></div>-->
<!--				<div id="work-btn" class="btn btn-white site-link btn-hover" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">-->
<!--					<span id="workText" class="workText">VIEW SITE</span>-->
<!--				</div>-->
<!--			</a>-->
<!--			<!---->
<!--                                <div class="homeVideoPlayer">-->
<!--                                    <video id="video" class="video" preload="auto" width="100%">-->
<!--                                        <source src="https://player.vimeo.com/external/125958239.hd.mp4?s=1d07de218f6733cbed136a826f2b6bcb&amp;profile_id=113" type="video/mp4">-->
<!--                                    </video>-->
<!--                                    <div class="video-controls">-->
<!--                                        <section class="play-container">-->
<!--                                            <div class="play-button" style="display: block;">-->
<!--                                                <div class="out" style="display: block;">-->
<!--                                                    <svg width="82" height="82">-->
<!--                                                    <path d="M0,41V82H82V0H0V41V41" stroke="#FFFFFF" stroke-width="4" fill="none" class="play-button-border"></path>-->
<!--                                                    <polygon points="33,31 49,41 33,51" fill="#FFFFFF" class="play-button-triangle"></polygon>-->
<!--                                                    </svg>-->
<!--                                                </div>-->
<!--                                                <div class="over">-->
<!--                                                    <svg width="82" height="82">-->
<!--                                                    <path d="M0,41V82H82V0H0V41V41" stroke="#919191" stroke-width="4" fill="none" class="play-button-border"></path>-->
<!--                                                    <polygon points="33,31 49,41 33,51" fill="#919191" class="play-button-triangle" style="display: block;"></polygon>-->
<!--                                                    </svg>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="loaderDiv">-->
<!--                                                <svg height="32" width="35" class="loader">-->
<!--                                                <circle cx="5" cy="5" r="5" fill="#FFFFFF"></circle>-->
<!--                                                <circle cx="30" cy="5" r="5" fill="#FFFFFF"></circle>-->
<!--                                                <circle cx="17.5" cy="26.65" r="5" fill="#FFFFFF"></circle>-->
<!--                                                </svg>-->
<!--                                            </div>-->
<!--                                        </section>-->
<!--                                        <section>-->
<!--                                            <div class="bottom-bar">-->
<!--                                                <div class="progress-container">-->
<!--                                                    <div class="bar loaded" style="width: 6%;"></div>-->
<!--                                                    <div class="bar played"></div>-->
<!--                                                    <div class="label-container">-->
<!--                                                        <div class="elapsed-time label">00:00</div>-->
<!--                                                        <div class="total-time label">00:00</div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="button-container">-->
<!--                                                    <div class="button-wrapper">-->
<!--                                                        <div class="button play-toggle">-->
<!--                                                            <svg width="13" height="17" class="play-svg">-->
<!--                                                            <rect width="5" height="17"></rect>-->
<!--                                                            <rect width="5" height="17" x="8"></rect>-->
<!--                                                            </svg>-->
<!--                                                            <svg height="17" width="13" class="pause-svg">-->
<!--                                                            <polygon points="0,0 13,8.5 0,17"></polygon>-->
<!--                                                            </svg>-->
<!--                                                        </div>-->
<!--                                                        <div class="button mute-toggle">-->
<!--                                                            <svg height="17" width="17">-->
<!--                                                            <polygon points="0,8.5 9,0 9,17"></polygon>-->
<!--                                                            <g class="volume-lines">-->
<!--                                                            <rect width="1" height="1" x="10" y="8"></rect>-->
<!--                                                            <rect width="1" height="3" x="12" y="7"></rect>-->
<!--                                                            <rect width="1" height="7" x="14" y="5"></rect>-->
<!--                                                            <rect width="1" height="11" x="16" y="3"></rect>-->
<!--                                                            </g>-->
<!--                                                            </svg>-->
<!--                                                        </div>-->
<!--                                                        <div class="button fullscreen-toggle">-->
<!--                                                            <svg width="28" height="20" class="fullscreen-svg">-->
<!--                                                            <path d="m 0,0 0,1.7895 0,13.421 0,1.7895 1.7857143,0 21.4285717,0 1.785714,0 0,-1.7895 0,-6.2631 -3.571429,0 0,4.4737 -17.8571424,0 0,-9.8422 12.5000004,0 0,-3.5789 -14.2857147,0 -1.7857143,0 z" class="path1" style="transform: matrix(1, 0, 0, 1, 0, 3);"></path>-->
<!--                                                            <path d="m 19,0 0,3.5391 2.325359,0 0,2.4609 3.674641,0 0,-4.2304 0,-1.7696 -1.837321,0 -4.162679,0 z" class="path2" style="transform: matrix(1, 0, 0, 1, 0, 3);"></path>-->
<!--                                                            </svg>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </section>-->
<!--                                    </div>-->
<!--                                </div>-->-->
<!--			<canvas width="1400" height="608" style="width: 1400px; height: 608px;"></canvas>-->
<!--		</main>-->
<!--		<div id="buttons" style="position:absolute;z-index: 999999;width: 100%;top: 72%;">-->
<!--			<a class="view-site" href="http://crossleaf.co/">VIEW SITE</a>-->
<!--			<div class="divider" style="transform: matrix(-0.49999, 0.86602, -0.86603, -0.49999, 7.5, 9);width: 25px;margin: 0% 3%;transform: translate(30%, 45%) rotate(120deg);height: 20px;display: inline-block;border-bottom: 1px solid rgba(50, 50, 50, 0.9);"></div>-->
<!--			<a class="contact-us" href="mailto:contact@crossleaf.ca">CONTACT US</a>-->
<!--			<div class="contact-phone" style="margin-top: 30px;">CALL 905.601.9049</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!--<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/-->
<!---->
<!--Page Caching using disk: enhanced-->
<!--Object Caching 992/1145 objects using memcached-->
<!---->
<!--Served from: www.Crossleaf.co @ 2015-11-30 08:56:43 by W3 Total Cache -->-->
<!--</body>-->
<!---->
<!--</html>-->