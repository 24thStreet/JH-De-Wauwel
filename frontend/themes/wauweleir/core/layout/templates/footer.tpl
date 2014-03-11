<div class="footer">
	<div class="container container-yellow">
		<div class="row">
			<a href="http://www.24street.be" class="logo24street"><img src="{$THEME_URL}/core/layout/images/24street.png" alt="24th Street"></a>
			<div class="col-sm-6">
				<p>
					&copy; {$now|date:'Y'} {$siteTitle}<br>
					<i class="flaticon-pin8"></i> Kruispad xx, 2310 Rijkevorsel
				</p>
			</div>
			<div class="col-sm-6">
				<ul class="footer-menu pull-right">
					{iteration:footerLinks}
						<li{option:footerLinks.selected} class="selected"{/option:footerLinks.selected}>
							<a href="{$footerLinks.url}" title="{$footerLinks.title}"{option:footerLinks.rel} rel="{$footerLinks.rel}"{/option:footerLinks.rel}>
								{$footerLinks.navigation_title}
							</a>
						</li>
					{/iteration:footerLinks}
				</ul>
			</div>
		</div>
	</div>
</div>
