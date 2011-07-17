
            </section>
        <?php get_sidebar(); ?>
        <footer>
  			<p>Copyright &copy; 2005-2010 John Clarke Mills</p>
            <p>john (at) design mills . com</p>
  		</footer>
        <div class="clearfloat"></div>
    </div>
        <aside id="intro">
            <div class="photo"><img src="/wp-content/themes/personal-blog/images/me-for-san-fran-vic_reasonably_small.jpg" width="128" height="128" alt="John Clarke Mills" /></div>
            <h1>John Clarke Mills</h1>
            <p>
                @johnclarkemills San Francisco<br />
                Director of Engineering and founding engineer at @bbfdirect, loving restorer of http://sanfranvic.com, tinkerer woodworker, mechanic, and burner.<br />
            </p>

        </aside>
        <aside>
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script>
            new TWTR.Widget({
              version: 2,
              type: 'profile',
              rpp: 10,
              interval: 6000,
              width: 225,
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
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
        </script>
        <script type="text/javascript">
        _uacct = "UA-1806573-1";
        urchinTracker();
        </script>
	</body>
</html>
