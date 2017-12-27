<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1ca283ec8cf616fa84c4e9b3af5d3403d3e234af7547eca2228793f8bb63e64d extends Twig_Template
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
        $__internal_0761cfc9030cab4b585071acc7ce3179a7245b854a442aa97484bcaea4b7b4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0761cfc9030cab4b585071acc7ce3179a7245b854a442aa97484bcaea4b7b4e8->enter($__internal_0761cfc9030cab4b585071acc7ce3179a7245b854a442aa97484bcaea4b7b4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5118136dcea6293716af0ce5c8ac84c0f6460951c8d6445ff2b4837ca4f79e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5118136dcea6293716af0ce5c8ac84c0f6460951c8d6445ff2b4837ca4f79e72->enter($__internal_5118136dcea6293716af0ce5c8ac84c0f6460951c8d6445ff2b4837ca4f79e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0761cfc9030cab4b585071acc7ce3179a7245b854a442aa97484bcaea4b7b4e8->leave($__internal_0761cfc9030cab4b585071acc7ce3179a7245b854a442aa97484bcaea4b7b4e8_prof);

        
        $__internal_5118136dcea6293716af0ce5c8ac84c0f6460951c8d6445ff2b4837ca4f79e72->leave($__internal_5118136dcea6293716af0ce5c8ac84c0f6460951c8d6445ff2b4837ca4f79e72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
