<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c7d75b6f4c6a3185de22070a8b91f0125e4017136424cce0144ba3fa94ddc06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aad0f85d5555f0d39a8f5e66333cf512e37a8aa8f5cebc1de4821a6c841de91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aad0f85d5555f0d39a8f5e66333cf512e37a8aa8f5cebc1de4821a6c841de91->enter($__internal_0aad0f85d5555f0d39a8f5e66333cf512e37a8aa8f5cebc1de4821a6c841de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a9e073304876bcb3086b6060fbc0eae1b7c9f888a361b00737918b750088f4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e073304876bcb3086b6060fbc0eae1b7c9f888a361b00737918b750088f4f0->enter($__internal_a9e073304876bcb3086b6060fbc0eae1b7c9f888a361b00737918b750088f4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aad0f85d5555f0d39a8f5e66333cf512e37a8aa8f5cebc1de4821a6c841de91->leave($__internal_0aad0f85d5555f0d39a8f5e66333cf512e37a8aa8f5cebc1de4821a6c841de91_prof);

        
        $__internal_a9e073304876bcb3086b6060fbc0eae1b7c9f888a361b00737918b750088f4f0->leave($__internal_a9e073304876bcb3086b6060fbc0eae1b7c9f888a361b00737918b750088f4f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca570e5c9fcea2c8f62141e0251158f56a063ce494cc3b9ec325d709c9f0474b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca570e5c9fcea2c8f62141e0251158f56a063ce494cc3b9ec325d709c9f0474b->enter($__internal_ca570e5c9fcea2c8f62141e0251158f56a063ce494cc3b9ec325d709c9f0474b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a9df92a7e6ece609aef781f9065bc33ea6d0c101f375286be4825a34e812a02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9df92a7e6ece609aef781f9065bc33ea6d0c101f375286be4825a34e812a02f->enter($__internal_a9df92a7e6ece609aef781f9065bc33ea6d0c101f375286be4825a34e812a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a9df92a7e6ece609aef781f9065bc33ea6d0c101f375286be4825a34e812a02f->leave($__internal_a9df92a7e6ece609aef781f9065bc33ea6d0c101f375286be4825a34e812a02f_prof);

        
        $__internal_ca570e5c9fcea2c8f62141e0251158f56a063ce494cc3b9ec325d709c9f0474b->leave($__internal_ca570e5c9fcea2c8f62141e0251158f56a063ce494cc3b9ec325d709c9f0474b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
