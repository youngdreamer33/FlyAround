<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_a1aea87d6ea24dfa575ab8fbc4551f2d110ea9b1a24e91be9e7903fbe4223a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_231d4fd8e84b0419af3f39a76cec4e50525c9594607552ff596179a056b0d7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231d4fd8e84b0419af3f39a76cec4e50525c9594607552ff596179a056b0d7fd->enter($__internal_231d4fd8e84b0419af3f39a76cec4e50525c9594607552ff596179a056b0d7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_8b81d1e96eef7ca739f033b6021a7a296c6d2a12c7336e7edb4bd3e6fffbb9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b81d1e96eef7ca739f033b6021a7a296c6d2a12c7336e7edb4bd3e6fffbb9ae->enter($__internal_8b81d1e96eef7ca739f033b6021a7a296c6d2a12c7336e7edb4bd3e6fffbb9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231d4fd8e84b0419af3f39a76cec4e50525c9594607552ff596179a056b0d7fd->leave($__internal_231d4fd8e84b0419af3f39a76cec4e50525c9594607552ff596179a056b0d7fd_prof);

        
        $__internal_8b81d1e96eef7ca739f033b6021a7a296c6d2a12c7336e7edb4bd3e6fffbb9ae->leave($__internal_8b81d1e96eef7ca739f033b6021a7a296c6d2a12c7336e7edb4bd3e6fffbb9ae_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_9e5110ce3c9a7cbaef497e1e71b61906f173e7913853aa4118903a0556f31a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5110ce3c9a7cbaef497e1e71b61906f173e7913853aa4118903a0556f31a77->enter($__internal_9e5110ce3c9a7cbaef497e1e71b61906f173e7913853aa4118903a0556f31a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_df63fa8a3cc856a53ca33ef88c690552cd7aea8ac44a8540ade1fdc7a14640ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df63fa8a3cc856a53ca33ef88c690552cd7aea8ac44a8540ade1fdc7a14640ad->enter($__internal_df63fa8a3cc856a53ca33ef88c690552cd7aea8ac44a8540ade1fdc7a14640ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_df63fa8a3cc856a53ca33ef88c690552cd7aea8ac44a8540ade1fdc7a14640ad->leave($__internal_df63fa8a3cc856a53ca33ef88c690552cd7aea8ac44a8540ade1fdc7a14640ad_prof);

        
        $__internal_9e5110ce3c9a7cbaef497e1e71b61906f173e7913853aa4118903a0556f31a77->leave($__internal_9e5110ce3c9a7cbaef497e1e71b61906f173e7913853aa4118903a0556f31a77_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_d668bd229b313301c794af99e5cc8ab1c6908acc70b18b9cba57f59840f210ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d668bd229b313301c794af99e5cc8ab1c6908acc70b18b9cba57f59840f210ff->enter($__internal_d668bd229b313301c794af99e5cc8ab1c6908acc70b18b9cba57f59840f210ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a4e4cc5e8b1f08b6c6583086de4a7d5aab7fb6d0b09e47c39ed88dbf8c33aa24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e4cc5e8b1f08b6c6583086de4a7d5aab7fb6d0b09e47c39ed88dbf8c33aa24->enter($__internal_a4e4cc5e8b1f08b6c6583086de4a7d5aab7fb6d0b09e47c39ed88dbf8c33aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_a4e4cc5e8b1f08b6c6583086de4a7d5aab7fb6d0b09e47c39ed88dbf8c33aa24->leave($__internal_a4e4cc5e8b1f08b6c6583086de4a7d5aab7fb6d0b09e47c39ed88dbf8c33aa24_prof);

        
        $__internal_d668bd229b313301c794af99e5cc8ab1c6908acc70b18b9cba57f59840f210ff->leave($__internal_d668bd229b313301c794af99e5cc8ab1c6908acc70b18b9cba57f59840f210ff_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_2b3d7d10ab4c24c5997f234416a76ab2f8618fe07045e7b1f413de05eea90dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3d7d10ab4c24c5997f234416a76ab2f8618fe07045e7b1f413de05eea90dff->enter($__internal_2b3d7d10ab4c24c5997f234416a76ab2f8618fe07045e7b1f413de05eea90dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_c71c460c267f2bb774471d1c955ff3429e648190cfb7736f594bf3b3d5de1ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71c460c267f2bb774471d1c955ff3429e648190cfb7736f594bf3b3d5de1ccb->enter($__internal_c71c460c267f2bb774471d1c955ff3429e648190cfb7736f594bf3b3d5de1ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c71c460c267f2bb774471d1c955ff3429e648190cfb7736f594bf3b3d5de1ccb->leave($__internal_c71c460c267f2bb774471d1c955ff3429e648190cfb7736f594bf3b3d5de1ccb_prof);

        
        $__internal_2b3d7d10ab4c24c5997f234416a76ab2f8618fe07045e7b1f413de05eea90dff->leave($__internal_2b3d7d10ab4c24c5997f234416a76ab2f8618fe07045e7b1f413de05eea90dff_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_c0fc3c13e70e3270e5994cf045caa21b324a58ef6d63502dde950191b490285e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fc3c13e70e3270e5994cf045caa21b324a58ef6d63502dde950191b490285e->enter($__internal_c0fc3c13e70e3270e5994cf045caa21b324a58ef6d63502dde950191b490285e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_2a2e5c7ebba801001881ac5db70c225b3a09d5318ba98e90e1c40c5123ab2d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2e5c7ebba801001881ac5db70c225b3a09d5318ba98e90e1c40c5123ab2d79->enter($__internal_2a2e5c7ebba801001881ac5db70c225b3a09d5318ba98e90e1c40c5123ab2d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a2e5c7ebba801001881ac5db70c225b3a09d5318ba98e90e1c40c5123ab2d79->leave($__internal_2a2e5c7ebba801001881ac5db70c225b3a09d5318ba98e90e1c40c5123ab2d79_prof);

        
        $__internal_c0fc3c13e70e3270e5994cf045caa21b324a58ef6d63502dde950191b490285e->leave($__internal_c0fc3c13e70e3270e5994cf045caa21b324a58ef6d63502dde950191b490285e_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_a211175beaf71549fcdca908ac127e18fb3b60eef81a8e2a5a835f40dfa6cbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a211175beaf71549fcdca908ac127e18fb3b60eef81a8e2a5a835f40dfa6cbbf->enter($__internal_a211175beaf71549fcdca908ac127e18fb3b60eef81a8e2a5a835f40dfa6cbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_33a9e6d7bc8908c98d2f93ba870ce99d0b88c3ac0bc53fee3da27e8e9c0e8c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a9e6d7bc8908c98d2f93ba870ce99d0b88c3ac0bc53fee3da27e8e9c0e8c62->enter($__internal_33a9e6d7bc8908c98d2f93ba870ce99d0b88c3ac0bc53fee3da27e8e9c0e8c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_33a9e6d7bc8908c98d2f93ba870ce99d0b88c3ac0bc53fee3da27e8e9c0e8c62->leave($__internal_33a9e6d7bc8908c98d2f93ba870ce99d0b88c3ac0bc53fee3da27e8e9c0e8c62_prof);

        
        $__internal_a211175beaf71549fcdca908ac127e18fb3b60eef81a8e2a5a835f40dfa6cbbf->leave($__internal_a211175beaf71549fcdca908ac127e18fb3b60eef81a8e2a5a835f40dfa6cbbf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
