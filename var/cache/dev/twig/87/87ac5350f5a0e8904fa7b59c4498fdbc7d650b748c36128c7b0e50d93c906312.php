<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b1f16b38ef51c734b4b1b0c36425242c53e33a8447732e9d59539e816acd8ebe extends Twig_Template
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
        $__internal_ed39a3ff9c4b42c2ad20a46f1b923de97b9250570cd63c117a10bf97cf8578b4 = $this->env->getExtension("native_profiler");
        $__internal_ed39a3ff9c4b42c2ad20a46f1b923de97b9250570cd63c117a10bf97cf8578b4->enter($__internal_ed39a3ff9c4b42c2ad20a46f1b923de97b9250570cd63c117a10bf97cf8578b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed39a3ff9c4b42c2ad20a46f1b923de97b9250570cd63c117a10bf97cf8578b4->leave($__internal_ed39a3ff9c4b42c2ad20a46f1b923de97b9250570cd63c117a10bf97cf8578b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec1fb8746222202fa27c6e90c130fb173621cb0e7737b3147799d7029510c105 = $this->env->getExtension("native_profiler");
        $__internal_ec1fb8746222202fa27c6e90c130fb173621cb0e7737b3147799d7029510c105->enter($__internal_ec1fb8746222202fa27c6e90c130fb173621cb0e7737b3147799d7029510c105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec1fb8746222202fa27c6e90c130fb173621cb0e7737b3147799d7029510c105->leave($__internal_ec1fb8746222202fa27c6e90c130fb173621cb0e7737b3147799d7029510c105_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90f37422638b7d5f45aeaea2d42402fc182e6ffd8e82aca06590a3c2c3913fe9 = $this->env->getExtension("native_profiler");
        $__internal_90f37422638b7d5f45aeaea2d42402fc182e6ffd8e82aca06590a3c2c3913fe9->enter($__internal_90f37422638b7d5f45aeaea2d42402fc182e6ffd8e82aca06590a3c2c3913fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90f37422638b7d5f45aeaea2d42402fc182e6ffd8e82aca06590a3c2c3913fe9->leave($__internal_90f37422638b7d5f45aeaea2d42402fc182e6ffd8e82aca06590a3c2c3913fe9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea4b1047fc8eb50bafb3993302678464877603fbef735b92d716138ce195a7ca = $this->env->getExtension("native_profiler");
        $__internal_ea4b1047fc8eb50bafb3993302678464877603fbef735b92d716138ce195a7ca->enter($__internal_ea4b1047fc8eb50bafb3993302678464877603fbef735b92d716138ce195a7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea4b1047fc8eb50bafb3993302678464877603fbef735b92d716138ce195a7ca->leave($__internal_ea4b1047fc8eb50bafb3993302678464877603fbef735b92d716138ce195a7ca_prof);

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
