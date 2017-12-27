<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cd01f0532a053df441c0291a483537c5b39dae9131dea8f326950f7bc65f147f extends Twig_Template
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
        $__internal_b272ef285a7e2f239b8b12487e38cd0639db70122224442535f762aff14ef476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b272ef285a7e2f239b8b12487e38cd0639db70122224442535f762aff14ef476->enter($__internal_b272ef285a7e2f239b8b12487e38cd0639db70122224442535f762aff14ef476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_11b43a421faa75460c44190c2798c7673ef9a56000989bf2739e2998e623264a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b43a421faa75460c44190c2798c7673ef9a56000989bf2739e2998e623264a->enter($__internal_11b43a421faa75460c44190c2798c7673ef9a56000989bf2739e2998e623264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b272ef285a7e2f239b8b12487e38cd0639db70122224442535f762aff14ef476->leave($__internal_b272ef285a7e2f239b8b12487e38cd0639db70122224442535f762aff14ef476_prof);

        
        $__internal_11b43a421faa75460c44190c2798c7673ef9a56000989bf2739e2998e623264a->leave($__internal_11b43a421faa75460c44190c2798c7673ef9a56000989bf2739e2998e623264a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_40984127abf3778b286550bd3ef15028798fa692e533103ef664c2b5b46c499c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40984127abf3778b286550bd3ef15028798fa692e533103ef664c2b5b46c499c->enter($__internal_40984127abf3778b286550bd3ef15028798fa692e533103ef664c2b5b46c499c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f89301c9b761ab20ab2e51270738eafe1a002b2a12d563a3cdb6844e49c8950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f89301c9b761ab20ab2e51270738eafe1a002b2a12d563a3cdb6844e49c8950->enter($__internal_2f89301c9b761ab20ab2e51270738eafe1a002b2a12d563a3cdb6844e49c8950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f89301c9b761ab20ab2e51270738eafe1a002b2a12d563a3cdb6844e49c8950->leave($__internal_2f89301c9b761ab20ab2e51270738eafe1a002b2a12d563a3cdb6844e49c8950_prof);

        
        $__internal_40984127abf3778b286550bd3ef15028798fa692e533103ef664c2b5b46c499c->leave($__internal_40984127abf3778b286550bd3ef15028798fa692e533103ef664c2b5b46c499c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
