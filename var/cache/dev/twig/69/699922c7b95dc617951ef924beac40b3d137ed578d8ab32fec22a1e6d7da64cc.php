<?php

/* BorjaBundle:Default:index.html.twig */
class __TwigTemplate_e2e0f671bc25d8ad0cfb6a4adffdd4e4ddd15e578e09cff54b83dd6ab832c394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BorjaBundle:Default:index.html.twig", 1);
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
        $__internal_1f10368cefd7bd22546b10343fb0f3ec31a2ee0a65536440909b3be1dd01ed12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f10368cefd7bd22546b10343fb0f3ec31a2ee0a65536440909b3be1dd01ed12->enter($__internal_1f10368cefd7bd22546b10343fb0f3ec31a2ee0a65536440909b3be1dd01ed12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BorjaBundle:Default:index.html.twig"));

        $__internal_634d5d70ef0cf9d24ef279b95a2854487a6186fe1e9a8d693547ee177fda7bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634d5d70ef0cf9d24ef279b95a2854487a6186fe1e9a8d693547ee177fda7bb9->enter($__internal_634d5d70ef0cf9d24ef279b95a2854487a6186fe1e9a8d693547ee177fda7bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BorjaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f10368cefd7bd22546b10343fb0f3ec31a2ee0a65536440909b3be1dd01ed12->leave($__internal_1f10368cefd7bd22546b10343fb0f3ec31a2ee0a65536440909b3be1dd01ed12_prof);

        
        $__internal_634d5d70ef0cf9d24ef279b95a2854487a6186fe1e9a8d693547ee177fda7bb9->leave($__internal_634d5d70ef0cf9d24ef279b95a2854487a6186fe1e9a8d693547ee177fda7bb9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c36e6ab75dfad8f1abf056cbc9242de3fa274d65c7f6826abc5dcb0f6d02788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c36e6ab75dfad8f1abf056cbc9242de3fa274d65c7f6826abc5dcb0f6d02788->enter($__internal_9c36e6ab75dfad8f1abf056cbc9242de3fa274d65c7f6826abc5dcb0f6d02788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a529c443becf68a2eff44cac39e3a458520900f4960b7839b47f60ea4752df0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a529c443becf68a2eff44cac39e3a458520900f4960b7839b47f60ea4752df0a->enter($__internal_a529c443becf68a2eff44cac39e3a458520900f4960b7839b47f60ea4752df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a529c443becf68a2eff44cac39e3a458520900f4960b7839b47f60ea4752df0a->leave($__internal_a529c443becf68a2eff44cac39e3a458520900f4960b7839b47f60ea4752df0a_prof);

        
        $__internal_9c36e6ab75dfad8f1abf056cbc9242de3fa274d65c7f6826abc5dcb0f6d02788->leave($__internal_9c36e6ab75dfad8f1abf056cbc9242de3fa274d65c7f6826abc5dcb0f6d02788_prof);

    }

    public function getTemplateName()
    {
        return "BorjaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
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
{% endblock %}
", "BorjaBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\BorjaBundle/Resources/views/Default/index.html.twig");
    }
}
