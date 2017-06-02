<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_7c717342d0f3e9cc99140406879540a58072dc9dba6cc85cb08dc8267e6e325a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_admin_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a57f2687283b9ad4546a461afa3218abcb842707eb2be2063151b3f2a0ecf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a57f2687283b9ad4546a461afa3218abcb842707eb2be2063151b3f2a0ecf45->enter($__internal_6a57f2687283b9ad4546a461afa3218abcb842707eb2be2063151b3f2a0ecf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_admin_list.html.twig"));

        $__internal_011acb0353c4fc7711952d5efb6a7a9f85d14ebc41be1dc7c878a39a565cd67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011acb0353c4fc7711952d5efb6a7a9f85d14ebc41be1dc7c878a39a565cd67d->enter($__internal_011acb0353c4fc7711952d5efb6a7a9f85d14ebc41be1dc7c878a39a565cd67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_admin_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a57f2687283b9ad4546a461afa3218abcb842707eb2be2063151b3f2a0ecf45->leave($__internal_6a57f2687283b9ad4546a461afa3218abcb842707eb2be2063151b3f2a0ecf45_prof);

        
        $__internal_011acb0353c4fc7711952d5efb6a7a9f85d14ebc41be1dc7c878a39a565cd67d->leave($__internal_011acb0353c4fc7711952d5efb6a7a9f85d14ebc41be1dc7c878a39a565cd67d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e094941637115ecba6ba47dc08e69c7114016a88f685ab76ca6aca202aab408f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e094941637115ecba6ba47dc08e69c7114016a88f685ab76ca6aca202aab408f->enter($__internal_e094941637115ecba6ba47dc08e69c7114016a88f685ab76ca6aca202aab408f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c280a4538e7037beb2c7725d480f2f639c95f7a5cb3fc96ea6c046a633d5a842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c280a4538e7037beb2c7725d480f2f639c95f7a5cb3fc96ea6c046a633d5a842->enter($__internal_c280a4538e7037beb2c7725d480f2f639c95f7a5cb3fc96ea6c046a633d5a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if (($context["display"] ?? $this->getContext($context, "display"))) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["admin"], "dashboardActions", array())) > 0)) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["admin"], "dashboardActions", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 38
                            echo "                                                            ";
                            $this->loadTemplate((($this->getAttribute($context["action"], "template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "template", array()), "SonataAdminBundle:CRUD:dashboard__action.html.twig")) : ("SonataAdminBundle:CRUD:dashboard__action.html.twig")), "SonataAdminBundle:Block:block_admin_list.html.twig", 38)->display(array_merge($context, array("action" => $context["action"])));
                            // line 39
                            echo "                                                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 44
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 50
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c280a4538e7037beb2c7725d480f2f639c95f7a5cb3fc96ea6c046a633d5a842->leave($__internal_c280a4538e7037beb2c7725d480f2f639c95f7a5cb3fc96ea6c046a633d5a842_prof);

        
        $__internal_e094941637115ecba6ba47dc08e69c7114016a88f685ab76ca6aca202aab408f->leave($__internal_e094941637115ecba6ba47dc08e69c7114016a88f685ab76ca6aca202aab408f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 50,  187 => 45,  173 => 44,  167 => 40,  153 => 39,  150 => 38,  133 => 37,  126 => 33,  122 => 31,  119 => 30,  102 => 29,  94 => 24,  90 => 22,  88 => 21,  85 => 20,  78 => 19,  75 => 18,  69 => 17,  66 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% for group in groups %}
        {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {% for role in group.roles if not display %}
            {% set display = is_granted(role)%}
        {% endfor %}

        {% if display %}
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">{{ group.label|trans({}, group.label_catalogue) }}</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            {% for admin in group.items %}
                                {% if admin.dashboardActions|length > 0 %}
                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    {{ admin.label|trans({}, admin.translationdomain) }}
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        {% for action in admin.dashboardActions %}
                                                            {% include action.template|default('SonataAdminBundle:CRUD:dashboard__action.html.twig') with {'action': action} %}
                                                        {% endfor %}
                                                    </div>
                                                </td>
                                            </tr>
                                {% endif %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:Block:block_admin_list.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/sonata-project/admin-bundle/Resources/views/Block/block_admin_list.html.twig");
    }
}
