<!DOCTYPE html>
<html>
<head>
  <title>SSCE Hyperspace</title>
  <meta name="description" content="The one and only SubSpace Continuum zone: SSCE Hyperspace." />
  <meta name="keywords" content="SSCE Hyperspace,Subspace Continuum,Subspace Continuum zone" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css' />
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css' />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="news"></a>
      <h1>news.txt</h1>

<?php
    //get news class and array
    include_once('news/includes/newsTools.class.inc.php');
    $newsTools      = new newsTools('news/csv/news.csv');
    $news_headlines = $newsTools->getNewsArray();
    //output news array as formatted html
    if (!count($news_headlines)>0){
        echo '<p>news.txt is missing! I blame kevinz.</p>';
    }else{
        foreach ($news_headlines as $key => $item){
            list($news_id,$news_date,$news_title,$news_body) = $item;
            //$formatted_date = date('F j, Y, g:i a',$news_date);
            $formatted_date = date('l, F j Y',$news_date);
echo <<<HTML
    <a name="$news_id" id="$news_id"></a>
    <h3 class="news-headline">$formatted_date <span class="news-author">$news_title</span></h3>
    $news_body
HTML;
        }
    }
?>

    </div>
  </div>
</body>
</html>