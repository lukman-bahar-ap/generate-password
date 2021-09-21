<?php

$countOfChar = $_POST['countOfChar'];
$countOfList = $_POST['countOfList'];

function randStrGen($len){
	$result = "";
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$charArray = str_split($chars);
	for($i=0; $i < $len; $i++){
		$randamItem = array_rand($charArray);
		$result .= "".$charArray[$randamItem];
	}
	return $result;
}

if($_GET['act']=='gen'){
    $listView = '<br><br>RESULT :<div class="result_gen">';
    for($i=0; $i < $countOfList; $i++){
        $listView .= randStrGen($countOfChar);
        $listView .= "<br>";
    }
    $listView .= '</div>';
}else{
    $countOfChar = '5';
    $countOfList = '1';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Password</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Generate Password" />
    <meta name="keywords" content="Generate Password" />
    <meta name="msapplication-TileColor" content="#118329">
    <meta name="theme-color" content="#118329" />

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Full Screen">

    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Generate Password</h1>
    <form class="container_form" method="post" action="?act=gen" novalidate enctype="multipart/form-data">
        <div class="form-group">
            Character count (Jumlah karakter unik):
        </div>  
        <div class="form-group">
            <input type="text" id="countOfChar" name="countOfChar" 
            aria-label="Count of Char" placeholder="Count of Char"
            required="true" value="<?=$countOfChar?>">
        </div>

        <div class="form-group">
            List Count (Jumlah password yang diinginkan):
            </div> 
        <div class="form-group">
            <input type="text" id="countOfList" name="countOfList" 
            aria-label="count Of List" placeholder="count Of List"
            required="true" value="<?=$countOfList?>">
        </div>

        <div class="form-group">
            <button class="submit__button" type="submit" 
            aria-label="Generate Charracters">
                Generate
            </button>

        </div>
        <div class="form__footer">
            <p>Made with love © 2021</p>
        </div>
    </form>
    <?=$listView?>
</body>
</html>