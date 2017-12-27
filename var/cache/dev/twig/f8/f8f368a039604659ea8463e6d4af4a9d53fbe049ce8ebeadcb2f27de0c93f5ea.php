<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_10f6101ecd7ac1a0be1907c372495ed7e194300a9674f771a52cbbea2c5441a5 extends Twig_Template
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
        $__internal_d05ab11c6908120f1d9aeb2a35458a6cdf807f3555e061d017937e3b5c43cb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05ab11c6908120f1d9aeb2a35458a6cdf807f3555e061d017937e3b5c43cb8d->enter($__internal_d05ab11c6908120f1d9aeb2a35458a6cdf807f3555e061d017937e3b5c43cb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_78cbb51120deeb416fbd64340c383db8edeeb102b8590d85710d5a4dfe2bd3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cbb51120deeb416fbd64340c383db8edeeb102b8590d85710d5a4dfe2bd3a4->enter($__internal_78cbb51120deeb416fbd64340c383db8edeeb102b8590d85710d5a4dfe2bd3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d05ab11c6908120f1d9aeb2a35458a6cdf807f3555e061d017937e3b5c43cb8d->leave($__internal_d05ab11c6908120f1d9aeb2a35458a6cdf807f3555e061d017937e3b5c43cb8d_prof);

        
        $__internal_78cbb51120deeb416fbd64340c383db8edeeb102b8590d85710d5a4dfe2bd3a4->leave($__internal_78cbb51120deeb416fbd64340c383db8edeeb102b8590d85710d5a4dfe2bd3a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
