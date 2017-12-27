<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_216180dd67c50f963ee3aaeb8f32af49e9daf4dbec518aae9b66fafa8fb9b3fc extends Twig_Template
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
        $__internal_72bcbe912d20505141bdb1da42f6287c1f7196469bbd56bfaf9212d9c71bc6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bcbe912d20505141bdb1da42f6287c1f7196469bbd56bfaf9212d9c71bc6db->enter($__internal_72bcbe912d20505141bdb1da42f6287c1f7196469bbd56bfaf9212d9c71bc6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f68ac8e7ed4ce969e3dd7473dd3930a980fb27a844a476d7813e514c69671bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68ac8e7ed4ce969e3dd7473dd3930a980fb27a844a476d7813e514c69671bc8->enter($__internal_f68ac8e7ed4ce969e3dd7473dd3930a980fb27a844a476d7813e514c69671bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_72bcbe912d20505141bdb1da42f6287c1f7196469bbd56bfaf9212d9c71bc6db->leave($__internal_72bcbe912d20505141bdb1da42f6287c1f7196469bbd56bfaf9212d9c71bc6db_prof);

        
        $__internal_f68ac8e7ed4ce969e3dd7473dd3930a980fb27a844a476d7813e514c69671bc8->leave($__internal_f68ac8e7ed4ce969e3dd7473dd3930a980fb27a844a476d7813e514c69671bc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
