<?php

/* knp_menu.html.twig */
class __TwigTemplate_b08a472cb93e3e663321efdb02e10b128c8caeb0b22c26e28636d629416cd5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f217fe751229828bfe1f54149417930827d8a6c5da7eb72d3c5f93cc2502957e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f217fe751229828bfe1f54149417930827d8a6c5da7eb72d3c5f93cc2502957e->enter($__internal_f217fe751229828bfe1f54149417930827d8a6c5da7eb72d3c5f93cc2502957e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_2b148f7ed97043a53c24e4c46ce57238938384b7300ac37412dcec2065c37e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b148f7ed97043a53c24e4c46ce57238938384b7300ac37412dcec2065c37e30->enter($__internal_2b148f7ed97043a53c24e4c46ce57238938384b7300ac37412dcec2065c37e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f217fe751229828bfe1f54149417930827d8a6c5da7eb72d3c5f93cc2502957e->leave($__internal_f217fe751229828bfe1f54149417930827d8a6c5da7eb72d3c5f93cc2502957e_prof);

        
        $__internal_2b148f7ed97043a53c24e4c46ce57238938384b7300ac37412dcec2065c37e30->leave($__internal_2b148f7ed97043a53c24e4c46ce57238938384b7300ac37412dcec2065c37e30_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_1ec7f512f2ee3339724e58e175e3a43a59adbaf090533f29e8cf5330f1a256ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec7f512f2ee3339724e58e175e3a43a59adbaf090533f29e8cf5330f1a256ad->enter($__internal_1ec7f512f2ee3339724e58e175e3a43a59adbaf090533f29e8cf5330f1a256ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_a4d8057d8b7eeeebc651777011fbbf73abd342a2df578344d14a95465e06cc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d8057d8b7eeeebc651777011fbbf73abd342a2df578344d14a95465e06cc84->enter($__internal_a4d8057d8b7eeeebc651777011fbbf73abd342a2df578344d14a95465e06cc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a4d8057d8b7eeeebc651777011fbbf73abd342a2df578344d14a95465e06cc84->leave($__internal_a4d8057d8b7eeeebc651777011fbbf73abd342a2df578344d14a95465e06cc84_prof);

        
        $__internal_1ec7f512f2ee3339724e58e175e3a43a59adbaf090533f29e8cf5330f1a256ad->leave($__internal_1ec7f512f2ee3339724e58e175e3a43a59adbaf090533f29e8cf5330f1a256ad_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_ee7115ea493bb23df88f13560d8a8984f799e257184f14476b19419d0d165186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7115ea493bb23df88f13560d8a8984f799e257184f14476b19419d0d165186->enter($__internal_ee7115ea493bb23df88f13560d8a8984f799e257184f14476b19419d0d165186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_19fb27324d8d0625ac9ac22f8461ed8a425a96599dfb0224d557afa90dfbc665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fb27324d8d0625ac9ac22f8461ed8a425a96599dfb0224d557afa90dfbc665->enter($__internal_19fb27324d8d0625ac9ac22f8461ed8a425a96599dfb0224d557afa90dfbc665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_19fb27324d8d0625ac9ac22f8461ed8a425a96599dfb0224d557afa90dfbc665->leave($__internal_19fb27324d8d0625ac9ac22f8461ed8a425a96599dfb0224d557afa90dfbc665_prof);

        
        $__internal_ee7115ea493bb23df88f13560d8a8984f799e257184f14476b19419d0d165186->leave($__internal_ee7115ea493bb23df88f13560d8a8984f799e257184f14476b19419d0d165186_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_8c719f0f3e5cc86db780975ca655514c7b5f39b0e6bf7016936fbb32f8408b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c719f0f3e5cc86db780975ca655514c7b5f39b0e6bf7016936fbb32f8408b66->enter($__internal_8c719f0f3e5cc86db780975ca655514c7b5f39b0e6bf7016936fbb32f8408b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_40b9128d44e1558f1ac627cc5666b194be3dfbea701ec4ec3a9163d10615ab30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b9128d44e1558f1ac627cc5666b194be3dfbea701ec4ec3a9163d10615ab30->enter($__internal_40b9128d44e1558f1ac627cc5666b194be3dfbea701ec4ec3a9163d10615ab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_40b9128d44e1558f1ac627cc5666b194be3dfbea701ec4ec3a9163d10615ab30->leave($__internal_40b9128d44e1558f1ac627cc5666b194be3dfbea701ec4ec3a9163d10615ab30_prof);

        
        $__internal_8c719f0f3e5cc86db780975ca655514c7b5f39b0e6bf7016936fbb32f8408b66->leave($__internal_8c719f0f3e5cc86db780975ca655514c7b5f39b0e6bf7016936fbb32f8408b66_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_f6f42f8de982716e0188f2eb406c79f92892fccdc58346a2137fd05577705375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f42f8de982716e0188f2eb406c79f92892fccdc58346a2137fd05577705375->enter($__internal_f6f42f8de982716e0188f2eb406c79f92892fccdc58346a2137fd05577705375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_56d12d2fa8d331ee209ebe9b873c394ac474319639d5380fe511c8a3038a72c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d12d2fa8d331ee209ebe9b873c394ac474319639d5380fe511c8a3038a72c5->enter($__internal_56d12d2fa8d331ee209ebe9b873c394ac474319639d5380fe511c8a3038a72c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_56d12d2fa8d331ee209ebe9b873c394ac474319639d5380fe511c8a3038a72c5->leave($__internal_56d12d2fa8d331ee209ebe9b873c394ac474319639d5380fe511c8a3038a72c5_prof);

        
        $__internal_f6f42f8de982716e0188f2eb406c79f92892fccdc58346a2137fd05577705375->leave($__internal_f6f42f8de982716e0188f2eb406c79f92892fccdc58346a2137fd05577705375_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_da482135d19d4dd9f8a7c24c124493ed115229af645912d2d276b0dfaf2e999f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da482135d19d4dd9f8a7c24c124493ed115229af645912d2d276b0dfaf2e999f->enter($__internal_da482135d19d4dd9f8a7c24c124493ed115229af645912d2d276b0dfaf2e999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_2c9121f031949e1308504bda287e40095c4a2c9789056f3a76f403fbd4456149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9121f031949e1308504bda287e40095c4a2c9789056f3a76f403fbd4456149->enter($__internal_2c9121f031949e1308504bda287e40095c4a2c9789056f3a76f403fbd4456149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_2c9121f031949e1308504bda287e40095c4a2c9789056f3a76f403fbd4456149->leave($__internal_2c9121f031949e1308504bda287e40095c4a2c9789056f3a76f403fbd4456149_prof);

        
        $__internal_da482135d19d4dd9f8a7c24c124493ed115229af645912d2d276b0dfaf2e999f->leave($__internal_da482135d19d4dd9f8a7c24c124493ed115229af645912d2d276b0dfaf2e999f_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_668fbce7918edcbe12df7bf29b10c777b66f826f0decae3d8671850c629fdb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668fbce7918edcbe12df7bf29b10c777b66f826f0decae3d8671850c629fdb51->enter($__internal_668fbce7918edcbe12df7bf29b10c777b66f826f0decae3d8671850c629fdb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_19799c76da160f7d00709cc783a713e2ed82c4804f725933540047685781712d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19799c76da160f7d00709cc783a713e2ed82c4804f725933540047685781712d->enter($__internal_19799c76da160f7d00709cc783a713e2ed82c4804f725933540047685781712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_19799c76da160f7d00709cc783a713e2ed82c4804f725933540047685781712d->leave($__internal_19799c76da160f7d00709cc783a713e2ed82c4804f725933540047685781712d_prof);

        
        $__internal_668fbce7918edcbe12df7bf29b10c777b66f826f0decae3d8671850c629fdb51->leave($__internal_668fbce7918edcbe12df7bf29b10c777b66f826f0decae3d8671850c629fdb51_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_4ec897686f5733f9d119b90c9ff01d45365bfba25264638f18b682f22084c084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec897686f5733f9d119b90c9ff01d45365bfba25264638f18b682f22084c084->enter($__internal_4ec897686f5733f9d119b90c9ff01d45365bfba25264638f18b682f22084c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_1b97c9a153ec1f027fbe0b5009da13dfe5f5f751f6c992b29860be20ae4cab21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b97c9a153ec1f027fbe0b5009da13dfe5f5f751f6c992b29860be20ae4cab21->enter($__internal_1b97c9a153ec1f027fbe0b5009da13dfe5f5f751f6c992b29860be20ae4cab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_1b97c9a153ec1f027fbe0b5009da13dfe5f5f751f6c992b29860be20ae4cab21->leave($__internal_1b97c9a153ec1f027fbe0b5009da13dfe5f5f751f6c992b29860be20ae4cab21_prof);

        
        $__internal_4ec897686f5733f9d119b90c9ff01d45365bfba25264638f18b682f22084c084->leave($__internal_4ec897686f5733f9d119b90c9ff01d45365bfba25264638f18b682f22084c084_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_f715172a8968944cf15746d984c55f24ef04bc5cc883b2ddb26e88abc7a51414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f715172a8968944cf15746d984c55f24ef04bc5cc883b2ddb26e88abc7a51414->enter($__internal_f715172a8968944cf15746d984c55f24ef04bc5cc883b2ddb26e88abc7a51414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_8155a41b0e3edb2d72bb212f03a114c9aa91e50eec4f71325d3c6d9a76ef7c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8155a41b0e3edb2d72bb212f03a114c9aa91e50eec4f71325d3c6d9a76ef7c3b->enter($__internal_8155a41b0e3edb2d72bb212f03a114c9aa91e50eec4f71325d3c6d9a76ef7c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_8155a41b0e3edb2d72bb212f03a114c9aa91e50eec4f71325d3c6d9a76ef7c3b->leave($__internal_8155a41b0e3edb2d72bb212f03a114c9aa91e50eec4f71325d3c6d9a76ef7c3b_prof);

        
        $__internal_f715172a8968944cf15746d984c55f24ef04bc5cc883b2ddb26e88abc7a51414->leave($__internal_f715172a8968944cf15746d984c55f24ef04bc5cc883b2ddb26e88abc7a51414_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_786db7268e664e908d913d50ebb5b3a2f2f121c3668caa41f0bfe28a20733b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_786db7268e664e908d913d50ebb5b3a2f2f121c3668caa41f0bfe28a20733b8b->enter($__internal_786db7268e664e908d913d50ebb5b3a2f2f121c3668caa41f0bfe28a20733b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_d5350b4c424e5cdad12e0a29a8bdfa354e7380e4039b84fea7e659abce632034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d5350b4c424e5cdad12e0a29a8bdfa354e7380e4039b84fea7e659abce632034->enter($__internal_d5350b4c424e5cdad12e0a29a8bdfa354e7380e4039b84fea7e659abce632034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_d5350b4c424e5cdad12e0a29a8bdfa354e7380e4039b84fea7e659abce632034->leave($__internal_d5350b4c424e5cdad12e0a29a8bdfa354e7380e4039b84fea7e659abce632034_prof);

            
            $__internal_786db7268e664e908d913d50ebb5b3a2f2f121c3668caa41f0bfe28a20733b8b->leave($__internal_786db7268e664e908d913d50ebb5b3a2f2f121c3668caa41f0bfe28a20733b8b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
