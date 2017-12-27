<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0c8003ced38038c70d4f0a71a98a97f7fcf8fab07559216c4cac99bb2dd9c158 extends Twig_Template
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
        $__internal_a2e057f8bccf460fc6d82cc3fd2248ca2b21d2fd98a9159114ab60e294b5bd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e057f8bccf460fc6d82cc3fd2248ca2b21d2fd98a9159114ab60e294b5bd7e->enter($__internal_a2e057f8bccf460fc6d82cc3fd2248ca2b21d2fd98a9159114ab60e294b5bd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_dcbcf60e4e5f7e28d55c2f2c3bd2b9c82950f505d45bea571cf8339be4c77ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbcf60e4e5f7e28d55c2f2c3bd2b9c82950f505d45bea571cf8339be4c77ec4->enter($__internal_dcbcf60e4e5f7e28d55c2f2c3bd2b9c82950f505d45bea571cf8339be4c77ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a2e057f8bccf460fc6d82cc3fd2248ca2b21d2fd98a9159114ab60e294b5bd7e->leave($__internal_a2e057f8bccf460fc6d82cc3fd2248ca2b21d2fd98a9159114ab60e294b5bd7e_prof);

        
        $__internal_dcbcf60e4e5f7e28d55c2f2c3bd2b9c82950f505d45bea571cf8339be4c77ec4->leave($__internal_dcbcf60e4e5f7e28d55c2f2c3bd2b9c82950f505d45bea571cf8339be4c77ec4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
