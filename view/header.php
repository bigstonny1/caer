<?php
    include "functions.php";
	if(isset($_POST['url'])){
		$thumbnail = '';
		if(isset($_POST['thumbnail']))
			$thumbnail = $_POST['thumbnail'];		
		
		$subtitle = '';
		if(isset($_POST['subtitle']))
			$subtitle = $_POST['subtitle'];		
		
		$logo = '';
		if(isset($_POST['logo']))
			$logo = $_POST['logo'];
		
		$data = array('url'=>$_POST['url'],'thumbnail'=>$thumbnail,'subtitle'=>$subtitle,'logo'=>$logo);
		$data = json_encode($data);
		$urlencode = base64url_encode($data);
		$currentURL = getCurrentRequestURL();
		
		if(strpos($currentURL,'index.php')!==FALSE)
			$currentURL = str_replace('index.php','iframe.php',$currentURL);
		else
			$currentURL = $currentURL.'iframe.php';
		
		$linkEncode = "$currentURL?dt=$urlencode";
		

	}
	
	
	
	
	
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Embed video Google Drive to JW Player hide link video, add Google Drive to JW Player with URL encryption, JW Player 7 Google Drive, JW Player 7 Wordpress Plugins"/>
<meta name="keywords" content="clickyoursite, jw player, google drive, embed, custom, plugins, dooplay, grifus, download.">
<meta name="google-site-verification" content="xxxxxxx"/>
<link rel="shortcut icon" href="https://i.imgur.com/QKK4Buk.png"/>
<title>Gerador de Player</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    #Back-to-top {
    text-align: center;
    z-index: 9999;
    position: fixed;
    bottom: 40px;
    right: 30px;
    cursor: pointer;
    display: none;
    opacity: 0.7; 
    }
#Back-to-top:hover {
    opacity: 1;
    }
</style>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Alternar de navegação</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
<b><a class="navbar-brand" href="/"><span style="color: #999999">Gerador de Player</span></b></a>
</div>


<div class="navbar-collapse collapse">
<ul class="nav navbar-nav side-nav">
<li>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
              <li><a rel="dofollow" href="/"><i class="fa fa-fw fa-file"></i>Sub</a></li>
              <li><a rel="dofollow" href="/"><i class="fa fa-fw fa-image"></i>Logo</a></li>
              <li><a rel="dofollow" href="/"><i class="fa fa-fw fa-image"></i>Poster</a></li>
              <li><a href="/"><i class="fa fa-fw fa-envelope"></i>Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
</ul>
</div>
</nav>
