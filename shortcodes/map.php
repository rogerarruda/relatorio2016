<?php

add_action('init', 'teste', 99);

function teste() {

    if (function_exists('kc_add_map')) {
        kc_add_map(
            array(
                'kc_pagina_inicial' => array(
                    'name' => 'Página Inicial',
                    'description' => __('Mostrar a página inicial do relatório', 'KingComposer'),
                    'icon' => 'fa-flag',
                    'category' => 'Content',
                    'params' => array(
                        array(
                            'type' => 'text',
                            'label' => __('Título', 'KingComposer'),
                            'name' => 'title',
                            'description' => __('Título da seção.', 'KingComposer'),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'autocomplete',
                            'label' => __('Página', 'KingComposer'),
                            'name' => 'page-id',
                            'options' => array(
                                'multiple' => false,
                                'post_type' => 'page',
                            ),
                            'description' => __('Selecione a página da seção', 'KingComposer'),
                        ),
                        array(
                            'name' => 'bg_secao',
                            'label' => 'Background',
                            'type' => 'attach_image', // USAGE ATTACH_IMAGE TYPE
                            'description' => 'Background da seção',
                        )
                    )
                ), // End of elemnt kc_icon 
            ),
            array(
                'kc_pagina' => array(
                    'name' => 'Página',
                    'description' => __('Mostrar a página do relatório', 'KingComposer'),
                    'icon' => 'sl-paper-plane',
                    'category' => 'Content',
                    'params' => array(
                        array(
                            'type' => 'text',
                            'label' => __('Título', 'KingComposer'),
                            'name' => 'title',
                            'description' => __('Título da seção.', 'KingComposer'),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'autocomplete',
                            'label' => __('Página', 'KingComposer'),
                            'name' => 'page-id',
                            'options' => array(
                                'multiple' => false,
                                'post_type' => 'page',
                            ),
                            'description' => __('Selecione a página da seção', 'KingComposer'),
                        ),
                        array(
                            'name' => 'bg_secao',
                            'label' => 'Background',
                            'type' => 'attach_image', // USAGE ATTACH_IMAGE TYPE
                            'description' => 'Background da seção',
                        )
                    )
                ), // End of elemnt kc_icon 
            )
        ); // End add map
    } // End if
}
