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

/* pages/login.html.twig */
class __TwigTemplate_31786347100fe4552677c6db65b8f78d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />

      <div class=\"row justify-content-center\">
         <div class=\"col-md-5\">

            <h2 class=\"card-header text-center mb-4\">";
        // line 45
        echo twig_escape_filter($this->env, __("Login to your account"), "html", null, true);
        echo "</h2>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
        // line 47
        echo twig_escape_filter($this->env, __("Login"), "html", null, true);
        echo "</label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["namfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\">
                  ";
        // line 52
        echo twig_escape_filter($this->env, __("Password"), "html", null, true);
        echo "

                  ";
        // line 54
        if (($context["show_lost_password"] ?? null)) {
            // line 55
            echo "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            echo "\">
                           ";
            // line 57
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "
                        </a>
                     </span>
                  ";
        }
        // line 61
        echo "               </label>
               <input type=\"password\" class=\"form-control\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["pwdfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 65
        if (twig_constant("GLPI_DEMO_MODE")) {
            // line 66
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 67
            echo twig_escape_filter($this->env, __("Language"), "html", null, true);
            echo "</label>
                  ";
            // line 68
            echo ($context["languages_dropdown"] ?? null);
            echo "
               </div>
            ";
        }
        // line 71
        echo "
            ";
        // line 72
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) {
            // line 73
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 74
            echo twig_escape_filter($this->env, __("Login source"), "html", null, true);
            echo "</label>
                  ";
            // line 75
            echo ($context["auth_dropdown_login"] ?? null);
            echo "
               </div>
            ";
        }
        // line 78
        echo "
            ";
        // line 79
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 80
            echo "               <div class=\"mb-2\">
                  <label class=\"form-check\">
                     <input type=\"checkbox\" class=\"form-check-input\" name=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["rmbfield"] ?? null), "html", null, true);
            echo "\" ";
            echo (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            echo " />
                     <span class=\"form-check-label\">";
            // line 83
            echo twig_escape_filter($this->env, __("Remember me"), "html", null, true);
            echo "</span>
                  </label>
               </div>
            ";
        }
        // line 87
        echo "
            <div class=\"form-footer\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 90
        echo twig_escape_filter($this->env, __("Sign in"), "html", null, true);
        echo "
               </button>
            </div>

            ";
        // line 94
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 95
            echo "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 97
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 100
        echo "         </div>

         ";
        // line 102
        if (($context["right_panel"] ?? null)) {
            // line 103
            echo "            <div class=\"col-auto offset-md-1 p-2 text-center\">
               ";
            // line 104
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 105
                echo "                  <div class=\"rich_text_container\">
                     ";
                // line 106
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                  </div>
               ";
            }
            // line 109
            echo "
               ";
            // line 110
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 111
                echo "                  <hr />

                  <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                     <i class=\"fas fa-question\"></i>&nbsp;
                     ";
                // line 115
                echo twig_escape_filter($this->env, __("FAQ"), "html", null, true);
                echo "
                  </a>
               ";
            }
            // line 118
            echo "
               <hr />

               ";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 124
        echo "      </div>
   </form>
";
    }

    // line 128
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "   ";
        echo ($context["copyright_message"] ?? null);
        echo "
";
    }

    // line 132
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 133,  263 => 132,  256 => 129,  252 => 128,  246 => 124,  240 => 121,  235 => 118,  229 => 115,  223 => 111,  221 => 110,  218 => 109,  212 => 106,  209 => 105,  207 => 104,  204 => 103,  202 => 102,  198 => 100,  192 => 97,  188 => 95,  186 => 94,  179 => 90,  174 => 87,  167 => 83,  161 => 82,  157 => 80,  155 => 79,  152 => 78,  146 => 75,  142 => 74,  139 => 73,  137 => 72,  134 => 71,  128 => 68,  124 => 67,  121 => 66,  119 => 65,  113 => 62,  110 => 61,  103 => 57,  99 => 56,  96 => 55,  94 => 54,  89 => 52,  82 => 48,  78 => 47,  73 => 45,  65 => 40,  61 => 39,  57 => 38,  52 => 37,  48 => 36,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "C:\\xampp\\htdocs\\glpi_old\\templates\\pages\\login.html.twig");
    }
}
