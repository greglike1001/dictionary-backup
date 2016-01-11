<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">

                <meta name="viewport" content="width=device-width, initial-scale=1.0">


                <title>Online Kurdish to English Dictionary</title>

                <link rel="shortcut icon" href="images/favicon.png" />


                <!-- Google Web Fonts-->
                <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

                <!-- Style Sheet-->
                <link rel="stylesheet" href="style.css"/>
                <link rel='stylesheet' id='bootstrap-css-css'  href='css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='responsive-css-css'  href='css/responsive5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='pretty-photo-css-css'  href='js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
                <link rel='stylesheet' id='main-css-css'  href='css/main5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='custom-css-css'  href='css/custom5152.css?ver=1.0' type='text/css' media='all' />
                <link rel="stylesheet" href="css/jquery-ui.min.css" />
                <link rel="stylesheet" href="css/jquery-ui.structure.min.css" />
                <link rel="stylesheet" href="css/jquery-ui.theme.min.css" />

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
                <![endif]-->
                <script type="text/javascript" src="new/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="new/js/jquery.validate-1.9.js"></script>    
<script type="text/javascript" src="new/js/jquery.watermark.min.js"></script> 
<script type="text/javascript" src="new/js/autocomplete.js"></script>
<link rel="stylesheet" href="new-style.css"> 

<script type="text/javascript" src="new/js/get_definition.js"></script> 
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>



        </head>

        <body>

                <!-- Start of Header -->
                <div class="header-wrapper">
                        <header>
                                <div class="container">


                                        <div class="logo-container">
                                                <!-- Website Logo -->
                                                <a href="index.html"  title="Knowledge Base Theme">
                                                        <img src="images/logo.png" alt="Knowledge Base Theme">
                                                </a>
                                                <span class="tag-line">Kurdish-English Dictionary</span>
                                        </div>


                                        <!-- Start of Main Navigation -->
                                        <nav class="main-nav">
                                                <div class="menu-top-menu-container">
                                                        <ul id="menu-top-menu" class="clearfix">
                                                                <li class="current-menu-item"><a href="index.html">Home</a></li>
                                                                <li><a href="faq.html">How does <i>Ku2En.com</i> work?</a></li>
                                                                <li><a href="#">Add a definition</a></li>
                                                                <li><a href="home-categories-description.html">Kurdish Grammar</a>
                                                                <ul class="sub-menu">
                                                                				<li><a href="indefinite.html">The Indefinite Case</a></li>
                                                                				<li><a href="definite.html">The Definite Case</a></li>
                                                                				<li><a href="demonstratives.html">Demonstratives</a></li>
                                                                				<li><a href="izafa.html">Adjective Izafa</a></li>
                                                                				<li><a href="izafap.html">Possessive Izafa</a></li>
                                                                				<li><a href="izafac.html">Closed Izafa</a></li>
                                                                </ul>
                                                                </li>
                                                                <li><a href="home-categories-articles.html">Kurdish Phrases</a>
                                                        		 <ul class="sub-menu">
                                                                                <li><a href="greetings.html">Greetings</a></li>
                                                                                <li><a href="travel.html">Travel</a></li>
                                                                                <li><a href="eating.html">Eating</a></li>
                                                                                <li><a href="time.html">Time and Directions</a></li>
                                                                        </ul>
                                                                        </li>                      
                                                                <li><a href="contact.html">Contact</a></li>
                                                        </ul>
                                                </div>
                                        </nav>
                                        <!-- End of Main Navigation -->

                                </div>
                        </header>
                </div>

                <!-- End of Header -->

                <!-- Start of Search Wrapper -->
                <div class="search-area-wrapper">
                        <div class="search-area container">
                                <h3 class="search-header">Need a definition?</h3>
                                <p class="search-tag-line">Type the Kurdish or English word using latin letters</p>
<!--
                                <form id="search_form" class="search-form clearfix" method="post" action="javascript:void(0)" autocomplete="off">
                                        <input class="search-term required" type="text" id="english" name="english" placeholder="Eg: Type in bale or yes" title="* Please enter a search term!" />
                                        <input class="search-btn" type="submit" value="Search" />
                                        <div id="search-error-container"></div>
                                </form>
-->
<div style="width:100%">
    

