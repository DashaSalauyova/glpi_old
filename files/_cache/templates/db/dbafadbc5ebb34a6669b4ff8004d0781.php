<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/kanban/item_panels/default_panel.html.twig */
class __TwigTemplate_086c68a4053b393068efe677a05541bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
<div class=\"item-details-panel\" data-itemtype=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["itemtype"] ?? null), "html", null, true);
        echo "\" data-items_id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
   <div class=\"card d-flex flex-column h-100\">
      <div class=\"card-header d-block\">
         <h5 class=\"card-title\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["itemtype"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 38)), "html", null, true);
        echo "\">
               <i class=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon(($context["itemtype"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
        echo "\"></i>
               ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "name", [], "any", false, false, false, 40)), "html", null, true);
        echo "
            </a>
            <button type=\"button\" class=\"btn-link\" onclick=\"\$(this).closest('.item-details-panel').remove()\"><i class=\"ti ti-x\"></i></button>
         </h5>
         <h6 class=\"card-subtitle\">
            ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "is_milestone", [], "any", false, false, false, 45)) {
            // line 46
            echo "               <i class=\"fas fa-map-signs me-2\"></i>";
            echo twig_escape_filter($this->env, __("Milestone"), "html", null, true);
            echo "
            ";
        }
        // line 48
        echo "         </h6>
      </div>
      <div class=\"card-body overflow-auto\">
         ";
        // line 61
        echo "         ";
        echo twig_call_macro($macros["_self"], "macro_print_hook_section", ["pre_kanban_panel_content", ($context["itemtype"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
        echo "
         ";
        // line 62
        echo twig_call_macro($macros["_self"], "macro_print_hook_section", ["pre_kanban_panel_main_content", ($context["itemtype"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
        echo "

         ";
        // line 64
        $context["content"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "content", [], "any", false, false, false, 64));
        // line 65
        echo "         ";
        $context["preview"] = (((twig_length_filter($this->env, ($context["content"] ?? null)) > 1000)) ? ((twig_slice($this->env, ($context["content"] ?? null), 0, 1000) . " (...)")) : (($context["content"] ?? null)));
        // line 66
        echo "         <div class=\"col-12 mb-3 rich_text_container\">";
        echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["preview"] ?? null));
        echo "</div>

         ";
        // line 68
        echo twig_call_macro($macros["_self"], "macro_print_hook_section", ["post_kanban_panel_main_content", ($context["itemtype"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 68)], 68, $context, $this->getSourceContext());
        echo "

         <h5 class=\"d-flex justify-content-between\">
            <span>";
        // line 71
        echo twig_escape_filter($this->env, __("Team"), "html", null, true);
        echo "</span>
            <button type=\"button\" class=\"btn-link kanban-item-edit-team\"><i class=\"fas fa-plus\"></i></button>
         </h5>
         ";
        // line 74
        if ( !twig_test_empty(($context["team"] ?? null))) {
            // line 75
            echo "            ";
            $context["item"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeClass(($context["itemtype"] ?? null));
            // line 76
            echo "            ";
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Teamwork")) {
                // line 77
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTeamRoles", [], "method", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["team_role"]) {
                    // line 78
                    echo "                  ";
                    $context["role_members"] = twig_array_filter($this->env, ($context["team"] ?? null), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (twig_get_attribute($this->env, $this->source, ($context["m"] ?? null), "role", [], "any", false, false, false, 78) == $context["team_role"]); });
                    // line 79
                    echo "                  ";
                    if ((twig_length_filter($this->env, ($context["role_members"] ?? null)) > 0)) {
                        // line 80
                        echo "                     <h5>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTeamRoleName", [0 => $context["team_role"], 1 => Session::getPluralNumber()], "method", false, false, false, 80), "html", null, true);
                        echo "</h5>
                     <ul class=\"list-group team-list\" data-role=\"";
                        // line 81
                        echo twig_escape_filter($this->env, $context["team_role"], "html", null, true);
                        echo "\">
                        ";
                        // line 82
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["role_members"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["team_member"]) {
                            // line 83
                            echo "                           <li class=\"list-group-item d-flex justify-content-between p-2\" data-itemtype=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team_member"], "itemtype", [], "any", false, false, false, 83), "html", null, true);
                            echo "\"
                               data-items_id=\"";
                            // line 84
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team_member"], "items_id", [], "any", false, false, false, 84), "html", null, true);
                            echo "\"
                               data-name=\"";
                            // line 85
                            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(((twig_get_attribute($this->env, $this->source, $context["team_member"], "display_name", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["team_member"], "display_name", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, $context["team_member"], "name", [], "any", false, false, false, 85))) : (twig_get_attribute($this->env, $this->source, $context["team_member"], "name", [], "any", false, false, false, 85)))), "html", null, true);
                            echo "\"
                               data-firstname=\"";
                            // line 86
                            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, $context["team_member"], "firstname", [], "any", false, false, false, 86)), "html", null, true);
                            echo "\"
                               data-realname=\"";
                            // line 87
                            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, $context["team_member"], "realname", [], "any", false, false, false, 87)), "html", null, true);
                            echo "\">
                              ";
                            // line 89
                            echo "                           </li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team_member'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "                     </ul>
                  ";
                    }
                    // line 93
                    echo "               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team_role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "            ";
            }
            // line 95
            echo "         ";
        } else {
            // line 96
            echo "            ";
            echo twig_escape_filter($this->env, __("No team members"), "html", null, true);
            echo "
         ";
        }
        // line 98
        echo "         <hr>

         ";
        // line 100
        echo twig_call_macro($macros["_self"], "macro_print_hook_section", ["post_kanban_panel_content", ($context["itemtype"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 100)], 100, $context, $this->getSourceContext());
        echo "
      </div>
      <div class=\"card-footer border-top flex-shrink-0 text-center p-3\">
         <a class=\"btn btn-outline w-100\" target=\"_blank\" rel=\"noopener\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["itemtype"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item_fields"] ?? null), "id", [], "any", false, false, false, 103)), "html", null, true);
        echo "\">
            <span class=\"pr-1\">";
        // line 104
        echo twig_escape_filter($this->env, __("Open full form"), "html", null, true);
        echo "</span>
         </a>
      </div>
   </div>
