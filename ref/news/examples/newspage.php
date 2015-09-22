<?php
	//get news class and array
	include_once('../includes/newsTools.class.inc.php');
	$newsTools 		= new newsTools('../csv/news.csv');
	$news_headlines = $newsTools->getNewsArray();
	//character encoding is set to the same as the news articles. (see Content-Type line)
echo <<< HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=$news_encoding" />
<title>Example News Page</title>
</head>
<body>
<h1>My News Page</h1>
HTML;
	//output news array as formatted html
	if (!count($news_headlines)>0){
		echo '<p>There are currently no news headlines.</p>';
	}else{
		foreach ($news_headlines as $key => $item){
			list($news_id,$news_date,$news_title,$news_body) = $item;
			$formatted_date = date('F j, Y, g:i a',$news_date);
echo <<<HTML
  	<a name="$news_id" id="$news_id"></a>
	<h3>$news_title</h3>
    $news_body
	<p><em>Posted: $formatted_date</em></p>
	<hr />
HTML;
		}
	}
?>
</body>
</html>