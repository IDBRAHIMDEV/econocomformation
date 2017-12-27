<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_79fd4dc20dac5c3d1fbecfb0258b595f3b2311e486bf28752724406086231de7 extends Twig_Template
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
        $__internal_18a614e946e64dced863f01400dd811968cfea8dd20aed59e0c0fd87f8ab7b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a614e946e64dced863f01400dd811968cfea8dd20aed59e0c0fd87f8ab7b05->enter($__internal_18a614e946e64dced863f01400dd811968cfea8dd20aed59e0c0fd87f8ab7b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6a8e6d34b23ede7451055c5504b7ed936a5f6980b994bc93b55e477a0bf97c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8e6d34b23ede7451055c5504b7ed936a5f6980b994bc93b55e477a0bf97c6a->enter($__internal_6a8e6d34b23ede7451055c5504b7ed936a5f6980b994bc93b55e477a0bf97c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_18a614e946e64dced863f01400dd811968cfea8dd20aed59e0c0fd87f8ab7b05->leave($__internal_18a614e946e64dced863f01400dd811968cfea8dd20aed59e0c0fd87f8ab7b05_prof);

        
        $__internal_6a8e6d34b23ede7451055c5504b7ed936a5f6980b994bc93b55e477a0bf97c6a->leave($__internal_6a8e6d34b23ede7451055c5504b7ed936a5f6980b994bc93b55e477a0bf97c6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
