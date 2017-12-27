<?php

/* ::base.html.twig */
class __TwigTemplate_d8adfa9850bfec8e291ce4ea3ebe73a551d37a2fd71e81b00584a94726427558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22458685f5885cb94e212b6d559a22e6d79747f339adb899a554227d55eb6081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22458685f5885cb94e212b6d559a22e6d79747f339adb899a554227d55eb6081->enter($__internal_22458685f5885cb94e212b6d559a22e6d79747f339adb899a554227d55eb6081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0a7ec4781385a2a85218fbb3f13297ce0e9d57f8147d84aeeec3013e8dad9d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7ec4781385a2a85218fbb3f13297ce0e9d57f8147d84aeeec3013e8dad9d2e->enter($__internal_0a7ec4781385a2a85218fbb3f13297ce0e9d57f8147d84aeeec3013e8dad9d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_22458685f5885cb94e212b6d559a22e6d79747f339adb899a554227d55eb6081->leave($__internal_22458685f5885cb94e212b6d559a22e6d79747f339adb899a554227d55eb6081_prof);

        
        $__internal_0a7ec4781385a2a85218fbb3f13297ce0e9d57f8147d84aeeec3013e8dad9d2e->leave($__internal_0a7ec4781385a2a85218fbb3f13297ce0e9d57f8147d84aeeec3013e8dad9d2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9f6db5ef5b3441cdb73cd94f8cdf575e43d0eff7a5a39e6fed646ebfc36ccf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f6db5ef5b3441cdb73cd94f8cdf575e43d0eff7a5a39e6fed646ebfc36ccf5->enter($__internal_a9f6db5ef5b3441cdb73cd94f8cdf575e43d0eff7a5a39e6fed646ebfc36ccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_987dbe6802e788ad49dfa97ef31df1afe48285abd3ab27f14c79e05a7456fd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987dbe6802e788ad49dfa97ef31df1afe48285abd3ab27f14c79e05a7456fd7a->enter($__internal_987dbe6802e788ad49dfa97ef31df1afe48285abd3ab27f14c79e05a7456fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_987dbe6802e788ad49dfa97ef31df1afe48285abd3ab27f14c79e05a7456fd7a->leave($__internal_987dbe6802e788ad49dfa97ef31df1afe48285abd3ab27f14c79e05a7456fd7a_prof);

        
        $__internal_a9f6db5ef5b3441cdb73cd94f8cdf575e43d0eff7a5a39e6fed646ebfc36ccf5->leave($__internal_a9f6db5ef5b3441cdb73cd94f8cdf575e43d0eff7a5a39e6fed646ebfc36ccf5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a5e42e8b84218092c9a26631fa72141e64a81aa27e2bf5bd930986c99e285fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5e42e8b84218092c9a26631fa72141e64a81aa27e2bf5bd930986c99e285fd->enter($__internal_3a5e42e8b84218092c9a26631fa72141e64a81aa27e2bf5bd930986c99e285fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319cb63242d24d5c2c04db17b7da1f56c271d9d1573fcc0a1af0e5cf51561718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319cb63242d24d5c2c04db17b7da1f56c271d9d1573fcc0a1af0e5cf51561718->enter($__internal_319cb63242d24d5c2c04db17b7da1f56c271d9d1573fcc0a1af0e5cf51561718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319cb63242d24d5c2c04db17b7da1f56c271d9d1573fcc0a1af0e5cf51561718->leave($__internal_319cb63242d24d5c2c04db17b7da1f56c271d9d1573fcc0a1af0e5cf51561718_prof);

        
        $__internal_3a5e42e8b84218092c9a26631fa72141e64a81aa27e2bf5bd930986c99e285fd->leave($__internal_3a5e42e8b84218092c9a26631fa72141e64a81aa27e2bf5bd930986c99e285fd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5c2a16c8995361fb7e5288901ae9da769e38014fd5d836035201b4d30ae80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5c2a16c8995361fb7e5288901ae9da769e38014fd5d836035201b4d30ae80e->enter($__internal_ec5c2a16c8995361fb7e5288901ae9da769e38014fd5d836035201b4d30ae80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b9809483ecf3d33ff44a28f0e35bbca0cb3ddf9d61c322cc223a088336d6853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9809483ecf3d33ff44a28f0e35bbca0cb3ddf9d61c322cc223a088336d6853->enter($__internal_2b9809483ecf3d33ff44a28f0e35bbca0cb3ddf9d61c322cc223a088336d6853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b9809483ecf3d33ff44a28f0e35bbca0cb3ddf9d61c322cc223a088336d6853->leave($__internal_2b9809483ecf3d33ff44a28f0e35bbca0cb3ddf9d61c322cc223a088336d6853_prof);

        
        $__internal_ec5c2a16c8995361fb7e5288901ae9da769e38014fd5d836035201b4d30ae80e->leave($__internal_ec5c2a16c8995361fb7e5288901ae9da769e38014fd5d836035201b4d30ae80e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52437c9a26150674b94d95d2e7fd3505b9c0e5a9934fe48ef6a5cd43f262c954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52437c9a26150674b94d95d2e7fd3505b9c0e5a9934fe48ef6a5cd43f262c954->enter($__internal_52437c9a26150674b94d95d2e7fd3505b9c0e5a9934fe48ef6a5cd43f262c954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_26c03fb938ec0b1d44a8b585a0679eb10615d7dd7c1430747054603a5d1a79c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c03fb938ec0b1d44a8b585a0679eb10615d7dd7c1430747054603a5d1a79c2->enter($__internal_26c03fb938ec0b1d44a8b585a0679eb10615d7dd7c1430747054603a5d1a79c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_26c03fb938ec0b1d44a8b585a0679eb10615d7dd7c1430747054603a5d1a79c2->leave($__internal_26c03fb938ec0b1d44a8b585a0679eb10615d7dd7c1430747054603a5d1a79c2_prof);

        
        $__internal_52437c9a26150674b94d95d2e7fd3505b9c0e5a9934fe48ef6a5cd43f262c954->leave($__internal_52437c9a26150674b94d95d2e7fd3505b9c0e5a9934fe48ef6a5cd43f262c954_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\projett1\\app/Resources\\views/base.html.twig");
    }
}
