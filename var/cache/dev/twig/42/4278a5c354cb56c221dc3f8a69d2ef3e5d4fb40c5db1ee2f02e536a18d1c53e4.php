<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
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
        $__internal_8c4a99cee3a75fe8f367723cea070ccb8478ce298110fb9f365de33934592b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4a99cee3a75fe8f367723cea070ccb8478ce298110fb9f365de33934592b8c->enter($__internal_8c4a99cee3a75fe8f367723cea070ccb8478ce298110fb9f365de33934592b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5044437bf11c900f90877b1f6c272a82cd426b8359ad76ccf82d2b9289f41511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5044437bf11c900f90877b1f6c272a82cd426b8359ad76ccf82d2b9289f41511->enter($__internal_5044437bf11c900f90877b1f6c272a82cd426b8359ad76ccf82d2b9289f41511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8c4a99cee3a75fe8f367723cea070ccb8478ce298110fb9f365de33934592b8c->leave($__internal_8c4a99cee3a75fe8f367723cea070ccb8478ce298110fb9f365de33934592b8c_prof);

        
        $__internal_5044437bf11c900f90877b1f6c272a82cd426b8359ad76ccf82d2b9289f41511->leave($__internal_5044437bf11c900f90877b1f6c272a82cd426b8359ad76ccf82d2b9289f41511_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f78f60dfcce9ba44ea7ac67f8d1759df41d2f8ef70325c3c38db5640e6743e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78f60dfcce9ba44ea7ac67f8d1759df41d2f8ef70325c3c38db5640e6743e01->enter($__internal_f78f60dfcce9ba44ea7ac67f8d1759df41d2f8ef70325c3c38db5640e6743e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f85a069d46e943739434965d56c65ec5c5fe09db3308d157fd2847e696772e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85a069d46e943739434965d56c65ec5c5fe09db3308d157fd2847e696772e85->enter($__internal_f85a069d46e943739434965d56c65ec5c5fe09db3308d157fd2847e696772e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f85a069d46e943739434965d56c65ec5c5fe09db3308d157fd2847e696772e85->leave($__internal_f85a069d46e943739434965d56c65ec5c5fe09db3308d157fd2847e696772e85_prof);

        
        $__internal_f78f60dfcce9ba44ea7ac67f8d1759df41d2f8ef70325c3c38db5640e6743e01->leave($__internal_f78f60dfcce9ba44ea7ac67f8d1759df41d2f8ef70325c3c38db5640e6743e01_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e4175f7fc10868fa6f7406400c898b7e35eee7743e568a63c0c61d47da91468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4175f7fc10868fa6f7406400c898b7e35eee7743e568a63c0c61d47da91468->enter($__internal_3e4175f7fc10868fa6f7406400c898b7e35eee7743e568a63c0c61d47da91468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1b5a555c840b3d1274ed89f57f96805608e1c9bfe22adfb4ddad71242dfaf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b5a555c840b3d1274ed89f57f96805608e1c9bfe22adfb4ddad71242dfaf50->enter($__internal_a1b5a555c840b3d1274ed89f57f96805608e1c9bfe22adfb4ddad71242dfaf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a1b5a555c840b3d1274ed89f57f96805608e1c9bfe22adfb4ddad71242dfaf50->leave($__internal_a1b5a555c840b3d1274ed89f57f96805608e1c9bfe22adfb4ddad71242dfaf50_prof);

        
        $__internal_3e4175f7fc10868fa6f7406400c898b7e35eee7743e568a63c0c61d47da91468->leave($__internal_3e4175f7fc10868fa6f7406400c898b7e35eee7743e568a63c0c61d47da91468_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fad76106f608db07db3e5da76b24d693b73a104ded64e2c2e7d87bf06c723586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad76106f608db07db3e5da76b24d693b73a104ded64e2c2e7d87bf06c723586->enter($__internal_fad76106f608db07db3e5da76b24d693b73a104ded64e2c2e7d87bf06c723586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15fd927772c412e6d9c65857a27023140055797b33e249b82a031c0888f56256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fd927772c412e6d9c65857a27023140055797b33e249b82a031c0888f56256->enter($__internal_15fd927772c412e6d9c65857a27023140055797b33e249b82a031c0888f56256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15fd927772c412e6d9c65857a27023140055797b33e249b82a031c0888f56256->leave($__internal_15fd927772c412e6d9c65857a27023140055797b33e249b82a031c0888f56256_prof);

        
        $__internal_fad76106f608db07db3e5da76b24d693b73a104ded64e2c2e7d87bf06c723586->leave($__internal_fad76106f608db07db3e5da76b24d693b73a104ded64e2c2e7d87bf06c723586_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
