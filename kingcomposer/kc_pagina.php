<?php  
$query = new WP_Query(); 
$todasPaginas = $query->query(array('post_type' => 'page'));
$idpagina = explode(":", $atts['page-id']);
$subpaginas = get_page_children($idpagina[0],$todasPaginas); 
?>
<div class="section nomargin <?php if($atts['bg-color']=='escuro')echo 'dark'; ?> nopadding" id="<?php echo 'section-'.$atts['page-id']; ?>" style="background-image: url('<?php echo wp_get_attachment_url($atts[bg_secao]); ?>'); background-size: cover;">
    <div class="slide" id="slide1">
        <div class="col-md-6 col-sm-12 full-screen nomargin <?php if($atts['overlay'] != 'nenhum') echo $atts['overlay']; ?>">
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
                    <a href="#<?php echo get_post_field('post_name', $atts['page-id']); ?>/1" class="button button-3d button-rounded <?php echo $atts['cor-botao']; ?>">
                        <span>Veja mais<i class="icon-line-arrow-right"></i></span>
                    </a>
                <?php endif; ?>
                
            </div>
        </div>
        
        <?php foreach ($subpaginas as $subpag):?>
            <div class="slide bgcolor" id="slide-<?php echo $subpag->ID; ?>">
                <h1>Slide 2</h1>
                <?php print_r($subpag); ?>
            </div>
        <?php endforeach; ?>

        <!--<div class="slide bgcolor" id="slide2">
            <h1>Slide 2</h1>
        </div>-->

    </div>
</div>