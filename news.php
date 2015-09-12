<?php
$pagetitle = 'news.txt';
include __DIR__.'/inc/head.inc';
?>
</head>
<body id="news">
<?php include __DIR__.'/inc/menu.inc'; ?>
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
<?php include __DIR__.'/inc/foot.inc'; ?>