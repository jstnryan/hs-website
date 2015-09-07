<?php
	//get news class and array
	include_once('../includes/newsTools.class.inc.php');
	$newsTools 		= new newsTools('../csv/news.csv');
	//a limit of 4 headlines is passed to the function
	$news_headlines = $newsTools->getNewsArray(4);
	//character encoding is set to the same as the news articles. (see Content-Type line)
echo <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=$news_encoding" />
<title>My News Headlines</title>
</head>
<body>
<h1>My News Headlines</h1>
<p>
HTML;
	//output news array as formatted html
	if (!count($news_headlines)>0){
		echo 'There are currently no news headlines.';
	}else{
		foreach ($news_headlines as $key => $item){
			list($news_id,$news_date,$news_title,$news_body) = $item;
			$formatted_date = date('d.m.y',$news_date);
			echo $formatted_date.' - '.$news_title.'<br />';
		}
	}
?>
</p>
</body>
</html>