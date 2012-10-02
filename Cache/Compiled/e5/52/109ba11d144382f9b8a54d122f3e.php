<?php

/* TemplateA.html */
class __TwigTemplate_e552109ba11d144382f9b8a54d122f3e extends Twig_Template
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
        $this->env->loadTemplate("./Base/header.tpl")->display($context);
        // line 2
        echo "
";
        // line 3
        $this->env->loadTemplate("./Base/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "TemplateA.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  17 => 1,);
    }
}
