<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_79f4f975998be03add3fce45c7240a150ebaa70fa5c800b3164b5c427dab3f43 extends Twig_Template
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
        $__internal_bf6398b82532b36d26b89de9f1ec5c83ee55a734ac39dba0e33864b8f8a37b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6398b82532b36d26b89de9f1ec5c83ee55a734ac39dba0e33864b8f8a37b99->enter($__internal_bf6398b82532b36d26b89de9f1ec5c83ee55a734ac39dba0e33864b8f8a37b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_43ab1d3755e9bed4f90e1373f3f75dbf5f21a58bd276124bc9239cb89505fcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ab1d3755e9bed4f90e1373f3f75dbf5f21a58bd276124bc9239cb89505fcc3->enter($__internal_43ab1d3755e9bed4f90e1373f3f75dbf5f21a58bd276124bc9239cb89505fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bf6398b82532b36d26b89de9f1ec5c83ee55a734ac39dba0e33864b8f8a37b99->leave($__internal_bf6398b82532b36d26b89de9f1ec5c83ee55a734ac39dba0e33864b8f8a37b99_prof);

        
        $__internal_43ab1d3755e9bed4f90e1373f3f75dbf5f21a58bd276124bc9239cb89505fcc3->leave($__internal_43ab1d3755e9bed4f90e1373f3f75dbf5f21a58bd276124bc9239cb89505fcc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
