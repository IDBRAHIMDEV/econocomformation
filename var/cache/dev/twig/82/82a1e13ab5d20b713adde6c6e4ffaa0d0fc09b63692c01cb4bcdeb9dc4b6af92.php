<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_0f3fe18229c7bedbb2908eb22aa6b30f025fd75ee8c77340c13170f5f4b643df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3fe18229c7bedbb2908eb22aa6b30f025fd75ee8c77340c13170f5f4b643df->enter($__internal_0f3fe18229c7bedbb2908eb22aa6b30f025fd75ee8c77340c13170f5f4b643df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_88eeea1e4e7f07163e6462dfcab8433f0133c380e50f50e63917d5847928bb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88eeea1e4e7f07163e6462dfcab8433f0133c380e50f50e63917d5847928bb4e->enter($__internal_88eeea1e4e7f07163e6462dfcab8433f0133c380e50f50e63917d5847928bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3fe18229c7bedbb2908eb22aa6b30f025fd75ee8c77340c13170f5f4b643df->leave($__internal_0f3fe18229c7bedbb2908eb22aa6b30f025fd75ee8c77340c13170f5f4b643df_prof);

        
        $__internal_88eeea1e4e7f07163e6462dfcab8433f0133c380e50f50e63917d5847928bb4e->leave($__internal_88eeea1e4e7f07163e6462dfcab8433f0133c380e50f50e63917d5847928bb4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_771b74f5eb2647a432aead016c3c09d8993ab314cbfde1f5489ffd1921b50b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771b74f5eb2647a432aead016c3c09d8993ab314cbfde1f5489ffd1921b50b42->enter($__internal_771b74f5eb2647a432aead016c3c09d8993ab314cbfde1f5489ffd1921b50b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b18928dbaddef2529b0c49f99d6dd22fe9f4b412b5dfdb5e0f892cf5fa2ede0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18928dbaddef2529b0c49f99d6dd22fe9f4b412b5dfdb5e0f892cf5fa2ede0c->enter($__internal_b18928dbaddef2529b0c49f99d6dd22fe9f4b412b5dfdb5e0f892cf5fa2ede0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b18928dbaddef2529b0c49f99d6dd22fe9f4b412b5dfdb5e0f892cf5fa2ede0c->leave($__internal_b18928dbaddef2529b0c49f99d6dd22fe9f4b412b5dfdb5e0f892cf5fa2ede0c_prof);

        
        $__internal_771b74f5eb2647a432aead016c3c09d8993ab314cbfde1f5489ffd1921b50b42->leave($__internal_771b74f5eb2647a432aead016c3c09d8993ab314cbfde1f5489ffd1921b50b42_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ef8c9da3b9bf4e5f07133db501f029c53114726ace54ff163424c4f4c08fca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef8c9da3b9bf4e5f07133db501f029c53114726ace54ff163424c4f4c08fca2->enter($__internal_2ef8c9da3b9bf4e5f07133db501f029c53114726ace54ff163424c4f4c08fca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a30201f5158bf08a6f4da5b2dd257b108ecc9ab9f36f1e01dc4fe274986ad4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30201f5158bf08a6f4da5b2dd257b108ecc9ab9f36f1e01dc4fe274986ad4e5->enter($__internal_a30201f5158bf08a6f4da5b2dd257b108ecc9ab9f36f1e01dc4fe274986ad4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a30201f5158bf08a6f4da5b2dd257b108ecc9ab9f36f1e01dc4fe274986ad4e5->leave($__internal_a30201f5158bf08a6f4da5b2dd257b108ecc9ab9f36f1e01dc4fe274986ad4e5_prof);

        
        $__internal_2ef8c9da3b9bf4e5f07133db501f029c53114726ace54ff163424c4f4c08fca2->leave($__internal_2ef8c9da3b9bf4e5f07133db501f029c53114726ace54ff163424c4f4c08fca2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_717892dbc212641b88f2900e86bc60db620cc8fb8d057bea1b6feefeb728d21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717892dbc212641b88f2900e86bc60db620cc8fb8d057bea1b6feefeb728d21b->enter($__internal_717892dbc212641b88f2900e86bc60db620cc8fb8d057bea1b6feefeb728d21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d62b0e15a31a9f4023e32ed4b20325faf02e588106b9883aa029dcee68d28a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62b0e15a31a9f4023e32ed4b20325faf02e588106b9883aa029dcee68d28a42->enter($__internal_d62b0e15a31a9f4023e32ed4b20325faf02e588106b9883aa029dcee68d28a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d62b0e15a31a9f4023e32ed4b20325faf02e588106b9883aa029dcee68d28a42->leave($__internal_d62b0e15a31a9f4023e32ed4b20325faf02e588106b9883aa029dcee68d28a42_prof);

        
        $__internal_717892dbc212641b88f2900e86bc60db620cc8fb8d057bea1b6feefeb728d21b->leave($__internal_717892dbc212641b88f2900e86bc60db620cc8fb8d057bea1b6feefeb728d21b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
