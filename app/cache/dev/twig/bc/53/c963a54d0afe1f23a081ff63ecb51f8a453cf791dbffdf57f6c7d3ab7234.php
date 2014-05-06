<?php

/* GCNAFNAFBundle::layoutlogin.html.twig */
class __TwigTemplate_bc53c963a54d0afe1f23a081ff63ecb51f8a453cf791dbffdf57f6c7d3ab7234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'baliseBody' => array($this, 'block_baliseBody'),
            'body' => array($this, 'block_body'),
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>
\t\t";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "\t
\t</head>
";
        // line 17
        $this->displayBlock('baliseBody', $context, $blocks);
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t<!--End block body-->\t\t\t
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t<!-- META -->
\t\t\t<meta content=\"text/html; charset=utf-8\" />\t\t\t
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t\t<meta name=\"description\" content=\"\" />
\t\t\t<meta name=\"author\" content=\"\" />
\t\t\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
\t\t\t<title>
\t\t\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t\t</title>\t\t\t\t
\t\t\t<!-- CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/css/NAFstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_baliseBody($context, array $blocks = array())
    {
        echo " <body> ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    <div id=\"content\" style=\"width: 70%\">\t\t\t
            <div id=\"top\" style=\"width: 99%\">
                <div >
                    <!-- Titre de la page -->
                    <table border='0' width='100%' cellspacing=\"0\" cellepadding=\"0\">
                        <tr class=\"trEntete\" width='100%'>
                        <td class =\"tdEntete\" align='left'>
                            &nbsp;&nbsp;&nbsp;<b>Gestion Congés - Norsys Afrique</b>
                        </td>
                        <td class =\"tdEntete\" align='right' >    
                            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/logo.png"), "html", null, true);
        echo "\" title=\"\" />
                        </td>
                    </tr>
                    </table>                        
                    <!-- Titre de la page -->
            </div>\t\t\t\t
\t</div>
\t<div id=\"page\" style=\"width: 96%\">\t\t
            <h1>";
        // line 37
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1><br/>\t\t\t\t\t
            ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "\t</div>\t\t\t\t
\t<div id=\"footer\" style=\"width: 99%\">
\t<!-- Texte Bas de page à modifier  -->
            @2013-2014 |Norsys Afrique|Gestion congés
\t<!-- Fin Bas de page à modifier  -->
\t</div>\t\t\t\t
    </div>\t\t\t
";
    }

    // line 37
    public function block_titre($context, array $blocks = array())
    {
        echo "Se connecter ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t
            ";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle::layoutlogin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  123 => 37,  112 => 40,  110 => 38,  106 => 37,  95 => 29,  83 => 19,  80 => 18,  74 => 17,  69 => 11,  63 => 14,  59 => 12,  57 => 11,  48 => 4,  45 => 3,  39 => 47,  37 => 18,  35 => 17,  31 => 15,  29 => 3,  25 => 1,  99 => 30,  88 => 24,  79 => 18,  73 => 17,  66 => 13,  60 => 12,  55 => 10,  51 => 9,  47 => 8,  43 => 6,  38 => 5,  34 => 4,  28 => 2,);
    }
}
