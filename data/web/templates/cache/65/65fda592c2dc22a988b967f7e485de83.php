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

/* base.twig */
class __TwigTemplate_5336bb4d78881fbc6e644322ee40c0e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("mailcow_locale", $context)) ? (_twig_default_filter(($context["mailcow_locale"] ?? null), "en")) : ("en")), "html", null, true);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
  <meta name=\"theme-color\" content=\"#F5D76E\"/>
  <meta http-equiv=\"Referrer-Policy\" content=\"same-origin\">
  <title>";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 9);
        echo "</title>

  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\">
  <script>
    // check if darkmode is preferred by OS or set by localStorage
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && localStorage.getItem(\"theme\") !== \"light\" ||
        localStorage.getItem(\"theme\") === \"dark\") {
      var head  = document.getElementsByTagName('head')[0];
      var link  = document.createElement('link');
      link.id   = 'dark-mode-theme';
      link.rel  = 'stylesheet';
      link.type = 'text/css';
      link.href = '/css/themes/mailcow-darkmode.css';
      head.appendChild(link);
    }
  </script>

  <link rel=\"shortcut icon\" href=\"/favicon.png\" type=\"image/png\">
  <link rel=\"icon\" href=\"/favicon.png\" type=\"image/png\">
</head>
<body>
<div class=\"overlay\"></div>
";
        // line 31
        $this->displayBlock('navbar', $context, $blocks);
        // line 126
        echo "
<form action=\"/\" method=\"post\" id=\"logout\"><input type=\"hidden\" name=\"logout\"></form>

";
        // line 129
        if (((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 129) && twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 129)) &&  !($context["is_root_uri"] ?? null))) {
            // line 130
            echo "<div class=\"container mt-4\">
  <div class=\"alert alert-";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 131), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 131), "html", null, true);
            echo "</div>
</div>
";
        }
        // line 134
        echo "
<div class=\"container my-4\">
";
        // line 136
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "</div>

";
        // line 139
        $this->loadTemplate("modals/footer.twig", "base.twig", 139)->display($context);
        // line 140
        echo "
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "\"></script>
<script>
  var lang_footer = ";
        // line 143
        echo ($context["lang_footer"] ?? null);
        echo ";
  var lang_acl = ";
        // line 144
        echo ($context["lang_acl"] ?? null);
        echo ";
  var lang_tfa = ";
        // line 145
        echo ($context["lang_tfa"] ?? null);
        echo ";
  var lang_fido2 = ";
        // line 146
        echo ($context["lang_fido2"] ?? null);
        echo ";
  var docker_timeout = ";
        // line 147
        echo ($context["docker_timeout"] ?? null);
        echo " * 1000;
  var mailcow_cc_role = '";
        // line 148
        echo twig_escape_filter($this->env, ($context["mailcow_cc_role"] ?? null), "html", null, true);
        echo "';
  var mailcow_info = {
    version_tag: '";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 150), "html", null, true);
        echo "',
    last_version_tag: '";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "last_version_tag", [], "any", false, false, false, 151), "html", null, true);
        echo "',
    updatedAt: '";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "updated_at", [], "any", false, false, false, 152), "html", null, true);
        echo "',
    project_url: '";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 153), "html", null, true);
        echo "',
    project_owner: '";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_owner", [], "any", false, false, false, 154), "html", null, true);
        echo "',
    project_repo: '";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_repo", [], "any", false, false, false, 155), "html", null, true);
        echo "',
    branch: '";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 156), "html", null, true);
        echo "'
  };

