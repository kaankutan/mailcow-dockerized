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

/* modals/footer.twig */
class __TwigTemplate_a15df085b8100186edd0e829830d04f7 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 2
            echo "<div class=\"modal fade\" id=\"YubiOTPModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"YubiOTPModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 6), "yubi_otp", [], "any", false, false, false, 6), "html", null, true);
            echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" method=\"post\">
          <div class=\"mb-4\">
            <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 12), "key_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" autocomplete=\"off\" required>
          </div>
          <hr>
          <p class=\"text-muted\">";
            // line 15
            echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 15), "api_register", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 15));
            echo "</p>
          <div class=\"mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"yubico_id\" placeholder=\"Yubico API ID\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"text\" class=\"form-control\" name=\"yubico_key\" placeholder=\"Yubico API Key\" autocomplete=\"off\" required>
          </div>
          <hr>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 24), "password_now", [], "any", false, false, false, 24), "html", null, true);
            echo "\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <div class=\"input-group\">
              <span class=\"input-group-text\" id=\"yubi-addon\"><img alt=\"Yubicon Icon\" src=\"/img/yubi.ico\"></span>
              <input type=\"text\" name=\"otp_token\" class=\"form-control\" placeholder=\"Touch Yubikey\" aria-describedby=\"yubi-addon\">
              <input type=\"hidden\" name=\"tfa_method\" value=\"yubi_otp\">
            </div>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" name=\"set_tfa\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 33), "save_changes", [], "any", false, false, false, 33), "html", null, true);
            echo "</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"WebAuthnModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"WebAuthnModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 44), "webauthn", [], "any", false, false, false, 44), "html", null, true);
            echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"d-flex flex-column\" role=\"form\" method=\"post\" id=\"webauthn_reg_form\">
          <div class=\"mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 50), "key_id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 53), "password_now", [], "any", false, false, false, 53), "html", null, true);
            echo "\" autocomplete=\"off\" required>
          </div>
          <hr>
          <div class=\"text-center\">
            <div style=\"cursor:pointer\" id=\"start_webauthn_register\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\">
                <path d=\"M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39-2.57 0-4.66 1.97-4.66 4.39 0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94 1.7 0 3.08 1.32 3.08 2.94 0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z\"></path>
              </svg>
              <p>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 61), "start_webauthn_validation", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
            </div>
          </div>
          <hr>
          <p id=\"webauthn_status_reg\"></p>
          <div class=\"alert alert-danger\" style=\"display:none\" id=\"webauthn_return_code\"></div>
          <input type=\"hidden\" name=\"token\" id=\"webauthn_register_data\"/>
          <input type=\"hidden\" name=\"tfa_method\" value=\"webauthn\">
          <input type=\"hidden\" name=\"set_tfa\"/><br/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"TOTPModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"TOTPModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 80), "totp", [], "any", false, false, false, 80), "html", null, true);
            echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" method=\"post\">
          <div class=\"mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 86), "key_id_totp", [], "any", false, false, false, 86), "html", null, true);
            echo "\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 89), "password_now", [], "any", false, false, false, 89), "html", null, true);
            echo "\" autocomplete=\"off\" required>
          </div>
          <hr>
          <input type=\"hidden\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["totp_secret"] ?? null), "html", null, true);
            echo "\" name=\"totp_secret\">
          <input type=\"hidden\" name=\"tfa_method\" value=\"totp\">
          <ol class=\"mb-4\">
            <li>
              <p>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 96), "scan_qr_code", [], "any", false, false, false, 96), "html", null, true);
            echo "</p>
              <img id=\"tfa-qr-img\" data-totp-secret=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["totp_secret"] ?? null), "html", null, true);
            echo "\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=\">
              <p class=\"text-muted\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 98), "enter_qr_code", [], "any", false, false, false, 98), "html", null, true);
            echo ":<br />
                <code>";
            // line 99
            echo twig_escape_filter($this->env, ($context["totp_secret"] ?? null), "html", null, true);
            echo "</code>
              </p>
            </li>
            <li>
              <p>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 103), "confirm_totp_token", [], "any", false, false, false, 103), "html", null, true);
            echo ":</p>
              <p><input type=\"number\" style=\"width:33%\" class=\"form-control\" name=\"totp_confirm_token\" autocomplete=\"off\" required></p>
              <p><button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" name=\"set_tfa\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 105), "confirm", [], "any", false, false, false, 105), "html", null, true);
            echo "</button></p>
            </li>
          </ol>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"DisableTFAModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DisableTFAModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 118), "delete_tfa", [], "any", false, false, false, 118), "html", null, true);
            echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" method=\"post\">
          <div class=\"input-group\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 124), "password_now", [], "any", false, false, false, 124), "html", null, true);
            echo "\" autocomplete=\"off\" required>
            <button class=\"btn btn-sm d-block d-sm-inline btn-danger\" type=\"submit\" name=\"set_tfa\">";
            // line 125
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 125), "delete_tfa", [], "any", false, false, false, 125), [" " => "&nbsp;"]);
            echo "</button>
          </div>
          <input type=\"hidden\" name=\"tfa_method\" value=\"none\">
        </form>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 134
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 135
            echo "<div class=\"modal fade\" id=\"ConfirmTFAModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ConfirmTFAModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 139), "tfa", [], "any", false, false, false, 139), "html", null, true);
            echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      
      
      <div class=\"modal-body p-0 pt-4\">
        <ul class=\"nav nav-tabs px-1\" id=\"tabContent\">
            ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "webauthn", [], "array", true, true, false, 146) &&  !twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 146))) {
                // line 147
                echo "              <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tfa_tab_webauthn\" data-bs-toggle=\"tab\" id=\"pending_tfa_tab_webauthn\"><i class=\"bi bi-fingerprint\"></i> WebAuthn</a></li>
            ";
            }
            // line 149
            echo "
            ";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "yubi_otp", [], "array", true, true, false, 150) &&  !twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 150))) {
                // line 151
                echo "              <li class=\"nav-item\">
                <a class=\"nav-link ";
                // line 152
                if ((($__internal_compile_0 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["yubi_otp"] ?? null) : null)) {
                    echo "active";
                }
                echo "\" href=\"#tfa_tab_yubi_otp\" data-bs-toggle=\"tab\" id=\"pending_tfa_tab_yubi_otp\"><i class=\"bi bi-usb-drive\"></i> Yubi OTP</a>
              </li>
            ";
            }
            // line 155
            echo "
            ";
            // line 156
            if ((twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "totp", [], "array", true, true, false, 156) &&  !twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 156))) {
                // line 157
                echo "              <li class=\"nav-item\">
                <a class=\"nav-link ";
                // line 158
                if ((($__internal_compile_1 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["totp"] ?? null) : null)) {
                    echo "active";
                }
                echo "\" href=\"#tfa_tab_totp\" data-bs-toggle=\"tab\" id=\"pending_tfa_tab_totp\"><i class=\"bi bi-clock-history\"></i> Time-based OTP</a>
              </li>
            ";
            }
            // line 161
            echo "
            <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tfa_tab_hotp\" data-bs-toggle=\"tab\">HOTP</a></li> -->
            ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 163)) {
                // line 164
                echo "              <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tfa_tab_u2f\" data-bs-toggle=\"tab\"><i class=\"bi bi-x-octagon\"></i> U2F</a></li>
            ";
            }
            // line 166
            echo "        </ul>

        <div class=\"tab-content\">
          ";
            // line 169
            if ((twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "webauthn", [], "array", true, true, false, 169) &&  !twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 169))) {
                // line 170
                echo "            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tfa_tab_webauthn\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    <form role=\"form\" method=\"post\" id=\"webauthn_auth_form\">
                      <legend class=\"mt-2 mb-2\">
                          <i class=\"bi bi-shield-fill-check\"></i>
                          ";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 176), "authenticators", [], "any", false, false, false, 176), "html", null, true);
                echo "
                          <hr />
                      </legend>
                      <div class=\"list-group\">
                        ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pending_tfa_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 181
                    echo "                          ";
                    if (((($__internal_compile_2 = $context["authenticator"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["authmech"] ?? null) : null) == "webauthn")) {
                        // line 182
                        echo "                            <a href=\"#\" class=\"list-group-item webauthn-authenticator-selection\">
                              <i class=\"bi bi-key-fill\" style=\"margin-right: 5px\"></i>
                              <span>";
                        // line 184
                        echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["authenticator"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["key_id"] ?? null) : null), "html", null, true);
                        echo "</span>
                              <input type=\"hidden\" value=\"";
                        // line 185
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["authenticator"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                        echo "\" /><br/>
                            </a>
                          ";
                    }
                    // line 188
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                      </div>
                      <div class=\"collapse pending-tfa-collapse\" id=\"collapseWebAuthnTFA\">
                        <div class=\"row mt-4 mb-4\">
                          <div class=\"col-12\">
                            <div class=\"mt-4 d-flex align-items-center\" id=\"webauthn_status_auth\">
                              <div class=\"spinner-border me-2\" role=\"status\">
                                <span class=\"visually-hidden\">Loading...</span>
                              </div>
                              ";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 197), "init_webauthn", [], "any", false, false, false, 197), "html", null, true);
                echo "
                            </div>
                            <div class=\"mt-4 alert alert-danger\" style=\"display:none\" id=\"webauthn_return_code\"></div>
                          </div>
                        </div>
                      </div>
                      <input type=\"hidden\" name=\"token\" id=\"webauthn_auth_data\"/>
                      <input type=\"hidden\" name=\"tfa_method\" value=\"webauthn\">
                      <input type=\"hidden\" name=\"verify_tfa_login\"/>
                      <input type=\"hidden\" name=\"id\" id=\"webauthn_selected_id\" /><br/>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 212
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "yubi_otp", [], "array", true, true, false, 212) &&  !twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 212))) {
                // line 213
                echo "            <div role=\"tabpanel\" class=\"tab-pane ";
                if ((($__internal_compile_5 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["yubi_otp"] ?? null) : null)) {
                    echo "active";
                }
                echo "\" id=\"tfa_tab_yubi_otp\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    <form role=\"form\" method=\"post\">
                      <legend class=\"mt-2 mb-2\">
                          <i class=\"bi bi-shield-fill-check\"></i>
                          ";
                // line 219
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 219), "authenticators", [], "any", false, false, false, 219), "html", null, true);
                echo "
                          <hr />
                      </legend>
                      <div class=\"collapse show pending-tfa-collapse\" id=\"collapseYubiTFA\">
                        <div class=\"row mt-4 mb-4\">
                          <div class=\"col-12\">
                            <div class=\"input-group mt-4\">
                              <span class=\"input-group-text\" id=\"yubi-addon\"><img alt=\"Yubicon Icon\" src=\"/img/yubi.ico\"></span>
                              <input type=\"text\" name=\"token\" class=\"form-control\" autocomplete=\"off\" placeholder=\"Touch Yubikey\" aria-describedby=\"yubi-addon\">
                              <input type=\"hidden\" name=\"tfa_method\" value=\"yubi_otp\">
                              <input type=\"hidden\" name=\"id\" id=\"yubi_selected_id\" />
                            </div>
                          </div>
                        </div>
                        <button class=\"btn btn-sm visible-xs-block visible-sm-inline visible-md-inline visible-lg-inline btn-secondary\" type=\"submit\" name=\"verify_tfa_login\">";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 233), "login", [], "any", false, false, false, 233), "html", null, true);
                echo "</button>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 240
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "totp", [], "array", true, true, false, 240) &&  !twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 240))) {
                // line 241
                echo "            <div role=\"tabpanel\" class=\"tab-pane ";
                if ((($__internal_compile_6 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["totp"] ?? null) : null)) {
                    echo "active";
                }
                echo "\" id=\"tfa_tab_totp\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    <form role=\"form\" method=\"post\">        
                      <legend class=\"mt-2 mb-2\">
                          <i class=\"bi bi-shield-fill-check\"></i>
                          ";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 247), "authenticators", [], "any", false, false, false, 247), "html", null, true);
                echo "
                          <hr />
                      </legend>
                      <div class=\"list-group\">
                        ";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pending_tfa_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 252
                    echo "                          ";
                    if (((($__internal_compile_7 = $context["authenticator"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["authmech"] ?? null) : null) == "totp")) {
                        // line 253
                        echo "                            <a href=\"#\" class=\"list-group-item totp-authenticator-selection\">
                              <i class=\"bi bi-key-fill\" style=\"margin-right: 5px\"></i>
                              <span>";
                        // line 255
                        echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["authenticator"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["key_id"] ?? null) : null), "html", null, true);
                        echo "</span>
                              <input type=\"hidden\" value=\"";
                        // line 256
                        echo twig_escape_filter($this->env, (($__internal_compile_9 = $context["authenticator"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null), "html", null, true);
                        echo "\" />
                            </a>
                          ";
                    }
                    // line 259
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                echo "                      </div>
                      <div class=\"collapse pending-tfa-collapse\" id=\"collapseTotpTFA\">
                        <div class=\"row mt-4 mb-4\">
                          <div class=\"col-12\">
                            <div class=\"input-group mt-4\">
                              <span class=\"input-group-text\" id=\"tfa-addon\"><i class=\"bi bi-shield-lock-fill\"></i></span>
                              <input type=\"number\" min=\"000000\" max=\"999999\" name=\"token\" class=\"form-control\" placeholder=\"123456\" autocomplete=\"one-time-code\" aria-describedby=\"tfa-addon\">
                              <input type=\"hidden\" name=\"tfa_method\" value=\"totp\">
                              <input type=\"hidden\" name=\"id\" id=\"totp_selected_id\" /><br/>
                            </div>
                            <button class=\"mt-4 btn btn-sm visible-xs-block visible-sm-inline visible-md-inline visible-lg-inline btn-secondary\" type=\"submit\" name=\"verify_tfa_login\">";
                // line 270
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 270), "login", [], "any", false, false, false, 270), "html", null, true);
                echo "</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 279
            echo "            <!--
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"tfa_tab_hotp\">
              <div class=\"card\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                      <div class=\"empty\"></div>
                  </div>
              </div>
            </div>
            -->
          ";
            // line 288
            if (twig_get_attribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 288)) {
                // line 289
                echo "            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tfa_tab_u2f\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    ";
                // line 293
                echo "                    <form role=\"form\" method=\"post\" id=\"u2f_auth_form\">
                      <div>
                        <p>";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 295), "u2f_deprecated", [], "any", false, false, false, 295), "html", null, true);
                echo "</p>
                        <p><b>";
                // line 296
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 296), "u2f_deprecated_important", [], "any", false, false, false, 296), "html", null, true);
                echo "</b></p>
                        <input type=\"hidden\" name=\"token\" value=\"destroy\" />
                        <input type=\"hidden\" name=\"tfa_method\" value=\"u2f\">
                        <input type=\"hidden\" name=\"verify_tfa_login\"/><br/>
                        <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">";
                // line 300
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 300), "login", [], "any", false, false, false, 300), "html", null, true);
                echo "</button>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 307
            echo "        </div>

      </div>
    </div>
  </div>
