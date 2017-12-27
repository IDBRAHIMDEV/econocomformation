<?php

/* PostBundle:Default:index.html.twig */
class __TwigTemplate_8e1cb794dc995dfcafefffb55c19a7cd9968f8ad539222426ea2e197c5468dca extends Twig_Template
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
        $__internal_c236a82aa2144b2ba00c4e0a476be715eb6f401ead3c5eb1997c69629e10d46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c236a82aa2144b2ba00c4e0a476be715eb6f401ead3c5eb1997c69629e10d46b->enter($__internal_c236a82aa2144b2ba00c4e0a476be715eb6f401ead3c5eb1997c69629e10d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Default:index.html.twig"));

        $__internal_f0775e372bc448b23b1d1ece3b3476f16944fa6b2a41c2dc7f86185d873054d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0775e372bc448b23b1d1ece3b3476f16944fa6b2a41c2dc7f86185d873054d1->enter($__internal_f0775e372bc448b23b1d1ece3b3476f16944fa6b2a41c2dc7f86185d873054d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c236a82aa2144b2ba00c4e0a476be715eb6f401ead3c5eb1997c69629e10d46b->leave($__internal_c236a82aa2144b2ba00c4e0a476be715eb6f401ead3c5eb1997c69629e10d46b_prof);

        
        $__internal_f0775e372bc448b23b1d1ece3b3476f16944fa6b2a41c2dc7f86185d873054d1->leave($__internal_f0775e372bc448b23b1d1ece3b3476f16944fa6b2a41c2dc7f86185d873054d1_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Default:index.html.twig";
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
", "PostBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Default/index.html.twig");
    }
}
