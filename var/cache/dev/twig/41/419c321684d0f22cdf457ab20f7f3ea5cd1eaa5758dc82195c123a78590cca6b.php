<?php

/* PostBundle::base.html.twig */
class __TwigTemplate_6517f736773fb77a3f2335d6cb07a388b5297d37e8032cd0412d72ffc4e9be5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61fed6fa65c252129d6dc8d3575b493536f440793edea83f259f6b7e72ffa81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fed6fa65c252129d6dc8d3575b493536f440793edea83f259f6b7e72ffa81a->enter($__internal_61fed6fa65c252129d6dc8d3575b493536f440793edea83f259f6b7e72ffa81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle::base.html.twig"));

        $__internal_29e8125c580a077da751056cc67c5f4f6387c1c8257aa12d21ec08b3b2b4a66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e8125c580a077da751056cc67c5f4f6387c1c8257aa12d21ec08b3b2b4a66a->enter($__internal_29e8125c580a077da751056cc67c5f4f6387c1c8257aa12d21ec08b3b2b4a66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Mon Blog</title>

\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
</head>
<body>
\t

   ";
        // line 12
        echo twig_include($this->env, $context, "PostBundle::partials/navbar.html.twig");
        echo "


    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-md-3\">
    \t\t\t<ul class=\"list-group\">
    \t\t\t\t<li class=\"list-group-item\">lorem 1</li>
    \t\t\t\t<li class=\"list-group-item\">lorem 2</li>
    \t\t\t\t<li class=\"list-group-item\">lorem 3</li>
    \t\t\t\t<li class=\"list-group-item\">lorem 4</li>
    \t\t\t\t
    \t\t\t</ul>
    \t\t</div>
    \t\t<div class=\"col-md-9\">
    \t\t\t  ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    \t\t</div>
    \t</div>
    </div>


  




<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_61fed6fa65c252129d6dc8d3575b493536f440793edea83f259f6b7e72ffa81a->leave($__internal_61fed6fa65c252129d6dc8d3575b493536f440793edea83f259f6b7e72ffa81a_prof);

        
        $__internal_29e8125c580a077da751056cc67c5f4f6387c1c8257aa12d21ec08b3b2b4a66a->leave($__internal_29e8125c580a077da751056cc67c5f4f6387c1c8257aa12d21ec08b3b2b4a66a_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_e00b466b61392850a686a39730de7d9f7402716d9f3f5280f3e6a7c22903a392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00b466b61392850a686a39730de7d9f7402716d9f3f5280f3e6a7c22903a392->enter($__internal_e00b466b61392850a686a39730de7d9f7402716d9f3f5280f3e6a7c22903a392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dc2e5bf9231555ca404f6a426e8ffafe85123f607625e59115fd9c5b23b7bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc2e5bf9231555ca404f6a426e8ffafe85123f607625e59115fd9c5b23b7bb3->enter($__internal_2dc2e5bf9231555ca404f6a426e8ffafe85123f607625e59115fd9c5b23b7bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2dc2e5bf9231555ca404f6a426e8ffafe85123f607625e59115fd9c5b23b7bb3->leave($__internal_2dc2e5bf9231555ca404f6a426e8ffafe85123f607625e59115fd9c5b23b7bb3_prof);

        
        $__internal_e00b466b61392850a686a39730de7d9f7402716d9f3f5280f3e6a7c22903a392->leave($__internal_e00b466b61392850a686a39730de7d9f7402716d9f3f5280f3e6a7c22903a392_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  78 => 39,  74 => 38,  62 => 28,  60 => 27,  42 => 12,  34 => 7,  26 => 1,);
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
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Mon Blog</title>

\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
</head>
<body>
\t

   {{ include('PostBundle::partials/navbar.html.twig') }}


    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-md-3\">
    \t\t\t<ul class=\"list-group\">
    \t\t\t\t<li class=\"list-group-item\">lorem 1</li>
    \t\t\t\t<li class=\"list-group-item\">lorem 2</li>
    \t\t\t\t<li class=\"list-group-item\">lorem 3</li>
    \t\t\t\t<li class=\"list-group-item\">lorem 4</li>
    \t\t\t\t
    \t\t\t</ul>
    \t\t</div>
    \t\t<div class=\"col-md-9\">
    \t\t\t  {% block body %}{% endblock %}
    \t\t</div>
    \t</div>
    </div>


  




<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
</body>
</html>", "PostBundle::base.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/base.html.twig");
    }
}
