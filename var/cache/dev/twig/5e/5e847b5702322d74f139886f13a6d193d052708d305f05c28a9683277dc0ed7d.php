<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4cd3eaa2f44003f71c3fd4b465c774e5b17ea81671a7939fd9e4075b5791a5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PostBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_521b01f9c1e088a9bef47534d3ddb45bb7bcddff6f05728a54644ed8753a5c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521b01f9c1e088a9bef47534d3ddb45bb7bcddff6f05728a54644ed8753a5c0b->enter($__internal_521b01f9c1e088a9bef47534d3ddb45bb7bcddff6f05728a54644ed8753a5c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_96943376b432afb5b2ec365e38d6d4b4bf84100bfa83e15f56e8dfa357024ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96943376b432afb5b2ec365e38d6d4b4bf84100bfa83e15f56e8dfa357024ff3->enter($__internal_96943376b432afb5b2ec365e38d6d4b4bf84100bfa83e15f56e8dfa357024ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521b01f9c1e088a9bef47534d3ddb45bb7bcddff6f05728a54644ed8753a5c0b->leave($__internal_521b01f9c1e088a9bef47534d3ddb45bb7bcddff6f05728a54644ed8753a5c0b_prof);

        
        $__internal_96943376b432afb5b2ec365e38d6d4b4bf84100bfa83e15f56e8dfa357024ff3->leave($__internal_96943376b432afb5b2ec365e38d6d4b4bf84100bfa83e15f56e8dfa357024ff3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30c88412dba56049be0f4adde1aaf15a7a515bcd263d95e33ea8dca33a312108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c88412dba56049be0f4adde1aaf15a7a515bcd263d95e33ea8dca33a312108->enter($__internal_30c88412dba56049be0f4adde1aaf15a7a515bcd263d95e33ea8dca33a312108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57cc6e819160808d29b173d6d695f7747aecfa86a8d904c3a4698e8f41bc5e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cc6e819160808d29b173d6d695f7747aecfa86a8d904c3a4698e8f41bc5e75->enter($__internal_57cc6e819160808d29b173d6d695f7747aecfa86a8d904c3a4698e8f41bc5e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
   ";
        
        $__internal_57cc6e819160808d29b173d6d695f7747aecfa86a8d904c3a4698e8f41bc5e75->leave($__internal_57cc6e819160808d29b173d6d695f7747aecfa86a8d904c3a4698e8f41bc5e75_prof);

        
        $__internal_30c88412dba56049be0f4adde1aaf15a7a515bcd263d95e33ea8dca33a312108->leave($__internal_30c88412dba56049be0f4adde1aaf15a7a515bcd263d95e33ea8dca33a312108_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28408c1072f19abe214d10a7e37d5939e98cf389ee9903978b87f459a02c0021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28408c1072f19abe214d10a7e37d5939e98cf389ee9903978b87f459a02c0021->enter($__internal_28408c1072f19abe214d10a7e37d5939e98cf389ee9903978b87f459a02c0021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a770560cc19908e7dab4613db8c6d1bde5e2d7f453f42ef8c2766ceb1f8778e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a770560cc19908e7dab4613db8c6d1bde5e2d7f453f42ef8c2766ceb1f8778e->enter($__internal_0a770560cc19908e7dab4613db8c6d1bde5e2d7f453f42ef8c2766ceb1f8778e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_0a770560cc19908e7dab4613db8c6d1bde5e2d7f453f42ef8c2766ceb1f8778e->leave($__internal_0a770560cc19908e7dab4613db8c6d1bde5e2d7f453f42ef8c2766ceb1f8778e_prof);

        
        $__internal_28408c1072f19abe214d10a7e37d5939e98cf389ee9903978b87f459a02c0021->leave($__internal_28408c1072f19abe214d10a7e37d5939e98cf389ee9903978b87f459a02c0021_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  134 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
   {% endblock %}", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\projett1\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
