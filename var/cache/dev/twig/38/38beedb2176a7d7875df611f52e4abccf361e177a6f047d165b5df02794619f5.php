<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4e01af8ce8baf523efd5a8898ea2d69e264b4291a85d43acd3eb2ccb02c28d2e extends Twig_Template
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
        $__internal_f87a9ba1d1e7cd5056193e2eb751e5ce22e178f85abd02a32f704e549f64488b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87a9ba1d1e7cd5056193e2eb751e5ce22e178f85abd02a32f704e549f64488b->enter($__internal_f87a9ba1d1e7cd5056193e2eb751e5ce22e178f85abd02a32f704e549f64488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7dc611dab595e5c622fb2c5c124b1e084d2c0811744389825574e237468e8d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc611dab595e5c622fb2c5c124b1e084d2c0811744389825574e237468e8d16->enter($__internal_7dc611dab595e5c622fb2c5c124b1e084d2c0811744389825574e237468e8d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f87a9ba1d1e7cd5056193e2eb751e5ce22e178f85abd02a32f704e549f64488b->leave($__internal_f87a9ba1d1e7cd5056193e2eb751e5ce22e178f85abd02a32f704e549f64488b_prof);

        
        $__internal_7dc611dab595e5c622fb2c5c124b1e084d2c0811744389825574e237468e8d16->leave($__internal_7dc611dab595e5c622fb2c5c124b1e084d2c0811744389825574e237468e8d16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
