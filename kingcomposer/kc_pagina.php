<?php  
$query = new WP_Query(); 
$todasPaginas = $query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
$idpagina = explode(":", $atts['page-id']);
$subpaginas = get_page_children($idpagina[0],$todasPaginas); 
?>
<div class="section nomargin <?php if($atts['bg-color']=='escuro')echo 'dark'; ?> nopadding" id="<?php echo 'section-'.$atts['page-id']; ?>" style="background-image: url('<?php echo wp_get_attachment_url($atts[bg_secao]); ?>'); background-size: cover;">
    <div class="slide" id="slide1">
        <?php 
            if ($atts['overlay'] == 'bg-gradient-right-white' || $atts['overlay'] == 'bg-gradient-right') { 
                echo '<div class="col-md-6"></div>'; 
            }
        ?>
        
        <div class="<?php if ($atts['overlay'] == 'bg-full-white' || $atts['overlay'] == 'bg-full-black'){ echo 'col-md-12 text-center '.$atts['overlay'];} else { echo 'col-md-6'; } ?> col-sm-12 full-screen nomargin <?php if($atts['overlay'] != 'nenhum') echo $atts['overlay']; ?>">
            <div class="col-md-12 vertical-middle col-padding font-body">
                
                <?php
                
                $paginapai = $query->query(array('post_type' => 'page', 'page_id' => $atts['page-id']));
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                
                    <?php
                    endwhile;
                else:
                    // no posts found
                endif;
                wp_reset_postdata();
                ?>
                <?php if(!empty($subpaginas)): ?>
                <div style="margin-top: 30px;">
                    <a href="#<?php echo get_post_field('post_name', $atts['page-id']); ?>/1" class="button button-3d button-rounded <?php echo $atts['cor-botao']; ?>" style="margin-left: 0;">
                        <span>Veja mais<i class="icon-line-arrow-right"></i></span>
                    </a>
                </div>
                <?php endif; ?>
                
            </div>
        </div>
        
        <?php //var_dump($subpaginas); ?>
        
        <?php foreach ($subpaginas as $subpag):?>
            <div class="slide bg-white text-black" id="slide-<?php echo $subpag->ID; ?>">
                <div class="container long-text-slide">
                    <h1><?php echo get_post_field('post_title',$subpag->ID); ?></h1>
                    <?php echo get_post_field('post_content',$subpag->ID); ?>
                </div>
            </div>
        <?php endforeach; ?>

        <!--<div class="slide bgcolor" id="slide2">
            <h1>Slide 2</h1>
        </div>-->

    </div>
</div>


<?php 
//if($atts['overlay'] != 'nenhum') { echo $atts['overlay']; } else if ($atts['overlay'] == 'bg-gradient-right-white' || $atts['overlay'] == 'bg-gradient-right') { echo 'col-md-offset-6'; }
?>