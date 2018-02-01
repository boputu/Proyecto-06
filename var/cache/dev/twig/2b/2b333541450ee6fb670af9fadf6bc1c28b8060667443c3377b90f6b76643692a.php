<?php

/* EsqueletoBundle:Default:register.html.twig */
class __TwigTemplate_637271521785492343839ac6fe9f0a125e75c29f53d93b1a78a72b5d7023db75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8178d10921e9550a6ccdc7afc3714bbaa406c7f7bad7353c2fbe256e95f5a8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8178d10921e9550a6ccdc7afc3714bbaa406c7f7bad7353c2fbe256e95f5a8c9->enter($__internal_8178d10921e9550a6ccdc7afc3714bbaa406c7f7bad7353c2fbe256e95f5a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:register.html.twig"));

        $__internal_84c6525d7411b2c252ba9871da8a6ba56224310d7a698890eeadd2dc009b3f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c6525d7411b2c252ba9871da8a6ba56224310d7a698890eeadd2dc009b3f3a->enter($__internal_84c6525d7411b2c252ba9871da8a6ba56224310d7a698890eeadd2dc009b3f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8178d10921e9550a6ccdc7afc3714bbaa406c7f7bad7353c2fbe256e95f5a8c9->leave($__internal_8178d10921e9550a6ccdc7afc3714bbaa406c7f7bad7353c2fbe256e95f5a8c9_prof);

        
        $__internal_84c6525d7411b2c252ba9871da8a6ba56224310d7a698890eeadd2dc009b3f3a->leave($__internal_84c6525d7411b2c252ba9871da8a6ba56224310d7a698890eeadd2dc009b3f3a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e76686d1a853600c8eb16bdc36072612fb47b8c8f9d1051926304a8f7481dc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76686d1a853600c8eb16bdc36072612fb47b8c8f9d1051926304a8f7481dc94->enter($__internal_e76686d1a853600c8eb16bdc36072612fb47b8c8f9d1051926304a8f7481dc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a51c0fee1eb4030a2b482359e5d1ec84486d936e9f2574870f15d00b3b187472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51c0fee1eb4030a2b482359e5d1ec84486d936e9f2574870f15d00b3b187472->enter($__internal_a51c0fee1eb4030a2b482359e5d1ec84486d936e9f2574870f15d00b3b187472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrar", array()), 'row');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a51c0fee1eb4030a2b482359e5d1ec84486d936e9f2574870f15d00b3b187472->leave($__internal_a51c0fee1eb4030a2b482359e5d1ec84486d936e9f2574870f15d00b3b187472_prof);

        
        $__internal_e76686d1a853600c8eb16bdc36072612fb47b8c8f9d1051926304a8f7481dc94->leave($__internal_e76686d1a853600c8eb16bdc36072612fb47b8c8f9d1051926304a8f7481dc94_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.Registrar) }}
{{ form_end(form) }}
{% endblock %}
", "EsqueletoBundle:Default:register.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/register.html.twig");
    }
}
