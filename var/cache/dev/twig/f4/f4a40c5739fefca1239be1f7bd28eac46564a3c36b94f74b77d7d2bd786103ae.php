<?php

/* PostBundle:Page:new.html.twig */
class __TwigTemplate_f2b5cb7e00ed9c1b9c042d5e0fede2376a8f7a056f2b4dae2c844aac866cf187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "PostBundle:Page:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PostBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a3b78f74e47bca4751bf6a71e04715166e5d043b9f80995244c547a86e6f6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3b78f74e47bca4751bf6a71e04715166e5d043b9f80995244c547a86e6f6fa->enter($__internal_8a3b78f74e47bca4751bf6a71e04715166e5d043b9f80995244c547a86e6f6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Page:new.html.twig"));

        $__internal_5bf3ffbab90f85df6cdd6295a61db697002bd996e7ccf44e75d66d5a1210b2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf3ffbab90f85df6cdd6295a61db697002bd996e7ccf44e75d66d5a1210b2c5->enter($__internal_5bf3ffbab90f85df6cdd6295a61db697002bd996e7ccf44e75d66d5a1210b2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3b78f74e47bca4751bf6a71e04715166e5d043b9f80995244c547a86e6f6fa->leave($__internal_8a3b78f74e47bca4751bf6a71e04715166e5d043b9f80995244c547a86e6f6fa_prof);

        
        $__internal_5bf3ffbab90f85df6cdd6295a61db697002bd996e7ccf44e75d66d5a1210b2c5->leave($__internal_5bf3ffbab90f85df6cdd6295a61db697002bd996e7ccf44e75d66d5a1210b2c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34e6e5f1ca92edbd80808f7bd708c1b50adc797660ec7acc3d529db86b0be6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e6e5f1ca92edbd80808f7bd708c1b50adc797660ec7acc3d529db86b0be6ee->enter($__internal_34e6e5f1ca92edbd80808f7bd708c1b50adc797660ec7acc3d529db86b0be6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9474f9b373707b90ad26718c3e4cb0fe59580a469ad1ffd6cb63f298a333805c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9474f9b373707b90ad26718c3e4cb0fe59580a469ad1ffd6cb63f298a333805c->enter($__internal_9474f9b373707b90ad26718c3e4cb0fe59580a469ad1ffd6cb63f298a333805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9474f9b373707b90ad26718c3e4cb0fe59580a469ad1ffd6cb63f298a333805c->leave($__internal_9474f9b373707b90ad26718c3e4cb0fe59580a469ad1ffd6cb63f298a333805c_prof);

        
        $__internal_34e6e5f1ca92edbd80808f7bd708c1b50adc797660ec7acc3d529db86b0be6ee->leave($__internal_34e6e5f1ca92edbd80808f7bd708c1b50adc797660ec7acc3d529db86b0be6ee_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PostBundle::base.html.twig' %}

{% block body %}
    <h1>Page creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('page_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "PostBundle:Page:new.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Page/new.html.twig");
    }
}
