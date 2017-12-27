<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_402f1c9b018ff08e401763608822776d824b6adecc7ad7da3973b5441ab378a7 extends Twig_Template
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
        $__internal_b4ea3fc56530aad42cee0d385f05ed24d86ac9ed9043b855f63b10f19a8c1aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ea3fc56530aad42cee0d385f05ed24d86ac9ed9043b855f63b10f19a8c1aac->enter($__internal_b4ea3fc56530aad42cee0d385f05ed24d86ac9ed9043b855f63b10f19a8c1aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9fc265c747c6bdb6961e13fb75450882896d635767f2e36b44df0bc288979a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc265c747c6bdb6961e13fb75450882896d635767f2e36b44df0bc288979a87->enter($__internal_9fc265c747c6bdb6961e13fb75450882896d635767f2e36b44df0bc288979a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b4ea3fc56530aad42cee0d385f05ed24d86ac9ed9043b855f63b10f19a8c1aac->leave($__internal_b4ea3fc56530aad42cee0d385f05ed24d86ac9ed9043b855f63b10f19a8c1aac_prof);

        
        $__internal_9fc265c747c6bdb6961e13fb75450882896d635767f2e36b44df0bc288979a87->leave($__internal_9fc265c747c6bdb6961e13fb75450882896d635767f2e36b44df0bc288979a87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
