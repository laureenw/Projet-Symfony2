<?php

/* FOSUserBundle:Default:contact.html.twig */
class __TwigTemplate_d57edf2bb2783e179ebbbaefc6bbaa6f1eccaf6dfcbcaf53b9479e5a8c3560c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Formulaire de contact";
    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($this->getContext($context, "form"));
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\">
    <hr>
    <div class=\"row\">


    <div class=\"col-xs-9\">
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"objectif\">
 
                <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fallen_contact");
        echo "\" method=\"POST\" id=\"contact_form\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sujet"), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-default\" />
            </form>
            </div>
       </div>
    </div>

    <div class=\"clearfix\"></div>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  67 => 19,  61 => 18,  49 => 8,  46 => 7,  39 => 5,  36 => 4,  30 => 3,);
    }
}
