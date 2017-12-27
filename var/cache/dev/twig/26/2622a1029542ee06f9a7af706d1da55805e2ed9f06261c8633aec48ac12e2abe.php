<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c47a1a3206e3133f84365aa17aa46f2aa22201fbedba2f70e0d92b71c2cfb642 extends Twig_Template
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
        $__internal_963175a8938e58e5075df67c8dda5c5db0af74f2146720c9676d9fbfec7ba492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963175a8938e58e5075df67c8dda5c5db0af74f2146720c9676d9fbfec7ba492->enter($__internal_963175a8938e58e5075df67c8dda5c5db0af74f2146720c9676d9fbfec7ba492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_6f05d7dccdd4522d986468fa2a43d2e317a60c52e3765ea22a6503913ec746d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f05d7dccdd4522d986468fa2a43d2e317a60c52e3765ea22a6503913ec746d9->enter($__internal_6f05d7dccdd4522d986468fa2a43d2e317a60c52e3765ea22a6503913ec746d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_963175a8938e58e5075df67c8dda5c5db0af74f2146720c9676d9fbfec7ba492->leave($__internal_963175a8938e58e5075df67c8dda5c5db0af74f2146720c9676d9fbfec7ba492_prof);

        
        $__internal_6f05d7dccdd4522d986468fa2a43d2e317a60c52e3765ea22a6503913ec746d9->leave($__internal_6f05d7dccdd4522d986468fa2a43d2e317a60c52e3765ea22a6503913ec746d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
