{include:core/layout/templates/head.tpl}
<body class="{$LANGUAGE}" itemscope itemtype="http://schema.org/WebPage">

	<div class="container padding-bottom">
		<div class="row">
			<div class="col-sm-12">
				<a href="index.html"><img src="{$THEME_URL}/core/layout/images/logo.png" alt="{$siteTitle}" class="center"></a>
			</div>
		</div>
		<div class="row">
			{* Navigation *}
			<div class="col-sm-12">
				<div class="main-menu">
					{$var|getnavigation:'page':0:1}
				</div>
			</div>
		</div>

		<div class="row">
   			<div class="col-sm-12 text">
   				<div class="big-title no-top-border">
   					<h1>{$page.title}</h1>
   				</div>

   				{* Main position *}
				{iteration:positionMain}
					{option:positionMain.blockIsHTML}
						{$positionMain.blockContent}
					{/option:positionMain.blockIsHTML}
					{option:!positionMain.blockIsHTML}
						{$positionMain.blockContent}
					{/option:!positionMain.blockIsHTML}
				{/iteration:positionMain}
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