<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8a3b45b4f648c0b479f9d055381f3f87f726c7c3165679746d8501eb35ac77d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86eaa73d10a68e696b651e69309b33c26740044d725fabf0b1ce468743458ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86eaa73d10a68e696b651e69309b33c26740044d725fabf0b1ce468743458ef8->enter($__internal_86eaa73d10a68e696b651e69309b33c26740044d725fabf0b1ce468743458ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_769ece0ae9c4f6b06ff739c1bb2b446fd8418e0f0725f1de52751ef4dbbed32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769ece0ae9c4f6b06ff739c1bb2b446fd8418e0f0725f1de52751ef4dbbed32c->enter($__internal_769ece0ae9c4f6b06ff739c1bb2b446fd8418e0f0725f1de52751ef4dbbed32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_86eaa73d10a68e696b651e69309b33c26740044d725fabf0b1ce468743458ef8->leave($__internal_86eaa73d10a68e696b651e69309b33c26740044d725fabf0b1ce468743458ef8_prof);

        
        $__internal_769ece0ae9c4f6b06ff739c1bb2b446fd8418e0f0725f1de52751ef4dbbed32c->leave($__internal_769ece0ae9c4f6b06ff739c1bb2b446fd8418e0f0725f1de52751ef4dbbed32c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
