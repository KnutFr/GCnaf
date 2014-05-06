<?php

/* GCNAFNAFBundle::layout.html.twig */
class __TwigTemplate_9b652892e3679f7f1bf547801c95b38b4f15caa325ec98d174f814d85980afd1 extends Twig_Template
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
            'menu' => array($this, 'block_menu'),
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    
        ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "\t
</head>

<!-- Définir le profil début -->    
";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "profilCod"), "method") == "admin")) {
            // line 31
            echo "    ";
            $context["Mytitre"] = "Espace Administrateur -";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "profilCod"), "method") == "chef")) {
            // line 33
            echo "    ";
            $context["Mytitre"] = "Espace Chef d équipe -";
        } else {
            // line 35
            echo "    ";
            $context["Mytitre"] = "Espace Utilisateur -";
        }
        // line 37
        echo "<!-- Définir le profil fin-->    
";
        // line 38
        $this->displayBlock('baliseBody', $context, $blocks);
        // line 39
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "\t<!--End block body-->\t\t\t
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "            <!-- META -->
            <meta content=\"text/html; charset=utf-8\" />\t\t\t
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
            <meta name=\"description\" content=\"\" />
            <meta name=\"author\" content=\"\" />
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
            <title>
            ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        </title>\t\t\t\t
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/css/NAFstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
        <!-- Script JS -->
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/js/jquery.js"), "html", null, true);
        echo "\"  /></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/js/jquery-maskedinput-1-3-min.js"), "html", null, true);
        echo "\" /></script>

    <script type=\"text/javascript\">
        jQuery(function(\$){
           \$(\"#date\").mask(\"99/99/9999\");
        });
    </script>

";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Norsys Afrique - Gestion des congés";
    }

    // line 38
    public function block_baliseBody($context, array $blocks = array())
    {
        echo " <body> ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "        <div id=\"content\" >\t\t\t
            <div id=\"top\" >
                <div >
                    <!-- Titre de la page -->
                    <table border='0' width='100%' cellspacing=\"0\" cellepadding=\"0\">
                        <tr class=\"trEntete\" width='100%'>
                        <td class =\"tdEntete\" align='left'>
                            &nbsp;&nbsp;&nbsp;<b>Gestion Congés - Norsys Afrique</b>
                        </td>
                        <td class =\"tdEntete\" align='right' >    
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/logo.png"), "html", null, true);
        echo "\" title=\"\" />
                        </td>
                    </tr>
                    </table>                        
                    <!-- Titre de la page -->
                </div>\t\t\t\t
            </div>
            ";
        // line 57
        $this->displayBlock('menu', $context, $blocks);
        // line 80
        echo "            <div id=\"page\" >\t\t
                <h1>
         ";
        // line 82
        $this->displayBlock('titre', $context, $blocks);
        // line 96
        echo "                </h1>
                <br/>\t\t\t\t\t
                ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "            </div>\t\t\t\t
            <div id=\"footer\" >
                <!-- Texte Bas de page à modifier  -->
                @2014-2015 |Norsys Afrique|Gestion congés
                <!-- Fin Bas de page à modifier  -->
            </div>\t\t\t\t
        </div>\t\t\t
    ";
    }

    // line 57
    public function block_menu($context, array $blocks = array())
    {
        // line 58
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "profilCod"), "method") == "admin")) {
            // line 59
            echo "                    <ul id=\"menu\" >
                        <li class=\"menu\"><a href=\"#\" >Demandes Congés</a></li>
                        <li class=\"menu\"><a href=\"#\" >Gestion Compteurs</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries");
            echo "\" >Gestion Salariés</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_jours");
            echo "\" >Jours Fériés</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_chef_equipe");
            echo "\" >Affectation Equipe</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_change_password");
            echo "\" >Changement mot de passe</a></li>
                    </ul>
                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "profilCod"), "method") == "chef")) {
            // line 67
            echo "    
                    <ul id=\"menu\" >
                        <li class=\"menu\"><a href=\"#\" >Demandes Congés</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries");
            echo "\" >Gestion Salariés</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_change_password");
            echo "\" >Changement mot de passe</a></li>
                    </ul>
                ";
        } else {
            // line 74
            echo "                    <ul id=\"menu\" >
                        <li class=\"menu\"><a href=\"#\" >Demandes Congés</a></li>
                        <li class=\"menu\"><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_change_password");
            echo "\" >Changement mot de passe</a></li>
                    </ul>
                ";
        }
        // line 79
        echo "            ";
    }

    // line 82
    public function block_titre($context, array $blocks = array())
    {
        echo " 
                    <table border='0' width='100%'>
                    <tr>
                        <td class=\"tdtitre\">        
                            ";
        // line 86
        if ($this->getContext($context, "Mytitre")) {
            echo twig_escape_filter($this->env, $this->getContext($context, "Mytitre"), "html", null, true);
            echo " ";
        }
        echo "  
                            ";
        // line 87
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "nom"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
            echo " ";
        }
        // line 88
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "prenom"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "prenom"), "method"), "html", null, true);
        }
        echo "                     
                        </td>
                        <td align='right'>    
                            <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_goout");
        echo "\" >Déconnecter</a>
                        </td>
                    </tr>
                    </table>
                ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t
                ";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 98,  259 => 91,  250 => 88,  245 => 87,  238 => 86,  230 => 82,  226 => 79,  220 => 76,  216 => 74,  210 => 71,  206 => 70,  201 => 67,  195 => 65,  191 => 64,  187 => 63,  183 => 62,  178 => 59,  175 => 58,  172 => 57,  161 => 100,  159 => 98,  155 => 96,  153 => 82,  149 => 80,  147 => 57,  137 => 50,  125 => 40,  122 => 39,  116 => 38,  110 => 11,  97 => 18,  93 => 17,  88 => 15,  84 => 14,  80 => 12,  78 => 11,  69 => 4,  66 => 3,  60 => 107,  57 => 39,  55 => 38,  52 => 37,  48 => 35,  44 => 33,  40 => 31,  38 => 30,  32 => 26,  30 => 3,  26 => 1,);
    }
}
