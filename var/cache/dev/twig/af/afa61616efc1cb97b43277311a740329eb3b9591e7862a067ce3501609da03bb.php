<?php

/* :default:index.html.twig */
class __TwigTemplate_6f2b3f2d7db49d39f1a75542caeb4e504aa575d5b77caa37c66e98b055b443e1 extends Twig_Template
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
        $__internal_af79bea50bc0f8e3ec241ddd716620dd28ab12f8bf082770144c4f4f7c710507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af79bea50bc0f8e3ec241ddd716620dd28ab12f8bf082770144c4f4f7c710507->enter($__internal_af79bea50bc0f8e3ec241ddd716620dd28ab12f8bf082770144c4f4f7c710507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_b301ea3bc50b42799f0bf9c4485cab02c25c849f0e04d7c221ad8edf8ad882af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b301ea3bc50b42799f0bf9c4485cab02c25c849f0e04d7c221ad8edf8ad882af->enter($__internal_b301ea3bc50b42799f0bf9c4485cab02c25c849f0e04d7c221ad8edf8ad882af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        // line 1
        echo "


<h1>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
<p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["body"] ?? $this->getContext($context, "body")), "html", null, true);
        echo "</p>
";
        
        $__internal_af79bea50bc0f8e3ec241ddd716620dd28ab12f8bf082770144c4f4f7c710507->leave($__internal_af79bea50bc0f8e3ec241ddd716620dd28ab12f8bf082770144c4f4f7c710507_prof);

        
        $__internal_b301ea3bc50b42799f0bf9c4485cab02c25c849f0e04d7c221ad8edf8ad882af->leave($__internal_b301ea3bc50b42799f0bf9c4485cab02c25c849f0e04d7c221ad8edf8ad882af_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<h1>{{ title }}</h1>
<p>{{ body }}</p>
", ":default:index.html.twig", "C:\\xampp\\htdocs\\projett1\\app/Resources\\views/default/index.html.twig");
    }
}
