<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d9bc5a1bb8762ed25834758f597841d3eaf69286b6a4035a4c51c908446a74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c2710deed7547c18baa074268dfb538760d059a3820d4e27d710b3109a03538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2710deed7547c18baa074268dfb538760d059a3820d4e27d710b3109a03538->enter($__internal_9c2710deed7547c18baa074268dfb538760d059a3820d4e27d710b3109a03538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7cb877df9b7ae4140809ddecf47a96f037133b18cb280936d69e701625b1e368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb877df9b7ae4140809ddecf47a96f037133b18cb280936d69e701625b1e368->enter($__internal_7cb877df9b7ae4140809ddecf47a96f037133b18cb280936d69e701625b1e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2710deed7547c18baa074268dfb538760d059a3820d4e27d710b3109a03538->leave($__internal_9c2710deed7547c18baa074268dfb538760d059a3820d4e27d710b3109a03538_prof);

        
        $__internal_7cb877df9b7ae4140809ddecf47a96f037133b18cb280936d69e701625b1e368->leave($__internal_7cb877df9b7ae4140809ddecf47a96f037133b18cb280936d69e701625b1e368_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_96125a814543786397e2e7c3eac005d63a3ce8e6ac6bda61c2c22d7eae9bd82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96125a814543786397e2e7c3eac005d63a3ce8e6ac6bda61c2c22d7eae9bd82d->enter($__internal_96125a814543786397e2e7c3eac005d63a3ce8e6ac6bda61c2c22d7eae9bd82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4c954e077c893fa3179d788f13a87fed868e98746569a09768b2ea719fbc8666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c954e077c893fa3179d788f13a87fed868e98746569a09768b2ea719fbc8666->enter($__internal_4c954e077c893fa3179d788f13a87fed868e98746569a09768b2ea719fbc8666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4c954e077c893fa3179d788f13a87fed868e98746569a09768b2ea719fbc8666->leave($__internal_4c954e077c893fa3179d788f13a87fed868e98746569a09768b2ea719fbc8666_prof);

        
        $__internal_96125a814543786397e2e7c3eac005d63a3ce8e6ac6bda61c2c22d7eae9bd82d->leave($__internal_96125a814543786397e2e7c3eac005d63a3ce8e6ac6bda61c2c22d7eae9bd82d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bcb09b296f0d86ed1ef3bdc53295442d015fa11b731ff94b24eb4f6f7b317e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bcb09b296f0d86ed1ef3bdc53295442d015fa11b731ff94b24eb4f6f7b317e4->enter($__internal_7bcb09b296f0d86ed1ef3bdc53295442d015fa11b731ff94b24eb4f6f7b317e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97cf01c4c9917a75b1c716c133535a2aa07ec9f8b6d7ee6a3eff948751b7e612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cf01c4c9917a75b1c716c133535a2aa07ec9f8b6d7ee6a3eff948751b7e612->enter($__internal_97cf01c4c9917a75b1c716c133535a2aa07ec9f8b6d7ee6a3eff948751b7e612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_97cf01c4c9917a75b1c716c133535a2aa07ec9f8b6d7ee6a3eff948751b7e612->leave($__internal_97cf01c4c9917a75b1c716c133535a2aa07ec9f8b6d7ee6a3eff948751b7e612_prof);

        
        $__internal_7bcb09b296f0d86ed1ef3bdc53295442d015fa11b731ff94b24eb4f6f7b317e4->leave($__internal_7bcb09b296f0d86ed1ef3bdc53295442d015fa11b731ff94b24eb4f6f7b317e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
