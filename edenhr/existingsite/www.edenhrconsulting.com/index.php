
<!DOCTYPE html>
<html xml:lang="en-gb" lang="en-gb" >
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="joomla, Joomla" />
  <meta name="description" content="Joomla! - the dynamic portal engine and content management system" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>Eden HR</title>
  <link href="index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />

<!-- Loads Master CSS -->
	<link rel="stylesheet" href="http://www.edenhrconsulting.com/templates/deepblue/css/master.css" type="text/css" media="screen, projection" />
	
<!-- Loads additional CSS file to edit/customize or overwrite the base/default classes-->	
	<link rel="stylesheet" href="http://www.edenhrconsulting.com/templates/deepblue/css/custom_css.css" type="text/css" media="screen, projection" />

	
<!--[if IE 7]>
<link rel="stylesheet" href="/templates/deepblue/css/ie7.css" type="text/css" media="screen, projection">
<style type="text/css">
div.moduletable_news{margin-left:0px;}
.moduletable_newsletter{margin-left:0px;}
.moduletable_inthenews{margin-left:0px;}
</style>
<![endif]-->
<!-- Add custom colors from the template setup-->
<style type="text/css">
</style>

<!--Opacity for IE Browsers-->

<!--[if IE]>
<script type="text/javascript" src="/templates/deepblue/js/DD_roundies_0.0.2a.js"></script>
<style type="text/css">
.subheader {
filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=90, FinishOpacity=90, Style=0);
"progid:DXImageTransform.Microsoft.Alpha(Opacity=90, FinishOpacity=90, Style=0)";
}
</style>
<script>
  DD_roundies.addRule('div.moduletable_news,.moduletable_newsletter,.moduletable_inthenews', '10px',true);
</script>
 <![endif]-->

<!--Loads FavIcon-->
<link rel="shortcut icon" href="http://www.edenhrconsulting.com/images/favicon.ico" />  
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20221570-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="wrapper">
<!-- ****************** Top Area with Logo, topmenu etc.****************** -->
	<div class="top">
		<div class="container">
		 
				<div class="logo_image">
				<a href="index.html"><img src="http://www.edenhrconsulting.com/templates/deepblue/images/logo.png" alt="Eden HR"  /></a>
			</div>
							<div class="topmenu">
					<ul class="menu"><li id="current" class="active item1"><a href="index.html"><span>Home</span></a></li><li class="item2"><a href="index.php?option=com_content&amp;view=article&amp;id=2&amp;Itemid=2"><span>Testimonials</span></a></li><li class="item3"><a href="index.php?option=com_content&amp;view=article&amp;id=3&amp;Itemid=3"><span>Our Services</span></a></li><li class="item4"><a href="index.php?option=com_content&amp;view=article&amp;id=4&amp;Itemid=4"><span>News</span></a></li><li class="item5"><a href="index.php?option=com_content&amp;view=article&amp;id=13&amp;Itemid=5"><span>Links</span></a></li><li class="item6"><a href="index.php?option=com_content&amp;view=article&amp;id=12&amp;Itemid=6"><span>Contact Us</span></a></li></ul>				
			</div>
								<div class="search">
					<form action="index.php" method="post">
	<div class="search">
		<input name="searchword" id="mod_search_searchword" maxlength="20" alt="GO" class="inputbox" type="text" size="20" value="Search"  onblur="if(this.value=='') this.value='Search';" onfocus="if(this.value=='Search') this.value='';" /><input type="submit" value="GO" class="button" onclick="this.form.searchword.focus();"/>	</div>
	<input type="hidden" name="task"   value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value=1 />
</form>				
			</div>
					<hr />
		</div>
	</div>
	
<!-- ****************** Header Area with Header image, top modules etc. ****************** -->
	<div class="header">
		<div class="container">
																<div class="moduletable">
					<script src="http://www.edenhrconsulting.com/modules/mod_slidemenu/js/prototype.js" type="text/javascript"></script>
  <script src="http://www.edenhrconsulting.com/modules/mod_slidemenu/js/effects.js" type="text/javascript"></script>
  <script language="javascript">
  var sliding = 0;