\$(window).scroll(function() {
  sessionStorage.scrollTop = \$(this).scrollTop();
});
// Select language and reopen active URL without POST
function setLang(sel) {
  \$.post( '";
        // line 164
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "', {lang: sel} );
  window.location.href = window.location.pathname + window.location.search;
}
// FIDO2 functions
function arrayBufferToBase64(buffer) {
  let binary = '';
  let bytes = new Uint8Array(buffer);
  let len = bytes.byteLength;
  for (let i = 0; i < len; i++) {
    binary += String.fromCharCode( bytes[ i ] );
  }
  return window.btoa(binary);
}
function recursiveBase64StrToArrayBuffer(obj) {
  let prefix = '=?BINARY?B?';
  let suffix = '?=';
  if (typeof obj === 'object') {
    for (let key in obj) {
      if (typeof obj[key] === 'string') {
        let str = obj[key];
        if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
          str = str.substring(prefix.length, str.length - suffix.length);
          let binary_string = window.atob(str);
          let len = binary_string.length;
          let bytes = new Uint8Array(len);
          for (let i = 0; i < len; i++) {
            bytes[i] = binary_string.charCodeAt(i);
          }
          obj[key] = bytes.buffer;
        }
      } else {
        recursiveBase64StrToArrayBuffer(obj[key]);
      }
    }
  }
}
  \$(window).on('load', function() {
    \$(\".overlay\").hide();
  });
  \$(document).ready(function() {
    \$(document).on('shown.bs.modal', function(e) {
      modal_id = \$(e.relatedTarget).data('target');
      \$(modal_id).attr(\"aria-hidden\",\"false\");
    });
    // TFA, CSRF, Alerts in footer.inc.php
    // Other general functions in mailcow.js
    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["alert_type"] => $context["alert_msg"]) {
            // line 211
            echo "    mailcow_alert_box('";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["alert_msg"], "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $context["alert_type"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alert_type'], $context['alert_msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "
    // Confirm TFA modal
  ";
        // line 215
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 216
            echo "    new bootstrap.Modal(document.getElementById(\"ConfirmTFAModal\"), {
      backdrop: 'static',
      keyboard: false
    }).show();


    // validate Time based OTP tfa
    \$(\"#pending_tfa_tab_totp\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(\"#collapseWebAuthnTFA\").collapse('hide');

      // select default if only one authenticator exists
      if (\$('.totp-authenticator-selection').length == 1){
        \$('.totp-authenticator-selection').addClass(\"active\");
        var id = \$('.totp-authenticator-selection').children('input').first().val();
        \$(\"#totp_selected_id\").val(id);
        \$(\"#collapseTotpTFA\").collapse('show');
      }
    });
    \$(\".totp-authenticator-selection\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");
      
      var id = \$(this).children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
    });
    if (\$('.totp-authenticator-selection').length == 1 &&
        \$('#pending_tfa_tab_yubi_otp').length == 0 &&
        \$('.webauthn-authenticator-selection').length == 0){
      
      // select default if only one authenticator exists
      \$('.totp-authenticator-selection').addClass(\"active\");

      var id = \$('.totp-authenticator-selection').children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_totp').on('shown.bs.tab', function() {
      // autofocus
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 200);
    });    
    // validate Yubi OTP tfa
    if (\$('.webauthn-authenticator-selection').length == 0){
      // autofocus
      setTimeout(function() { \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_yubi_otp').on('shown.bs.tab', function() {
      // autofocus
      \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus();
    });
    // validate WebAuthn tfa
    \$(\"#pending_tfa_tab_webauthn\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");

      \$(\"#collapseTotpTFA\").collapse('hide');
    });
    \$(\".webauthn-authenticator-selection\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");
      
      var id = \$(this).children('input').first().val();
      \$(\"#webauthn_selected_id\").val(id);
      
      var webauthn_status_auth = document.getElementById('webauthn_status_auth');
      webauthn_status_auth.style.setProperty('display', 'flex', 'important');
      var webauthn_return_code = document.getElementById('webauthn_return_code');
      webauthn_return_code.style.setProperty('display', 'none', 'important');

      \$(\"#collapseWebAuthnTFA\").collapse('show');

      \$(this).find('input[name=token]').focus();
      if(document.getElementById(\"webauthn_auth_data\") !== null) {
        // Check Browser support
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported for WebAuthn.');
            return;
        }

        // fetch webauthn auth args
        window.fetch(\"/api/v1/get/webauthn-tfa-get-args\", {method:'GET',cache:'no-cache'}).then(response => {
            return response.json();
        }).then(json => {
          console.log(json);
          if (json.success === false) throw new Error();
          if (json.type === \"error\") throw new Error(json.msg);
      
          recursiveBase64StrToArrayBuffer(json);
          return json;
        }).then(getCredentialArgs => {
          // get credentials
          return navigator.credentials.get(getCredentialArgs);
        }).then(cred => {
          return {
            id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
            clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
            authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
            signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
          };
        }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
          // send request by submit
          var form = document.getElementById('webauthn_auth_form');
          var auth = document.getElementById('webauthn_auth_data');
          auth.value = AuthenticatorAttestationResponse;
          form.submit();
        }).catch(function(err) {
          var webauthn_status_auth = document.getElementById('webauthn_status_auth');
          webauthn_status_auth.style.setProperty('display', 'none', 'important');

          var webauthn_return_code = document.getElementById('webauthn_return_code');
          webauthn_return_code.style.setProperty('display', 'block', 'important');
          webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
        });
      } 
    });
    \$('#ConfirmTFAModal').on('hidden.bs.modal', function(){
      // cancel pending login
      \$.ajax({
        type: \"GET\",
        cache: false,
        dataType: 'script',
        url: '/inc/ajax/destroy_tfa_auth.php',
        complete: function(data){
          window.location = window.location.href.split(\"#\")[0];
        }
      });
    });
  ";
        }
        // line 347
        echo "

    // Validate FIDO2
  \$(\"#fido2-login\").click(function(){
    \$('#fido2-alerts').html();
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }
    window.fetch(\"/api/v1/get/fido2-get-args\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
    if (json.success === false) {
      throw new Error();
    }
    recursiveBase64StrToArrayBuffer(json);
    return json;
    }).then(function(getCredentialArgs) {
      return navigator.credentials.get(getCredentialArgs);
    }).then(function(cred) {
      return {
        id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
        signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/process/fido2-args\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
  } else {
    throw new Error();
  }
  }).catch(function(err) {
    if (typeof err.message === 'undefined') {
      mailcow_alert_box(lang_fido2.fido2_validation_failed, \"danger\");
    } else {
      mailcow_alert_box(lang_fido2.fido2_validation_failed + \":<br><i>\" + err.message + \"</i>\", \"danger\");
    }
  });
  });
  // Set TFA/FIDO2
  \$(\"#register-fido2, #register-fido2-touchid\").click(function(){
    let t = \$(this);

    \$(\"option:selected\").prop(\"selected\", false);
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }

    window.fetch(\"/api/v1/get/fido2-registration/";
        // line 401
        echo twig_escape_filter($this->env, _twig_default_filter(twig_urlencode_filter(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        echo "\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success === false) {
        throw new Error(json.msg);
      }
      recursiveBase64StrToArrayBuffer(json);

      // set attestation to node if we are registering apple touch id
      if(t.attr('id') === 'register-fido2-touchid') {
        json.publicKey.attestation = 'none';
        json.publicKey.authenticatorSelection.authenticatorAttachment = \"platform\";
      }

      return json;
    }).then(function(createCredentialArgs) {
      console.log(createCredentialArgs);
      return navigator.credentials.create(createCredentialArgs);
    }).then(function(cred) {
      return {
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/add/fido2-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
      } else {
        throw new Error(json.msg);
      }
    }).catch(function(err) {
      \$('#fido2-alerts').html('<span class=\"text-danger\"><b>' + err.message + '</b></span>');
    });
  });
  \$('#selectTFA').change(function () {
    if (\$(this).val() == \"yubi_otp\") {
      \$('#YubiOTPModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"totp\") {
      \$('#TOTPModal').modal('show');
      request_token = \$('#tfa-qr-img').data('totp-secret');
      \$.ajax({
        url: '/inc/ajax/qr_gen.php',
        data: {
          token: request_token,
        },
      }).done(function (result) {
        \$(\"#tfa-qr-img\").attr(\"src\", result);
      });
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"webauthn\") {
        // check if Browser is supported
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported.');
            return;
        }

        // show modal
        \$('#WebAuthnModal').modal('show');
        \$(\"option:selected\").prop(\"selected\", false);

        \$(\"#start_webauthn_register\").click(() => {
            var key_id = document.getElementsByName('key_id')[1].value;
            var confirm_password = document.getElementsByName('confirm_password')[1].value;

            // fetch WebAuthn create args
            window.fetch(\"/api/v1/get/webauthn-tfa-registration/";
        // line 472
        echo twig_escape_filter($this->env, _twig_default_filter(twig_urlencode_filter(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        echo "\", {method:'GET',cache:'no-cache'}).then(response => {
                return response.json();
            }).then(json => {
                console.log(json);
                if (json.success === false) throw new Error(json.msg);
                recursiveBase64StrToArrayBuffer(json);

                return json;
            }).then(createCredentialArgs => {
                // create credentials
                return navigator.credentials.create(createCredentialArgs);
            }).then(cred => {
                return {
                    clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
                    attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null,
                    key_id: key_id,
                    tfa_method: \"webauthn\",
                    confirm_password: confirm_password
                };
            }).then(JSON.stringify).then(AuthenticatorAttestationResponse => {
                // send request
                return window.fetch(\"/api/v1/add/webauthn-tfa-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
            }).then(response => {
                return response.json();
            }).then(json => {
                if (json.success) {
                    // reload on success
                    window.location = window.location.href.split(\"#\")[0];
                } else {
                    throw new Error(json.msg);
                }
            }).catch(function(err) {
                console.log(err);
                var webauthn_return_code = document.getElementById('webauthn_return_code');
                webauthn_return_code.style.display = webauthn_return_code.style.display === 'none' ? '' : null;
                webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
            });
        });
    }
    if (\$(this).val() == \"none\") {
      \$('#DisableTFAModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
  });

  ";
        // line 517
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 518
            echo "  // Reload after session timeout
  var session_lifetime = ";
            // line 519
            echo twig_escape_filter($this->env, ((($context["session_lifetime"] ?? null) * 1000) + 15000), "html", null, true);
            echo ";
  setTimeout(function() {
    location.reload();
  }, session_lifetime);
  ";
        }
        // line 524
        echo "
  // CSRF
  \$('<input type=\"hidden\" value=\"";
        // line 526
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">').attr('name', 'csrf_token').appendTo('form');
  if (sessionStorage.scrollTop != \"undefined\") {
    \$(window).scrollTop(sessionStorage.scrollTop);
  }
  });
</script>

<div class=\"container footer\">
  ";
        // line 534
        if (twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 534)) {
            // line 535
            echo "  <hr><span class=\"rot-enc\">";
            echo str_rot13(twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 535));
            echo "</span>
  ";
        }
        // line 537
        echo "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 537)) == "master")) && ((twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 537)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 537))) : ("")))) {
            // line 538
            echo "  <span class=\"version\">
    🐮 + 🐋 = 💕
        Version: <a href=\"";
            // line 540
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 540), "html", null, true);
            echo "/releases/tag/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 540), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 540), "html", null, true);
            echo "
    </a>
  </span>
  ";
        }
        // line 543
        echo "  
  ";
        // line 544
        if (((($context["mailcow_cc_username"] ?? null) && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 544)) == "nightly")) && ((twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 544)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 544))) : ("")))) {
            // line 545
            echo "  <span class=\"version\">
    🛠️🐮 + 🐋 = 💕
        Nightly: <a href=\"";
            // line 547
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 547), "html", null, true);
            echo "/commit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 547), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 547), "html", null, true);
            echo "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 549
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 549), "html", null, true);
            echo "</span>
  </span>
  ";
        }
        // line 552
        echo "</div>
