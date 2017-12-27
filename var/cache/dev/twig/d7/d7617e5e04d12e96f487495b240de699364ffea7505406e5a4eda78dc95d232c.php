<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_549ef9b04c3b04b5cfd07295a3312501d50ed7c92300be1de5ba1803b31e3d95 extends Twig_Template
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
        $__internal_dad4f7702271234aab2c511c942aa113be76dc1fda90795ceb06331d244c5b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad4f7702271234aab2c511c942aa113be76dc1fda90795ceb06331d244c5b56->enter($__internal_dad4f7702271234aab2c511c942aa113be76dc1fda90795ceb06331d244c5b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_433cf2a578ba7645be8f5c43932bfc2773d81a97cb70ae1d230306fb89df22e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433cf2a578ba7645be8f5c43932bfc2773d81a97cb70ae1d230306fb89df22e2->enter($__internal_433cf2a578ba7645be8f5c43932bfc2773d81a97cb70ae1d230306fb89df22e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_dad4f7702271234aab2c511c942aa113be76dc1fda90795ceb06331d244c5b56->leave($__internal_dad4f7702271234aab2c511c942aa113be76dc1fda90795ceb06331d244c5b56_prof);

        
        $__internal_433cf2a578ba7645be8f5c43932bfc2773d81a97cb70ae1d230306fb89df22e2->leave($__internal_433cf2a578ba7645be8f5c43932bfc2773d81a97cb70ae1d230306fb89df22e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
