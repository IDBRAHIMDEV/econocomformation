<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0c43d32cf737ba1f3c931c45f96023f7f224f015d0da55a2ed73c92414d07599 extends Twig_Template
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
        $__internal_a4a6547bf99ad60eb30ad00f2de4b143ff0d76ca4e06ff4effd851bf81418d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a6547bf99ad60eb30ad00f2de4b143ff0d76ca4e06ff4effd851bf81418d3f->enter($__internal_a4a6547bf99ad60eb30ad00f2de4b143ff0d76ca4e06ff4effd851bf81418d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2cf328c0612c499878584a163fb8e21c20007b03b5712fdabfa2b46b8daa5d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf328c0612c499878584a163fb8e21c20007b03b5712fdabfa2b46b8daa5d19->enter($__internal_2cf328c0612c499878584a163fb8e21c20007b03b5712fdabfa2b46b8daa5d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a4a6547bf99ad60eb30ad00f2de4b143ff0d76ca4e06ff4effd851bf81418d3f->leave($__internal_a4a6547bf99ad60eb30ad00f2de4b143ff0d76ca4e06ff4effd851bf81418d3f_prof);

        
        $__internal_2cf328c0612c499878584a163fb8e21c20007b03b5712fdabfa2b46b8daa5d19->leave($__internal_2cf328c0612c499878584a163fb8e21c20007b03b5712fdabfa2b46b8daa5d19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
