<?php

/* EsqueletoBundle:Default:login.html.twig */
class __TwigTemplate_b5d5fe8605085a47b578bd941628d836f9ee560b2830e7898dca33486c169f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:login.html.twig", 1);
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
        $__internal_012b624045ad05bf0b311e879096dc95984d9c58dcb5c360cf6e4d207488af8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012b624045ad05bf0b311e879096dc95984d9c58dcb5c360cf6e4d207488af8b->enter($__internal_012b624045ad05bf0b311e879096dc95984d9c58dcb5c360cf6e4d207488af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:login.html.twig"));

        $__internal_4d0eeb832fc802cfd3a2bc3172795758a5841be41c9b60768d1a75329cb2b8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0eeb832fc802cfd3a2bc3172795758a5841be41c9b60768d1a75329cb2b8f7->enter($__internal_4d0eeb832fc802cfd3a2bc3172795758a5841be41c9b60768d1a75329cb2b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_012b624045ad05bf0b311e879096dc95984d9c58dcb5c360cf6e4d207488af8b->leave($__internal_012b624045ad05bf0b311e879096dc95984d9c58dcb5c360cf6e4d207488af8b_prof);

        
        $__internal_4d0eeb832fc802cfd3a2bc3172795758a5841be41c9b60768d1a75329cb2b8f7->leave($__internal_4d0eeb832fc802cfd3a2bc3172795758a5841be41c9b60768d1a75329cb2b8f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e5b6b0b912580ebcb5fce401b5c42af86df2e2a47b2cbf520c914bfeeaa6a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5b6b0b912580ebcb5fce401b5c42af86df2e2a47b2cbf520c914bfeeaa6a41->enter($__internal_4e5b6b0b912580ebcb5fce401b5c42af86df2e2a47b2cbf520c914bfeeaa6a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40ea8f865516445baa607a99ad5497a375edfdc1dde012c62d9c5f0c9e516c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ea8f865516445baa607a99ad5497a375edfdc1dde012c62d9c5f0c9e516c25->enter($__internal_40ea8f865516445baa607a99ad5497a375edfdc1dde012c62d9c5f0c9e516c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 19
        echo "
    <button type=\"submit\">login</button>
</form>

";
        
        $__internal_40ea8f865516445baa607a99ad5497a375edfdc1dde012c62d9c5f0c9e516c25->leave($__internal_40ea8f865516445baa607a99ad5497a375edfdc1dde012c62d9c5f0c9e516c25_prof);

        
        $__internal_4e5b6b0b912580ebcb5fce401b5c42af86df2e2a47b2cbf520c914bfeeaa6a41->leave($__internal_4e5b6b0b912580ebcb5fce401b5c42af86df2e2a47b2cbf520c914bfeeaa6a41_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  65 => 9,  60 => 7,  57 => 6,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>

{% endblock %}
", "EsqueletoBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/login.html.twig");
    }
}
