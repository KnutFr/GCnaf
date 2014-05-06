<?php

/* GCNAFNAFBundle:Ressource:editerRessource.html.twig */
class __TwigTemplate_1186b0c2ec365bb0ad3cc2761a64b7eb9dac46d8a9c40789a73fd2c3a2bc60fa extends Twig_Template
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
        echo "\t\t\t
    <p id=\"msg\"> => Modifier un Salarié</p>
    <div align=\"center\" >\t\t\t\t\t\t\t
        ";
        // line 5
        if ($this->getContext($context, "message")) {
            echo "<p><font color=\"#FF00FF\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</font></p>";
        }
        echo "\t\t\t\t\t
        <form  method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " >\t\t\t\t\t
            ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            <div>
                <p class=\"double2\" >";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cin"), 'label');
        echo "\t   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cin"), 'widget');
        echo "</p>\t\t\t\t\t
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cin"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>
            <br/>
            <div>
                <p class=\"double2\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label');
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "</p>
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>\t\t\t\t\t\t\t
            <div>
                <p class=\"double\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'label');
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo "</p>
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>\t\t\t\t\t\t
            <br/>
            <div>
                <p class=\"double\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "login"), 'label');
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "login"), 'widget');
        echo "</p>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "login"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>
            <div>
                <p class=\"double\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pwd"), 'label');
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pwd"), 'widget');
        echo "</p>\t\t\t\t\t
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pwd"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>
            <br/>
            <div>
                <p class=\"double\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEmb"), 'label');
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEmb"), 'widget');
        echo "</p>\t\t\t\t\t
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEmb"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>
            <div>
                <p class=\"double\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateSor"), 'label');
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateSor"), 'widget');
        echo "</p>\t\t\t\t\t
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateSor"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
            </div>            
            <br/>            
            <div>
                <p class=\"double\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mail"), 'label');
        echo "       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mail"), 'widget');
        echo "</p>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mail"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>
            <div>
                <p class=\"double\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idProf"), 'label');
        echo "         ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idProf"), 'widget');
        echo "</p>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idProf"), 'errors');
        echo "\t\t\t\t\t\t\t\t
            </div>
            <br/>            
            <table border=\"0\" align=\"center\">
                <tr>                    
                    <td width=\"100px\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "btnModifier"), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "btnModifier"), 'widget');
        echo "</td>
                    <td></td>
                </tr>
            </table>
                ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "\t\t\t\t\t
        </form>\t<br/>
        <p><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries");
        echo "\">Retour à la liste des salariés</a></p>\t\t\t
    </div>\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle:Ressource:editerRessource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 61,  182 => 59,  173 => 55,  165 => 50,  159 => 49,  152 => 45,  146 => 44,  139 => 40,  133 => 39,  127 => 36,  121 => 35,  114 => 31,  108 => 30,  101 => 26,  95 => 25,  88 => 21,  82 => 20,  75 => 16,  69 => 15,  62 => 11,  56 => 10,  51 => 8,  47 => 7,  43 => 6,  35 => 5,  28 => 2,);
    }
}
