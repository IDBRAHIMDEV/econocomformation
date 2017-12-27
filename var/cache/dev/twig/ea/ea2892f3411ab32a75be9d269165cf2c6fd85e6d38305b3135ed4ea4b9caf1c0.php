<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_02c1f16ca8e5c3114caa69487d7586bd1311c35f97d7c9e8a7db11cad366dc66 extends Twig_Template
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
        $__internal_df80e92e66f7f57001d8b9c17d84cd3e4098ff1e2258c06e25e007e2150557ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df80e92e66f7f57001d8b9c17d84cd3e4098ff1e2258c06e25e007e2150557ff->enter($__internal_df80e92e66f7f57001d8b9c17d84cd3e4098ff1e2258c06e25e007e2150557ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5fd0b1d3be942fea7d3a8db0977dfc1a47f3f84c26999bf0beab0e027f8bb003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd0b1d3be942fea7d3a8db0977dfc1a47f3f84c26999bf0beab0e027f8bb003->enter($__internal_5fd0b1d3be942fea7d3a8db0977dfc1a47f3f84c26999bf0beab0e027f8bb003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_df80e92e66f7f57001d8b9c17d84cd3e4098ff1e2258c06e25e007e2150557ff->leave($__internal_df80e92e66f7f57001d8b9c17d84cd3e4098ff1e2258c06e25e007e2150557ff_prof);

        
        $__internal_5fd0b1d3be942fea7d3a8db0977dfc1a47f3f84c26999bf0beab0e027f8bb003->leave($__internal_5fd0b1d3be942fea7d3a8db0977dfc1a47f3f84c26999bf0beab0e027f8bb003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
