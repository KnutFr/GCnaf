<?php

/* GCNAFNAFBundle:Ressource:listeRessourcePagination.html.twig */
class __TwigTemplate_8d776a5651e34c87c35483cc580f20b53a28ef423b6440c2440347dc8dad2c95 extends Twig_Template
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
    <p id=\"msg\"> => Liste des Salariés</p>\t
    <table border=\"0\"  width=\"100%\">
        <tr valign=\"middle\"  width=\"100%\">
            <td align=\"left\"  width=\"75%\">
                <form  method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " action=\"";
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries_search");
        echo "\">";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                <div>
                <pre id=\"label\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo " <input type=\"submit\" value=\"Go\" /></pre>\t\t\t\t\t
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
                </div>";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
                </form>
            </td>
            <td align=\"right\" width=\"25%\">
                <div>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries_ajouter");
        echo "\">Ajouter un Salarié</a>
                </div>
            </td>
        </tr>
    </table>
    ";
        // line 21
        if ($this->getContext($context, "entities")) {
            // line 22
            echo "        <table border=\"1\" width=\"100%\" id=\"tableau\" summary=\"Liste des salariés\"
            <thead>
            <tr>\t\t\t\t\t\t\t
                <th scope=\"col\" widh=\"15%\"><div align=\"center\" id=\"myip\">Nom            </div></th>\t
                <th scope=\"col\" widh=\"15%\"><div align=\"center\" id=\"myip\">Prénom         </div></th>
                <th scope=\"col\"  widh=\"15%\"><div align=\"center\" id=\"myip\">Profil         </div></th>
                <th scope=\"col\" widh=\"15%\"><div align=\"center\" id=\"myip\">Login          </div></th>\t\t\t\t\t\t\t
                <th scope=\"col\" widh=\"10%\"><div align=\"center\" id=\"myip\">Date d'embauche</div></th>
                <th scope=\"col\" widh=\"10%\"><div align=\"center\" id=\"myip\">Date sortie    </div></th>\t\t\t\t\t\t\t
                <th scope=\"col\" widh=\"10%\"><div align=\"center\" id=\"myip\">CIN            </div></th>
                <th scope=\"col\" widh=\"5%\" ><div align=\"center\" id=\"myip\">Modifier       </div></th>
                <th scope=\"col\" widh=\"5%\" ><div align=\"center\" id=\"myip\">Supprimer      </div></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                echo "\t\t\t\t\t\t
                <tr>
                    <td widh=\"15%\" id=\"myip\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "nom"), "html", null, true);
                echo "</td><td id=\"myip\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "prenom"), "html", null, true);
                echo "</td>
                    <td id=\"myip\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "nomProf"), "html", null, true);
                echo "</td>
                    <td id=\"myip\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "login"), "html", null, true);
                echo "</td><td id=\"myip\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "dateEmb"), "d/m/Y"), "html", null, true);
                echo "</td> 
                    ";
                // line 42
                if (($this->getAttribute($this->getContext($context, "a"), "dateSor") != null)) {
                    // line 43
                    echo "                            <td id=\"myip\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "dateSor"), "d/m/Y"), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 44
                    echo "            
                        <td id=\"myip\"></td>
                    ";
                }
                // line 47
                echo "                    <td id=\"myip\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "cin"), "html", null, true);
                echo "</td>  \t\t\t
                    <td> <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries_modifier", array("id" => $this->getAttribute($this->getContext($context, "a"), "id"))), "html", null, true);
                echo "\">\t\t\t\t\t\t\t
                            <div align=\"center\"> <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/edit.png"), "html", null, true);
                echo "\" title=\"Modifier\" width=\"12\" height=\"12\"> </div> 
                        </a>
                    </td>
                    <td> <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries_supprimer", array("id" => $this->getAttribute($this->getContext($context, "a"), "id"))), "html", null, true);
                echo "\">
                            <div align=\"center\"> <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcnafnaf/images/sup.jpg"), "html", null, true);
                echo "\" title=\"Supprimer\" width=\"12\" height=\"12\"> </div>
                        </a>
                    </td>
                </tr>\t\t\t\t
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            <tbody>
            <tfoot>
                <tr>
                    <td colspan=\"9\">
                        <strong>";
            // line 62
            echo twig_escape_filter($this->env, $this->getContext($context, "Nb_per_affiche"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "total_articles"), "html", null, true);
            echo "</strong> Salariés dans la page ";
            if (($this->getContext($context, "last_page") > 1)) {
                echo " - page <strong>";
                echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
                echo " ";
            }
            echo "</strong>
                    </td>
                </tr>
            </tfoot>                
        </table>
    ";
        } else {
            // line 68
            echo "        Aucun salarié n'a été trouvé <br/><br/>
    ";
        }
        // line 69
        echo "\t\t\t\t
    ";
        // line 70
        if (($this->getContext($context, "last_page") > 1)) {
            // line 71
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries", array("page" => 1));
            echo "\"> Début </a> 
        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"> << </a>\t

        ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 75
                echo "            ";
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 76
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 78
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo " </a>
            ";
                }
                // line 80
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
        <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\">  >> </a> 
        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GCNAFNAFBundle_salaries", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\">  Fin </a>
    ";
        }
        // line 84
        echo "    
    <br/><br/>    
";
    }

    public function getTemplateName()
    {
        return "GCNAFNAFBundle:Ressource:listeRessourcePagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 84,  236 => 83,  232 => 82,  229 => 81,  223 => 80,  215 => 78,  209 => 76,  206 => 75,  202 => 74,  197 => 72,  192 => 71,  190 => 70,  187 => 69,  183 => 68,  164 => 62,  158 => 58,  147 => 53,  143 => 52,  137 => 49,  133 => 48,  128 => 47,  123 => 44,  117 => 43,  115 => 42,  109 => 41,  105 => 40,  99 => 39,  92 => 37,  75 => 22,  73 => 21,  65 => 16,  57 => 11,  53 => 10,  47 => 9,  37 => 7,  28 => 2,);
    }
}
