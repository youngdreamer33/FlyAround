<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_35f144f509d7f098acf464be59cca59b312b940790b15572a7ed287818a585c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015a384041df42869f64efb1459ef3072ca5e26a5cc9982771d6a83db36eda3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015a384041df42869f64efb1459ef3072ca5e26a5cc9982771d6a83db36eda3a->enter($__internal_015a384041df42869f64efb1459ef3072ca5e26a5cc9982771d6a83db36eda3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_493404a01633ba99132f3c1b3ce0b471bf7427014d36325c2d01064b42b27732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493404a01633ba99132f3c1b3ce0b471bf7427014d36325c2d01064b42b27732->enter($__internal_493404a01633ba99132f3c1b3ce0b471bf7427014d36325c2d01064b42b27732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_015a384041df42869f64efb1459ef3072ca5e26a5cc9982771d6a83db36eda3a->leave($__internal_015a384041df42869f64efb1459ef3072ca5e26a5cc9982771d6a83db36eda3a_prof);

        
        $__internal_493404a01633ba99132f3c1b3ce0b471bf7427014d36325c2d01064b42b27732->leave($__internal_493404a01633ba99132f3c1b3ce0b471bf7427014d36325c2d01064b42b27732_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d520f5413b8fb805864bc90eefc94a08095b93664c1a9ad485a07e115b130cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d520f5413b8fb805864bc90eefc94a08095b93664c1a9ad485a07e115b130cb6->enter($__internal_d520f5413b8fb805864bc90eefc94a08095b93664c1a9ad485a07e115b130cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8dad10627aa2acdf2908ace706fe4a6855940e11131cb9149a443bc21302b5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dad10627aa2acdf2908ace706fe4a6855940e11131cb9149a443bc21302b5ff->enter($__internal_8dad10627aa2acdf2908ace706fe4a6855940e11131cb9149a443bc21302b5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_8dad10627aa2acdf2908ace706fe4a6855940e11131cb9149a443bc21302b5ff->leave($__internal_8dad10627aa2acdf2908ace706fe4a6855940e11131cb9149a443bc21302b5ff_prof);

        
        $__internal_d520f5413b8fb805864bc90eefc94a08095b93664c1a9ad485a07e115b130cb6->leave($__internal_d520f5413b8fb805864bc90eefc94a08095b93664c1a9ad485a07e115b130cb6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
