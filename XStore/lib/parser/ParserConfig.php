<?php 
//require "../conf/BEConfig.local.inc.php";

define ('T_ID', 	0); 	//Thread ID
define ('T_TITLE', 	1);	//Thread title
define ('T_VOTES', 	2);	//Thread votes
define ('T_SCORE', 	3);	//Thread score
define ('T_REPLIES', 	4);	//Thread replies
define ('T_VIEWS', 	5);	//Thread views
define ('T_POST_FIRST', 6);	//Thread first post  time
define ('T_POST_LAST', 	7);	//Thread last post time
define ('TZ_PRICE', 	8);	//Thread item price
define ('T_URL', 	9); 	//Thread URL
define ('TZ_DISCOUNT', 	10);	//Thread Discount
define ('TZ_IMG', 11);		//Thread image

/******************************************************************************************************************
 * JSON related configs
 * @var unknown_type
 */
$ITEM_KEYS = array(T_ID=>"guid", T_TITLE=>"title", T_VOTES=>"votes", T_SCORE=>"hotness", T_REPLIES=>"replies"
					, T_VIEWS=>"views", T_POST_FIRST=>"pubdate", T_POST_LAST=>"last_update",TZ_PRICE=>"price"
					, T_URL=>"link", TZ_DISCOUNT=>"discount", TZ_IMG=>"imagelink");
					//FIXME need to change T_SCORE hotness to score
/****************************************************************************************************************/
					

//----------------------------------------------------------------------------------------------------------------
//$DEAL_FEEDS=;
$FEED_NAMES 	= array("FWBest"	//Fat Wallet Best Deals
					, "Frys"		//Fry's Weekly Ads
					, "SDBest"		//SlickDeals Front Page Deal
					, "TravelZooAll"
					, "TravelZooTop20"
					//--------Start of the slickdeal feeds----------
					, "Tech");
$FEED_RSS_URL	= array("FWBest"=>"http://www.fatwallet.com/rss_bestdeals.php"
					, "Frys"=>"http://www.netaffilia.com/rssfeed.xml"
					, "SDBest"=>"http://feeds.feedburner.com/SlickdealsnetFP"
					, "TravelZooAll"=>"http://www.travelzoo.com/rss/all/"
					, "TravelZooTop20"=>"http://www.travelzoo.com/rss/top20/"
					);
$FEED_HTML_URL  = array("FWBest"=>"http://www.fatwallet.com/best-deals/"
					, "Frys"=>"http://www.frys-electronics-ads.com/"
					, "SDBest"=>"http://slickdeals.net"
					, "TravelZooAll"=>""
					, "TravelZooTop20"=>"http://www.travelzoo.com/top20/"
					);

//----------------------------------------------------------------------------------------------------------------/

$SD_DEAL_MIN_SCORE	=3;
$SD_URL_PREFIX		="http://slickdeals.net/forums/";
$SD_MOB_URL_PREFIX	="http://m.slickdeals.net/forums/";
$DEAL_MAX_DATE		=7;
$SD_DEAL_CATEGORY_NUMBER=24;
//Deal number

/* Not in use
$DEAL_CATEGORY_NAME[0]="All";
$DEAL_CATEGORY_NUM["All"]=0;
$DEAL_CATEGORY_TTL["All"]=2;
$DEAL_CATEGORY_PAGES["All"]=1;
$DEAL_CATEGORY_URLS["ALL"]="forumdisplay.php?f=9";
*/


