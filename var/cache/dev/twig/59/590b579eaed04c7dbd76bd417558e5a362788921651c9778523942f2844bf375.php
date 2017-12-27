<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bc1d6c528da12626efc7fb9b80f806d50f7606e901bcdfbb073df3f52d11bfcc extends Twig_Template
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
        $__internal_acc08603d6a7dc4c602edee737d29771dd0393944f788781fcbfe5eb8b127bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc08603d6a7dc4c602edee737d29771dd0393944f788781fcbfe5eb8b127bb9->enter($__internal_acc08603d6a7dc4c602edee737d29771dd0393944f788781fcbfe5eb8b127bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1bcaa930444c23764828565682046c30f718091ef50c282e2661e8d1dd9f4466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcaa930444c23764828565682046c30f718091ef50c282e2661e8d1dd9f4466->enter($__internal_1bcaa930444c23764828565682046c30f718091ef50c282e2661e8d1dd9f4466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_acc08603d6a7dc4c602edee737d29771dd0393944f788781fcbfe5eb8b127bb9->leave($__internal_acc08603d6a7dc4c602edee737d29771dd0393944f788781fcbfe5eb8b127bb9_prof);

        
        $__internal_1bcaa930444c23764828565682046c30f718091ef50c282e2661e8d1dd9f4466->leave($__internal_1bcaa930444c23764828565682046c30f718091ef50c282e2661e8d1dd9f4466_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
