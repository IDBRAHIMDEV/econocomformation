<?php

/* PostBundle:Post:index.html.twig */
class __TwigTemplate_fc7641c4d9ad6b47bb2e7d62068a96110a4ea71d46a85b4fc95d9c253d15cdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "PostBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PostBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01694b130e3e57df9a67e8508a82286c0eecfff6254f2241135ed134e6b57545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01694b130e3e57df9a67e8508a82286c0eecfff6254f2241135ed134e6b57545->enter($__internal_01694b130e3e57df9a67e8508a82286c0eecfff6254f2241135ed134e6b57545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Post:index.html.twig"));

        $__internal_6568892cd0495a789b7e72f09b99861367f026e58a8780e52dc32325653a54a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6568892cd0495a789b7e72f09b99861367f026e58a8780e52dc32325653a54a2->enter($__internal_6568892cd0495a789b7e72f09b99861367f026e58a8780e52dc32325653a54a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01694b130e3e57df9a67e8508a82286c0eecfff6254f2241135ed134e6b57545->leave($__internal_01694b130e3e57df9a67e8508a82286c0eecfff6254f2241135ed134e6b57545_prof);

        
        $__internal_6568892cd0495a789b7e72f09b99861367f026e58a8780e52dc32325653a54a2->leave($__internal_6568892cd0495a789b7e72f09b99861367f026e58a8780e52dc32325653a54a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e92e0bc80aa63c7295ced26c2a3dc0e337230798e9cdb5bc77ca65666124c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e92e0bc80aa63c7295ced26c2a3dc0e337230798e9cdb5bc77ca65666124c7c->enter($__internal_4e92e0bc80aa63c7295ced26c2a3dc0e337230798e9cdb5bc77ca65666124c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_522a7b08b9aa0b8879e00793005db1609bae1083e609944f348930723bb1aaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522a7b08b9aa0b8879e00793005db1609bae1083e609944f348930723bb1aaf8->enter($__internal_522a7b08b9aa0b8879e00793005db1609bae1083e609944f348930723bb1aaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PostBundle:Post:index";
        
        $__internal_522a7b08b9aa0b8879e00793005db1609bae1083e609944f348930723bb1aaf8->leave($__internal_522a7b08b9aa0b8879e00793005db1609bae1083e609944f348930723bb1aaf8_prof);

        
        $__internal_4e92e0bc80aa63c7295ced26c2a3dc0e337230798e9cdb5bc77ca65666124c7c->leave($__internal_4e92e0bc80aa63c7295ced26c2a3dc0e337230798e9cdb5bc77ca65666124c7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dba4cf13c569beaf0f2b9ad34fff5bdafa8a3f55f38fa7da5c0fadd6054bb9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba4cf13c569beaf0f2b9ad34fff5bdafa8a3f55f38fa7da5c0fadd6054bb9a7->enter($__internal_dba4cf13c569beaf0f2b9ad34fff5bdafa8a3f55f38fa7da5c0fadd6054bb9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92b477ddde9cd407e6ba35286a6eed35fc5794f67eac9ae9996d783c09d08a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b477ddde9cd407e6ba35286a6eed35fc5794f67eac9ae9996d783c09d08a20->enter($__internal_92b477ddde9cd407e6ba35286a6eed35fc5794f67eac9ae9996d783c09d08a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>le contenu</h1>\t

   <div align=\"right\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post-create");
        echo "\" class=\"btn btn-primary\">Add</a></div>
    
     <ul class=\"list-group\">
     \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "     \t  <li class=\"list-group-item\">
     \t  \t<h2>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
     \t  \t<p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
           
           <div align=\"right\">
           \t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post-show", array("id" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Show</a>
     \t  \t<a href=\"\" class=\"btn btn-warning\">Edit</a>
     \t  \t<a href=\"\" class=\"btn btn-danger\">Detete</a>
           </div>
     \t  \t
     \t  </li>
     \t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "     </ul>

";
        
        $__internal_92b477ddde9cd407e6ba35286a6eed35fc5794f67eac9ae9996d783c09d08a20->leave($__internal_92b477ddde9cd407e6ba35286a6eed35fc5794f67eac9ae9996d783c09d08a20_prof);

        
        $__internal_dba4cf13c569beaf0f2b9ad34fff5bdafa8a3f55f38fa7da5c0fadd6054bb9a7->leave($__internal_dba4cf13c569beaf0f2b9ad34fff5bdafa8a3f55f38fa7da5c0fadd6054bb9a7_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 25,  109 => 18,  103 => 15,  99 => 14,  96 => 13,  79 => 12,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PostBundle::base.html.twig\" %}

{% block title %}PostBundle:Post:index{% endblock %}

{% block body %}

<h1>le contenu</h1>\t

   <div align=\"right\"><a href=\"{{ path('post-create') }}\" class=\"btn btn-primary\">Add</a></div>
    
     <ul class=\"list-group\">
     \t{% for post in posts %}
     \t  <li class=\"list-group-item\">
     \t  \t<h2>{{ post.title }}</h2>
     \t  \t<p>{{ post.content }}</p>
           
           <div align=\"right\">
           \t<a href=\"{{ path('post-show', {'id': loop.index0}) }}\" class=\"btn btn-default\">Show</a>
     \t  \t<a href=\"\" class=\"btn btn-warning\">Edit</a>
     \t  \t<a href=\"\" class=\"btn btn-danger\">Detete</a>
           </div>
     \t  \t
     \t  </li>
     \t{% endfor %}
     </ul>

{% endblock %}
", "PostBundle:Post:index.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Post/index.html.twig");
    }
}
