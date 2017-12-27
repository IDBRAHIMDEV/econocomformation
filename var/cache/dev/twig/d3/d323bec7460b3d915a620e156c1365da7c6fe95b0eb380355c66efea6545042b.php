<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c96f6c2dfb32a1082817420a38bf4c8a8873649359c68c62ce12711cc0b1c039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_fce8de968c65469f911331a6b70bf6a792ad3458789d12cb32cf687347ff8f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce8de968c65469f911331a6b70bf6a792ad3458789d12cb32cf687347ff8f49->enter($__internal_fce8de968c65469f911331a6b70bf6a792ad3458789d12cb32cf687347ff8f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_058ff65e5ec1d4c4d6975b2c894b753e397428b20fb0672756af1adebc78a5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058ff65e5ec1d4c4d6975b2c894b753e397428b20fb0672756af1adebc78a5e1->enter($__internal_058ff65e5ec1d4c4d6975b2c894b753e397428b20fb0672756af1adebc78a5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce8de968c65469f911331a6b70bf6a792ad3458789d12cb32cf687347ff8f49->leave($__internal_fce8de968c65469f911331a6b70bf6a792ad3458789d12cb32cf687347ff8f49_prof);

        
        $__internal_058ff65e5ec1d4c4d6975b2c894b753e397428b20fb0672756af1adebc78a5e1->leave($__internal_058ff65e5ec1d4c4d6975b2c894b753e397428b20fb0672756af1adebc78a5e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdd19d53799eff920a8ab853f2674a051600ad5855962d7b510a0264da303560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd19d53799eff920a8ab853f2674a051600ad5855962d7b510a0264da303560->enter($__internal_bdd19d53799eff920a8ab853f2674a051600ad5855962d7b510a0264da303560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b209c59f2c644247a846d36dbbb9b131cbbcb3a492840da2620a211a6a44774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b209c59f2c644247a846d36dbbb9b131cbbcb3a492840da2620a211a6a44774->enter($__internal_9b209c59f2c644247a846d36dbbb9b131cbbcb3a492840da2620a211a6a44774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b209c59f2c644247a846d36dbbb9b131cbbcb3a492840da2620a211a6a44774->leave($__internal_9b209c59f2c644247a846d36dbbb9b131cbbcb3a492840da2620a211a6a44774_prof);

        
        $__internal_bdd19d53799eff920a8ab853f2674a051600ad5855962d7b510a0264da303560->leave($__internal_bdd19d53799eff920a8ab853f2674a051600ad5855962d7b510a0264da303560_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_80577f839f4039f45c8965d5c069f773bbbd2b319558d8ec153f4126c96ed1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80577f839f4039f45c8965d5c069f773bbbd2b319558d8ec153f4126c96ed1e6->enter($__internal_80577f839f4039f45c8965d5c069f773bbbd2b319558d8ec153f4126c96ed1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25b0e993ff383a0d3319c460bdabc9ab7d7f33d2a0bab63b1a874c5f76a63f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b0e993ff383a0d3319c460bdabc9ab7d7f33d2a0bab63b1a874c5f76a63f7a->enter($__internal_25b0e993ff383a0d3319c460bdabc9ab7d7f33d2a0bab63b1a874c5f76a63f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25b0e993ff383a0d3319c460bdabc9ab7d7f33d2a0bab63b1a874c5f76a63f7a->leave($__internal_25b0e993ff383a0d3319c460bdabc9ab7d7f33d2a0bab63b1a874c5f76a63f7a_prof);

        
        $__internal_80577f839f4039f45c8965d5c069f773bbbd2b319558d8ec153f4126c96ed1e6->leave($__internal_80577f839f4039f45c8965d5c069f773bbbd2b319558d8ec153f4126c96ed1e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