</div>
";
        }
        // line 314
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 315
            echo "<div id=\"RestartContainer\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 319), "restart_container", [], "any", false, false, false, 319), "html", null, true);
            echo " (<code id=\"containerName\"></code>)</h4>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
            // line 323
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 323), "restart_container_info", [], "any", false, false, false, 323);
            echo "</p>
        <hr>
        <button class=\"btn btn-md d-block d-sm-inline btn-primary\" id=\"triggerRestartContainer\">";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 325), "restart_now", [], "any", false, false, false, 325), "html", null, true);
            echo "</button>
        <br><br>
        <div id=\"statusTriggerRestartContainer\"></div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 333
        echo "<div id=\"ConfirmDeleteModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 337), "confirm_delete", [], "any", false, false, false, 337), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p id=\"DeleteText\">";
        // line 341
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 341), "delete_these_items", [], "any", false, false, false, 341), "html", null, true);
        echo "</p>
        <ul id=\"ItemsToDelete\"></ul>
        <hr>
        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-danger\" id=\"IsConfirmed\">";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 344), "delete_now", [], "any", false, false, false, 344), "html", null, true);
        echo "</button>
        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"isCanceled\">";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 345), "cancel", [], "any", false, false, false, 345), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<!-- version modal -->
<div class=\"modal fade\" id=\"showVersionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"></h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body d-flex flex-column mt-2 p-4\">
        <div class=\"spinner-border mx-auto\" role=\"status\">
          <span class=\"visually-hidden\">Loading...</span>
        </div>
      </div>
    </div>
  </div>
