<?php

/* ./Base/head.tpl */
class __TwigTemplate_89f0b6bce423eafd46b4bdd6cf803971 extends Twig_Template
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
        echo "<title>";
        if (isset($context["pageTitle"])) { $_pageTitle_ = $context["pageTitle"]; } else { $_pageTitle_ = null; }
        echo twig_escape_filter($this->env, $_pageTitle_, "html", null, true);
        echo "</title>";
    }

    public function getTemplateName()
    {
        return "./Base/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  22 => 4,  80 => 38,  73 => 35,  66 => 30,  53 => 28,  48 => 27,  33 => 14,  31 => 13,  17 => 1,);
    }
}
