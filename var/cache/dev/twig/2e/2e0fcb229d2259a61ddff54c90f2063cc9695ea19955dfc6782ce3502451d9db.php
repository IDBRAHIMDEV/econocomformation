<?php

/* PostBundle:Post:create.html.twig */
class __TwigTemplate_a06d802e918622568b2d7a5a29364e44050ccc3ac5d788d7cefb0b98b9f39f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PostBundle::base.html.twig", "PostBundle:Post:create.html.twig", 1);
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
        $__internal_bab7ea48bd718a855f28dd64e425b71931febb496d9a2f9d67ac53a6a07b9d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab7ea48bd718a855f28dd64e425b71931febb496d9a2f9d67ac53a6a07b9d54->enter($__internal_bab7ea48bd718a855f28dd64e425b71931febb496d9a2f9d67ac53a6a07b9d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Post:create.html.twig"));

        $__internal_f9ed97a2d7ad6c3d7371dc01896651e2d754387e05083ecdb7ad25e36e9f3f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ed97a2d7ad6c3d7371dc01896651e2d754387e05083ecdb7ad25e36e9f3f72->enter($__internal_f9ed97a2d7ad6c3d7371dc01896651e2d754387e05083ecdb7ad25e36e9f3f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostBundle:Post:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bab7ea48bd718a855f28dd64e425b71931febb496d9a2f9d67ac53a6a07b9d54->leave($__internal_bab7ea48bd718a855f28dd64e425b71931febb496d9a2f9d67ac53a6a07b9d54_prof);

        
        $__internal_f9ed97a2d7ad6c3d7371dc01896651e2d754387e05083ecdb7ad25e36e9f3f72->leave($__internal_f9ed97a2d7ad6c3d7371dc01896651e2d754387e05083ecdb7ad25e36e9f3f72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_103faa32d901547fa8f36b64df1a3782fe77b0ea5dc575e88166d577b8560612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103faa32d901547fa8f36b64df1a3782fe77b0ea5dc575e88166d577b8560612->enter($__internal_103faa32d901547fa8f36b64df1a3782fe77b0ea5dc575e88166d577b8560612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66e4ca5c5c8782f4fd2b9ec3d83566809fc84808d51a72d47ec107b00c3e6acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e4ca5c5c8782f4fd2b9ec3d83566809fc84808d51a72d47ec107b00c3e6acd->enter($__internal_66e4ca5c5c8782f4fd2b9ec3d83566809fc84808d51a72d47ec107b00c3e6acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PostBundle:Post:index";
        
        $__internal_66e4ca5c5c8782f4fd2b9ec3d83566809fc84808d51a72d47ec107b00c3e6acd->leave($__internal_66e4ca5c5c8782f4fd2b9ec3d83566809fc84808d51a72d47ec107b00c3e6acd_prof);

        
        $__internal_103faa32d901547fa8f36b64df1a3782fe77b0ea5dc575e88166d577b8560612->leave($__internal_103faa32d901547fa8f36b64df1a3782fe77b0ea5dc575e88166d577b8560612_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be667bdff28f357a52719d1990d6d6c01db6810aa8e500b258c51ca3e707676e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be667bdff28f357a52719d1990d6d6c01db6810aa8e500b258c51ca3e707676e->enter($__internal_be667bdff28f357a52719d1990d6d6c01db6810aa8e500b258c51ca3e707676e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce740ddb00221e7744f2c3f717bc7b027040b9cc2a20db62e22b41a8a8bc960e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce740ddb00221e7744f2c3f717bc7b027040b9cc2a20db62e22b41a8a8bc960e->enter($__internal_ce740ddb00221e7744f2c3f717bc7b027040b9cc2a20db62e22b41a8a8bc960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Nouveau post</h1>\t

  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulaire"] ?? $this->getContext($context, "formulaire")), 'form_start');
        echo "

      <div class=\"row\">
         <div class=\"col-md-8 col-md-offset-2\">
           <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "category", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "category", array()), 'errors');
        echo "
          </div>
            <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "title", array()), 'label');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "title", array()), 'errors');
        echo "
          </div>
          <div class=\"form-group\">
           ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "content", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"form-group\">
           ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "datepublication", array()), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "datepublication", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
           
           <hr>
            <div class=\"form-group\">
              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "image", array()), "alt", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Merci de mettre une description d image")));
        echo "
            </div>

             <div class=\"form-group\">
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "image", array()), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
           <hr>

          <div class=\"checkbox\">
            <label for=\"\">
              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "active", array()), 'widget');
        echo "
               active
            </label>
            
          </div>

          <div class=\"form-group\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "add", array()), 'row', array("attr" => array("class" => "btn btn-success btn-block")));
        echo "
          </div>
         </div>
         
        </div>  

  ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formulaire"] ?? $this->getContext($context, "formulaire")), 'form_end');
        echo "
";
        
        $__internal_ce740ddb00221e7744f2c3f717bc7b027040b9cc2a20db62e22b41a8a8bc960e->leave($__internal_ce740ddb00221e7744f2c3f717bc7b027040b9cc2a20db62e22b41a8a8bc960e_prof);

        
        $__internal_be667bdff28f357a52719d1990d6d6c01db6810aa8e500b258c51ca3e707676e->leave($__internal_be667bdff28f357a52719d1990d6d6c01db6810aa8e500b258c51ca3e707676e_prof);

    }

    public function getTemplateName()
    {
        return "PostBundle:Post:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 57,  157 => 51,  147 => 44,  138 => 38,  131 => 34,  123 => 29,  119 => 28,  113 => 25,  109 => 24,  103 => 21,  99 => 20,  95 => 19,  89 => 16,  85 => 15,  81 => 14,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<h1>Nouveau post</h1>\t

  {{ form_start(formulaire) }}

      <div class=\"row\">
         <div class=\"col-md-8 col-md-offset-2\">
           <div class=\"form-group\">
            {{ form_label(formulaire.category) }}
            {{ form_widget(formulaire.category, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(formulaire.category) }}
          </div>
            <div class=\"form-group\">
            {{ form_label(formulaire.title) }}
            {{ form_widget(formulaire.title, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(formulaire.title) }}
          </div>
          <div class=\"form-group\">
           {{ form_label(formulaire.content) }}
            {{ form_widget(formulaire.content, {'attr': {'class': 'form-control'}}) }}
          </div>
          <div class=\"form-group\">
           {{ form_label(formulaire.datepublication) }}
            {{ form_widget(formulaire.datepublication, {'attr': {'class': 'form-control'}}) }}
          </div>
           
           <hr>
            <div class=\"form-group\">
              {{ form_row(formulaire.image.alt, {'attr': {'class': 'form-control', 'placeholder': 'Merci de mettre une description d image'}}) }}
            </div>

             <div class=\"form-group\">
              {{ form_row(formulaire.image.url, {'attr': {'class': 'form-control'}}) }}
            </div>
           <hr>

          <div class=\"checkbox\">
            <label for=\"\">
              {{ form_widget(formulaire.active) }}
               active
            </label>
            
          </div>

          <div class=\"form-group\">
            {{ form_row(formulaire.add, {'attr': {'class': 'btn btn-success btn-block'}}) }}
          </div>
         </div>
         
        </div>  

  {{ form_end(formulaire) }}
{% endblock %}
", "PostBundle:Post:create.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\PostBundle/Resources/views/Post/create.html.twig");
    }
}
