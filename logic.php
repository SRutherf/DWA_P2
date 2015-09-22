<?php 
	//variables
	$nArray = file('nouns.txt');
	$vArray = file('verbs.txt');
	$aArray = file('adj.txt');
	$wordCount = $_POST["wordCount"];
	$nums = $_POST["nums"];
	$chars = $_POST["chars"];
	$spaceTrans = $_POST["spaceTrans"];
	$caseTrans = $_POST["caseTrans"];
	$space;
	$case;
	$numArray = array('1', '2', "3", '4', '5', '6', '7', '8', '9', '0');
	$charArray = array('!','@','#','$','%','^','&','*','~');
	$password;
	
	//determine space character
	if ($spaceTrans == "dash"){
		$space = '-';
	}
	elseif ($spaceTrans == "under"){
		$space = '_';
	}
	elseif ($spaceTrans == "period"){
		$space = '.';
	}
	
	function cap($word){
		global $caseTrans;
		if ($caseTrans == "allLow"){
			return $word;
		}
		elseif ($caseTrans == "allUp"){
			return strtoupper($word);
		}
		elseif ($caseTrans == "first"){
			return ucfirst($word);
		}
	}
	
	function addEnd(){
		global $nums, $chars, $numArray, $charArray;
		if ($nums == "on" AND $chars == "on"){
			return $numArray[array_rand($numArray)].$charArray[array_rand($charArray)];
		}
		elseif ($nums == "on"){
			return $numArray[array_rand($numArray)];
		}
		elseif ($chars == "on"){
			return $charArray[array_rand($charArray)];
		}
	}
	
	function getWord(){
		global $nArray, $vArray, $aArray, $minWord, $maxWord;
		$case = rand(0, 2);
		switch($case){
			case 0:
				$temp = $nArray[rand(0, sizeOf($nArray))];
				break;
			case 1:
				$temp = $vArray[rand(0, sizeOf($vArray))];
				break;
			case 2:
				$temp = $aArray[rand(0, sizeOf($aArray))];
				break; 
		}
		return $temp;
	}
		
	//disregard bad inputs
	if ($wordCount > 9){
		$wordCount = 9;
	}
	if ($wordCount < 1){
		$wordCount = 1;
	}
	if (!is_numeric($wordCount)){
		$wordCount - 1;	
	}
	
	//generate words
	for ($x = 0; $x < $wordCount; $x++){
		if ($spaceTrans == "none"){
			$temp = getWord();
			$temp = cap($temp);
			$password = trim($password.$temp);
		}
		else{
			if ($x == 0){
				$temp = getWord();
				$temp = cap($temp);
				$password = trim($password.$temp);
			}
			else{
				$temp = getWord();
				$temp = cap($temp);
				$password = trim($password.$space.$temp);	
			}	
		}	
	}	
?>