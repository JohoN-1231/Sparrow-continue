<footer>

<div class="row">

  <div class="twelve columns">

    <?
          wp_nav_menu( [
            'theme_location'  => 'bottom-menu',
            'container'       => '',
            'menu_class'      => 'footer-nav',
        ] );
        ?>
    <? dynamic_sidebar("social-icons"); ?>

    <ul class="copyright">
      <li>Copyright &copy; 2014 Sparrow</li>
      <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
    </ul>

  </div>

  <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

</div>
        
</footer> <!-- Footer End-->
<? wp_footer(); ?>
</body>

</html>