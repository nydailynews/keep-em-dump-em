<?php
//include('env.php');
//include(CLASS_PATH . 'class.csv.php');
include('../../class.csv.php');
$csv = new parseCSV('data.csv');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Keep 'Em Dump 'Em Archives</title>
    <link rel="icon" type="image/png" href="http://interactive.nydailynews.com/favicons.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="">
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <meta property="og:title" content="Keep 'Em Dump 'Em Archives" />
    <meta name="twitter:title" content="Keep 'Em Dump 'Em Archives"/>
    <meta name="parsely-title" content="Keep 'Em Dump 'Em Archives" />

    <meta name="description" content="A collection of the New York Daily News' Keep 'Em Dump 'Em's" />
    <meta property="og:description" content="A collection of the New York Daily News' Keep 'Em Dump 'Em's" />
    <meta name="twitter:description" content="A collection of the New York Daily News' Keep 'Em Dump 'Em's" />

    <!-- KEYWORD -->
    <meta name="keywords" content="polls,sports" />
    <meta name="news_keywords" content="polls,sports" />
    <meta name="parsely-tags" content="interactive,interactive poll,polls" />

    <!-- LINK -->
    <link rel="canonical" href="http://interactive.nydailynews.com/poll/keep-em-dump-em/">
    <meta property="og:url" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/" />
    <meta name="twitter:url" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/">
    <meta name="parsely-link" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/" />

    <!-- THUMBNAIL IMAGE-->
    <meta property="og:image" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/img/share.gif" />
    <meta name="twitter:image:src" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/img/share.gif" />
    <meta name="parsely-image-url" content="http://interactive.nydailynews.com/poll/keep-em-dump-em/img/share.gif" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="512" />

    <!-- TIME -->
    <meta name="parsely-pub-date" content="2017-04-11T11:00:00Z" />

    <!-- NO NEED TO FILL -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="http://interactive.nydailynews.com"/>
    <meta name="twitter:site" content="@nydailynews">
    <meta name="parsely-type" content="post" />
    <meta name="decorator" content="responsive" />
    <meta name="parsely-section" content="Interactive" />
    <meta name="parsely-author" content="Interactive Poll" />
    <meta name="nydn_section" content="NY Daily News" />
    <meta name="msvalidate.01" content="02916AAC0DA8B068EFE01D721E03ED7E" />
    <meta name="p:domain_verify" content="78efe4f5c9935744af497772f68a0ee7" />
    <meta property="fb:app_id" content="107464888913" />
    <meta property="fb:admins" content="1594068001" />
    <meta property="fb:pages" content="268914272540" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="NY Daily News" />
    <meta property="article:publisher" content="https://www.facebook.com/NYDailyNews/" />
    <meta name="themeKey" content="nydailynews" />
    <meta name="mapThemeKey" content="responsive" />
    <meta name="urlPrefix" content="" />
    <meta name="staticContentPrefix" content="http://static.localedge.com/" />
    <meta name="searchBinding" content="/search" />
    <meta name="localeCountry" content="US"/>
    <meta name="localeLanguage" content="en" />

    <!-- ADOBE ANALYTICS -->
    <script src="//assets.adobedtm.com/4fc527d6fda921c80e462d11a29deae2e4cf7514/satelliteLib-c91fdc6ac624c6cbcd50250f79786de339793801.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet'>
    <script data-main="//www.nydailynews.com/nydn/js/rh.js?r=20170405001" src="//www.nydailynews.com/nydn/js/require.js?r=2016LIST" defer></script>
      
    <link rel="stylesheet" type="text/css" href="http://assets.nydailynews.com/nydn/c/rh.css?r=2016LIST">
    <link rel="stylesheet" type="text/css" href="http://assets.nydailynews.com/nydn/c/ra.css?r=2016LIST">
	<link href="/css/style.css?v2" rel="stylesheet" />
	<link href="css/main.css?v2" rel="stylesheet" />
    <script>
    var nydn = nydn || {
        "section": "NYDailyNews",
		"subsection": "news",
        "template": "article",
        "revision": "201609014009",
        "targetPath": document.location.pathname,
		"bidder": { contains: function() {} },
    };
    </script>
    <script>
    var nydnDO = [
        { 
            'title':"xxxKeep 'Em Dump 'Em Archivesxxx", 
            'link':'http://interactive.nydailynews.com/poll/keep-em-dump-em/', 
            'p_type':'interactive', 
            'section':'interactive' }
    ];
    </script>
    
    <!-- ADS-START -->
    <script onload="nydn_ads('poll');" src="//interactive.nydailynews.com/includes/template/template.js"></script>
    <!-- ADS-END -->
    <script>var nav_params = {section: 'Polls', url: 'http://interactive.nydailynews.com/poll/'};</script>
    <script src="/library/vendor-nav/vendor-include.js" defer></script>
</head>
<body id="nydailynews" data-section="nydailynews" data-subsection="NY Daily News" class="">

<!-- SITEHEADER-START -->
<header id="templateheader"></header>
<!-- SITEHEADER-END -->

<main class="column">
<article>
    <h1>Keep 'Em Dump 'Em Archives</h1>
    <p class="description">A collection of the New York Daily News' Keep 'Em Dump 'Em polls.</p>
    
<?php
$prev_year = '';
foreach ( $csv->data as $key => $item ):
    if ( trim($item['year']) != trim($prev_year) ): 
        if ( $prev_year != '' ) echo '    </ul>';
        $prev_year = $item['year'];
?>
    <h2><?php echo $item['year']; ?> Keep 'Em Dump 'Em's</h2>
    <ul>
<?php endif;
    echo "      <li><a href='" . $item['url'] . "'>" . $item['title'] . "</a></li>\n";
endforeach;
?>
    </ul>

  <div class="center" style="margin-bottom: 18px">
    <span style="font-size:10px; color:#999;font-family:sans-serif;">ADVERTISEMENT</span>
    <div id='div-gpt-ad-1423507761396-1'>
              <script>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-1'); });
              </script>
    </div>
  </div>
</article>
</main>
    
<!-- FOOTER-START -->
<footer id="templatefooter"></footer>
<!-- FOOTER-END -->
<div id="ra-bp"></div> <section id="rao">  <div id="rao-close"></div> <div id="rao-wrap"></div> </section> 
<div id="r-scripts">
    <div id="parsely-root" style="display: none">
        <span id="parsely-cfg" data-parsely-site="nydailynews.com"></span>
    </div>
    <div class="r-ad">
        <div id="div-gpt-ad-x100">
        </div>
    </div>
</div>
</body>
</html>
