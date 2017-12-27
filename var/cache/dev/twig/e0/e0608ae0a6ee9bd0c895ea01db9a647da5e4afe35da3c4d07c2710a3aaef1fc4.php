<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_1f03b606878e52f5b1e68ad83aa00e083d19097f2c7c33deeebfbd1935d80d98 extends Twig_Template
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
        $__internal_8a37b260265fa950147851b3b88f40ae91db18a8c70769d67920f2c679db6d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a37b260265fa950147851b3b88f40ae91db18a8c70769d67920f2c679db6d3d->enter($__internal_8a37b260265fa950147851b3b88f40ae91db18a8c70769d67920f2c679db6d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $__internal_81025514eb04822b2d7de5841565269515a47ebb6b12c4f58b31eea110bf1533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81025514eb04822b2d7de5841565269515a47ebb6b12c4f58b31eea110bf1533->enter($__internal_81025514eb04822b2d7de5841565269515a47ebb6b12c4f58b31eea110bf1533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8a37b260265fa950147851b3b88f40ae91db18a8c70769d67920f2c679db6d3d->leave($__internal_8a37b260265fa950147851b3b88f40ae91db18a8c70769d67920f2c679db6d3d_prof);

        
        $__internal_81025514eb04822b2d7de5841565269515a47ebb6b12c4f58b31eea110bf1533->leave($__internal_81025514eb04822b2d7de5841565269515a47ebb6b12c4f58b31eea110bf1533_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BlogBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\projett1\\src\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
