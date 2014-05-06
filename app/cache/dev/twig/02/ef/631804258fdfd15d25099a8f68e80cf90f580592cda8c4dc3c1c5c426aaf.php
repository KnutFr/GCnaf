<?php

/* GCNAFNAFBundle:Accueil:index.html.twig */
class __TwigTemplate_02ef631804258fdfd15d25099a8f68e80cf90f580592cda8c4dc3c1c5c426aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GCNAFNAFBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GCNAFNAFBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t
    <div align=\"center\">\t
        ";
        // line 4
        if ($this->getContext($context, "message")) {
            echo "\t\t\t\t
            <p id=\"msg\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "\t\t\t\t
        <br/>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  38 => 5,  34 => 4,  28 => 2,);
    }
}
