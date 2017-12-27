<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_8e3ec9b4855ffd5c7a52c5a7c578d283896ab36df9764c55c6501d798818eb89 extends Twig_Template
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
        $__internal_5f946da33d1a3d08c3d313009cd555da6b94584059bdc9950dd5f8745ba11042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f946da33d1a3d08c3d313009cd555da6b94584059bdc9950dd5f8745ba11042->enter($__internal_5f946da33d1a3d08c3d313009cd555da6b94584059bdc9950dd5f8745ba11042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c550405af826335d6fec77287714a8388e95e0f7a127fde2139b3e442f601097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c550405af826335d6fec77287714a8388e95e0f7a127fde2139b3e442f601097->enter($__internal_c550405af826335d6fec77287714a8388e95e0f7a127fde2139b3e442f601097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5f946da33d1a3d08c3d313009cd555da6b94584059bdc9950dd5f8745ba11042->leave($__internal_5f946da33d1a3d08c3d313009cd555da6b94584059bdc9950dd5f8745ba11042_prof);

        
        $__internal_c550405af826335d6fec77287714a8388e95e0f7a127fde2139b3e442f601097->leave($__internal_c550405af826335d6fec77287714a8388e95e0f7a127fde2139b3e442f601097_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
