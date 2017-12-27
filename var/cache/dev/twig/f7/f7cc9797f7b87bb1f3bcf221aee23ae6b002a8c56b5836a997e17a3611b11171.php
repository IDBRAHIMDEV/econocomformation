<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4f95640733a68d5cf799195a18aa10f3ae8e03e2fbe796501a17a52a6e9d6770 extends Twig_Template
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
        $__internal_f832a012b0dff66ca8f70a239e93d2a752e4cb038b78ac508963fdd8c227e408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f832a012b0dff66ca8f70a239e93d2a752e4cb038b78ac508963fdd8c227e408->enter($__internal_f832a012b0dff66ca8f70a239e93d2a752e4cb038b78ac508963fdd8c227e408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_78de09abdb93a9cdf3e17102ae7532f753e7e543a201b89ba959a5c752ec221c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78de09abdb93a9cdf3e17102ae7532f753e7e543a201b89ba959a5c752ec221c->enter($__internal_78de09abdb93a9cdf3e17102ae7532f753e7e543a201b89ba959a5c752ec221c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f832a012b0dff66ca8f70a239e93d2a752e4cb038b78ac508963fdd8c227e408->leave($__internal_f832a012b0dff66ca8f70a239e93d2a752e4cb038b78ac508963fdd8c227e408_prof);

        
        $__internal_78de09abdb93a9cdf3e17102ae7532f753e7e543a201b89ba959a5c752ec221c->leave($__internal_78de09abdb93a9cdf3e17102ae7532f753e7e543a201b89ba959a5c752ec221c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
