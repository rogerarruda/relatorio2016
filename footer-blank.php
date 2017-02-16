

    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    

    <?php
    global $post;
    if (function_exists('kc_do_shortcode')) {    
        $raw_content = kc_raw_content( $post->ID );
        $short = explode("][", $raw_content);    
        $j = 0;
        for($i = 2; $i < count($short)-2; $i++){
            $shotcode[$j] = $short[$i];
            $arrayshort[$j] = shortcode_parse_atts($shotcode[$j]);
            $pageid[$j] = explode(":", $arrayshort[$j]['page-id']);
            $pageid[$j] = $pageid[$j][0];
            $j++;
        }
    }
    ?>
    <script type="text/javascript">
        jQuery(window).load(function () {
            $('#fullpage').fullpage({
                
                anchors: [
                    <?php 
                    $i = 0; 
                    foreach ($pageid as $id): 
                        if ($i != count($pageid)-1):
                            echo '"'.get_post_field('post_name', $id).'", ';
                            $i++;
                        else:
                            echo '"'.get_post_field('post_name', $id).'"';
                        endif;
                    endforeach;
                    ?>
                ],
                //sectionsColor: ['', '', '#7E8F7C'],
                scrollBar: true,
                menu: '#header',
                slidesNavigation: true,
                loopHorizontal: false,
                scrollOverflow: true,
            });
        });
    </script>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/fullpage/jquery.easings.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fullpage/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fullpage/jquery.fullPage.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slidereveal.js"></script>
    <?php wp_footer(); ?>
    


</body>
</html>
