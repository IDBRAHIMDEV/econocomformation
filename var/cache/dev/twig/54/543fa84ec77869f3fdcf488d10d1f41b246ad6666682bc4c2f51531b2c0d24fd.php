<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5617e637abbc5907a44f7f726adec1dbeceeb0872bc5d3f5d4b0ac330afbcc53 extends Twig_Template
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
        $__internal_2a307a50228a9c52561ac74733d7f6923359560ae0f3feff16e1af9ff617c0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a307a50228a9c52561ac74733d7f6923359560ae0f3feff16e1af9ff617c0ae->enter($__internal_2a307a50228a9c52561ac74733d7f6923359560ae0f3feff16e1af9ff617c0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c6ce26efa6b5b03a1dd439adf3359a02cf4c7984aa30085980526464feb2e525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ce26efa6b5b03a1dd439adf3359a02cf4c7984aa30085980526464feb2e525->enter($__internal_c6ce26efa6b5b03a1dd439adf3359a02cf4c7984aa30085980526464feb2e525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2a307a50228a9c52561ac74733d7f6923359560ae0f3feff16e1af9ff617c0ae->leave($__internal_2a307a50228a9c52561ac74733d7f6923359560ae0f3feff16e1af9ff617c0ae_prof);

        
        $__internal_c6ce26efa6b5b03a1dd439adf3359a02cf4c7984aa30085980526464feb2e525->leave($__internal_c6ce26efa6b5b03a1dd439adf3359a02cf4c7984aa30085980526464feb2e525_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
