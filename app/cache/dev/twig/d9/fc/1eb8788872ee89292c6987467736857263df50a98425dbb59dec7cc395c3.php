<?php

/* FallenBundle:Default:photos.html.twig */
class __TwigTemplate_d9fc1eb8788872ee89292c6987467736857263df50a98425dbb59dec7cc395c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <hr>
    <div class=\"row\">


    <div class=\"col-xs-9\">
        <!-- Tab panes -->
        <div class=\"tab-content\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "files"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "                <a class=\"fancybox\" rel=\"gallery1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "image")), "html", null, true);
            echo "\" title=\"\">
                    <img style=\"width:20%\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "image")), "html", null, true);
            echo "\" alt=\"\" />
                </a>  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "       </div>
    </div>

    <div class=\"clearfix\"></div>

    </div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$(\".fancybox\").fancybox({
\t\topenEffect\t: 'none',
\t\tcloseEffect\t: 'none'
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "FallenBundle:Default:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  50 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
