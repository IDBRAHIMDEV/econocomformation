<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_480ba7d04fc94ef386e136e55a55f06aebe94fc5cb26400d9f83c8a7ebd9a03f extends Twig_Template
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
        $__internal_d4c9f48adbe4fc1a56dcfde83923598b7387cdb9b89f2e9192c17834b2737a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c9f48adbe4fc1a56dcfde83923598b7387cdb9b89f2e9192c17834b2737a4e->enter($__internal_d4c9f48adbe4fc1a56dcfde83923598b7387cdb9b89f2e9192c17834b2737a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_08bb4c4800fc60abeacf4f209e9077b3d5a3e5c3adc5439970c53ba3655c4bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb4c4800fc60abeacf4f209e9077b3d5a3e5c3adc5439970c53ba3655c4bd7->enter($__internal_08bb4c4800fc60abeacf4f209e9077b3d5a3e5c3adc5439970c53ba3655c4bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d4c9f48adbe4fc1a56dcfde83923598b7387cdb9b89f2e9192c17834b2737a4e->leave($__internal_d4c9f48adbe4fc1a56dcfde83923598b7387cdb9b89f2e9192c17834b2737a4e_prof);

        
        $__internal_08bb4c4800fc60abeacf4f209e9077b3d5a3e5c3adc5439970c53ba3655c4bd7->leave($__internal_08bb4c4800fc60abeacf4f209e9077b3d5a3e5c3adc5439970c53ba3655c4bd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
