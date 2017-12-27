<?php

/* SiteBundle:Default:show.html.twig */
class __TwigTemplate_66fec69035f232a09313b94cdfa97ae64b16b7fe1a408b58d2e832bd74fa9b49 extends Twig_Template
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
        $__internal_5660541c72555550d9229106e3c88f44474f2807c595313567d8aca6027a82c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5660541c72555550d9229106e3c88f44474f2807c595313567d8aca6027a82c1->enter($__internal_5660541c72555550d9229106e3c88f44474f2807c595313567d8aca6027a82c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:show.html.twig"));

        $__internal_2099a54d510a7f9885e0f318bc19dbe2d5f3abeb45e16671b852ad97614a4136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2099a54d510a7f9885e0f318bc19dbe2d5f3abeb45e16671b852ad97614a4136->enter($__internal_2099a54d510a7f9885e0f318bc19dbe2d5f3abeb45e16671b852ad97614a4136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:show.html.twig"));

        // line 1
        echo "<h2>page show</h2>
<p>";
        // line 2
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</p>";
        
        $__internal_5660541c72555550d9229106e3c88f44474f2807c595313567d8aca6027a82c1->leave($__internal_5660541c72555550d9229106e3c88f44474f2807c595313567d8aca6027a82c1_prof);

        
        $__internal_2099a54d510a7f9885e0f318bc19dbe2d5f3abeb45e16671b852ad97614a4136->leave($__internal_2099a54d510a7f9885e0f318bc19dbe2d5f3abeb45e16671b852ad97614a4136_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:show.html.twig";
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
        return new Twig_Source("<h2>page show</h2>
<p>{{ nom }}</p>", "SiteBundle:Default:show.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\SiteBundle/Resources/views/Default/show.html.twig");
    }
}
