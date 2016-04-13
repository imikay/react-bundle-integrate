<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c879e4643a39cf391cce2585af0fc17f55298c7d4f26020c266ef3a5ab593cbf extends Twig_Template
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
        $__internal_be74a8e201aff1af824c4d40e68bc711213d999ccefe3d69c7a6be9d890e90ba = $this->env->getExtension("native_profiler");
        $__internal_be74a8e201aff1af824c4d40e68bc711213d999ccefe3d69c7a6be9d890e90ba->enter($__internal_be74a8e201aff1af824c4d40e68bc711213d999ccefe3d69c7a6be9d890e90ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be74a8e201aff1af824c4d40e68bc711213d999ccefe3d69c7a6be9d890e90ba->leave($__internal_be74a8e201aff1af824c4d40e68bc711213d999ccefe3d69c7a6be9d890e90ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee5d6fa4df4dbfccc480d7e0746a1e4ddd302459f9eb10d6e733f192fe8dcf51 = $this->env->getExtension("native_profiler");
        $__internal_ee5d6fa4df4dbfccc480d7e0746a1e4ddd302459f9eb10d6e733f192fe8dcf51->enter($__internal_ee5d6fa4df4dbfccc480d7e0746a1e4ddd302459f9eb10d6e733f192fe8dcf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee5d6fa4df4dbfccc480d7e0746a1e4ddd302459f9eb10d6e733f192fe8dcf51->leave($__internal_ee5d6fa4df4dbfccc480d7e0746a1e4ddd302459f9eb10d6e733f192fe8dcf51_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_864e266ca4648a7b08b30ba303ad04f04a61567052f3cc9d94bdd06b29d8c0f2 = $this->env->getExtension("native_profiler");
        $__internal_864e266ca4648a7b08b30ba303ad04f04a61567052f3cc9d94bdd06b29d8c0f2->enter($__internal_864e266ca4648a7b08b30ba303ad04f04a61567052f3cc9d94bdd06b29d8c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_864e266ca4648a7b08b30ba303ad04f04a61567052f3cc9d94bdd06b29d8c0f2->leave($__internal_864e266ca4648a7b08b30ba303ad04f04a61567052f3cc9d94bdd06b29d8c0f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6497cdb3b05310028b0a74fe09ac53b3452e6791d027ce27ef171074a1ee65a9 = $this->env->getExtension("native_profiler");
        $__internal_6497cdb3b05310028b0a74fe09ac53b3452e6791d027ce27ef171074a1ee65a9->enter($__internal_6497cdb3b05310028b0a74fe09ac53b3452e6791d027ce27ef171074a1ee65a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6497cdb3b05310028b0a74fe09ac53b3452e6791d027ce27ef171074a1ee65a9->leave($__internal_6497cdb3b05310028b0a74fe09ac53b3452e6791d027ce27ef171074a1ee65a9_prof);

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
