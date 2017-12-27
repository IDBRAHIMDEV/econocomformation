<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3a892697a0a57b45abb3491598793c332b385575f443d7a935bff22399204189 extends Twig_Template
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
        $__internal_7ae02a6d82c0b313b6dc9dcb4e38a779038f80010dc3e66cbc6a395d953175ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae02a6d82c0b313b6dc9dcb4e38a779038f80010dc3e66cbc6a395d953175ef->enter($__internal_7ae02a6d82c0b313b6dc9dcb4e38a779038f80010dc3e66cbc6a395d953175ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ee779f52b2a3485beb7e24979ad8d4b8d739f6d0b684508bb3cd8869aa57fd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee779f52b2a3485beb7e24979ad8d4b8d739f6d0b684508bb3cd8869aa57fd2e->enter($__internal_ee779f52b2a3485beb7e24979ad8d4b8d739f6d0b684508bb3cd8869aa57fd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ae02a6d82c0b313b6dc9dcb4e38a779038f80010dc3e66cbc6a395d953175ef->leave($__internal_7ae02a6d82c0b313b6dc9dcb4e38a779038f80010dc3e66cbc6a395d953175ef_prof);

        
        $__internal_ee779f52b2a3485beb7e24979ad8d4b8d739f6d0b684508bb3cd8869aa57fd2e->leave($__internal_ee779f52b2a3485beb7e24979ad8d4b8d739f6d0b684508bb3cd8869aa57fd2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
