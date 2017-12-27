<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f7ea865fbdeea8312269154c73ab048022a3a9ba064493d70e1df7404026751c extends Twig_Template
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
        $__internal_9238075a1a86b74375bfa36cabda213f7f884ff3e6a31c0afd712372192f0e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9238075a1a86b74375bfa36cabda213f7f884ff3e6a31c0afd712372192f0e1f->enter($__internal_9238075a1a86b74375bfa36cabda213f7f884ff3e6a31c0afd712372192f0e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_0cf486fa061d693251f4fe9181a5c7d3f2a2aac176594553d9514a4f679b4a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf486fa061d693251f4fe9181a5c7d3f2a2aac176594553d9514a4f679b4a5e->enter($__internal_0cf486fa061d693251f4fe9181a5c7d3f2a2aac176594553d9514a4f679b4a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9238075a1a86b74375bfa36cabda213f7f884ff3e6a31c0afd712372192f0e1f->leave($__internal_9238075a1a86b74375bfa36cabda213f7f884ff3e6a31c0afd712372192f0e1f_prof);

        
        $__internal_0cf486fa061d693251f4fe9181a5c7d3f2a2aac176594553d9514a4f679b4a5e->leave($__internal_0cf486fa061d693251f4fe9181a5c7d3f2a2aac176594553d9514a4f679b4a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
