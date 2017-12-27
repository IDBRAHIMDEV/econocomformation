<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b5914bf066f58989ba117eb0784bdf29005c841d0f55f7e16c97fe980b832c00 extends Twig_Template
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
        $__internal_4e9389fe723464c95845d804d23cb0d23667f341166896a55b1c66608fa75ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9389fe723464c95845d804d23cb0d23667f341166896a55b1c66608fa75ca3->enter($__internal_4e9389fe723464c95845d804d23cb0d23667f341166896a55b1c66608fa75ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_332e66e1c1eb37d813937a5604073cdef60aa7e2dd742c3860acf403a9825b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332e66e1c1eb37d813937a5604073cdef60aa7e2dd742c3860acf403a9825b88->enter($__internal_332e66e1c1eb37d813937a5604073cdef60aa7e2dd742c3860acf403a9825b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4e9389fe723464c95845d804d23cb0d23667f341166896a55b1c66608fa75ca3->leave($__internal_4e9389fe723464c95845d804d23cb0d23667f341166896a55b1c66608fa75ca3_prof);

        
        $__internal_332e66e1c1eb37d813937a5604073cdef60aa7e2dd742c3860acf403a9825b88->leave($__internal_332e66e1c1eb37d813937a5604073cdef60aa7e2dd742c3860acf403a9825b88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
