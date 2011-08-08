
            </section>
        <?php get_sidebar(); ?>
        <footer>
  			<p>Copyright &copy; 2005-2011 John Clarke Mills</p>
			<p>Wordpress theme is open source and available on <a href="https://github.com/johnclarkemills/personal-blog" rel="nofollow">github</a>.</p>
  		</footer>
        <div class="clearfloat"></div>
    </div>
	
	<div id="right-bar">
        <aside id="intro">
			<span id="intro-text">
				<div class="photo">
					<a href="http://www.gravatar.com/avatar/dd7140aaf81fa3ffb16bd46d00bad8a7?s=1000" target="_blank">
						<img src="http://www.gravatar.com/avatar/dd7140aaf81fa3ffb16bd46d00bad8a7?s=100" width="100" height="100" alt="John Clarke Mills" />
					</a>
				</div>
				<h1>John Clarke Mills</h1>
				<p>
					<!--<a href="http://twitter.com/johnclarkemills">@johnclarkemills</a><br />-->
					Director of Engineering and founding engineer at <a target="_blank" href="http://twitter.com/bbfdirect">@bbfdirect</a>,
					loving restorer of <a target="_blank" href="http://www.sanfranvic.com">San Fran Vic</a>, cofounder of the
					<a target="_blank" href="http://www.theduckpondcrew.com">Duck Pond</a>, tinkerer, and mechanic.<br />
				</p>
				<div class="clearfloat"></div>
				
				<div id="social-networks">
					<a class="icon twitter-icon" target="_blank" href="http://twitter.com/johnclarkemills" alt="John Clarke Mills on Twitter"></a>
					<a class="icon linkedin-icon" target="_blank" href="http://www.linkedin.com/in/johnclarkemills" alt="John Clarke Mills on LinkedIn"></a>
					<a class="icon facebook-icon" target="_blank" href="http://www.facebook.com/johnclarkemills" alt="John Clarke Mills on Facebook"></a>
					<a class="icon flickr-icon" target="_blank" href="http://www.flickr.com/people/johnclarkemills" alt="John Clarke Mills on Flickr"></a>
					<a class="icon mail-icon" onClick="var mail = 'john'; var addr = 'johnclarkemills.com'; jQuery(this).attr('href', 'mailto:' + mail + '@' + addr);" href="#"></a>
				</div>
			</span>
			<div class="clearfloat"></div>
			
			<div id="twitter-follow">
				<a href="http://twitter.com/johnclarkemills" class="twitter-follow-button">Follow @johnclarkemills</a>
				<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
			</div>
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script>
            new TWTR.Widget({
              version: 2,
              type: 'profile',
              rpp: 5,
              interval: 6000,
              width: 325,
              height: 300,
              theme: {
                shell: {
                  background: '#ffffff',
                  color: '#000000'
                },
                tweets: {
                  background: '#ffffff',
                  color: '#000000',
                  links: '#2A642A'
                }
              },
              features: {
                scrollbar: false,
                loop: false,
                live: false,
                hashtags: true,
                timestamp: true,
                avatars: false,
                behavior: 'all'
              }
            }).render().setUser('johnclarkemills').start();
            </script>
	
			<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/personal-blog/jquery.fixedscroll.js"></script>
			<script>
				jQuery('#intro').fixedscroll({ container: jQuery('#wrapper') });
			</script>

			<div id="as-seen-in">
				<div class="as-seen-in-head">Featured Articles</div>
			</div>
		</aside>
  		<?php wp_footer(); ?>
        <div class="clearfloat"></div>
	</div>
	<div class="clearfloat"></div>
	</body>
</html>
