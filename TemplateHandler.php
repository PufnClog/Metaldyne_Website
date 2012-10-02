<?php

    /*Template Handler
     *
     *Handles the templates
     *
     *@Category Metaldyne
     *@Package  Metaldyne Template
     *@Version  1.0
     *@since    1.0
     *
     */

    /*Sets up Twig*/
    require_once 'Handlers/Libs/Template/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('./Pages/Templates');
    $twig = new Twig_Enviroment($loader, array(
            'cache' => './Cache/Compiled',      /*Cached templates will be stored in said file*/
            'auto_reload' => TRUE               /*Twig reloads templates everytime changes are made*/
        ));

    /*Load Template*/
    $template = $twig->loadTemplate('TemplateA.html');

    /*Retrieves Data from model*/
    /*array of data (just to check if this shit works*/
    $datajson = '[{"FirstName": "Zoe", "LastName":Wood"},
                 {"FirstName":"Elliot", "LastName":"Wright"}
                 ]';
    $jsonData = json_decode($datajson, true);

    $template->display(array(
        'pageTitle' => 'metaldyne.co.uk',
        'Names' => $jsonData
    ));
    ?>
