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

session_start();

$logged_in=false;

include_once('includes/pageMaker.class.inc.php');
include_once('includes/config.inc.php');

$pageMaker = new pageMaker();
$page_content = $pageMaker->pageHeader($page_title);

//if logout requested do so.
if(isset($_GET['logout'])==true){
	unset($_SESSION['password']);
	$page_content .= $pageMaker->notifyMessage('You have successfully logged out, login again below.');
}
//if user is not logged in show login form.
$session_password = (!empty($_SESSION['password'])) ? $_SESSION['password'] : '';
if($session_password!=md5(md5($admin_password).$admin_salt)){
	//check if user has tried to login
	if(isset($_POST['password'])){
		if (trim($_POST['password'])==$admin_password){
			$logged_in=true;
			$_SESSION['password'] = md5(md5($admin_password).$admin_salt);
		}else{
			$page_content .= $pageMaker->errorMessage('Password was incorrect.');
			$page_content .= $pageMaker->pageSubHeader('Login Required');
			$page_content .= $pageMaker->loginForm($_POST['password']);
		}
	}else{
		$page_content .= $pageMaker->pageSubHeader('Login Required');
		$page_content .= $pageMaker->loginForm();
	}
}else{
	$logged_in=true;
}
//if logged in show data
if($logged_in){
	//initiate news Tools Class
	include_once('includes/newsTools.class.inc.php');
	$newsTools = new newsTools($csv_location.$csv_name);
	//get header message
	$page_content 		.= $pageMaker->headerMessage($user_name);
	$form_action 		= (!empty($_GET['action'])) ? $_GET['action'] : '';
	$form_action_type 	= (!empty($_POST['type'])) ? $_POST['type'] : '';
	//show add form if requested.
	if($form_action=='add'){
		if ($form_action_type=='add'){
			//handle new posting
			if(!empty($_POST['title'])&&!empty($_POST['article'])){
				$newsTools->saveNewNewsArticle(time(), $_POST['title'], $_POST['article']);
				$page_content .= $pageMaker->notifyMessage('The News Article was saved.');
				$page_content .= $pageMaker->getNewsHTML($newsTools->getNewsArray());
			}else{
				$page_content .= $pageMaker->pageSubHeader('Add News');
				$page_content .= $pageMaker->errorMessage('You did not complete all required fields.');							 
				$page_content .= $pageMaker->newsForm(array('','',$_POST['title'],$_POST['article']),'add');
			}
		}else{
			//display add form 
			$page_content .= $pageMaker->pageSubHeader('Add News');
			$page_content .= $pageMaker->newsForm('','add');
		}
	}elseif ($form_action=='update'){
		if ($form_action_type=='update'){
			if(!empty($_POST['title'])&&!empty($_POST['article'])){
				$newsTools->updateNewsArticle($_POST['id'],$_POST['date'],$_POST['title'],$_POST['article']);
				$page_content .= $pageMaker->notifyMessage('The news article was updated.');
				$page_content .= $pageMaker->getNewsHTML($newsTools->getNewsArray());
			}else{
				$page_content .= $pageMaker->pageSubHeader('Update News');
				$page_content .= $pageMaker->errorMessage('You did not complete all required fields.');							 
				$page_content .= $pageMaker->newsForm(array($_POST['id'],$_POST['date'],$_POST['title'],$_POST['article']),'update');	
			}
		}else{
			//show update form
			if($newsTools->doesNewsExist($_GET['id'])){
				$page_content .= $pageMaker->pageSubHeader('Update News');
				$page_content .= $pageMaker->newsForm($newsTools->getNewsArticle($_GET['id']),'update');
				
			}else{
				$page_content .= $pageMaker->errorMessage('Cannot update, article does not exist or was not defined.');
				$page_content .= $pageMaker->getNewsHTML($newsTools->getNewsArray());
			}
		}
	}elseif ($form_action=='delete'){
		if (is_numeric($_GET['id'])&&$newsTools->doesNewsExist($_GET['id'])){
			$newsTools->deleteNewsArticle($_GET['id']);
			$page_content .= $pageMaker->notifyMessage('The news article was deleted.');
			$page_content .= $pageMaker->getNewsHTML($newsTools->getNewsArray());
		}else{
			$page_content .= $pageMaker->errorMessage('Cannot delete, article does not exist or was not defined.');
			$page_content .= $pageMaker->getNewsHTML($newsTools->getNewsArray());
		}
	//else show all posts.
	}else{
		//get list of news articles.
		$page_content .= $pageMaker->getNewsHTML($newsTools->getNewsArray());
	}
	
}//end if logged in

//output html
echo $pageMaker->getHTML($page_content);
?>