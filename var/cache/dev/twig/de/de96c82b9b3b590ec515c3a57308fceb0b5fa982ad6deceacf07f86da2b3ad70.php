<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_78c03d7aa14b8e33d83484233321ef3d7a8622dca05166fff8249a99f88ede44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e49d889fcf05e721597254697f9d9fed360659461abd88a5243f49dc6aef2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e49d889fcf05e721597254697f9d9fed360659461abd88a5243f49dc6aef2f2->enter($__internal_6e49d889fcf05e721597254697f9d9fed360659461abd88a5243f49dc6aef2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2f294863397c72f75196ecc730b56179fb161d6e04245226bd6d643912203ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f294863397c72f75196ecc730b56179fb161d6e04245226bd6d643912203ddf->enter($__internal_2f294863397c72f75196ecc730b56179fb161d6e04245226bd6d643912203ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_6e49d889fcf05e721597254697f9d9fed360659461abd88a5243f49dc6aef2f2->leave($__internal_6e49d889fcf05e721597254697f9d9fed360659461abd88a5243f49dc6aef2f2_prof);

        
        $__internal_2f294863397c72f75196ecc730b56179fb161d6e04245226bd6d643912203ddf->leave($__internal_2f294863397c72f75196ecc730b56179fb161d6e04245226bd6d643912203ddf_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a3f8b18eeed3c97ce202b97935600d631bb6ba21b697aa623b29b6fcc7bb1d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f8b18eeed3c97ce202b97935600d631bb6ba21b697aa623b29b6fcc7bb1d2a->enter($__internal_a3f8b18eeed3c97ce202b97935600d631bb6ba21b697aa623b29b6fcc7bb1d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_316c37a7fe4c743af0042a0702d062cf464146aec0fa8f5f37cfa8ae45726ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316c37a7fe4c743af0042a0702d062cf464146aec0fa8f5f37cfa8ae45726ffb->enter($__internal_316c37a7fe4c743af0042a0702d062cf464146aec0fa8f5f37cfa8ae45726ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_316c37a7fe4c743af0042a0702d062cf464146aec0fa8f5f37cfa8ae45726ffb->leave($__internal_316c37a7fe4c743af0042a0702d062cf464146aec0fa8f5f37cfa8ae45726ffb_prof);

        
        $__internal_a3f8b18eeed3c97ce202b97935600d631bb6ba21b697aa623b29b6fcc7bb1d2a->leave($__internal_a3f8b18eeed3c97ce202b97935600d631bb6ba21b697aa623b29b6fcc7bb1d2a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cb181726488daf8f9bc03c98d57055fe1db66abe5146ede3beffcc5b8ec85c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb181726488daf8f9bc03c98d57055fe1db66abe5146ede3beffcc5b8ec85c33->enter($__internal_cb181726488daf8f9bc03c98d57055fe1db66abe5146ede3beffcc5b8ec85c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cadb4ca4d2efc99349fe8fdaf0650353f1d92b27214193bc3cb23b10cc53a4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadb4ca4d2efc99349fe8fdaf0650353f1d92b27214193bc3cb23b10cc53a4d0->enter($__internal_cadb4ca4d2efc99349fe8fdaf0650353f1d92b27214193bc3cb23b10cc53a4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cadb4ca4d2efc99349fe8fdaf0650353f1d92b27214193bc3cb23b10cc53a4d0->leave($__internal_cadb4ca4d2efc99349fe8fdaf0650353f1d92b27214193bc3cb23b10cc53a4d0_prof);

        
        $__internal_cb181726488daf8f9bc03c98d57055fe1db66abe5146ede3beffcc5b8ec85c33->leave($__internal_cb181726488daf8f9bc03c98d57055fe1db66abe5146ede3beffcc5b8ec85c33_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a7342207b5a3a12c5f9d48e320a705de781527f3325d1f6c4069b89b2d02591a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7342207b5a3a12c5f9d48e320a705de781527f3325d1f6c4069b89b2d02591a->enter($__internal_a7342207b5a3a12c5f9d48e320a705de781527f3325d1f6c4069b89b2d02591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4b8f807f1c6675627909f1ce27ff74885959ab02111d4162b395b544ba493452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8f807f1c6675627909f1ce27ff74885959ab02111d4162b395b544ba493452->enter($__internal_4b8f807f1c6675627909f1ce27ff74885959ab02111d4162b395b544ba493452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_4b8f807f1c6675627909f1ce27ff74885959ab02111d4162b395b544ba493452->leave($__internal_4b8f807f1c6675627909f1ce27ff74885959ab02111d4162b395b544ba493452_prof);

        
        $__internal_a7342207b5a3a12c5f9d48e320a705de781527f3325d1f6c4069b89b2d02591a->leave($__internal_a7342207b5a3a12c5f9d48e320a705de781527f3325d1f6c4069b89b2d02591a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a97de51e6efe62696bb5dfefb86dd9657c544aa9396b0c59c5c0a7573f221232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97de51e6efe62696bb5dfefb86dd9657c544aa9396b0c59c5c0a7573f221232->enter($__internal_a97de51e6efe62696bb5dfefb86dd9657c544aa9396b0c59c5c0a7573f221232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_20d1ef16f4da8ca4ec2b249d051207a481278488040b2dfbc93d8dfe2ddb1815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d1ef16f4da8ca4ec2b249d051207a481278488040b2dfbc93d8dfe2ddb1815->enter($__internal_20d1ef16f4da8ca4ec2b249d051207a481278488040b2dfbc93d8dfe2ddb1815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_20d1ef16f4da8ca4ec2b249d051207a481278488040b2dfbc93d8dfe2ddb1815->leave($__internal_20d1ef16f4da8ca4ec2b249d051207a481278488040b2dfbc93d8dfe2ddb1815_prof);

        
        $__internal_a97de51e6efe62696bb5dfefb86dd9657c544aa9396b0c59c5c0a7573f221232->leave($__internal_a97de51e6efe62696bb5dfefb86dd9657c544aa9396b0c59c5c0a7573f221232_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cc5aad2a584b7fb292122f9855804d7f85a01dfddd67a0486f15e6314918823a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5aad2a584b7fb292122f9855804d7f85a01dfddd67a0486f15e6314918823a->enter($__internal_cc5aad2a584b7fb292122f9855804d7f85a01dfddd67a0486f15e6314918823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_69d4cdcd6b1553ef300a26229a2d2de69c48408a5489646b1ff052fe2f38a04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d4cdcd6b1553ef300a26229a2d2de69c48408a5489646b1ff052fe2f38a04e->enter($__internal_69d4cdcd6b1553ef300a26229a2d2de69c48408a5489646b1ff052fe2f38a04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_69d4cdcd6b1553ef300a26229a2d2de69c48408a5489646b1ff052fe2f38a04e->leave($__internal_69d4cdcd6b1553ef300a26229a2d2de69c48408a5489646b1ff052fe2f38a04e_prof);

        
        $__internal_cc5aad2a584b7fb292122f9855804d7f85a01dfddd67a0486f15e6314918823a->leave($__internal_cc5aad2a584b7fb292122f9855804d7f85a01dfddd67a0486f15e6314918823a_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5b32d2667d8e144cb1d2336a2afd78bb783dac08b6cca5ef54d9dd0369328053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b32d2667d8e144cb1d2336a2afd78bb783dac08b6cca5ef54d9dd0369328053->enter($__internal_5b32d2667d8e144cb1d2336a2afd78bb783dac08b6cca5ef54d9dd0369328053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_30a5c2d5636b7bc5bf554eb1b7d2892ff59902e55a5beed9a624b789e842f031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a5c2d5636b7bc5bf554eb1b7d2892ff59902e55a5beed9a624b789e842f031->enter($__internal_30a5c2d5636b7bc5bf554eb1b7d2892ff59902e55a5beed9a624b789e842f031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_30a5c2d5636b7bc5bf554eb1b7d2892ff59902e55a5beed9a624b789e842f031->leave($__internal_30a5c2d5636b7bc5bf554eb1b7d2892ff59902e55a5beed9a624b789e842f031_prof);

        
        $__internal_5b32d2667d8e144cb1d2336a2afd78bb783dac08b6cca5ef54d9dd0369328053->leave($__internal_5b32d2667d8e144cb1d2336a2afd78bb783dac08b6cca5ef54d9dd0369328053_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_313d58c9787c5524899940f5a8eac2497ab930e5abb5a2a3c5577a1ee7cbcd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313d58c9787c5524899940f5a8eac2497ab930e5abb5a2a3c5577a1ee7cbcd7a->enter($__internal_313d58c9787c5524899940f5a8eac2497ab930e5abb5a2a3c5577a1ee7cbcd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_f75b8b0e87ba80c44b0f639aab0d6c671be1faaf33182c5195cbeb97a68e85ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75b8b0e87ba80c44b0f639aab0d6c671be1faaf33182c5195cbeb97a68e85ad->enter($__internal_f75b8b0e87ba80c44b0f639aab0d6c671be1faaf33182c5195cbeb97a68e85ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f75b8b0e87ba80c44b0f639aab0d6c671be1faaf33182c5195cbeb97a68e85ad->leave($__internal_f75b8b0e87ba80c44b0f639aab0d6c671be1faaf33182c5195cbeb97a68e85ad_prof);

        
        $__internal_313d58c9787c5524899940f5a8eac2497ab930e5abb5a2a3c5577a1ee7cbcd7a->leave($__internal_313d58c9787c5524899940f5a8eac2497ab930e5abb5a2a3c5577a1ee7cbcd7a_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e24be94a0bdaacea6dc4b3c32873625aec0c034e82a75de2b737eb82ba0de082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24be94a0bdaacea6dc4b3c32873625aec0c034e82a75de2b737eb82ba0de082->enter($__internal_e24be94a0bdaacea6dc4b3c32873625aec0c034e82a75de2b737eb82ba0de082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7ec247d429f4fb9ab736b7755753cfb558410c80f4539a34b6500a0890feaaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec247d429f4fb9ab736b7755753cfb558410c80f4539a34b6500a0890feaaa6->enter($__internal_7ec247d429f4fb9ab736b7755753cfb558410c80f4539a34b6500a0890feaaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7ec247d429f4fb9ab736b7755753cfb558410c80f4539a34b6500a0890feaaa6->leave($__internal_7ec247d429f4fb9ab736b7755753cfb558410c80f4539a34b6500a0890feaaa6_prof);

        
        $__internal_e24be94a0bdaacea6dc4b3c32873625aec0c034e82a75de2b737eb82ba0de082->leave($__internal_e24be94a0bdaacea6dc4b3c32873625aec0c034e82a75de2b737eb82ba0de082_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_310478806983754536d9738892aff5b570d0ffa8fc2427463fb2d5eb22f71853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310478806983754536d9738892aff5b570d0ffa8fc2427463fb2d5eb22f71853->enter($__internal_310478806983754536d9738892aff5b570d0ffa8fc2427463fb2d5eb22f71853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_74a9398a9de778bb3837d6615b7afac55a42c3ea83e52268350b3e2963d9cca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a9398a9de778bb3837d6615b7afac55a42c3ea83e52268350b3e2963d9cca6->enter($__internal_74a9398a9de778bb3837d6615b7afac55a42c3ea83e52268350b3e2963d9cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_74a9398a9de778bb3837d6615b7afac55a42c3ea83e52268350b3e2963d9cca6->leave($__internal_74a9398a9de778bb3837d6615b7afac55a42c3ea83e52268350b3e2963d9cca6_prof);

        
        $__internal_310478806983754536d9738892aff5b570d0ffa8fc2427463fb2d5eb22f71853->leave($__internal_310478806983754536d9738892aff5b570d0ffa8fc2427463fb2d5eb22f71853_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_9849efa179f409ef689d71203a5a1bffc0e6bea2f9e5c9a83d47a38d79a15b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9849efa179f409ef689d71203a5a1bffc0e6bea2f9e5c9a83d47a38d79a15b27->enter($__internal_9849efa179f409ef689d71203a5a1bffc0e6bea2f9e5c9a83d47a38d79a15b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2f5a79268ca2d8d65ce182ff9e9db5fec806fa5d42a7a8dd81bedab2a12cb004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5a79268ca2d8d65ce182ff9e9db5fec806fa5d42a7a8dd81bedab2a12cb004->enter($__internal_2f5a79268ca2d8d65ce182ff9e9db5fec806fa5d42a7a8dd81bedab2a12cb004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_2f5a79268ca2d8d65ce182ff9e9db5fec806fa5d42a7a8dd81bedab2a12cb004->leave($__internal_2f5a79268ca2d8d65ce182ff9e9db5fec806fa5d42a7a8dd81bedab2a12cb004_prof);

        
        $__internal_9849efa179f409ef689d71203a5a1bffc0e6bea2f9e5c9a83d47a38d79a15b27->leave($__internal_9849efa179f409ef689d71203a5a1bffc0e6bea2f9e5c9a83d47a38d79a15b27_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\projett1\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
