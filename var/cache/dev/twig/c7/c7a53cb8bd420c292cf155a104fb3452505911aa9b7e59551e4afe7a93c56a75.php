<?php

/* form_table_layout.html.twig */
class __TwigTemplate_b4ea34ee317421f01863344ec8868c5a8e666a0a86386209dc3ddfc3a19886c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8b968443599585da044c89f64cdcc4791bd48ca86530e3b2259d42c74b25347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b968443599585da044c89f64cdcc4791bd48ca86530e3b2259d42c74b25347->enter($__internal_e8b968443599585da044c89f64cdcc4791bd48ca86530e3b2259d42c74b25347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3e8047c98bd235ff619781d759e632c783262ac64b5f42901a3bec6df9fd89d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8047c98bd235ff619781d759e632c783262ac64b5f42901a3bec6df9fd89d8->enter($__internal_3e8047c98bd235ff619781d759e632c783262ac64b5f42901a3bec6df9fd89d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e8b968443599585da044c89f64cdcc4791bd48ca86530e3b2259d42c74b25347->leave($__internal_e8b968443599585da044c89f64cdcc4791bd48ca86530e3b2259d42c74b25347_prof);

        
        $__internal_3e8047c98bd235ff619781d759e632c783262ac64b5f42901a3bec6df9fd89d8->leave($__internal_3e8047c98bd235ff619781d759e632c783262ac64b5f42901a3bec6df9fd89d8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_65c9adc26652ff7c90ecba93007b5b04d21784e87ef176b7316dba835d8dd181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c9adc26652ff7c90ecba93007b5b04d21784e87ef176b7316dba835d8dd181->enter($__internal_65c9adc26652ff7c90ecba93007b5b04d21784e87ef176b7316dba835d8dd181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e4d0486596d49de72937b51d5c127720ecf0b3b1dde94c830f57fbe113cc1ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d0486596d49de72937b51d5c127720ecf0b3b1dde94c830f57fbe113cc1ca9->enter($__internal_e4d0486596d49de72937b51d5c127720ecf0b3b1dde94c830f57fbe113cc1ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_e4d0486596d49de72937b51d5c127720ecf0b3b1dde94c830f57fbe113cc1ca9->leave($__internal_e4d0486596d49de72937b51d5c127720ecf0b3b1dde94c830f57fbe113cc1ca9_prof);

        
        $__internal_65c9adc26652ff7c90ecba93007b5b04d21784e87ef176b7316dba835d8dd181->leave($__internal_65c9adc26652ff7c90ecba93007b5b04d21784e87ef176b7316dba835d8dd181_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_372e7ca034477989be5c0a5a66c0faed8432b378666692abb9a0bfd9d959d7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372e7ca034477989be5c0a5a66c0faed8432b378666692abb9a0bfd9d959d7d8->enter($__internal_372e7ca034477989be5c0a5a66c0faed8432b378666692abb9a0bfd9d959d7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d9969d7f7992637aaafedfdb0db67badb199d6ff20cbcd9563bb0cfa93caf9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9969d7f7992637aaafedfdb0db67badb199d6ff20cbcd9563bb0cfa93caf9af->enter($__internal_d9969d7f7992637aaafedfdb0db67badb199d6ff20cbcd9563bb0cfa93caf9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_d9969d7f7992637aaafedfdb0db67badb199d6ff20cbcd9563bb0cfa93caf9af->leave($__internal_d9969d7f7992637aaafedfdb0db67badb199d6ff20cbcd9563bb0cfa93caf9af_prof);

        
        $__internal_372e7ca034477989be5c0a5a66c0faed8432b378666692abb9a0bfd9d959d7d8->leave($__internal_372e7ca034477989be5c0a5a66c0faed8432b378666692abb9a0bfd9d959d7d8_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_98a280dc6ea0b0d8b8ba5488d72ccdb1b15de6df731a5d8d740f3204ed0be6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a280dc6ea0b0d8b8ba5488d72ccdb1b15de6df731a5d8d740f3204ed0be6b6->enter($__internal_98a280dc6ea0b0d8b8ba5488d72ccdb1b15de6df731a5d8d740f3204ed0be6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_5deab4ffbde8e9a9bd0e678388c8357caa1bbef176f5f65d72c11ae3f17f9f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5deab4ffbde8e9a9bd0e678388c8357caa1bbef176f5f65d72c11ae3f17f9f52->enter($__internal_5deab4ffbde8e9a9bd0e678388c8357caa1bbef176f5f65d72c11ae3f17f9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_5deab4ffbde8e9a9bd0e678388c8357caa1bbef176f5f65d72c11ae3f17f9f52->leave($__internal_5deab4ffbde8e9a9bd0e678388c8357caa1bbef176f5f65d72c11ae3f17f9f52_prof);

        
        $__internal_98a280dc6ea0b0d8b8ba5488d72ccdb1b15de6df731a5d8d740f3204ed0be6b6->leave($__internal_98a280dc6ea0b0d8b8ba5488d72ccdb1b15de6df731a5d8d740f3204ed0be6b6_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9479b68bd5a4caa1edfcf28de782211515ae77c575a08d92cb36de859d3c6ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9479b68bd5a4caa1edfcf28de782211515ae77c575a08d92cb36de859d3c6ec9->enter($__internal_9479b68bd5a4caa1edfcf28de782211515ae77c575a08d92cb36de859d3c6ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_29c42a5844434f13b2ebed5e21e94abdd0fc53676c51f3b244b1a634d2c67705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c42a5844434f13b2ebed5e21e94abdd0fc53676c51f3b244b1a634d2c67705->enter($__internal_29c42a5844434f13b2ebed5e21e94abdd0fc53676c51f3b244b1a634d2c67705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_29c42a5844434f13b2ebed5e21e94abdd0fc53676c51f3b244b1a634d2c67705->leave($__internal_29c42a5844434f13b2ebed5e21e94abdd0fc53676c51f3b244b1a634d2c67705_prof);

        
        $__internal_9479b68bd5a4caa1edfcf28de782211515ae77c575a08d92cb36de859d3c6ec9->leave($__internal_9479b68bd5a4caa1edfcf28de782211515ae77c575a08d92cb36de859d3c6ec9_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