</div>
";
    }

    // line 51
    public function macro_print_hook_section($__name__ = null, $__itemtype__ = null, $__items_id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "itemtype" => $__itemtype__,
            "items_id" => $__items_id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 52
            echo "            ";
            $context["content"] = $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHookFunction(($context["name"] ?? null), ["itemtype" =>             // line 53
($context["itemtype"] ?? null), "items_id" =>             // line 54
($context["items_id"] ?? null)], true);
            // line 56
            echo "            ";
            if (( !twig_test_empty(($context["content"] ?? null)) &&  !twig_test_empty(twig_trim_filter((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["content"] ?? null) : null))))) {
                // line 57
                echo "               ";
                echo (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null);
                echo "
               <hr>
            ";
            }
            // line 60
            echo "         ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/kanban/item_panels/default_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 60,  243 => 57,  240 => 56,  238 => 54,  237 => 53,  235 => 52,  220 => 51,  210 => 104,  206 => 103,  200 => 100,  196 => 98,  190 => 96,  187 => 95,  184 => 94,  178 => 93,  174 => 91,  167 => 89,  163 => 87,  159 => 86,  155 => 85,  151 => 84,  146 => 83,  142 => 82,  138 => 81,  133 => 80,  130 => 79,  127 => 78,  122 => 77,  119 => 76,  116 => 75,  114 => 74,  108 => 71,  102 => 68,  96 => 66,  93 => 65,  91 => 64,  86 => 62,  81 => 61,  76 => 48,  70 => 46,  68 => 45,  60 => 40,  54 => 39,  50 => 38,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/kanban/item_panels/default_panel.html.twig", "C:\\xampp\\htdocs\\glpi_old\\templates\\components\\kanban\\item_panels\\default_panel.html.twig");
    }
}
