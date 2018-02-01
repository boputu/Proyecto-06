<?php

/* EsqueletoBundle:Default:cards.html.twig */
class __TwigTemplate_76cf1ca8c469f2844f2af9e727f1b2b8599f85ec32bd4f0a3c7eb783f1db329a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:cards.html.twig", 1);
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
        $__internal_4d9f8cdd8f6733f9486405b736169e86559ef985485f149bf286df72310235a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9f8cdd8f6733f9486405b736169e86559ef985485f149bf286df72310235a8->enter($__internal_4d9f8cdd8f6733f9486405b736169e86559ef985485f149bf286df72310235a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:cards.html.twig"));

        $__internal_9c9a9d6ad114e29753989808b8b403d1331d298f513e5532303cbca929f1384c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9a9d6ad114e29753989808b8b403d1331d298f513e5532303cbca929f1384c->enter($__internal_9c9a9d6ad114e29753989808b8b403d1331d298f513e5532303cbca929f1384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:cards.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9f8cdd8f6733f9486405b736169e86559ef985485f149bf286df72310235a8->leave($__internal_4d9f8cdd8f6733f9486405b736169e86559ef985485f149bf286df72310235a8_prof);

        
        $__internal_9c9a9d6ad114e29753989808b8b403d1331d298f513e5532303cbca929f1384c->leave($__internal_9c9a9d6ad114e29753989808b8b403d1331d298f513e5532303cbca929f1384c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca09d706fdd23c47a277adc9b10ba80db8a74e80c3b8321afdc092486dd4f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca09d706fdd23c47a277adc9b10ba80db8a74e80c3b8321afdc092486dd4f85->enter($__internal_1ca09d706fdd23c47a277adc9b10ba80db8a74e80c3b8321afdc092486dd4f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f12c7b55400a2ef07f3dedefad9f08837dbd8901603766a0b41c8eb6c6b1d43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12c7b55400a2ef07f3dedefad9f08837dbd8901603766a0b41c8eb6c6b1d43d->enter($__internal_f12c7b55400a2ef07f3dedefad9f08837dbd8901603766a0b41c8eb6c6b1d43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["royale"]) ? $context["royale"] : $this->getContext($context, "royale")));
        foreach ($context['_seq'] as $context["_key"] => $context["croyale"]) {
            // line 4
            echo "ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "id", array()), "html", null, true);
            echo "<br>
Nombre: ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "nombre", array()), "html", null, true);
            echo "<br>
Tipo: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "tipo", array()), "html", null, true);
            echo "<br><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['croyale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f12c7b55400a2ef07f3dedefad9f08837dbd8901603766a0b41c8eb6c6b1d43d->leave($__internal_f12c7b55400a2ef07f3dedefad9f08837dbd8901603766a0b41c8eb6c6b1d43d_prof);

        
        $__internal_1ca09d706fdd23c47a277adc9b10ba80db8a74e80c3b8321afdc092486dd4f85->leave($__internal_1ca09d706fdd23c47a277adc9b10ba80db8a74e80c3b8321afdc092486dd4f85_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  58 => 5,  53 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% for croyale in royale %}
ID: {{ croyale.id}}<br>
Nombre: {{ croyale.nombre}}<br>
Tipo: {{ croyale.tipo}}<br><br>
{% endfor %}
{% endblock %}
", "EsqueletoBundle:Default:cards.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/cards.html.twig");
    }
}
