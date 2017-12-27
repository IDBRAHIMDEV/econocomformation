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
        $__internal_14cdc8f8443e8e04d676b2c33f5575fa968e185cf6496ebbd8dbbbb4750b9d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cdc8f8443e8e04d676b2c33f5575fa968e185cf6496ebbd8dbbbb4750b9d4c->enter($__internal_14cdc8f8443e8e04d676b2c33f5575fa968e185cf6496ebbd8dbbbb4750b9d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f28b4985bc2e68fca4094952c64db0f751e42d480586860ade4ca18a8b715f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28b4985bc2e68fca4094952c64db0f751e42d480586860ade4ca18a8b715f83->enter($__internal_f28b4985bc2e68fca4094952c64db0f751e42d480586860ade4ca18a8b715f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14cdc8f8443e8e04d676b2c33f5575fa968e185cf6496ebbd8dbbbb4750b9d4c->leave($__internal_14cdc8f8443e8e04d676b2c33f5575fa968e185cf6496ebbd8dbbbb4750b9d4c_prof);

        
        $__internal_f28b4985bc2e68fca4094952c64db0f751e42d480586860ade4ca18a8b715f83->leave($__internal_f28b4985bc2e68fca4094952c64db0f751e42d480586860ade4ca18a8b715f83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8e25d6266d3d69b65f88dc74afa50f4d51f044865e52e160d60ffb98e2f99ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e25d6266d3d69b65f88dc74afa50f4d51f044865e52e160d60ffb98e2f99ed->enter($__internal_d8e25d6266d3d69b65f88dc74afa50f4d51f044865e52e160d60ffb98e2f99ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7500d3da755aa2e80a04c71442619af5a5b7b51272af3e04f90c735cc4a01f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7500d3da755aa2e80a04c71442619af5a5b7b51272af3e04f90c735cc4a01f24->enter($__internal_7500d3da755aa2e80a04c71442619af5a5b7b51272af3e04f90c735cc4a01f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7500d3da755aa2e80a04c71442619af5a5b7b51272af3e04f90c735cc4a01f24->leave($__internal_7500d3da755aa2e80a04c71442619af5a5b7b51272af3e04f90c735cc4a01f24_prof);

        
        $__internal_d8e25d6266d3d69b65f88dc74afa50f4d51f044865e52e160d60ffb98e2f99ed->leave($__internal_d8e25d6266d3d69b65f88dc74afa50f4d51f044865e52e160d60ffb98e2f99ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_850b1e1abf51373ba879118b1553cc2d1fce45e912a74505ea3d253ef9d9d741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850b1e1abf51373ba879118b1553cc2d1fce45e912a74505ea3d253ef9d9d741->enter($__internal_850b1e1abf51373ba879118b1553cc2d1fce45e912a74505ea3d253ef9d9d741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51dc098493906da24953e1806a986358cfc5485cb051ec8bb9710ae3898edfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dc098493906da24953e1806a986358cfc5485cb051ec8bb9710ae3898edfa4->enter($__internal_51dc098493906da24953e1806a986358cfc5485cb051ec8bb9710ae3898edfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51dc098493906da24953e1806a986358cfc5485cb051ec8bb9710ae3898edfa4->leave($__internal_51dc098493906da24953e1806a986358cfc5485cb051ec8bb9710ae3898edfa4_prof);

        
        $__internal_850b1e1abf51373ba879118b1553cc2d1fce45e912a74505ea3d253ef9d9d741->leave($__internal_850b1e1abf51373ba879118b1553cc2d1fce45e912a74505ea3d253ef9d9d741_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b19a440fd23b7274cbac7368cf1732b8e198681320984d739e8445d33a739eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19a440fd23b7274cbac7368cf1732b8e198681320984d739e8445d33a739eea->enter($__internal_b19a440fd23b7274cbac7368cf1732b8e198681320984d739e8445d33a739eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26cc4e34c88cc85347d14344cdb3009d7a7b6eb63ab492f663f796bd38bfd540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cc4e34c88cc85347d14344cdb3009d7a7b6eb63ab492f663f796bd38bfd540->enter($__internal_26cc4e34c88cc85347d14344cdb3009d7a7b6eb63ab492f663f796bd38bfd540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26cc4e34c88cc85347d14344cdb3009d7a7b6eb63ab492f663f796bd38bfd540->leave($__internal_26cc4e34c88cc85347d14344cdb3009d7a7b6eb63ab492f663f796bd38bfd540_prof);

        
        $__internal_b19a440fd23b7274cbac7368cf1732b8e198681320984d739e8445d33a739eea->leave($__internal_b19a440fd23b7274cbac7368cf1732b8e198681320984d739e8445d33a739eea_prof);

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
