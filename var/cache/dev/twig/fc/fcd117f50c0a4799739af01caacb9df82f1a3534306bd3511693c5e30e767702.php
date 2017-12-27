<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9353d218f3d23475d9d11c6361d2e1bc8642dbf105e069f3d5c73e29fdf40953 extends Twig_Template
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
        $__internal_5fef73bc0d5d6fee3b3965761475113620c8472ff32b5e56da3225caaf4bdd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fef73bc0d5d6fee3b3965761475113620c8472ff32b5e56da3225caaf4bdd00->enter($__internal_5fef73bc0d5d6fee3b3965761475113620c8472ff32b5e56da3225caaf4bdd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_7f90a106438fa90869f5080403043a0583d1b5d3245ba96dc496c1c4c6e66773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f90a106438fa90869f5080403043a0583d1b5d3245ba96dc496c1c4c6e66773->enter($__internal_7f90a106438fa90869f5080403043a0583d1b5d3245ba96dc496c1c4c6e66773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5fef73bc0d5d6fee3b3965761475113620c8472ff32b5e56da3225caaf4bdd00->leave($__internal_5fef73bc0d5d6fee3b3965761475113620c8472ff32b5e56da3225caaf4bdd00_prof);

        
        $__internal_7f90a106438fa90869f5080403043a0583d1b5d3245ba96dc496c1c4c6e66773->leave($__internal_7f90a106438fa90869f5080403043a0583d1b5d3245ba96dc496c1c4c6e66773_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
