<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_20b3e78f9ba7ee2537c9bcb6e8979af69dccc81268833ffa6d12d4fde6758868 extends Twig_Template
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
        $__internal_803700add85d626d33bddb0933fb9fed9c3b5a22b2a25772d5c5609fd3fc41de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803700add85d626d33bddb0933fb9fed9c3b5a22b2a25772d5c5609fd3fc41de->enter($__internal_803700add85d626d33bddb0933fb9fed9c3b5a22b2a25772d5c5609fd3fc41de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a562b0b3bc28f64b2cf90fd780e785272bec4ed03c81baa17dd94df855ff99a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a562b0b3bc28f64b2cf90fd780e785272bec4ed03c81baa17dd94df855ff99a6->enter($__internal_a562b0b3bc28f64b2cf90fd780e785272bec4ed03c81baa17dd94df855ff99a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_803700add85d626d33bddb0933fb9fed9c3b5a22b2a25772d5c5609fd3fc41de->leave($__internal_803700add85d626d33bddb0933fb9fed9c3b5a22b2a25772d5c5609fd3fc41de_prof);

        
        $__internal_a562b0b3bc28f64b2cf90fd780e785272bec4ed03c81baa17dd94df855ff99a6->leave($__internal_a562b0b3bc28f64b2cf90fd780e785272bec4ed03c81baa17dd94df855ff99a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
