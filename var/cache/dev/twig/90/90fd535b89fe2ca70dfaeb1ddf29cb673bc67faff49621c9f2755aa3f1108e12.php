<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5031c9996dc7cd6cc72c2a575e0252bc69bae4bd3a64b79b5b438c7082449ed4 extends Twig_Template
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
        $__internal_7d78440cb43e18973da1897c339f3913b53eee5b54a99409d638fdff87746e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d78440cb43e18973da1897c339f3913b53eee5b54a99409d638fdff87746e38->enter($__internal_7d78440cb43e18973da1897c339f3913b53eee5b54a99409d638fdff87746e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a3039ba9454a4cc9459daebb08c3b9d74effe6f172acca5875fea82e95175da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3039ba9454a4cc9459daebb08c3b9d74effe6f172acca5875fea82e95175da0->enter($__internal_a3039ba9454a4cc9459daebb08c3b9d74effe6f172acca5875fea82e95175da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7d78440cb43e18973da1897c339f3913b53eee5b54a99409d638fdff87746e38->leave($__internal_7d78440cb43e18973da1897c339f3913b53eee5b54a99409d638fdff87746e38_prof);

        
        $__internal_a3039ba9454a4cc9459daebb08c3b9d74effe6f172acca5875fea82e95175da0->leave($__internal_a3039ba9454a4cc9459daebb08c3b9d74effe6f172acca5875fea82e95175da0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
