
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
					<a href="http://www.johnclarkemills.com/wp-content/uploads/2011/12/avatar.jpg" target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Avatar']); }">
						<img src="http://www.johnclarkemills.com/wp-content/uploads/2011/12/avatar-150x150.jpg" width="100" height="100" alt="John Clarke Mills" />
					</a>
				</div>
				<h1>John Clarke Mills</h1>
				<p>
					Engineer, woodworker, <br/>mechanic, and maker of mistakes.  Co-founder of
					&nbsp;<a target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Zenput']); }" href="https://www.zenput.com">Zenput</a>,
					loving restorer of <a target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'San Fran Vic']); }" href="http://www.sanfranvic.com">San Fran Vic</a>, Co-founder of the
					<a target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Duck Pond']); }" href="http://duckpondcamp.org">Duck Pond</a>.<br />
				</p>
				<div class="clearfloat"></div>
				
				<div id="social-networks">
					<a class="icon mail-icon" onClick="var mail = 'john'; var addr = 'johnclarkemills.com'; $(this).attr('href', 'mailto:' + mail + '@' + addr); if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Email']); }" href="#"></a>
					<a class="icon twitter-icon" target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Twitter']); }" href="http://twitter.com/johnclarkemills" alt="John Clarke Mills on Twitter"></a>
					<a class="icon linkedin-icon" target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'LinkedIn']); }" href="http://www.linkedin.com/in/johnclarkemills" alt="John Clarke Mills on LinkedIn"></a>
					<a class="icon facebook-icon" target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Facebook']); }" href="http://www.facebook.com/johnclarkemills" alt="John Clarke Mills on Facebook"></a>
					<!--<a rel="author" class="icon google-icon" target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Google']); }" href="https://plus.google.com/110523674200626115395" alt="John Clarke Mills on Google Plus"></a>-->
					<a class="icon flickr-icon" target="_blank" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Flickr']); }" href="http://www.flickr.com/people/johnclarkemills" alt="John Clarke Mills on Flickr"></a>
				</div>
			</span>
			<div class="clearfloat"></div>

			<div id="twitter-follow">
				<a href="http://twitter.com/johnclarkemills" class="twitter-follow-button">Follow @johnclarkemills</a>
			</div>
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script>
				var windowHeight = parseInt($(window).height());
				if (windowHeight < 600) { numTweets = 4; } else if(windowHeight < 800) { numTweets = 4; } else { numTweets = 6; }
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: numTweets,
				  interval: 6000,
				  width: 325,
				  height: 500,
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
				$('#intro').fixedscroll({ container: $('#wrapper') });
				
				$(document).ready(function() {
					$(function() {
						$(".features").jCarouselLite({
							btnNext: "#next-feature",
							btnPrev: "#previous-feature",
							auto: 10000,
							speed: 1000
						});
					});
				});
			
			</script>
			<div id="as-seen-in">
				<div class="as-seen-in-head">
					Featured Projects
					<div id="next-feature" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Next Feature']); }">&nbsp;</div>
					<div id="previous-feature" onclick="if (_gaq != undefined) { _gaq.push(['_trackEvent', 'Click', 'Previous Feature']); }">&nbsp;</div>
				</div>
				<div class="features">
					<ul>
						<li>
							<div class="featured-article">
								<a href="http://boingboing.net/2011/07/26/how-to-build-a-burning-man-theme-camp.html" target="blank">
									How to Build a Burning Man Theme Camp
								</a>
							</div>
							<div class="featured-logo-area">
								<div class="via">via</div>
								<a href="http://boingboing.net/2011/07/26/how-to-build-a-burning-man-theme-camp.html" target="blank">
									<div class="boing-boing-icon icon"></div>
								</a>
							</div>
						</li>
						<li>
							<div class="featured-article">
								<a href="http://blog.makezine.com/archive/2011/09/how-to-build-a-victorian-library.html" target="blank">
									How-To: Build A Victorian Library
								</a>
							</div>
							<div class="featured-logo-area" style="width: 150px;">
								<div class="via">via</div>
								<a href="http://blog.makezine.com/archive/2011/09/how-to-build-a-victorian-library.html" target="blank">
									<div class="make-icon icon"></div>
								</a>
							</div>
						</li>
						<li>
							<div class="featured-article">
								<a href="http://www.apartmenttherapy.com/sf/how-to/before-and-after-how-to-redo-a-chandelier-070426" target="blank">
									Before and After: How To Redo a Chandelier
								</a>
							</div>
							<div class="featured-logo-area" style="width: 210px;">
								<div class="via">via</div>
								<a href="http://www.apartmenttherapy.com/sf/how-to/before-and-after-how-to-redo-a-chandelier-070426" target="blank">
									<div class="apartment-therapy-icon icon"></div>
								</a>
							</div>
						</li>
						<li>
							<div class="featured-article">
								<a href="http://jalopnik.com/225255/megasquirted-2002-on-the-streets-of-san-francisco" target="blank">
									BMW 2002 on the Streets of San Francisco
								</a>
							</div>
							<div class="featured-logo-area">
								<div class="via">via</div>
								<a href="http://jalopnik.com/225255/megasquirted-2002-on-the-streets-of-san-francisco" target="blank">
									<div class="jalopnik-icon icon"></div>
								</a>
							</div>
						</li>
						<li>
							<div class="featured-article">
								<a href="http://www.casasugar.com/Before-After-Restoring-Victorian-Staircase-5203093" target="blank">
									Restoring a Victorian Staircase
								</a>
							</div>
							<div class="featured-logo-area">
								<div class="via">via</div>
								<a href="http://www.casasugar.com/Before-After-Restoring-Victorian-Staircase-5203093" target="blank">
									<div class="casa-sugar-icon icon"></div>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</aside>
		<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
  		<?php wp_footer(); ?>
        <div class="clearfloat"></div>
	</div>
	<div class="clearfloat"></div>
	</body>
</html>
