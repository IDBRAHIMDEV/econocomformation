<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4c71843004658eea480d1426f79a80653b7afafba1c2049cb195499103285b50 extends Twig_Template
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
        $__internal_7fe08471ba0e95b4c87d3f43f66ace0e5eba86b5c42e93f91a5bed2051a418a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe08471ba0e95b4c87d3f43f66ace0e5eba86b5c42e93f91a5bed2051a418a5->enter($__internal_7fe08471ba0e95b4c87d3f43f66ace0e5eba86b5c42e93f91a5bed2051a418a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_08da6f2b73997d007dd6d0e6e92a0de510b4da95eaeaeade06fb8cd9cdfce910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08da6f2b73997d007dd6d0e6e92a0de510b4da95eaeaeade06fb8cd9cdfce910->enter($__internal_08da6f2b73997d007dd6d0e6e92a0de510b4da95eaeaeade06fb8cd9cdfce910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7fe08471ba0e95b4c87d3f43f66ace0e5eba86b5c42e93f91a5bed2051a418a5->leave($__internal_7fe08471ba0e95b4c87d3f43f66ace0e5eba86b5c42e93f91a5bed2051a418a5_prof);

        
        $__internal_08da6f2b73997d007dd6d0e6e92a0de510b4da95eaeaeade06fb8cd9cdfce910->leave($__internal_08da6f2b73997d007dd6d0e6e92a0de510b4da95eaeaeade06fb8cd9cdfce910_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
