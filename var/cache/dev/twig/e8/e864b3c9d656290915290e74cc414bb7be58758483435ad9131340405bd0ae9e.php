<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b8a0445b74a059f7f9d98f7b881363fabcba45e161020f257eb48f59e45dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9b0b3b00b2763b49d43e6361afbc826359ae9b0a00a13267ce7bad402f1d9d = $this->env->getExtension("native_profiler");
        $__internal_6a9b0b3b00b2763b49d43e6361afbc826359ae9b0a00a13267ce7bad402f1d9d->enter($__internal_6a9b0b3b00b2763b49d43e6361afbc826359ae9b0a00a13267ce7bad402f1d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9b0b3b00b2763b49d43e6361afbc826359ae9b0a00a13267ce7bad402f1d9d->leave($__internal_6a9b0b3b00b2763b49d43e6361afbc826359ae9b0a00a13267ce7bad402f1d9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4861382febf822d00ef492889e5a4ad3ca6b51a50bbb2ec4c1ce8161d22c426a = $this->env->getExtension("native_profiler");
        $__internal_4861382febf822d00ef492889e5a4ad3ca6b51a50bbb2ec4c1ce8161d22c426a->enter($__internal_4861382febf822d00ef492889e5a4ad3ca6b51a50bbb2ec4c1ce8161d22c426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4861382febf822d00ef492889e5a4ad3ca6b51a50bbb2ec4c1ce8161d22c426a->leave($__internal_4861382febf822d00ef492889e5a4ad3ca6b51a50bbb2ec4c1ce8161d22c426a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d442561d752db9e4ceadfec5408c4ebe150dc23f989e0eb282b60c07e18440bb = $this->env->getExtension("native_profiler");
        $__internal_d442561d752db9e4ceadfec5408c4ebe150dc23f989e0eb282b60c07e18440bb->enter($__internal_d442561d752db9e4ceadfec5408c4ebe150dc23f989e0eb282b60c07e18440bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d442561d752db9e4ceadfec5408c4ebe150dc23f989e0eb282b60c07e18440bb->leave($__internal_d442561d752db9e4ceadfec5408c4ebe150dc23f989e0eb282b60c07e18440bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_289649bb6f0ea5cffee55f3fb657955c7461df0ff054bf91ffaa184c787b55aa = $this->env->getExtension("native_profiler");
        $__internal_289649bb6f0ea5cffee55f3fb657955c7461df0ff054bf91ffaa184c787b55aa->enter($__internal_289649bb6f0ea5cffee55f3fb657955c7461df0ff054bf91ffaa184c787b55aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_289649bb6f0ea5cffee55f3fb657955c7461df0ff054bf91ffaa184c787b55aa->leave($__internal_289649bb6f0ea5cffee55f3fb657955c7461df0ff054bf91ffaa184c787b55aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
