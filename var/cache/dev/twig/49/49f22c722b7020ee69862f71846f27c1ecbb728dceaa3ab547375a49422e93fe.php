<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9b79312096ba452c876ded3b2707c337e6059b3169b24f5127a196a120ce3b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_309e98be2d9321fc4b824563c06aff6f55a725cec80df970b1ee28c1512b8b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309e98be2d9321fc4b824563c06aff6f55a725cec80df970b1ee28c1512b8b68->enter($__internal_309e98be2d9321fc4b824563c06aff6f55a725cec80df970b1ee28c1512b8b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cacc864317032b2f2c661877a1d593d0ae694975033bcff0b055be371185267e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacc864317032b2f2c661877a1d593d0ae694975033bcff0b055be371185267e->enter($__internal_cacc864317032b2f2c661877a1d593d0ae694975033bcff0b055be371185267e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_309e98be2d9321fc4b824563c06aff6f55a725cec80df970b1ee28c1512b8b68->leave($__internal_309e98be2d9321fc4b824563c06aff6f55a725cec80df970b1ee28c1512b8b68_prof);

        
        $__internal_cacc864317032b2f2c661877a1d593d0ae694975033bcff0b055be371185267e->leave($__internal_cacc864317032b2f2c661877a1d593d0ae694975033bcff0b055be371185267e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8c74efb4de962ef992609d8c1cc99f17935c8af1beb1e7be6644e82b6ad067e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c74efb4de962ef992609d8c1cc99f17935c8af1beb1e7be6644e82b6ad067e->enter($__internal_c8c74efb4de962ef992609d8c1cc99f17935c8af1beb1e7be6644e82b6ad067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4cc930e5b8da5b1b5f9e19f181a498d21f34f3acb8e063da7ca50b769be23460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc930e5b8da5b1b5f9e19f181a498d21f34f3acb8e063da7ca50b769be23460->enter($__internal_4cc930e5b8da5b1b5f9e19f181a498d21f34f3acb8e063da7ca50b769be23460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4cc930e5b8da5b1b5f9e19f181a498d21f34f3acb8e063da7ca50b769be23460->leave($__internal_4cc930e5b8da5b1b5f9e19f181a498d21f34f3acb8e063da7ca50b769be23460_prof);

        
        $__internal_c8c74efb4de962ef992609d8c1cc99f17935c8af1beb1e7be6644e82b6ad067e->leave($__internal_c8c74efb4de962ef992609d8c1cc99f17935c8af1beb1e7be6644e82b6ad067e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\projett1\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
