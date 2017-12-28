<?php

/* PostBundle:Page:index.html.twig */
class __TwigTemplate_5785bdaefa529e329e35cc48834a48cddee07c8e11fe1ecf6cb13b082580fac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "PostBundle:Page:index.html.twig", 1);
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
        $__internal_16e58a0958cb4b189a9bc5c2194663853c2cc93ee1b88a144b8970ca99f5a132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e58a0958cb4b189a9bc5c2194663853c2cc93ee1b88a144b8970ca99f5a132->enter($__internal_16e58a0958cb4b189a9bc5c2194663853c2cc93ee1b88a144b8970ca99f5a132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Page:index.html.twig"));

        $__internal_745781d58a6ca6c0c8cef7d446a07b9e8cd56167691cad4aea417a1598840aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745781d58a6ca6c0c8cef7d446a07b9e8cd56167691cad4aea417a1598840aee->enter($__internal_745781d58a6ca6c0c8cef7d446a07b9e8cd56167691cad4aea417a1598840aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e58a0958cb4b189a9bc5c2194663853c2cc93ee1b88a144b8970ca99f5a132->leave($__internal_16e58a0958cb4b189a9bc5c2194663853c2cc93ee1b88a144b8970ca99f5a132_prof);

        
        $__internal_745781d58a6ca6c0c8cef7d446a07b9e8cd56167691cad4aea417a1598840aee->leave($__internal_745781d58a6ca6c0c8cef7d446a07b9e8cd56167691cad4aea417a1598840aee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89afacb61757d0ea3611dfab93ddd9436c722f736cce1743a3f23117ea67fbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89afacb61757d0ea3611dfab93ddd9436c722f736cce1743a3f23117ea67fbf4->enter($__internal_89afacb61757d0ea3611dfab93ddd9436c722f736cce1743a3f23117ea67fbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_289bd65ecd0270c3586d5d3253689288a0507e231eb468aae2854ab54743095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289bd65ecd0270c3586d5d3253689288a0507e231eb468aae2854ab54743095f->enter($__internal_289bd65ecd0270c3586d5d3253689288a0507e231eb468aae2854ab54743095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"row\">
      <div class=\"col-md-12\">
          <h1>Pages list</h1>
    <div align=\"right\">
    <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_new");
        echo "\">Ajouter</a>
    </div>
     
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "body", array()), "html", null, true);
            echo "</td>
                <td>
                   
                            <a class=\"btn btn-info\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">show</a>
                       
                            <a class=\"btn btn-warning\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                      
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

      </div>
  </div>
    
";
        
        $__internal_289bd65ecd0270c3586d5d3253689288a0507e231eb468aae2854ab54743095f->leave($__internal_289bd65ecd0270c3586d5d3253689288a0507e231eb468aae2854ab54743095f_prof);

        
        $__internal_89afacb61757d0ea3611dfab93ddd9436c722f736cce1743a3f23117ea67fbf4->leave($__internal_89afacb61757d0ea3611dfab93ddd9436c722f736cce1743a3f23117ea67fbf4_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  105 => 33,  100 => 31,  94 => 28,  90 => 27,  86 => 26,  80 => 25,  77 => 24,  73 => 23,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

  <div class=\"row\">
      <div class=\"col-md-12\">
          <h1>Pages list</h1>
    <div align=\"right\">
    <a class=\"btn btn-primary\" href=\"{{ path('page_new') }}\">Ajouter</a>
    </div>
     
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for page in pages %}
            <tr>
                <td><a href=\"{{ path('page_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                <td>{{ page.title }}</td>
                <td>{{ page.description }}</td>
                <td>{{ page.body }}</td>
                <td>
                   
                            <a class=\"btn btn-info\" href=\"{{ path('page_show', { 'id': page.id }) }}\">show</a>
                       
                            <a class=\"btn btn-warning\" href=\"{{ path('page_edit', { 'id': page.id }) }}\">edit</a>
                      
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

      </div>
  </div>
    
{% endblock %}
", "PostBundle:Page:index.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Page/index.html.twig");
    }
}
