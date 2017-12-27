<?php

/* PostBundle:Category:index.html.twig */
class __TwigTemplate_f602dd4ee3de5758ac2a7ba054a67c2fc67f8dc7726886182c9c21e4f261ccf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "PostBundle:Category:index.html.twig", 1);
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
        $__internal_24fe5810b095786a23869ffa0207e43009f1c2bdf283710664e84752942d26df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fe5810b095786a23869ffa0207e43009f1c2bdf283710664e84752942d26df->enter($__internal_24fe5810b095786a23869ffa0207e43009f1c2bdf283710664e84752942d26df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Category:index.html.twig"));

        $__internal_0585e95692ea3419ed55fbc300491cdbc7d415fb50e3e7ba815000956c988f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0585e95692ea3419ed55fbc300491cdbc7d415fb50e3e7ba815000956c988f5e->enter($__internal_0585e95692ea3419ed55fbc300491cdbc7d415fb50e3e7ba815000956c988f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fe5810b095786a23869ffa0207e43009f1c2bdf283710664e84752942d26df->leave($__internal_24fe5810b095786a23869ffa0207e43009f1c2bdf283710664e84752942d26df_prof);

        
        $__internal_0585e95692ea3419ed55fbc300491cdbc7d415fb50e3e7ba815000956c988f5e->leave($__internal_0585e95692ea3419ed55fbc300491cdbc7d415fb50e3e7ba815000956c988f5e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41bcf0564ae85d39fbf4bc7a2c7741b668df8adb4fa62b783ae9b704efc8fb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bcf0564ae85d39fbf4bc7a2c7741b668df8adb4fa62b783ae9b704efc8fb66->enter($__internal_41bcf0564ae85d39fbf4bc7a2c7741b668df8adb4fa62b783ae9b704efc8fb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97f1b2a340fe094cd1421fa543ac5bc7e4e10084d6a2a5c00144889af339f939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f1b2a340fe094cd1421fa543ac5bc7e4e10084d6a2a5c00144889af339f939->enter($__internal_97f1b2a340fe094cd1421fa543ac5bc7e4e10084d6a2a5c00144889af339f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
   <table class=\"table\">
   \t<thead>
   \t\t<tr>
   \t\t\t<th>Title</th>
   \t\t\t<th>Description</th>
   \t\t\t<th></th>
   \t\t</tr>
   \t</thead>
   \t<tbody>

   \t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "   \t\t<tr>
   \t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</td>
   \t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</td>
   \t\t\t<td>
   \t\t\t\t<a href=\"\" class=\"btn btn-info\">Show</a>
   \t\t\t\t<a href=\"\" class=\"btn btn-warning\">Edit</a>
   \t\t\t</td>
   \t\t</tr>
   \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "   \t</tbody>
   </table>

";
        
        $__internal_97f1b2a340fe094cd1421fa543ac5bc7e4e10084d6a2a5c00144889af339f939->leave($__internal_97f1b2a340fe094cd1421fa543ac5bc7e4e10084d6a2a5c00144889af339f939_prof);

        
        $__internal_41bcf0564ae85d39fbf4bc7a2c7741b668df8adb4fa62b783ae9b704efc8fb66->leave($__internal_41bcf0564ae85d39fbf4bc7a2c7741b668df8adb4fa62b783ae9b704efc8fb66_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  73 => 20,  69 => 19,  66 => 18,  62 => 17,  49 => 6,  40 => 5,  11 => 1,);
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



{% block body %}

   <table class=\"table\">
   \t<thead>
   \t\t<tr>
   \t\t\t<th>Title</th>
   \t\t\t<th>Description</th>
   \t\t\t<th></th>
   \t\t</tr>
   \t</thead>
   \t<tbody>

   \t\t{% for category in categories %}
   \t\t<tr>
   \t\t\t<td>{{ category.title }}</td>
   \t\t\t<td>{{ category.description }}</td>
   \t\t\t<td>
   \t\t\t\t<a href=\"\" class=\"btn btn-info\">Show</a>
   \t\t\t\t<a href=\"\" class=\"btn btn-warning\">Edit</a>
   \t\t\t</td>
   \t\t</tr>
   \t\t{% endfor %}
   \t</tbody>
   </table>

{% endblock %}
", "PostBundle:Category:index.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Category/index.html.twig");
    }
}
