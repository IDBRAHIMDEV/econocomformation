<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_26fee7e44f32462a127921ff6a772f38da5144264870a6bb7f22b064eda4ea02 extends Twig_Template
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
        $__internal_bf1f314b1e016bb0917b9effe74162036b16acd0926b793a8d7d58cccc4cb05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1f314b1e016bb0917b9effe74162036b16acd0926b793a8d7d58cccc4cb05f->enter($__internal_bf1f314b1e016bb0917b9effe74162036b16acd0926b793a8d7d58cccc4cb05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8a4c6b01707ce1e06d84b4c499e6bf9fe3a01d7b6d3a2df60d204a820ea13330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4c6b01707ce1e06d84b4c499e6bf9fe3a01d7b6d3a2df60d204a820ea13330->enter($__internal_8a4c6b01707ce1e06d84b4c499e6bf9fe3a01d7b6d3a2df60d204a820ea13330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bf1f314b1e016bb0917b9effe74162036b16acd0926b793a8d7d58cccc4cb05f->leave($__internal_bf1f314b1e016bb0917b9effe74162036b16acd0926b793a8d7d58cccc4cb05f_prof);

        
        $__internal_8a4c6b01707ce1e06d84b4c499e6bf9fe3a01d7b6d3a2df60d204a820ea13330->leave($__internal_8a4c6b01707ce1e06d84b4c499e6bf9fe3a01d7b6d3a2df60d204a820ea13330_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}