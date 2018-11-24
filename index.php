<?php include_once('view/header.php'); ?>
<div>
    
	<div class="container">
	    <center><img src="https://i.imgur.com/mTkIrnr.png"/></center>
		<div class="row">
			<div class="col-md-12">
				<center><h2><b><a href="/"><span style="color: #3498db">Gerador de Player mp4, GDrive, m3u8 e Outros</span></b></h2></center>
				</div>
			</div>
			<br>
			<!--PUBLICIDADE ABAIXO de 728 x 90, cole-o abaixo-->
			
			<br>
			<div class="row">
<div class="col-lg-12">
    <div class="alert alert-dismissible alert-danger animated fadeInDown" id="download2" style="display; margin-bottom: 0px; text-transform: uppercase;">
<center><a href="/" class="btn btn-success" style="line-height: 10px; margin-top: -5px;">Use e Compartilhe Com Os Amigos</a></div></center>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-12">
<div class="jumbotron">
<form action method="POST">
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-film"></i></span>
<input class="form-control input-lg" type="text" name="url" placeholder="Link Video Here" value="" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-navicon"></i></span>
<input class="form-control input-lg" type="text" name="subtitle" placeholder="Link Subtittle Here" value="" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-image"></i></span>
<input class="form-control input-lg" type="text" name="thumbnail" placeholder="Link Poster Here" value="" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-file-image-o"></i></span>
<input class="form-control input-lg" type="text" name="logo" placeholder="Link Logo Here" value="" style="width:100%" />
</div>
</div>

<!--PUBLICIDADE NO BOTÃO GERAR, 3 BANDEIRAS 300x250-->

<table border='0' cellpadding='0' cellspacing='30' color='#ffffff' width='300' style='margin: 5px 5px 0 0'></table>
<center>
<tr>
<td align='right' style='background-color: #ffffff; padding: 5px;' width='300'>
<!--Banner 1 paste dibawah ini-->

</td>

<td align='center' style='background-color: #ffffff; padding: 5px;' width='300'>
<!--Banner 2 paste di bawah ini-->

</td>

<td align='left' style='background-color: #fffff; padding: 5px;' width='300'>
<!--Banner 3 paste di bawah ini-->

</td>
</tr>
</center>
</table>

<br>
					
					<div class="form-group" align="center">
						<button type="submit" class="btn btn-info"><span class="fa fa-retweet"></span>GERAR</button>
					</div>
				</form>
			</div>
			</div>
</div>
			
			<?php
			if(isset($linkEncode)){
				?>
				
				<div class="col-md-12">
					<div>
						<span class="label label-primary">
							Incorporar código do jogador
						</span>
						<br/>
						<textarea id="embed" onclick="this.select();" class="form-control" rows="4"><iframe style="border:0px #FFFFFF none;" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="400" width="100%" src="<?=$linkEncode?>" allowfullscreen></iframe>
</textarea>
<button class="btn btn-primary" data-clipboard-target="#embed"><span class="fa fa-files-o"></span> Copiar texto</button>
	</div>
	    </div>
				<div class="col-md-12">
					<div>
						<span class="label label-primary">
							Código de Link Jwplayer
						</span>
						<br/>
						<textarea id="link" onclick="this.select();" class="form-control" rows="4"><?=$linkEncode?></textarea>
						<button class="btn btn-primary" data-clipboard-target="#link"><span class="fa fa-files-o"></span> Copiar texto</button>
						</div>
						    </div>
	<script src="/assets/clipboard/dist/clipboard.min.js"></script>

<script>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>	
			
				<?php
			}
			?>
			<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-film"></i> Preview Vídeo</h3>
</div>
<div class="panel-body">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" style="border:0px #FFFFFF none;" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="100%" width="100%" src="<?=$linkEncode?>" allowfullscreen></iframe> </div>
</div>
</div>
</div>		
<?php include_once('view/footer.php');?>