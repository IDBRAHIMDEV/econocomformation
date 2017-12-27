<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_77c469f91eb7870c6523f95c5075bbae8c2dbe0ea18c6f1fa53f85e31cefd268 extends Twig_Template
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
        $__internal_90b791b68124e66c5df0a6ee4084d1b715ed34dd2a44e7f03b6b19ec3827cb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b791b68124e66c5df0a6ee4084d1b715ed34dd2a44e7f03b6b19ec3827cb9a->enter($__internal_90b791b68124e66c5df0a6ee4084d1b715ed34dd2a44e7f03b6b19ec3827cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_48cd44ac9b520b75c94e53192631a79ece5f7ff5fb3b88abaa25ae6f68da7589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cd44ac9b520b75c94e53192631a79ece5f7ff5fb3b88abaa25ae6f68da7589->enter($__internal_48cd44ac9b520b75c94e53192631a79ece5f7ff5fb3b88abaa25ae6f68da7589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_90b791b68124e66c5df0a6ee4084d1b715ed34dd2a44e7f03b6b19ec3827cb9a->leave($__internal_90b791b68124e66c5df0a6ee4084d1b715ed34dd2a44e7f03b6b19ec3827cb9a_prof);

        
        $__internal_48cd44ac9b520b75c94e53192631a79ece5f7ff5fb3b88abaa25ae6f68da7589->leave($__internal_48cd44ac9b520b75c94e53192631a79ece5f7ff5fb3b88abaa25ae6f68da7589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
