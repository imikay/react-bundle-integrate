<?php

/* base.html.twig */
class __TwigTemplate_d5ff576d060946be8460a2cbce09becc8d27188cbb788654036a38fd4fac32ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe2c6b0b2e96ff513ad26b87e33f69713c8dfe5f6ac5f37eccd987534bbf3b7d = $this->env->getExtension("native_profiler");
        $__internal_fe2c6b0b2e96ff513ad26b87e33f69713c8dfe5f6ac5f37eccd987534bbf3b7d->enter($__internal_fe2c6b0b2e96ff513ad26b87e33f69713c8dfe5f6ac5f37eccd987534bbf3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_fe2c6b0b2e96ff513ad26b87e33f69713c8dfe5f6ac5f37eccd987534bbf3b7d->leave($__internal_fe2c6b0b2e96ff513ad26b87e33f69713c8dfe5f6ac5f37eccd987534bbf3b7d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e4aeb507ee0d61048b974c5d1298880e22475eb4ffde779b02e3990fe18f2e = $this->env->getExtension("native_profiler");
        $__internal_f2e4aeb507ee0d61048b974c5d1298880e22475eb4ffde779b02e3990fe18f2e->enter($__internal_f2e4aeb507ee0d61048b974c5d1298880e22475eb4ffde779b02e3990fe18f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2e4aeb507ee0d61048b974c5d1298880e22475eb4ffde779b02e3990fe18f2e->leave($__internal_f2e4aeb507ee0d61048b974c5d1298880e22475eb4ffde779b02e3990fe18f2e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43ca872ccb02f95408f7681fa7d0d45895b7366d9a238414966ef48d11ccdaf3 = $this->env->getExtension("native_profiler");
        $__internal_43ca872ccb02f95408f7681fa7d0d45895b7366d9a238414966ef48d11ccdaf3->enter($__internal_43ca872ccb02f95408f7681fa7d0d45895b7366d9a238414966ef48d11ccdaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_43ca872ccb02f95408f7681fa7d0d45895b7366d9a238414966ef48d11ccdaf3->leave($__internal_43ca872ccb02f95408f7681fa7d0d45895b7366d9a238414966ef48d11ccdaf3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5028707088d9390f57949b993114507aa9efc95626666b654024a0ed96d3470 = $this->env->getExtension("native_profiler");
        $__internal_f5028707088d9390f57949b993114507aa9efc95626666b654024a0ed96d3470->enter($__internal_f5028707088d9390f57949b993114507aa9efc95626666b654024a0ed96d3470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5028707088d9390f57949b993114507aa9efc95626666b654024a0ed96d3470->leave($__internal_f5028707088d9390f57949b993114507aa9efc95626666b654024a0ed96d3470_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f098825c034ad5d2658b9e0c4bf049c680c0e0c3558eaa81e715c9ed60312be = $this->env->getExtension("native_profiler");
        $__internal_8f098825c034ad5d2658b9e0c4bf049c680c0e0c3558eaa81e715c9ed60312be->enter($__internal_8f098825c034ad5d2658b9e0c4bf049c680c0e0c3558eaa81e715c9ed60312be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "          <script src=\"/app/dist/client-bundle.js\"></script>
        ";
        
        $__internal_8f098825c034ad5d2658b9e0c4bf049c680c0e0c3558eaa81e715c9ed60312be->leave($__internal_8f098825c034ad5d2658b9e0c4bf049c680c0e0c3558eaa81e715c9ed60312be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 12,  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 14,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*           <script src="/app/dist/client-bundle.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
