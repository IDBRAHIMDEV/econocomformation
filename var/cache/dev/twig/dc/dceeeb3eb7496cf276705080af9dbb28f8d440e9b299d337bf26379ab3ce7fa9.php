<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_82e82bd8d549327015a779257a0d0d04f3d948d0a8440e576d7f7df250d3b8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e82bd8d549327015a779257a0d0d04f3d948d0a8440e576d7f7df250d3b8a5->enter($__internal_82e82bd8d549327015a779257a0d0d04f3d948d0a8440e576d7f7df250d3b8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3c053002ae4fafc5888a1e05ab5056188299775387ae98808d73ae61d6ea2fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c053002ae4fafc5888a1e05ab5056188299775387ae98808d73ae61d6ea2fc4->enter($__internal_3c053002ae4fafc5888a1e05ab5056188299775387ae98808d73ae61d6ea2fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_82e82bd8d549327015a779257a0d0d04f3d948d0a8440e576d7f7df250d3b8a5->leave($__internal_82e82bd8d549327015a779257a0d0d04f3d948d0a8440e576d7f7df250d3b8a5_prof);

        
        $__internal_3c053002ae4fafc5888a1e05ab5056188299775387ae98808d73ae61d6ea2fc4->leave($__internal_3c053002ae4fafc5888a1e05ab5056188299775387ae98808d73ae61d6ea2fc4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3935d3edcffd1676acea4392863b45bf19931baa060cc5db252980a85df379f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3935d3edcffd1676acea4392863b45bf19931baa060cc5db252980a85df379f9->enter($__internal_3935d3edcffd1676acea4392863b45bf19931baa060cc5db252980a85df379f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36ebfffd8489c42fd585bdf2ff6dff19846a938546b523f2520e343945fc4e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ebfffd8489c42fd585bdf2ff6dff19846a938546b523f2520e343945fc4e29->enter($__internal_36ebfffd8489c42fd585bdf2ff6dff19846a938546b523f2520e343945fc4e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_36ebfffd8489c42fd585bdf2ff6dff19846a938546b523f2520e343945fc4e29->leave($__internal_36ebfffd8489c42fd585bdf2ff6dff19846a938546b523f2520e343945fc4e29_prof);

        
        $__internal_3935d3edcffd1676acea4392863b45bf19931baa060cc5db252980a85df379f9->leave($__internal_3935d3edcffd1676acea4392863b45bf19931baa060cc5db252980a85df379f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff36a9a204b25de536432980be93952487c8d63daee9143dee9fe6a56d1ca44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff36a9a204b25de536432980be93952487c8d63daee9143dee9fe6a56d1ca44b->enter($__internal_ff36a9a204b25de536432980be93952487c8d63daee9143dee9fe6a56d1ca44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ad6711613495b2eb583018ed174e515ca25d31e565b9947ca2ccad98af6ed2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad6711613495b2eb583018ed174e515ca25d31e565b9947ca2ccad98af6ed2b->enter($__internal_6ad6711613495b2eb583018ed174e515ca25d31e565b9947ca2ccad98af6ed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ad6711613495b2eb583018ed174e515ca25d31e565b9947ca2ccad98af6ed2b->leave($__internal_6ad6711613495b2eb583018ed174e515ca25d31e565b9947ca2ccad98af6ed2b_prof);

        
        $__internal_ff36a9a204b25de536432980be93952487c8d63daee9143dee9fe6a56d1ca44b->leave($__internal_ff36a9a204b25de536432980be93952487c8d63daee9143dee9fe6a56d1ca44b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16e2984f2b748310c8292f596092398d20dbd39ae7f6de94af1147d61fe27e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e2984f2b748310c8292f596092398d20dbd39ae7f6de94af1147d61fe27e1c->enter($__internal_16e2984f2b748310c8292f596092398d20dbd39ae7f6de94af1147d61fe27e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a7c960cfc3fba8cde013746805ac25e7124f4dbd732dd60a8d486e5b5cc2c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7c960cfc3fba8cde013746805ac25e7124f4dbd732dd60a8d486e5b5cc2c6a->enter($__internal_2a7c960cfc3fba8cde013746805ac25e7124f4dbd732dd60a8d486e5b5cc2c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a7c960cfc3fba8cde013746805ac25e7124f4dbd732dd60a8d486e5b5cc2c6a->leave($__internal_2a7c960cfc3fba8cde013746805ac25e7124f4dbd732dd60a8d486e5b5cc2c6a_prof);

        
        $__internal_16e2984f2b748310c8292f596092398d20dbd39ae7f6de94af1147d61fe27e1c->leave($__internal_16e2984f2b748310c8292f596092398d20dbd39ae7f6de94af1147d61fe27e1c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c3e0f2d29bc82e0e8aa2f7c0660667cbfae360ca330d69719c877d991ec623c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3e0f2d29bc82e0e8aa2f7c0660667cbfae360ca330d69719c877d991ec623c->enter($__internal_4c3e0f2d29bc82e0e8aa2f7c0660667cbfae360ca330d69719c877d991ec623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2bcfca630dc6f5130765010b7ecd4ea25377f2e41f143a0e63784c804f6ded2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcfca630dc6f5130765010b7ecd4ea25377f2e41f143a0e63784c804f6ded2d->enter($__internal_2bcfca630dc6f5130765010b7ecd4ea25377f2e41f143a0e63784c804f6ded2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2bcfca630dc6f5130765010b7ecd4ea25377f2e41f143a0e63784c804f6ded2d->leave($__internal_2bcfca630dc6f5130765010b7ecd4ea25377f2e41f143a0e63784c804f6ded2d_prof);

        
        $__internal_4c3e0f2d29bc82e0e8aa2f7c0660667cbfae360ca330d69719c877d991ec623c->leave($__internal_4c3e0f2d29bc82e0e8aa2f7c0660667cbfae360ca330d69719c877d991ec623c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\projett1\\app\\Resources\\views\\base.html.twig");
    }
}
