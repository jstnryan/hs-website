<?php

// 	  SuperSimpleNews v1.0 is a simple flat-file news posting script.
//    Copyright (C) 2009  Matthew Lester
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.

$admin_password = '931282'; // admin password
$admin_salt	 	= 'Wb25o1BkVj'; //random text to strengthen password storage
$user_name 		= 'admin'; //your name (for news page and rss)
$page_title		= 'News Admin'; //title of admin.php
$website_url	= 'http://localhost/hs'; //your main website url (for rss feed link)
$news_url		= 'http://localhost/hs/news.php'; //location of you news page (for rss link)
$website_name	= 'Hyperspace'; //name of your website (for rss)
$website_desc	= 'The one, and only.'; //description of your website (for rss)
$news_encoding  = 'utf-8'; //this will reflect you character encoding for your server
$rss_lang		= 'en-gb'; //see http://www.rssboard.org/rss-language-codes for your language code.
$csv_location	= './csv/'; //for admin csv location
$csv_name		= 'news.csv'; //name of csv used by admin.php

?>