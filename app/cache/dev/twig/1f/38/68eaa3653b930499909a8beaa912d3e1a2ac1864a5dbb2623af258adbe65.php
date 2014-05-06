<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1f3868eaa3653b930499909a8beaa912d3e1a2ac1864a5dbb2623af258adbe65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  227 => 78,  222 => 77,  218 => 76,  215 => 75,  209 => 74,  201 => 72,  195 => 70,  192 => 69,  188 => 68,  183 => 66,  178 => 65,  176 => 64,  173 => 63,  169 => 62,  150 => 56,  144 => 52,  133 => 47,  129 => 46,  123 => 43,  119 => 42,  109 => 41,  105 => 40,  99 => 39,  92 => 37,  75 => 22,  73 => 21,  65 => 16,  57 => 12,  53 => 10,  47 => 9,  37 => 7,  28 => 2,);
    }
}