var slideTime = '';

// Set is sliding value
function setSliding(a_ISliding){
	sliding = a_ISliding;
}

// Get is sliding value
function getSliding(){
	return sliding;
}

// Carry out accordian styled effect
function accordion(evt) {
	el = Event.element(evt);
	var eldown = getNextSibling(el);
	
	//  If element is visible do nothing
	if ($('visible') == el) {
			return;
	}
	if ($('visible')) {
	
			if( getSliding() == 1 ){
					return false;
			}
		
			var elup = getNextSibling($('visible'));
			
			

			setSliding( 1 );
			
			parellelSlide( elup, eldown );
			$('visible').id = '';

			
			var backImage
			//backImage = eldown.id + '.jpg';
			//alert(eldown.id);
			var ss = eldown.id
			var result = ss.substring(5,6);
			backImage = 'slidemenu'+ result + '.jpg';
			//alert(backImage);
			
			document.getElementById("accordion").style.background = 'url(http://www.edenhrconsulting.com/images/'+backImage+')';
	}
	else{
			setSliding( 1 );
			singleSlide( eldown );
	}
	
	el.id = 'visible';
}


// Setup accordian initial state
function init() {
		
		var bodyPanels = document.getElementsByClassName('panel_body');
		var panels = document.getElementsByClassName('panel');
		var noPanels = panels.length;
		var percentageWidth = 100 / noPanels;
		var position = 0;
		//  Loop through body panels and panels applying required styles and adding event listeners
    for (i = 0; i < bodyPanels.length; i++) {
			bodyPanels[i].hide();
			panels[i].style.width = percentageWidth + '%';
			panels[i].style.position = 'absolute';
			panels[i].style.left = position + '%';
			
			Event.observe(panels[i].getElementsByTagName('h3')[0], 'mouseover', accordion, false);
			Event.observe(panels[i].getElementsByTagName('h3')[0], 'mousemove', accordion, false);
			Event.observe(document.body, 'mousemove', resetIdle, false);
			
			position += percentageWidth;
    }
		
		if( $('visible') ){
		//  Set panel with id of visible to be initial displayed
		
			var vis = $('visible').parentNode.id+'-body';
			$(vis).show();
			
			
		}
		setIdle();
		//alert(eldown);
}

// Next sibling method to work around firefox issues
function getNextSibling(startBrother){
	var endBrother=startBrother.nextSibling;
  while(endBrother.nodeType!=1){
	  		

    endBrother = endBrother.nextSibling;
	
  }
  return endBrother;
}

function parellelSlide( elup, eldown ){
		new Effect.Parallel(
		[
				new Effect.SlideUp(elup),
				new Effect.SlideDown(eldown)
		], {
				duration: 0.3,
				afterFinish: function() { setSliding( 0 );}
		});
}

function singleSlide( eldown ){
	
		new Effect.Parallel(
		[
				new Effect.SlideDown(eldown)
		], {
				duration: 0.3,
				afterFinish: function() { setSliding( 0 );}
		});
}

function resetTabs(){
	
	var resetEl = getNextSibling( $('visible') );
	
	setSliding( 1 );
	
	new Effect.Parallel(
	[
			new Effect.SlideUp( resetEl )
	], {
			duration: 0.3,
			afterFinish: function() { setSliding( 0 );}
	});
	
	$('visible').id = '';
}

function resetIdle(){
		if( $('visible') ){
				window.clearTimeout( slideTime );
				slideTime = window.setTimeout( "resetTabs()", 10000 );
		}
}

function setIdle(){
	if( $('visible') ){
		slideTime = window.setTimeout( "resetTabs()", 10000 );
	}
}

