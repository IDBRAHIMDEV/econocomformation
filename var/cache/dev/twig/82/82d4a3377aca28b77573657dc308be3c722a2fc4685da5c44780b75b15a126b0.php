<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
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
        $__internal_5b089a3d98bf4ba8a4111f5c486df045dc47d89a31a499e5a880f0d5dc06f6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b089a3d98bf4ba8a4111f5c486df045dc47d89a31a499e5a880f0d5dc06f6e5->enter($__internal_5b089a3d98bf4ba8a4111f5c486df045dc47d89a31a499e5a880f0d5dc06f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1a5a73157313dcac554bdbfdde91831fb04543450dd1d8804ec2728c656950e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5a73157313dcac554bdbfdde91831fb04543450dd1d8804ec2728c656950e9->enter($__internal_1a5a73157313dcac554bdbfdde91831fb04543450dd1d8804ec2728c656950e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b089a3d98bf4ba8a4111f5c486df045dc47d89a31a499e5a880f0d5dc06f6e5->leave($__internal_5b089a3d98bf4ba8a4111f5c486df045dc47d89a31a499e5a880f0d5dc06f6e5_prof);

        
        $__internal_1a5a73157313dcac554bdbfdde91831fb04543450dd1d8804ec2728c656950e9->leave($__internal_1a5a73157313dcac554bdbfdde91831fb04543450dd1d8804ec2728c656950e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc004e9db33e514dae39c9a2027a0cffcf75fea9b7c929222927c621e62594fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc004e9db33e514dae39c9a2027a0cffcf75fea9b7c929222927c621e62594fb->enter($__internal_dc004e9db33e514dae39c9a2027a0cffcf75fea9b7c929222927c621e62594fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72ab0bb6c3b9d63f6f208d994290cb96f60b026499b400e4a6f68d6c4e3527a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ab0bb6c3b9d63f6f208d994290cb96f60b026499b400e4a6f68d6c4e3527a5->enter($__internal_72ab0bb6c3b9d63f6f208d994290cb96f60b026499b400e4a6f68d6c4e3527a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72ab0bb6c3b9d63f6f208d994290cb96f60b026499b400e4a6f68d6c4e3527a5->leave($__internal_72ab0bb6c3b9d63f6f208d994290cb96f60b026499b400e4a6f68d6c4e3527a5_prof);

        
        $__internal_dc004e9db33e514dae39c9a2027a0cffcf75fea9b7c929222927c621e62594fb->leave($__internal_dc004e9db33e514dae39c9a2027a0cffcf75fea9b7c929222927c621e62594fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_303ff7d7dadd565ee8cc41758221ea65af55fe4e1bf7957c8afb092723a52996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303ff7d7dadd565ee8cc41758221ea65af55fe4e1bf7957c8afb092723a52996->enter($__internal_303ff7d7dadd565ee8cc41758221ea65af55fe4e1bf7957c8afb092723a52996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23dff85eb589ef8d38bfe0449e6e34402b8849529b5d9ed4d0daf5fa7ef912c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dff85eb589ef8d38bfe0449e6e34402b8849529b5d9ed4d0daf5fa7ef912c9->enter($__internal_23dff85eb589ef8d38bfe0449e6e34402b8849529b5d9ed4d0daf5fa7ef912c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23dff85eb589ef8d38bfe0449e6e34402b8849529b5d9ed4d0daf5fa7ef912c9->leave($__internal_23dff85eb589ef8d38bfe0449e6e34402b8849529b5d9ed4d0daf5fa7ef912c9_prof);

        
        $__internal_303ff7d7dadd565ee8cc41758221ea65af55fe4e1bf7957c8afb092723a52996->leave($__internal_303ff7d7dadd565ee8cc41758221ea65af55fe4e1bf7957c8afb092723a52996_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3768ca7e2c9b4deae1715fb8f3dd13ecbe7ce0d34963ca9cc527900740a1558c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3768ca7e2c9b4deae1715fb8f3dd13ecbe7ce0d34963ca9cc527900740a1558c->enter($__internal_3768ca7e2c9b4deae1715fb8f3dd13ecbe7ce0d34963ca9cc527900740a1558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8351084c003e32714ae1d7dc28b953de921bd64d4d6fc57f6cbe123b6cfe93a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8351084c003e32714ae1d7dc28b953de921bd64d4d6fc57f6cbe123b6cfe93a3->enter($__internal_8351084c003e32714ae1d7dc28b953de921bd64d4d6fc57f6cbe123b6cfe93a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8351084c003e32714ae1d7dc28b953de921bd64d4d6fc57f6cbe123b6cfe93a3->leave($__internal_8351084c003e32714ae1d7dc28b953de921bd64d4d6fc57f6cbe123b6cfe93a3_prof);

        
        $__internal_3768ca7e2c9b4deae1715fb8f3dd13ecbe7ce0d34963ca9cc527900740a1558c->leave($__internal_3768ca7e2c9b4deae1715fb8f3dd13ecbe7ce0d34963ca9cc527900740a1558c_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
