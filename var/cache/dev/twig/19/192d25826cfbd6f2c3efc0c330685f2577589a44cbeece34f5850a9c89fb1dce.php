<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d896137cb2172f6bbf2d7c8aa0f18ca5835c9a54ad72c7165ac4ba7bd3bd871 extends Twig_Template
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
        $__internal_3be799f0b701dd33134f4251fb4a526e0df3d8cacf87988e1a1e3c94f2f5cbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be799f0b701dd33134f4251fb4a526e0df3d8cacf87988e1a1e3c94f2f5cbd5->enter($__internal_3be799f0b701dd33134f4251fb4a526e0df3d8cacf87988e1a1e3c94f2f5cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5b55fbf4ccc7504dccf0b30197e3a3a63ee3899ef18e840db8156a18b9a3d72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b55fbf4ccc7504dccf0b30197e3a3a63ee3899ef18e840db8156a18b9a3d72b->enter($__internal_5b55fbf4ccc7504dccf0b30197e3a3a63ee3899ef18e840db8156a18b9a3d72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3be799f0b701dd33134f4251fb4a526e0df3d8cacf87988e1a1e3c94f2f5cbd5->leave($__internal_3be799f0b701dd33134f4251fb4a526e0df3d8cacf87988e1a1e3c94f2f5cbd5_prof);

        
        $__internal_5b55fbf4ccc7504dccf0b30197e3a3a63ee3899ef18e840db8156a18b9a3d72b->leave($__internal_5b55fbf4ccc7504dccf0b30197e3a3a63ee3899ef18e840db8156a18b9a3d72b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
