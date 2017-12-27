<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2469ecb5cf3e075367343b6f22045d4dcf2577b9a0f902fada5445d8fb8ea0f9 extends Twig_Template
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
        $__internal_e6bb98e5f4575da0d6844224d3ffe6df8c09b61173bbf752e563f597c52a6177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bb98e5f4575da0d6844224d3ffe6df8c09b61173bbf752e563f597c52a6177->enter($__internal_e6bb98e5f4575da0d6844224d3ffe6df8c09b61173bbf752e563f597c52a6177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7363e1a8e9ecea248dd9b567031bb90b565675d4a4d21156ad7d49b821c4964b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7363e1a8e9ecea248dd9b567031bb90b565675d4a4d21156ad7d49b821c4964b->enter($__internal_7363e1a8e9ecea248dd9b567031bb90b565675d4a4d21156ad7d49b821c4964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e6bb98e5f4575da0d6844224d3ffe6df8c09b61173bbf752e563f597c52a6177->leave($__internal_e6bb98e5f4575da0d6844224d3ffe6df8c09b61173bbf752e563f597c52a6177_prof);

        
        $__internal_7363e1a8e9ecea248dd9b567031bb90b565675d4a4d21156ad7d49b821c4964b->leave($__internal_7363e1a8e9ecea248dd9b567031bb90b565675d4a4d21156ad7d49b821c4964b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
