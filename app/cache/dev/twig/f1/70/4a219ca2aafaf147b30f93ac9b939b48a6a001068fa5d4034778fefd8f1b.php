<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_f1704a219ca2aafaf147b30f93ac9b939b48a6a001068fa5d4034778fefd8f1b extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  287 => 98,  283 => 90,  280 => 89,  274 => 12,  270 => 11,  266 => 10,  261 => 9,  258 => 8,  252 => 7,  241 => 110,  235 => 108,  229 => 106,  227 => 105,  219 => 99,  217 => 98,  212 => 96,  205 => 91,  203 => 89,  196 => 84,  190 => 82,  188 => 81,  184 => 80,  180 => 79,  176 => 78,  159 => 64,  152 => 60,  148 => 59,  140 => 56,  124 => 43,  120 => 42,  114 => 39,  110 => 38,  106 => 37,  100 => 34,  96 => 33,  90 => 30,  84 => 27,  80 => 26,  76 => 25,  64 => 22,  37 => 14,  23 => 1,  68 => 23,  65 => 19,  57 => 19,  54 => 17,  45 => 14,  40 => 13,  35 => 8,  32 => 6,  29 => 9,  72 => 24,  67 => 20,  60 => 21,  55 => 19,  51 => 18,  46 => 14,  42 => 12,  39 => 9,  33 => 7,  31 => 7,  28 => 5,);
    }
}
