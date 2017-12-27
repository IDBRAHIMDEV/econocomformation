<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3b720ad5a78ee950d77f8afe647fbefbbcac94e4dc42bdea0ada3fe970d57725 extends Twig_Template
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
        $__internal_fcac50ab3e1c64166d2dff9272182576a5f35238c2606f6c0915f22342715c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcac50ab3e1c64166d2dff9272182576a5f35238c2606f6c0915f22342715c4f->enter($__internal_fcac50ab3e1c64166d2dff9272182576a5f35238c2606f6c0915f22342715c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4ad0b840bc5dfa4d9a5d08fd4e00105443c634b942173ec46e6be6917c81d9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad0b840bc5dfa4d9a5d08fd4e00105443c634b942173ec46e6be6917c81d9d9->enter($__internal_4ad0b840bc5dfa4d9a5d08fd4e00105443c634b942173ec46e6be6917c81d9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fcac50ab3e1c64166d2dff9272182576a5f35238c2606f6c0915f22342715c4f->leave($__internal_fcac50ab3e1c64166d2dff9272182576a5f35238c2606f6c0915f22342715c4f_prof);

        
        $__internal_4ad0b840bc5dfa4d9a5d08fd4e00105443c634b942173ec46e6be6917c81d9d9->leave($__internal_4ad0b840bc5dfa4d9a5d08fd4e00105443c634b942173ec46e6be6917c81d9d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
