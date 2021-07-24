<?php

function own__customize_register($wp_customize)
{

    // Create our panels

    $wp_customize->add_panel('union_solutions', array(
        'title'          => __('Union Solutions', 'mydomain'),
        'description'    => __('Informaes do website da Union Solutions Serra', 'mydomain'),
    ));

    // Create our sections

    $wp_customize->add_section('contato', array(
        'title'             => __('Contato', 'mydomain'),
        'description'       => __('Informaes de contato da pgina', 'mydomain'),
        'panel'             => 'union_solutions',
    ));

    // Create our settings

    $wp_customize->add_setting('email', array(
        'type'          => 'option',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('email_control', array(
        'label'      => __('Email', 'mydomain'),
        'description' => __('Email da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'email',
        'type'       => 'email',
    ));

    $wp_customize->add_setting('whatsapp', array(
        'type'          => 'option',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('whatsapp_control', array(
        'label'      => __('Whatsapp', 'mydomain'),
        'description' => __('Whatsapp da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'whatsapp',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('telefone_a', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('telefone_a_control', array(
        'label'      => __('Telefone A', 'mydomain'),
        'description' => __('Telefone da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'telefone_a',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('telefone_b', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('telefone_b_control', array(
        'label'      => __('Telefone B', 'mydomain'),
        'description' => __('Telefone da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'telefone_b',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('facebook', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('facebook_control', array(
        'label'      => __('Facebook', 'mydomain'),
        'description' => __('Facebook da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'facebook',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('instagram', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('instagram_control', array(
        'label'      => __('Instagram', 'mydomain'),
        'description' => __('Instagram da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'instagram',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('google_maps', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('google_maps_control', array(
        'label'      => __('Google Maps', 'mydomain'),
        'description' => __('Google maps da empresa', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'google_maps',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('endereco', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('endereco_control', array(
        'label'      => __('Endereo', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'endereco',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('cidade', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('cidade_control', array(
        'label'      => __('Cidade', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'cidade',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('uf', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('uf_control', array(
        'label'      => __('UF', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'uf',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('cep', array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('cep_control', array(
        'label'      => __('CEP', 'mydomain'),
        'section'    => 'contato',
        'settings'   => 'cep',
        'type'       => 'text',
    ));
}
add_action('customize_register', 'own__customize_register');
