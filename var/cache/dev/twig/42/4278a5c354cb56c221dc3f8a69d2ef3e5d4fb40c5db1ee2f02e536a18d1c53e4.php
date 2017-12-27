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
        $__internal_47a4f732a406e7975efb12a89b07f96e5d5c9b7d407c2dd6ed1e14a5860b7857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a4f732a406e7975efb12a89b07f96e5d5c9b7d407c2dd6ed1e14a5860b7857->enter($__internal_47a4f732a406e7975efb12a89b07f96e5d5c9b7d407c2dd6ed1e14a5860b7857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_61017e9b7ab787777d2fe57760693e6d7b354188748e02fdba34a9befdd75bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61017e9b7ab787777d2fe57760693e6d7b354188748e02fdba34a9befdd75bc5->enter($__internal_61017e9b7ab787777d2fe57760693e6d7b354188748e02fdba34a9befdd75bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_47a4f732a406e7975efb12a89b07f96e5d5c9b7d407c2dd6ed1e14a5860b7857->leave($__internal_47a4f732a406e7975efb12a89b07f96e5d5c9b7d407c2dd6ed1e14a5860b7857_prof);

        
        $__internal_61017e9b7ab787777d2fe57760693e6d7b354188748e02fdba34a9befdd75bc5->leave($__internal_61017e9b7ab787777d2fe57760693e6d7b354188748e02fdba34a9befdd75bc5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a544877681a9573987849af26c2f85bc53b917ee9d03bff511de876c135363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a544877681a9573987849af26c2f85bc53b917ee9d03bff511de876c135363->enter($__internal_f3a544877681a9573987849af26c2f85bc53b917ee9d03bff511de876c135363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a5d485db6b532f9ab22b394fe9596c5d57bfc9a912bc9b0bbdec58fdfdd4be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5d485db6b532f9ab22b394fe9596c5d57bfc9a912bc9b0bbdec58fdfdd4be5->enter($__internal_4a5d485db6b532f9ab22b394fe9596c5d57bfc9a912bc9b0bbdec58fdfdd4be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a5d485db6b532f9ab22b394fe9596c5d57bfc9a912bc9b0bbdec58fdfdd4be5->leave($__internal_4a5d485db6b532f9ab22b394fe9596c5d57bfc9a912bc9b0bbdec58fdfdd4be5_prof);

        
        $__internal_f3a544877681a9573987849af26c2f85bc53b917ee9d03bff511de876c135363->leave($__internal_f3a544877681a9573987849af26c2f85bc53b917ee9d03bff511de876c135363_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a11ac93910c491ec2449d329a36e53b19f64676fc171799a4a72a874351ce566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11ac93910c491ec2449d329a36e53b19f64676fc171799a4a72a874351ce566->enter($__internal_a11ac93910c491ec2449d329a36e53b19f64676fc171799a4a72a874351ce566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c4bef0ca2ff1f6428a34134a683b90a06891955666bd7cc4eb7808e54ffdc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4bef0ca2ff1f6428a34134a683b90a06891955666bd7cc4eb7808e54ffdc18->enter($__internal_6c4bef0ca2ff1f6428a34134a683b90a06891955666bd7cc4eb7808e54ffdc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6c4bef0ca2ff1f6428a34134a683b90a06891955666bd7cc4eb7808e54ffdc18->leave($__internal_6c4bef0ca2ff1f6428a34134a683b90a06891955666bd7cc4eb7808e54ffdc18_prof);

        
        $__internal_a11ac93910c491ec2449d329a36e53b19f64676fc171799a4a72a874351ce566->leave($__internal_a11ac93910c491ec2449d329a36e53b19f64676fc171799a4a72a874351ce566_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32d7a6eab03468a3954bef71f8acaff74e553b2e6e001d9c556ec98b875b48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32d7a6eab03468a3954bef71f8acaff74e553b2e6e001d9c556ec98b875b48f->enter($__internal_e32d7a6eab03468a3954bef71f8acaff74e553b2e6e001d9c556ec98b875b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c97009a2922d039b4b85ff71dff5836ed97847cb03f48821be436826598d198b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97009a2922d039b4b85ff71dff5836ed97847cb03f48821be436826598d198b->enter($__internal_c97009a2922d039b4b85ff71dff5836ed97847cb03f48821be436826598d198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c97009a2922d039b4b85ff71dff5836ed97847cb03f48821be436826598d198b->leave($__internal_c97009a2922d039b4b85ff71dff5836ed97847cb03f48821be436826598d198b_prof);

        
        $__internal_e32d7a6eab03468a3954bef71f8acaff74e553b2e6e001d9c556ec98b875b48f->leave($__internal_e32d7a6eab03468a3954bef71f8acaff74e553b2e6e001d9c556ec98b875b48f_prof);

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
