{include:core/layout/templates/head.tpl}
<body class="{$LANGUAGE}" itemscope itemtype="http://schema.org/WebPage">
	{* Navigation *}
	<div class="container padding-bottom">
		<div class="row">
			<div class="col-sm-12">
				<a href="index.html"><img src="{$THEME_URL}/core/layout/images/logo.png" alt="{$siteTitle}" class="center"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="main-menu">
					{$var|getnavigation:'page':0:1}
				</div>
			</div>
		</div>

	    <div id="slides" class="margin-top-35">
			<div class="slide">
				<img src="img/img1.jpg" alt="Slide 1">
				<div class="caption">
					<p>eerste steenlegging van ons jeugdhuis/de jeugdlokalen</p>
				</div>
			</div>
			<div class="slide">
				<img src="img/img1.jpg" alt="Slide 1">
				<div class="caption">
					<p>eerste steenlegging van ons jeugdhuis/de jeugdlokalen</p>
				</div>
			</div>
			<div class="slide">
				<img src="img/img1.jpg" alt="Slide 1">
				<div class="caption">
					<p>eerste steenlegging van ons jeugdhuis/de jeugdlokalen</p>
				</div>
			</div>
	    </div>

	    <div class="row margin-top-35">
   			<div class="col-sm-12 text">

					{* Intro position *}
					{iteration:positionIntro}
						{$positionIntro.blockContent}
					{/iteration:positionIntro}

   				<p>
   					<a href="/historiek" class="btn-rect pull-right">Lees meer <i class="flaticon-arrow487"></i></a>
   				</p>
   			</div>
   		</div>

   		<div class="row margin-top-35">
   			<div class="col-sm-12">
   				<div class="big-title">
   					<h1>Volgend evenement</h1>
   				</div>
   				<div class="col-sm-12">
       				<div class="col-sm-3 margin-top-35">
       					<div class="date">
       						<h1>28</h1>
       						<p>december</p>
       					</div>
       				</div>
       				<div class="col-sm-9 margin-top-35">
       					<div class="col-sm-12 event">
	       					<h1>WETTETAL?!</h1>
	       					<p><i class="flaticon-pin8"></i> De Singer Rijkevorsel</p>
	       					<p><i class="flaticon-simple14"></i> 20:00</p>
	       				</div>
	       				<div class="col-sm-12">
	       					<a href="#" class="btn-rect no-margin-left">Schrijf in <i class="flaticon-create1"></i></a>
	       					<a href="#" class="btn-rect">Facebook <i class="flaticon-facebook6"></i></a>
	       					<a href="#" class="btn-rect">iCal <i class="flaticon-weekly3"></i></a>
	       				</div>
       				</div>
   				</div>
   				<div class="col-sm-12 margin-top-35">
   					<a href="#">Bekijk de agenda <i class="flaticon-arrow487"></i></a>
   				</div>
   			</div>
   		</div>

   		<div class="row margin-top-35">
   			<div class="col-sm-12">
   				<div class="big-title">
   					<h1>Vraagje?</h1>
   				</div>

   				<form role="form" class="margin-top-35 form">
				    <div class="form-group">
				        <label for="name">Naam</label>
				        <input type="text" class="form-control" id="name" placeholder="Lorenz Adriaensen">
				    </div>
				    <div class="form-group">
						<label for="email">Email-adres</label>
						<input type="email" class="form-control" id="email" placeholder="lorenz@24street.be">
					</div>
					<div class="form-group">
						<label for="message">Bericht</label>
						<textarea class="form-control" rows="10" name="message"></textarea>
					</div>
				    <button type="submit" class="btn-rect pull-right">Verzenden <i class="flaticon-send5"></i></button>
				</form>
   			</div>
   		</div>
    </div>

	<noscript>
		<div class="message notice">
			<h4>{$lblEnableJavascript|ucfirst}</h4>
			<p>{$msgEnableJavascript}</p>
		</div>
	</noscript>

	{include:core/layout/templates/footer.tpl}

	{* General Javascript *}
	{iteration:jsFiles}
		<script src="{$jsFiles.file}"></script>
	{/iteration:jsFiles}

	{* Theme specific Javascript *}
	<script src="{$THEME_URL}/core/js/jquery.slides.js"></script>
	<script src="{$THEME_URL}/core/js/dewauwel.js"></script>


	{* Site wide HTML *}
	{$siteHTMLFooter}
</body>
</html>