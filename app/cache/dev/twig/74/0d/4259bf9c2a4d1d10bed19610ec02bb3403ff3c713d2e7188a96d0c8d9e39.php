<?php

/* GCNAFNAFBundle:AffecterChef:index.html.twig */
class __TwigTemplate_740d4259bf9c2a4d1d10bed19610ec02bb3403ff3c713d2e7188a96d0c8d9e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GCNAFNAFBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'menu' => array($this, 'block_menu'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion Congés NAF";
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo "Espace Administrateur - L'Affectation des Salariés ";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        echo "\t\t\t\t\t\t\t\t\t
    <div id=\"menu\">
        <ul>\t\t\t\t
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_demandes_conges");
        echo "\" >Demandes Congés</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_compteur_solde");
        echo "\" >Gestion Compteurs</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries");
        echo "\" >Gestion Salariés</a></li>\t\t\t\t\t\t\t
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_jours");
        echo "\" >Jours Fériés</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_chef_equipe");
        echo "\" >Chef d'Equipe</a></li>\t\t\t\t\t\t\t\t\t\t
        </ul>
    </div>\t\t\t\t\t
    <div id=\"menu3\">
        <ul><li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_goout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/out.jpg"), "html", null, true);
        echo "\" width=\"108\" height=\"33\"></a></li></ul>
    </div>\t\t\t\t\t\t
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        echo "\t
    <form  method=\"post\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        <table border=\"0\">
            <tr>\t\t\t\t\t\t\t
                <td id=\"label\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idSalarie"), 'label');
        echo "</td>
                <td>\t\t\t\t\t\t\t
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idSalarie"), 'errors');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idSalarie"), 'widget');
        echo "
                </td><td><pre>  </pre></td>\t
                <td id=\"label\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idChef"), 'label');
        echo "</td>
                <td>\t\t\t\t\t\t\t
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idChef"), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idChef"), 'widget');
        echo "
                </td>\t
            </tr>\t\t\t\t\t\t\t
            <tr>
                <td id=\"label\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "projet"), 'label');
        echo "</td>
                <td>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "projet"), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "projet"), 'widget');
        echo "
                </td><td><pre>  </pre></td>
                <td id=\"label\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateD"), 'label');
        echo "</td>
                <td>
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateD"), 'errors');
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateD"), 'widget');
        echo "
                </td>\t\t\t\t\t\t\t\t
            </tr>
        </table>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
        <input type=\"submit\" value=\"Ajouter\"/>
        ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "\t\t\t\t\t
    </form><br/><br/>

    <p id=\"msg\"> => Liste Salarié-Chef d'équipe:</p>
    ";
        // line 52
        if ($this->getContext($context, "entities")) {
            // line 53
            echo "
        <form  method=\"post\" ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formSearch"), 'enctype');
            echo " action=\"";
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_chef_equipe_searchs");
            echo "\">";
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "formSearch"), 'form_start');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formSearch"), 'errors');
            echo "
            <div><pre id=\"label\">";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formSearch"), "idSalarie"), 'label');
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formSearch"), "idSalarie"), 'widget');
            echo "<input type=\"submit\" value=\"Go\" /></pre>\t\t\t\t\t
                ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formSearch"), "idSalarie"), 'errors');
            echo "</div>";
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "formSearch"), 'form_end');
            echo "</form><br/>\t\t\t

        <table border=\"1\" id=\"tabstl2\">
            <tr>
                <td bgcolor=\"#FFCC99\"><font color=\"#CC0000\"><div align=\"center\" id=\"myip\">Salarié  </div></font></td>
                <td bgcolor=\"#FFCC99\"><font color=\"#CC0000\"><div align=\"center\" id=\"myip\">Chef d'équipe </div></font></td>\t
                <td bgcolor=\"#FFCC99\"><font color=\"#CC0000\"><div align=\"center\" id=\"myip\">Date appartenance </div></font></td>
                <td bgcolor=\"#FFCC99\"><font color=\"#CC0000\"><div align=\"center\" id=\"myip\">Date Fin</div></font></td>
                <td bgcolor=\"#FFCC99\"><font color=\"#CC0000\"><div align=\"center\" id=\"myip\">Projet</div></font></td>\t\t\t\t\t\t\t
                <td bgcolor=\"#FFCC99\"><font color=\"#CC0000\"><div align=\"center\" id=\"myip\">Supprimer</div></font></td>
            </tr>
            ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 68
                echo "                <tr>
                    <td id=\"myip\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
                echo "</td>
                    <td id=\"myip\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idChef"), "html", null, true);
                echo " </td>\t\t\t\t\t\t\t
                    <td id=\"myip\">";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateD"), "Y-m-d"), "html", null, true);
                echo "</td>\t
                    ";
                // line 72
                if (($this->getAttribute($this->getContext($context, "entity"), "dateF") == null)) {
                    // line 73
                    echo "                        <td id=\"myip\">NULL</td>\t
                    ";
                } else {
                    // line 75
                    echo "                        <td id=\"myip\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateF"), "Y-m-d"), "html", null, true);
                    echo "</td>\t
                    ";
                }
                // line 77
                echo "                    <td id=\"myip\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "projet"), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t
                    <td id=\"myip\"><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_chef_equipe_supp", array("id" => $this->getAttribute($this->getContext($context, "entity"), "ref"))), "html", null, true);
                echo "\">
                            <div align=\"center\"><img src=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/sup.jpg"), "html", null, true);
                echo "\" title=\"Supprimer\" width=\"12\" height=\"12\"></div>
                        </a></td>
                </tr>\t\t\t\t
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </table>
    ";
        } else {
            // line 84
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/info.jpg"), "html", null, true);
            echo "\" width=\"24\" height=\"24\"> Aucun salarié n'a encore été affecté dans une équipe!<br/><br/>
    ";
        }
        // line 85
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle:AffecterChef:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 85,  256 => 84,  252 => 83,  242 => 79,  238 => 78,  233 => 77,  227 => 75,  223 => 73,  221 => 72,  217 => 71,  213 => 70,  207 => 69,  204 => 68,  200 => 67,  184 => 56,  178 => 55,  169 => 54,  166 => 53,  164 => 52,  157 => 48,  149 => 43,  145 => 42,  140 => 40,  135 => 38,  131 => 37,  126 => 35,  119 => 31,  115 => 30,  110 => 28,  105 => 26,  101 => 25,  96 => 23,  87 => 20,  82 => 19,  73 => 15,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  43 => 4,  37 => 3,  31 => 2,);
    }
}
