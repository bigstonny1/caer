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
<script type="text/javascript" src="//content.jwplatform.com/libraries/hDZaZjnc.js"></script>
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
			abouttext: "CODENULL",
			aboutlink: "www.storecodenull.xyz",
			

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
</script>
<style type="text/css">
body{padding: 0; margin: 0;background: #000}
.jwplayer.jw-flag-aspect-mode, .video-js {width:100% !important; height: 100% !important}
#player{text-align: center;color:#fff;}
</style>
<!--iklan pop up paste disini-->
