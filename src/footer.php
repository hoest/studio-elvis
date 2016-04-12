      <footer>&#169; 2014-<?php echo date("Y"); ?> - Studio Elvis</footer>
    </div>

    <script>
      (function(d) {
        var config = {
          kitId: 'nlf5kcs',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <script src="//code.jquery.com/jquery-2.2.2.min.js"
      integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
