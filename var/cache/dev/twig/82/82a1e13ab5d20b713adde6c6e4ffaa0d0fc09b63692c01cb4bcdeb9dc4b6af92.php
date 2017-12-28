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
        $__internal_854e65cc73dd4ba3140e880d126c5f70824beebdfac60edaaa86b9c82b9e203b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854e65cc73dd4ba3140e880d126c5f70824beebdfac60edaaa86b9c82b9e203b->enter($__internal_854e65cc73dd4ba3140e880d126c5f70824beebdfac60edaaa86b9c82b9e203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2dfe57c5a65fd2487e383af332f6f1e89171dbf7687dbd276d1de14d5b815e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfe57c5a65fd2487e383af332f6f1e89171dbf7687dbd276d1de14d5b815e2e->enter($__internal_2dfe57c5a65fd2487e383af332f6f1e89171dbf7687dbd276d1de14d5b815e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854e65cc73dd4ba3140e880d126c5f70824beebdfac60edaaa86b9c82b9e203b->leave($__internal_854e65cc73dd4ba3140e880d126c5f70824beebdfac60edaaa86b9c82b9e203b_prof);

        
        $__internal_2dfe57c5a65fd2487e383af332f6f1e89171dbf7687dbd276d1de14d5b815e2e->leave($__internal_2dfe57c5a65fd2487e383af332f6f1e89171dbf7687dbd276d1de14d5b815e2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f67b3903d49bcbb4e1bc92e3fdc3ee6581d996f41525ad2d5551880432a7af5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67b3903d49bcbb4e1bc92e3fdc3ee6581d996f41525ad2d5551880432a7af5e->enter($__internal_f67b3903d49bcbb4e1bc92e3fdc3ee6581d996f41525ad2d5551880432a7af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d280b091b0d7cc16cfe5317a277a368c1178ce1938292205d119a1909368ff3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d280b091b0d7cc16cfe5317a277a368c1178ce1938292205d119a1909368ff3b->enter($__internal_d280b091b0d7cc16cfe5317a277a368c1178ce1938292205d119a1909368ff3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d280b091b0d7cc16cfe5317a277a368c1178ce1938292205d119a1909368ff3b->leave($__internal_d280b091b0d7cc16cfe5317a277a368c1178ce1938292205d119a1909368ff3b_prof);

        
        $__internal_f67b3903d49bcbb4e1bc92e3fdc3ee6581d996f41525ad2d5551880432a7af5e->leave($__internal_f67b3903d49bcbb4e1bc92e3fdc3ee6581d996f41525ad2d5551880432a7af5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59a9e7b2143edf0b55e41ca53898b7d66d165edb79e309f1f4c1a01be62afc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a9e7b2143edf0b55e41ca53898b7d66d165edb79e309f1f4c1a01be62afc2f->enter($__internal_59a9e7b2143edf0b55e41ca53898b7d66d165edb79e309f1f4c1a01be62afc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63d0d7d1ef63cbb0b442e86371fe0a59342a0d273eebcff7d19987d49555962e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d0d7d1ef63cbb0b442e86371fe0a59342a0d273eebcff7d19987d49555962e->enter($__internal_63d0d7d1ef63cbb0b442e86371fe0a59342a0d273eebcff7d19987d49555962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_63d0d7d1ef63cbb0b442e86371fe0a59342a0d273eebcff7d19987d49555962e->leave($__internal_63d0d7d1ef63cbb0b442e86371fe0a59342a0d273eebcff7d19987d49555962e_prof);

        
        $__internal_59a9e7b2143edf0b55e41ca53898b7d66d165edb79e309f1f4c1a01be62afc2f->leave($__internal_59a9e7b2143edf0b55e41ca53898b7d66d165edb79e309f1f4c1a01be62afc2f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7fdf0d6f0d6e26cfac874ccde7a53c5d30a685d2290148879990b3f60f5b748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fdf0d6f0d6e26cfac874ccde7a53c5d30a685d2290148879990b3f60f5b748->enter($__internal_f7fdf0d6f0d6e26cfac874ccde7a53c5d30a685d2290148879990b3f60f5b748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a723205af4fd2164868ca26455ed228ac3d1a02bf2c0de0fbf9c915a7165d9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a723205af4fd2164868ca26455ed228ac3d1a02bf2c0de0fbf9c915a7165d9e3->enter($__internal_a723205af4fd2164868ca26455ed228ac3d1a02bf2c0de0fbf9c915a7165d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a723205af4fd2164868ca26455ed228ac3d1a02bf2c0de0fbf9c915a7165d9e3->leave($__internal_a723205af4fd2164868ca26455ed228ac3d1a02bf2c0de0fbf9c915a7165d9e3_prof);

        
        $__internal_f7fdf0d6f0d6e26cfac874ccde7a53c5d30a685d2290148879990b3f60f5b748->leave($__internal_f7fdf0d6f0d6e26cfac874ccde7a53c5d30a685d2290148879990b3f60f5b748_prof);

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
