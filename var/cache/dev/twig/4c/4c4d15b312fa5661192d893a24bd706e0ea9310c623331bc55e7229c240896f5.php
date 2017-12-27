<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_907e8e45e0fd422fd825b323ded69fa1851c3f26198277ae90f49253650c82f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc0e090a7b1455876de6b8d4a59c0a3267792b53cb6b9d516a4f74ef543aa0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc0e090a7b1455876de6b8d4a59c0a3267792b53cb6b9d516a4f74ef543aa0e->enter($__internal_5fc0e090a7b1455876de6b8d4a59c0a3267792b53cb6b9d516a4f74ef543aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_ffb6a2cc6076fdf3a4a024762954840fbc56b926e2563dd41f77c8963415c8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb6a2cc6076fdf3a4a024762954840fbc56b926e2563dd41f77c8963415c8b5->enter($__internal_ffb6a2cc6076fdf3a4a024762954840fbc56b926e2563dd41f77c8963415c8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
salam je suis à la page site";
        
        $__internal_5fc0e090a7b1455876de6b8d4a59c0a3267792b53cb6b9d516a4f74ef543aa0e->leave($__internal_5fc0e090a7b1455876de6b8d4a59c0a3267792b53cb6b9d516a4f74ef543aa0e_prof);

        
        $__internal_ffb6a2cc6076fdf3a4a024762954840fbc56b926e2563dd41f77c8963415c8b5->leave($__internal_ffb6a2cc6076fdf3a4a024762954840fbc56b926e2563dd41f77c8963415c8b5_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
salam je suis à la page site", "SiteBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\SiteBundle/Resources/views/Default/index.html.twig");
    }
}
