<?php

/* Index.html */
class __TwigTemplate_217dbeea66bd1cc95ea981bbeab5e5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
    <head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "    </head>
    <body>
        <div id=\"content\">";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
        </div>
    </body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "Index.html";
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  43 => 4,  40 => 3,  26 => 6,  24 => 3,  72 => 21,  58 => 10,  52 => 8,  45 => 5,  39 => 3,  35 => 8,  32 => 7,  30 => 8,  25 => 3,  20 => 1,);
    }
}
