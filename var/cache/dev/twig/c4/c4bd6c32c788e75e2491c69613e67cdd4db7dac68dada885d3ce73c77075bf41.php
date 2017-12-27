<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_45bea2313c538a2004e5fe6b6234a045a6da19e7e482b2aaa3ab21d8affe724a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec0eb8e90561a735a89db131b534df7999b5aab112a579ad332125b9ebdb5392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0eb8e90561a735a89db131b534df7999b5aab112a579ad332125b9ebdb5392->enter($__internal_ec0eb8e90561a735a89db131b534df7999b5aab112a579ad332125b9ebdb5392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_18010bb588880b3b46ab174b5a453bf71f9a4d91de605425035859d40199be4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18010bb588880b3b46ab174b5a453bf71f9a4d91de605425035859d40199be4b->enter($__internal_18010bb588880b3b46ab174b5a453bf71f9a4d91de605425035859d40199be4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0eb8e90561a735a89db131b534df7999b5aab112a579ad332125b9ebdb5392->leave($__internal_ec0eb8e90561a735a89db131b534df7999b5aab112a579ad332125b9ebdb5392_prof);

        
        $__internal_18010bb588880b3b46ab174b5a453bf71f9a4d91de605425035859d40199be4b->leave($__internal_18010bb588880b3b46ab174b5a453bf71f9a4d91de605425035859d40199be4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b8381346f9f2b38d25b61fde05b0156188d731d1625eaab15be450ed59d61c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8381346f9f2b38d25b61fde05b0156188d731d1625eaab15be450ed59d61c4->enter($__internal_0b8381346f9f2b38d25b61fde05b0156188d731d1625eaab15be450ed59d61c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_adc98292937deb2f57212bf4a1a2fa6d2479ffbdb86ee5847d2e134099f09ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc98292937deb2f57212bf4a1a2fa6d2479ffbdb86ee5847d2e134099f09ee1->enter($__internal_adc98292937deb2f57212bf4a1a2fa6d2479ffbdb86ee5847d2e134099f09ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_adc98292937deb2f57212bf4a1a2fa6d2479ffbdb86ee5847d2e134099f09ee1->leave($__internal_adc98292937deb2f57212bf4a1a2fa6d2479ffbdb86ee5847d2e134099f09ee1_prof);

        
        $__internal_0b8381346f9f2b38d25b61fde05b0156188d731d1625eaab15be450ed59d61c4->leave($__internal_0b8381346f9f2b38d25b61fde05b0156188d731d1625eaab15be450ed59d61c4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07cf5451468361b8526210b1fd04c3175b2b9c76d36666d9b548d2539032a1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cf5451468361b8526210b1fd04c3175b2b9c76d36666d9b548d2539032a1e9->enter($__internal_07cf5451468361b8526210b1fd04c3175b2b9c76d36666d9b548d2539032a1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2f230a6a92055c2ceeec3c4fef954ad525434cbc6e21d70c0eb4eb424265d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f230a6a92055c2ceeec3c4fef954ad525434cbc6e21d70c0eb4eb424265d91->enter($__internal_e2f230a6a92055c2ceeec3c4fef954ad525434cbc6e21d70c0eb4eb424265d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e2f230a6a92055c2ceeec3c4fef954ad525434cbc6e21d70c0eb4eb424265d91->leave($__internal_e2f230a6a92055c2ceeec3c4fef954ad525434cbc6e21d70c0eb4eb424265d91_prof);

        
        $__internal_07cf5451468361b8526210b1fd04c3175b2b9c76d36666d9b548d2539032a1e9->leave($__internal_07cf5451468361b8526210b1fd04c3175b2b9c76d36666d9b548d2539032a1e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
