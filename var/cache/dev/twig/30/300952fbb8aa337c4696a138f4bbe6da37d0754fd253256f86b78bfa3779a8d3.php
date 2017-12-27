<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_40dde7d7a4231c350361a8011f7ce7269fe007f68706f2ade9ad8ff942669975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_189a57528a63e78cef93e341526049f9abf4632c97eec8ffceb5be16e9f4d95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189a57528a63e78cef93e341526049f9abf4632c97eec8ffceb5be16e9f4d95f->enter($__internal_189a57528a63e78cef93e341526049f9abf4632c97eec8ffceb5be16e9f4d95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_691e489f1dbd49888e58589d36abb3d1751c1249b5948a789c16603dd129e477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691e489f1dbd49888e58589d36abb3d1751c1249b5948a789c16603dd129e477->enter($__internal_691e489f1dbd49888e58589d36abb3d1751c1249b5948a789c16603dd129e477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189a57528a63e78cef93e341526049f9abf4632c97eec8ffceb5be16e9f4d95f->leave($__internal_189a57528a63e78cef93e341526049f9abf4632c97eec8ffceb5be16e9f4d95f_prof);

        
        $__internal_691e489f1dbd49888e58589d36abb3d1751c1249b5948a789c16603dd129e477->leave($__internal_691e489f1dbd49888e58589d36abb3d1751c1249b5948a789c16603dd129e477_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60b72ba488a7ea1729c48119c131c5485abc1cd07002489dd3414f87992231b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b72ba488a7ea1729c48119c131c5485abc1cd07002489dd3414f87992231b6->enter($__internal_60b72ba488a7ea1729c48119c131c5485abc1cd07002489dd3414f87992231b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ca2d50de31de5ab4a2920f9b53186b22bc1089133d881e8c85717069374c768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca2d50de31de5ab4a2920f9b53186b22bc1089133d881e8c85717069374c768->enter($__internal_9ca2d50de31de5ab4a2920f9b53186b22bc1089133d881e8c85717069374c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ca2d50de31de5ab4a2920f9b53186b22bc1089133d881e8c85717069374c768->leave($__internal_9ca2d50de31de5ab4a2920f9b53186b22bc1089133d881e8c85717069374c768_prof);

        
        $__internal_60b72ba488a7ea1729c48119c131c5485abc1cd07002489dd3414f87992231b6->leave($__internal_60b72ba488a7ea1729c48119c131c5485abc1cd07002489dd3414f87992231b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_988f3e66706f8c0d27bd8f83257d05174544ad1d3760023e7135cdf312a1a754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988f3e66706f8c0d27bd8f83257d05174544ad1d3760023e7135cdf312a1a754->enter($__internal_988f3e66706f8c0d27bd8f83257d05174544ad1d3760023e7135cdf312a1a754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2634748967eec992f671fa0ab4b931206d1999305c8d1a924609e3667dcc9939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2634748967eec992f671fa0ab4b931206d1999305c8d1a924609e3667dcc9939->enter($__internal_2634748967eec992f671fa0ab4b931206d1999305c8d1a924609e3667dcc9939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2634748967eec992f671fa0ab4b931206d1999305c8d1a924609e3667dcc9939->leave($__internal_2634748967eec992f671fa0ab4b931206d1999305c8d1a924609e3667dcc9939_prof);

        
        $__internal_988f3e66706f8c0d27bd8f83257d05174544ad1d3760023e7135cdf312a1a754->leave($__internal_988f3e66706f8c0d27bd8f83257d05174544ad1d3760023e7135cdf312a1a754_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5654e8c7acd1a0e4e909052081c111f52623a8d3c8906f3897de8dedbf88ff06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5654e8c7acd1a0e4e909052081c111f52623a8d3c8906f3897de8dedbf88ff06->enter($__internal_5654e8c7acd1a0e4e909052081c111f52623a8d3c8906f3897de8dedbf88ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8c02f6d0ec5c177d913d4d61b9d1b26cdb32ff3d70bf4ff69158f12fc0023d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c02f6d0ec5c177d913d4d61b9d1b26cdb32ff3d70bf4ff69158f12fc0023d0->enter($__internal_c8c02f6d0ec5c177d913d4d61b9d1b26cdb32ff3d70bf4ff69158f12fc0023d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8c02f6d0ec5c177d913d4d61b9d1b26cdb32ff3d70bf4ff69158f12fc0023d0->leave($__internal_c8c02f6d0ec5c177d913d4d61b9d1b26cdb32ff3d70bf4ff69158f12fc0023d0_prof);

        
        $__internal_5654e8c7acd1a0e4e909052081c111f52623a8d3c8906f3897de8dedbf88ff06->leave($__internal_5654e8c7acd1a0e4e909052081c111f52623a8d3c8906f3897de8dedbf88ff06_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
