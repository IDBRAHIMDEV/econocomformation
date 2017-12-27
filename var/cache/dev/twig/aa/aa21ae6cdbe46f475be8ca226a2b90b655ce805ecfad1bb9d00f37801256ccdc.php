<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_77a1fdcb3d733a62eca66f75da0ab332c7a0043cd01c9cce54e958e43fc839a9 extends Twig_Template
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
        $__internal_592ea7762f25215b1e2cd401725fa87cba3b8f5d9dacb14956a81bf012a86652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592ea7762f25215b1e2cd401725fa87cba3b8f5d9dacb14956a81bf012a86652->enter($__internal_592ea7762f25215b1e2cd401725fa87cba3b8f5d9dacb14956a81bf012a86652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_51f5d64a30faebd47e9a36459bd685f413e632ace7c48ef2ca82789010230e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f5d64a30faebd47e9a36459bd685f413e632ace7c48ef2ca82789010230e75->enter($__internal_51f5d64a30faebd47e9a36459bd685f413e632ace7c48ef2ca82789010230e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_592ea7762f25215b1e2cd401725fa87cba3b8f5d9dacb14956a81bf012a86652->leave($__internal_592ea7762f25215b1e2cd401725fa87cba3b8f5d9dacb14956a81bf012a86652_prof);

        
        $__internal_51f5d64a30faebd47e9a36459bd685f413e632ace7c48ef2ca82789010230e75->leave($__internal_51f5d64a30faebd47e9a36459bd685f413e632ace7c48ef2ca82789010230e75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