<form name="search_form" id="search_form" method="post" style="width:80%; margin:auto" class="center">
               
                <div class="input_container" >
                    <input  class="" onkeyup="autocomplet()"  autocomplete="off" type="text" id="english" name="english" placeholder="Eg: Type in bale or yes" title="* Please enter a search term!" >
                    <ul id="word_list"></ul>  
                    
                </div>
                <div class="submit_con">
                    <input class="w3-input"  onclick="hide_wlist();"  type="submit" name="submit" id="search"  value="Search">  
                </div>
                
    
            </form>

    
    </div>

                        </div>
                </div>

                <!-- End of Search Wrapper -->


                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->

      <div class="span8 page-content" >

 <div id="remark" style="text-align:center;"></div>  
 
 <!-- <iframe src="http://ku2en.com/new/"      frameborder="0" onload="resizeIframe(this)" class="new-fame"></iframe>  -->
<iframe src="http://ku2en.com/new/"  frameborder="0" class="new-fame" id="iframe_form" name="select_frame"></iframe> 
        
<!--

                                                <div id="tblResults" class="row separator">
        
                                                    <section class="span8 articles-list">
                                                        <div class="container">
                                                            <div class="table">
                                                                <table class="table table-hover text-left" >
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <!-- Basic Home Page Template -->
                                                <div class="row separator" >
                                                        <section class="span4 articles-list">
                                                                <h3>Introductory Kurdish Grammar</h3>
                                                                <ul class="articles">
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="indefinite.html">Indefinite Case</a></h4>
                                                                                <span class="article-meta">20 Nov, 2015 in <a href="#" title="View all posts in Server &amp; Database">Grammar</a></span>
                                                                                <span class="like-count">66</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="definite.html">Definite Case</a></h4>
                                                                                <span class="article-meta">20 Nov, 2015 in <a href="#" title="View all posts in Website Dev">Grammar</a></span>
                                                                                <span class="like-count">15</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="demonstratives.html">Demonstratives</a></h4>
                                                                                <span class="article-meta">21 Nov, 2015 in <a href="#" title="View all posts in Website Dev">Grammar</a></span>
                                                                                <span class="like-count">8</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="izafa.html">Adjective Izafa</a></h4>
                                                                                <span class="article-meta">21 Nov, 2015 in <a href="#" title="View all posts in Advanced Techniques">Grammar</a></span>
                                                                                <span class="like-count">6</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="izafap.html">Possession Izafa</a></h4>
                                                                                <span class="article-meta">22 Nov, 2015 in <a href="#" title="View all posts in Website Dev">Grammar</a></span>
                                                                                <span class="like-count">2</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="izafac.html">Closed Izafa</a></h4>
                                                                                <span class="article-meta">22 Nov, 2015 in <a href="#" title="View all posts in Website Dev">Grammar</a></span>
                                                                                <span class="like-count">3</span>
                                                                        </li>
                                                                </ul>
                                                        </section>


                                                        <section class="span4 articles-list">
                                                                <h3>Important Phrases</h3>
                                                                <ul class="articles">
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="greetings.html">Greetings</a></h4>
                                                                                <span class="article-meta">20 Nov, 2015 in <a href="#" title="View all posts in Server &amp; Database">Phrases</a></span>
                                                                                <span class="like-count">66</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="travel.html">Travel</a></h4>
                                                                                <span class="article-meta">20 Nov, 2015 in <a href="#" title="View all posts in Advanced Techniques">Phrases</a></span>
                                                                                <span class="like-count">18</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="eating.html">Eating</a></h4>
                                                                                <span class="article-meta">21 Nov, 2015 in <a href="#" title="View all posts in Designing in WordPress">Phrases</a></span>
                                                                                <span class="like-count">7</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="time.html">Time and Directions</a></h4>
                                                                                <span class="article-meta">22 Nov, 2015 in <a href="#" title="View all posts in WordPress Plugins">Phrases</a></span>
                                                                                <span class="like-count">7</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="meeting.html">Meeting someone for the first time</a></h4>
                                                                                <span class="article-meta">23 Nov, 2015 in <a href="#" title="View all posts in Website Dev">Phrases</a></span>
                                                                                <span class="like-count">15</span>
                                                                        </li>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="help.html">Requesting help</a></h4>
                                                                                <span class="article-meta">24 Nov, 2015 in <a href="#" title="View all posts in Theme Development">Phrases</a></span>
                                                                                <span class="like-count">1</span>
                                                                        </li>
                                                                </ul>
                                                        </section>
                                                </div>
                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                <aside class="span4 page-sidebar" >

                                                <section class="widget">
                                                        <div id="randomWord" class="support-widget">
                                                        <center><h3>Random Word</h3></center><hr>
				
