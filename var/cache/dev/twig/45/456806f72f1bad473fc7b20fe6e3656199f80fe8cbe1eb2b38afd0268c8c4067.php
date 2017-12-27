<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6023e7046629ab9729ab6484398a02caaee165f05f4f641d0ff3fd39fce6a214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883447f102e95bf783bf6c2741dba811e6acffbfc75095bb5b17ea7732f6abcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883447f102e95bf783bf6c2741dba811e6acffbfc75095bb5b17ea7732f6abcb->enter($__internal_883447f102e95bf783bf6c2741dba811e6acffbfc75095bb5b17ea7732f6abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6b8d11a0a41e5fbe0a89cd8b41122e7df1733edb7b4971324b995c2140f62672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8d11a0a41e5fbe0a89cd8b41122e7df1733edb7b4971324b995c2140f62672->enter($__internal_6b8d11a0a41e5fbe0a89cd8b41122e7df1733edb7b4971324b995c2140f62672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_883447f102e95bf783bf6c2741dba811e6acffbfc75095bb5b17ea7732f6abcb->leave($__internal_883447f102e95bf783bf6c2741dba811e6acffbfc75095bb5b17ea7732f6abcb_prof);

        
        $__internal_6b8d11a0a41e5fbe0a89cd8b41122e7df1733edb7b4971324b995c2140f62672->leave($__internal_6b8d11a0a41e5fbe0a89cd8b41122e7df1733edb7b4971324b995c2140f62672_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e1b80c3eb7ac7f9d98dd1aeb89f5c47b728993054e975be0a4f7e3318f771da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1b80c3eb7ac7f9d98dd1aeb89f5c47b728993054e975be0a4f7e3318f771da->enter($__internal_8e1b80c3eb7ac7f9d98dd1aeb89f5c47b728993054e975be0a4f7e3318f771da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20c8e5acb62052474b6ecfdfc848fc72e6ac061c08426607d55a1a27674c8171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c8e5acb62052474b6ecfdfc848fc72e6ac061c08426607d55a1a27674c8171->enter($__internal_20c8e5acb62052474b6ecfdfc848fc72e6ac061c08426607d55a1a27674c8171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_20c8e5acb62052474b6ecfdfc848fc72e6ac061c08426607d55a1a27674c8171->leave($__internal_20c8e5acb62052474b6ecfdfc848fc72e6ac061c08426607d55a1a27674c8171_prof);

        
        $__internal_8e1b80c3eb7ac7f9d98dd1aeb89f5c47b728993054e975be0a4f7e3318f771da->leave($__internal_8e1b80c3eb7ac7f9d98dd1aeb89f5c47b728993054e975be0a4f7e3318f771da_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_781bb9e9ea90cc23270873feb67ebf07d23a4e2cf37381677be25afc96b07f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781bb9e9ea90cc23270873feb67ebf07d23a4e2cf37381677be25afc96b07f40->enter($__internal_781bb9e9ea90cc23270873feb67ebf07d23a4e2cf37381677be25afc96b07f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c7167a9c6276b027aebec4922d33464b3643588306b10985854b0f784a24618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7167a9c6276b027aebec4922d33464b3643588306b10985854b0f784a24618->enter($__internal_3c7167a9c6276b027aebec4922d33464b3643588306b10985854b0f784a24618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3c7167a9c6276b027aebec4922d33464b3643588306b10985854b0f784a24618->leave($__internal_3c7167a9c6276b027aebec4922d33464b3643588306b10985854b0f784a24618_prof);

        
        $__internal_781bb9e9ea90cc23270873feb67ebf07d23a4e2cf37381677be25afc96b07f40->leave($__internal_781bb9e9ea90cc23270873feb67ebf07d23a4e2cf37381677be25afc96b07f40_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_355cd1954258f7d104e3328099fc40e67d0acd2ccfe3dcf0aff68dd99fa1add9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355cd1954258f7d104e3328099fc40e67d0acd2ccfe3dcf0aff68dd99fa1add9->enter($__internal_355cd1954258f7d104e3328099fc40e67d0acd2ccfe3dcf0aff68dd99fa1add9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4669eaeaede17ea6059a2b44b9993d17bb7b06aa1e0ce815f682d700a043aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4669eaeaede17ea6059a2b44b9993d17bb7b06aa1e0ce815f682d700a043aed->enter($__internal_b4669eaeaede17ea6059a2b44b9993d17bb7b06aa1e0ce815f682d700a043aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4669eaeaede17ea6059a2b44b9993d17bb7b06aa1e0ce815f682d700a043aed->leave($__internal_b4669eaeaede17ea6059a2b44b9993d17bb7b06aa1e0ce815f682d700a043aed_prof);

        
        $__internal_355cd1954258f7d104e3328099fc40e67d0acd2ccfe3dcf0aff68dd99fa1add9->leave($__internal_355cd1954258f7d104e3328099fc40e67d0acd2ccfe3dcf0aff68dd99fa1add9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
