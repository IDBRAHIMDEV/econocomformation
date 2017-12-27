<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_becee07805f88215adbcce699f266c3ca2d45355762a1dc7101f30680e4dba9a extends Twig_Template
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
        $__internal_95790e0266e24a78e2ff645e0465f2badfdcdb233e5808714809dc90e546c730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95790e0266e24a78e2ff645e0465f2badfdcdb233e5808714809dc90e546c730->enter($__internal_95790e0266e24a78e2ff645e0465f2badfdcdb233e5808714809dc90e546c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9ca085fc90df45545a16c98faab415099b926a403462dd09da7d712c1494c3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca085fc90df45545a16c98faab415099b926a403462dd09da7d712c1494c3ad->enter($__internal_9ca085fc90df45545a16c98faab415099b926a403462dd09da7d712c1494c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_95790e0266e24a78e2ff645e0465f2badfdcdb233e5808714809dc90e546c730->leave($__internal_95790e0266e24a78e2ff645e0465f2badfdcdb233e5808714809dc90e546c730_prof);

        
        $__internal_9ca085fc90df45545a16c98faab415099b926a403462dd09da7d712c1494c3ad->leave($__internal_9ca085fc90df45545a16c98faab415099b926a403462dd09da7d712c1494c3ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
