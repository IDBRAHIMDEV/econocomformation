<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bae60b2d89d8b00ac3432d33c642fac104ce6868681069b0cddf095df3650b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae60b2d89d8b00ac3432d33c642fac104ce6868681069b0cddf095df3650b9d->enter($__internal_bae60b2d89d8b00ac3432d33c642fac104ce6868681069b0cddf095df3650b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f4e49fc85f02dbd5dc3840c9529543298574052e736ec56e706a95290dfd4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4e49fc85f02dbd5dc3840c9529543298574052e736ec56e706a95290dfd4b3->enter($__internal_1f4e49fc85f02dbd5dc3840c9529543298574052e736ec56e706a95290dfd4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae60b2d89d8b00ac3432d33c642fac104ce6868681069b0cddf095df3650b9d->leave($__internal_bae60b2d89d8b00ac3432d33c642fac104ce6868681069b0cddf095df3650b9d_prof);

        
        $__internal_1f4e49fc85f02dbd5dc3840c9529543298574052e736ec56e706a95290dfd4b3->leave($__internal_1f4e49fc85f02dbd5dc3840c9529543298574052e736ec56e706a95290dfd4b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8781557f7ce5c1fd7de736066d034de487b65fc76d7d20159fd5ab1dc63c7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8781557f7ce5c1fd7de736066d034de487b65fc76d7d20159fd5ab1dc63c7eb->enter($__internal_d8781557f7ce5c1fd7de736066d034de487b65fc76d7d20159fd5ab1dc63c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_162fec42b5ddd13a2465e51ae1136c7950d84c6efb9866d6a5022b9e5d066db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162fec42b5ddd13a2465e51ae1136c7950d84c6efb9866d6a5022b9e5d066db2->enter($__internal_162fec42b5ddd13a2465e51ae1136c7950d84c6efb9866d6a5022b9e5d066db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_162fec42b5ddd13a2465e51ae1136c7950d84c6efb9866d6a5022b9e5d066db2->leave($__internal_162fec42b5ddd13a2465e51ae1136c7950d84c6efb9866d6a5022b9e5d066db2_prof);

        
        $__internal_d8781557f7ce5c1fd7de736066d034de487b65fc76d7d20159fd5ab1dc63c7eb->leave($__internal_d8781557f7ce5c1fd7de736066d034de487b65fc76d7d20159fd5ab1dc63c7eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_690dbbef49cf5c21a5c76595b183ec553ca35797c8b6496cadc68deb06850ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690dbbef49cf5c21a5c76595b183ec553ca35797c8b6496cadc68deb06850ff7->enter($__internal_690dbbef49cf5c21a5c76595b183ec553ca35797c8b6496cadc68deb06850ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_861a267cb578eea0af3b87d190f8222e954143d0bb2b60aab923aa661dedfbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861a267cb578eea0af3b87d190f8222e954143d0bb2b60aab923aa661dedfbec->enter($__internal_861a267cb578eea0af3b87d190f8222e954143d0bb2b60aab923aa661dedfbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_861a267cb578eea0af3b87d190f8222e954143d0bb2b60aab923aa661dedfbec->leave($__internal_861a267cb578eea0af3b87d190f8222e954143d0bb2b60aab923aa661dedfbec_prof);

        
        $__internal_690dbbef49cf5c21a5c76595b183ec553ca35797c8b6496cadc68deb06850ff7->leave($__internal_690dbbef49cf5c21a5c76595b183ec553ca35797c8b6496cadc68deb06850ff7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d52bdf475a27229d93679e85f9ae966461bc4db663a843a6d41c972944e0512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d52bdf475a27229d93679e85f9ae966461bc4db663a843a6d41c972944e0512->enter($__internal_0d52bdf475a27229d93679e85f9ae966461bc4db663a843a6d41c972944e0512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_289c08ffcc431f2e1c6c9f7390428af6a7825671c158ab29cbd641e6cc606830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289c08ffcc431f2e1c6c9f7390428af6a7825671c158ab29cbd641e6cc606830->enter($__internal_289c08ffcc431f2e1c6c9f7390428af6a7825671c158ab29cbd641e6cc606830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_289c08ffcc431f2e1c6c9f7390428af6a7825671c158ab29cbd641e6cc606830->leave($__internal_289c08ffcc431f2e1c6c9f7390428af6a7825671c158ab29cbd641e6cc606830_prof);

        
        $__internal_0d52bdf475a27229d93679e85f9ae966461bc4db663a843a6d41c972944e0512->leave($__internal_0d52bdf475a27229d93679e85f9ae966461bc4db663a843a6d41c972944e0512_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
