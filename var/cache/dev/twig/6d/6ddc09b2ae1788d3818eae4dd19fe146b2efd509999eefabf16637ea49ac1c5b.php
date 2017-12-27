<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0f54549387ec44ba90b4fd479a3f8866692348bc8f71632c49f2e5d2d192313c extends Twig_Template
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
        $__internal_568e3ac451c1a359ef7132623c3e537239fa396e7dd733d979293a096a19a63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568e3ac451c1a359ef7132623c3e537239fa396e7dd733d979293a096a19a63b->enter($__internal_568e3ac451c1a359ef7132623c3e537239fa396e7dd733d979293a096a19a63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_fb524487fe23b8550afb3cc2dc3e5a77f7f318d4ffeceaf71cb94180c6c4fa13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb524487fe23b8550afb3cc2dc3e5a77f7f318d4ffeceaf71cb94180c6c4fa13->enter($__internal_fb524487fe23b8550afb3cc2dc3e5a77f7f318d4ffeceaf71cb94180c6c4fa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_568e3ac451c1a359ef7132623c3e537239fa396e7dd733d979293a096a19a63b->leave($__internal_568e3ac451c1a359ef7132623c3e537239fa396e7dd733d979293a096a19a63b_prof);

        
        $__internal_fb524487fe23b8550afb3cc2dc3e5a77f7f318d4ffeceaf71cb94180c6c4fa13->leave($__internal_fb524487fe23b8550afb3cc2dc3e5a77f7f318d4ffeceaf71cb94180c6c4fa13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