</div><!-- version modal -->
";
    }

    public function getTemplateName()
    {
        return "modals/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 345,  599 => 344,  593 => 341,  586 => 337,  580 => 333,  569 => 325,  564 => 323,  557 => 319,  551 => 315,  549 => 314,  540 => 307,  530 => 300,  523 => 296,  519 => 295,  515 => 293,  510 => 289,  508 => 288,  497 => 279,  485 => 270,  473 => 260,  467 => 259,  461 => 256,  457 => 255,  453 => 253,  450 => 252,  446 => 251,  439 => 247,  427 => 241,  424 => 240,  414 => 233,  397 => 219,  385 => 213,  382 => 212,  364 => 197,  354 => 189,  348 => 188,  342 => 185,  338 => 184,  334 => 182,  331 => 181,  327 => 180,  320 => 176,  312 => 170,  310 => 169,  305 => 166,  301 => 164,  299 => 163,  295 => 161,  287 => 158,  284 => 157,  282 => 156,  279 => 155,  271 => 152,  268 => 151,  266 => 150,  263 => 149,  259 => 147,  257 => 146,  247 => 139,  241 => 135,  239 => 134,  227 => 125,  223 => 124,  214 => 118,  198 => 105,  193 => 103,  186 => 99,  182 => 98,  178 => 97,  174 => 96,  167 => 92,  161 => 89,  155 => 86,  146 => 80,  124 => 61,  113 => 53,  107 => 50,  98 => 44,  84 => 33,  72 => 24,  60 => 15,  54 => 12,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/footer.twig", "/web/templates/modals/footer.twig");
    }
}
