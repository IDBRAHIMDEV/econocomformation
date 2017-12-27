<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_acb45a52ee70b90b49d96d2b9e5659196e1fe27be6dc98ffd3017547487a65be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_025b382ef1fb973a16d9b9807921c7404ea2a1ffcefdff2ffd36eaf26eee2396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025b382ef1fb973a16d9b9807921c7404ea2a1ffcefdff2ffd36eaf26eee2396->enter($__internal_025b382ef1fb973a16d9b9807921c7404ea2a1ffcefdff2ffd36eaf26eee2396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_2eef1af77c8e1e3d0ece958037d457f7d25c83a9ee613f6f10422f329c128b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eef1af77c8e1e3d0ece958037d457f7d25c83a9ee613f6f10422f329c128b3e->enter($__internal_2eef1af77c8e1e3d0ece958037d457f7d25c83a9ee613f6f10422f329c128b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_025b382ef1fb973a16d9b9807921c7404ea2a1ffcefdff2ffd36eaf26eee2396->leave($__internal_025b382ef1fb973a16d9b9807921c7404ea2a1ffcefdff2ffd36eaf26eee2396_prof);

        
        $__internal_2eef1af77c8e1e3d0ece958037d457f7d25c83a9ee613f6f10422f329c128b3e->leave($__internal_2eef1af77c8e1e3d0ece958037d457f7d25c83a9ee613f6f10422f329c128b3e_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d010e8daf21b527bdfbb16befd13aa3c3b65ba058863daab1c904b0b3622d591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d010e8daf21b527bdfbb16befd13aa3c3b65ba058863daab1c904b0b3622d591->enter($__internal_d010e8daf21b527bdfbb16befd13aa3c3b65ba058863daab1c904b0b3622d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_428c5410c148495b83c2f4baedd0797237cb37d0b98d866f953060232d5db64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428c5410c148495b83c2f4baedd0797237cb37d0b98d866f953060232d5db64c->enter($__internal_428c5410c148495b83c2f4baedd0797237cb37d0b98d866f953060232d5db64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_428c5410c148495b83c2f4baedd0797237cb37d0b98d866f953060232d5db64c->leave($__internal_428c5410c148495b83c2f4baedd0797237cb37d0b98d866f953060232d5db64c_prof);

        
        $__internal_d010e8daf21b527bdfbb16befd13aa3c3b65ba058863daab1c904b0b3622d591->leave($__internal_d010e8daf21b527bdfbb16befd13aa3c3b65ba058863daab1c904b0b3622d591_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6bdf2c9b13b91947c5283eee457c2f86cc45723b4d93f65c55cc714d256b71be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdf2c9b13b91947c5283eee457c2f86cc45723b4d93f65c55cc714d256b71be->enter($__internal_6bdf2c9b13b91947c5283eee457c2f86cc45723b4d93f65c55cc714d256b71be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e7a9370483bb9605ea3b4c188273c941b5913308d4a10e97dc0ba2efde28185a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a9370483bb9605ea3b4c188273c941b5913308d4a10e97dc0ba2efde28185a->enter($__internal_e7a9370483bb9605ea3b4c188273c941b5913308d4a10e97dc0ba2efde28185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e7a9370483bb9605ea3b4c188273c941b5913308d4a10e97dc0ba2efde28185a->leave($__internal_e7a9370483bb9605ea3b4c188273c941b5913308d4a10e97dc0ba2efde28185a_prof);

        
        $__internal_6bdf2c9b13b91947c5283eee457c2f86cc45723b4d93f65c55cc714d256b71be->leave($__internal_6bdf2c9b13b91947c5283eee457c2f86cc45723b4d93f65c55cc714d256b71be_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2fdc7f6748ed255c801d30799401d859f4612f11fd836525a8ac982db93277ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdc7f6748ed255c801d30799401d859f4612f11fd836525a8ac982db93277ac->enter($__internal_2fdc7f6748ed255c801d30799401d859f4612f11fd836525a8ac982db93277ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0cdba7c433c499154f001267373df481c7abfc3f21be6760890a9639dc1538dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdba7c433c499154f001267373df481c7abfc3f21be6760890a9639dc1538dd->enter($__internal_0cdba7c433c499154f001267373df481c7abfc3f21be6760890a9639dc1538dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0cdba7c433c499154f001267373df481c7abfc3f21be6760890a9639dc1538dd->leave($__internal_0cdba7c433c499154f001267373df481c7abfc3f21be6760890a9639dc1538dd_prof);

        
        $__internal_2fdc7f6748ed255c801d30799401d859f4612f11fd836525a8ac982db93277ac->leave($__internal_2fdc7f6748ed255c801d30799401d859f4612f11fd836525a8ac982db93277ac_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_220ccd9d50a73e297a2e972066e3da8f1e12174aa1e42f2f62c83d93dbd90438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220ccd9d50a73e297a2e972066e3da8f1e12174aa1e42f2f62c83d93dbd90438->enter($__internal_220ccd9d50a73e297a2e972066e3da8f1e12174aa1e42f2f62c83d93dbd90438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f5e4c013fb51c81ef6dbfc76485768f3d1f9a2c472ec87091e2c0ee9c5564fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e4c013fb51c81ef6dbfc76485768f3d1f9a2c472ec87091e2c0ee9c5564fb8->enter($__internal_f5e4c013fb51c81ef6dbfc76485768f3d1f9a2c472ec87091e2c0ee9c5564fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_f5e4c013fb51c81ef6dbfc76485768f3d1f9a2c472ec87091e2c0ee9c5564fb8->leave($__internal_f5e4c013fb51c81ef6dbfc76485768f3d1f9a2c472ec87091e2c0ee9c5564fb8_prof);

        
        $__internal_220ccd9d50a73e297a2e972066e3da8f1e12174aa1e42f2f62c83d93dbd90438->leave($__internal_220ccd9d50a73e297a2e972066e3da8f1e12174aa1e42f2f62c83d93dbd90438_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_137b18a29e372d8f89a98052ea98c0f812b3c32c5f7e1db32b9f66d7d1099993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137b18a29e372d8f89a98052ea98c0f812b3c32c5f7e1db32b9f66d7d1099993->enter($__internal_137b18a29e372d8f89a98052ea98c0f812b3c32c5f7e1db32b9f66d7d1099993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ef77f3e9b288d8b1356217bc02cec52aa9aa6a74f444650ad899b0ff44148692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef77f3e9b288d8b1356217bc02cec52aa9aa6a74f444650ad899b0ff44148692->enter($__internal_ef77f3e9b288d8b1356217bc02cec52aa9aa6a74f444650ad899b0ff44148692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_ef77f3e9b288d8b1356217bc02cec52aa9aa6a74f444650ad899b0ff44148692->leave($__internal_ef77f3e9b288d8b1356217bc02cec52aa9aa6a74f444650ad899b0ff44148692_prof);

        
        $__internal_137b18a29e372d8f89a98052ea98c0f812b3c32c5f7e1db32b9f66d7d1099993->leave($__internal_137b18a29e372d8f89a98052ea98c0f812b3c32c5f7e1db32b9f66d7d1099993_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8615cd9b03e788c74ef014f51628f4ed9fc65ddd91e4ca976c160a08530bc866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8615cd9b03e788c74ef014f51628f4ed9fc65ddd91e4ca976c160a08530bc866->enter($__internal_8615cd9b03e788c74ef014f51628f4ed9fc65ddd91e4ca976c160a08530bc866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2c22b69656d4c9f5a512f4adfff8e34e545e0d0c3dad923f9c8ecec63ceab6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c22b69656d4c9f5a512f4adfff8e34e545e0d0c3dad923f9c8ecec63ceab6aa->enter($__internal_2c22b69656d4c9f5a512f4adfff8e34e545e0d0c3dad923f9c8ecec63ceab6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_2c22b69656d4c9f5a512f4adfff8e34e545e0d0c3dad923f9c8ecec63ceab6aa->leave($__internal_2c22b69656d4c9f5a512f4adfff8e34e545e0d0c3dad923f9c8ecec63ceab6aa_prof);

        
        $__internal_8615cd9b03e788c74ef014f51628f4ed9fc65ddd91e4ca976c160a08530bc866->leave($__internal_8615cd9b03e788c74ef014f51628f4ed9fc65ddd91e4ca976c160a08530bc866_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c24fe8b9b1e0d38024f4957e952a6de6fe7e835944bec22bbd5bccefa0b858c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24fe8b9b1e0d38024f4957e952a6de6fe7e835944bec22bbd5bccefa0b858c0->enter($__internal_c24fe8b9b1e0d38024f4957e952a6de6fe7e835944bec22bbd5bccefa0b858c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_85020ea09360a71147a3cfa094bbc8d6a4be94885b6c5c13d9ddfcd317b69234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85020ea09360a71147a3cfa094bbc8d6a4be94885b6c5c13d9ddfcd317b69234->enter($__internal_85020ea09360a71147a3cfa094bbc8d6a4be94885b6c5c13d9ddfcd317b69234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_85020ea09360a71147a3cfa094bbc8d6a4be94885b6c5c13d9ddfcd317b69234->leave($__internal_85020ea09360a71147a3cfa094bbc8d6a4be94885b6c5c13d9ddfcd317b69234_prof);

        
        $__internal_c24fe8b9b1e0d38024f4957e952a6de6fe7e835944bec22bbd5bccefa0b858c0->leave($__internal_c24fe8b9b1e0d38024f4957e952a6de6fe7e835944bec22bbd5bccefa0b858c0_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7b347ff445e655843f4fd9ba7a32686b3f62d4ce0740910f57503a109fe57d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b347ff445e655843f4fd9ba7a32686b3f62d4ce0740910f57503a109fe57d0b->enter($__internal_7b347ff445e655843f4fd9ba7a32686b3f62d4ce0740910f57503a109fe57d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d0e138a58e217f050217a7be8d7a212aca854378a505eb2f40ec34b9eb0d2f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e138a58e217f050217a7be8d7a212aca854378a505eb2f40ec34b9eb0d2f48->enter($__internal_d0e138a58e217f050217a7be8d7a212aca854378a505eb2f40ec34b9eb0d2f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_d0e138a58e217f050217a7be8d7a212aca854378a505eb2f40ec34b9eb0d2f48->leave($__internal_d0e138a58e217f050217a7be8d7a212aca854378a505eb2f40ec34b9eb0d2f48_prof);

        
        $__internal_7b347ff445e655843f4fd9ba7a32686b3f62d4ce0740910f57503a109fe57d0b->leave($__internal_7b347ff445e655843f4fd9ba7a32686b3f62d4ce0740910f57503a109fe57d0b_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e24c8b63f2f2006b4380f81f4419e4debe7d51c478479a9b49acd0e1fa641b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24c8b63f2f2006b4380f81f4419e4debe7d51c478479a9b49acd0e1fa641b0b->enter($__internal_e24c8b63f2f2006b4380f81f4419e4debe7d51c478479a9b49acd0e1fa641b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a66a27ac4bf5f35ffee9a9f321dbeba21721128d815ca53029aed6b151658280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66a27ac4bf5f35ffee9a9f321dbeba21721128d815ca53029aed6b151658280->enter($__internal_a66a27ac4bf5f35ffee9a9f321dbeba21721128d815ca53029aed6b151658280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_a66a27ac4bf5f35ffee9a9f321dbeba21721128d815ca53029aed6b151658280->leave($__internal_a66a27ac4bf5f35ffee9a9f321dbeba21721128d815ca53029aed6b151658280_prof);

        
        $__internal_e24c8b63f2f2006b4380f81f4419e4debe7d51c478479a9b49acd0e1fa641b0b->leave($__internal_e24c8b63f2f2006b4380f81f4419e4debe7d51c478479a9b49acd0e1fa641b0b_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7ee25515547cf6204c788c6dccdb7c3720ccaa59fdf3083c69318033d2990131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee25515547cf6204c788c6dccdb7c3720ccaa59fdf3083c69318033d2990131->enter($__internal_7ee25515547cf6204c788c6dccdb7c3720ccaa59fdf3083c69318033d2990131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_013681cb3176c956d36ac4fb29aebc1411fa0a253b9a58871ebaae14fd3b147f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013681cb3176c956d36ac4fb29aebc1411fa0a253b9a58871ebaae14fd3b147f->enter($__internal_013681cb3176c956d36ac4fb29aebc1411fa0a253b9a58871ebaae14fd3b147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_013681cb3176c956d36ac4fb29aebc1411fa0a253b9a58871ebaae14fd3b147f->leave($__internal_013681cb3176c956d36ac4fb29aebc1411fa0a253b9a58871ebaae14fd3b147f_prof);

        
        $__internal_7ee25515547cf6204c788c6dccdb7c3720ccaa59fdf3083c69318033d2990131->leave($__internal_7ee25515547cf6204c788c6dccdb7c3720ccaa59fdf3083c69318033d2990131_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f9f6c72d9bc121fa90f3a68fc1f93fb01d40ad128c26ee7ebdd798afd496bf76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f6c72d9bc121fa90f3a68fc1f93fb01d40ad128c26ee7ebdd798afd496bf76->enter($__internal_f9f6c72d9bc121fa90f3a68fc1f93fb01d40ad128c26ee7ebdd798afd496bf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_54d02de0bf4aea6151b3de1cf2049e0ba254b98f41b2d6b13b7bca50f2834090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d02de0bf4aea6151b3de1cf2049e0ba254b98f41b2d6b13b7bca50f2834090->enter($__internal_54d02de0bf4aea6151b3de1cf2049e0ba254b98f41b2d6b13b7bca50f2834090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_54d02de0bf4aea6151b3de1cf2049e0ba254b98f41b2d6b13b7bca50f2834090->leave($__internal_54d02de0bf4aea6151b3de1cf2049e0ba254b98f41b2d6b13b7bca50f2834090_prof);

        
        $__internal_f9f6c72d9bc121fa90f3a68fc1f93fb01d40ad128c26ee7ebdd798afd496bf76->leave($__internal_f9f6c72d9bc121fa90f3a68fc1f93fb01d40ad128c26ee7ebdd798afd496bf76_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_eb41dcc97db36a98ed288432312b6d753c7309a1ed151d146b8671ef7e0f7926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb41dcc97db36a98ed288432312b6d753c7309a1ed151d146b8671ef7e0f7926->enter($__internal_eb41dcc97db36a98ed288432312b6d753c7309a1ed151d146b8671ef7e0f7926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6cc72ee6173d6fec914e8abf1e733eb8d71d2a88596367ef4ebf5c66835f965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc72ee6173d6fec914e8abf1e733eb8d71d2a88596367ef4ebf5c66835f965b->enter($__internal_6cc72ee6173d6fec914e8abf1e733eb8d71d2a88596367ef4ebf5c66835f965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_6cc72ee6173d6fec914e8abf1e733eb8d71d2a88596367ef4ebf5c66835f965b->leave($__internal_6cc72ee6173d6fec914e8abf1e733eb8d71d2a88596367ef4ebf5c66835f965b_prof);

        
        $__internal_eb41dcc97db36a98ed288432312b6d753c7309a1ed151d146b8671ef7e0f7926->leave($__internal_eb41dcc97db36a98ed288432312b6d753c7309a1ed151d146b8671ef7e0f7926_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_52c8bbb9975750e989ce1172ae9e6a020ba5cc513bd526b5a343ef2c9801392e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c8bbb9975750e989ce1172ae9e6a020ba5cc513bd526b5a343ef2c9801392e->enter($__internal_52c8bbb9975750e989ce1172ae9e6a020ba5cc513bd526b5a343ef2c9801392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_34ffff073a2efbdd0b1496111931eb9fb006456c8355fbd53165edbd72fcf486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ffff073a2efbdd0b1496111931eb9fb006456c8355fbd53165edbd72fcf486->enter($__internal_34ffff073a2efbdd0b1496111931eb9fb006456c8355fbd53165edbd72fcf486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_34ffff073a2efbdd0b1496111931eb9fb006456c8355fbd53165edbd72fcf486->leave($__internal_34ffff073a2efbdd0b1496111931eb9fb006456c8355fbd53165edbd72fcf486_prof);

        
        $__internal_52c8bbb9975750e989ce1172ae9e6a020ba5cc513bd526b5a343ef2c9801392e->leave($__internal_52c8bbb9975750e989ce1172ae9e6a020ba5cc513bd526b5a343ef2c9801392e_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e2ae5f10d19d5baee0fcd284bf6201546a5571d735b7c28ae0d181305ae493d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ae5f10d19d5baee0fcd284bf6201546a5571d735b7c28ae0d181305ae493d5->enter($__internal_e2ae5f10d19d5baee0fcd284bf6201546a5571d735b7c28ae0d181305ae493d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c1f163f8fa9ba1f88e38310162430dc7a4559b22730621d43605f8f5d64cfe28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f163f8fa9ba1f88e38310162430dc7a4559b22730621d43605f8f5d64cfe28->enter($__internal_c1f163f8fa9ba1f88e38310162430dc7a4559b22730621d43605f8f5d64cfe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c1f163f8fa9ba1f88e38310162430dc7a4559b22730621d43605f8f5d64cfe28->leave($__internal_c1f163f8fa9ba1f88e38310162430dc7a4559b22730621d43605f8f5d64cfe28_prof);

        
        $__internal_e2ae5f10d19d5baee0fcd284bf6201546a5571d735b7c28ae0d181305ae493d5->leave($__internal_e2ae5f10d19d5baee0fcd284bf6201546a5571d735b7c28ae0d181305ae493d5_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0b8d5cdcde948dc01d8f50a7b45fbb50d5e5fd4db9e953c9388df86eb79efa06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8d5cdcde948dc01d8f50a7b45fbb50d5e5fd4db9e953c9388df86eb79efa06->enter($__internal_0b8d5cdcde948dc01d8f50a7b45fbb50d5e5fd4db9e953c9388df86eb79efa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_29fdf5da5229c154de095d158d015290dabc984629129327786ae17692c8ceb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fdf5da5229c154de095d158d015290dabc984629129327786ae17692c8ceb0->enter($__internal_29fdf5da5229c154de095d158d015290dabc984629129327786ae17692c8ceb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_29fdf5da5229c154de095d158d015290dabc984629129327786ae17692c8ceb0->leave($__internal_29fdf5da5229c154de095d158d015290dabc984629129327786ae17692c8ceb0_prof);

        
        $__internal_0b8d5cdcde948dc01d8f50a7b45fbb50d5e5fd4db9e953c9388df86eb79efa06->leave($__internal_0b8d5cdcde948dc01d8f50a7b45fbb50d5e5fd4db9e953c9388df86eb79efa06_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_43ee2ab52c2a3516f420d11ab00c24b2f1eb858ffcb40ea4e07ec22370bfe635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ee2ab52c2a3516f420d11ab00c24b2f1eb858ffcb40ea4e07ec22370bfe635->enter($__internal_43ee2ab52c2a3516f420d11ab00c24b2f1eb858ffcb40ea4e07ec22370bfe635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ad45f069fa9d7627dcc5c84ea5ea692bf338238f72ed8673304e57ee71316bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad45f069fa9d7627dcc5c84ea5ea692bf338238f72ed8673304e57ee71316bb1->enter($__internal_ad45f069fa9d7627dcc5c84ea5ea692bf338238f72ed8673304e57ee71316bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ad45f069fa9d7627dcc5c84ea5ea692bf338238f72ed8673304e57ee71316bb1->leave($__internal_ad45f069fa9d7627dcc5c84ea5ea692bf338238f72ed8673304e57ee71316bb1_prof);

        
        $__internal_43ee2ab52c2a3516f420d11ab00c24b2f1eb858ffcb40ea4e07ec22370bfe635->leave($__internal_43ee2ab52c2a3516f420d11ab00c24b2f1eb858ffcb40ea4e07ec22370bfe635_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_629ab289da1254028636ed6fd27291e5abffd7e3d3e7d0855fa158489bee01e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629ab289da1254028636ed6fd27291e5abffd7e3d3e7d0855fa158489bee01e7->enter($__internal_629ab289da1254028636ed6fd27291e5abffd7e3d3e7d0855fa158489bee01e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b3d93ed99de54a921fd4cdd425253263c3ff842815ffa04b47e6412e185495e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d93ed99de54a921fd4cdd425253263c3ff842815ffa04b47e6412e185495e7->enter($__internal_b3d93ed99de54a921fd4cdd425253263c3ff842815ffa04b47e6412e185495e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_b3d93ed99de54a921fd4cdd425253263c3ff842815ffa04b47e6412e185495e7->leave($__internal_b3d93ed99de54a921fd4cdd425253263c3ff842815ffa04b47e6412e185495e7_prof);

        
        $__internal_629ab289da1254028636ed6fd27291e5abffd7e3d3e7d0855fa158489bee01e7->leave($__internal_629ab289da1254028636ed6fd27291e5abffd7e3d3e7d0855fa158489bee01e7_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cbab339e2ff67a82ca5dff6ffe6f247d33d30c51cf7c0cbe8d91abda4f343dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbab339e2ff67a82ca5dff6ffe6f247d33d30c51cf7c0cbe8d91abda4f343dd8->enter($__internal_cbab339e2ff67a82ca5dff6ffe6f247d33d30c51cf7c0cbe8d91abda4f343dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2c951afe7fa4b91d6f4d0ea269b5db5074c47f669b27795f6837a6408fbfcfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c951afe7fa4b91d6f4d0ea269b5db5074c47f669b27795f6837a6408fbfcfbc->enter($__internal_2c951afe7fa4b91d6f4d0ea269b5db5074c47f669b27795f6837a6408fbfcfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_2c951afe7fa4b91d6f4d0ea269b5db5074c47f669b27795f6837a6408fbfcfbc->leave($__internal_2c951afe7fa4b91d6f4d0ea269b5db5074c47f669b27795f6837a6408fbfcfbc_prof);

        
        $__internal_cbab339e2ff67a82ca5dff6ffe6f247d33d30c51cf7c0cbe8d91abda4f343dd8->leave($__internal_cbab339e2ff67a82ca5dff6ffe6f247d33d30c51cf7c0cbe8d91abda4f343dd8_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8f90bf61978339f72d044929a0db9a7bba679389114ac2d9d89ff30debe3df47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f90bf61978339f72d044929a0db9a7bba679389114ac2d9d89ff30debe3df47->enter($__internal_8f90bf61978339f72d044929a0db9a7bba679389114ac2d9d89ff30debe3df47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ac856ca2dc76e24a87a9608577c698282259b13709a77b814c7fe9140563f37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac856ca2dc76e24a87a9608577c698282259b13709a77b814c7fe9140563f37d->enter($__internal_ac856ca2dc76e24a87a9608577c698282259b13709a77b814c7fe9140563f37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ac856ca2dc76e24a87a9608577c698282259b13709a77b814c7fe9140563f37d->leave($__internal_ac856ca2dc76e24a87a9608577c698282259b13709a77b814c7fe9140563f37d_prof);

        
        $__internal_8f90bf61978339f72d044929a0db9a7bba679389114ac2d9d89ff30debe3df47->leave($__internal_8f90bf61978339f72d044929a0db9a7bba679389114ac2d9d89ff30debe3df47_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ad3ee074c06730f6b975feb958fcbc763a4af41c6538d5e18d38e77ffd7f119a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3ee074c06730f6b975feb958fcbc763a4af41c6538d5e18d38e77ffd7f119a->enter($__internal_ad3ee074c06730f6b975feb958fcbc763a4af41c6538d5e18d38e77ffd7f119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_91e1726b63d7c62ed98ac93f45a508ee64290c400968c4d8cdb6330fe8bf3767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e1726b63d7c62ed98ac93f45a508ee64290c400968c4d8cdb6330fe8bf3767->enter($__internal_91e1726b63d7c62ed98ac93f45a508ee64290c400968c4d8cdb6330fe8bf3767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_91e1726b63d7c62ed98ac93f45a508ee64290c400968c4d8cdb6330fe8bf3767->leave($__internal_91e1726b63d7c62ed98ac93f45a508ee64290c400968c4d8cdb6330fe8bf3767_prof);

        
        $__internal_ad3ee074c06730f6b975feb958fcbc763a4af41c6538d5e18d38e77ffd7f119a->leave($__internal_ad3ee074c06730f6b975feb958fcbc763a4af41c6538d5e18d38e77ffd7f119a_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5f77734e93b46b90354bd561880886b99ef55e3f755390a2c6733dc05f4e6ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f77734e93b46b90354bd561880886b99ef55e3f755390a2c6733dc05f4e6ad8->enter($__internal_5f77734e93b46b90354bd561880886b99ef55e3f755390a2c6733dc05f4e6ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f214fb10fee9f69fdcca921ec73bfa0dcc4bff75820379daaee8ad14034b5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f214fb10fee9f69fdcca921ec73bfa0dcc4bff75820379daaee8ad14034b5192->enter($__internal_f214fb10fee9f69fdcca921ec73bfa0dcc4bff75820379daaee8ad14034b5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f214fb10fee9f69fdcca921ec73bfa0dcc4bff75820379daaee8ad14034b5192->leave($__internal_f214fb10fee9f69fdcca921ec73bfa0dcc4bff75820379daaee8ad14034b5192_prof);

        
        $__internal_5f77734e93b46b90354bd561880886b99ef55e3f755390a2c6733dc05f4e6ad8->leave($__internal_5f77734e93b46b90354bd561880886b99ef55e3f755390a2c6733dc05f4e6ad8_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4f5c6b36deb58209636e9a7b4ec6e3ebd2c57dc9e3355c0ddd36b11b7002ec31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5c6b36deb58209636e9a7b4ec6e3ebd2c57dc9e3355c0ddd36b11b7002ec31->enter($__internal_4f5c6b36deb58209636e9a7b4ec6e3ebd2c57dc9e3355c0ddd36b11b7002ec31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9fee2ae16b58e81f4abeda1c7d9bbac3f99859e0da2b5cbeee758317266cbbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fee2ae16b58e81f4abeda1c7d9bbac3f99859e0da2b5cbeee758317266cbbe5->enter($__internal_9fee2ae16b58e81f4abeda1c7d9bbac3f99859e0da2b5cbeee758317266cbbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9fee2ae16b58e81f4abeda1c7d9bbac3f99859e0da2b5cbeee758317266cbbe5->leave($__internal_9fee2ae16b58e81f4abeda1c7d9bbac3f99859e0da2b5cbeee758317266cbbe5_prof);

        
        $__internal_4f5c6b36deb58209636e9a7b4ec6e3ebd2c57dc9e3355c0ddd36b11b7002ec31->leave($__internal_4f5c6b36deb58209636e9a7b4ec6e3ebd2c57dc9e3355c0ddd36b11b7002ec31_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b2d0fbe189e44e9e34c223522a88a088f0dd4fe9b86061d4e54303a118234fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d0fbe189e44e9e34c223522a88a088f0dd4fe9b86061d4e54303a118234fd3->enter($__internal_b2d0fbe189e44e9e34c223522a88a088f0dd4fe9b86061d4e54303a118234fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ad49f883ab2ba59e66ce3ba73cc24cf6d6ab033405eada6e7ed535412e90c2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad49f883ab2ba59e66ce3ba73cc24cf6d6ab033405eada6e7ed535412e90c2dc->enter($__internal_ad49f883ab2ba59e66ce3ba73cc24cf6d6ab033405eada6e7ed535412e90c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ad49f883ab2ba59e66ce3ba73cc24cf6d6ab033405eada6e7ed535412e90c2dc->leave($__internal_ad49f883ab2ba59e66ce3ba73cc24cf6d6ab033405eada6e7ed535412e90c2dc_prof);

        
        $__internal_b2d0fbe189e44e9e34c223522a88a088f0dd4fe9b86061d4e54303a118234fd3->leave($__internal_b2d0fbe189e44e9e34c223522a88a088f0dd4fe9b86061d4e54303a118234fd3_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_220630739fd01795def4247d24fc1090cc9f1f3c7a339486ef49b376a603fe42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220630739fd01795def4247d24fc1090cc9f1f3c7a339486ef49b376a603fe42->enter($__internal_220630739fd01795def4247d24fc1090cc9f1f3c7a339486ef49b376a603fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3c00d7b1c48316ce61f460d3810dc887437e7d48a3f3d34858728d2f3f7894bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c00d7b1c48316ce61f460d3810dc887437e7d48a3f3d34858728d2f3f7894bf->enter($__internal_3c00d7b1c48316ce61f460d3810dc887437e7d48a3f3d34858728d2f3f7894bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_3c00d7b1c48316ce61f460d3810dc887437e7d48a3f3d34858728d2f3f7894bf->leave($__internal_3c00d7b1c48316ce61f460d3810dc887437e7d48a3f3d34858728d2f3f7894bf_prof);

        
        $__internal_220630739fd01795def4247d24fc1090cc9f1f3c7a339486ef49b376a603fe42->leave($__internal_220630739fd01795def4247d24fc1090cc9f1f3c7a339486ef49b376a603fe42_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_41f2b872bf420e045811f482602ab40cbc5d001e0d1dbc565d08e2e98d524158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f2b872bf420e045811f482602ab40cbc5d001e0d1dbc565d08e2e98d524158->enter($__internal_41f2b872bf420e045811f482602ab40cbc5d001e0d1dbc565d08e2e98d524158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2d0c517ad9417e25db8c3f400095213ce947323109125aaa3be8cb5e49ff7a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0c517ad9417e25db8c3f400095213ce947323109125aaa3be8cb5e49ff7a78->enter($__internal_2d0c517ad9417e25db8c3f400095213ce947323109125aaa3be8cb5e49ff7a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2d0c517ad9417e25db8c3f400095213ce947323109125aaa3be8cb5e49ff7a78->leave($__internal_2d0c517ad9417e25db8c3f400095213ce947323109125aaa3be8cb5e49ff7a78_prof);

        
        $__internal_41f2b872bf420e045811f482602ab40cbc5d001e0d1dbc565d08e2e98d524158->leave($__internal_41f2b872bf420e045811f482602ab40cbc5d001e0d1dbc565d08e2e98d524158_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
