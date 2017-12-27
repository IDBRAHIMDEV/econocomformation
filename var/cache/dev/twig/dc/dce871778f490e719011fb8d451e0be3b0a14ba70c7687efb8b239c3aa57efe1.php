<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8d916e35dbfeb62bffe2fd925abd67f884e254f4cce2c5f22f79847f139b56ee extends Twig_Template
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
        $__internal_e441b6ebf2c98210bb9d1a7fa2fe379d53044df1b383de44401d2bb1fe0f1dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e441b6ebf2c98210bb9d1a7fa2fe379d53044df1b383de44401d2bb1fe0f1dd6->enter($__internal_e441b6ebf2c98210bb9d1a7fa2fe379d53044df1b383de44401d2bb1fe0f1dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a88ece8e6c94379ec1c7a4da53a89f4c47e64669ae44408b4a8f128ae83b0d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88ece8e6c94379ec1c7a4da53a89f4c47e64669ae44408b4a8f128ae83b0d6b->enter($__internal_a88ece8e6c94379ec1c7a4da53a89f4c47e64669ae44408b4a8f128ae83b0d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e441b6ebf2c98210bb9d1a7fa2fe379d53044df1b383de44401d2bb1fe0f1dd6->leave($__internal_e441b6ebf2c98210bb9d1a7fa2fe379d53044df1b383de44401d2bb1fe0f1dd6_prof);

        
        $__internal_a88ece8e6c94379ec1c7a4da53a89f4c47e64669ae44408b4a8f128ae83b0d6b->leave($__internal_a88ece8e6c94379ec1c7a4da53a89f4c47e64669ae44408b4a8f128ae83b0d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
