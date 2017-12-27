<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_cf0e391ddfb9b3f718960afeba9c380f039968cbc9627c1999b7bd77f30fca45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c3f3c4e07e2237d5c0c83d52908e2dce7b27d2bce9dbc8522035281cc6deafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3f3c4e07e2237d5c0c83d52908e2dce7b27d2bce9dbc8522035281cc6deafb->enter($__internal_7c3f3c4e07e2237d5c0c83d52908e2dce7b27d2bce9dbc8522035281cc6deafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6d303d5dc63ef20f5ba0b45670c072b3c3469323c4d7952374588c34a5d77c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d303d5dc63ef20f5ba0b45670c072b3c3469323c4d7952374588c34a5d77c08->enter($__internal_6d303d5dc63ef20f5ba0b45670c072b3c3469323c4d7952374588c34a5d77c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7c3f3c4e07e2237d5c0c83d52908e2dce7b27d2bce9dbc8522035281cc6deafb->leave($__internal_7c3f3c4e07e2237d5c0c83d52908e2dce7b27d2bce9dbc8522035281cc6deafb_prof);

        
        $__internal_6d303d5dc63ef20f5ba0b45670c072b3c3469323c4d7952374588c34a5d77c08->leave($__internal_6d303d5dc63ef20f5ba0b45670c072b3c3469323c4d7952374588c34a5d77c08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
