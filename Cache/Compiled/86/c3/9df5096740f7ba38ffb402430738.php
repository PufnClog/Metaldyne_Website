<?php

/* home.html */
class __TwigTemplate_86c39df5096740f7ba38ffb402430738 extends Twig_Template
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
        echo "<!--
\tAlright, this is obviously your main template file for the homepage. The idea is kind of similar to how master pages work.
\tIt has a bit of a twist though, you have to wrap the header and footer around your content yourself, not just replace
\tcontent. This is the most flexible way of doing things because you are able to use the least amount of templates possible
\tto make the same content.

\tFor example, you can use the exact same header across all your pages and just assign a different title variable value for
\teach page. Simple eh?
-->



";
        // line 13
        $this->env->loadTemplate("./Base/header.tpl")->display($context);
        // line 14
        echo "
<div>
\t<h1>Your main stuff goes here!</h1>
\t<ul>
\t\t<!--
\t\t\tTwig is a bit weird, but it does seem pretty neat actually. When you use logic in your templates you use the
\t\t    { % (whatever logic) % } like that (without the spaces before the first % and after the last %). You can see
\t\t    this in the for loop used below:

\t\t\tWhen you call a variable on the other hand, you use the { { (var name) } } (once again without the spaces
\t\t    between the 2 {'s'and }'s). You can access arrays by just putting a dot and the array key, like so:
\t\t-->

\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["names"]) ? $context["names"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 28
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "lastName"), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t</ul>

\t<!--
\t\tIf you want to include HTML in the variables, do so by using the raw option:
\t-->
\t<p>";
        // line 35
        echo (isset($context["testVar"]) ? $context["testVar"] : null);
        echo "</p>
</div>

";
        // line 38
        $this->env->loadTemplate("./Base/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 38,  70 => 35,  63 => 30,  52 => 28,  48 => 27,  33 => 14,  31 => 13,  17 => 1,);
    }
}
