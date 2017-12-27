<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b30c823462b383e5de0b753849d8c65af2aa25ed045ea5966984cd8a8bdb5673 extends Twig_Template
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
        $__internal_4ae6b1acde40194be495b102852d7b1dcde290f7c01f5c75dd6b2dac21958143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae6b1acde40194be495b102852d7b1dcde290f7c01f5c75dd6b2dac21958143->enter($__internal_4ae6b1acde40194be495b102852d7b1dcde290f7c01f5c75dd6b2dac21958143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f72afaf067c257bf7b8adfe9d040d17e4b78d8c6a912ba7be5de8a7f7d5b3c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72afaf067c257bf7b8adfe9d040d17e4b78d8c6a912ba7be5de8a7f7d5b3c9c->enter($__internal_f72afaf067c257bf7b8adfe9d040d17e4b78d8c6a912ba7be5de8a7f7d5b3c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4ae6b1acde40194be495b102852d7b1dcde290f7c01f5c75dd6b2dac21958143->leave($__internal_4ae6b1acde40194be495b102852d7b1dcde290f7c01f5c75dd6b2dac21958143_prof);

        
        $__internal_f72afaf067c257bf7b8adfe9d040d17e4b78d8c6a912ba7be5de8a7f7d5b3c9c->leave($__internal_f72afaf067c257bf7b8adfe9d040d17e4b78d8c6a912ba7be5de8a7f7d5b3c9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
