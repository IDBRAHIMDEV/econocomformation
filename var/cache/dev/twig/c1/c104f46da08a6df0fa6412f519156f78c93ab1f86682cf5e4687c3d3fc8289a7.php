<?php

/* default/contact.html.twig */
class __TwigTemplate_b4dcbb5b33b86c5664aa087eaae6051a5f2b97d3922b54504c24aaf05fcda4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5252d43d119d12959e141327594df9c90e23789e41235c6ee324c55ea3fc5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5252d43d119d12959e141327594df9c90e23789e41235c6ee324c55ea3fc5c1->enter($__internal_a5252d43d119d12959e141327594df9c90e23789e41235c6ee324c55ea3fc5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_b2f104a4dfc66afd2287043119d270cfe8463785df04c2f1aa82315be5174cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f104a4dfc66afd2287043119d270cfe8463785df04c2f1aa82315be5174cb2->enter($__internal_b2f104a4dfc66afd2287043119d270cfe8463785df04c2f1aa82315be5174cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5252d43d119d12959e141327594df9c90e23789e41235c6ee324c55ea3fc5c1->leave($__internal_a5252d43d119d12959e141327594df9c90e23789e41235c6ee324c55ea3fc5c1_prof);

        
        $__internal_b2f104a4dfc66afd2287043119d270cfe8463785df04c2f1aa82315be5174cb2->leave($__internal_b2f104a4dfc66afd2287043119d270cfe8463785df04c2f1aa82315be5174cb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91f38adffa83cd42bb1cbf0a47995a8b30b5682a25b7781fcb15600e73c2289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91f38adffa83cd42bb1cbf0a47995a8b30b5682a25b7781fcb15600e73c2289->enter($__internal_c91f38adffa83cd42bb1cbf0a47995a8b30b5682a25b7781fcb15600e73c2289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46dfcfbd3369e017611e500d4c737456b33762c8fc3e2e02f4e8840dc9cee274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dfcfbd3369e017611e500d4c737456b33762c8fc3e2e02f4e8840dc9cee274->enter($__internal_46dfcfbd3369e017611e500d4c737456b33762c8fc3e2e02f4e8840dc9cee274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

contact page

<section class=\"hero is-primary is-bold\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <h1 class=\"title\">
        Contactez nous
      </h1>
      <h2 class=\"subtitle\">
        Merci de laisser votre message
      </h2>
    </div>
  </div>
</section>

<br> <br>

   <div class='container'>
       <div class='columns'>
            <div class='column is-offset-one-quarter is-half'>
            
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"field\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), 'label', array("label_attr" => array("class" => "label")));
        echo "
                    <div class=\"control\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "from", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
                    </div>
                </div>
          
                 <div class=\"field\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'label', array("label_attr" => array("class" => "label")));
        echo "
                    <div class=\"control\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
                    </div>
                </div>

                 <div class=\"field\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'label', array("label_attr" => array("class" => "label")));
        echo "
                    <div class=\"control\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'widget', array("attr" => array("class" => "input", "rows" => 5)));
        echo "
                    </div>
                </div>


                <div class=\"field\">
                    <div class=\"control\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "send", array()), 'row', array("attr" => array("class" => "button is-success")));
        echo "
                    </div>
                </div>

             ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
       </div>
   </div>

  <br> <br>

";
        
        $__internal_46dfcfbd3369e017611e500d4c737456b33762c8fc3e2e02f4e8840dc9cee274->leave($__internal_46dfcfbd3369e017611e500d4c737456b33762c8fc3e2e02f4e8840dc9cee274_prof);

        
        $__internal_c91f38adffa83cd42bb1cbf0a47995a8b30b5682a25b7781fcb15600e73c2289->leave($__internal_c91f38adffa83cd42bb1cbf0a47995a8b30b5682a25b7781fcb15600e73c2289_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  121 => 53,  111 => 46,  106 => 44,  98 => 39,  93 => 37,  85 => 32,  80 => 30,  74 => 27,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


contact page

<section class=\"hero is-primary is-bold\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <h1 class=\"title\">
        Contactez nous
      </h1>
      <h2 class=\"subtitle\">
        Merci de laisser votre message
      </h2>
    </div>
  </div>
</section>

<br> <br>

   <div class='container'>
       <div class='columns'>
            <div class='column is-offset-one-quarter is-half'>
            
            {{ form_start(form) }}

                <div class=\"field\">
                    {{ form_label(form.from, null, {'label_attr': {'class': 'label'}}) }}
                    <div class=\"control\">
                        {{ form_widget(form.from, {'attr': {'class': 'input'}}) }}
                    </div>
                </div>
          
                 <div class=\"field\">
                    {{ form_label(form.subject, null, {'label_attr': {'class': 'label'}}) }}
                    <div class=\"control\">
                        {{ form_widget(form.subject, {'attr': {'class': 'input'}}) }}
                    </div>
                </div>

                 <div class=\"field\">
                    {{ form_label(form.body, null, {'label_attr': {'class': 'label'}}) }}
                    <div class=\"control\">
                        {{ form_widget(form.body, {'attr': {'class': 'input', 'rows': 5}}) }}
                    </div>
                </div>


                <div class=\"field\">
                    <div class=\"control\">
                        {{ form_row(form.send, {'attr': {'class': 'button is-success'}}) }}
                    </div>
                </div>

             {{ form_end(form) }}

            </div>
       </div>
   </div>

  <br> <br>

{% endblock %}", "default/contact.html.twig", "C:\\xampp\\htdocs\\projett1\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
