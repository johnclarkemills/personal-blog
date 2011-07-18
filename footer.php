
            </section>
        <?php get_sidebar(); ?>
        <footer>
  			<p>Copyright &copy; 2005-2010 John Clarke Mills</p>
            <p><b>john (at) john clarke mills . com</b></p>
  		</footer>
        <div class="clearfloat"></div>
    </div>
        <aside id="intro">
            <div class="photo"><img src="http://www.gravatar.com/avatar/dd7140aaf81fa3ffb16bd46d00bad8a7?s=100" width="100" height="100" alt="John Clarke Mills" /></div>
            <h1>John Clarke Mills</h1>
            <p>
                <!--<a href="http://twitter.com/johnclarkemills">@johnclarkemills</a><br />-->
                Director of Engineering and founding engineer at <a href="http://twitter.com/bbfdirect">@bbfdirect</a>,
				loving restorer of <a href="http://www.sanfranvic.com">San Fran Vic</a>, cofounder of the <a href="http://www.theduckpondcrew.com">Duck Pond</a>, tinkerer, and mechanic.<br />
            </p>
			<div id="social-networks">
				<a class="icon rss-icon" href="http://feeds.feedburner.com/JohnClarkeMills" alt="John Clarke Mills RSS Feed"></a>
				<a class="icon twitter-icon" href="http://twitter.com/johnclarkemills" alt="John Clarke Mills on Twitter"></a>
				<a class="icon linkedin-icon" href="http://www.linkedin.com/in/johnclarkemills" alt="John Clarke Mills on LinkedIn"></a>
				<a class="icon facebook-icon" href="http://www.facebook.com/johnclarkemills" alt="John Clarke Mills on Facebook"></a>
				<a class="icon flickr-icon" href="http://www.flickr.com/people/johnclarkemills" alt="John Clarke Mills on Flickr"></a>
			</div>
        </aside>
        <aside>
			<div id="twitter-follow">
				<a href="http://twitter.com/johnclarkemills" class="twitter-follow-button">Follow @johnclarkemills</a>
				<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
			</div>
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script>
            new TWTR.Widget({
              version: 2,
              type: 'profile',
              rpp: 10,
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
        </aside>

  		<?php wp_footer(); ?>
        <div class="clearfloat"></div>
        </div>
	</body>
</html>
