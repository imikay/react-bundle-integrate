<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8cfc666e0d72cd9d28cd0fe24c9522205f3c29817c353b01b589ffbed34d6989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b72d5e6ad5d3547c0a738d76e221c99ccceae8cf38ebb8e43b6300b71c710ad = $this->env->getExtension("native_profiler");
        $__internal_2b72d5e6ad5d3547c0a738d76e221c99ccceae8cf38ebb8e43b6300b71c710ad->enter($__internal_2b72d5e6ad5d3547c0a738d76e221c99ccceae8cf38ebb8e43b6300b71c710ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b72d5e6ad5d3547c0a738d76e221c99ccceae8cf38ebb8e43b6300b71c710ad->leave($__internal_2b72d5e6ad5d3547c0a738d76e221c99ccceae8cf38ebb8e43b6300b71c710ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2936d3a67675c1c6892d21a6c7a6ccd4f37eb02c9b691c000fc024ef337fa52 = $this->env->getExtension("native_profiler");
        $__internal_a2936d3a67675c1c6892d21a6c7a6ccd4f37eb02c9b691c000fc024ef337fa52->enter($__internal_a2936d3a67675c1c6892d21a6c7a6ccd4f37eb02c9b691c000fc024ef337fa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2936d3a67675c1c6892d21a6c7a6ccd4f37eb02c9b691c000fc024ef337fa52->leave($__internal_a2936d3a67675c1c6892d21a6c7a6ccd4f37eb02c9b691c000fc024ef337fa52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d7ca56d79f5fbe88bad173fb551178cc422626a70196869d5662ef1cf08b8c0 = $this->env->getExtension("native_profiler");
        $__internal_6d7ca56d79f5fbe88bad173fb551178cc422626a70196869d5662ef1cf08b8c0->enter($__internal_6d7ca56d79f5fbe88bad173fb551178cc422626a70196869d5662ef1cf08b8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d7ca56d79f5fbe88bad173fb551178cc422626a70196869d5662ef1cf08b8c0->leave($__internal_6d7ca56d79f5fbe88bad173fb551178cc422626a70196869d5662ef1cf08b8c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5bc2905f3d5e42422b0dcbc817fbe42106a7028dec844e0ddfd4a01cc49fe20 = $this->env->getExtension("native_profiler");
        $__internal_d5bc2905f3d5e42422b0dcbc817fbe42106a7028dec844e0ddfd4a01cc49fe20->enter($__internal_d5bc2905f3d5e42422b0dcbc817fbe42106a7028dec844e0ddfd4a01cc49fe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d5bc2905f3d5e42422b0dcbc817fbe42106a7028dec844e0ddfd4a01cc49fe20->leave($__internal_d5bc2905f3d5e42422b0dcbc817fbe42106a7028dec844e0ddfd4a01cc49fe20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