<?php
include("db_config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CONCAT( fname,  ' ', lname ) AS username, dt.definition, wt.kurdish_en, location
FROM definition_tbl dt, word_tbl wt, user_tbl u
WHERE wt.word_id = dt.word_id
ORDER BY RAND( ) 
LIMIT 0 , 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
//        echo  $row["definition"]. " -  " . $row["kurdish_en"]. "<br>";
        echo   '<h3 >'. $row["kurdish_en"].'</h3>';
        echo   '<p >'. $row["definition"].'</p>';
        echo    '<hr><p> Submitted by:<b> ' . $row["username"] . '</b>';
        echo    ',<b> ' . $row["location"] . '</b>';
    }
} else {
    echo "0 results";
}
?>
														
                                                                <!--- h3 class="title"></h3>
                                                                <p class="intro"></p -->
                                                        </div>
                                                        <div id="lastWord" class="support-widget">
                                                        <center><h3>Newest Entry</h3></center><hr>
 
<?php

$sql = "SELECT * 
FROM definition_tbl dt, word_tbl wt, user_tbl u
WHERE wt.word_id = dt.word_id
ORDER BY wt.word_id desc 
LIMIT 0 , 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
//  <h3 id="lastWordH1" class="title"></h3><p id="lastWordP1" class="intro"></p>
                                                                
     echo    '<h3 id="lastWordH1" class="title">'.mb_strtolower($row["kurdish_en"], 'UTF-8').'</h3>';
     echo    '<h3 id="lastWordH1" class="title">'.mb_strtolower($row["kurdish_ku"], 'UTF-8').'</h3>';
     
        echo   '<p id="lastWordP1" class="intro">'.mb_strtolower($row["definition"], 'UTF-8').'</p>';
        echo    '<hr><p> Submitted by:<b> ' . $row["username"] . '</b>';
        echo    ',<b> ' . $row["location"] . '</b>';
    }
} else {
    echo "0 results";
}
$conn->close();

