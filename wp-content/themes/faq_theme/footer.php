<footer class="navbar-fixed-bottom">
	<div class="container">
    	<div class="row">
        	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav fl' , 'theme_location' => 'secondary' ) ); ?>
            <div class="sociales fl">
            	<ul>
            		
                    <li><a href="<?php echo get_field('twitter','options')?>"><span class="fa fa-fw fa-twitter"></span></a></li>
                    <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
                    <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube"></span></a></li>
                   
            	</ul>
            </div>
            
            
        </div>
    </div>
</footer>

</body>
<?php wp_footer()?>
</html>