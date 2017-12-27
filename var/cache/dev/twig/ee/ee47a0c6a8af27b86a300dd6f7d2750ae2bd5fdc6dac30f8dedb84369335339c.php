<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b89b56d4a975e444ef183178a00b9776fa0faf590807f454aaae4e02c3ff55ca extends Twig_Template
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
        $__internal_50ba45615f5937f5b05d78896e62ddd426e4784e921256f8006500b065b75b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ba45615f5937f5b05d78896e62ddd426e4784e921256f8006500b065b75b2c->enter($__internal_50ba45615f5937f5b05d78896e62ddd426e4784e921256f8006500b065b75b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e1de8d518e86cdab2ddcdfadd478718c6b76c8a72dfddbddab623ed86bd1de84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1de8d518e86cdab2ddcdfadd478718c6b76c8a72dfddbddab623ed86bd1de84->enter($__internal_e1de8d518e86cdab2ddcdfadd478718c6b76c8a72dfddbddab623ed86bd1de84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_50ba45615f5937f5b05d78896e62ddd426e4784e921256f8006500b065b75b2c->leave($__internal_50ba45615f5937f5b05d78896e62ddd426e4784e921256f8006500b065b75b2c_prof);

        
        $__internal_e1de8d518e86cdab2ddcdfadd478718c6b76c8a72dfddbddab623ed86bd1de84->leave($__internal_e1de8d518e86cdab2ddcdfadd478718c6b76c8a72dfddbddab623ed86bd1de84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
