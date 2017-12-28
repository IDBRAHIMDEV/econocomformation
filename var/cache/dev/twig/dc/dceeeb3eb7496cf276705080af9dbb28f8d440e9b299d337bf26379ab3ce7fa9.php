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
        $__internal_3cb15953e385b47cccd145fc07427f277cbe47596e37c1cb874114cf714c4063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb15953e385b47cccd145fc07427f277cbe47596e37c1cb874114cf714c4063->enter($__internal_3cb15953e385b47cccd145fc07427f277cbe47596e37c1cb874114cf714c4063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e3f8e286a616940de485598300ef794f878f807b7377ff99357274df4ce7f27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f8e286a616940de485598300ef794f878f807b7377ff99357274df4ce7f27a->enter($__internal_e3f8e286a616940de485598300ef794f878f807b7377ff99357274df4ce7f27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3cb15953e385b47cccd145fc07427f277cbe47596e37c1cb874114cf714c4063->leave($__internal_3cb15953e385b47cccd145fc07427f277cbe47596e37c1cb874114cf714c4063_prof);

        
        $__internal_e3f8e286a616940de485598300ef794f878f807b7377ff99357274df4ce7f27a->leave($__internal_e3f8e286a616940de485598300ef794f878f807b7377ff99357274df4ce7f27a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4e0534f165f81e125d752d725dfcbe3cc156ab6db05aa33ec017f29c5bdf31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4e0534f165f81e125d752d725dfcbe3cc156ab6db05aa33ec017f29c5bdf31->enter($__internal_eb4e0534f165f81e125d752d725dfcbe3cc156ab6db05aa33ec017f29c5bdf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a098214f95dadc9762c7ccb1c71c814ea0c8827096997632561f998f81171251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a098214f95dadc9762c7ccb1c71c814ea0c8827096997632561f998f81171251->enter($__internal_a098214f95dadc9762c7ccb1c71c814ea0c8827096997632561f998f81171251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a098214f95dadc9762c7ccb1c71c814ea0c8827096997632561f998f81171251->leave($__internal_a098214f95dadc9762c7ccb1c71c814ea0c8827096997632561f998f81171251_prof);

        
        $__internal_eb4e0534f165f81e125d752d725dfcbe3cc156ab6db05aa33ec017f29c5bdf31->leave($__internal_eb4e0534f165f81e125d752d725dfcbe3cc156ab6db05aa33ec017f29c5bdf31_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d0f8c00c5b547b9b10de4e3ddb2603580e5be1e3fbf480857b9babf274fd8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0f8c00c5b547b9b10de4e3ddb2603580e5be1e3fbf480857b9babf274fd8be->enter($__internal_4d0f8c00c5b547b9b10de4e3ddb2603580e5be1e3fbf480857b9babf274fd8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e58cceae0c893130cb96a475ffed58b5749a26b7c1588475420c4f38a1698c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58cceae0c893130cb96a475ffed58b5749a26b7c1588475420c4f38a1698c00->enter($__internal_e58cceae0c893130cb96a475ffed58b5749a26b7c1588475420c4f38a1698c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e58cceae0c893130cb96a475ffed58b5749a26b7c1588475420c4f38a1698c00->leave($__internal_e58cceae0c893130cb96a475ffed58b5749a26b7c1588475420c4f38a1698c00_prof);

        
        $__internal_4d0f8c00c5b547b9b10de4e3ddb2603580e5be1e3fbf480857b9babf274fd8be->leave($__internal_4d0f8c00c5b547b9b10de4e3ddb2603580e5be1e3fbf480857b9babf274fd8be_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1c3b3ad3c2dafe8546f725721151f73cfa103cbce56b17de3d5a9bf87182366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c3b3ad3c2dafe8546f725721151f73cfa103cbce56b17de3d5a9bf87182366->enter($__internal_b1c3b3ad3c2dafe8546f725721151f73cfa103cbce56b17de3d5a9bf87182366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c342de068f103be50d079073c065b50806505d418642fe53d22c8eac10312f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c342de068f103be50d079073c065b50806505d418642fe53d22c8eac10312f2->enter($__internal_4c342de068f103be50d079073c065b50806505d418642fe53d22c8eac10312f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c342de068f103be50d079073c065b50806505d418642fe53d22c8eac10312f2->leave($__internal_4c342de068f103be50d079073c065b50806505d418642fe53d22c8eac10312f2_prof);

        
        $__internal_b1c3b3ad3c2dafe8546f725721151f73cfa103cbce56b17de3d5a9bf87182366->leave($__internal_b1c3b3ad3c2dafe8546f725721151f73cfa103cbce56b17de3d5a9bf87182366_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6abd741b54d3e6f55cccb359ac04fd71b470131a35803632ec1f8cb0ae0c0de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abd741b54d3e6f55cccb359ac04fd71b470131a35803632ec1f8cb0ae0c0de1->enter($__internal_6abd741b54d3e6f55cccb359ac04fd71b470131a35803632ec1f8cb0ae0c0de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d287c1dddb711510f6d14e7f4c9a5a4e956438d81f8b76921e18790d7746ee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d287c1dddb711510f6d14e7f4c9a5a4e956438d81f8b76921e18790d7746ee6e->enter($__internal_d287c1dddb711510f6d14e7f4c9a5a4e956438d81f8b76921e18790d7746ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d287c1dddb711510f6d14e7f4c9a5a4e956438d81f8b76921e18790d7746ee6e->leave($__internal_d287c1dddb711510f6d14e7f4c9a5a4e956438d81f8b76921e18790d7746ee6e_prof);

        
        $__internal_6abd741b54d3e6f55cccb359ac04fd71b470131a35803632ec1f8cb0ae0c0de1->leave($__internal_6abd741b54d3e6f55cccb359ac04fd71b470131a35803632ec1f8cb0ae0c0de1_prof);

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
