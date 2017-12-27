<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_b97c24f02b523010f6e619dbc68117d78317b430717261b4fe46ca39cfd6ecc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31bfed5b4256d60e62f33efd50832951d269e822b0cc82ffe2b9e59d1a729558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bfed5b4256d60e62f33efd50832951d269e822b0cc82ffe2b9e59d1a729558->enter($__internal_31bfed5b4256d60e62f33efd50832951d269e822b0cc82ffe2b9e59d1a729558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_4433dea87b604e9ce3c382d807e674ef23e5f7e834896e29aec4fc3d22743e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4433dea87b604e9ce3c382d807e674ef23e5f7e834896e29aec4fc3d22743e56->enter($__internal_4433dea87b604e9ce3c382d807e674ef23e5f7e834896e29aec4fc3d22743e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_31bfed5b4256d60e62f33efd50832951d269e822b0cc82ffe2b9e59d1a729558->leave($__internal_31bfed5b4256d60e62f33efd50832951d269e822b0cc82ffe2b9e59d1a729558_prof);

        
        $__internal_4433dea87b604e9ce3c382d807e674ef23e5f7e834896e29aec4fc3d22743e56->leave($__internal_4433dea87b604e9ce3c382d807e674ef23e5f7e834896e29aec4fc3d22743e56_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_113588737eefe940c3b2a139305279a75fec715ed5f937daa80c45e5bf1ea876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113588737eefe940c3b2a139305279a75fec715ed5f937daa80c45e5bf1ea876->enter($__internal_113588737eefe940c3b2a139305279a75fec715ed5f937daa80c45e5bf1ea876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1649ac28c9fea782b3a87bca5bdb7f7254a9fc079d7c96e588690a17edf60034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1649ac28c9fea782b3a87bca5bdb7f7254a9fc079d7c96e588690a17edf60034->enter($__internal_1649ac28c9fea782b3a87bca5bdb7f7254a9fc079d7c96e588690a17edf60034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1649ac28c9fea782b3a87bca5bdb7f7254a9fc079d7c96e588690a17edf60034->leave($__internal_1649ac28c9fea782b3a87bca5bdb7f7254a9fc079d7c96e588690a17edf60034_prof);

        
        $__internal_113588737eefe940c3b2a139305279a75fec715ed5f937daa80c45e5bf1ea876->leave($__internal_113588737eefe940c3b2a139305279a75fec715ed5f937daa80c45e5bf1ea876_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b52d2af7978d752d804dfc35eb37fa7a31c6505480caf2df218d04a3bca76a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52d2af7978d752d804dfc35eb37fa7a31c6505480caf2df218d04a3bca76a11->enter($__internal_b52d2af7978d752d804dfc35eb37fa7a31c6505480caf2df218d04a3bca76a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5478a72b5223d661296c4deccaf4e488a839623ff1126c191f368ac85ff175e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5478a72b5223d661296c4deccaf4e488a839623ff1126c191f368ac85ff175e5->enter($__internal_5478a72b5223d661296c4deccaf4e488a839623ff1126c191f368ac85ff175e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5478a72b5223d661296c4deccaf4e488a839623ff1126c191f368ac85ff175e5->leave($__internal_5478a72b5223d661296c4deccaf4e488a839623ff1126c191f368ac85ff175e5_prof);

        
        $__internal_b52d2af7978d752d804dfc35eb37fa7a31c6505480caf2df218d04a3bca76a11->leave($__internal_b52d2af7978d752d804dfc35eb37fa7a31c6505480caf2df218d04a3bca76a11_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_183c9504de0e25c2ffb464b81980c75d29344477c354d101facf5013c528eabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183c9504de0e25c2ffb464b81980c75d29344477c354d101facf5013c528eabd->enter($__internal_183c9504de0e25c2ffb464b81980c75d29344477c354d101facf5013c528eabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_abd9240ced05c897793288e74a866702d088fa0b4be39788694da9cc3fd82467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd9240ced05c897793288e74a866702d088fa0b4be39788694da9cc3fd82467->enter($__internal_abd9240ced05c897793288e74a866702d088fa0b4be39788694da9cc3fd82467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_abd9240ced05c897793288e74a866702d088fa0b4be39788694da9cc3fd82467->leave($__internal_abd9240ced05c897793288e74a866702d088fa0b4be39788694da9cc3fd82467_prof);

        
        $__internal_183c9504de0e25c2ffb464b81980c75d29344477c354d101facf5013c528eabd->leave($__internal_183c9504de0e25c2ffb464b81980c75d29344477c354d101facf5013c528eabd_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6c727829b3d4a72b37fc8cc5056df44961fc04e15caa543d142b635f32be3a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c727829b3d4a72b37fc8cc5056df44961fc04e15caa543d142b635f32be3a5b->enter($__internal_6c727829b3d4a72b37fc8cc5056df44961fc04e15caa543d142b635f32be3a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1634967f1ad77d40a4347eb6e8c53e7792ec9042114035385161b38be79e12da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1634967f1ad77d40a4347eb6e8c53e7792ec9042114035385161b38be79e12da->enter($__internal_1634967f1ad77d40a4347eb6e8c53e7792ec9042114035385161b38be79e12da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_c4a51632609aeb1cae67b9cb1ca39f410b87f7522ca282be36c900ea1768f8b1 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_482fe59756083cf25e3afedd80c072e0f0cffe5aa875924f910ad35f0f47ab85 = "{{") && ('' === $__internal_482fe59756083cf25e3afedd80c072e0f0cffe5aa875924f910ad35f0f47ab85 || 0 === strpos($__internal_c4a51632609aeb1cae67b9cb1ca39f410b87f7522ca282be36c900ea1768f8b1, $__internal_482fe59756083cf25e3afedd80c072e0f0cffe5aa875924f910ad35f0f47ab85)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_1634967f1ad77d40a4347eb6e8c53e7792ec9042114035385161b38be79e12da->leave($__internal_1634967f1ad77d40a4347eb6e8c53e7792ec9042114035385161b38be79e12da_prof);

        
        $__internal_6c727829b3d4a72b37fc8cc5056df44961fc04e15caa543d142b635f32be3a5b->leave($__internal_6c727829b3d4a72b37fc8cc5056df44961fc04e15caa543d142b635f32be3a5b_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fc45229e65af3c7b24504e052bb4e553c5fd80c15b262e101c186c209c71230a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc45229e65af3c7b24504e052bb4e553c5fd80c15b262e101c186c209c71230a->enter($__internal_fc45229e65af3c7b24504e052bb4e553c5fd80c15b262e101c186c209c71230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_33484d1849f1551e806b2b3590738a8ef6ef462e1f39d8919641aa9ac4c337c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33484d1849f1551e806b2b3590738a8ef6ef462e1f39d8919641aa9ac4c337c1->enter($__internal_33484d1849f1551e806b2b3590738a8ef6ef462e1f39d8919641aa9ac4c337c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_33484d1849f1551e806b2b3590738a8ef6ef462e1f39d8919641aa9ac4c337c1->leave($__internal_33484d1849f1551e806b2b3590738a8ef6ef462e1f39d8919641aa9ac4c337c1_prof);

        
        $__internal_fc45229e65af3c7b24504e052bb4e553c5fd80c15b262e101c186c209c71230a->leave($__internal_fc45229e65af3c7b24504e052bb4e553c5fd80c15b262e101c186c209c71230a_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_85380113538fca8e1a0af8841ab65f3e7e527d1ec6a30fb043ed9830b1678b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85380113538fca8e1a0af8841ab65f3e7e527d1ec6a30fb043ed9830b1678b89->enter($__internal_85380113538fca8e1a0af8841ab65f3e7e527d1ec6a30fb043ed9830b1678b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_058e462070301a2bf38dcc22c436553b3189f657077a68149782013c50fe7eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058e462070301a2bf38dcc22c436553b3189f657077a68149782013c50fe7eea->enter($__internal_058e462070301a2bf38dcc22c436553b3189f657077a68149782013c50fe7eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_058e462070301a2bf38dcc22c436553b3189f657077a68149782013c50fe7eea->leave($__internal_058e462070301a2bf38dcc22c436553b3189f657077a68149782013c50fe7eea_prof);

        
        $__internal_85380113538fca8e1a0af8841ab65f3e7e527d1ec6a30fb043ed9830b1678b89->leave($__internal_85380113538fca8e1a0af8841ab65f3e7e527d1ec6a30fb043ed9830b1678b89_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5faea4c6998456051edc7a5424a62ef144ace0dd1b7045bd52e371199be74b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faea4c6998456051edc7a5424a62ef144ace0dd1b7045bd52e371199be74b5a->enter($__internal_5faea4c6998456051edc7a5424a62ef144ace0dd1b7045bd52e371199be74b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9c251f09fc5aef9bcc0dee634ba19d8d43e9a93499032a82f24806a86cbe46e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c251f09fc5aef9bcc0dee634ba19d8d43e9a93499032a82f24806a86cbe46e7->enter($__internal_9c251f09fc5aef9bcc0dee634ba19d8d43e9a93499032a82f24806a86cbe46e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_9c251f09fc5aef9bcc0dee634ba19d8d43e9a93499032a82f24806a86cbe46e7->leave($__internal_9c251f09fc5aef9bcc0dee634ba19d8d43e9a93499032a82f24806a86cbe46e7_prof);

        
        $__internal_5faea4c6998456051edc7a5424a62ef144ace0dd1b7045bd52e371199be74b5a->leave($__internal_5faea4c6998456051edc7a5424a62ef144ace0dd1b7045bd52e371199be74b5a_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fa19c22295f3a2f2f01e572d6693242fb4b52894128bea84e99b0d639f45b57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa19c22295f3a2f2f01e572d6693242fb4b52894128bea84e99b0d639f45b57b->enter($__internal_fa19c22295f3a2f2f01e572d6693242fb4b52894128bea84e99b0d639f45b57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_67df72384ee8ddc777e84d7ffcec11f56efe8555db886b23940f2968f3d735da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67df72384ee8ddc777e84d7ffcec11f56efe8555db886b23940f2968f3d735da->enter($__internal_67df72384ee8ddc777e84d7ffcec11f56efe8555db886b23940f2968f3d735da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_67df72384ee8ddc777e84d7ffcec11f56efe8555db886b23940f2968f3d735da->leave($__internal_67df72384ee8ddc777e84d7ffcec11f56efe8555db886b23940f2968f3d735da_prof);

        
        $__internal_fa19c22295f3a2f2f01e572d6693242fb4b52894128bea84e99b0d639f45b57b->leave($__internal_fa19c22295f3a2f2f01e572d6693242fb4b52894128bea84e99b0d639f45b57b_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_35e690293707ed1fdb4a7a7e2a515fd62d3fd39021d4bb6e51874924bc53f310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e690293707ed1fdb4a7a7e2a515fd62d3fd39021d4bb6e51874924bc53f310->enter($__internal_35e690293707ed1fdb4a7a7e2a515fd62d3fd39021d4bb6e51874924bc53f310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_861140eedc31614b11439ad5223ca3135c0ca219c8ee9ec88bd938c8986f1f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861140eedc31614b11439ad5223ca3135c0ca219c8ee9ec88bd938c8986f1f94->enter($__internal_861140eedc31614b11439ad5223ca3135c0ca219c8ee9ec88bd938c8986f1f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_861140eedc31614b11439ad5223ca3135c0ca219c8ee9ec88bd938c8986f1f94->leave($__internal_861140eedc31614b11439ad5223ca3135c0ca219c8ee9ec88bd938c8986f1f94_prof);

        
        $__internal_35e690293707ed1fdb4a7a7e2a515fd62d3fd39021d4bb6e51874924bc53f310->leave($__internal_35e690293707ed1fdb4a7a7e2a515fd62d3fd39021d4bb6e51874924bc53f310_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_94e3ca9a95c2c7d3237b41170065914bf013d0e78ceb9b916570565199ec2eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e3ca9a95c2c7d3237b41170065914bf013d0e78ceb9b916570565199ec2eb1->enter($__internal_94e3ca9a95c2c7d3237b41170065914bf013d0e78ceb9b916570565199ec2eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8f91344e7f0e3092b3b7bcd3434bd3ea01f322c2e024d9e0e51989209d8d746c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f91344e7f0e3092b3b7bcd3434bd3ea01f322c2e024d9e0e51989209d8d746c->enter($__internal_8f91344e7f0e3092b3b7bcd3434bd3ea01f322c2e024d9e0e51989209d8d746c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8f91344e7f0e3092b3b7bcd3434bd3ea01f322c2e024d9e0e51989209d8d746c->leave($__internal_8f91344e7f0e3092b3b7bcd3434bd3ea01f322c2e024d9e0e51989209d8d746c_prof);

        
        $__internal_94e3ca9a95c2c7d3237b41170065914bf013d0e78ceb9b916570565199ec2eb1->leave($__internal_94e3ca9a95c2c7d3237b41170065914bf013d0e78ceb9b916570565199ec2eb1_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_505ebda0872991e13acc47d7e3864c84c7d1c37396c016d5fcf1d97f4beab3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505ebda0872991e13acc47d7e3864c84c7d1c37396c016d5fcf1d97f4beab3c8->enter($__internal_505ebda0872991e13acc47d7e3864c84c7d1c37396c016d5fcf1d97f4beab3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ffa798bd9e1a81c1ce76b7977602ed5972fbbb6f578ca978ec986d1d3a2df1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa798bd9e1a81c1ce76b7977602ed5972fbbb6f578ca978ec986d1d3a2df1b0->enter($__internal_ffa798bd9e1a81c1ce76b7977602ed5972fbbb6f578ca978ec986d1d3a2df1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_ffa798bd9e1a81c1ce76b7977602ed5972fbbb6f578ca978ec986d1d3a2df1b0->leave($__internal_ffa798bd9e1a81c1ce76b7977602ed5972fbbb6f578ca978ec986d1d3a2df1b0_prof);

        
        $__internal_505ebda0872991e13acc47d7e3864c84c7d1c37396c016d5fcf1d97f4beab3c8->leave($__internal_505ebda0872991e13acc47d7e3864c84c7d1c37396c016d5fcf1d97f4beab3c8_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_27fd05634e50f21fcb9a408e894d6e4193c4a82d24a9a8190d5a1c86ce54e50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fd05634e50f21fcb9a408e894d6e4193c4a82d24a9a8190d5a1c86ce54e50c->enter($__internal_27fd05634e50f21fcb9a408e894d6e4193c4a82d24a9a8190d5a1c86ce54e50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_3c2fea2b4bb470e40d1b0fb299897e56a981b2ad3c00a6b1a2ec459fec456cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2fea2b4bb470e40d1b0fb299897e56a981b2ad3c00a6b1a2ec459fec456cc3->enter($__internal_3c2fea2b4bb470e40d1b0fb299897e56a981b2ad3c00a6b1a2ec459fec456cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_3c2fea2b4bb470e40d1b0fb299897e56a981b2ad3c00a6b1a2ec459fec456cc3->leave($__internal_3c2fea2b4bb470e40d1b0fb299897e56a981b2ad3c00a6b1a2ec459fec456cc3_prof);

        
        $__internal_27fd05634e50f21fcb9a408e894d6e4193c4a82d24a9a8190d5a1c86ce54e50c->leave($__internal_27fd05634e50f21fcb9a408e894d6e4193c4a82d24a9a8190d5a1c86ce54e50c_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fc03dc6193dd5920d9e044c659d946d5ad831e7ffd730247812b51420f996547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc03dc6193dd5920d9e044c659d946d5ad831e7ffd730247812b51420f996547->enter($__internal_fc03dc6193dd5920d9e044c659d946d5ad831e7ffd730247812b51420f996547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_983761a1afa2fb0eb64e65de9811eba597e38fc6cd106a672dd52b07c781eee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983761a1afa2fb0eb64e65de9811eba597e38fc6cd106a672dd52b07c781eee1->enter($__internal_983761a1afa2fb0eb64e65de9811eba597e38fc6cd106a672dd52b07c781eee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_983761a1afa2fb0eb64e65de9811eba597e38fc6cd106a672dd52b07c781eee1->leave($__internal_983761a1afa2fb0eb64e65de9811eba597e38fc6cd106a672dd52b07c781eee1_prof);

        
        $__internal_fc03dc6193dd5920d9e044c659d946d5ad831e7ffd730247812b51420f996547->leave($__internal_fc03dc6193dd5920d9e044c659d946d5ad831e7ffd730247812b51420f996547_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7400b7b5faa8c1f029c9317e3c80577a5f26f88f6054b91ca4d865738279744c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7400b7b5faa8c1f029c9317e3c80577a5f26f88f6054b91ca4d865738279744c->enter($__internal_7400b7b5faa8c1f029c9317e3c80577a5f26f88f6054b91ca4d865738279744c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_07e078a44dc900a240f20569fa54f126650594208f19da776f1c2a8135427186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e078a44dc900a240f20569fa54f126650594208f19da776f1c2a8135427186->enter($__internal_07e078a44dc900a240f20569fa54f126650594208f19da776f1c2a8135427186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_07e078a44dc900a240f20569fa54f126650594208f19da776f1c2a8135427186->leave($__internal_07e078a44dc900a240f20569fa54f126650594208f19da776f1c2a8135427186_prof);

        
        $__internal_7400b7b5faa8c1f029c9317e3c80577a5f26f88f6054b91ca4d865738279744c->leave($__internal_7400b7b5faa8c1f029c9317e3c80577a5f26f88f6054b91ca4d865738279744c_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_72957d7f95fbdbc33061d04525960090c3fa968838717cd2fc88f9c041c84b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72957d7f95fbdbc33061d04525960090c3fa968838717cd2fc88f9c041c84b72->enter($__internal_72957d7f95fbdbc33061d04525960090c3fa968838717cd2fc88f9c041c84b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_89ecf53ecbd3dd6c5441164ba7f6d51de033f33b7d387570919755ec88369be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ecf53ecbd3dd6c5441164ba7f6d51de033f33b7d387570919755ec88369be7->enter($__internal_89ecf53ecbd3dd6c5441164ba7f6d51de033f33b7d387570919755ec88369be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_89ecf53ecbd3dd6c5441164ba7f6d51de033f33b7d387570919755ec88369be7->leave($__internal_89ecf53ecbd3dd6c5441164ba7f6d51de033f33b7d387570919755ec88369be7_prof);

        
        $__internal_72957d7f95fbdbc33061d04525960090c3fa968838717cd2fc88f9c041c84b72->leave($__internal_72957d7f95fbdbc33061d04525960090c3fa968838717cd2fc88f9c041c84b72_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_56ede059732648957a71ff5cbb0fbfb64ce50c497271dc3f716e013166ab91cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ede059732648957a71ff5cbb0fbfb64ce50c497271dc3f716e013166ab91cf->enter($__internal_56ede059732648957a71ff5cbb0fbfb64ce50c497271dc3f716e013166ab91cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fc5f7dbbbbf3fcc832669abfb9a4bc5c5d5ab22b0c6c192d264a2a72b1c0beb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5f7dbbbbf3fcc832669abfb9a4bc5c5d5ab22b0c6c192d264a2a72b1c0beb2->enter($__internal_fc5f7dbbbbf3fcc832669abfb9a4bc5c5d5ab22b0c6c192d264a2a72b1c0beb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fc5f7dbbbbf3fcc832669abfb9a4bc5c5d5ab22b0c6c192d264a2a72b1c0beb2->leave($__internal_fc5f7dbbbbf3fcc832669abfb9a4bc5c5d5ab22b0c6c192d264a2a72b1c0beb2_prof);

        
        $__internal_56ede059732648957a71ff5cbb0fbfb64ce50c497271dc3f716e013166ab91cf->leave($__internal_56ede059732648957a71ff5cbb0fbfb64ce50c497271dc3f716e013166ab91cf_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1a14b7ba88741dd4fd85e4a118a80a9fda3e59f8e3130ae0cdda0db5da9e0eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a14b7ba88741dd4fd85e4a118a80a9fda3e59f8e3130ae0cdda0db5da9e0eb8->enter($__internal_1a14b7ba88741dd4fd85e4a118a80a9fda3e59f8e3130ae0cdda0db5da9e0eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_2ff43822bae0234abb2d9d6d545e2fcf4b42785434d9ab4f6aabd1f93073166e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff43822bae0234abb2d9d6d545e2fcf4b42785434d9ab4f6aabd1f93073166e->enter($__internal_2ff43822bae0234abb2d9d6d545e2fcf4b42785434d9ab4f6aabd1f93073166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2ff43822bae0234abb2d9d6d545e2fcf4b42785434d9ab4f6aabd1f93073166e->leave($__internal_2ff43822bae0234abb2d9d6d545e2fcf4b42785434d9ab4f6aabd1f93073166e_prof);

        
        $__internal_1a14b7ba88741dd4fd85e4a118a80a9fda3e59f8e3130ae0cdda0db5da9e0eb8->leave($__internal_1a14b7ba88741dd4fd85e4a118a80a9fda3e59f8e3130ae0cdda0db5da9e0eb8_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_212a16cc0422cfc939379e9262f38c91f79d7160397b00327241153385a260e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212a16cc0422cfc939379e9262f38c91f79d7160397b00327241153385a260e6->enter($__internal_212a16cc0422cfc939379e9262f38c91f79d7160397b00327241153385a260e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3d18eb2a6927f54dc5068b744256ca8d221414aa203fc7bc562e58bf48933bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d18eb2a6927f54dc5068b744256ca8d221414aa203fc7bc562e58bf48933bb3->enter($__internal_3d18eb2a6927f54dc5068b744256ca8d221414aa203fc7bc562e58bf48933bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_3d18eb2a6927f54dc5068b744256ca8d221414aa203fc7bc562e58bf48933bb3->leave($__internal_3d18eb2a6927f54dc5068b744256ca8d221414aa203fc7bc562e58bf48933bb3_prof);

        
        $__internal_212a16cc0422cfc939379e9262f38c91f79d7160397b00327241153385a260e6->leave($__internal_212a16cc0422cfc939379e9262f38c91f79d7160397b00327241153385a260e6_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_74f034204ca7f4c62508f3f391610de7082331d84dc9010209f9d78f56464d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f034204ca7f4c62508f3f391610de7082331d84dc9010209f9d78f56464d46->enter($__internal_74f034204ca7f4c62508f3f391610de7082331d84dc9010209f9d78f56464d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0b47a4c9792958248d9836732cd1e69e3daee9c8adc95d75203d37a97068c001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b47a4c9792958248d9836732cd1e69e3daee9c8adc95d75203d37a97068c001->enter($__internal_0b47a4c9792958248d9836732cd1e69e3daee9c8adc95d75203d37a97068c001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_0b47a4c9792958248d9836732cd1e69e3daee9c8adc95d75203d37a97068c001->leave($__internal_0b47a4c9792958248d9836732cd1e69e3daee9c8adc95d75203d37a97068c001_prof);

        
        $__internal_74f034204ca7f4c62508f3f391610de7082331d84dc9010209f9d78f56464d46->leave($__internal_74f034204ca7f4c62508f3f391610de7082331d84dc9010209f9d78f56464d46_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a557fc5f62e22dc707a48eec6e7eedb88f8f8a0726682d40eadce68130e3ad4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a557fc5f62e22dc707a48eec6e7eedb88f8f8a0726682d40eadce68130e3ad4e->enter($__internal_a557fc5f62e22dc707a48eec6e7eedb88f8f8a0726682d40eadce68130e3ad4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c1853b70e885442831baaca4bd9673b634023fb461524369ff6260071668e0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1853b70e885442831baaca4bd9673b634023fb461524369ff6260071668e0c6->enter($__internal_c1853b70e885442831baaca4bd9673b634023fb461524369ff6260071668e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_c1853b70e885442831baaca4bd9673b634023fb461524369ff6260071668e0c6->leave($__internal_c1853b70e885442831baaca4bd9673b634023fb461524369ff6260071668e0c6_prof);

        
        $__internal_a557fc5f62e22dc707a48eec6e7eedb88f8f8a0726682d40eadce68130e3ad4e->leave($__internal_a557fc5f62e22dc707a48eec6e7eedb88f8f8a0726682d40eadce68130e3ad4e_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d8112d94bd1ae2f40789cc05130061e3137f943f87a56af7beb819100978957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8112d94bd1ae2f40789cc05130061e3137f943f87a56af7beb819100978957c->enter($__internal_d8112d94bd1ae2f40789cc05130061e3137f943f87a56af7beb819100978957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e8bd74d526476e40570486ff84494e5732b7f1d86be07d7230535ae08d0780d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bd74d526476e40570486ff84494e5732b7f1d86be07d7230535ae08d0780d9->enter($__internal_e8bd74d526476e40570486ff84494e5732b7f1d86be07d7230535ae08d0780d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e8bd74d526476e40570486ff84494e5732b7f1d86be07d7230535ae08d0780d9->leave($__internal_e8bd74d526476e40570486ff84494e5732b7f1d86be07d7230535ae08d0780d9_prof);

        
        $__internal_d8112d94bd1ae2f40789cc05130061e3137f943f87a56af7beb819100978957c->leave($__internal_d8112d94bd1ae2f40789cc05130061e3137f943f87a56af7beb819100978957c_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_972d7459eaf0a411dcfd1a4efc399cf5110a9730ab3d2760f0a1f33edd16ff95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972d7459eaf0a411dcfd1a4efc399cf5110a9730ab3d2760f0a1f33edd16ff95->enter($__internal_972d7459eaf0a411dcfd1a4efc399cf5110a9730ab3d2760f0a1f33edd16ff95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1f7ea6ce0d2ced658edf0985326d6f139320c045c1ad0e9b90a21ba7ffce52b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7ea6ce0d2ced658edf0985326d6f139320c045c1ad0e9b90a21ba7ffce52b1->enter($__internal_1f7ea6ce0d2ced658edf0985326d6f139320c045c1ad0e9b90a21ba7ffce52b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f7ea6ce0d2ced658edf0985326d6f139320c045c1ad0e9b90a21ba7ffce52b1->leave($__internal_1f7ea6ce0d2ced658edf0985326d6f139320c045c1ad0e9b90a21ba7ffce52b1_prof);

        
        $__internal_972d7459eaf0a411dcfd1a4efc399cf5110a9730ab3d2760f0a1f33edd16ff95->leave($__internal_972d7459eaf0a411dcfd1a4efc399cf5110a9730ab3d2760f0a1f33edd16ff95_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c7bc910ac8c27f3fc41dbf79494fb387d062ec5b5d0825752b4639762b427b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bc910ac8c27f3fc41dbf79494fb387d062ec5b5d0825752b4639762b427b59->enter($__internal_c7bc910ac8c27f3fc41dbf79494fb387d062ec5b5d0825752b4639762b427b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9e519c2809f8cc565e7b475a62121ca5d7543756e3496cb6298590b4e8c7ee73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e519c2809f8cc565e7b475a62121ca5d7543756e3496cb6298590b4e8c7ee73->enter($__internal_9e519c2809f8cc565e7b475a62121ca5d7543756e3496cb6298590b4e8c7ee73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e519c2809f8cc565e7b475a62121ca5d7543756e3496cb6298590b4e8c7ee73->leave($__internal_9e519c2809f8cc565e7b475a62121ca5d7543756e3496cb6298590b4e8c7ee73_prof);

        
        $__internal_c7bc910ac8c27f3fc41dbf79494fb387d062ec5b5d0825752b4639762b427b59->leave($__internal_c7bc910ac8c27f3fc41dbf79494fb387d062ec5b5d0825752b4639762b427b59_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2025098bd362351e05bddb41963a3e77d8a8d96ea3892b7e3ebcab5f824a34ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2025098bd362351e05bddb41963a3e77d8a8d96ea3892b7e3ebcab5f824a34ce->enter($__internal_2025098bd362351e05bddb41963a3e77d8a8d96ea3892b7e3ebcab5f824a34ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ba158d0609d94419cf9a86f27ab4a93fc6bf5edceee2f3d6d498d5e09a1c93b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba158d0609d94419cf9a86f27ab4a93fc6bf5edceee2f3d6d498d5e09a1c93b2->enter($__internal_ba158d0609d94419cf9a86f27ab4a93fc6bf5edceee2f3d6d498d5e09a1c93b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba158d0609d94419cf9a86f27ab4a93fc6bf5edceee2f3d6d498d5e09a1c93b2->leave($__internal_ba158d0609d94419cf9a86f27ab4a93fc6bf5edceee2f3d6d498d5e09a1c93b2_prof);

        
        $__internal_2025098bd362351e05bddb41963a3e77d8a8d96ea3892b7e3ebcab5f824a34ce->leave($__internal_2025098bd362351e05bddb41963a3e77d8a8d96ea3892b7e3ebcab5f824a34ce_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2b3f4a9725d687bcf9c4cf4b41c55ae9f14cb6a99ae7b7cb19e1e663e686baee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3f4a9725d687bcf9c4cf4b41c55ae9f14cb6a99ae7b7cb19e1e663e686baee->enter($__internal_2b3f4a9725d687bcf9c4cf4b41c55ae9f14cb6a99ae7b7cb19e1e663e686baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0e6c532f1641301755a1a7a7d3f6ada012030cbdd15f96981909673ff04e5061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6c532f1641301755a1a7a7d3f6ada012030cbdd15f96981909673ff04e5061->enter($__internal_0e6c532f1641301755a1a7a7d3f6ada012030cbdd15f96981909673ff04e5061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_0e6c532f1641301755a1a7a7d3f6ada012030cbdd15f96981909673ff04e5061->leave($__internal_0e6c532f1641301755a1a7a7d3f6ada012030cbdd15f96981909673ff04e5061_prof);

        
        $__internal_2b3f4a9725d687bcf9c4cf4b41c55ae9f14cb6a99ae7b7cb19e1e663e686baee->leave($__internal_2b3f4a9725d687bcf9c4cf4b41c55ae9f14cb6a99ae7b7cb19e1e663e686baee_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0642ac3595e1a3c9b29be508655ea323aad7553911868eead17ff026e9c550cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0642ac3595e1a3c9b29be508655ea323aad7553911868eead17ff026e9c550cc->enter($__internal_0642ac3595e1a3c9b29be508655ea323aad7553911868eead17ff026e9c550cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fe610a8fff2609591d7aa19ac9a2e2b228ebaa89009ad0360e1cf7a10161c017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe610a8fff2609591d7aa19ac9a2e2b228ebaa89009ad0360e1cf7a10161c017->enter($__internal_fe610a8fff2609591d7aa19ac9a2e2b228ebaa89009ad0360e1cf7a10161c017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_fe610a8fff2609591d7aa19ac9a2e2b228ebaa89009ad0360e1cf7a10161c017->leave($__internal_fe610a8fff2609591d7aa19ac9a2e2b228ebaa89009ad0360e1cf7a10161c017_prof);

        
        $__internal_0642ac3595e1a3c9b29be508655ea323aad7553911868eead17ff026e9c550cc->leave($__internal_0642ac3595e1a3c9b29be508655ea323aad7553911868eead17ff026e9c550cc_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6656dda05504bce77fc2827bf7a3f658f1ee22b970735f705304182516d99a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6656dda05504bce77fc2827bf7a3f658f1ee22b970735f705304182516d99a74->enter($__internal_6656dda05504bce77fc2827bf7a3f658f1ee22b970735f705304182516d99a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9ee3f9889c5d8224ae33d6aeca0b343ddbe743dbb0fc17f62696307e99836796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee3f9889c5d8224ae33d6aeca0b343ddbe743dbb0fc17f62696307e99836796->enter($__internal_9ee3f9889c5d8224ae33d6aeca0b343ddbe743dbb0fc17f62696307e99836796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_9ee3f9889c5d8224ae33d6aeca0b343ddbe743dbb0fc17f62696307e99836796->leave($__internal_9ee3f9889c5d8224ae33d6aeca0b343ddbe743dbb0fc17f62696307e99836796_prof);

        
        $__internal_6656dda05504bce77fc2827bf7a3f658f1ee22b970735f705304182516d99a74->leave($__internal_6656dda05504bce77fc2827bf7a3f658f1ee22b970735f705304182516d99a74_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
