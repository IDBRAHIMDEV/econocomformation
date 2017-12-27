<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_eefe215a66c8104e90f879b6ab4cf695b9d9195b49254f2a3e3bc7437f58f457 extends Twig_Template
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
        $__internal_5c017ca2f56a117e3a23447a30e796e2f94cc8db2d8ec2abd2bce14c8b0e84fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c017ca2f56a117e3a23447a30e796e2f94cc8db2d8ec2abd2bce14c8b0e84fa->enter($__internal_5c017ca2f56a117e3a23447a30e796e2f94cc8db2d8ec2abd2bce14c8b0e84fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f71a10974baa4484a600e25371ec171dcb9f5f5bdf1e1c3c0676a88df354b20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71a10974baa4484a600e25371ec171dcb9f5f5bdf1e1c3c0676a88df354b20f->enter($__internal_f71a10974baa4484a600e25371ec171dcb9f5f5bdf1e1c3c0676a88df354b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5c017ca2f56a117e3a23447a30e796e2f94cc8db2d8ec2abd2bce14c8b0e84fa->leave($__internal_5c017ca2f56a117e3a23447a30e796e2f94cc8db2d8ec2abd2bce14c8b0e84fa_prof);

        
        $__internal_f71a10974baa4484a600e25371ec171dcb9f5f5bdf1e1c3c0676a88df354b20f->leave($__internal_f71a10974baa4484a600e25371ec171dcb9f5f5bdf1e1c3c0676a88df354b20f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
