<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_33c3695c3499b65e7e6e7620fc5fe4800b6f710eed7c122dd53b52dac3e5ac05 extends Twig_Template
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
        $__internal_77505cf41fa5d3cbbc2ef6e7a6370f89b43c23cbca941a05116d193f16d2fc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77505cf41fa5d3cbbc2ef6e7a6370f89b43c23cbca941a05116d193f16d2fc6a->enter($__internal_77505cf41fa5d3cbbc2ef6e7a6370f89b43c23cbca941a05116d193f16d2fc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_60aa1a4e3fa51b5717bf537eca47e020d7321c891ea944854fbf813478e05b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60aa1a4e3fa51b5717bf537eca47e020d7321c891ea944854fbf813478e05b25->enter($__internal_60aa1a4e3fa51b5717bf537eca47e020d7321c891ea944854fbf813478e05b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_77505cf41fa5d3cbbc2ef6e7a6370f89b43c23cbca941a05116d193f16d2fc6a->leave($__internal_77505cf41fa5d3cbbc2ef6e7a6370f89b43c23cbca941a05116d193f16d2fc6a_prof);

        
        $__internal_60aa1a4e3fa51b5717bf537eca47e020d7321c891ea944854fbf813478e05b25->leave($__internal_60aa1a4e3fa51b5717bf537eca47e020d7321c891ea944854fbf813478e05b25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
