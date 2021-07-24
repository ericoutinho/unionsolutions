<?php

// require_once(dir(__FILE__) . "includes/theme-customize.php");

// funcao do formulario
function eContactForm()
{
    // pega variaveis x
    // valida variaveis x
    // tenta enviar email x
    // retorna resultado x

    $empresa = "Union Solutions Serra/ES";
    $website = "unionserraes.com.br";
    $admin_mail = "ericoutinho@gmail.com";
    $status = array( "code" => 200, "data" => array() );

    if ($_POST) {

        $nome            = filter_input(INPUT_POST, 'nome');
        $email           = filter_input(INPUT_POST, 'email');
        $telefone        = filter_input(INPUT_POST, 'telefone');
        $departamento    = filter_input(INPUT_POST, 'departamento');
        $mensagem        = filter_input(INPUT_POST, 'mensagem');
        $data            = date("d/m/Y H:i:s");

        if ( strlen($nome) < 3 ) {
            $status["data"][] = 'nome';
        }

        if ( !preg_match("/^\D[a-z\.\_\d]+@[a-z]+[\.a-z]*\.[a-z]{2,5}$/", $email) ) {
            $status["data"][] = 'email';
        }

        if ( !preg_match("/^.{14,}$/", $telefone) ) {
            $status["data"][] = 'telefone';
        }

        if ( $departamento == "" ) {
            $status["data"][] = 'departamento';
        }

        if ( strlen($mensagem) < 5 ) {
            $status["data"][] = "mensagem";
        }

        if ( count($status["data"]) > 0 ) {
            $status["code"] = 501;
            echo json_encode($status);
            exit();
        }

        $template = file_get_contents( "includes/mail-template-admin.html", FILE_USE_INCLUDE_PATH );
        $search   = array( "@empresa", "@website", "@data", "@email", "@nome", "@departamento", "@telefone", "@mensagem" );
        $replace  = array( $empresa, $website, $data, $email, $nome, $departamento, $telefone, $mensagem );
        $html     = str_replace( $search, $replace, $template );

        $header   = array('Content-Type: text/html; charset=UTF-8');

        if ( wp_mail( $admin_mail, "🔔 Mensagem do site {$website}", $html, $header ) ) {
            $status["code"] = 200;
            echo json_encode($status);
            exit();
        }

        $status["code"] = 502;
        echo json_encode($status);
    }
    exit();
}

add_action('wp_ajax_nopriv_eContactForm', 'eContactForm');
add_action('wp_ajax_eContactForm', 'eContactForm');
