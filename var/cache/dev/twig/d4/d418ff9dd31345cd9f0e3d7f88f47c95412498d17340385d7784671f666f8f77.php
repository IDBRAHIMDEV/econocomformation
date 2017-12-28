<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9e4c180cc05fb86a560180defe45cdb4cf05b5b2be5e675209c03e4f0fa0fe14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88a8983e9ebdc0cee7de55262bd2f403dbca0f7d4fcfc3fd94c64ba0f3509918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a8983e9ebdc0cee7de55262bd2f403dbca0f7d4fcfc3fd94c64ba0f3509918->enter($__internal_88a8983e9ebdc0cee7de55262bd2f403dbca0f7d4fcfc3fd94c64ba0f3509918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_c91000a45c01fcc662174d46fcc9e92778563d8318d149c404854b0f2f2f8565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91000a45c01fcc662174d46fcc9e92778563d8318d149c404854b0f2f2f8565->enter($__internal_c91000a45c01fcc662174d46fcc9e92778563d8318d149c404854b0f2f2f8565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a8983e9ebdc0cee7de55262bd2f403dbca0f7d4fcfc3fd94c64ba0f3509918->leave($__internal_88a8983e9ebdc0cee7de55262bd2f403dbca0f7d4fcfc3fd94c64ba0f3509918_prof);

        
        $__internal_c91000a45c01fcc662174d46fcc9e92778563d8318d149c404854b0f2f2f8565->leave($__internal_c91000a45c01fcc662174d46fcc9e92778563d8318d149c404854b0f2f2f8565_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2a87686843ca46a1025b188247750b36acb5ea766748a46eed17c12eb95a7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a87686843ca46a1025b188247750b36acb5ea766748a46eed17c12eb95a7ee->enter($__internal_b2a87686843ca46a1025b188247750b36acb5ea766748a46eed17c12eb95a7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3bbc5f5b6d5f79e972ca0771694c83619035155a3482f2f630f021a359f7e53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbc5f5b6d5f79e972ca0771694c83619035155a3482f2f630f021a359f7e53c->enter($__internal_3bbc5f5b6d5f79e972ca0771694c83619035155a3482f2f630f021a359f7e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_3bbc5f5b6d5f79e972ca0771694c83619035155a3482f2f630f021a359f7e53c->leave($__internal_3bbc5f5b6d5f79e972ca0771694c83619035155a3482f2f630f021a359f7e53c_prof);

        
        $__internal_b2a87686843ca46a1025b188247750b36acb5ea766748a46eed17c12eb95a7ee->leave($__internal_b2a87686843ca46a1025b188247750b36acb5ea766748a46eed17c12eb95a7ee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
