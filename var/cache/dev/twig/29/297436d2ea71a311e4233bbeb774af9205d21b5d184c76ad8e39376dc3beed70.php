<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d2fb6d43772f1ccfaa1d2a53f822e25a293fb346b9844a31875a1dc9c10173f3 extends Twig_Template
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
        $__internal_35819bce6852caaf463366acdd65fc4cbc6118479420dec328a5309cfe71c7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35819bce6852caaf463366acdd65fc4cbc6118479420dec328a5309cfe71c7b3->enter($__internal_35819bce6852caaf463366acdd65fc4cbc6118479420dec328a5309cfe71c7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1582219b7c597ce54566b183736821d7c69f22e3c63872eba376ea2cc43e9520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1582219b7c597ce54566b183736821d7c69f22e3c63872eba376ea2cc43e9520->enter($__internal_1582219b7c597ce54566b183736821d7c69f22e3c63872eba376ea2cc43e9520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_35819bce6852caaf463366acdd65fc4cbc6118479420dec328a5309cfe71c7b3->leave($__internal_35819bce6852caaf463366acdd65fc4cbc6118479420dec328a5309cfe71c7b3_prof);

        
        $__internal_1582219b7c597ce54566b183736821d7c69f22e3c63872eba376ea2cc43e9520->leave($__internal_1582219b7c597ce54566b183736821d7c69f22e3c63872eba376ea2cc43e9520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
