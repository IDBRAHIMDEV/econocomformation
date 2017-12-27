<?php

/* PostBundle:Post:show.html.twig */
class __TwigTemplate_cfc63260a9c47aaee325a772e7f6345511d21a22c1d5e70a0e9857d0a0f93eb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "PostBundle:Post:show.html.twig", 1);
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
        $__internal_5dc28151f0147eaabc38cd91607559db707abcf56b643c7e81af415255ba5f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc28151f0147eaabc38cd91607559db707abcf56b643c7e81af415255ba5f61->enter($__internal_5dc28151f0147eaabc38cd91607559db707abcf56b643c7e81af415255ba5f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Post:show.html.twig"));

        $__internal_7bbea93563dddeedb0781e20f6bd82dd6e6f7274ac59ab9cfdd87258de0df376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbea93563dddeedb0781e20f6bd82dd6e6f7274ac59ab9cfdd87258de0df376->enter($__internal_7bbea93563dddeedb0781e20f6bd82dd6e6f7274ac59ab9cfdd87258de0df376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dc28151f0147eaabc38cd91607559db707abcf56b643c7e81af415255ba5f61->leave($__internal_5dc28151f0147eaabc38cd91607559db707abcf56b643c7e81af415255ba5f61_prof);

        
        $__internal_7bbea93563dddeedb0781e20f6bd82dd6e6f7274ac59ab9cfdd87258de0df376->leave($__internal_7bbea93563dddeedb0781e20f6bd82dd6e6f7274ac59ab9cfdd87258de0df376_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ca3c85c9faa2e0460357115e493e23b0e4985201b15c9d4bfc9c7fada41ff1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca3c85c9faa2e0460357115e493e23b0e4985201b15c9d4bfc9c7fada41ff1a->enter($__internal_1ca3c85c9faa2e0460357115e493e23b0e4985201b15c9d4bfc9c7fada41ff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e3fc457613ecd0bad1dd8244b867ced2355697524ddfe39277aa1753c76c1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3fc457613ecd0bad1dd8244b867ced2355697524ddfe39277aa1753c76c1ff->enter($__internal_0e3fc457613ecd0bad1dd8244b867ced2355697524ddfe39277aa1753c76c1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PostBundle:Post:index";
        
        $__internal_0e3fc457613ecd0bad1dd8244b867ced2355697524ddfe39277aa1753c76c1ff->leave($__internal_0e3fc457613ecd0bad1dd8244b867ced2355697524ddfe39277aa1753c76c1ff_prof);

        
        $__internal_1ca3c85c9faa2e0460357115e493e23b0e4985201b15c9d4bfc9c7fada41ff1a->leave($__internal_1ca3c85c9faa2e0460357115e493e23b0e4985201b15c9d4bfc9c7fada41ff1a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c6ca2de82ae5f021293c02124bb304072a9952acb361e780acc00e59f33d090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6ca2de82ae5f021293c02124bb304072a9952acb361e780acc00e59f33d090->enter($__internal_6c6ca2de82ae5f021293c02124bb304072a9952acb361e780acc00e59f33d090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c012b0b1dbae90a6caa407f30f15780b5a6eb047deec3dcd9f7b1ae7921ffeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c012b0b1dbae90a6caa407f30f15780b5a6eb047deec3dcd9f7b1ae7921ffeed->enter($__internal_c012b0b1dbae90a6caa407f30f15780b5a6eb047deec3dcd9f7b1ae7921ffeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>le show</h1>\t\t
    

";
        
        $__internal_c012b0b1dbae90a6caa407f30f15780b5a6eb047deec3dcd9f7b1ae7921ffeed->leave($__internal_c012b0b1dbae90a6caa407f30f15780b5a6eb047deec3dcd9f7b1ae7921ffeed_prof);

        
        $__internal_6c6ca2de82ae5f021293c02124bb304072a9952acb361e780acc00e59f33d090->leave($__internal_6c6ca2de82ae5f021293c02124bb304072a9952acb361e780acc00e59f33d090_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<h1>le show</h1>\t\t
    

{% endblock %}
", "PostBundle:Post:show.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Post/show.html.twig");
    }
}
