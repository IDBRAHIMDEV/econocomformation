<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_edf58e9eebc3ee350bde014d0a827730b4c2501c79baa078d306516d85b70674 extends Twig_Template
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
        $__internal_87e79a2457a5688f7da35f26d64292a3e91e63d33d093af93bb1cbb931c2c637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e79a2457a5688f7da35f26d64292a3e91e63d33d093af93bb1cbb931c2c637->enter($__internal_87e79a2457a5688f7da35f26d64292a3e91e63d33d093af93bb1cbb931c2c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7202a782ab5de4bf597371264d70b5000d42941c35f9bd294016d6d659700c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7202a782ab5de4bf597371264d70b5000d42941c35f9bd294016d6d659700c9a->enter($__internal_7202a782ab5de4bf597371264d70b5000d42941c35f9bd294016d6d659700c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_87e79a2457a5688f7da35f26d64292a3e91e63d33d093af93bb1cbb931c2c637->leave($__internal_87e79a2457a5688f7da35f26d64292a3e91e63d33d093af93bb1cbb931c2c637_prof);

        
        $__internal_7202a782ab5de4bf597371264d70b5000d42941c35f9bd294016d6d659700c9a->leave($__internal_7202a782ab5de4bf597371264d70b5000d42941c35f9bd294016d6d659700c9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