</body>
</html>
";
    }

    // line 31
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top p-0\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
      <img class=\"main-logo\" alt=\"mailcow-logo\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("logo", $context)) ? (_twig_default_filter(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\">
      <img class=\"main-logo-dark\" alt=\"mailcow-logo-dark\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("logo_dark", $context)) ? (_twig_default_filter(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"bi bi-list fs-3\"></i>
    </button>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item\">
          <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
            <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
          </div>
        </li>
        ";
        // line 49
        if (($context["mailcow_locale"] ?? null)) {
            // line 50
            echo "        <li class=\"nav-item dropdown";
            if ((twig_length_filter($this->env, ($context["available_languages"] ?? null)) == 1)) {
                echo "lang-link-disabled";
            }
            echo "\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            echo "\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu \"aria-labelledby=\"languageDropdown\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 54
                echo "            <li>
              <a class=\"dropdown-item ";
                // line 55
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    echo "active";
                }
                echo "\" href=\"?";
                echo twig_escape_filter($this->env, $this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                echo "\">
                <span class=\"flag-icon flag-icon-";
                // line 56
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
            // line 60
            echo "          </ul>
        </li>
        ";
        }
        // line 63
        echo "        ";
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 64
            echo "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 65), "mailcow_system", [], "any", false, false, false, 65), "html", null, true);
            echo "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 67
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 68
                echo "            <li><a href=\"/debug\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("debug")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 68), "debug", [], "any", false, false, false, 68), "html", null, true);
                echo "</a></li>
            <li><a href=\"/admin\" class=\"dropdown-item ";
                // line 69
                if ($this->env->getFunction('is_uri')->getCallable()("admin")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 69), "mailcow_config", [], "any", false, false, false, 69), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 71
            echo "            ";
            if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
                // line 72
                echo "            <li><a href=\"/user\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("user")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 72), "user_settings", [], "any", false, false, false, 72), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 74
            echo "          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 77), "email", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 79
            if (((($context["mailcow_cc_role"] ?? null) == "admin") || (($context["mailcow_cc_role"] ?? null) == "domainadmin"))) {
                // line 80
                echo "            <li><a href=\"/mailbox\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 80), "mailcow_config", [], "any", false, false, false, 80), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 82
            echo "            <li><a href=\"/quarantine\" class=\"dropdown-item ";
            if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 82), "quarantine", [], "any", false, false, false, 82), "html", null, true);
            echo "</a></li>
            ";
            // line 83
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 84
                echo "            <li><a href=\"/queue\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("queue")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 84), "queue_manager", [], "any", false, false, false, 84), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 86
            echo "            ";
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 87
                echo "            <li><a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-container=\"sogo-mailcow\" data-bs-target=\"#RestartContainer\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 87), "restart_sogo", [], "any", false, false, false, 87), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 89
            echo "          </ul>
        </li>
        ";
        }
        // line 92
        echo "        ";
        if ((($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null))) {
            // line 93
            echo "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"bi bi-link-45deg me-2\"></i> ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 94);
            echo "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 97
                echo "              ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 97)))) {
                    // line 98
                    echo "              <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 98)) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 98), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 99), "html", null, true);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 99), "html", null, true);
                    echo "</a>
              </li>
              ";
                }
                // line 102
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 104
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 105
                    echo "              <li><a href=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "          </ul>
        </li>
        ";
        }
        // line 111
        echo "        ";
        if (( !($context["dual_login"] ?? null) && ($context["mailcow_cc_username"] ?? null))) {
            // line 112
            echo "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            echo twig_escape_filter($this->env, ($context["mailcow_cc_username"] ?? null), "html", null, true);
            echo "</b> <i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        } elseif (        // line 113
($context["dual_login"] ?? null)) {
            // line 114
            echo "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            echo twig_escape_filter($this->env, ($context["mailcow_cc_username"] ?? null), "html", null, true);
            echo " <span class=\"text-info\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dual_login"] ?? null), "username", [], "any", false, false, false, 114), "html", null, true);
            echo ")</span> </b><i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        }
        // line 116
        echo "        ";
        if ( !($context["is_master"] ?? null)) {
            // line 117
            echo "        <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <li class=\"slave-info\">[ slave ]</li>
        </div>
        ";
        }
        // line 121
        echo "      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
