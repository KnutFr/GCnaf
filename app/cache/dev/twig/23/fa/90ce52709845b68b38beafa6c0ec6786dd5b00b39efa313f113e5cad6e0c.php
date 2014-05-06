<?php

/* GCNAFNAFBundle:Password:index.html.twig */
class __TwigTemplate_23fa90ce52709845b68b38beafa6c0ec6786dd5b00b39efa313f113e5cad6e0c extends Twig_Template
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
        echo "\t
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
        <form  method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">\t\t\t\t\t
            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            <div >
                <p class=\"double\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "oldPassword"), 'label');
        echo "       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "oldPassword"), 'widget');
        echo "</p>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "oldPassword"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>
            <div >
                <p class=\"double\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "newPassword"), 'label');
        echo "       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "newPassword"), 'widget');
        echo "</p>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "newPassword"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>
            <div >
                <p class=\"double\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "confirmPassword"), 'label');
        echo "       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "confirmPassword"), 'widget');
        echo "</p>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "confirmPassword"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>            
            <div >
                <table border=\"0\" align=\"center\">
                    <tr>                    
                        <td width=\"100px\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "btnChange"), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "btnChange"), 'widget');
        echo "</td>
                        <td></td>
                    </tr>
                </table>                
            </div>    
            <br/>
           ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "\t\t\t\t\t
        </form>\t
    </div>\t\t\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle:Password:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  101 => 29,  92 => 23,  86 => 22,  79 => 18,  73 => 17,  66 => 13,  60 => 12,  55 => 10,  51 => 9,  47 => 8,  43 => 6,  38 => 5,  34 => 4,  28 => 2,);
    }
}
