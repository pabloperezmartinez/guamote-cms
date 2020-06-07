		<footer class="ui orange inverted segment" style="border-radius:0px; margin-bottom: 0px !important;"><br>
			<div class="ui container">
				<div class="ui stackable grid">
					<div class="middle aligned row">
						<div class="ui three wide column">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/lava-foot.svg" class="ui small image"/>
						</div>
						<div class="ui seven wide column">
							<p style="color: #FFF !important;"><a style="color: #FFF !important;" href="/legal-notice/" target="_parent">Aviso Legal</a> · Todos los derechos reservados <br>© LA VENGANZA DEL AN&Aacute;LOGO - 2019</p>
						</div>
						<div class="ui six wide right aligned column">
							<p>
								<a href="https://www.facebook.com/Centro-de-Capacitación-José-Pedro-Varela-1190210507662720/?fref=ts" target="_blank"><i class="circular blue inverted facebook icon"></i></a>
								<a href="https://twitter.com/ccjpv_ec" target="_blank"><i class="circular inverted teal twitter icon"></i></a>
								<i class="circular inverted pink instagram icon"></i>
								<i class="circular inverted green whatsapp icon"></i>
								<a href="<?php echo site_url();?>/rss" target="_blank"><i class="circular inverted red rss icon"></i></a>
							</p>
							<p><?php echo get_option( 'woocommerce_store_address', '' );?><br>
                                <?php echo get_option( 'woocommerce_store_city', '' );?> <?php echo explode( ":",get_option( 'woocommerce_default_country', '' ))[0];?><br>
							    <i class="inverted phone icon"></i> (593 2) 2453-585<br>
							    <a href="mailto:info@ccjpv.edu.ec"><i class="inverted mail icon"></i>info@ccjpv.edu.ec</a>
                            </p>
						</div>

					</div>
				</div><br>
			</div>
		</footer>

		<?php wp_footer();?>
	</body>
</html>
