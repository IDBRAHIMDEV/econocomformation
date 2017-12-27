<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_af6092474556d59b2056973638b1922c770e3833f54c7a92242747fb2a0a8402 extends Twig_Template
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
        $__internal_461e014de5c9f70edc76a72bb2abdfe20aba6c4eb8f886e4abefe094ee9911c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461e014de5c9f70edc76a72bb2abdfe20aba6c4eb8f886e4abefe094ee9911c7->enter($__internal_461e014de5c9f70edc76a72bb2abdfe20aba6c4eb8f886e4abefe094ee9911c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f0c1acf47d03c7479a16b3d17d1e65fd0e5da5e455d14d02a653c9c71c955918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c1acf47d03c7479a16b3d17d1e65fd0e5da5e455d14d02a653c9c71c955918->enter($__internal_f0c1acf47d03c7479a16b3d17d1e65fd0e5da5e455d14d02a653c9c71c955918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_461e014de5c9f70edc76a72bb2abdfe20aba6c4eb8f886e4abefe094ee9911c7->leave($__internal_461e014de5c9f70edc76a72bb2abdfe20aba6c4eb8f886e4abefe094ee9911c7_prof);

        
        $__internal_f0c1acf47d03c7479a16b3d17d1e65fd0e5da5e455d14d02a653c9c71c955918->leave($__internal_f0c1acf47d03c7479a16b3d17d1e65fd0e5da5e455d14d02a653c9c71c955918_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
