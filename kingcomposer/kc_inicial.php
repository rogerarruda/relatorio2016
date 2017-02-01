<div class="section nomargin nopadding dark parallax" id="section-<?php echo $atts[_id]; ?>" style="background-image: url('<?php echo wp_get_attachment_url( $atts[bg_secao] ); ?>');">
    
    <?php onepage_navmenu('menu-principal') ?>
    <!--<nav id="header" class="full-header dark transparent-header static-sticky" data-sticky-class="not-dark" data-sticky-offset="0">
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="<?php echo get_template_directory_uri(); ?>/assets/imagens/relatorio.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/relatorio.colorido.png" alt="Canvas Logo" style="margin-top: 11px; height: 41px;"></a>
                </div>

                <div id="primary-menu">
                    <ul class="one-page-menu">
                        <li data-menuanchor="firstPage" class="current">
                            <a href="#firstPage">Início</a>
                        </li>
                        <li data-menuanchor="secondPage">
                            <a href="#secondPage">Apresentação</a>
                        </li>
                        <li data-menuanchor="3rdPage"><a href="#3rdPage"><div>A Unimontes</div></a></li>
                        <li data-menuanchor="resultados">
                            <a href="#resultados"><div>Resultados 2016</div></a>
                            <ul>
                                <li data-menuanchor="atividades">
                                    <a href="#atividades"><div>Atividades</div></a>
                                </li>
                                <li data-menuanchor="ensino">
                                    <a href="#ensino"><div>Ensino</div></a>
                                </li>
                                <li data-menuanchor="pesquisa">
                                    <a href="#pesquisa"><div>Pesquisa</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>-->

    <div class="container center">
        <div class="vertical-middle">
            <div class="emphasis-title col-md-12">
                <div class="col-md-6 col-md-offset-3">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logo.unimontes.png" class="img-responsive">
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="col-md-12 text-uppercase heading-block nobottomborder center bottommargin">
                    <h3>Construção coletiva</h3>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logo.estado.png" class="img-responsive">
                </div>
            </div>
            <a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="100" class="one-page-arrow dark topmargin" style="bottom: -14px;"><i class="icon-angle-down infinite animated bounce"></i></a>
        </div>
    </div>
</div>