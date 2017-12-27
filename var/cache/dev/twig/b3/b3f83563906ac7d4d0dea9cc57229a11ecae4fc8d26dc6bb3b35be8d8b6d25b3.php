<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_89c2c37e811f517fe402f6e7ce33e4f2f12b3d88378b40055913e8aa1ebba8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_df49f297fc940c67b561d601ca1fa9d517b08fa4a429d9917618a5c37a9e8883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df49f297fc940c67b561d601ca1fa9d517b08fa4a429d9917618a5c37a9e8883->enter($__internal_df49f297fc940c67b561d601ca1fa9d517b08fa4a429d9917618a5c37a9e8883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_785d2d9e0e009d0d78361845ebce62ac5f2a4ca5d236d0043376e04a0c5278d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d2d9e0e009d0d78361845ebce62ac5f2a4ca5d236d0043376e04a0c5278d1->enter($__internal_785d2d9e0e009d0d78361845ebce62ac5f2a4ca5d236d0043376e04a0c5278d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df49f297fc940c67b561d601ca1fa9d517b08fa4a429d9917618a5c37a9e8883->leave($__internal_df49f297fc940c67b561d601ca1fa9d517b08fa4a429d9917618a5c37a9e8883_prof);

        
        $__internal_785d2d9e0e009d0d78361845ebce62ac5f2a4ca5d236d0043376e04a0c5278d1->leave($__internal_785d2d9e0e009d0d78361845ebce62ac5f2a4ca5d236d0043376e04a0c5278d1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_49a418ceb8e3f414293b8a0f9cb4a0cc2e6ac377b644de571b1584f17f07028a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a418ceb8e3f414293b8a0f9cb4a0cc2e6ac377b644de571b1584f17f07028a->enter($__internal_49a418ceb8e3f414293b8a0f9cb4a0cc2e6ac377b644de571b1584f17f07028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1537e5618cb1d790f04dd95d21117c83e472b4841ade9208bb3d89a8619b6cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1537e5618cb1d790f04dd95d21117c83e472b4841ade9208bb3d89a8619b6cb4->enter($__internal_1537e5618cb1d790f04dd95d21117c83e472b4841ade9208bb3d89a8619b6cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1537e5618cb1d790f04dd95d21117c83e472b4841ade9208bb3d89a8619b6cb4->leave($__internal_1537e5618cb1d790f04dd95d21117c83e472b4841ade9208bb3d89a8619b6cb4_prof);

        
        $__internal_49a418ceb8e3f414293b8a0f9cb4a0cc2e6ac377b644de571b1584f17f07028a->leave($__internal_49a418ceb8e3f414293b8a0f9cb4a0cc2e6ac377b644de571b1584f17f07028a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef80635f0815116a0a98bb4432540fb6688cc12e54815c8c610b37ed350a0cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef80635f0815116a0a98bb4432540fb6688cc12e54815c8c610b37ed350a0cbd->enter($__internal_ef80635f0815116a0a98bb4432540fb6688cc12e54815c8c610b37ed350a0cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d6913e0f853bde828c7e7cf7636607aeaee94a4a329cf544613931bb5ee9868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6913e0f853bde828c7e7cf7636607aeaee94a4a329cf544613931bb5ee9868->enter($__internal_6d6913e0f853bde828c7e7cf7636607aeaee94a4a329cf544613931bb5ee9868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6d6913e0f853bde828c7e7cf7636607aeaee94a4a329cf544613931bb5ee9868->leave($__internal_6d6913e0f853bde828c7e7cf7636607aeaee94a4a329cf544613931bb5ee9868_prof);

        
        $__internal_ef80635f0815116a0a98bb4432540fb6688cc12e54815c8c610b37ed350a0cbd->leave($__internal_ef80635f0815116a0a98bb4432540fb6688cc12e54815c8c610b37ed350a0cbd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
