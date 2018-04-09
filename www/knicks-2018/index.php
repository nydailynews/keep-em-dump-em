<?php
$append = '';
$version = '';
if ( $_SERVER['QUERY_STRING'] !== '' ):
	$version = substr(htmlspecialchars($_SERVER['QUERY_STRING']), 0, 11);
	$append = '?' . $version;
endif; 
?><!DOCTYPE HTML>
<html lang="en">
  <head>
		<!-- DEFAULT -->
		<title>2018 Knicks Keep 'Em Dump 'Em</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="format-detection" content="telephone=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<link rel="icon" type="image/png" href="http://interactive.nydailynews.com/favicons.png">

		<!-- Titles -->
		<meta property="og:title" content="2018 Knicks Keep 'Em Dump 'Em" />
		<meta name="twitter:title" content="2018 Knicks Keep 'Em Dump 'Em"/>

		<!-- Description -->
		<meta name="description" content="Vote which New York Knicks players and front-office personnel to keep and which to get rid of on the 2018 Knicks Keep 'Em Dump 'Em" />
		<meta property="og:description" content="Vote which New York Knicks players and front-office personnel to keep and which to get rid of on the 2018 Knicks Keep 'Em Dump 'Em" />
		<meta name="twitter:description" content="Vote which New York Knicks players and front-office personnel to keep and which to get rid of on the 2018 Knicks Keep 'Em Dump 'Em" />

		<!-- KEYWORD -->
		<meta name="keywords" content="Knicks,New York,news app,online polls,sports,New York Knicks 2018,Knicks lineup,NBA" />

		<!-- LINK -->
		<link rel="canonical" href="http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/" />
		<meta property="og:url" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/" />
		<meta name="twitter:url" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/">

		<!-- THUMBNAIL IMAGE-->
		<meta property="og:image" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/img/knicks-YEAR-lineup.jpg" />
		<meta name="twitter:image:src" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/img/knicks-YEAR-lineup.jpg" />
		<meta property="og:image:width" content="1024" />
		<meta property="og:image:height" content="512" />

		<!-- PARSELY -->
		<script type="application/ld+json">
		{
				"@context": "http://schema.org",
				"@type": "NewsArticle",
				"headline": "2018 Knicks Keep 'Em Dump 'Em",
				"url": "http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/",
				"thumbnailUrl": "http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/img/knicks-YEAR-lineup.jpg",
				"dateCreated": "2018-04-11T07:00:00Z",
				"articleSection": "Interactive",
				"creator": ["Interactive Poll"],
				"keywords": ["interactive","interactive poll","Knicks,New York,news app,online polls,sports,New York Knicks 2018,Knicks lineup,NBA"]
		}
		</script>

		<!-- NO NEED TO FILL -->
		<meta property="og:type" content="website" />
		<meta name="twitter:card" content="summary"> 
		<meta name="twitter:domain" content="http://interactive.nydailynews.com"/>
		<meta name="twitter:site" content="NY Daily News">
		<meta name="decorator" content="responsive" />

		<script src="//assets.adobedtm.com/4fc527d6fda921c80e462d11a29deae2e4cf7514/satelliteLib-c91fdc6ac624c6cbcd50250f79786de339793801.js"></script>
		<script src="/js/jquery.min.js"></script>
	
		<script>window.NREUM||(NREUM={}),__nr_require=function(n,t,e){function r(e){if(!t[e]){var o=t[e]={exports:{}};n[e][0].call(o.exports,function(t){var o=n[e][1][t];return r(o?o:t)},o,o.exports)}return t[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({QJf3ax:[function(n,t){function e(n){function t(t,e,a){n&&n(t,e,a),a||(a={});for(var u=c(t),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,e);return s}function a(n,t){f[n]=c(n).concat(t)}function c(n){return f[n]||[]}function u(){return e(t)}var f={};return{on:a,emit:t,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=n("gos");t.exports=e()},{gos:"7eSDFh"}],ee:[function(n,t){t.exports=n("QJf3ax")},{}],gos:[function(n,t){t.exports=n("7eSDFh")},{}],"7eSDFh":[function(n,t){function e(n,t,e){if(r.call(n,t))return n[t];var o=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,t,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return n[t]=o,o}var r=Object.prototype.hasOwnProperty;t.exports=e},{}],D5DuLP:[function(n,t){function e(n,t,e){return r.listeners(n).length?r.emit(n,t,e):(o[n]||(o[n]=[]),void o[n].push(t))}var r=n("ee").create(),o={};t.exports=e,e.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(n,t){t.exports=n("D5DuLP")},{}],XL7HBI:[function(n,t){function e(n){var t=typeof n;return!n||"object"!==t&&"function"!==t?-1:n===window?0:i(n,o,function(){return r++})}var r=1,o="nr@id",i=n("gos");t.exports=e},{gos:"7eSDFh"}],id:[function(n,t){t.exports=n("XL7HBI")},{}],loader:[function(n,t){t.exports=n("G9z0Bl")},{}],G9z0Bl:[function(n,t){function e(){var n=v.info=NREUM.info;if(n&&n.licenseKey&&n.applicationID&&f&&f.body){c(d,function(t,e){t in n||(n[t]=e)}),v.proto="https"===l.split(":")[0]||n.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var t=f.createElement("script");t.src=v.proto+n.agent,f.body.appendChild(t)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=n("handle"),c=n(1),u=window,f=u.document,s="addEventListener",p="attachEvent",l=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-515.min.js"},v=t.exports={offset:i(),origin:l,features:{}};f[s]?(f[s]("DOMContentLoaded",o,!1),u[s]("load",e,!1)):(f[p]("onreadystatechange",r),u[p]("onload",e)),a("mark",["firstbyte",i()])},{1:11,handle:"D5DuLP"}],11:[function(n,t){function e(n,t){var e=[],o="",i=0;for(o in n)r.call(n,o)&&(e[i]=t(o,n[o]),i+=1);return e}var r=Object.prototype.hasOwnProperty;t.exports=e},{}]},{},["G9z0Bl"]);</script>

		<meta name="themeKey" content="nydailynews" />
		<meta name="mapThemeKey" content="responsive" />
		<meta name="localeCountry" content="US"/>
		<meta name="localeLanguage" content="en" />
		<link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Open%20Sans:400|Open+Sans+Condensed:300,700|PT+Serif" media="all" />
		<link rel="stylesheet" href="../css/foundation.css" />
		<link rel="stylesheet" href="../css/main-v2.css<?php echo $append; ?>" />
		<script onload="nydn_ads('one');" src="//interactive.nydailynews.com/includes/template/template.js"></script>
  </head>
  <body style="background-color: black;">
<div id="nydn-shell">
		<style>
		.NOV-5{display:none}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html,body{width:100%;height:100%;margin:0;padding:0}li{list-style:none}.hamburger{background:none;padding:0;border:0}a{text-decoration:none}#nydn-header{background:#222;border-bottom:solid 1px #3B3B3B}#nydn-header #nydn-header-wrap{height:52px;padding:10px 20px;position:relative}#nydn-header #nydn-header-wrap #nydn-logo{display:block;width:192px;height:18px;background:url(http://interactive.nydailynews.com/includes/media/nydn_logo.png) 0 0 no-repeat;margin:10px 10px 10px 32px;float:left;text-indent:-99999px}#nydn-header #nydn-header-wrap #nydn-logo a{display:block;width:100%;height:100%;background:none}#nydn-header #nydn-header-wrap #nydn-menu{position:absolute;left:20px;top:10px}#nydn-header #nydn-header-wrap #nydn-menu #nydn-menu-open{display:block;width:22px;height:18px;background:url(http://multimedia.nydailynews.com/css/P01/i/icon/icons.png) 0 0 no-repeat;margin-right:10px;margin-top:10px;text-indent:-99999px;cursor:pointer}#nydn-header #nydn-header-wrap #nydn-menu #nydn-menu-open:hover{opacity:9;filter:alpha(opacity=900);background-position:0 -50px}#nydn-header #nydn-header-wrap #nydn-menu nav{position:absolute;width:224px;top:30px;left:0;background:#000;background:rgba(0,0,0,0.9);display:none;z-index:10}#nydn-header #nydn-header-wrap #nydn-menu nav ul{margin:0;padding:0}#nydn-header #nydn-header-wrap #nydn-menu nav ul li{text-transform:uppercase}#nydn-header #nydn-header-wrap #nydn-menu nav ul li a{display:block;padding:10px 20px;color:#fff;transition:All 300ms ease;-webkit-transition:All 300ms ease;-moz-transition:All 300ms ease;-o-transition:All 300ms ease}#nydn-header #nydn-header-wrap #nydn-menu nav ul li a:hover{color:#e8172d}#nydn-header #nydn-header-wrap #nydn-menu #nydn-menu-close{width:30px;height:30px;color:#979797;position:absolute;top:30px;left:195px;line-height:30px;text-align:center;cursor:pointer;display:block;z-index:10;opacity:0;filter:alpha(opacity=0)}#nydn-header #nydn-header-wrap #nydn-menu #nydn-menu-close:hover{color:#e8172d}#nydn-header #nydn-header-wrap #nydn-menu.on nav{display:block;height:auto}#nydn-header #nydn-header-wrap #nydn-menu.on #nydn-menu-close{opacity:1;filter:alpha(opacity=100)}#nydn-header #nydn-header-wrap #nydn-sm{float:right;margin-top:8px}#nydn-header #nydn-header-wrap #nydn-sm ul{margin:0}#nydn-header #nydn-header-wrap #nydn-sm ul li{float:left;width:22px;height:22px;float:left;margin-left:10px;background:url(http://multimedia.nydailynews.com/css/P01/i/icon/icons.png) 0 0 no-repeat;text-indent:-99999px;cursor:pointer}#nydn-header #nydn-header-wrap #nydn-sm ul li a{display:block;width:22px;height:22px}#nydn-header #nydn-header-wrap #nydn-sm ul li.twitter{background-position:-100px 0;background:url(http://interactive.nydailynews.com/includes/media/tw_top.png)}#nydn-header #nydn-header-wrap #nydn-sm ul li.twitter:hover{background-position:-100px -50px;background:url(http://interactive.nydailynews.com/includes/media/tw_top.png);opacity:.8}#nydn-header #nydn-header-wrap #nydn-sm ul li.facebook{background-position:-200px 0;background:url(http://interactive.nydailynews.com/includes/media/fb_top.png)}#nydn-header #nydn-header-wrap #nydn-sm ul li.facebook:hover{background-position:-200px -50px;background:url(http://interactive.nydailynews.com/includes/media/fb_top.png);opacity:.8}#nydn-footer{clear:both;font-size:12px;color:#fff;text-align:center}#nydn-footer #nydn-footer-services{height:28px;line-height:28px;vertical-align:middle;background:url(http://assets.nydailynews.com/nydn/img/static/bg/header.png) 0 -71px repeat-x}#nydn-footer #nydn-footer-services ul{width:auto;height:100%;display:inline-block;background:url(http://assets.nydailynews.com/nydn/img/static/bg/header.png) -99px -276px no-repeat;padding-left:1px;margin:0}#nydn-footer #nydn-footer-services ul li{display:block;float:left;background:url(http://assets.nydailynews.com/nydn/img/static/bg/header.png) right -276px no-repeat;padding-right:1px}#nydn-footer #nydn-footer-services ul li a{display:block;height:100%;padding:0 10px;color:#fff}#nydn-footer #nydn-footer-services ul li a[href='http://www.nydailynews.com/services']{display:none}#nydn-footer #nydn-footer-services ul li a:hover{background-position:0 -71px;background:url(http://assets.nydailynews.com/nydn/img/static/bg/header.png) 0 -304px repeat-x}#nydn-footer #nydn-footer-services ul li li a{height:auto;background:none}@media (max-width: 900px){#nydn-footer #nydn-footer-services ul li a{display:none}#nydn-footer #nydn-footer-services ul li a[href='http://www.nydailynews.com/services'],#nydn-footer #nydn-footer-services ul li a[href='http://www.nydailynews.com/services/contact-us'],#nydn-footer #nydn-footer-services ul li a[href='http://www.nydailynews.com/services/contact-us'],#nydn-footer #nydn-footer-services ul li a[href='http://www.nydailynews.com/services/sitemap']{display:block}}#nydn-footer #nydn-disclaimer{font-size:11px;color:#ccc;background:#272727;padding:30px 0;height:100%}#nydn-footer #nydn-disclaimer a{color:#ccc;text-decoration:underline}@media (max-width: 480px){#nydn-header #nydn-header-wrap #nydn-sm ul{overflow:hidden;padding:0;width:56px}#nydn-header #nydn-header-wrap #nydn-sm ul li{margin-left:4px}#nydn-header #nydn-header-wrap #nydn-logo{margin:10px 0 0 42px}#nydn-header #nydn-header-wrap{padding:10px}}#interactive-logo a{color:#cdcdcd;font-size:13px;font-family:"Helvetica";letter-spacing:2px}#interactive-logo{width:192px;height:18px;margin:13px 10px 0 32px;float:left;position:relative;bottom:35px;background: 0 0 no-repeat}#header_line{position:relative;right:225px;top:7px}@media (max-width: 600px){#interactive-logo,#header_line{display:none}}
		</style>
		
		<script>
			jQuery(document).ready(function(){ Rnav(); });

			function Rnav(){
				jQuery("#nydn-menu-close").on("click",function(e){ RnavClose(); });
				jQuery("html").on("touchstart click",function(e) {
					if( jQuery(e.target).attr("id") == "nydn-menu-open" ) {
						jQuery("#nydn-menu nav").slideDown();
						jQuery("#nydn-menu").addClass("on");}
					else    RnavClose();
				});
			}

			function RnavClose(){
				jQuery("#nydn-menu").removeClass("on");
				jQuery("#nydn-menu nav").slideUp();
			}
		</script>

	<div id="box">
		<header id="nydn-header">
			  <div id="nydn-header-wrap">
				<div id="nydn-logo"><a href="http://www.nydailynews.com">Daily News</a></div>
				<nav id="nydn-menu">
				  <button class="hamburger" id="nydn-menu-open">Menu</button>
				  <nav>
					<ul>
					  <li><a href="http://www.nydailynews.com/new-york">New York</a></li>
					  <li><a href="http://www.nydailynews.com/news">News</a></li>
					  <li><a href="http://www.nydailynews.com/news/politics">Politics</a></li>
					  <li><a href="http://www.nydailynews.com/sports">Sports</a></li>
					  <li><a href="http://www.nydailynews.com/entertainment">Entertainment</a></li>
					  <li><a href="http://www.nydailynews.com/opinion">Opinion</a></li>
					  <li><a href="http://www.nydailynews.com/life-style">Living</a></li>
					  <li><a href="http://www.nydailynews.com/autos">Autos</a></li>
					</ul>
				  </nav>
				  <span id="nydn-menu-close">X</span>
				</nav>
				<nav id="nydn-sm">
				  <ul>
					<li class="facebook"><a href="https://www.facebook.com/NYDailyNews/">facebook</a></li>
					 <li class="twitter"><a href="https://twitter.com/NYDailyNews">twitter</a></li>
				  </ul>
				</nav>
			  </div>
		</header>
	</div>
<!--begin main content -->

	<!-- banner ad -->
	<div id="top_ad" class="center">
		<div id='div-gpt-ad-1423507761396-1'>
			<script>
				if ( is_mobile ) googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-1'); });
				else $('#top_ad').remove();
			</script>
		</div>
	</div>
	<script>
	var app_config = { 
		description: "Vote which New York Knicks players and front-office personnel to keep and which to get rid of on the 2018 Knicks Keep 'Em Dump 'Em",
		team: 'New York Knicks',
		year: 'YEAR',
		version: '<?php echo $version; ?>',
	};
	</script>
	<main>
		<article>
			<div id="intro">
				<img src="../img/keep-dump-logo.png">
				<h1>2018 New York Knicks</h1>
				<p>The Knicks and their fans suffered another dreadful season — one that included star Kristaps Porzingis tearing his ACL. This was the fourth straight season the team lost at least 50 games, which hadn't been done by the franchise since 1964. Now it's time for you to clean up this mess and become the Knicks GM, deciding who should stay and who needs to leave the Garden for good. <strong>VOTE NOW!</strong></p>
				<div>
					<ul class="ra-share" id="ra-share-top" style="text-align: center;">
						<li class="rt-share-f"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/">facebook</a> </li>
						<li class="ra-share-t"> <a target="_blank" href="https://twitter.com/share?url=http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/&amp;text=Vote which New York Knicks players and front-office personnel to keep and which to get rid of on the 2018 Knicks Keep 'Em Dump 'Em&amp;via=NYDNi&related=NYDNTransit">Tweet</a></li>
						<li class="ra-share-e"> <a href="mailto:?subject=&amp;body=Vote%20here%20http://interactive.nydailynews.com/poll/keep-em-dump-em/knicks-2018/">email</a> </li>
					</ul>
				</div>
			</div>

		<?php include('../php/stats.php'); ?>
		<div id="players" class="row">
			<div class="columns">
				<h2 class="section">Players</h2>
				<section id="PLAYERS"></section>
			</div>
			<div class="columns">
				<h2 class="section">The Brass</h2>
				<section id="BRASS">
			</div>
		</div>
    </div>
</div>
				



				</section>
			</div>
		</div>
		</article>
	</main>   

	<!-- mobile ad -->
	<div id="m_bottom_ad" class="center">
		<div id='div-gpt-ad-1423507761396-2'>
			<script>
				if ( is_mobile ) googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-2'); });
				else $('#m_bottom_ad').remove();
			</script>
		</div>
	</div>  
	<!-- end main content -->		
  <footer id="nydn-footer">
	<div id="nydn-footer-services">
	  <ul>
		<li><a href="http://www.nydailynews.com/services">Services</a></li>
		<li><a href="http://www.nydailynews.com/services/media-kit/">Media Kit</a></li>
		<li><a href="http://www.nydailynews.com/autos">Autos</a></li>
		<li><a href="https://homedelivery.nydailynews.com">Home Delivery</a></li>
		<li><a href="http://www.nydailynews.com/login">Newsletters</a></li>
		<li><a href="http://local.nydailynews.com/search/en-US/" >Businesses</a></li>
		<li><a href="http://nydailynews.adperfect.com">Place an Ad</a></li>
		<li><a href="http://www.nydailynews.com/services/privacy-policy#third_party_ads">About our Ads</a></li>
		<li><a href="http://www.nydailynews.com/services/contact-us">Contact Us</a></li>
		<li><a href="http://www.nydailynews.com/services/careers">Careers</a></li>
		<li><a href="http://www.nydailynews.com/services/faqs">FAQ's</a></li>
		<li><a href="http://www.nydailynews.com/services/feeds">Feeds</a></li>
		<li><a href="http://www.nydailynews.com/services/sitemap">Site Map</a></li>
	  </ul>
	</div>
	<div id="nydn-disclaimer">
	  <p>Use of this website signifies your agreement to the <a href="http://www.nydailynews.com/services/terms-services">Terms of Service</a> and <a href="http://www.nydailynews.com/services/privacy-policy">Privacy Policy</a>.</p>
	  <p>© Copyright 2016-2017 NYDailyNews.com. All rights reserved.</p>
	</div>
  </footer>

   

	<script src="../js/foundation.min.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/sticky.js"></script>
	<script onload="keepem.init();" src="../js/app-keepem-v2.js"></script>
	<script>
		$(document).foundation();
	</script>
	<script>_satellite.pageBottom();</script>

	</div>
  </body>
</html>
