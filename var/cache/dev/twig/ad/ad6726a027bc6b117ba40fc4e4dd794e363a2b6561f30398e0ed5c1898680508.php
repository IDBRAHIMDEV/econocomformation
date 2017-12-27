<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3f16bd6e92c62ae4ff11e44fb2a4a617eaf443af56cc18f9fe10a9f9c5f76ee2 extends Twig_Template
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
        $__internal_4a933e24573406cf409fcb9a00461e5798acfe02778627d995c275aeb3c5ed06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a933e24573406cf409fcb9a00461e5798acfe02778627d995c275aeb3c5ed06->enter($__internal_4a933e24573406cf409fcb9a00461e5798acfe02778627d995c275aeb3c5ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e1d2b534f959183f71626033aac43f2166b2594f5a3f6336797733f46898d084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d2b534f959183f71626033aac43f2166b2594f5a3f6336797733f46898d084->enter($__internal_e1d2b534f959183f71626033aac43f2166b2594f5a3f6336797733f46898d084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4a933e24573406cf409fcb9a00461e5798acfe02778627d995c275aeb3c5ed06->leave($__internal_4a933e24573406cf409fcb9a00461e5798acfe02778627d995c275aeb3c5ed06_prof);

        
        $__internal_e1d2b534f959183f71626033aac43f2166b2594f5a3f6336797733f46898d084->leave($__internal_e1d2b534f959183f71626033aac43f2166b2594f5a3f6336797733f46898d084_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
