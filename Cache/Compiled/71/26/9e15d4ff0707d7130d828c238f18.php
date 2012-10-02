<?php

/* ./Base/header.tpl */
class __TwigTemplate_71269e15d4ff0707d7130d828c238f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t";
        // line 4
        $this->env->loadTemplate("./Base/head.tpl")->display($context);
        // line 5
        echo "\t</head>
\t<body>
\t\t<div id=\"content\">
";
    }

    public function getTemplateName()
    {
        return "./Base/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  22 => 4,  17 => 1,);
    }
}