Event.observe(window, 'load', init, false);
</script>
	<style>
	
	#accordion {
			border: 0px solid #1F669B;
			width: 887px;
			height: 300px;
			font-family: verdana, Arial, Helvetica, sans-serif;
			font-size: 13px;
			position:relative !important;
			display:block;
			overflow:hidden;
			background-image:url(http://www.edenhrconsulting.com/images/slidemenu1.jpg);
			background-repeat:no-repeat;
			background-position:top left;
	}
	
	h3 {
			font-size: 17px;
			padding: 10px 6px 8px 18px;
			margin: 0;
			color:#f68e1e !important;
			
			cursor:pointer;
			display:block;
			/*background-image:url(images/tab-left.gif);*/
			background-position:top left;
			background-repeat:no-repeat;
			font-family: Arial, Helvetica, sans-serif;
	}
	
	h3 span {
	color:#FF7DCE;
	}
	
	#visible {
			/*background-image:url(images/tab-left-active.gif);*/
			
	}
	
	.panel_body {
	height:260px;
	
	display:block;
	position:relative;
	color:#FFFFFF;
				
	}
	
	.panel_body ul{
			
			margin:0px;
			width:100
			
	}
	
	.panel_body ul li{
			line-height:1.5em;
			list-style-type:none;
			}
			
			.panel_body ul li a{
			color:#fff;
			text-decoration:none;
			}
			
			.panel_body ul li a:hover{
			color:#8cc74d;
			}
	
	.panel_body div {
			padding:3px 18px;
	}
	
	.panel{
		bottom:0px;
		margin:0px;
		padding:0px;
		background-image:url(http://www.edenhrconsulting.com/modules/mod_slidemenu/images/navigation_tab.png);
		/*background-position:top right;
		background-repeat:repeat-x;*/
		background-repeat:no-repeat;
		
		
	}
	
	</style>
        
<div id="accordion"> 
  <div class="panel" id="panel1">
    <h3>About Us</h3>
    <div id="panel1-body" class="panel_body"> 
      <div>
      <ul>
							<li><a href="index.php?option=com_content&amp;view=article&amp;id=1">Welcome</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=17&amp;Itemid=166">About Us</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=18&amp;Itemid=167">How we deliver our services</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=19&amp;Itemid=168">Our People</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=2&amp;Itemid=176">What our clients think about us</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=27&amp;Itemid=177">Our clients</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=13&amp;Itemid=179">Links</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=12&amp;Itemid=178">Where we are and what area we cover</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=12&amp;Itemid=180">Contact us</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=105">Published Articles</a></li>
					 </ul>
     </div>
    </div>
  </div>
  
  <div class="panel" id="panel2"> 
    <h3>Our Services</h3>
    <div id="panel2-body" class="panel_body"> 
      <div><ul>
				<li><a href="index.php?option=com_content&amp;view=article&amp;id=3&amp;Itemid=109">Our Services</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=28&amp;Itemid=110">Free Initial Consultation</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=7&amp;Itemid=111">Rules and Regulations</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=33&amp;Itemid=108">Learning & Development (Training)</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=40&amp;Itemid=125">Pay and Benefits</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=43&amp;Itemid=128">People and Policies</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=50&amp;Itemid=135">Recruit and Streamline</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=64&amp;Itemid=149">Health and Safety</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=68&amp;Itemid=154">Occupational Health</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=74&amp;Itemid=159">Employee Assistance Programme</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=75&amp;Itemid=160">Human Resources Software</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=76&amp;Itemid=161">Emergencies</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=30&amp;Itemid=115">Employment Law Advice</a></li>
					  </ul></div>
    </div>
  </div>
  
  <div class="panel" id="panel3"> 
    <h3>Case Studies</h3>
    <div id="panel3-body" class="panel_body"> 
      <div> 
	  <ul>
	  				<li><a href="index.php?option=com_content&amp;view=article&amp;id=85&amp;Itemid=190">Under-Performance Dismissal</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=86&amp;Itemid=191">Restructure and Redundancies</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=87&amp;Itemid=192">Compromise Agreement</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=88&amp;Itemid=193">Learning and Development</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=89&amp;Itemid=194">Investors in People</a></li>
								<li><a href="index.php?option=com_content&amp;view=article&amp;id=12&amp;Itemid=195">Contact Us</a></li>
					  </ul>
	  </div>
    </div>
  </div>
  
</div>

<script>init();</script>

		</div>
	
												</div>
	</div>
	
<!-- ****************** Main Area with all main content ****************** -->
	<div class="main">
		<div class="container">
					<div class="block1 border">
				
			</div>
			<hr />
		 
		
		<!--Four 25% Blocks-->
		 
		
		 
		
				
				
				
		<!--Three 33% Blocks-->
				
				
					
					
		<!--Two 50% Blocks-->
					<div class="block2">
						<div class="moduletable_breadcrumbs">
					<span class="breadcrumbs pathway">
Home</span>
		</div>
	
			</div>
			
			
			
		 
			<hr />
					
		<!--One 100% Block-->
					<div class="block1">
						<div class="moduletable">
					

	
		<script type='text/javascript'>
		<!--
		universalFontSize = 12;
		maxSize = 18;
		minSize = 6;
		//-->
		</script><script type="text/javascript" src="http://www.edenhrconsulting.com/modules/mod_fhw_fontadjust/js/mod_fhw-fontadjust-px.js"></script>







	<div class="">
		
        
        <div id="fontSize" style="width: 100%; text-align: right;">
			
                       
			<span class="">
                
					<a href="index.php" title="Increase Font Size" onclick="changeFontSize(1); return false;" class="larger">
						<img src="http://www.edenhrconsulting.com/modules/mod_fhw_fontadjust/images/larger6.png" width="30" height="25" border="0" alt="Increase Font Size" />
					</a>
								</span>
            <span class="">
                
					<a href="index.php" title="Reset Font Size" onclick="revertStyles(); return false;" class="reset">
						<img src="http://www.edenhrconsulting.com/modules/mod_fhw_fontadjust/images/default6.png" width="30" height="25" border="0" alt="Reset Font Size" />
					</a>
								</span>
            <span class="">
                
					<a href="index.php" title="Decrease Font Size" onclick="changeFontSize(-1); return false;" class="smaller">
						<img src="http://www.edenhrconsulting.com/modules/mod_fhw_fontadjust/images/smaller6.png" width="30" height="25" border="0" alt="Decrease Font Size" />
					</a>
								</span>
            
		</div>
         
	</div>



		</div>
	
			</div>
			<hr />
				<!-- Main component-->
			
		<!--Left Block-->
					<div class="															block34 center_block border
													">
			
							<table class="blog" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top">
					<div>
		
<table class="contentpaneopen">
<tr>
		<td class="contentheading" width="80%">
					Welcome			</td>
	
		<td align="right" width="5%" class="buttonheading">
	<a href="index.php?view=article&amp;catid=1:content&amp;id=1:welcome-to-eden-hr&amp;format=pdf" title="PDF" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow">PDF&nbsp;</a>	</td>
	
		<td align="right" width="5%" class="buttonheading">
	<a href="index.php?view=article&amp;catid=1:content&amp;id=1:welcome-to-eden-hr&amp;tmpl=component&amp;print=1&amp;layout=default&amp;page=" title="Print" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow">|&nbsp;Print&nbsp;|</a>	</td>
	
		<td align="right" width="10%" class="buttonheading">
	<a href="index.php?option=com_mailto&amp;tmpl=component&amp;link=aHR0cDovL3d3dy5lZGVuaHJjb25zdWx0aW5nLmNvbS9pbmRleC5waHA%252Fb3B0aW9uPWNvbV9jb250ZW50JnZpZXc9YXJ0aWNsZSZpZD0xOndlbGNvbWUtdG8tZWRlbi1ociZjYXRpZD0xOmNvbnRlbnQmSXRlbWlkPTI2Mg==" title="E-mail" onclick="window.open(this.href,'win2','width=400,height=350,menubar=yes,resizable=yes'); return false;">&nbsp;E-mail</a>	</td>
		</tr>
</table>
<table class="contentpaneopen">




<tr>
<td valign="top" colspan="2">
<p><img src="http://www.edenhrconsulting.com/images/stories/eden-stick-figures/eden-home.jpg" alt="eden-home" style="float: right;" height="300" width="194" />We provide independent, expert HR advice and support to a range of businesses and have developed a reputation for being an experienced and trusted partner to our clients. <br /> <br /> Our skilled team brings a wealth of corporate knowledge to small and medium-sized businesses, and you can be sure we will always have your organisation’s best interests at heart. <br /> <br /> As well as being professional and knowledgeable, our staff members are passionate about their work and take great pride in helping you get results and achieve your objectives.<br /> <br /> The services we offer are wide-ranging. Whether it’s providing you with in-house resources or consulting you on how to avoid serious legal issues, you will get individual, tailored solutions. <br /> <br /> Find our more <a href="index.php?option=com_content&amp;view=article&amp;id=17&amp;Itemid=166">about us</a> or get in <a href="index.php?option=com_content&amp;view=article&amp;id=12:contact-us&amp;catid=7&amp;Itemid=6">touch</a>.<br /> <br /></p>
<p><strong><span style="text-decoration: underline;">Company Information:</span></strong></p>
<p>Company Registration Number : 05398879</p>
<p>VAT Number: 862552613</p>
<p>Office Address: Milnwood, 13 North Parade, Horsham, West Sussex, RH12 2BT</p>
<p>Registered Address: 5 Porchester Close, Southwater, Horsham, West Sussex, RH13 9XR.</p>
<p> </p></td>
</tr>



</table>
<span class="article_separator">&nbsp;</span>
		</div>
		</td>
</tr>


</table>

						</div>
		
		
		
			
		<!--Right Block-->
					<div class="block4 right_block lastblock">
 						<div class="moduletable_news">
					<h3>Latest News & Events</h3>
					<ul class="latestnews_news">
	<li class="latestnews_news">
		<a href="index.php?option=com_content&amp;view=article&amp;id=102:notes-on-the-bribery-act-2010&amp;catid=19:news-articles" class="latestnews_news">
			Notes on the Bribery Act 2010</a>
	</li>
	<li class="latestnews_news">
		<a href="index.php?option=com_content&amp;view=article&amp;id=78:default-rretirment-age-to-be-scrapped&amp;catid=19:news-articles" class="latestnews_news">
			Default Retirment age to be scrapped</a>
	</li>
	<li class="latestnews_news">
		<a href="index.php?option=com_content&amp;view=article&amp;id=77:new-fathers-could-take-10-months-off-under-shared-leave-plan-&amp;catid=19:news-articles" class="latestnews_news">
			New fathers could take 10 months off under shared leave plan </a>
	</li>
</ul>		</div>
			<div class="moduletable_newsletter">
					<h3>Sign up to our Newsletter!</h3>
					<p>Get the latest News &amp; Events, <strong class="Orange"><a class="Orange" href="index.php?option=com_content&amp;view=article&amp;id=84&amp;Itemid=102">click here</a></strong></p>		</div>
			<div class="moduletable_inthenews">
					<h3>In The News!</h3>
					<p>Ask Eve, HR Q&amp;A  <a target="_self" title="In The News! Ask Eve, HR Questions &amp; Answers" href="index.php?option=com_content&amp;view=article&amp;id=93&amp;Itemid=216">click here</a></p>		</div>
			<div class="moduletable_news">
					<div style="direction: ltr; text-align: left ! important">
	<table cellpadding="0" cellspacing="0" class="moduletable_news">
			<tr>
			<td>
				<strong>
					<a href="http://www.bbc.co.uk/news/#sa-ns_mchannel=rss&ampamp;ns_source=PublicRSS20-sa" target="_blank">
						BBC News - Home</a>
				</strong>
			</td>
		</tr>
				<tr>
			<td><img src="http://news.bbcimg.co.uk/nol/shared/img/bbc_news_120x60.gif" alt="BBC News - Home"/></td>
		</tr>
		<tr>
		<td>
			<ul class="newsfeed_news"  >
							<li>
									<a href="http://www.bbc.co.uk/news/business-20501990#sa-ns_mchannel=rss&amp;ns_source=PublicRSS20-sa" target="_blank">
					Carney named as new Bank governor</a>
									<div style="text-align: left ! important" class="newsfeed_item_news"  >
						 Mark Carney is named as the new governor of the...					</div>
									</li>
								<li>
									<a href="http://www.bbc.co.uk/news/uk-20490999#sa-ns_mchannel=rss&amp;ns_source=PublicRSS20-sa" target="_blank">
					Travel hit as storms head north</a>
									<div style="text-align: left ! important" class="newsfeed_item_news"  >
						 Heavy rain and flooding are causing disruption to parts of...					</div>
									</li>
							</ul>
		</td>
		</tr>
	</table>
</div>
		</div>
	
			</div>
				<hr />
			
		<!--One 100% Block-->
					
		<!--Two 50% Blocks-->
			
			
			
		
		<!--Three 33% Blocks-->
				
				
				
					
		<!--Four 25% Blocks-->
		 
		
		 
		
				
				
		
		</div>
		<div id="ja-pathway">

</div>
	</div>
	
<!-- Footer Area with footer content, credits etc. -->
	<div class="footer">
		<div class="container">
		
		<!--Five 20% Blocks-->
					
		
			
		
					<div class="block5">
						<div class="moduletable_footer">
					<table style="width: 940px;" border="0">
<tbody style="text-align: left;">
<tr style="text-align: left;">
<td style="text-align: left; height: 55px; padding-left: 10px;">Archive News | <a href="index.php?option=com_xmap&amp;sitemap=1&amp;Itemid=98">Sitemap</a> | <a target="_self" href="index.php?option=com_content&amp;view=article&amp;id=83:terms-and-conditions&amp;catid=7">Terms &amp; Conditions</a></td>
<td style="text-align: center;"><a href="http://www.edenhrconsulting.com/blog/"><img style="margin-right: 10px;" alt="icon_blog" src="http://www.edenhrconsulting.com/images/stories/icon_blog.png" height="38" width="39" /></a><a target="_blank" href="http://www.linkedin.com/in/eveclennell"><img alt="icon_linkdin" src="http://www.edenhrconsulting.com/images/stories/icon_linkdin.png" height="37" width="37" /></a><a target="_blank" href="http://www.facebook.com/home.php#!/pages/Eden-HR-Consulting/139948316037232"><img style="padding-left: 11px;" alt="edenhr-face-book-icon" src="http://www.edenhrconsulting.com/images/stories/eden-icons/edenhr-face-book-icon.png" height="37" width="37" /></a></td>
<td style="text-align: right;">Tel: 01403 734455  Email: <a href="mailto:info@edenhrconsulting.com?subject=Website Enquiry">info@edenhrconsulting.com</a></td>
</tr>
</tbody>
</table>		</div>
	
			</div>
			
		
				
				
		 
			<hr />
				

			
		</div>
	</div>
	<!--One 100% Block-->
        
            

        
                <!--One 100% Block-->
            <div class="block1 centered">
                		<div class="moduletable_credits">
					<table style="width: 930px;" align="center" border="0">
<tbody style="text-align: left;">
<tr style="text-align: left;">
<td style="text-align: left;">© 2010 Eden HR Consulting</td>
<td style="text-align: right;">Site designed by <a target="_blank" href="http://hh-design.co.uk">HH Design</a></td>
</tr>
</tbody>
</table>		</div>
	
            </div>
           
        </div>

			
</body>
</html>