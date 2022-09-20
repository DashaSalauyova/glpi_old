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

/* generic_show_form.html.twig */
class __TwigTemplate_e6685b9eebcaa5ee0ebd2af64dbdb299 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "generic_show_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["bg"] = "";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 37)) {
            // line 38
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        echo "
<div class=\"asset ";
        // line 41
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 42
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "

   ";
        // line 44
        $context["rand"] = twig_random($this->env);
        // line 45
        echo "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 46
        echo "   ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 46) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 46)));
        // line 47
        echo "   ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 48
        echo "   ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 48);
        // line 49
        echo "   ";
        $context["item_has_pictures"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 49);
        // line 50
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 51)];
        // line 53
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 55
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 59
        $this->displayBlock('form_fields', $context, $blocks);
        // line 634
        echo "               </div> ";
        // line 635
        echo "            </div> ";
        // line 636
        echo "         </div> ";
        // line 637
        echo "      </div>
      ";
        // line 638
        if (($context["item_has_pictures"] ?? null)) {
            // line 639
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 641
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 645
        echo "   </div> ";
        // line 646
        echo "
   ";
        // line 647
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 648
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 650
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 651
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 652
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 654
        echo "
   ";
        // line 655
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 656
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 657
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 660
        echo "</div>
";
    }

    // line 59
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "name"], "method", false, false, false, 60)) {
            // line 61
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",             // line 63
($context["item"] ?? null), (((            // line 64
($context["item_type"] ?? null) == "Contact")) ? (__("Surname")) : (__("Name"))),             // line 65
($context["withtemplate"] ?? null),             // line 66
($context["field_options"] ?? null)], 61, $context, $this->getSourceContext());
            // line 67
            echo "
                     ";
        }
        // line 69
        echo "
                     ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "firstname"], "method", false, false, false, 70)) {
            // line 71
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["firstname",             // line 73
($context["item"] ?? null), __("First name"),             // line 75
($context["withtemplate"] ?? null),             // line 76
($context["field_options"] ?? null)], 71, $context, $this->getSourceContext());
            // line 77
            echo "
                     ";
        }
        // line 79
        echo "
                     ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 80)) {
            // line 81
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 82
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 82, $context, $this->getSourceContext());
                // line 84
                echo "
                        ";
            } else {
                // line 86
                echo "                        ";
            }
            // line 87
            echo "                     ";
        }
        // line 88
        echo "
                     ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 89)) {
            // line 90
            echo "                        ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 90), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 90))) => 1]) : ([]));
            // line 91
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 96
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 97
($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 98
($context["condition"] ?? null)])], 91, $context, $this->getSourceContext());
            // line 100
            echo "
                     ";
        }
        // line 102
        echo "
                     ";
        // line 103
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 103);
        // line 104
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 104)) {
            // line 105
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 106
($context["item_type"] ?? null),             // line 107
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), twig_array_merge(            // line 110
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 111
($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 105, $context, $this->getSourceContext());
            // line 113
            echo "
                     ";
        }
        // line 115
        echo "
                     ";
        // line 116
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 116))) {
            // line 117
            echo "                        ";
            // line 118
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 122
($context["field_options"] ?? null)], 118, $context, $this->getSourceContext());
            // line 123
            echo "
                     ";
        }
        // line 125
        echo "
                     ";
        // line 126
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 126)) : ([]));
        // line 127
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 128
            echo "                        ";
            ob_start(function () { return ''; });
            // line 129
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 131
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 135
            echo "
                        ";
            // line 136
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 138
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 136, $context, $this->getSourceContext());
            // line 140
            echo "

                        ";
            // line 142
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 142, $context, $this->getSourceContext());
            echo " ";
            // line 143
            echo "                     ";
        }
        // line 144
        echo "
                     ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 145)) {
            // line 146
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 149
($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 151
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 152
($context["item"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null)])], 146, $context, $this->getSourceContext());
            // line 154
            echo "
                     ";
        }
        // line 156
        echo "
                     ";
        // line 157
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 157))) {
            // line 158
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 160
($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"],             // line 165
($context["field_options"] ?? null)], 158, $context, $this->getSourceContext());
            // line 166
            echo "
                     ";
        }
        // line 168
        echo "
                     ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 169)) {
            // line 170
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 170)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 170, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 172
        echo "
                     ";
        // line 173
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 173);
        // line 174
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 174);
        // line 175
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 175)) {
            // line 176
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 177
($context["type_itemtype"] ?? null),             // line 178
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 179
($context["item"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1),             // line 181
($context["field_options"] ?? null)], 176, $context, $this->getSourceContext());
            // line 182
            echo "
                     ";
        }
        // line 184
        echo "
                     ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 185)) {
            // line 186
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 189
($context["item"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), twig_array_merge(            // line 191
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 192
($context["item"] ?? null), "fields", [], "any", false, false, false, 192)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 186, $context, $this->getSourceContext());
            // line 194
            echo "
                     ";
        }
        // line 196
        echo "
                     ";
        // line 197
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "registration_number"], "method", false, false, false, 197)) {
            // line 198
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["registration_number",             // line 200
($context["item"] ?? null), (((is_string($__internal_compile_19 =             // line 201
($context["item_type"] ?? null)) && is_string($__internal_compile_20 = "User") && ('' === $__internal_compile_20 || 0 === strpos($__internal_compile_19, $__internal_compile_20)))) ? (_x("user", "Administrative number")) : (_x("infocom", "Administrative number"))),             // line 202
($context["withtemplate"] ?? null),             // line 203
($context["field_options"] ?? null)], 198, $context, $this->getSourceContext());
            // line 204
            echo "
                     ";
        }
        // line 206
        echo "
                     ";
        // line 207
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 207)) {
            // line 208
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 210
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 212
($context["withtemplate"] ?? null),             // line 213
($context["field_options"] ?? null)], 208, $context, $this->getSourceContext());
            // line 214
            echo "
                     ";
        }
        // line 216
        echo "
                     ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 217)) {
            // line 218
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 220
($context["item"] ?? null), __("Phone 2"),             // line 222
($context["withtemplate"] ?? null),             // line 223
($context["field_options"] ?? null)], 218, $context, $this->getSourceContext());
            // line 224
            echo "
                     ";
        }
        // line 226
        echo "
                     ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 227)) {
            // line 228
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 230
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 232
($context["withtemplate"] ?? null),             // line 233
($context["field_options"] ?? null)], 228, $context, $this->getSourceContext());
            // line 234
            echo "
                     ";
        }
        // line 236
        echo "
                     ";
        // line 237
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 237)) {
            // line 238
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 240
($context["item"] ?? null), __("Mobile phone"),             // line 242
($context["withtemplate"] ?? null),             // line 243
($context["field_options"] ?? null)], 238, $context, $this->getSourceContext());
            // line 244
            echo "
                     ";
        }
        // line 246
        echo "
                     ";
        // line 247
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 247)) {
            // line 248
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 250
($context["item"] ?? null), __("Fax"),             // line 252
($context["withtemplate"] ?? null),             // line 253
($context["field_options"] ?? null)], 248, $context, $this->getSourceContext());
            // line 254
            echo "
                     ";
        }
        // line 256
        echo "
                     ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 257)) {
            // line 258
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 260
($context["item"] ?? null), __("Website"),             // line 262
($context["withtemplate"] ?? null),             // line 263
($context["field_options"] ?? null)], 258, $context, $this->getSourceContext());
            // line 264
            echo "
                     ";
        }
        // line 266
        echo "
                     ";
        // line 267
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 267)) {
            // line 268
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 270
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 272
($context["withtemplate"] ?? null),             // line 273
($context["field_options"] ?? null)], 268, $context, $this->getSourceContext());
            // line 274
            echo "
                     ";
        }
        // line 276
        echo "
                     ";
        // line 277
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 277)) {
            // line 278
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 278)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["address"] ?? null) : null), __("Address")], 278, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 280
        echo "
                     ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 281)) {
            // line 282
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 284
($context["item"] ?? null), __("Postal code"),             // line 286
($context["withtemplate"] ?? null),             // line 287
($context["field_options"] ?? null)], 282, $context, $this->getSourceContext());
            // line 288
            echo "
                     ";
        }
        // line 290
        echo "
                     ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 291)) {
            // line 292
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 294
($context["item"] ?? null), __("City"),             // line 296
($context["withtemplate"] ?? null),             // line 297
($context["field_options"] ?? null)], 292, $context, $this->getSourceContext());
            // line 298
            echo "
                     ";
        }
        // line 300
        echo "
                     ";
        // line 302
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 302)) {
            // line 303
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 305
($context["item"] ?? null), __("Postal code"),             // line 307
($context["withtemplate"] ?? null),             // line 308
($context["field_options"] ?? null)], 303, $context, $this->getSourceContext());
            // line 309
            echo "
                     ";
        }
        // line 311
        echo "
                     ";
        // line 312
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 313
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 315
($context["item"] ?? null), _x("location", "State"),             // line 317
($context["withtemplate"] ?? null),             // line 318
($context["field_options"] ?? null)], 313, $context, $this->getSourceContext());
            // line 319
            echo "
                     ";
        }
        // line 321
        echo "
                     ";
        // line 322
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 322)) {
            // line 323
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 325
($context["item"] ?? null), __("Country"),             // line 327
($context["withtemplate"] ?? null),             // line 328
($context["field_options"] ?? null)], 323, $context, $this->getSourceContext());
            // line 329
            echo "
                     ";
        }
        // line 331
        echo "
                     ";
        // line 332
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 332)) {
            // line 333
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 334
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 334)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 334, $context, $this->getSourceContext());
                // line 337
                echo "
                        ";
            } else {
                // line 339
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 339)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 339, $context, $this->getSourceContext());
                // line 342
                echo "
                        ";
            }
            // line 344
            echo "                     ";
        }
        // line 345
        echo "
                     ";
        // line 346
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 346)) {
            // line 347
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 349
($context["item"] ?? null), "fields", [], "any", false, false, false, 349)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["ref"] ?? null) : null), __("Reference"),             // line 351
($context["field_options"] ?? null)], 347, $context, $this->getSourceContext());
            // line 352
            echo "
                     ";
        }
        // line 354
        echo "
                     ";
        // line 355
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id_tech"], "method", false, false, false, 355)) {
            // line 356
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 359
($context["item"] ?? null), "fields", [], "any", false, false, false, 359)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["users_id_tech"] ?? null) : null), __("Technician in charge of the hardware"), twig_array_merge(            // line 361
($context["field_options"] ?? null), ["entity" => (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 362
($context["item"] ?? null), "fields", [], "any", false, false, false, 362)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["entities_id"] ?? null) : null), "right" => "own_ticket"])], 356, $context, $this->getSourceContext());
            // line 365
            echo "
                     ";
        }
        // line 367
        echo "
                     ";
        // line 368
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 368)) {
            // line 369
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 372
($context["item"] ?? null), "fields", [], "any", false, false, false, 372)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_28 =             // line 373
($context["item_type"] ?? null)) && is_string($__internal_compile_29 = "Software") && ('' === $__internal_compile_29 || 0 === strpos($__internal_compile_28, $__internal_compile_29)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),             // line 374
($context["field_options"] ?? null)], 369, $context, $this->getSourceContext());
            // line 375
            echo "
                     ";
        }
        // line 377
        echo "
                     ";
        // line 378
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id_tech"], "method", false, false, false, 378)) {
            // line 379
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 382
($context["item"] ?? null), "fields", [], "any", false, false, false, 382)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["groups_id_tech"] ?? null) : null), __("Group in charge of the hardware"), twig_array_merge(            // line 384
($context["field_options"] ?? null), ["entity" => (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 385
($context["item"] ?? null), "fields", [], "any", false, false, false, 385)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["entities_id"] ?? null) : null), "condition" => ["is_assign" => 1]])], 379, $context, $this->getSourceContext());
            // line 388
            echo "
                     ";
        }
        // line 390
        echo "
                     ";
        // line 391
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 391);
        // line 392
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 392);
        // line 393
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 393)) {
            // line 394
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 395
($context["model_itemtype"] ?? null),             // line 396
($context["model_fk"] ?? null), (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 397
($context["item"] ?? null), "fields", [], "any", false, false, false, 397)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1),             // line 399
($context["field_options"] ?? null)], 394, $context, $this->getSourceContext());
            // line 400
            echo "
                     ";
        }
        // line 402
        echo "
                     ";
        // line 403
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "contact_num"], "method", false, false, false, 403))) {
            // line 404
            echo "                        ";
            // line 405
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["contact_num", (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 407
($context["item"] ?? null), "fields", [], "any", false, false, false, 407)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["contact_num"] ?? null) : null), __("Alternate username number"),             // line 409
($context["field_options"] ?? null)], 405, $context, $this->getSourceContext());
            // line 410
            echo "
                     ";
        }
        // line 412
        echo "
                     ";
        // line 413
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 413)) {
            // line 414
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 416
($context["item"] ?? null), "fields", [], "any", false, false, false, 416)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["serial"] ?? null) : null), __("Serial number"),             // line 418
($context["field_options"] ?? null)], 414, $context, $this->getSourceContext());
            // line 419
            echo "
                     ";
        }
        // line 421
        echo "
                     ";
        // line 422
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "contact"], "method", false, false, false, 422))) {
            // line 423
            echo "                        ";
            // line 424
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["contact", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 426
($context["item"] ?? null), "fields", [], "any", false, false, false, 426)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["contact"] ?? null) : null), __("Alternate username"),             // line 428
($context["field_options"] ?? null)], 424, $context, $this->getSourceContext());
            // line 429
            echo "
                     ";
        }
        // line 431
        echo "
                     ";
        // line 432
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "otherserial"], "method", false, false, false, 432)) {
            // line 433
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["otherserial",             // line 435
($context["item"] ?? null), __("Inventory number"),             // line 437
($context["withtemplate"] ?? null),             // line 438
($context["field_options"] ?? null)], 433, $context, $this->getSourceContext());
            // line 439
            echo "
                     ";
        }
        // line 441
        echo "
                     ";
        // line 442
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "sysdescr"], "method", false, false, false, 442)) {
            // line 443
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["sysdescr", (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 443)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["sysdescr"] ?? null) : null), __("Sysdescr")], 443, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 445
        echo "
                     ";
        // line 446
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 446)) {
            // line 447
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_37 = twig_get_attribute($this->env, $this->source,             // line 450
($context["item"] ?? null), "fields", [], "any", false, false, false, 450)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 452
($context["field_options"] ?? null), ["entity" => (($__internal_compile_38 = twig_get_attribute($this->env, $this->source,             // line 453
($context["item"] ?? null), "fields", [], "any", false, false, false, 453)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["entities_id"] ?? null) : null), "right" => "all"])], 447, $context, $this->getSourceContext());
            // line 456
            echo "
                     ";
        }
        // line 458
        echo "
                     ";
        // line 459
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_global"], "method", false, false, false, 459)) {
            // line 460
            echo "                        ";
            $context["management_restrict"] = 0;
            // line 461
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Monitor")) {
                // line 462
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                // line 463
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Peripheral")) {
                // line 464
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                // line 465
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Phone")) {
                // line 466
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                // line 467
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Printer")) {
                // line 468
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                // line 469
                echo "                        ";
            } else {
                // line 470
                echo "                           ";
                $context["management_restrict"] = 0;
                // line 471
                echo "                        ";
            }
            // line 472
            echo "                        ";
            ob_start(function () { return ''; });
            // line 473
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [0 => (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 473)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null), 1 => ["withtemplate" =>             // line 474
($context["withtemplate"] ?? null), "value" => (($__internal_compile_40 = twig_get_attribute($this->env, $this->source,             // line 475
($context["item"] ?? null), "fields", [], "any", false, false, false, 475)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["is_global"] ?? null) : null), "management_restrict" =>             // line 476
($context["management_restrict"] ?? null), "target" =>             // line 477
($context["target"] ?? null), "width" => "100%"]]);
            // line 480
            echo "                        ";
            $context["dd_globalswitch"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 481
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["is_global",             // line 483
($context["dd_globalswitch"] ?? null), __("Management type")], 481, $context, $this->getSourceContext());
            // line 485
            echo "
                     ";
        }
        // line 487
        echo "
                     ";
        // line 488
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 488)) {
            // line 489
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_41 = twig_get_attribute($this->env, $this->source,             // line 491
($context["item"] ?? null), "fields", [], "any", false, false, false, 491)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 493
($context["field_options"] ?? null), ["min" => 0, "step" => 0.01])], 489, $context, $this->getSourceContext());
            // line 497
            echo "
                     ";
        }
        // line 499
        echo "
                     ";
        // line 500
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "networks_id"], "method", false, false, false, 500)) {
            // line 501
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Network", "networks_id", (($__internal_compile_42 = twig_get_attribute($this->env, $this->source,             // line 504
($context["item"] ?? null), "fields", [], "any", false, false, false, 504)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["networks_id"] ?? null) : null), _n("Network", "Networks", 1),             // line 506
($context["field_options"] ?? null)], 501, $context, $this->getSourceContext());
            // line 507
            echo "
                     ";
        }
        // line 509
        echo "
                     ";
        // line 510
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id"], "method", false, false, false, 510)) {
            // line 511
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", (($__internal_compile_43 = twig_get_attribute($this->env, $this->source,             // line 514
($context["item"] ?? null), "fields", [], "any", false, false, false, 514)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), twig_array_merge(            // line 516
($context["field_options"] ?? null), ["entity" => (($__internal_compile_44 = twig_get_attribute($this->env, $this->source,             // line 517
($context["item"] ?? null), "fields", [], "any", false, false, false, 517)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1]])], 511, $context, $this->getSourceContext());
            // line 520
            echo "
                     ";
        }
        // line 522
        echo "
                     ";
        // line 523
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "uuid"], "method", false, false, false, 523)) {
            // line 524
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["uuid", (($__internal_compile_45 = twig_get_attribute($this->env, $this->source,             // line 526
($context["item"] ?? null), "fields", [], "any", false, false, false, 526)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["uuid"] ?? null) : null), __("UUID"),             // line 528
($context["field_options"] ?? null)], 524, $context, $this->getSourceContext());
            // line 529
            echo "
                     ";
        }
        // line 531
        echo "
                     ";
        // line 532
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "version"], "method", false, false, false, 532)) {
            // line 533
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["version",             // line 535
($context["item"] ?? null), _n("Version", "Versions", 1),             // line 537
($context["withtemplate"] ?? null),             // line 538
($context["field_options"] ?? null)], 533, $context, $this->getSourceContext());
            // line 539
            echo "
                     ";
        }
        // line 541
        echo "
                     ";
        // line 542
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 542)) {
            // line 543
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_46 = twig_get_attribute($this->env, $this->source,             // line 545
($context["item"] ?? null), "fields", [], "any", false, false, false, 545)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 547
($context["field_options"] ?? null)], 543, $context, $this->getSourceContext());
            // line 548
            echo "
                     ";
        }
        // line 550
        echo "
                     ";
        // line 551
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ram"], "method", false, false, false, 551)) {
            // line 552
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_47 = twig_get_attribute($this->env, $this->source,             // line 554
($context["item"] ?? null), "fields", [], "any", false, false, false, 554)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["ram"] ?? null) : null), twig_sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),             // line 556
($context["field_options"] ?? null)], 552, $context, $this->getSourceContext());
            // line 557
            echo "
                     ";
        }
        // line 559
        echo "
                     ";
        // line 560
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 560)) {
            // line 561
            echo "                        ";
            ob_start(function () { return ''; });
            // line 562
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_48 = twig_get_attribute($this->env, $this->source,             // line 563
($context["item"] ?? null), "fields", [], "any", false, false, false, 563)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["alarm_threshold"] ?? null) : null), "rand" =>             // line 564
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 570
($context["params"] ?? null))]);
            // line 571
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 572
            echo "                        ";
            ob_start(function () { return ''; });
            // line 573
            echo "                           <span class=\"text-muted\">
                              ";
            // line 574
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_49 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 574)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["id"] ?? null) : null)]);
            // line 575
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 577
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 579
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 581
($context["field_options"] ?? null), ["add_field_html" =>             // line 582
($context["last_alert_html"] ?? null)])], 577, $context, $this->getSourceContext());
            // line 584
            echo "
                     ";
        }
        // line 586
        echo "
                     ";
        // line 587
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "brand"], "method", false, false, false, 587)) {
            // line 588
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["brand", (($__internal_compile_50 = twig_get_attribute($this->env, $this->source,             // line 590
($context["item"] ?? null), "fields", [], "any", false, false, false, 590)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["brand"] ?? null) : null), __("Brand"),             // line 592
($context["field_options"] ?? null)], 588, $context, $this->getSourceContext());
            // line 593
            echo "
                     ";
        }
        // line 595
        echo "
                     ";
        // line 596
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 596)) {
            // line 597
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_51 = twig_get_attribute($this->env, $this->source,             // line 599
($context["item"] ?? null), "fields", [], "any", false, false, false, 599)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["begin_date"] ?? null) : null), __("Start date"),             // line 601
($context["field_options"] ?? null)], 597, $context, $this->getSourceContext());
            // line 602
            echo "
                     ";
        }
        // line 604
        echo "
                     ";
        // line 605
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "autoupdatesystems_id"], "method", false, false, false, 605)) {
            // line 606
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["AutoUpdateSystem", "autoupdatesystems_id", (($__internal_compile_52 = twig_get_attribute($this->env, $this->source,             // line 609
($context["item"] ?? null), "fields", [], "any", false, false, false, 609)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["autoupdatesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem"),             // line 611
($context["field_options"] ?? null)], 606, $context, $this->getSourceContext());
            // line 612
            echo "
                     ";
        }
        // line 614
        echo "
                     ";
        // line 615
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 615)) {
            // line 616
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 616, $context, $this->getSourceContext());
            // line 619
            echo "
                     ";
        }
        // line 621
        echo "
                     ";
        // line 622
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 622)) {
            // line 623
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_53 = twig_get_attribute($this->env, $this->source,             // line 625
($context["item"] ?? null), "fields", [], "any", false, false, false, 625)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["is_active"] ?? null) : null), __("Active"),             // line 627
($context["field_options"] ?? null)], 623, $context, $this->getSourceContext());
            // line 628
            echo "
                     ";
        }
        // line 630
        echo "
                     ";
        // line 631
        $this->displayBlock('more_fields', $context, $blocks);
        // line 633
        echo "                  ";
    }

    // line 631
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 632
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "generic_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1084 => 632,  1080 => 631,  1076 => 633,  1074 => 631,  1071 => 630,  1067 => 628,  1065 => 627,  1064 => 625,  1062 => 623,  1060 => 622,  1057 => 621,  1053 => 619,  1050 => 616,  1048 => 615,  1045 => 614,  1041 => 612,  1039 => 611,  1038 => 609,  1036 => 606,  1034 => 605,  1031 => 604,  1027 => 602,  1025 => 601,  1024 => 599,  1022 => 597,  1020 => 596,  1017 => 595,  1013 => 593,  1011 => 592,  1010 => 590,  1008 => 588,  1006 => 587,  1003 => 586,  999 => 584,  997 => 582,  996 => 581,  995 => 579,  993 => 577,  989 => 575,  987 => 574,  984 => 573,  981 => 572,  978 => 571,  976 => 570,  975 => 564,  974 => 563,  972 => 562,  969 => 561,  967 => 560,  964 => 559,  960 => 557,  958 => 556,  957 => 554,  955 => 552,  953 => 551,  950 => 550,  946 => 548,  944 => 547,  943 => 545,  941 => 543,  939 => 542,  936 => 541,  932 => 539,  930 => 538,  929 => 537,  928 => 535,  926 => 533,  924 => 532,  921 => 531,  917 => 529,  915 => 528,  914 => 526,  912 => 524,  910 => 523,  907 => 522,  903 => 520,  901 => 517,  900 => 516,  899 => 514,  897 => 511,  895 => 510,  892 => 509,  888 => 507,  886 => 506,  885 => 504,  883 => 501,  881 => 500,  878 => 499,  874 => 497,  872 => 493,  871 => 491,  869 => 489,  867 => 488,  864 => 487,  860 => 485,  858 => 483,  856 => 481,  853 => 480,  851 => 477,  850 => 476,  849 => 475,  848 => 474,  846 => 473,  843 => 472,  840 => 471,  837 => 470,  834 => 469,  831 => 468,  828 => 467,  825 => 466,  822 => 465,  819 => 464,  816 => 463,  813 => 462,  810 => 461,  807 => 460,  805 => 459,  802 => 458,  798 => 456,  796 => 453,  795 => 452,  794 => 450,  792 => 447,  790 => 446,  787 => 445,  781 => 443,  779 => 442,  776 => 441,  772 => 439,  770 => 438,  769 => 437,  768 => 435,  766 => 433,  764 => 432,  761 => 431,  757 => 429,  755 => 428,  754 => 426,  752 => 424,  750 => 423,  748 => 422,  745 => 421,  741 => 419,  739 => 418,  738 => 416,  736 => 414,  734 => 413,  731 => 412,  727 => 410,  725 => 409,  724 => 407,  722 => 405,  720 => 404,  718 => 403,  715 => 402,  711 => 400,  709 => 399,  708 => 397,  707 => 396,  706 => 395,  704 => 394,  701 => 393,  698 => 392,  696 => 391,  693 => 390,  689 => 388,  687 => 385,  686 => 384,  685 => 382,  683 => 379,  681 => 378,  678 => 377,  674 => 375,  672 => 374,  671 => 373,  670 => 372,  668 => 369,  666 => 368,  663 => 367,  659 => 365,  657 => 362,  656 => 361,  655 => 359,  653 => 356,  651 => 355,  648 => 354,  644 => 352,  642 => 351,  641 => 349,  639 => 347,  637 => 346,  634 => 345,  631 => 344,  627 => 342,  624 => 339,  620 => 337,  617 => 334,  614 => 333,  612 => 332,  609 => 331,  605 => 329,  603 => 328,  602 => 327,  601 => 325,  599 => 323,  597 => 322,  594 => 321,  590 => 319,  588 => 318,  587 => 317,  586 => 315,  584 => 313,  582 => 312,  579 => 311,  575 => 309,  573 => 308,  572 => 307,  571 => 305,  569 => 303,  566 => 302,  563 => 300,  559 => 298,  557 => 297,  556 => 296,  555 => 294,  553 => 292,  551 => 291,  548 => 290,  544 => 288,  542 => 287,  541 => 286,  540 => 284,  538 => 282,  536 => 281,  533 => 280,  527 => 278,  525 => 277,  522 => 276,  518 => 274,  516 => 273,  515 => 272,  514 => 270,  512 => 268,  510 => 267,  507 => 266,  503 => 264,  501 => 263,  500 => 262,  499 => 260,  497 => 258,  495 => 257,  492 => 256,  488 => 254,  486 => 253,  485 => 252,  484 => 250,  482 => 248,  480 => 247,  477 => 246,  473 => 244,  471 => 243,  470 => 242,  469 => 240,  467 => 238,  465 => 237,  462 => 236,  458 => 234,  456 => 233,  455 => 232,  454 => 230,  452 => 228,  450 => 227,  447 => 226,  443 => 224,  441 => 223,  440 => 222,  439 => 220,  437 => 218,  435 => 217,  432 => 216,  428 => 214,  426 => 213,  425 => 212,  424 => 210,  422 => 208,  420 => 207,  417 => 206,  413 => 204,  411 => 203,  410 => 202,  409 => 201,  408 => 200,  406 => 198,  404 => 197,  401 => 196,  397 => 194,  395 => 192,  394 => 191,  393 => 189,  391 => 186,  389 => 185,  386 => 184,  382 => 182,  380 => 181,  379 => 179,  378 => 178,  377 => 177,  375 => 176,  372 => 175,  369 => 174,  367 => 173,  364 => 172,  358 => 170,  356 => 169,  353 => 168,  349 => 166,  347 => 165,  346 => 160,  344 => 158,  342 => 157,  339 => 156,  335 => 154,  333 => 152,  332 => 151,  331 => 149,  329 => 146,  327 => 145,  324 => 144,  321 => 143,  318 => 142,  314 => 140,  312 => 138,  311 => 136,  308 => 135,  304 => 133,  295 => 131,  291 => 130,  288 => 129,  285 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 123,  271 => 122,  270 => 120,  268 => 118,  266 => 117,  264 => 116,  261 => 115,  257 => 113,  255 => 111,  254 => 110,  253 => 108,  252 => 107,  251 => 106,  249 => 105,  246 => 104,  244 => 103,  241 => 102,  237 => 100,  235 => 98,  234 => 97,  233 => 96,  232 => 94,  230 => 91,  227 => 90,  225 => 89,  222 => 88,  219 => 87,  216 => 86,  212 => 84,  209 => 82,  206 => 81,  204 => 80,  201 => 79,  197 => 77,  195 => 76,  194 => 75,  193 => 73,  191 => 71,  189 => 70,  186 => 69,  182 => 67,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 660,  157 => 657,  154 => 656,  152 => 655,  149 => 654,  143 => 652,  141 => 651,  136 => 650,  130 => 648,  128 => 647,  125 => 646,  123 => 645,  116 => 641,  112 => 639,  110 => 638,  107 => 637,  105 => 636,  103 => 635,  101 => 634,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "C:\\xampp\\htdocs\\glpi_old\\templates\\generic_show_form.html.twig");
    }
}
