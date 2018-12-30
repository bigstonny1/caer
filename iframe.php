<?php
error_reporting(0);
include "curl_gd.php";
include "functions.php";

if(isset($_GET['dt'])){
	$data = base64url_decode($_GET['dt']);
	$data = json_decode($data,true);
	
	$url = $data['url'];
	$thumbnail = $data['thumbnail'];
	
	
	$linkdown = $url;
	if(isset($url) && strpos($url,"//drive.google.com/") !== FALSE){
		$linkdown = Drive($url);
		
		if($thumbnail == ''){
			$thumbnail = generateThumb($url);
		}
	}
	
}


$file = '[{"type": "video/mp4", "label": "HD", "file": "'.$linkdown.'"}]';

?>

<div id="player"></div>
<script type="text/javascript" src="http://jwpsrv.com/library/4+R8PsscEeO69iIACooLPQ.js"></script>
<script type="text/javascript">
	jwplayer.key = "gGpS+jTZmHT4xHlTSOhEsuk/Gt9I4gbAdqP1LQ54u8TX2EcxYlzoRA==";
	var playerInstance = jwplayer("player");
		playerInstance.setup({
			sources: <?=$file?>,
			image: "http://i.imgur.com/Xq0P6xp.jpg",
			autostart: false,
			controls: true,
			width: "100%",
			height: "100%",
			aspectratio: "16:9",
			abouttext: "Hydra Filmes HD",
			aboutlink: "www.hydrafilmeshd.com/",
			

			<?php
			if(isset($data['subtitle']) && !empty($data['subtitle'])){
				?>
				tracks: [{ 
					file: "<?=$data['subtitle']?>", 
					//label: "English",
					kind: "captions",
					"default": true 
				}],
				<?php
			}
			?>
			
			<?php
			if(isset($data['logo']) && !empty($data['logo'])){
				?>
				logo: {
					file: "<?=$data['logo']?>",
					position: 'top-left',
					margin: '10'
				},
				<?php
			}
			?>
    });
	 playerInstance.addButton("http://i.imgur.com/jxQLCSy.png", "A", function() {
        window.open(playerInstance.getPlaylistItem()['A'] + '');
    }, "A");
      playerInstance.addButton("http://i.imgur.com/4BmMcp6.png", "R", function() {
        window.open(playerInstance.getPlaylistItem()['R'] + '');
    }, "R");
      playerInstance.addButton("http://i.imgur.com/MX36IZz.png", "D", function() {
        window.open(playerInstance.getPlaylistItem()['D'] + '');
    }, "D");
      playerInstance.addButton("http://i.imgur.com/pXzXj9w.png", "Y", function() {
        window.open(playerInstance.getPlaylistItem()['Y'] + '');
    }, "Y");
      playerInstance.addButton("http://i.imgur.com/0qEn2J0.png", "H", function() {
        window.open(playerInstance.getPlaylistItem()['H'] + '');
    }, "H");
</script>
<style type="text/css">
body{padding: 0; margin: 0;background: #000}
.jwplayer.jw-flag-aspect-mode, .video-js {width:100% !important; height: 100% !important}
#player{text-align: center;color:#fff;}
</style>
<!--iklan pop up paste disini-->
<title>Gerador de Player</title>
