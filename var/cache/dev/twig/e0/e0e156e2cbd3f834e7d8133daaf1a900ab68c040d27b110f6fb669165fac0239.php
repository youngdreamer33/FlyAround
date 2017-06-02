<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_3fae9f3f54863132148e375134be7a21138a7fbe4f7fd93739f302f1972330f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c029adbad1479cd7a480e24428a2e4acbc3426dbbe7b1bcf260fe89eab04a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c029adbad1479cd7a480e24428a2e4acbc3426dbbe7b1bcf260fe89eab04a12->enter($__internal_8c029adbad1479cd7a480e24428a2e4acbc3426dbbe7b1bcf260fe89eab04a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_c40214b6f9bc652fe0d3f51d77c420b7234b819e30d53faa97e7ad748eb7293f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40214b6f9bc652fe0d3f51d77c420b7234b819e30d53faa97e7ad748eb7293f->enter($__internal_c40214b6f9bc652fe0d3f51d77c420b7234b819e30d53faa97e7ad748eb7293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_8c029adbad1479cd7a480e24428a2e4acbc3426dbbe7b1bcf260fe89eab04a12->leave($__internal_8c029adbad1479cd7a480e24428a2e4acbc3426dbbe7b1bcf260fe89eab04a12_prof);

        
        $__internal_c40214b6f9bc652fe0d3f51d77c420b7234b819e30d53faa97e7ad748eb7293f->leave($__internal_c40214b6f9bc652fe0d3f51d77c420b7234b819e30d53faa97e7ad748eb7293f_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_010f0f000b25163f5a91ddcdd21ad4e327999614e564c496224afa54fabdbed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010f0f000b25163f5a91ddcdd21ad4e327999614e564c496224afa54fabdbed3->enter($__internal_010f0f000b25163f5a91ddcdd21ad4e327999614e564c496224afa54fabdbed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_6f7bed55040df6c13c5cc7bc8c6762482cf64cfadf1b5ffe49212b42ce20fdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7bed55040df6c13c5cc7bc8c6762482cf64cfadf1b5ffe49212b42ce20fdb9->enter($__internal_6f7bed55040df6c13c5cc7bc8c6762482cf64cfadf1b5ffe49212b42ce20fdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_6f7bed55040df6c13c5cc7bc8c6762482cf64cfadf1b5ffe49212b42ce20fdb9->leave($__internal_6f7bed55040df6c13c5cc7bc8c6762482cf64cfadf1b5ffe49212b42ce20fdb9_prof);

        
        $__internal_010f0f000b25163f5a91ddcdd21ad4e327999614e564c496224afa54fabdbed3->leave($__internal_010f0f000b25163f5a91ddcdd21ad4e327999614e564c496224afa54fabdbed3_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_b74f3d989f7d15464200c55df387eba180742e4bcf172d2319756d3984a2a92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74f3d989f7d15464200c55df387eba180742e4bcf172d2319756d3984a2a92c->enter($__internal_b74f3d989f7d15464200c55df387eba180742e4bcf172d2319756d3984a2a92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_e36b389f45b3a66f81fcce53e6f60cb58808b3ee81cc7bfaeb605e7b616bc615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36b389f45b3a66f81fcce53e6f60cb58808b3ee81cc7bfaeb605e7b616bc615->enter($__internal_e36b389f45b3a66f81fcce53e6f60cb58808b3ee81cc7bfaeb605e7b616bc615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_e36b389f45b3a66f81fcce53e6f60cb58808b3ee81cc7bfaeb605e7b616bc615->leave($__internal_e36b389f45b3a66f81fcce53e6f60cb58808b3ee81cc7bfaeb605e7b616bc615_prof);

        
        $__internal_b74f3d989f7d15464200c55df387eba180742e4bcf172d2319756d3984a2a92c->leave($__internal_b74f3d989f7d15464200c55df387eba180742e4bcf172d2319756d3984a2a92c_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac39f84796acf1aa3a7eb6fa9d643ce892680ef67cf95906f62e643e67ae6340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac39f84796acf1aa3a7eb6fa9d643ce892680ef67cf95906f62e643e67ae6340->enter($__internal_ac39f84796acf1aa3a7eb6fa9d643ce892680ef67cf95906f62e643e67ae6340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76f46d323f02926e3d5b4de5736fb565e46be23806e96f909ce83536be6a304d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f46d323f02926e3d5b4de5736fb565e46be23806e96f909ce83536be6a304d->enter($__internal_76f46d323f02926e3d5b4de5736fb565e46be23806e96f909ce83536be6a304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_76f46d323f02926e3d5b4de5736fb565e46be23806e96f909ce83536be6a304d->leave($__internal_76f46d323f02926e3d5b4de5736fb565e46be23806e96f909ce83536be6a304d_prof);

        
        $__internal_ac39f84796acf1aa3a7eb6fa9d643ce892680ef67cf95906f62e643e67ae6340->leave($__internal_ac39f84796acf1aa3a7eb6fa9d643ce892680ef67cf95906f62e643e67ae6340_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f27bce2fa2cffde378f687de41192107d63cbbe879d15c5862f88c851ee847bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27bce2fa2cffde378f687de41192107d63cbbe879d15c5862f88c851ee847bd->enter($__internal_f27bce2fa2cffde378f687de41192107d63cbbe879d15c5862f88c851ee847bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0aa4c9c261a97e292bf542ee20492a593b654493cfe8593c0c9f86a573fdea94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa4c9c261a97e292bf542ee20492a593b654493cfe8593c0c9f86a573fdea94->enter($__internal_0aa4c9c261a97e292bf542ee20492a593b654493cfe8593c0c9f86a573fdea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_0aa4c9c261a97e292bf542ee20492a593b654493cfe8593c0c9f86a573fdea94->leave($__internal_0aa4c9c261a97e292bf542ee20492a593b654493cfe8593c0c9f86a573fdea94_prof);

        
        $__internal_f27bce2fa2cffde378f687de41192107d63cbbe879d15c5862f88c851ee847bd->leave($__internal_f27bce2fa2cffde378f687de41192107d63cbbe879d15c5862f88c851ee847bd_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_2cdb2d3f826aa74f09be39b63ba4b6df0f5462ef0d69c0016789b75f2aa6392c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdb2d3f826aa74f09be39b63ba4b6df0f5462ef0d69c0016789b75f2aa6392c->enter($__internal_2cdb2d3f826aa74f09be39b63ba4b6df0f5462ef0d69c0016789b75f2aa6392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_27bfa88edc8f3748e7e2924e5a3f677e0681bfaa4176b2ec1e23b138e056052d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bfa88edc8f3748e7e2924e5a3f677e0681bfaa4176b2ec1e23b138e056052d->enter($__internal_27bfa88edc8f3748e7e2924e5a3f677e0681bfaa4176b2ec1e23b138e056052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_27bfa88edc8f3748e7e2924e5a3f677e0681bfaa4176b2ec1e23b138e056052d->leave($__internal_27bfa88edc8f3748e7e2924e5a3f677e0681bfaa4176b2ec1e23b138e056052d_prof);

        
        $__internal_2cdb2d3f826aa74f09be39b63ba4b6df0f5462ef0d69c0016789b75f2aa6392c->leave($__internal_2cdb2d3f826aa74f09be39b63ba4b6df0f5462ef0d69c0016789b75f2aa6392c_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_394cf4a0749ae3c918d9e90e83c41e18c0fac589b061ebc2377c16ae80b998ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394cf4a0749ae3c918d9e90e83c41e18c0fac589b061ebc2377c16ae80b998ef->enter($__internal_394cf4a0749ae3c918d9e90e83c41e18c0fac589b061ebc2377c16ae80b998ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_6e6189cd2e8167e967905f9a1460e2301d7bb096897c2f392fb15f97426f5204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6189cd2e8167e967905f9a1460e2301d7bb096897c2f392fb15f97426f5204->enter($__internal_6e6189cd2e8167e967905f9a1460e2301d7bb096897c2f392fb15f97426f5204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_6e6189cd2e8167e967905f9a1460e2301d7bb096897c2f392fb15f97426f5204->leave($__internal_6e6189cd2e8167e967905f9a1460e2301d7bb096897c2f392fb15f97426f5204_prof);

        
        $__internal_394cf4a0749ae3c918d9e90e83c41e18c0fac589b061ebc2377c16ae80b998ef->leave($__internal_394cf4a0749ae3c918d9e90e83c41e18c0fac589b061ebc2377c16ae80b998ef_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_240ac7105bd447a6d810a404417fbaeb795f0a4651bc0c3dcc764c5ae80cef83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240ac7105bd447a6d810a404417fbaeb795f0a4651bc0c3dcc764c5ae80cef83->enter($__internal_240ac7105bd447a6d810a404417fbaeb795f0a4651bc0c3dcc764c5ae80cef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_2686faaa44e2ba1aee4461a5b3eeb1dfc972318d4f993148a28ec45af6d219f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2686faaa44e2ba1aee4461a5b3eeb1dfc972318d4f993148a28ec45af6d219f5->enter($__internal_2686faaa44e2ba1aee4461a5b3eeb1dfc972318d4f993148a28ec45af6d219f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_2686faaa44e2ba1aee4461a5b3eeb1dfc972318d4f993148a28ec45af6d219f5->leave($__internal_2686faaa44e2ba1aee4461a5b3eeb1dfc972318d4f993148a28ec45af6d219f5_prof);

        
        $__internal_240ac7105bd447a6d810a404417fbaeb795f0a4651bc0c3dcc764c5ae80cef83->leave($__internal_240ac7105bd447a6d810a404417fbaeb795f0a4651bc0c3dcc764c5ae80cef83_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_b241e888092f05458eea44001b861d9d6391c75ccc0404373c6b051336e28d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b241e888092f05458eea44001b861d9d6391c75ccc0404373c6b051336e28d94->enter($__internal_b241e888092f05458eea44001b861d9d6391c75ccc0404373c6b051336e28d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_518ba36000e25c88d9206fc580f34ea687735e5cd241fe993f1029c1a0d31755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518ba36000e25c88d9206fc580f34ea687735e5cd241fe993f1029c1a0d31755->enter($__internal_518ba36000e25c88d9206fc580f34ea687735e5cd241fe993f1029c1a0d31755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_518ba36000e25c88d9206fc580f34ea687735e5cd241fe993f1029c1a0d31755->leave($__internal_518ba36000e25c88d9206fc580f34ea687735e5cd241fe993f1029c1a0d31755_prof);

        
        $__internal_b241e888092f05458eea44001b861d9d6391c75ccc0404373c6b051336e28d94->leave($__internal_b241e888092f05458eea44001b861d9d6391c75ccc0404373c6b051336e28d94_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_76f23cf9c333d858fa88f58da57bf72098abe54c138d51021fc920c0ced08930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f23cf9c333d858fa88f58da57bf72098abe54c138d51021fc920c0ced08930->enter($__internal_76f23cf9c333d858fa88f58da57bf72098abe54c138d51021fc920c0ced08930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_12607ee559d19ef1619bbb6b6e1b88f9f9ec4a372902e95cc656c24ac6d50579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12607ee559d19ef1619bbb6b6e1b88f9f9ec4a372902e95cc656c24ac6d50579->enter($__internal_12607ee559d19ef1619bbb6b6e1b88f9f9ec4a372902e95cc656c24ac6d50579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_12607ee559d19ef1619bbb6b6e1b88f9f9ec4a372902e95cc656c24ac6d50579->leave($__internal_12607ee559d19ef1619bbb6b6e1b88f9f9ec4a372902e95cc656c24ac6d50579_prof);

        
        $__internal_76f23cf9c333d858fa88f58da57bf72098abe54c138d51021fc920c0ced08930->leave($__internal_76f23cf9c333d858fa88f58da57bf72098abe54c138d51021fc920c0ced08930_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_fbe37f3eaec24245b57fcae3db2d17660264093df1b48806d917b97b4c106a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe37f3eaec24245b57fcae3db2d17660264093df1b48806d917b97b4c106a35->enter($__internal_fbe37f3eaec24245b57fcae3db2d17660264093df1b48806d917b97b4c106a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_58e8d0377b4679ca66b7fab99c09c30df906f10fc2d4857fcf0aef66a6011f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e8d0377b4679ca66b7fab99c09c30df906f10fc2d4857fcf0aef66a6011f99->enter($__internal_58e8d0377b4679ca66b7fab99c09c30df906f10fc2d4857fcf0aef66a6011f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_58e8d0377b4679ca66b7fab99c09c30df906f10fc2d4857fcf0aef66a6011f99->leave($__internal_58e8d0377b4679ca66b7fab99c09c30df906f10fc2d4857fcf0aef66a6011f99_prof);

        
        $__internal_fbe37f3eaec24245b57fcae3db2d17660264093df1b48806d917b97b4c106a35->leave($__internal_fbe37f3eaec24245b57fcae3db2d17660264093df1b48806d917b97b4c106a35_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_9aa92c49c23eb8f8ceb79f56856246219a60511b6e2a991c85fa5e7ad7ae146a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa92c49c23eb8f8ceb79f56856246219a60511b6e2a991c85fa5e7ad7ae146a->enter($__internal_9aa92c49c23eb8f8ceb79f56856246219a60511b6e2a991c85fa5e7ad7ae146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_1243127eb2857a98fc0595e11579b9382ea323ec3fdba721de3f271d055aafea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1243127eb2857a98fc0595e11579b9382ea323ec3fdba721de3f271d055aafea->enter($__internal_1243127eb2857a98fc0595e11579b9382ea323ec3fdba721de3f271d055aafea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_1243127eb2857a98fc0595e11579b9382ea323ec3fdba721de3f271d055aafea->leave($__internal_1243127eb2857a98fc0595e11579b9382ea323ec3fdba721de3f271d055aafea_prof);

        
        $__internal_9aa92c49c23eb8f8ceb79f56856246219a60511b6e2a991c85fa5e7ad7ae146a->leave($__internal_9aa92c49c23eb8f8ceb79f56856246219a60511b6e2a991c85fa5e7ad7ae146a_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_9db6d7aa8b374888846a029e37dc377bd149de58d82be00129d3a88f89fb21c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db6d7aa8b374888846a029e37dc377bd149de58d82be00129d3a88f89fb21c2->enter($__internal_9db6d7aa8b374888846a029e37dc377bd149de58d82be00129d3a88f89fb21c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_4defe574be331bace409a9326cf86f73298f7ec633da9ab8120ca609e9f4251a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4defe574be331bace409a9326cf86f73298f7ec633da9ab8120ca609e9f4251a->enter($__internal_4defe574be331bace409a9326cf86f73298f7ec633da9ab8120ca609e9f4251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_4defe574be331bace409a9326cf86f73298f7ec633da9ab8120ca609e9f4251a->leave($__internal_4defe574be331bace409a9326cf86f73298f7ec633da9ab8120ca609e9f4251a_prof);

        
        $__internal_9db6d7aa8b374888846a029e37dc377bd149de58d82be00129d3a88f89fb21c2->leave($__internal_9db6d7aa8b374888846a029e37dc377bd149de58d82be00129d3a88f89fb21c2_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_baa7ef39da80c6181e7b1fcee22c0ff423907938519a6821a784ca1d873c3c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa7ef39da80c6181e7b1fcee22c0ff423907938519a6821a784ca1d873c3c3d->enter($__internal_baa7ef39da80c6181e7b1fcee22c0ff423907938519a6821a784ca1d873c3c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_7ab4472575b79faa9d7e7fc69de2ce7c7f3668ea39f93b89b9125c4595d862e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab4472575b79faa9d7e7fc69de2ce7c7f3668ea39f93b89b9125c4595d862e7->enter($__internal_7ab4472575b79faa9d7e7fc69de2ce7c7f3668ea39f93b89b9125c4595d862e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_7ab4472575b79faa9d7e7fc69de2ce7c7f3668ea39f93b89b9125c4595d862e7->leave($__internal_7ab4472575b79faa9d7e7fc69de2ce7c7f3668ea39f93b89b9125c4595d862e7_prof);

        
        $__internal_baa7ef39da80c6181e7b1fcee22c0ff423907938519a6821a784ca1d873c3c3d->leave($__internal_baa7ef39da80c6181e7b1fcee22c0ff423907938519a6821a784ca1d873c3c3d_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_8558ea97a543965031b90d3f922e70e648f6e27e706d52f34e8f3ed00aee9304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8558ea97a543965031b90d3f922e70e648f6e27e706d52f34e8f3ed00aee9304->enter($__internal_8558ea97a543965031b90d3f922e70e648f6e27e706d52f34e8f3ed00aee9304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_ec4d43e5e2acb1fb1cc31d4e8f6d79870d52ff148de0fe25442dba39316d654f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4d43e5e2acb1fb1cc31d4e8f6d79870d52ff148de0fe25442dba39316d654f->enter($__internal_ec4d43e5e2acb1fb1cc31d4e8f6d79870d52ff148de0fe25442dba39316d654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_ec4d43e5e2acb1fb1cc31d4e8f6d79870d52ff148de0fe25442dba39316d654f->leave($__internal_ec4d43e5e2acb1fb1cc31d4e8f6d79870d52ff148de0fe25442dba39316d654f_prof);

        
        $__internal_8558ea97a543965031b90d3f922e70e648f6e27e706d52f34e8f3ed00aee9304->leave($__internal_8558ea97a543965031b90d3f922e70e648f6e27e706d52f34e8f3ed00aee9304_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_0c4725883e12397e7ce89681bffc7150c2ff60b624d2af4f49a77ce64ef85d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4725883e12397e7ce89681bffc7150c2ff60b624d2af4f49a77ce64ef85d1a->enter($__internal_0c4725883e12397e7ce89681bffc7150c2ff60b624d2af4f49a77ce64ef85d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_62a3654c198904710a553822f65456dcbd860b1eec4bb10fb56f5b00bbeae2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a3654c198904710a553822f65456dcbd860b1eec4bb10fb56f5b00bbeae2e4->enter($__internal_62a3654c198904710a553822f65456dcbd860b1eec4bb10fb56f5b00bbeae2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_62a3654c198904710a553822f65456dcbd860b1eec4bb10fb56f5b00bbeae2e4->leave($__internal_62a3654c198904710a553822f65456dcbd860b1eec4bb10fb56f5b00bbeae2e4_prof);

        
        $__internal_0c4725883e12397e7ce89681bffc7150c2ff60b624d2af4f49a77ce64ef85d1a->leave($__internal_0c4725883e12397e7ce89681bffc7150c2ff60b624d2af4f49a77ce64ef85d1a_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_77569711654128f59dc4775cdb77329f7517fc9268867c1dcc4eeca86d0ea751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77569711654128f59dc4775cdb77329f7517fc9268867c1dcc4eeca86d0ea751->enter($__internal_77569711654128f59dc4775cdb77329f7517fc9268867c1dcc4eeca86d0ea751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_3bac66116db008d3c2688a10d6bc8f6e608f43e217ab5c83255255e927d3ad7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bac66116db008d3c2688a10d6bc8f6e608f43e217ab5c83255255e927d3ad7a->enter($__internal_3bac66116db008d3c2688a10d6bc8f6e608f43e217ab5c83255255e927d3ad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_3bac66116db008d3c2688a10d6bc8f6e608f43e217ab5c83255255e927d3ad7a->leave($__internal_3bac66116db008d3c2688a10d6bc8f6e608f43e217ab5c83255255e927d3ad7a_prof);

        
        $__internal_77569711654128f59dc4775cdb77329f7517fc9268867c1dcc4eeca86d0ea751->leave($__internal_77569711654128f59dc4775cdb77329f7517fc9268867c1dcc4eeca86d0ea751_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f066ae07866ecc819ff3b43e480eabb1ed260090554ef93fba0b9cefe3eff6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f066ae07866ecc819ff3b43e480eabb1ed260090554ef93fba0b9cefe3eff6b2->enter($__internal_f066ae07866ecc819ff3b43e480eabb1ed260090554ef93fba0b9cefe3eff6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_7e12c8cbb625268a63a20b714f060215b4fcf9efc38ee6b22ba10d44c64fe8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e12c8cbb625268a63a20b714f060215b4fcf9efc38ee6b22ba10d44c64fe8a1->enter($__internal_7e12c8cbb625268a63a20b714f060215b4fcf9efc38ee6b22ba10d44c64fe8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_7e12c8cbb625268a63a20b714f060215b4fcf9efc38ee6b22ba10d44c64fe8a1->leave($__internal_7e12c8cbb625268a63a20b714f060215b4fcf9efc38ee6b22ba10d44c64fe8a1_prof);

        
        $__internal_f066ae07866ecc819ff3b43e480eabb1ed260090554ef93fba0b9cefe3eff6b2->leave($__internal_f066ae07866ecc819ff3b43e480eabb1ed260090554ef93fba0b9cefe3eff6b2_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5fd2d222b66dbfed728cd3e43723fd9ec0a105b71288a7fcf7e84447f1084a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd2d222b66dbfed728cd3e43723fd9ec0a105b71288a7fcf7e84447f1084a10->enter($__internal_5fd2d222b66dbfed728cd3e43723fd9ec0a105b71288a7fcf7e84447f1084a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_d57bf7f67617bbcae4fc31dfb382f50266213e3da768bfd99108db89d1b5bda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57bf7f67617bbcae4fc31dfb382f50266213e3da768bfd99108db89d1b5bda5->enter($__internal_d57bf7f67617bbcae4fc31dfb382f50266213e3da768bfd99108db89d1b5bda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_d57bf7f67617bbcae4fc31dfb382f50266213e3da768bfd99108db89d1b5bda5->leave($__internal_d57bf7f67617bbcae4fc31dfb382f50266213e3da768bfd99108db89d1b5bda5_prof);

        
        $__internal_5fd2d222b66dbfed728cd3e43723fd9ec0a105b71288a7fcf7e84447f1084a10->leave($__internal_5fd2d222b66dbfed728cd3e43723fd9ec0a105b71288a7fcf7e84447f1084a10_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_299f49a10f86f6388b22f766919e81ef5b51dbeee08adab465c4a492be2d66c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299f49a10f86f6388b22f766919e81ef5b51dbeee08adab465c4a492be2d66c5->enter($__internal_299f49a10f86f6388b22f766919e81ef5b51dbeee08adab465c4a492be2d66c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_4579f55135f172a1f4a6fa6c87a2da1a1a6db952ddbaba0b7b33ed703634374d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4579f55135f172a1f4a6fa6c87a2da1a1a6db952ddbaba0b7b33ed703634374d->enter($__internal_4579f55135f172a1f4a6fa6c87a2da1a1a6db952ddbaba0b7b33ed703634374d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_4579f55135f172a1f4a6fa6c87a2da1a1a6db952ddbaba0b7b33ed703634374d->leave($__internal_4579f55135f172a1f4a6fa6c87a2da1a1a6db952ddbaba0b7b33ed703634374d_prof);

        
        $__internal_299f49a10f86f6388b22f766919e81ef5b51dbeee08adab465c4a492be2d66c5->leave($__internal_299f49a10f86f6388b22f766919e81ef5b51dbeee08adab465c4a492be2d66c5_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_1a6dc1f1909521846ca76dbb442ce8e6235b8f6c69f5e0a297f373432f23db48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6dc1f1909521846ca76dbb442ce8e6235b8f6c69f5e0a297f373432f23db48->enter($__internal_1a6dc1f1909521846ca76dbb442ce8e6235b8f6c69f5e0a297f373432f23db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_8c107159b10eef4cce0471c7063294520e05780e1917ed2d3c086cd94c83967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c107159b10eef4cce0471c7063294520e05780e1917ed2d3c086cd94c83967d->enter($__internal_8c107159b10eef4cce0471c7063294520e05780e1917ed2d3c086cd94c83967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_8c107159b10eef4cce0471c7063294520e05780e1917ed2d3c086cd94c83967d->leave($__internal_8c107159b10eef4cce0471c7063294520e05780e1917ed2d3c086cd94c83967d_prof);

        
        $__internal_1a6dc1f1909521846ca76dbb442ce8e6235b8f6c69f5e0a297f373432f23db48->leave($__internal_1a6dc1f1909521846ca76dbb442ce8e6235b8f6c69f5e0a297f373432f23db48_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_9a5cb0ef01d42dd6730e1382eed425b0ddacb4f9521ca72d13f672c38670e57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5cb0ef01d42dd6730e1382eed425b0ddacb4f9521ca72d13f672c38670e57c->enter($__internal_9a5cb0ef01d42dd6730e1382eed425b0ddacb4f9521ca72d13f672c38670e57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_32b4f9493eea8e65170cbd297db95e5320309349c886c0e489b2cf1d129b911c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b4f9493eea8e65170cbd297db95e5320309349c886c0e489b2cf1d129b911c->enter($__internal_32b4f9493eea8e65170cbd297db95e5320309349c886c0e489b2cf1d129b911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_32b4f9493eea8e65170cbd297db95e5320309349c886c0e489b2cf1d129b911c->leave($__internal_32b4f9493eea8e65170cbd297db95e5320309349c886c0e489b2cf1d129b911c_prof);

        
        $__internal_9a5cb0ef01d42dd6730e1382eed425b0ddacb4f9521ca72d13f672c38670e57c->leave($__internal_9a5cb0ef01d42dd6730e1382eed425b0ddacb4f9521ca72d13f672c38670e57c_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_f006b28e9437cd43d086aef4af9af0c5f8840c212a695288d33ac289e2b79a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f006b28e9437cd43d086aef4af9af0c5f8840c212a695288d33ac289e2b79a58->enter($__internal_f006b28e9437cd43d086aef4af9af0c5f8840c212a695288d33ac289e2b79a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_7e3a7aa058a54ad7b0a9cd37122564faecdb472bf017265e62cc34e36d3a678a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3a7aa058a54ad7b0a9cd37122564faecdb472bf017265e62cc34e36d3a678a->enter($__internal_7e3a7aa058a54ad7b0a9cd37122564faecdb472bf017265e62cc34e36d3a678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_7e3a7aa058a54ad7b0a9cd37122564faecdb472bf017265e62cc34e36d3a678a->leave($__internal_7e3a7aa058a54ad7b0a9cd37122564faecdb472bf017265e62cc34e36d3a678a_prof);

        
        $__internal_f006b28e9437cd43d086aef4af9af0c5f8840c212a695288d33ac289e2b79a58->leave($__internal_f006b28e9437cd43d086aef4af9af0c5f8840c212a695288d33ac289e2b79a58_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_294a2f960702c7e52c751b223532587f1e2f2e18d27b069483c4dc0bf880701f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294a2f960702c7e52c751b223532587f1e2f2e18d27b069483c4dc0bf880701f->enter($__internal_294a2f960702c7e52c751b223532587f1e2f2e18d27b069483c4dc0bf880701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_be3d9d3e3b02e8476e8c52188f327f8a91352fe3d4acf785c1fe55b7f9290477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3d9d3e3b02e8476e8c52188f327f8a91352fe3d4acf785c1fe55b7f9290477->enter($__internal_be3d9d3e3b02e8476e8c52188f327f8a91352fe3d4acf785c1fe55b7f9290477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_be3d9d3e3b02e8476e8c52188f327f8a91352fe3d4acf785c1fe55b7f9290477->leave($__internal_be3d9d3e3b02e8476e8c52188f327f8a91352fe3d4acf785c1fe55b7f9290477_prof);

        
        $__internal_294a2f960702c7e52c751b223532587f1e2f2e18d27b069483c4dc0bf880701f->leave($__internal_294a2f960702c7e52c751b223532587f1e2f2e18d27b069483c4dc0bf880701f_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_0bb0e95e83ec645d7b8e6e9f6ff0217a84aab277a1fae4ab900aef8a9f492683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb0e95e83ec645d7b8e6e9f6ff0217a84aab277a1fae4ab900aef8a9f492683->enter($__internal_0bb0e95e83ec645d7b8e6e9f6ff0217a84aab277a1fae4ab900aef8a9f492683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_6168b6535c32a5e82551e930ac4aedfcbaeab2c2fcaeca8cb82e16c465e3d15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6168b6535c32a5e82551e930ac4aedfcbaeab2c2fcaeca8cb82e16c465e3d15f->enter($__internal_6168b6535c32a5e82551e930ac4aedfcbaeab2c2fcaeca8cb82e16c465e3d15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_6168b6535c32a5e82551e930ac4aedfcbaeab2c2fcaeca8cb82e16c465e3d15f->leave($__internal_6168b6535c32a5e82551e930ac4aedfcbaeab2c2fcaeca8cb82e16c465e3d15f_prof);

        
        $__internal_0bb0e95e83ec645d7b8e6e9f6ff0217a84aab277a1fae4ab900aef8a9f492683->leave($__internal_0bb0e95e83ec645d7b8e6e9f6ff0217a84aab277a1fae4ab900aef8a9f492683_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5b102e0ce14310b45039cad9635764067cf48e0c8474fbe01225b657269acf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b102e0ce14310b45039cad9635764067cf48e0c8474fbe01225b657269acf6f->enter($__internal_5b102e0ce14310b45039cad9635764067cf48e0c8474fbe01225b657269acf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_cad6d6342a53dc39dbcd73ed25b7f099ed984d493a60966a0f6053a8e550a07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad6d6342a53dc39dbcd73ed25b7f099ed984d493a60966a0f6053a8e550a07c->enter($__internal_cad6d6342a53dc39dbcd73ed25b7f099ed984d493a60966a0f6053a8e550a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_cad6d6342a53dc39dbcd73ed25b7f099ed984d493a60966a0f6053a8e550a07c->leave($__internal_cad6d6342a53dc39dbcd73ed25b7f099ed984d493a60966a0f6053a8e550a07c_prof);

        
        $__internal_5b102e0ce14310b45039cad9635764067cf48e0c8474fbe01225b657269acf6f->leave($__internal_5b102e0ce14310b45039cad9635764067cf48e0c8474fbe01225b657269acf6f_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_db97e4edf35e96fc7fa4794a91323415520ee57cbde8e54a31675a306cd8da6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db97e4edf35e96fc7fa4794a91323415520ee57cbde8e54a31675a306cd8da6c->enter($__internal_db97e4edf35e96fc7fa4794a91323415520ee57cbde8e54a31675a306cd8da6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_ee47efa808e2dfc0a2bae9a31ccd2c9b4a7bc324d3b9a18fec0e6da5edddb594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee47efa808e2dfc0a2bae9a31ccd2c9b4a7bc324d3b9a18fec0e6da5edddb594->enter($__internal_ee47efa808e2dfc0a2bae9a31ccd2c9b4a7bc324d3b9a18fec0e6da5edddb594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_ee47efa808e2dfc0a2bae9a31ccd2c9b4a7bc324d3b9a18fec0e6da5edddb594->leave($__internal_ee47efa808e2dfc0a2bae9a31ccd2c9b4a7bc324d3b9a18fec0e6da5edddb594_prof);

        
        $__internal_db97e4edf35e96fc7fa4794a91323415520ee57cbde8e54a31675a306cd8da6c->leave($__internal_db97e4edf35e96fc7fa4794a91323415520ee57cbde8e54a31675a306cd8da6c_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_300c47b29012535777eb66e7216923144dc138cc47205721dee81a1d44e11115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300c47b29012535777eb66e7216923144dc138cc47205721dee81a1d44e11115->enter($__internal_300c47b29012535777eb66e7216923144dc138cc47205721dee81a1d44e11115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_cf4147fd13068aeca7649d40a3d3c24389649e33edd77792bb4fdc5668b49055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4147fd13068aeca7649d40a3d3c24389649e33edd77792bb4fdc5668b49055->enter($__internal_cf4147fd13068aeca7649d40a3d3c24389649e33edd77792bb4fdc5668b49055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_cf4147fd13068aeca7649d40a3d3c24389649e33edd77792bb4fdc5668b49055->leave($__internal_cf4147fd13068aeca7649d40a3d3c24389649e33edd77792bb4fdc5668b49055_prof);

        
        $__internal_300c47b29012535777eb66e7216923144dc138cc47205721dee81a1d44e11115->leave($__internal_300c47b29012535777eb66e7216923144dc138cc47205721dee81a1d44e11115_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_81c8d70daecb8056a8fe712765de32894df076e338d50cfa24dc583a950e35b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c8d70daecb8056a8fe712765de32894df076e338d50cfa24dc583a950e35b5->enter($__internal_81c8d70daecb8056a8fe712765de32894df076e338d50cfa24dc583a950e35b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_f5466f0729caae71f0faf3b673286d9e6c65615e04d4e9828e4cca2ecb73cf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5466f0729caae71f0faf3b673286d9e6c65615e04d4e9828e4cca2ecb73cf97->enter($__internal_f5466f0729caae71f0faf3b673286d9e6c65615e04d4e9828e4cca2ecb73cf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_f5466f0729caae71f0faf3b673286d9e6c65615e04d4e9828e4cca2ecb73cf97->leave($__internal_f5466f0729caae71f0faf3b673286d9e6c65615e04d4e9828e4cca2ecb73cf97_prof);

        
        $__internal_81c8d70daecb8056a8fe712765de32894df076e338d50cfa24dc583a950e35b5->leave($__internal_81c8d70daecb8056a8fe712765de32894df076e338d50cfa24dc583a950e35b5_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_f59481b0c919ac1e7f5318a3effc25b9275aa270d68bd605bfb605d32f20a644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59481b0c919ac1e7f5318a3effc25b9275aa270d68bd605bfb605d32f20a644->enter($__internal_f59481b0c919ac1e7f5318a3effc25b9275aa270d68bd605bfb605d32f20a644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_41da9511a55c5427329412a532a05f5576f3bdf9281e2e87a65d3b1ee68940b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41da9511a55c5427329412a532a05f5576f3bdf9281e2e87a65d3b1ee68940b4->enter($__internal_41da9511a55c5427329412a532a05f5576f3bdf9281e2e87a65d3b1ee68940b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_41da9511a55c5427329412a532a05f5576f3bdf9281e2e87a65d3b1ee68940b4->leave($__internal_41da9511a55c5427329412a532a05f5576f3bdf9281e2e87a65d3b1ee68940b4_prof);

        
        $__internal_f59481b0c919ac1e7f5318a3effc25b9275aa270d68bd605bfb605d32f20a644->leave($__internal_f59481b0c919ac1e7f5318a3effc25b9275aa270d68bd605bfb605d32f20a644_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_0a8e732370d5fd9328d58d29e7d047a45aa774b30c4175d5b502f32e11056fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8e732370d5fd9328d58d29e7d047a45aa774b30c4175d5b502f32e11056fa8->enter($__internal_0a8e732370d5fd9328d58d29e7d047a45aa774b30c4175d5b502f32e11056fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_93dfea26ae16003a83381cdb3d6fcee09dda382384e184238dbbaf110460a59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dfea26ae16003a83381cdb3d6fcee09dda382384e184238dbbaf110460a59b->enter($__internal_93dfea26ae16003a83381cdb3d6fcee09dda382384e184238dbbaf110460a59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_93dfea26ae16003a83381cdb3d6fcee09dda382384e184238dbbaf110460a59b->leave($__internal_93dfea26ae16003a83381cdb3d6fcee09dda382384e184238dbbaf110460a59b_prof);

        
        $__internal_0a8e732370d5fd9328d58d29e7d047a45aa774b30c4175d5b502f32e11056fa8->leave($__internal_0a8e732370d5fd9328d58d29e7d047a45aa774b30c4175d5b502f32e11056fa8_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_31cc2c3580e40d0d2c623e94dc87d3bee7197e13e3e3f30bcce8f6a72903527d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31cc2c3580e40d0d2c623e94dc87d3bee7197e13e3e3f30bcce8f6a72903527d->enter($__internal_31cc2c3580e40d0d2c623e94dc87d3bee7197e13e3e3f30bcce8f6a72903527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_10880ec24447a9997abc6055be94a5fc45e5cd6cd9d646d8c3d47c75ed7cec36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10880ec24447a9997abc6055be94a5fc45e5cd6cd9d646d8c3d47c75ed7cec36->enter($__internal_10880ec24447a9997abc6055be94a5fc45e5cd6cd9d646d8c3d47c75ed7cec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_10880ec24447a9997abc6055be94a5fc45e5cd6cd9d646d8c3d47c75ed7cec36->leave($__internal_10880ec24447a9997abc6055be94a5fc45e5cd6cd9d646d8c3d47c75ed7cec36_prof);

        
        $__internal_31cc2c3580e40d0d2c623e94dc87d3bee7197e13e3e3f30bcce8f6a72903527d->leave($__internal_31cc2c3580e40d0d2c623e94dc87d3bee7197e13e3e3f30bcce8f6a72903527d_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_df444286a96465e026d694721d90bdf5557a59585a35db03fc37bab1fa95eccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df444286a96465e026d694721d90bdf5557a59585a35db03fc37bab1fa95eccf->enter($__internal_df444286a96465e026d694721d90bdf5557a59585a35db03fc37bab1fa95eccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_a3bbd8a73e6dbeac1b04bc4d63a7c17d05320881da5c729e5c68ccb8ea28c3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bbd8a73e6dbeac1b04bc4d63a7c17d05320881da5c729e5c68ccb8ea28c3ca->enter($__internal_a3bbd8a73e6dbeac1b04bc4d63a7c17d05320881da5c729e5c68ccb8ea28c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_a3bbd8a73e6dbeac1b04bc4d63a7c17d05320881da5c729e5c68ccb8ea28c3ca->leave($__internal_a3bbd8a73e6dbeac1b04bc4d63a7c17d05320881da5c729e5c68ccb8ea28c3ca_prof);

        
        $__internal_df444286a96465e026d694721d90bdf5557a59585a35db03fc37bab1fa95eccf->leave($__internal_df444286a96465e026d694721d90bdf5557a59585a35db03fc37bab1fa95eccf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
