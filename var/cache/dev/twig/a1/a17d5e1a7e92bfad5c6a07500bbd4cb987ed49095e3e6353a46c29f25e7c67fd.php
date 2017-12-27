<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8ec21a639de0744ae512996b64518518ac794da75e130fb04d27789b18894725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a79165f3c7c3ac3719880509782eb095c565d42cd295c242540b6b103d2cf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a79165f3c7c3ac3719880509782eb095c565d42cd295c242540b6b103d2cf0f->enter($__internal_0a79165f3c7c3ac3719880509782eb095c565d42cd295c242540b6b103d2cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1ef9a0e3140b5200b926f1f8d7b83b839bfb1b818d8af63ca5f899b13a22dff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef9a0e3140b5200b926f1f8d7b83b839bfb1b818d8af63ca5f899b13a22dff4->enter($__internal_1ef9a0e3140b5200b926f1f8d7b83b839bfb1b818d8af63ca5f899b13a22dff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0a79165f3c7c3ac3719880509782eb095c565d42cd295c242540b6b103d2cf0f->leave($__internal_0a79165f3c7c3ac3719880509782eb095c565d42cd295c242540b6b103d2cf0f_prof);

        
        $__internal_1ef9a0e3140b5200b926f1f8d7b83b839bfb1b818d8af63ca5f899b13a22dff4->leave($__internal_1ef9a0e3140b5200b926f1f8d7b83b839bfb1b818d8af63ca5f899b13a22dff4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_04dcea28b85e8143b2243c2d3faeaafbbb4dd07a1c5efbb688c764e25abc24bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04dcea28b85e8143b2243c2d3faeaafbbb4dd07a1c5efbb688c764e25abc24bc->enter($__internal_04dcea28b85e8143b2243c2d3faeaafbbb4dd07a1c5efbb688c764e25abc24bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b152a0fed8cbc7bf10b4eeb5bac989aec4b4301bd7313b26bc321b7434f53e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b152a0fed8cbc7bf10b4eeb5bac989aec4b4301bd7313b26bc321b7434f53e18->enter($__internal_b152a0fed8cbc7bf10b4eeb5bac989aec4b4301bd7313b26bc321b7434f53e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b152a0fed8cbc7bf10b4eeb5bac989aec4b4301bd7313b26bc321b7434f53e18->leave($__internal_b152a0fed8cbc7bf10b4eeb5bac989aec4b4301bd7313b26bc321b7434f53e18_prof);

        
        $__internal_04dcea28b85e8143b2243c2d3faeaafbbb4dd07a1c5efbb688c764e25abc24bc->leave($__internal_04dcea28b85e8143b2243c2d3faeaafbbb4dd07a1c5efbb688c764e25abc24bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
