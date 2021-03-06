<script src="<?php $this->baseurl ?>/modules/mod_tarjetas/tmpl/js/carousel.js" type="text/javascript"></script>
<script type="text/javascript">
stepcarousel.setup({
	galleryid: 'carousel', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:3000},
	panelbehavior: {speed:500, wraparound:true, persist:true},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['external'] //content setting ['inline'] or ['external', 'path_to_external_file']
})
</script>
<style type="text/css">
		/* Carousel */
		
#carousel {
	position: relative; /* Necesario */
	overflow: hidden; /* Necesario */
	height: 250px;
	margin-left:35px;
	background:#5B5B5B url(carousel-bg.png) bottom left repeat-x;
}

#carousel .belt {
	position: absolute; /* Necesario */
	left: 0;
	top: 0;
	margin:0 10px 10px 0;
}

#carousel .panel {
	width:265px;
	float: left; /* Necesario */
	overflow: hidden;
	margin: 15px;
	padding:7px;
	border:1px solid #5B5B5B;
	background:#383838 url(carousel-panel-bg.png) bottom left repeat-x;
}

#carousel .panel .panel-text {
	padding-top:5px;
	font-size:13px;
	font-family:Verdana, Geneva, sans-serif;
	color:#FFF;
}

#carousel .panel .panel-text a {
	color:#CCC;
	text-decoration:none;
}

#carousel .panel .panel-text a:hover {
	color:#FFF;
	text-decoration:underline;
}

			/* Botones del carousel */
			
.button-prev {
	height:250px;
	width:35px;
	float:left;
	background:#5B5B5B url(carousel-bg.png) bottom left repeat-x;
	-moz-border-radius:10px 0 0 10px;
}

.button-prev a {
	display:block;
	padding:5px;
	margin-top:105px;
}

.button-next {
	height:250px;
	width:35px;
	float:right;
	background:#5B5B5B url(carousel-bg.png) bottom left repeat-x;
	-moz-border-radius:0 10px 10px 0;
}

.button-next a {
	display:block;
	padding:5px;
	margin-top:105px;
}


a img {
	border:none;
}
</style>

<div class="button-next">
		<a href="javascript:stepcarousel.stepBy('carousel', 1)"><img src="<?php echo $this->baseurl ?>/modules/mod_tarjetas/tmpl/images/arrow_right.png" /></a>
</div>

<div class="button-prev">
		<a href="javascript:stepcarousel.stepBy('carousel', -1)"><img src="<?php echo $this->baseurl ?>/modules/mod_tarjetas/tmpl/images/arrow_left.png" /></a>
</div>

<div id="carousel" class="stepcarousel">
	
	<div class="belt">
	
	<?php
foreach ($tarjetas as $tarjeta) {
		?>
		<div class="panel">
			
			<img src="<?php echo $tarjeta->ruta ?>" />
			<div class="panel-text">
				<p>Este carousel es una demostraci&oacute;n</p>
			</div>
		</div>
		
		
	<?php	
	}
?>
	
		
	</div>
	
</div>	
