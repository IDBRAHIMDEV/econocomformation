<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_72906fcea3debb325d332f3cc1831730afe2e8c6e0b34177386e0180f03850f0 extends Twig_Template
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
        $__internal_c39979ac56b0e89d37fd0175fcae57c563ea942df28fb39b8da2894a52a95827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39979ac56b0e89d37fd0175fcae57c563ea942df28fb39b8da2894a52a95827->enter($__internal_c39979ac56b0e89d37fd0175fcae57c563ea942df28fb39b8da2894a52a95827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_636810460c860a6aad9aae34319a4c31eb17fcca46c263ca8380f856b04c2ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636810460c860a6aad9aae34319a4c31eb17fcca46c263ca8380f856b04c2ec0->enter($__internal_636810460c860a6aad9aae34319a4c31eb17fcca46c263ca8380f856b04c2ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c39979ac56b0e89d37fd0175fcae57c563ea942df28fb39b8da2894a52a95827->leave($__internal_c39979ac56b0e89d37fd0175fcae57c563ea942df28fb39b8da2894a52a95827_prof);

        
        $__internal_636810460c860a6aad9aae34319a4c31eb17fcca46c263ca8380f856b04c2ec0->leave($__internal_636810460c860a6aad9aae34319a4c31eb17fcca46c263ca8380f856b04c2ec0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
