<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7380f353489ad0a5ff6672a52fb97048e5c767e201659521c867011c902d8955 extends Twig_Template
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
        $__internal_a4f34908d7f9e690714598487e184e694c88b24262c62175e4dec6adaf48c3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f34908d7f9e690714598487e184e694c88b24262c62175e4dec6adaf48c3fb->enter($__internal_a4f34908d7f9e690714598487e184e694c88b24262c62175e4dec6adaf48c3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7b5e1aebbaecf26cd069af5675da362d1643e9f9df3426e9501f5820fdbd1a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5e1aebbaecf26cd069af5675da362d1643e9f9df3426e9501f5820fdbd1a10->enter($__internal_7b5e1aebbaecf26cd069af5675da362d1643e9f9df3426e9501f5820fdbd1a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a4f34908d7f9e690714598487e184e694c88b24262c62175e4dec6adaf48c3fb->leave($__internal_a4f34908d7f9e690714598487e184e694c88b24262c62175e4dec6adaf48c3fb_prof);

        
        $__internal_7b5e1aebbaecf26cd069af5675da362d1643e9f9df3426e9501f5820fdbd1a10->leave($__internal_7b5e1aebbaecf26cd069af5675da362d1643e9f9df3426e9501f5820fdbd1a10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
