<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_866e2932f8483ff546be2b92c72aa57d78bb1d4a1c9a94cf8d77b593347081a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbeb9ef551408c25b89302ff33460fb99d62511e8c58f7e0b1a131ee185f40e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeb9ef551408c25b89302ff33460fb99d62511e8c58f7e0b1a131ee185f40e7->enter($__internal_dbeb9ef551408c25b89302ff33460fb99d62511e8c58f7e0b1a131ee185f40e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_4424a72661d1d0cfb3db5ab2479337f92ac54d6a70ecb0d78679930b2601448f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4424a72661d1d0cfb3db5ab2479337f92ac54d6a70ecb0d78679930b2601448f->enter($__internal_4424a72661d1d0cfb3db5ab2479337f92ac54d6a70ecb0d78679930b2601448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbeb9ef551408c25b89302ff33460fb99d62511e8c58f7e0b1a131ee185f40e7->leave($__internal_dbeb9ef551408c25b89302ff33460fb99d62511e8c58f7e0b1a131ee185f40e7_prof);

        
        $__internal_4424a72661d1d0cfb3db5ab2479337f92ac54d6a70ecb0d78679930b2601448f->leave($__internal_4424a72661d1d0cfb3db5ab2479337f92ac54d6a70ecb0d78679930b2601448f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13ee22f7c51ebd4733293c557388a65257cb0eee4802ed4eb94f0ffe385d1522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ee22f7c51ebd4733293c557388a65257cb0eee4802ed4eb94f0ffe385d1522->enter($__internal_13ee22f7c51ebd4733293c557388a65257cb0eee4802ed4eb94f0ffe385d1522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b95357bc9f25d5fea07a64b3339633c1bee0a2269345df4b57456890412d5e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95357bc9f25d5fea07a64b3339633c1bee0a2269345df4b57456890412d5e36->enter($__internal_b95357bc9f25d5fea07a64b3339633c1bee0a2269345df4b57456890412d5e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b95357bc9f25d5fea07a64b3339633c1bee0a2269345df4b57456890412d5e36->leave($__internal_b95357bc9f25d5fea07a64b3339633c1bee0a2269345df4b57456890412d5e36_prof);

        
        $__internal_13ee22f7c51ebd4733293c557388a65257cb0eee4802ed4eb94f0ffe385d1522->leave($__internal_13ee22f7c51ebd4733293c557388a65257cb0eee4802ed4eb94f0ffe385d1522_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
