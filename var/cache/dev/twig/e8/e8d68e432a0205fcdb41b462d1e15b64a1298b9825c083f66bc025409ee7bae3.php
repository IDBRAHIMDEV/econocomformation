<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0e0ad0790714d312cff30338aa99469f696fc487b368dd78decbb02b75d6de80 extends Twig_Template
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
        $__internal_8e35e6c34a80ad2505803cc1d082f6798f35a08dbd0f3710a21d40b09516b7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e35e6c34a80ad2505803cc1d082f6798f35a08dbd0f3710a21d40b09516b7bd->enter($__internal_8e35e6c34a80ad2505803cc1d082f6798f35a08dbd0f3710a21d40b09516b7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1bf0bfde62c909fb0bf746c4617b5383de5e47407231ee27e8a5ec7a21332fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf0bfde62c909fb0bf746c4617b5383de5e47407231ee27e8a5ec7a21332fee->enter($__internal_1bf0bfde62c909fb0bf746c4617b5383de5e47407231ee27e8a5ec7a21332fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8e35e6c34a80ad2505803cc1d082f6798f35a08dbd0f3710a21d40b09516b7bd->leave($__internal_8e35e6c34a80ad2505803cc1d082f6798f35a08dbd0f3710a21d40b09516b7bd_prof);

        
        $__internal_1bf0bfde62c909fb0bf746c4617b5383de5e47407231ee27e8a5ec7a21332fee->leave($__internal_1bf0bfde62c909fb0bf746c4617b5383de5e47407231ee27e8a5ec7a21332fee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
