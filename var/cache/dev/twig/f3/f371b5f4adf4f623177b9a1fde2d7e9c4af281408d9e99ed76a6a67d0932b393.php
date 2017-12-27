<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_20948cb9484db7b38d80e546e5c25086f5658fbfdceb1e18ad23cb316712d950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6daff74731976ddebc3103121d2f19ef124e4b8317a388b29693ed0a9edfbaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6daff74731976ddebc3103121d2f19ef124e4b8317a388b29693ed0a9edfbaa4->enter($__internal_6daff74731976ddebc3103121d2f19ef124e4b8317a388b29693ed0a9edfbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d8ae288c657117a842f6cfa2520498da243bf80b36ddec429a9419db33ead923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ae288c657117a842f6cfa2520498da243bf80b36ddec429a9419db33ead923->enter($__internal_d8ae288c657117a842f6cfa2520498da243bf80b36ddec429a9419db33ead923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6daff74731976ddebc3103121d2f19ef124e4b8317a388b29693ed0a9edfbaa4->leave($__internal_6daff74731976ddebc3103121d2f19ef124e4b8317a388b29693ed0a9edfbaa4_prof);

        
        $__internal_d8ae288c657117a842f6cfa2520498da243bf80b36ddec429a9419db33ead923->leave($__internal_d8ae288c657117a842f6cfa2520498da243bf80b36ddec429a9419db33ead923_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a655b0d4477a6a41b2a036114262d049cb4a991b5ececa55866d9db108b4ca5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a655b0d4477a6a41b2a036114262d049cb4a991b5ececa55866d9db108b4ca5b->enter($__internal_a655b0d4477a6a41b2a036114262d049cb4a991b5ececa55866d9db108b4ca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6de8d4eb8d4793fa79206de557f9d90a4e399c098283a02727f96625ba15b59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de8d4eb8d4793fa79206de557f9d90a4e399c098283a02727f96625ba15b59a->enter($__internal_6de8d4eb8d4793fa79206de557f9d90a4e399c098283a02727f96625ba15b59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6de8d4eb8d4793fa79206de557f9d90a4e399c098283a02727f96625ba15b59a->leave($__internal_6de8d4eb8d4793fa79206de557f9d90a4e399c098283a02727f96625ba15b59a_prof);

        
        $__internal_a655b0d4477a6a41b2a036114262d049cb4a991b5ececa55866d9db108b4ca5b->leave($__internal_a655b0d4477a6a41b2a036114262d049cb4a991b5ececa55866d9db108b4ca5b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad3e1911ba6ae041aa81e600cf31001e67465e3e517587b7c05806eb6c7f246c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3e1911ba6ae041aa81e600cf31001e67465e3e517587b7c05806eb6c7f246c->enter($__internal_ad3e1911ba6ae041aa81e600cf31001e67465e3e517587b7c05806eb6c7f246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc1f78b672b324c81f3e4101c818b38f6f86fe9ccb4a5949d10e1abd84c4da7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1f78b672b324c81f3e4101c818b38f6f86fe9ccb4a5949d10e1abd84c4da7d->enter($__internal_bc1f78b672b324c81f3e4101c818b38f6f86fe9ccb4a5949d10e1abd84c4da7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bc1f78b672b324c81f3e4101c818b38f6f86fe9ccb4a5949d10e1abd84c4da7d->leave($__internal_bc1f78b672b324c81f3e4101c818b38f6f86fe9ccb4a5949d10e1abd84c4da7d_prof);

        
        $__internal_ad3e1911ba6ae041aa81e600cf31001e67465e3e517587b7c05806eb6c7f246c->leave($__internal_ad3e1911ba6ae041aa81e600cf31001e67465e3e517587b7c05806eb6c7f246c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
