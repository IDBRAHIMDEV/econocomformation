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
        $__internal_20915aef5cae055a403d8ad416d5a56e30e085ef604bdcb85491e6481f5524ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20915aef5cae055a403d8ad416d5a56e30e085ef604bdcb85491e6481f5524ed->enter($__internal_20915aef5cae055a403d8ad416d5a56e30e085ef604bdcb85491e6481f5524ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e42cb62035bd212891a3907b3fd7923320339dc4b8aef9a1a78e11b1896b781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42cb62035bd212891a3907b3fd7923320339dc4b8aef9a1a78e11b1896b781d->enter($__internal_e42cb62035bd212891a3907b3fd7923320339dc4b8aef9a1a78e11b1896b781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        
        $__internal_20915aef5cae055a403d8ad416d5a56e30e085ef604bdcb85491e6481f5524ed->leave($__internal_20915aef5cae055a403d8ad416d5a56e30e085ef604bdcb85491e6481f5524ed_prof);

        
        $__internal_e42cb62035bd212891a3907b3fd7923320339dc4b8aef9a1a78e11b1896b781d->leave($__internal_e42cb62035bd212891a3907b3fd7923320339dc4b8aef9a1a78e11b1896b781d_prof);

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