$DEAL_CATEGORY_NAME[1]="Apparel";
$DEAL_CATEGORY_LABEL["Apparel"]="Clothes/Fashion";
$DEAL_CATEGORY_ORDER["Apparel"]=2;
$DEAL_CATEGORY_NUM["Apparel"]=1;
//Deal Refresh frequency in minutes, meaning, if the feed was updated 5 mins ago, then it is stale
$DEAL_CATEGORY_TTL["Apparel"]=5;
//PAGES from slickdeal to crawl
$DEAL_CATEGORY_PAGES["Apparel"]=array(3,1);
$DEAL_CATEGORY_URLS["Apparel"]=array("forumdisplay.php?sduid=0&f=9&icon=19&sort=threadstarted&order=desc"
								   ,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=30&tagid=285&f=30");

$DEAL_CATEGORY_NAME[2]="Audio";
$DEAL_CATEGORY_LABEL["Audio"]="Electronics>Audio Gears";
$DEAL_CATEGORY_ORDER["Audio"]=2;
$DEAL_CATEGORY_NUM["Audio"]=2;
$DEAL_CATEGORY_TTL["Audio"]=5;
$DEAL_CATEGORY_PAGES["Audio"]=array(3,1);
$DEAL_CATEGORY_URLS["Audio"]=array("forumdisplay.php?sduid=0&f=9&icon=20&sort=threadstarted&order=desc"
								,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=289&f=30");

$DEAL_CATEGORY_NAME[3]="Auto";
$DEAL_CATEGORY_LABEL["Auto"]="Hardware>Car";
$DEAL_CATEGORY_ORDER["Auto"]=2;
$DEAL_CATEGORY_NUM["Auto"]=array(3,1);
$DEAL_CATEGORY_TTL["Auto"]=5;
$DEAL_CATEGORY_PAGES["Auto"]=array(3);
$DEAL_CATEGORY_URLS["Auto"]=array("forumdisplay.php?sduid=0&f=9&icon=21&sort=threadstarted&order=desc");


$DEAL_CATEGORY_NAME[4]="Beauty";
$DEAL_CATEGORY_LABEL["Beauty"]="Beauty Supply";
$DEAL_CATEGORY_ORDER["Beauty"]=2;
$DEAL_CATEGORY_NUM["Beauty"]=4;
$DEAL_CATEGORY_TTL["Beauty"]=5;
$DEAL_CATEGORY_PAGES["Beauty"]=array(3,1);
$DEAL_CATEGORY_URLS["Beauty"]=array ("forumdisplay.php?sduid=0&f=9&icon=52&sort=threadstarted&order=desc"
								   ,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=462&f=30");

$DEAL_CATEGORY_NAME[5]="Drives";
$DEAL_CATEGORY_LABEL["Drives"]="Computer>Drives";
$DEAL_CATEGORY_ORDER["Drives"]=2;
$DEAL_CATEGORY_NUM["Drives"]=5;
$DEAL_CATEGORY_TTL["Drives"]=5;
$DEAL_CATEGORY_PAGES["Drives"]=array(3,1);
$DEAL_CATEGORY_URLS["Drives"]=array("forumdisplay.php?sduid=0&f=9&icon=41&sort=threadstarted&order=desc"
								  ,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=300&f=30");

$DEAL_CATEGORY_NAME[6]="Dvd";
$DEAL_CATEGORY_LABEL["Dvd"]="Electronics>Dvd/Bluray";
$DEAL_CATEGORY_ORDER["Dvd"]=2;
$DEAL_CATEGORY_NUM["Dvd"]=6;
$DEAL_CATEGORY_TTL["Dvd"]=5;
$DEAL_CATEGORY_PAGES["Dvd"]=array(3,1);
$DEAL_CATEGORY_URLS["Dvd"]=array("forumdisplay.php?sduid=0&f=9&icon=42&sort=threadstarted&order=desc"
								,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=11&f=30");
								
$DEAL_CATEGORY_NAME[7]="Food";
$DEAL_CATEGORY_LABEL["Food"]="Home>Food";
$DEAL_CATEGORY_ORDER["Food"]=2;
$DEAL_CATEGORY_NUM["Food"]=7;
$DEAL_CATEGORY_TTL["Food"]=5;
$DEAL_CATEGORY_PAGES["Food"]=array(3,1);
$DEAL_CATEGORY_URLS["Food"]=array("forumdisplay.php?sduid=0&f=9&icon=34&sort=threadstarted&order=desc"
								,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=305&f=30");

$DEAL_CATEGORY_NAME[8]="Games";
$DEAL_CATEGORY_LABEL["Games"]="Electronics>Games";
$DEAL_CATEGORY_ORDER["Games"]=2;
$DEAL_CATEGORY_NUM["Games"]=8;
$DEAL_CATEGORY_TTL["Games"]=5;
$DEAL_CATEGORY_PAGES["Games"]=array(3,1);
$DEAL_CATEGORY_URLS["Games"]=array("forumdisplay.php?sduid=0&f=9&icon=33&sort=threadstarted&order=desc"
								, "forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=309&f=30");

$DEAL_CATEGORY_NAME[9]="Home";
$DEAL_CATEGORY_LABEL["Home"]="Home & Garden";
$DEAL_CATEGORY_ORDER["Home"]=2;
$DEAL_CATEGORY_NUM["Home"]=9;
$DEAL_CATEGORY_TTL["Home"]=5;
$DEAL_CATEGORY_PAGES["Home"]=array(3,1);
$DEAL_CATEGORY_URLS["Home"]=array("forumdisplay.php?sduid=0&f=9&icon=22&sort=threadstarted&order=desc"
								,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=286&f=30");

$DEAL_CATEGORY_NAME[10]="Kids";
$DEAL_CATEGORY_LABEL["Kids"]="Home>Kids";
$DEAL_CATEGORY_ORDER["Kids"]=2;
$DEAL_CATEGORY_NUM["Kids"]=10;
$DEAL_CATEGORY_TTL["Kids"]=5;
$DEAL_CATEGORY_PAGES["Kids"]=array(3,1);
$DEAL_CATEGORY_URLS["Kids"]=array("forumdisplay.php?sduid=0&f=9&icon=32&sort=threadstarted&order=desc"
								,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=322&f=30");

$DEAL_CATEGORY_NAME[11]="Media";
$DEAL_CATEGORY_LABEL["Media"]="Electronics>Media";
$DEAL_CATEGORY_ORDER["Media"]=2;
$DEAL_CATEGORY_NUM["Media"]=11;
$DEAL_CATEGORY_TTL["Media"]=5;
$DEAL_CATEGORY_PAGES["Media"]=array(3);
$DEAL_CATEGORY_URLS["Media"]=array("forumdisplay.php?sduid=0&f=9&icon=24&sort=threadstarted&order=desc");

$DEAL_CATEGORY_NAME[12]="Money";
$DEAL_CATEGORY_LABEL["Money"]="Money/Finance";
$DEAL_CATEGORY_ORDER["Money"]=2;
$DEAL_CATEGORY_NUM["Money"]=12;
$DEAL_CATEGORY_TTL["Money"]=5;
$DEAL_CATEGORY_PAGES["Money"]=array(3);
$DEAL_CATEGORY_URLS["Money"]=array("forumdisplay.php?sduid=0&f=9&icon=25&sort=threadstarted&order=desc");

$DEAL_CATEGORY_NAME[13]="Office";
$DEAL_CATEGORY_LABEL["Office"]="Computer/Office>Supply";
$DEAL_CATEGORY_ORDER["Office"]=2;
$DEAL_CATEGORY_NUM["Office"]=13;
$DEAL_CATEGORY_TTL["Office"]=5;
$DEAL_CATEGORY_PAGES["Office"]=array(3,1);
$DEAL_CATEGORY_URLS["Office"]=array("forumdisplay.php?sduid=0&f=9&icon=31&sort=threadstarted&order=desc"
								, "forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=292&f=30");

$DEAL_CATEGORY_NAME[14]="Phone";
$DEAL_CATEGORY_LABEL["Phone"]="Electronics>Phone";
$DEAL_CATEGORY_ORDER["Phone"]=2;
$DEAL_CATEGORY_NUM["Phone"]=14;
$DEAL_CATEGORY_TTL["Phone"]=5;
$DEAL_CATEGORY_PAGES["Phone"]=array(3);
$DEAL_CATEGORY_URLS["Phone"]=array("forumdisplay.php?sduid=0&f=9&icon=26&sort=threadstarted&order=desc");


$DEAL_CATEGORY_NAME[15]="Photo";
$DEAL_CATEGORY_LABEL["Photo"]="Electronics>Camera/Photo";
$DEAL_CATEGORY_ORDER["Photo"]=2;
$DEAL_CATEGORY_NUM["Photo"]=15;
$DEAL_CATEGORY_TTL["Photo"]=5;
$DEAL_CATEGORY_PAGES["Photo"]=array(3);
$DEAL_CATEGORY_URLS["Photo"]=array("forumdisplay.php?sduid=0&f=9&icon=38&sort=threadstarted&order=desc");

$DEAL_CATEGORY_NAME[16]="Printer";
$DEAL_CATEGORY_LABEL["Printer"]="Electronics>Printer";
$DEAL_CATEGORY_ORDER["Printer"]=2;
$DEAL_CATEGORY_NUM["Printer"]=16;
$DEAL_CATEGORY_TTL["Printer"]=5;
$DEAL_CATEGORY_PAGES["Printer"]=array(3);
$DEAL_CATEGORY_URLS["Printer"]=array("forumdisplay.php?sduid=0&f=9&icon=44&sort=threadstarted&order=desc");

$DEAL_CATEGORY_NAME[17]="Sport";
$DEAL_CATEGORY_LABEL["Sport"]="Sports Stuff";
$DEAL_CATEGORY_ORDER["Sport"]=2;
$DEAL_CATEGORY_NUM["Sport"]=17;
$DEAL_CATEGORY_TTL["Sport"]=5;
$DEAL_CATEGORY_PAGES["Sport"]=array(3,1);
$DEAL_CATEGORY_URLS["Sport"]=array("forumdisplay.php?sduid=0&f=9&icon=29&sort=threadstarted&order=desc"
								, "forumdisplay.php?&sort=threadstarted&order=desc&daysprune=30&tagid=338&f=30");

$DEAL_CATEGORY_NAME[18]="System";
$DEAL_CATEGORY_LABEL["System"]="Computer>Systems";
$DEAL_CATEGORY_ORDER["System"]=2;
$DEAL_CATEGORY_NUM["System"]=18;
$DEAL_CATEGORY_TTL["System"]=5;
$DEAL_CATEGORY_PAGES["System"]=array(3,1);
$DEAL_CATEGORY_URLS["System"]=array("forumdisplay.php?sduid=0&f=9&icon=23&sort=threadstarted&order=desc"
								  ,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=7&tagid=3&f=30");

$DEAL_CATEGORY_NAME[19]="Tech";
$DEAL_CATEGORY_LABEL["Tech"]="Electronics-Audio Gears";
$DEAL_CATEGORY_ORDER["Tech"]=2;
$DEAL_CATEGORY_NUM["Tech"]=19;
$DEAL_CATEGORY_TTL["Tech"]=5;
$DEAL_CATEGORY_PAGES["Tech"]=array(3,1);
$DEAL_CATEGORY_URLS["Tech"]=array("forumdisplay.php?sduid=0&f=9&icon=27&sort=threadstarted&order=desc"
								,"forumdisplay.php?&sort=threadstarted&order=desc&daysprune=30&tagid=40&f=30");

$DEAL_CATEGORY_NAME[20]="Tools";
$DEAL_CATEGORY_LABEL["Tools"]="Hardware>Tools";
$DEAL_CATEGORY_ORDER["Toolsl"]=2;
$DEAL_CATEGORY_NUM["Tools"]=20;
$DEAL_CATEGORY_TTL["Tools"]=5;
$DEAL_CATEGORY_PAGES["Tools"]=array(3);
$DEAL_CATEGORY_URLS["Tools"]=array("forumdisplay.php?sduid=0&f=9&icon=49&sort=threadstarted&order=desc");

$DEAL_CATEGORY_NAME[21]="Travel";
$DEAL_CATEGORY_LABEL["Travel"]="Travel Deals";
$DEAL_CATEGORY_ORDER["Travel"]=2;
$DEAL_CATEGORY_NUM["Travel"]=21;
$DEAL_CATEGORY_TTL["Travel"]=5;
$DEAL_CATEGORY_PAGES["Travel"]=array(3);
$DEAL_CATEGORY_URLS["Travel"]=array("forumdisplay.php?sduid=0&f=9&icon=48&sort=threadstarted&order=desc");

$DEAL_CATEGORY_NAME[22]="Video";
$DEAL_CATEGORY_LABEL["Video"]="Electronics>DVD/Bluray";
$DEAL_CATEGORY_ORDER["Video"]=2;
$DEAL_CATEGORY_NUM["Video"]=22;
$DEAL_CATEGORY_TTL["Video"]=5;
$DEAL_CATEGORY_PAGES["Video"]=array(3,1);
$DEAL_CATEGORY_URLS["Video"]=array("forumdisplay.php?sduid=0&f=9&icon=28&sort=threadstarted&order=desc"
								, "forumdisplay.php?&sort=threadstarted&order=desc&daysprune=30&tagid=333&f=30");

$DEAL_CATEGORY_NAME[23]="Other";
$DEAL_CATEGORY_LABEL["Other"]="Misc Deals";
$DEAL_CATEGORY_ORDER["Other"]=2;
$DEAL_CATEGORY_NUM["Other"]=23;
$DEAL_CATEGORY_TTL["Other"]=5;
$DEAL_CATEGORY_PAGES["Other"]=array(3,1);
$DEAL_CATEGORY_URLS["Other"]=array("forumdisplay.php?sduid=0&f=9&icon=30&sort=threadstarted&order=desc"
								, "forumdisplay.php?&sort=threadstarted&order=desc&daysprune=30&tagid=283&f=30");


$DEAL_CATEGORY_NAME[24]="BF2010";
$DEAL_CATEGORY_LABEL["BF2010"]="2010 Cyber Monday";
$DEAL_CATEGORY_ORDER["BF2010"]=2;
$DEAL_CATEGORY_NUM["BF2010"]=24;
$DEAL_CATEGORY_TTL["BF2010"]=2;
$DEAL_CATEGORY_PAGES["BF2010"]=array(3);
$DEAL_CATEGORY_URLS["BF2010"]=array("forumdisplay.php?sduid=0&f=41&daysprune=7&order=desc&sort=threadstarted");

?>
