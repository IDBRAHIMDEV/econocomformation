<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3c0ae02049e09568dd4caa191fe4cca5c4bb1803dedb579cb689d27449e2dba2 extends Twig_Template
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
        $__internal_5daee4363a44b72b84a2f4ed38d9cd0af11a7f835dc8de37180b43c275abada5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5daee4363a44b72b84a2f4ed38d9cd0af11a7f835dc8de37180b43c275abada5->enter($__internal_5daee4363a44b72b84a2f4ed38d9cd0af11a7f835dc8de37180b43c275abada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_38ebec46e515bb1b2390d81f1f011284c1b4272ad0b426594f84b92979fcf40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ebec46e515bb1b2390d81f1f011284c1b4272ad0b426594f84b92979fcf40b->enter($__internal_38ebec46e515bb1b2390d81f1f011284c1b4272ad0b426594f84b92979fcf40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5daee4363a44b72b84a2f4ed38d9cd0af11a7f835dc8de37180b43c275abada5->leave($__internal_5daee4363a44b72b84a2f4ed38d9cd0af11a7f835dc8de37180b43c275abada5_prof);

        
        $__internal_38ebec46e515bb1b2390d81f1f011284c1b4272ad0b426594f84b92979fcf40b->leave($__internal_38ebec46e515bb1b2390d81f1f011284c1b4272ad0b426594f84b92979fcf40b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
