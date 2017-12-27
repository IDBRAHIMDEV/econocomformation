<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ece50ff3b644ec28d824c5495f36a5b85362f9458d55db91e663fe9535f63752 extends Twig_Template
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
        $__internal_7118ef5fa60e0d1c20843902844bbe6935b6721d8b2581c9d4a402b0046f4733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7118ef5fa60e0d1c20843902844bbe6935b6721d8b2581c9d4a402b0046f4733->enter($__internal_7118ef5fa60e0d1c20843902844bbe6935b6721d8b2581c9d4a402b0046f4733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b041eca1fc30c716c68d375a910b07a0b04d2ebc2e4ad2fd91fa5930441a2925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b041eca1fc30c716c68d375a910b07a0b04d2ebc2e4ad2fd91fa5930441a2925->enter($__internal_b041eca1fc30c716c68d375a910b07a0b04d2ebc2e4ad2fd91fa5930441a2925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7118ef5fa60e0d1c20843902844bbe6935b6721d8b2581c9d4a402b0046f4733->leave($__internal_7118ef5fa60e0d1c20843902844bbe6935b6721d8b2581c9d4a402b0046f4733_prof);

        
        $__internal_b041eca1fc30c716c68d375a910b07a0b04d2ebc2e4ad2fd91fa5930441a2925->leave($__internal_b041eca1fc30c716c68d375a910b07a0b04d2ebc2e4ad2fd91fa5930441a2925_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