";
    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  930 => 136,  922 => 121,  916 => 117,  913 => 116,  905 => 114,  903 => 113,  898 => 112,  895 => 111,  890 => 108,  884 => 107,  873 => 105,  868 => 104,  863 => 103,  857 => 102,  849 => 99,  840 => 98,  837 => 97,  833 => 96,  828 => 94,  825 => 93,  822 => 92,  817 => 89,  811 => 87,  808 => 86,  798 => 84,  796 => 83,  787 => 82,  777 => 80,  775 => 79,  770 => 77,  765 => 74,  755 => 72,  752 => 71,  743 => 69,  734 => 68,  732 => 67,  727 => 65,  724 => 64,  721 => 63,  716 => 60,  704 => 56,  696 => 55,  693 => 54,  689 => 53,  684 => 51,  677 => 50,  675 => 49,  659 => 36,  655 => 35,  650 => 32,  646 => 31,  639 => 552,  633 => 549,  624 => 547,  620 => 545,  618 => 544,  615 => 543,  604 => 540,  600 => 538,  597 => 537,  591 => 535,  589 => 534,  578 => 526,  574 => 524,  566 => 519,  563 => 518,  561 => 517,  513 => 472,  439 => 401,  383 => 347,  250 => 216,  248 => 215,  244 => 213,  233 => 211,  229 => 210,  180 => 164,  169 => 156,  165 => 155,  161 => 154,  157 => 153,  153 => 152,  149 => 151,  145 => 150,  140 => 148,  136 => 147,  132 => 146,  128 => 145,  124 => 144,  120 => 143,  115 => 141,  112 => 140,  110 => 139,  106 => 137,  104 => 136,  100 => 134,  92 => 131,  89 => 130,  87 => 129,  82 => 126,  80 => 31,  57 => 11,  52 => 9,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/web/templates/base.twig");
    }
}
