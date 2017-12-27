<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_914874d3da876f894a48e992d9bf7c9e4751bc264ff32959e2659779e5ffc6da extends Twig_Template
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
        $__internal_2283086752ae89a258daff8631f87ba2c2a39ea8c22ee3d71f913c3ea85a2bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2283086752ae89a258daff8631f87ba2c2a39ea8c22ee3d71f913c3ea85a2bcb->enter($__internal_2283086752ae89a258daff8631f87ba2c2a39ea8c22ee3d71f913c3ea85a2bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_aaf059b5a90fd9904f8ed49a416294b6d77b658ecf25ca32502b45f41a4092f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf059b5a90fd9904f8ed49a416294b6d77b658ecf25ca32502b45f41a4092f7->enter($__internal_aaf059b5a90fd9904f8ed49a416294b6d77b658ecf25ca32502b45f41a4092f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2283086752ae89a258daff8631f87ba2c2a39ea8c22ee3d71f913c3ea85a2bcb->leave($__internal_2283086752ae89a258daff8631f87ba2c2a39ea8c22ee3d71f913c3ea85a2bcb_prof);

        
        $__internal_aaf059b5a90fd9904f8ed49a416294b6d77b658ecf25ca32502b45f41a4092f7->leave($__internal_aaf059b5a90fd9904f8ed49a416294b6d77b658ecf25ca32502b45f41a4092f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