?>
 
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <div class="quick-links-widget">
                                                                <h3 class="title">Quick Links</h3>
                                                                <ul id="menu-quick-links" class="menu clearfix">
                                                                        <li><a href="index.html">Home</a></li>
                                                                        <li><a href="articles-list.html">Articles List</a></li>
                                                                        <li><a href="faq.html">FAQs</a></li>
                                                                        <li><a href="contact.html">Contact</a></li>
                                                                </ul>
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <h3 class="title">Tags</h3>
                                                        <div class="tagcloud">
                                                                <a href="#" class="btn btn-mini">Kurdish</a>
                                                                <a href="#" class="btn btn-mini">Kurdi</a>
                                                                <a href="#" class="btn btn-mini">English</a>
                                                                <a href="#" class="btn btn-mini">learn</a>
                                                                <a href="#" class="btn btn-mini">study</a>
                                                                <a href="#" class="btn btn-mini">vocabulary</a>
                                                                <a href="#" class="btn btn-mini">grammar</a>
                                                                <a href="#" class="btn btn-mini">dars</a>
                                                                <a href="#" class="btn btn-mini">khwendin</a>
                                                                <a href="#" class="btn btn-mini">dictionary</a>
                                                                <a href="#" class="btn btn-mini">wishadan</a>
                                                                <a href="#" class="btn btn-mini">greetings</a>
                                                                <a href="#" class="btn btn-mini">travel</a>
                                                                <a href="#" class="btn btn-mini">eating</a>
                                                                <a href="#" class="btn btn-mini">slaw</a>
                                                                <a href="#" class="btn btn-mini">safarkirdin</a>
                                                                
                                                        </div>
                                                </section>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

                <!-- Start of Footer -->
                <footer id="footer-wrapper">
                        <div id="footer" class="container">
                                <div class="row">

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">Credits</h3>
                                                        <div class="textwidget">
                                                                <p>Owned and maintained by Greg McLellan of the Australian National University. </p>
                                                                <p>Thank you to my friends who have assisted in the maintenance and accuracy of this website. If you have noticed any errors or wish to contribute, please contact us.</p>
                                                       			<p>bakhtyke bash to all Kurdish learners</p>
                                                        </div>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget"><h3 class="title">Our Friends</h3>
                                                        <ul>
                                                            <div class="textwidget">
                                                            <p><a href="http://Ar2En.com">Ar2En - Arabic to English Dictionary</p>
                                                            <p><a href="http://Ku2En.com">Ku2En - Kurdish to English Dictionary</p> 
                                                            <p><a href="http://StandWithKobani.com">StandWithKobani - Kurdish-Syrian Charity</p> 
                                                            <p><a href="http://ANUAmes.com">ANU Ames - ANU Arabic and Middle Eastern Society</p>     
                                                                
                                                        </ul>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">Latest Tweets</h3>
                                                        <div id="twitter_update_list">
                                                                <ul>
                                                                        <li>                
                                                                            <a class="twitter-timeline" href="https://twitter.com/GMcl93" data-widget-id="673899306680606720"  height="300">Tweets by @GMcl93</a>
                                                                            <script>
                                                                                !function(d,s,id)
                                                                                {var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                                                                            </script>
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                        <script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" type="text/javascript"></script>
                                                        <script type="text/javascript" >
                                                                getTwitters("twitter_update_list", {
                                                                        id: "GMcl93",
                                                                        count: 3,
                                                                        enableLinks: true,
                                                                        ignoreReplies: true,
                                                                        clearContents: true,
                                                                        template: "%text% <span>%time%</span>"
                                                                });
                                                        </script>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">Nusar</h3>
                                                        <div class="textwidget">
                                                        <p>Amadakrawa la layan Greg Mclellan la zankoy newdawlaty Australia.</p>
                                                        <p>Zor supas bo aw hawreyanai ka yarmaty mnyan dawa bo am kara, harkas xwazyara w ayawet yarmatyman bdat, tkaya paywandim pywa bkan.</p>
                                                        <p>baxtyke bash bo hamu ferxwazani zmani inglis.</p>
                                                        
                                                        
                                                        </div>
                                                </section>
                                        </div>

                                </div>
                        </div>
                        <!-- end of #footer -->

                        <!-- Footer Bottom -->
                        <div id="footer-bottom-wrapper">
                                <div id="footer-bottom" class="container">
                                        <div class="row">
                                                <div class="span6">
                                                        <p class="copyright">
                                                                Copyright © 2015. All Rights Reserved by Kurdish Online Dictionary.
                                                        </p>
                                                </div>
                                                <div class="span6">
                                                        <!-- Social Navigation -->
                                                        <ul class="social-nav clearfix">
                                                                <li class="linkedin"><a target="_blank" href="#"></a></li>
                                                                <li class="stumble"><a target="_blank" href="#"></a></li>
                                                                <li class="google"><a target="_blank" href="#"></a></li>
                                                                <li class="deviantart"><a target="_blank" href="#"></a></li>
                                                                <li class="flickr"><a target="_blank" href="#"></a></li>
                                                                <li class="skype"><a target="_blank" href="skype:#?call"></a></li>
                                                                <li class="rss"><a target="_blank" href="#"></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"></a></li>
                                                                <li class="facebook"><a target="_blank" href="#"></a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- End of Footer Bottom -->

                </footer>
                <!-- End of Footer -->
                
                <a href="#top" id="scroll-top"></a>

                <!-- script -->
                <script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
                <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
                <script type='text/javascript' src='js/prettyphoto/jquery.prettyPhoto.js'></script>
                <script type='text/javascript' src='js/jflickrfeed.js'></script>
                <script type='text/javascript' src='js/jquery.liveSearch.js'></script>
                <script type='text/javascript' src='js/jquery.form.js'></script>
                <script type='text/javascript' src='js/jquery.validate.min.js'></script>
                <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                <script type="text/javascript" src="js/jquery-ui.autocomplete.html.js"></script>
                <script type='text/javascript' src='js/custom.js'></script>
        </body>
</html>

<script type="text/javascript" >
function autocomplet() {
        data = '';
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#english').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'new/db/get_word.php',
			type: 'GET',
			data: {keyword:keyword},
			success:function(data){
				$('#word_list').show();
				$('#word_list').html(data);
			}
		});
	} else {
		$('#word_list').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#english').val(item);
	// hide proposition list
	$('#word_list').hide();
}

function hide_wlist(){
    $('#word_list').hide();
}

</script>