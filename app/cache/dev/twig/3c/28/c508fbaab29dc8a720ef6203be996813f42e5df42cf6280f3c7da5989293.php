<?php

/* ::layout.html.twig */
class __TwigTemplate_3c28c508fbaab29dc8a720ef6203be996813f42e5df42cf6280f3c7da5989293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/html\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" media=\"all\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/html5audio.css"), "html", null, true);
        echo "\" />
        
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jscrollpane.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/soundmanager.js"), "html", null, true);
        echo "\" ></script>
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.html5audio.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.apPlaylistManager.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.apTextScroller.min.js"), "html", null, true);
        echo "\"></script>
      
        <!-- Add mousewheel plugin (this is optional) -->
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>

        <!-- Add fancyBox -->
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/jquery.fancybox.css?v=2.1.5"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"), "html", null, true);
        echo "\"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"), "html", null, true);
        echo "\"></script>
        
        
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <!--<div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = \"//connect.facebook.net/fr_FR/all.js#xfbml=1\";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>-->
        <div class=\"container\">
            <div class=\"pull-left\">
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("fallen_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/en.png"), "html", null, true);
        echo "\" width=\"50px\" /></a>
            </div>
            <div class=\"pull-right\">
                <a href=\"https://twitter.com/FallenEightBand\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/test.png"), "html", null, true);
        echo "\" width=\"50px\" /></a>
                <a href=\"https://www.facebook.com/FallenEight\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fb-logo2.png"), "html", null, true);
        echo "\" width=\"50px\" /></a>
                
            </div>
            <!--<div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"false\"></div>-->
            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/header.png"), "html", null, true);
        echo "\" />
            <!-- Static navbar -->
            <div class=\"menu\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("fallen_index");
        echo "\"><b id=\"titre\">Accueil</b></a></li>
                    <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("fallen_photos");
        echo "\"><b id=\"titre\">Photos</b></a></li>
                    <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("fallen_contact");
        echo "\"><b id=\"titre\">Contact</b></a></li>
                    ";
        // line 81
        if (($this->getAttribute($this->getContext($context, "app"), "user") && $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 82
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("administration");
            echo "\"><b id=\"titre\">Admin</b></a></li>
                    ";
        }
        // line 84
        echo "                </ul>

            </div><!--/.nav-collapse -->
            <!-- Main component -->
            <div class=\"philea-text-content\">
                ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "            </div>
        </div> <!-- container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 98
        $this->displayBlock('head', $context, $blocks);
        // line 99
        echo "        <br/>
        <div class=\"container\">
          <hr/>
          <div class=\"footer text-right\">
            <div class=\"footer\">
                <ul class=\"list-inline\">
                    ";
        // line 105
        if (($this->getAttribute($this->getContext($context, "app"), "user") && $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 106
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><b id=\"titre\">Déconnexion</b></a></li>
                       ";
        } else {
            // line 108
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("administration");
            echo "\">Connexion</a></li>
                    ";
        }
        // line 110
        echo "                    
                    <li><a href=\"#\">Mention légales</a></li>
                </ul>
            </div>
          </div>
        </div>
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Fallen Eight";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/projet.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/player.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "                ";
    }

    // line 98
    public function block_head($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 98,  283 => 90,  280 => 89,  274 => 12,  270 => 11,  266 => 10,  261 => 9,  258 => 8,  252 => 7,  241 => 110,  235 => 108,  229 => 106,  227 => 105,  219 => 99,  217 => 98,  212 => 96,  205 => 91,  203 => 89,  196 => 84,  190 => 82,  188 => 81,  184 => 80,  180 => 79,  176 => 78,  159 => 64,  152 => 60,  148 => 59,  140 => 56,  124 => 43,  120 => 42,  114 => 39,  110 => 38,  106 => 37,  100 => 34,  96 => 33,  90 => 30,  84 => 27,  80 => 26,  76 => 25,  64 => 22,  37 => 14,  23 => 1,  68 => 23,  65 => 19,  57 => 19,  54 => 17,  45 => 14,  40 => 13,  35 => 8,  32 => 10,  29 => 9,  72 => 24,  67 => 20,  60 => 21,  55 => 19,  51 => 18,  46 => 16,  42 => 15,  39 => 9,  33 => 7,  31 => 7,  28 => 5,);
    }
}
