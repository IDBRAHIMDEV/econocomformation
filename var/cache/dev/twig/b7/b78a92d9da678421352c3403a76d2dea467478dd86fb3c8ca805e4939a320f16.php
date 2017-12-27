<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6a523ded7db85c60d66359ccbf04efb533eeb0ba30dee6b79bfe8c8916ace336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4e905e23ee3d52922c3309a56af985dac2155c3734f36b0debd2cc12d1829a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e905e23ee3d52922c3309a56af985dac2155c3734f36b0debd2cc12d1829a5f->enter($__internal_4e905e23ee3d52922c3309a56af985dac2155c3734f36b0debd2cc12d1829a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0d0b580c60bb2e86686d07fd921ac5056ed9dddce0e5e1f8dfdf64bb2b9777fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0b580c60bb2e86686d07fd921ac5056ed9dddce0e5e1f8dfdf64bb2b9777fd->enter($__internal_0d0b580c60bb2e86686d07fd921ac5056ed9dddce0e5e1f8dfdf64bb2b9777fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e905e23ee3d52922c3309a56af985dac2155c3734f36b0debd2cc12d1829a5f->leave($__internal_4e905e23ee3d52922c3309a56af985dac2155c3734f36b0debd2cc12d1829a5f_prof);

        
        $__internal_0d0b580c60bb2e86686d07fd921ac5056ed9dddce0e5e1f8dfdf64bb2b9777fd->leave($__internal_0d0b580c60bb2e86686d07fd921ac5056ed9dddce0e5e1f8dfdf64bb2b9777fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a58ab4eaa23eb7fe9306a0d3e5eb7c33856ceb23a56582b87bff09bf537b9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a58ab4eaa23eb7fe9306a0d3e5eb7c33856ceb23a56582b87bff09bf537b9de->enter($__internal_3a58ab4eaa23eb7fe9306a0d3e5eb7c33856ceb23a56582b87bff09bf537b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f852c87d3eeec2f6feb7fc30318e9aa219f8918b224410ab3e56e88d94e16f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f852c87d3eeec2f6feb7fc30318e9aa219f8918b224410ab3e56e88d94e16f9->enter($__internal_5f852c87d3eeec2f6feb7fc30318e9aa219f8918b224410ab3e56e88d94e16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f852c87d3eeec2f6feb7fc30318e9aa219f8918b224410ab3e56e88d94e16f9->leave($__internal_5f852c87d3eeec2f6feb7fc30318e9aa219f8918b224410ab3e56e88d94e16f9_prof);

        
        $__internal_3a58ab4eaa23eb7fe9306a0d3e5eb7c33856ceb23a56582b87bff09bf537b9de->leave($__internal_3a58ab4eaa23eb7fe9306a0d3e5eb7c33856ceb23a56582b87bff09bf537b9de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54d6b61daeac21914ae8ae2766edc8a978de61c10df31894a246ceae3cd7cfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d6b61daeac21914ae8ae2766edc8a978de61c10df31894a246ceae3cd7cfa6->enter($__internal_54d6b61daeac21914ae8ae2766edc8a978de61c10df31894a246ceae3cd7cfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0c561527fea2bf7abcf33aa6007eedd1436816ccd4ed9d33273a4670d88d8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c561527fea2bf7abcf33aa6007eedd1436816ccd4ed9d33273a4670d88d8e2->enter($__internal_a0c561527fea2bf7abcf33aa6007eedd1436816ccd4ed9d33273a4670d88d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a0c561527fea2bf7abcf33aa6007eedd1436816ccd4ed9d33273a4670d88d8e2->leave($__internal_a0c561527fea2bf7abcf33aa6007eedd1436816ccd4ed9d33273a4670d88d8e2_prof);

        
        $__internal_54d6b61daeac21914ae8ae2766edc8a978de61c10df31894a246ceae3cd7cfa6->leave($__internal_54d6b61daeac21914ae8ae2766edc8a978de61c10df31894a246ceae3cd7cfa6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
