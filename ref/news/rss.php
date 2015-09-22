<?php
	header("Content-type: text/xml");
	//get headlines and config
	include_once('includes/config.inc.php');
	include_once('includes/newsTools.class.inc.php');
	$newsTools 		= new newsTools('csv/news.csv');
	$news_headlines = $newsTools->getNewsArray();
echo <<<XML
<?xml version="1.0" encoding="$news_encoding" ?> 
  <rss version="2.0"> 
	  <channel> 
	     <title>$website_name</title> 
	     <link>$website_url</link> 
	     <description>$website_desc</description> 
	     <language>$rss_lang</language> 
XML;
	//output news array as formatted xml
	foreach ($news_headlines as $key => $item){
		list($news_id,$news_date,$news_title,$news_body) = $item;
		$formatted_date = date(DATE_RSS,$news_date);
echo <<<XML
<item>
  	<title>$news_title</title>
	<pubDate>$formatted_date</pubDate>
	<link>$news_url#$news_id</link> 
    <description><![CDATA[ $news_body ]]></description> 
</item>
XML;
	}
?>
</channel> 
</rss>