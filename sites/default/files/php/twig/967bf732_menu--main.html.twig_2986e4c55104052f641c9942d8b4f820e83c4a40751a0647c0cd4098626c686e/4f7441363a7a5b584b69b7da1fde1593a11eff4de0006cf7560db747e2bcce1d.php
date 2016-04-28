<?php

/* themes/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_e4f874111bb0a4d190d1a065f7327e9119df02479f588c7cb0fa5bd07ef07cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("import" => 16, "if" => 23, "macro" => 46, "for" => 54, "set" => 56);
        $filters = array();
        $functions = array("link" => 63);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'if', 'macro', 'for', 'set'),
                array(),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 23
        if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
            // line 24
            echo "  <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_classes"]) ? $context["top_bar_classes"] : null), "html", null, true));
            echo "\">
    <nav class=\"top-bar\" data-topbar data-options=\"";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_options"]) ? $context["top_bar_options"] : null), "html", null, true));
            echo "\" >
      <ul class=\"title-area\">
        <li class=\"name\">
          <h1><a href=\"#\">";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a></h1>
        </li>
        <li class=\"toggle-topbar menu-icon\">
          <a href=\"#\"><span>";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_menu_text"]) ? $context["top_bar_menu_text"] : null), "html", null, true));
            echo "</span></a>
        </li>
      </ul>
      <section class=\"top-bar-section\">
        ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 1)));
            echo "
        ";
            // line 36
            if ((isset($context["top_bar_search"]) ? $context["top_bar_search"] : null)) {
                // line 37
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_search"]) ? $context["top_bar_search"] : null), "html", null, true));
                echo "
        ";
            }
            // line 39
            echo "      </section>
    </nav>
  </div>
";
        } else {
            // line 43
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 0)));
            echo "
";
        }
        // line 45
        echo "
";
    }

    // line 46
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "  ";
            $context["menus"] = $this;
            // line 48
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 49
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 50
                    echo "<ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu", 1 => "nav-bar"), "method"), "html", null, true));
                    echo ">
  ";
                } else {
                    // line 52
                    echo "  <ul class=\"menu nav-bar\">
    ";
                }
                // line 54
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 55
                    echo "      ";
                    if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
                        // line 56
                        echo "        ";
                        $context["item_classes"] = array(0 => (( !twig_test_empty($this->getAttribute($context["item"], "below", array()))) ? ("has-dropdown") : ("")));
                        // line 57
                        echo "        ";
                        $context["child_class"] = "dropdown";
                        // line 58
                        echo "      ";
                    } else {
                        // line 59
                        echo "        ";
                        $context["item_classes"] = array(0 => (( !twig_test_empty($this->getAttribute($context["item"], "below", array()))) ? ("has-flyout") : ("")));
                        // line 60
                        echo "        ";
                        $context["child_class"] = "flyout";
                        // line 61
                        echo "      ";
                    }
                    // line 62
                    echo "      <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
        ";
                    // line 63
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        ";
                    // line 64
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 65
                        echo "          ";
                        if ( !(isset($context["top_bar"]) ? $context["top_bar"] : null)) {
                            // line 66
                            echo "            <a href=\"#\" class=\"flyout-toggle\"><span></span></a>
          ";
                        }
                        // line 68
                        echo "          <ul class=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["child_class"]) ? $context["child_class"] : null), "html", null, true));
                        echo "\">
            ";
                        // line 69
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["top_bar"]) ? $context["top_bar"] : null))));
                        echo "
          </ul>
        ";
                    }
                    // line 72
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "  </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 74,  195 => 72,  189 => 69,  184 => 68,  180 => 66,  177 => 65,  175 => 64,  171 => 63,  166 => 62,  163 => 61,  160 => 60,  157 => 59,  154 => 58,  151 => 57,  148 => 56,  145 => 55,  140 => 54,  136 => 52,  130 => 50,  127 => 49,  124 => 48,  121 => 47,  106 => 46,  101 => 45,  95 => 43,  89 => 39,  83 => 37,  81 => 36,  77 => 35,  70 => 31,  64 => 28,  58 => 25,  53 => 24,  51 => 23,  48 => 22,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* */
/* {% if top_bar %}*/
/*   <div class="{{ top_bar_classes }}">*/
/*     <nav class="top-bar" data-topbar data-options="{{ top_bar_options }}" >*/
/*       <ul class="title-area">*/
/*         <li class="name">*/
/*           <h1><a href="#">{{ site_name }}</a></h1>*/
/*         </li>*/
/*         <li class="toggle-topbar menu-icon">*/
/*           <a href="#"><span>{{ top_bar_menu_text }}</span></a>*/
/*         </li>*/
/*       </ul>*/
/*       <section class="top-bar-section">*/
/*         {{ menus.menu_links(items, attributes, 0, 1) }}*/
/*         {% if top_bar_search %}*/
/*           {{ top_bar_search }}*/
/*         {% endif %}*/
/*       </section>*/
/*     </nav>*/
/*   </div>*/
/* {% else %}*/
/*   {{ menus.menu_links(items, attributes, 0, 0) }}*/
/* {% endif %}*/
/* */
/* {% macro menu_links(items, attributes, menu_level, top_bar) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/* <ul{{ attributes.addClass('menu', 'nav-bar') }}>*/
/*   {% else %}*/
/*   <ul class="menu nav-bar">*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       {% if top_bar %}*/
/*         {% set item_classes = [ item.below is not empty ? 'has-dropdown' ] %}*/
/*         {% set child_class = 'dropdown' %}*/
/*       {% else %}*/
/*         {% set item_classes = [ item.below is not empty ? 'has-flyout' ] %}*/
/*         {% set child_class = 'flyout' %}*/
/*       {% endif %}*/
/*       <li{{ item.attributes.addClass(item_classes) }}>*/
/*         {{ link(item.title, item.url) }}*/
/*         {% if item.below %}*/
/*           {% if not top_bar %}*/
/*             <a href="#" class="flyout-toggle"><span></span></a>*/
/*           {% endif %}*/
/*           <ul class="{{ child_class }}">*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1, top_bar) }}*/
/*           </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
