<?php get_header()?>

<section class="preguntas container-fluid">
	<div class="row">
		<div class="col-xs-12" role="tabpanel">
	<?php $tipos = get_terms('tipo' , array('hide_empty' => false)) ?>
   		
        <!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
		<?php $tc = 0?>
        <?php foreach ($tipos as $tipo):?>
        	<?php $tc++?>
        	<li role="presentation" class="<?php if($tc == 1){ echo 'active';}?>">
            	<a href="#<?php echo $tipo->slug?>" aria-controls="<?php echo $tipo->slug?>" role="tab" data-toggle="tab"><?php echo $tipo->name?></a>
            </li>
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
                    <li>
                        <span class="badge"><?php echo $pp ?></span><h1  data-toggle="modal" data-target="#pregunta-<?php echo $pregunta->ID?>"><?php echo $pregunta->post_title?></h1>
                        <!-- Modal -->
                        <div class="modal fade" id="pregunta-<?php echo $pregunta->ID?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $pregunta->ID?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <h1><span class="badge"><?php echo $pp ?></span><?php echo $pregunta->post_title?></h1>
                                        <p><?php echo apply_filters('the_content', $pregunta->post_content)?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach?>
                    <div class="clear"></div>
                </ul>
            <?php endforeach?>
        </div>
	</div>
	</div>
</section>

<div class="clear"></div>

<section class="container-fluid">
    <div class="row">
    	<div class="service-area col-xs-12">
		<h2 class="title-other">ACCEDE A NUESTROS OTROS SERVICIOS</h2>
		<?php $servicios = get_field('servicios' , 'options')?>
        <?php foreach( $servicios as $servicio):?>
            <a class="col-xs-3 service <?php echo $servicio['class_servicio']?>"href="<?php echo $servicio['link_servicio']?>" target="_blank" title="Ir a <?php echo $servicio['nombre_servicio']?>">

                <?php echo $servicio['nombre_servicio']?>
            </a>
        <?php endforeach;?>
        <div class="clear"></div>
	</div>
    </div>
</section>

<div class="clear"></div>

<section class="container-fluid">
	<div class="row">
		<div class="other-area col-xs-12">
		<h4>SUGERENCIAS IPCHILE</h4>
		<?php $csugerencia = 0?>
		<?php $sugerencias = get_posts(array('post_type' => 'sugerencias' , 'numberposts' => 4 ))?>
		<?php $csugerencia++?>
		<?php foreach($sugerencias as $sugerencia):?>
			<div class="col-xs-3 others">
				<h4><?php echo $sugerencia->post_title?></h4>
				<a title="Ir a Freguntas Frecuentes" href="<?php echo get_field('link_sugerencia', $sugerencia->ID)?>" target="_blank">Ver más</a>
			</div>
		<?php endforeach?>
        <div class="clear"></div>
		<a href="http://www.ipchile.cl/preguntas-frecuentes-3/" target="_blank" class="btn btn-success btn-lg faqgo">Ver más Preguntas Frecuentes</a>
	</div>
	</div>
</section>


<!-- Scripts -->
<script>
jQuery("button").click(function() {
	jQuery('html,body').animate({ scrollTop: $(".preguntas").offset().top},'slow');
});
</script>

<?php get_footer()?>