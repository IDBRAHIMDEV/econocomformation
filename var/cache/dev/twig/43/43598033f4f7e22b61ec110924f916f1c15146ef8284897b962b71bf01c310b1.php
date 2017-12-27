<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_04113541e54b72efbe0bde2db0ad51ce980c2fd3b06071b618da70533e663e40 extends Twig_Template
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
        $__internal_8519a378842f9ca709f2f287ba0edaf583ec9d3772edc28685a4750e8d6bff03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8519a378842f9ca709f2f287ba0edaf583ec9d3772edc28685a4750e8d6bff03->enter($__internal_8519a378842f9ca709f2f287ba0edaf583ec9d3772edc28685a4750e8d6bff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7d70ef28355844676d909a0a67af0ac2daa8d7a0c1daefbd2d53059497d19a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d70ef28355844676d909a0a67af0ac2daa8d7a0c1daefbd2d53059497d19a45->enter($__internal_7d70ef28355844676d909a0a67af0ac2daa8d7a0c1daefbd2d53059497d19a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8519a378842f9ca709f2f287ba0edaf583ec9d3772edc28685a4750e8d6bff03->leave($__internal_8519a378842f9ca709f2f287ba0edaf583ec9d3772edc28685a4750e8d6bff03_prof);

        
        $__internal_7d70ef28355844676d909a0a67af0ac2daa8d7a0c1daefbd2d53059497d19a45->leave($__internal_7d70ef28355844676d909a0a67af0ac2daa8d7a0c1daefbd2d53059497d19a45_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
