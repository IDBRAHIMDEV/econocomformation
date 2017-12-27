<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a0101072286096cd49d356127a35e50be9fb2c6bf9f1d947efe00afdfbd91f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_da0f32d37d5d719ae0b1e70f2ff451a7fc9ca80f44dbfa8a0b16ccaac9eb26bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0f32d37d5d719ae0b1e70f2ff451a7fc9ca80f44dbfa8a0b16ccaac9eb26bd->enter($__internal_da0f32d37d5d719ae0b1e70f2ff451a7fc9ca80f44dbfa8a0b16ccaac9eb26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_66d71cbc146240a8f046af10b97961505aa29abf9e0fcf896ccb18f8e1a0bac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d71cbc146240a8f046af10b97961505aa29abf9e0fcf896ccb18f8e1a0bac0->enter($__internal_66d71cbc146240a8f046af10b97961505aa29abf9e0fcf896ccb18f8e1a0bac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0f32d37d5d719ae0b1e70f2ff451a7fc9ca80f44dbfa8a0b16ccaac9eb26bd->leave($__internal_da0f32d37d5d719ae0b1e70f2ff451a7fc9ca80f44dbfa8a0b16ccaac9eb26bd_prof);

        
        $__internal_66d71cbc146240a8f046af10b97961505aa29abf9e0fcf896ccb18f8e1a0bac0->leave($__internal_66d71cbc146240a8f046af10b97961505aa29abf9e0fcf896ccb18f8e1a0bac0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7827be9c6d7898e7f64e236614e174d57bff424844c6ff7aa589cd088fc0849c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7827be9c6d7898e7f64e236614e174d57bff424844c6ff7aa589cd088fc0849c->enter($__internal_7827be9c6d7898e7f64e236614e174d57bff424844c6ff7aa589cd088fc0849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6ba228b53a1ce27d099020b784027d91a0ab1da6bf3d2a76d6e83119197a9783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba228b53a1ce27d099020b784027d91a0ab1da6bf3d2a76d6e83119197a9783->enter($__internal_6ba228b53a1ce27d099020b784027d91a0ab1da6bf3d2a76d6e83119197a9783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6ba228b53a1ce27d099020b784027d91a0ab1da6bf3d2a76d6e83119197a9783->leave($__internal_6ba228b53a1ce27d099020b784027d91a0ab1da6bf3d2a76d6e83119197a9783_prof);

        
        $__internal_7827be9c6d7898e7f64e236614e174d57bff424844c6ff7aa589cd088fc0849c->leave($__internal_7827be9c6d7898e7f64e236614e174d57bff424844c6ff7aa589cd088fc0849c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13c6a29aae187278e9b824e0c89d6c99dc2fb0beb49aa0102860249bfb7eef01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c6a29aae187278e9b824e0c89d6c99dc2fb0beb49aa0102860249bfb7eef01->enter($__internal_13c6a29aae187278e9b824e0c89d6c99dc2fb0beb49aa0102860249bfb7eef01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a1f32e3ebfcba20f43f289f96f92165a2a35da561053eea4461bcda2c6967ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1f32e3ebfcba20f43f289f96f92165a2a35da561053eea4461bcda2c6967ba->enter($__internal_4a1f32e3ebfcba20f43f289f96f92165a2a35da561053eea4461bcda2c6967ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4a1f32e3ebfcba20f43f289f96f92165a2a35da561053eea4461bcda2c6967ba->leave($__internal_4a1f32e3ebfcba20f43f289f96f92165a2a35da561053eea4461bcda2c6967ba_prof);

        
        $__internal_13c6a29aae187278e9b824e0c89d6c99dc2fb0beb49aa0102860249bfb7eef01->leave($__internal_13c6a29aae187278e9b824e0c89d6c99dc2fb0beb49aa0102860249bfb7eef01_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48e215a3989fcffdff156f89e724063ddcca1af0245a0cfb76024cf31311d497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e215a3989fcffdff156f89e724063ddcca1af0245a0cfb76024cf31311d497->enter($__internal_48e215a3989fcffdff156f89e724063ddcca1af0245a0cfb76024cf31311d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9cb8ba5b9d3739918a652715be1b1bf34ad0078ae82858677d8a57b6c5553662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb8ba5b9d3739918a652715be1b1bf34ad0078ae82858677d8a57b6c5553662->enter($__internal_9cb8ba5b9d3739918a652715be1b1bf34ad0078ae82858677d8a57b6c5553662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9cb8ba5b9d3739918a652715be1b1bf34ad0078ae82858677d8a57b6c5553662->leave($__internal_9cb8ba5b9d3739918a652715be1b1bf34ad0078ae82858677d8a57b6c5553662_prof);

        
        $__internal_48e215a3989fcffdff156f89e724063ddcca1af0245a0cfb76024cf31311d497->leave($__internal_48e215a3989fcffdff156f89e724063ddcca1af0245a0cfb76024cf31311d497_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
