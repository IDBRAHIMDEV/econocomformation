<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d11cbdf64e7fb3d374c87fcdd598a98dae51609b9a05afc1633ef255f0cb3bf6 extends Twig_Template
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
        $__internal_767555bba3bb3965d4eff9b854ecafd582c6ce4f68c9c781af8c87093738d434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767555bba3bb3965d4eff9b854ecafd582c6ce4f68c9c781af8c87093738d434->enter($__internal_767555bba3bb3965d4eff9b854ecafd582c6ce4f68c9c781af8c87093738d434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f66f91379623e17053e6ba2504f1bb8570a5776397e5d4bf6c1b312dc769fe48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66f91379623e17053e6ba2504f1bb8570a5776397e5d4bf6c1b312dc769fe48->enter($__internal_f66f91379623e17053e6ba2504f1bb8570a5776397e5d4bf6c1b312dc769fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_767555bba3bb3965d4eff9b854ecafd582c6ce4f68c9c781af8c87093738d434->leave($__internal_767555bba3bb3965d4eff9b854ecafd582c6ce4f68c9c781af8c87093738d434_prof);

        
        $__internal_f66f91379623e17053e6ba2504f1bb8570a5776397e5d4bf6c1b312dc769fe48->leave($__internal_f66f91379623e17053e6ba2504f1bb8570a5776397e5d4bf6c1b312dc769fe48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}