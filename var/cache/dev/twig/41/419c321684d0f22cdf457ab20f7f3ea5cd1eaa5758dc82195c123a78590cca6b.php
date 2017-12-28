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
        $__internal_1326af73084434949a7427e1600d4506bf439ab594597cc55bf3f1e37a66edd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1326af73084434949a7427e1600d4506bf439ab594597cc55bf3f1e37a66edd6->enter($__internal_1326af73084434949a7427e1600d4506bf439ab594597cc55bf3f1e37a66edd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle::base.html.twig"));

        $__internal_af2deee82b539fd950d9aaac767bf7cfbc443dc13ce31b5fb779df0b9bfcbaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2deee82b539fd950d9aaac767bf7cfbc443dc13ce31b5fb779df0b9bfcbaab->enter($__internal_af2deee82b539fd950d9aaac767bf7cfbc443dc13ce31b5fb779df0b9bfcbaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Mon Blog</title>

\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrappapper.min.css"), "html", null, true);
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
        
        $__internal_1326af73084434949a7427e1600d4506bf439ab594597cc55bf3f1e37a66edd6->leave($__internal_1326af73084434949a7427e1600d4506bf439ab594597cc55bf3f1e37a66edd6_prof);

        
        $__internal_af2deee82b539fd950d9aaac767bf7cfbc443dc13ce31b5fb779df0b9bfcbaab->leave($__internal_af2deee82b539fd950d9aaac767bf7cfbc443dc13ce31b5fb779df0b9bfcbaab_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_29891f8eacc332f749b9e20a2feb937524230ead04680773f555f5198619ac8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29891f8eacc332f749b9e20a2feb937524230ead04680773f555f5198619ac8d->enter($__internal_29891f8eacc332f749b9e20a2feb937524230ead04680773f555f5198619ac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f89e1c9fffe75db2d8eda1eb5c28e8e02d4343acf587ce9e49c305f157e326f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89e1c9fffe75db2d8eda1eb5c28e8e02d4343acf587ce9e49c305f157e326f5->enter($__internal_f89e1c9fffe75db2d8eda1eb5c28e8e02d4343acf587ce9e49c305f157e326f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f89e1c9fffe75db2d8eda1eb5c28e8e02d4343acf587ce9e49c305f157e326f5->leave($__internal_f89e1c9fffe75db2d8eda1eb5c28e8e02d4343acf587ce9e49c305f157e326f5_prof);

        
        $__internal_29891f8eacc332f749b9e20a2feb937524230ead04680773f555f5198619ac8d->leave($__internal_29891f8eacc332f749b9e20a2feb937524230ead04680773f555f5198619ac8d_prof);

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

\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrappapper.min.css') }}\">
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
