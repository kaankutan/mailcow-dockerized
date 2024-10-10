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

/* index.twig */
class __TwigTemplate_5527897e0ec39d00750dead8a79aa204 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 10), "login", [], "any", false, false, false, 10), "html", null, true);
        echo "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\">
          <img class=\"main-logo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("logo", $context)) ? (_twig_default_filter(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\" alt=\"mailcow\">
          <img class=\"main-logo-dark\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("logo_dark", $context)) ? (_twig_default_filter(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\" alt=\"mailcow-logo-dark\">
        </div>
        ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 21) && twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 21))) {
            // line 22
            echo "        <div class=\"my-4 alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 22), "html", null, true);
            echo " rot-enc ui-announcement-alert\">";
            echo twig_escape_filter($this->env, str_rot13(twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 22)), "html", null, true);
            echo "</div>
        ";
        }
        // line 24
        echo "        <legend>";
        if (($context["oauth2_request"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "oauth2", [], "any", false, false, false, 24), "authorize_app", [], "any", false, false, false, 24), "html", null, true);
        } else {
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 24);
        }
        echo "</legend><hr />
        ";
        // line 25
        if (($context["is_mobileconfig"] ?? null)) {
            // line 26
            echo "        <div class=\"my-4 alert alert-info \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 26), "mobileconfig_info", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
        ";
        }
        // line 28
        echo "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"";
        // line 33
        if (($context["is_mobileconfig"] ?? null)) {
            echo "email";
        } else {
            echo "text";
        }
        echo "\" id=\"login_user\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 37), "password", [], "any", false, false, false, 37), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 40), "password", [], "any", false, false, false, 40), "html", null, true);
        echo "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"d-flex justify-content-between mt-4\" style=\"position: relative\">
            <div class=\"d-grid gap-2 d-sm-block\">
              <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 45), "login", [], "any", false, false, false, 45), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-xs-lg btn-success\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 46), "fido2_webauthn", [], "any", false, false, false, 46), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 48
        if ( !($context["oauth2_request"] ?? null)) {
            // line 49
            echo "            <div class=\"d-grid d-sm-block\">
            <button type=\"button\" ";
            // line 50
            if ((twig_length_filter($this->env, ($context["available_languages"] ?? null)) == 1)) {
                echo "disabled=\"true\"";
            }
            echo " class=\"btn btn-secondary ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"flag-icon flag-icon-";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            echo "\"></span>
            </button>
            <ul class=\"dropdown-menu ms-auto login\">
              ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 55
                echo "                <li>
                  <a class=\"dropdown-item ";
                // line 56
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    echo "active";
                }
                echo "\" href=\"?";
                echo twig_escape_filter($this->env, $this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                echo "\">
                    <span class=\"flag-icon flag-icon-";
                // line 57
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["key"],  -2, null), "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </ul>
            </div>
            ";
        }
        // line 64
        echo "          </div>
        </form>
        <div class=\"mt-3 mb-4\">
          <a href=\"/reset-password\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 67), "forgot_password", [], "any", false, false, false, 67), "html", null, true);
        echo "</a>
        </div>
        ";
        // line 69
        if (($context["login_delay"] ?? null)) {
            // line 70
            echo "        <p><div class=\"my-4 alert alert-info\">";
            echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 70), "delayed", [], "any", false, false, false, 70), ($context["login_delay"] ?? null)), "html", null, true);
            echo "</b></div></p>
        ";
        }
        // line 72
        echo "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 73
        if (( !($context["oauth2_request"] ?? null) && (($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null)))) {
            // line 74
            echo "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 74);
            echo "</legend><hr />
        <div class=\"my-2 d-grid gap-2 d-sm-block apps\">
          ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 77
                echo "            ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 77)))) {
                    // line 78
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 78), "html", null, true);
                    echo "\" role=\"button\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 78)) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 78), "html", null, true);
                        echo "\"";
                    }
                    echo " class=\"btn btn-primary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 78), "html", null, true);
                    echo "</a>
            ";
                }
                // line 80
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 82
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 83
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\" role=\"button\" class=\"btn btn-primary\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </div>
        ";
        }
        // line 88
        echo "      </div>
    </div>
  </div>
</div>
";
        // line 92
        if ( !($context["oauth2_request"] ?? null)) {
            // line 93
            echo "<div class=\"row\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 97), "help", [], "any", false, false, false, 97), "html", null, true);
            echo "</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 101)) {
                // line 102
                echo "          <p>";
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 102);
                echo "</p>
          ";
            } else {
                // line 104
                echo "          <p><span style=\"border-bottom: 1px dotted #999;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 104);
                echo "</span></p>
          <p>";
                // line 105
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 105), "mailcow_panel_detail", [], "any", false, false, false, 105);
                echo "</p>
          <p><span style=\"border-bottom: 1px dotted #999;\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 106);
                echo "</span></p>
          <p>";
                // line 107
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 107), "mailcow_apps_detail", [], "any", false, false, false, 107);
                echo "</p>
          ";
            }
            // line 109
            echo "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 114
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 114,  339 => 109,  334 => 107,  330 => 106,  326 => 105,  321 => 104,  315 => 102,  313 => 101,  306 => 97,  300 => 93,  298 => 92,  292 => 88,  288 => 86,  282 => 85,  271 => 83,  266 => 82,  261 => 81,  255 => 80,  241 => 78,  238 => 77,  234 => 76,  228 => 74,  226 => 73,  223 => 72,  217 => 70,  215 => 69,  210 => 67,  205 => 64,  200 => 61,  188 => 57,  180 => 56,  177 => 55,  173 => 54,  167 => 51,  161 => 50,  158 => 49,  156 => 48,  151 => 46,  147 => 45,  139 => 40,  133 => 37,  120 => 33,  114 => 30,  110 => 28,  104 => 26,  102 => 25,  93 => 24,  85 => 22,  83 => 21,  78 => 19,  74 => 18,  63 => 10,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/web/templates/index.twig");
    }
}
