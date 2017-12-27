<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1dc8cf45edab51eeafb05318c01d68d2ac4c92a51b78e2f6fcaed50cddd3912c extends Twig_Template
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
        $__internal_f2d98aacae410b13f563a7453bd5f60da246bd2b531a585072ee60a39605e0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d98aacae410b13f563a7453bd5f60da246bd2b531a585072ee60a39605e0e5->enter($__internal_f2d98aacae410b13f563a7453bd5f60da246bd2b531a585072ee60a39605e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_4c80003aca9297af20f72a38118545513551652130841e0ccdbabae2f24f2611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c80003aca9297af20f72a38118545513551652130841e0ccdbabae2f24f2611->enter($__internal_4c80003aca9297af20f72a38118545513551652130841e0ccdbabae2f24f2611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f2d98aacae410b13f563a7453bd5f60da246bd2b531a585072ee60a39605e0e5->leave($__internal_f2d98aacae410b13f563a7453bd5f60da246bd2b531a585072ee60a39605e0e5_prof);

        
        $__internal_4c80003aca9297af20f72a38118545513551652130841e0ccdbabae2f24f2611->leave($__internal_4c80003aca9297af20f72a38118545513551652130841e0ccdbabae2f24f2611_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
