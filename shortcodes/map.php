<?php

add_action('init', 'Widgets', 99);

function Widgets() {

    if (function_exists('kc_add_map')) {
        kc_add_map(
            array(
                'kc_pagina' => array(
                    'name' => 'Página',
                    'description' => __('Mostrar a página inicial do relatório', 'KingComposer'),
                    'icon' => 'fa-flag',
                    'category' => 'Content',
                    'params' => array(
                        array(
                            'type' => 'radio',
                            'label' => __('É subpágina?', 'KingComposer'),
                            'name' => 'subpagina',
                            'options' => array(    // REQUIRED
                                '1' => 'SIM',
                                '0' => 'NÃO'
                            ),
                            'description' => __('', 'KingComposer')
                        ),
                        array(
                            'type' => 'text',
                            'label' => __('Título', 'KingComposer'),
                            'name' => 'titulo',
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
                        ),
                        array(
                            'name' => 'bg-color',
                            'label' => 'Cor do fundo',
                            'type' => 'radio', // USAGE RADIO TYPE
                            'options' => array(// REQUIRED
                                'claro' => 'Claro',
                                'escuro' => 'Escuro'
                            ),
                            'description' => 'Fundo claro ou escuro',
                        ),
                        array(
                            'name' => 'overlay',
                            'label' => 'Fundo do texto',
                            'type' => 'radio',  // USAGE CHECKBOX TYPE
                            'options' => array(    // REQUIRED
                                'nenhum' => 'Nenhum',
                                'bg-gradient-left' => 'Preto Esquerda-Direita',
                                'bg-gradient-right' => 'Preto Direita-Esquerda',
                                'bg-gradient-left-white' => 'Branco Esquerda-Direita',
                                'bg-gradient-right-white' => 'Branco Direita-Esquerda',
                                'bg-full-black' => 'Tela inteira preto',
                                'bg-full-white' => 'Tela inteira branco',
                            ),
                            'description' => 'Cor do fundo para o texto',
                        ),
                        array(
                            'name' => 'cor-botao',
                            'label' => 'Cor do botão',
                            'type' => 'radio',  // USAGE CHECKBOX TYPE
                            'options' => array( 
                                'button-blue' => 'Azul',
                                'button-white button-light' => 'Branco',
                            ),
                            'description' => 'Cor do botão na página',
                        )
                    )
                ), 
                'kc_inicial' => array(
                    'name' => 'Página Inicial',
                    'description' => __('Mostrar a página do relatório', 'KingComposer'),
                    'icon' => 'fa-file-text',
                    'category' => 'Content',
                    'params' => array(
                        array(
                            'type' => 'radio',
                            'label' => __('É subpágina?', 'KingComposer'),
                            'name' => 'subpagina',
                            'options' => array(    // REQUIRED
                                '1' => 'SIM',
                                '0' => 'NÃO'
                            ),
                            'description' => __('', 'KingComposer')
                        ),
                        array(
                            'type' => 'text',
                            'label' => __('Título', 'KingComposer'),
                            'name' => 'title',
                            'description' => __('Título da seção.', 'KingComposer'),
                            'admin_label' => true,
                        ),
                        array(
                            'name' => 'bg_secao',
                            'label' => 'Background',
                            'type' => 'attach_image', // USAGE ATTACH_IMAGE TYPE
                            'description' => 'Background da seção',
                        )
                    )
                )
            )
            
        ); // End add map
    } // End if
}
