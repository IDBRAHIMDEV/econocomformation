<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_02e99a03a2ef687a1beb8cd3666febd37eb1a3152f5d92d75f6391122bca1244 extends Twig_Template
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
        $__internal_73ff4367c5d9081020d87134d23a47dd9c5e7fffd0f4212cec5ac95a9ba1024d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ff4367c5d9081020d87134d23a47dd9c5e7fffd0f4212cec5ac95a9ba1024d->enter($__internal_73ff4367c5d9081020d87134d23a47dd9c5e7fffd0f4212cec5ac95a9ba1024d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_da451de505125d1108a56632e963bd60d2d5ea4290bc5d06d4440e96da4522e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da451de505125d1108a56632e963bd60d2d5ea4290bc5d06d4440e96da4522e0->enter($__internal_da451de505125d1108a56632e963bd60d2d5ea4290bc5d06d4440e96da4522e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_73ff4367c5d9081020d87134d23a47dd9c5e7fffd0f4212cec5ac95a9ba1024d->leave($__internal_73ff4367c5d9081020d87134d23a47dd9c5e7fffd0f4212cec5ac95a9ba1024d_prof);

        
        $__internal_da451de505125d1108a56632e963bd60d2d5ea4290bc5d06d4440e96da4522e0->leave($__internal_da451de505125d1108a56632e963bd60d2d5ea4290bc5d06d4440e96da4522e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}