<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_34da8767fa2c8c476073b806318ee4bb40dc965e9f965e49d7b7a318049f74cd extends Twig_Template
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
        $__internal_c71bf2b82abf4925c3138385b3095ad9fe518f5d3f0bbcb0dd71879bf5f52537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71bf2b82abf4925c3138385b3095ad9fe518f5d3f0bbcb0dd71879bf5f52537->enter($__internal_c71bf2b82abf4925c3138385b3095ad9fe518f5d3f0bbcb0dd71879bf5f52537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_dee66ef8470bbc3be919d797079b1467144c0396aeb2f4466ab90ef878113131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee66ef8470bbc3be919d797079b1467144c0396aeb2f4466ab90ef878113131->enter($__internal_dee66ef8470bbc3be919d797079b1467144c0396aeb2f4466ab90ef878113131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c71bf2b82abf4925c3138385b3095ad9fe518f5d3f0bbcb0dd71879bf5f52537->leave($__internal_c71bf2b82abf4925c3138385b3095ad9fe518f5d3f0bbcb0dd71879bf5f52537_prof);

        
        $__internal_dee66ef8470bbc3be919d797079b1467144c0396aeb2f4466ab90ef878113131->leave($__internal_dee66ef8470bbc3be919d797079b1467144c0396aeb2f4466ab90ef878113131_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
