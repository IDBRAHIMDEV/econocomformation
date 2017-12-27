<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6f055778700a1ed6fb9e2a124b07e0dc01e053e951c5634cabd2b5e00f8ac966 extends Twig_Template
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
        $__internal_5aed0d9da1a263fb64641897aa76d487fa81d945bf3016d159d39e8c631161be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aed0d9da1a263fb64641897aa76d487fa81d945bf3016d159d39e8c631161be->enter($__internal_5aed0d9da1a263fb64641897aa76d487fa81d945bf3016d159d39e8c631161be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_587eca49c9d04e0b713aa71ff877cb13726932ac920103f68c6ee2fde7665d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587eca49c9d04e0b713aa71ff877cb13726932ac920103f68c6ee2fde7665d38->enter($__internal_587eca49c9d04e0b713aa71ff877cb13726932ac920103f68c6ee2fde7665d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5aed0d9da1a263fb64641897aa76d487fa81d945bf3016d159d39e8c631161be->leave($__internal_5aed0d9da1a263fb64641897aa76d487fa81d945bf3016d159d39e8c631161be_prof);

        
        $__internal_587eca49c9d04e0b713aa71ff877cb13726932ac920103f68c6ee2fde7665d38->leave($__internal_587eca49c9d04e0b713aa71ff877cb13726932ac920103f68c6ee2fde7665d38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
