<?php get_header()?>


<section class="preguntas container">


			<div class="col-md-9 col-md-offset-2" role="tabpanel">
			
			<?php $tipos = get_terms('tipo' , array('hide_empty' => false)) ?>
            
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
              <?php $tc = 0?>
              <?php foreach ($tipos as $tipo):?>
              <?php $tc++?>
			    <li role="presentation" class="<?php if($tc == 1){ echo 'active';}?>"><a href="#<?php echo $tipo->slug?>" aria-controls="<?php echo $tipo->slug?>" role="tab" data-toggle="tab"><?php echo $tipo->name?></a></li>
              <?php endforeach?>
			    
			  </ul>

			 
			  <!-- Tab panes -->
			  <div class="tab-content">
				<?php $tp = 0?>
              	<?php foreach ($tipos as $tipo):?>
                <?php $tp++?>
    		    	<ul role="tabpanel" class="tab-pane <?php if($tp == 1){ echo 'active';}?>" id="<?php echo $tipo->slug?>">

                        
                        <?php $preguntas = get_posts(array('post_type' => 'preguntas' , 'tipo' => $tipo->slug , 'numberposts' => -1))?>
						
						<?php $pp = 0 ?>
                        <?php foreach($preguntas as $pregunta):?>
                        <?php  $pp++ ?>
                      		<li data-toggle="modal" data-target="#Modal-<?php echo $pregunta->ID?>">
                                <span class="badge"><?php echo $pp ?></span><h1><?php echo $pregunta->post_title?></h1>
                            </li>
                            <!-- Modal -->

							<div class="modal fade" id="Modal-<?php echo $pregunta->ID?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $pregunta->ID?>" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        
							      </div>
							      <div class="modal-body">
							      	<span class="badge"><?php echo $pp ?></span>
							      	<h1><?php echo $pregunta->post_title?></h1>
							       <p><?php echo $pregunta->post_content?></p>
							      </div>
							     
							    </div>
							  </div>
							</div>

                             
                        	
                        <?php endforeach?>
                        <div class="clear"></div>
                    </ul>
				<?php endforeach?>
    		  </div>

</section>

<section class="container clear">
	<div class="service-area col-md-9 col-md-offset-2">

		<h2 class="title-other">ACCEDE A NUESTROS OTROS SERVICIOS</h2>
	<?php $servicios = get_field('servicios' , 'options')?>
        <?php foreach( $servicios as $servicio):?>
            
                <a class="col-md-3 service <?php echo $servicio['class_servicio']?>"href="<?php echo $servicio['link_servicio']?>" target="_blank" title="Ir a <?php echo $servicio['nombre_servicio']?>">
                	
                	<?php echo $servicio['nombre_servicio']?>
                </a>
            

     <?php endforeach;?>
 	</div>
</section>

<section class="container">
	<div class="other-area col-md-9 col-md-offset-2">

			<h4>SUGERENCIAS IPCHILE</h4>
		  	<?php $csugerencia = 0?>
			<?php $sugerencias = get_posts(array('post_type' => 'sugerencias' , 'numberposts' => 4 ))?>
			<?php $csugerencia++?>
            
            <?php foreach($sugerencias as $sugerencia):?>
            	<div class="col-md-3 others">
	                <h4><?php echo $sugerencia->post_title?></h4>
	         	    
	         	   <!--  <?php $sugerencias//= get_field('link_sugerencias')?>
                    <?php //foreach($sugerencias as $sugerencia):?>
						<a href="Ir a <?php //echo get_field($sugerencia)?>">Ver más</a>
					<?php //endforeach;?> -->

				</div>
           	<?php endforeach?>

           	<a href="http://www.ipchile.cl/preguntas-frecuentes-3/">Ver más Preguntas Frecuentes</a>

	</div>
</section>


<!-- Scripts -->

<script>
	$("button").click(function() {
    $('html,body').animate({
        scrollTop: $(".preguntas").offset().top},
        'slow');
});

</script>

<script>
	$('#myTab a').click(function (e) {
	  	e.preventDefault()
	  	$(this).tab('show')
	})
</script>

<script>
	$('#myModal').modal(options)
</script>

<?php get_footer()?>