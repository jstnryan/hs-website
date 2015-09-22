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

class pageMaker {
	
	//returns admin header title
	public function pageHeader($title){
		return '<h1>'.$title.'</h1>';
	}
	//returns admin sub header 
	public function pageSubHeader($title){
		return '<h2>'.$title.'</h2>';
	}
	
	//returns admin header message
	public function headerMessage($user_name){
		return <<<HTML
	<ul id="headerbox">
		<li><a href="index.php">List News</a></li>
		<li><a href="index.php?action=add">Add News</a></li>
		<li><a href="index.php?logout=true">Log out</a></li>
	</ul>
<hr />
HTML;
	}
	
	//returns a notification message
	public function notifyMessage($notifyMessage){
		return '<div class="inform">'.$notifyMessage.'</div>';
	}
	
	//returns an error message
	public function errorMessage($errorMessage){
		return '<div class="error">'.$errorMessage.'</div>';
	}
	
	//get html formatted news list for the admin panel
	public function getNewsHTML($news_array){
		
		if (!$news_array){
			$return_html = '<p>There are currently no news articles.</p>';
		}else{
			
			$return_html = <<<HTML
<table width="100%" border="0" id="newstable">
  <tr>
    <th width="60%">News Title</th>
 	<th width="20%">Date Posted</th>
    <th width="20%">Actions</th>
  </tr>
HTML;
			//show newest articles first
			foreach ($news_array as $key => $item){
				list($news_id,$news_date,$news_title,$news_body) = $item;
				$formatted_date = date('F j, Y, g:i a',$news_date);
$return_html .= <<<HTML
  <tr>
    <td><a href="index.php?action=update&amp;id=$news_id">$news_title</a></td>
    <td>$formatted_date</td>
    <td><a href="index.php?action=update&amp;id=$news_id">Edit</a> | 
	<a href="index.php?action=delete&amp;id=$news_id" 
	onclick="return confirm('Are you sure you want to delete this article?')">Delete</a></td>
  </tr>
HTML;
			}
			
			$return_html .= <<<HTML
</table>
HTML;
		}

		return $return_html;
	}
	
	//return login form
	public function loginForm($password=''){
		return <<<HTML
<p>Please enter your password.</p>
<form action="index.php" method="post" name="loginform">
<p><input name="password" id="password" type="password" size="30" value="$password" />&nbsp;
<input name="login" type="submit" value="Login" /></p>
</form>
HTML;
	}
	
	//return news form
	public function newsForm($news_array, $type){

		list($news_id,$news_date,$news_title,$news_body) = (is_array($news_array)) ? $news_array : array('','','','');
		$date_output = ($type=='update') ? '<p><label>First published:</label>'.date('F j, Y, g:i a',$news_date).'</p>' : '';
		$escaped_body = (!empty($news_body)) ? htmlspecialchars($news_body) : '';
		$tidy_action = ucfirst($type);

		return <<<HTML
<form action="index.php?action=$type" method="post" name="newsform">
<input name="type" type="hidden" value="$type" />
<input name="date" type="hidden" value="$news_date" />
<input name="id" type="hidden" value="$news_id" />
<p><label for="title">Title:</label><input name="title" id="title" type="text" size="80" value="$news_title" /></p>
$date_output
<p><textarea name="article" id="article" cols="50" rows="10" class="widgEditor nothing">$escaped_body</textarea></p>
<p><input name="action" type="submit" value="$tidy_action News" />&nbsp;<a href="index.php">Back to list</a></p>
</form>
HTML;
	}
	
	//return whole page html for output
	public function getHTML($page_content){
		return <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News Admin</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/widgEditor.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/widgEditor.js"></script>
</head>
<body>
$page_content
<div id="footer">SuperSimpleNews v1.0</div>
</body>
</html>
HTML;

	}

}


?>