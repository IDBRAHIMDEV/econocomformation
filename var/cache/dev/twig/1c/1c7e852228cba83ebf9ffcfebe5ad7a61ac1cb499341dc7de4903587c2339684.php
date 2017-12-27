<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c774741d0954d72c7fd4d72d9a7e031a802163f1676f79fe8b6364e19c8446fd extends Twig_Template
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
        $__internal_52e60ba9606c2b6940dd34bba633591d90990814de63ab7c1fd2cfae4d4c61d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e60ba9606c2b6940dd34bba633591d90990814de63ab7c1fd2cfae4d4c61d8->enter($__internal_52e60ba9606c2b6940dd34bba633591d90990814de63ab7c1fd2cfae4d4c61d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0cc6691eb73cc9024604d7dcaf5352aa08b75e3c554544124b7ed917bf3b793c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc6691eb73cc9024604d7dcaf5352aa08b75e3c554544124b7ed917bf3b793c->enter($__internal_0cc6691eb73cc9024604d7dcaf5352aa08b75e3c554544124b7ed917bf3b793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_52e60ba9606c2b6940dd34bba633591d90990814de63ab7c1fd2cfae4d4c61d8->leave($__internal_52e60ba9606c2b6940dd34bba633591d90990814de63ab7c1fd2cfae4d4c61d8_prof);

        
        $__internal_0cc6691eb73cc9024604d7dcaf5352aa08b75e3c554544124b7ed917bf3b793c->leave($__internal_0cc6691eb73cc9024604d7dcaf5352aa08b75e3c554544124b7ed917bf3b793c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
