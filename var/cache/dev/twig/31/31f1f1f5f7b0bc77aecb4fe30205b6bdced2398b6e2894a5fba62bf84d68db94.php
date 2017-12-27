<?php

/* default/index.html.twig */
class __TwigTemplate_c2ac62140443d763b5eeaadac6da4e58bd2b22f00ba0e1eab06c53bf7c520b3a extends Twig_Template
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
        $__internal_92243be9c8b612a97fb1f918041776fbe1495b54ae955c26faa6f642e901c0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92243be9c8b612a97fb1f918041776fbe1495b54ae955c26faa6f642e901c0ab->enter($__internal_92243be9c8b612a97fb1f918041776fbe1495b54ae955c26faa6f642e901c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a2b1b308ae841b28e91a6efe091d565dbba9aa770e5841ccdd6833c39d857d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b1b308ae841b28e91a6efe091d565dbba9aa770e5841ccdd6833c39d857d0d->enter($__internal_a2b1b308ae841b28e91a6efe091d565dbba9aa770e5841ccdd6833c39d857d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        
        $__internal_92243be9c8b612a97fb1f918041776fbe1495b54ae955c26faa6f642e901c0ab->leave($__internal_92243be9c8b612a97fb1f918041776fbe1495b54ae955c26faa6f642e901c0ab_prof);

        
        $__internal_a2b1b308ae841b28e91a6efe091d565dbba9aa770e5841ccdd6833c39d857d0d->leave($__internal_a2b1b308ae841b28e91a6efe091d565dbba9aa770e5841ccdd6833c39d857d0d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
", "default/index.html.twig", "C:\\xampp\\htdocs\\projett1\\app\\Resources\\views\\default\\index.html.twig");
    }
}
