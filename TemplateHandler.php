<?php


	/**
	 * Template Handler
	 *
	 * Handles the templates
	 *
	 * @Category Metaldyne
	 * @Package  Metaldyne Template
	 * @Version  1.0
	 * @since    1.0
	 * :)
	 */

	/**
	 * Set up Twig Environment:
	 */
	require_once 'Handlers/Libs/Template/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('./Pages/Templates');
	$twig = new Twig_Environment($loader, array(
		'cache'       => './Cache/Compiled',         /*Cached templates will be stored in said file*/
		'auto_reload' => TRUE                       /*Twig reloads templates everytime changes are made*/
	));

	/**
	 * Load Template:
	*/
	$template = $twig->loadTemplate('home.html');


	$names = array(
		0 => array(
			'firstName' => 'Zoe',
			'lastName'  => 'Wood'
		),
		1 => array(
			'firstName' => 'Elliot',
			'lastName'  => 'Wright'
		)
	);

	$template->display(array(
		'names'     => $names,
		'pageTitle' => 'Home | Metaldyne',
		'testVar'   => 'I <em>am</em> a test <strong>variable</strong>!'
	));
