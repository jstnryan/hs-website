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

class newsTools {
	
	private $news_array = array();
	private $csv_url = '';
	
	function __construct($csvurl) {
       $this->csv_url = $csvurl;
	   $this->readCSV();
    }
	//function to clean strings of slashes is magic quotes is on.
	private function cleanEscaped($string){
		if(get_magic_quotes_gpc()){
			return stripslashes($string);
		}else{
			return $string;
		}
	}
	//returns array of news items
	public function getNewsArray($limit=''){
		if($limit!=''){
			return array_slice(array_reverse($this->news_array),0, $limit);
		}else{
			return array_reverse($this->news_array);
		}
	}
	//function to get news articles from csv file.
	public function readCSV(){
		$newsarray = array();
		$handle = fopen($this->csv_url, "r");
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			   $newsarray[$data[0]] = $data;
		}
		fclose($handle);
		$this->news_array = $newsarray;
	}
	//return single news article array
	public function getNewsArticle($id){
		return $this->news_array[$id];
	}
	//return true or false if news id in in news array
	public function doesNewsExist($id){
		return array_key_exists($id,$this->news_array);
	}
	//add new article to array and save to csv
	public function saveNewNewsArticle($news_date,$news_title,$news_body){
		$news_id = ($this->news_array) ? max(array_keys($this->news_array))+1 : 1;
		$this->news_array[$news_id] = array($news_id,$news_date,
											$this->cleanEscaped($news_title),
											$this->cleanEscaped($news_body));
		$this->saveToCSV();
	}
	//put updated article back into array and save to csv
	public function updateNewsArticle($news_id,$news_date,$news_title,$news_body){
		$this->news_array[$news_id] = array($news_id,$news_date,
											$this->cleanEscaped($news_title),
											$this->cleanEscaped($news_body));
		$this->saveToCSV();
	}
	//delete article from array and save csv
	public function deleteNewsArticle($news_id){
		unset($this->news_array[$news_id]);
		$this->saveToCSV();
	}
	//function to save back to the csv file
	public function saveToCSV(){
		$fp = fopen($this->csv_url, 'w');
		foreach ($this->news_array as $line) {
			fputcsv($fp,$line,$del=",",$enc="\"");
		}
		fclose($fp);
	}
}
?>