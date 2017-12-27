<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1253556a646148b46732b4956f595bc68f998958627453acf22d0f1af8679245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9223e88625e860c4035c70d946776a20078f9c3af55c93816f105dbf7857f44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9223e88625e860c4035c70d946776a20078f9c3af55c93816f105dbf7857f44b->enter($__internal_9223e88625e860c4035c70d946776a20078f9c3af55c93816f105dbf7857f44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_865c8b189b92b7e22658c07df42ce10a1c1a022e9e2f9aed79b688d558386847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865c8b189b92b7e22658c07df42ce10a1c1a022e9e2f9aed79b688d558386847->enter($__internal_865c8b189b92b7e22658c07df42ce10a1c1a022e9e2f9aed79b688d558386847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9223e88625e860c4035c70d946776a20078f9c3af55c93816f105dbf7857f44b->leave($__internal_9223e88625e860c4035c70d946776a20078f9c3af55c93816f105dbf7857f44b_prof);

        
        $__internal_865c8b189b92b7e22658c07df42ce10a1c1a022e9e2f9aed79b688d558386847->leave($__internal_865c8b189b92b7e22658c07df42ce10a1c1a022e9e2f9aed79b688d558386847_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1a1d5d9eccf152ae922303cc08cb31c7ef266afe69ebce298b568ad3de8ea80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a1d5d9eccf152ae922303cc08cb31c7ef266afe69ebce298b568ad3de8ea80->enter($__internal_e1a1d5d9eccf152ae922303cc08cb31c7ef266afe69ebce298b568ad3de8ea80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9dff34f5f6629ec71923440ddb6a61fe81abeda5df4bae49c8657cf5cc9b3177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dff34f5f6629ec71923440ddb6a61fe81abeda5df4bae49c8657cf5cc9b3177->enter($__internal_9dff34f5f6629ec71923440ddb6a61fe81abeda5df4bae49c8657cf5cc9b3177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9dff34f5f6629ec71923440ddb6a61fe81abeda5df4bae49c8657cf5cc9b3177->leave($__internal_9dff34f5f6629ec71923440ddb6a61fe81abeda5df4bae49c8657cf5cc9b3177_prof);

        
        $__internal_e1a1d5d9eccf152ae922303cc08cb31c7ef266afe69ebce298b568ad3de8ea80->leave($__internal_e1a1d5d9eccf152ae922303cc08cb31c7ef266afe69ebce298b568ad3de8ea80_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6893adb7156c7a7c6981164f48025ceb1e185cf9b7820e45a88afee53164799c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6893adb7156c7a7c6981164f48025ceb1e185cf9b7820e45a88afee53164799c->enter($__internal_6893adb7156c7a7c6981164f48025ceb1e185cf9b7820e45a88afee53164799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bcb369a73a40456c139c4db8a83ec3ee08ced0a9721ffeb96899d1dcf5af113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcb369a73a40456c139c4db8a83ec3ee08ced0a9721ffeb96899d1dcf5af113->enter($__internal_7bcb369a73a40456c139c4db8a83ec3ee08ced0a9721ffeb96899d1dcf5af113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7bcb369a73a40456c139c4db8a83ec3ee08ced0a9721ffeb96899d1dcf5af113->leave($__internal_7bcb369a73a40456c139c4db8a83ec3ee08ced0a9721ffeb96899d1dcf5af113_prof);

        
        $__internal_6893adb7156c7a7c6981164f48025ceb1e185cf9b7820e45a88afee53164799c->leave($__internal_6893adb7156c7a7c6981164f48025ceb1e185cf9b7820e45a88afee53164799c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
