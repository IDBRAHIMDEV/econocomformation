<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ff56953a1bff752fc41ac8b583b175b137465b71371b253b938942745c1f0c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_283c4f3ade359d48e0bfe4f79e52b9a006837fe736ae66d9310582ab9e73a77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283c4f3ade359d48e0bfe4f79e52b9a006837fe736ae66d9310582ab9e73a77a->enter($__internal_283c4f3ade359d48e0bfe4f79e52b9a006837fe736ae66d9310582ab9e73a77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d884615d4f25e323c1921453e96951ee5ca5b6e95e1d57e274eabdae2a45cfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d884615d4f25e323c1921453e96951ee5ca5b6e95e1d57e274eabdae2a45cfa5->enter($__internal_d884615d4f25e323c1921453e96951ee5ca5b6e95e1d57e274eabdae2a45cfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283c4f3ade359d48e0bfe4f79e52b9a006837fe736ae66d9310582ab9e73a77a->leave($__internal_283c4f3ade359d48e0bfe4f79e52b9a006837fe736ae66d9310582ab9e73a77a_prof);

        
        $__internal_d884615d4f25e323c1921453e96951ee5ca5b6e95e1d57e274eabdae2a45cfa5->leave($__internal_d884615d4f25e323c1921453e96951ee5ca5b6e95e1d57e274eabdae2a45cfa5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bea96399766b2fcb6d7e5f98eb56b64511cbdeb7d340cdb20d65e7c18ee266a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea96399766b2fcb6d7e5f98eb56b64511cbdeb7d340cdb20d65e7c18ee266a2->enter($__internal_bea96399766b2fcb6d7e5f98eb56b64511cbdeb7d340cdb20d65e7c18ee266a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98d6ca7369fbaa95e8300eeb8cc0b2a997cb242c3418449776fc65b87eeeb835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d6ca7369fbaa95e8300eeb8cc0b2a997cb242c3418449776fc65b87eeeb835->enter($__internal_98d6ca7369fbaa95e8300eeb8cc0b2a997cb242c3418449776fc65b87eeeb835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_98d6ca7369fbaa95e8300eeb8cc0b2a997cb242c3418449776fc65b87eeeb835->leave($__internal_98d6ca7369fbaa95e8300eeb8cc0b2a997cb242c3418449776fc65b87eeeb835_prof);

        
        $__internal_bea96399766b2fcb6d7e5f98eb56b64511cbdeb7d340cdb20d65e7c18ee266a2->leave($__internal_bea96399766b2fcb6d7e5f98eb56b64511cbdeb7d340cdb20d65e7c18ee266a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
