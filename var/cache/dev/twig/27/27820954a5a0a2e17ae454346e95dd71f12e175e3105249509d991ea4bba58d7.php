<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_38200d3abb114a03932fc98ec8defbe19cd8ef067be01b80fd4acdc4a319f006 extends Twig_Template
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
        $__internal_1a7b905a7fb42cd97d8826269f439fab1c5a41415709170439751d5fd7a34c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7b905a7fb42cd97d8826269f439fab1c5a41415709170439751d5fd7a34c83->enter($__internal_1a7b905a7fb42cd97d8826269f439fab1c5a41415709170439751d5fd7a34c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d48799f7e21fffb546cf369e0a2c904212c34c816efc60922a8f79eabbf57402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48799f7e21fffb546cf369e0a2c904212c34c816efc60922a8f79eabbf57402->enter($__internal_d48799f7e21fffb546cf369e0a2c904212c34c816efc60922a8f79eabbf57402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1a7b905a7fb42cd97d8826269f439fab1c5a41415709170439751d5fd7a34c83->leave($__internal_1a7b905a7fb42cd97d8826269f439fab1c5a41415709170439751d5fd7a34c83_prof);

        
        $__internal_d48799f7e21fffb546cf369e0a2c904212c34c816efc60922a8f79eabbf57402->leave($__internal_d48799f7e21fffb546cf369e0a2c904212c34c816efc60922a8f79eabbf57402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
