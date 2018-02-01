<?php

/* EsqueletoBundle:Default:ranking.html.twig */
class __TwigTemplate_a00c060780c4fb0a08b5d0e1812b4fcdfd1f1e4f074d74502b028cf1153532bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:ranking.html.twig", 1);
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
        $__internal_16cd8500584c9dfd2bd0e40c94ba5f42cc77504e56f360137c0e5d0fe1e7f0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cd8500584c9dfd2bd0e40c94ba5f42cc77504e56f360137c0e5d0fe1e7f0fd->enter($__internal_16cd8500584c9dfd2bd0e40c94ba5f42cc77504e56f360137c0e5d0fe1e7f0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:ranking.html.twig"));

        $__internal_e1275b243ec027dbde7c2360c63744b54883d07562449703731a4e9e4510874e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1275b243ec027dbde7c2360c63744b54883d07562449703731a4e9e4510874e->enter($__internal_e1275b243ec027dbde7c2360c63744b54883d07562449703731a4e9e4510874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:ranking.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16cd8500584c9dfd2bd0e40c94ba5f42cc77504e56f360137c0e5d0fe1e7f0fd->leave($__internal_16cd8500584c9dfd2bd0e40c94ba5f42cc77504e56f360137c0e5d0fe1e7f0fd_prof);

        
        $__internal_e1275b243ec027dbde7c2360c63744b54883d07562449703731a4e9e4510874e->leave($__internal_e1275b243ec027dbde7c2360c63744b54883d07562449703731a4e9e4510874e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_48d80ccfbd6f10fec0258ee828915dfb102027b6f37c5815c6447ac95e12c83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d80ccfbd6f10fec0258ee828915dfb102027b6f37c5815c6447ac95e12c83e->enter($__internal_48d80ccfbd6f10fec0258ee828915dfb102027b6f37c5815c6447ac95e12c83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb1b1ee3b4754c05b897a1f392ce48e99e24e4d9dbe996859e42b56eed55918d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1b1ee3b4754c05b897a1f392ce48e99e24e4d9dbe996859e42b56eed55918d->enter($__internal_bb1b1ee3b4754c05b897a1f392ce48e99e24e4d9dbe996859e42b56eed55918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
Usuario: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "usuario", array()), "html", null, true);
            echo "<br>
Contraseña: ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "contrasenya", array()), "html", null, true);
            echo "<br>
Ranking: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "ranking", array()), "html", null, true);
            echo "<br>
Nivel: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "level", array()), "html", null, true);
            echo "<br><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['croyale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bb1b1ee3b4754c05b897a1f392ce48e99e24e4d9dbe996859e42b56eed55918d->leave($__internal_bb1b1ee3b4754c05b897a1f392ce48e99e24e4d9dbe996859e42b56eed55918d_prof);

        
        $__internal_48d80ccfbd6f10fec0258ee828915dfb102027b6f37c5815c6447ac95e12c83e->leave($__internal_48d80ccfbd6f10fec0258ee828915dfb102027b6f37c5815c6447ac95e12c83e_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:ranking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  53 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
Usuario: {{ croyale.usuario}}<br>
Contraseña: {{ croyale.contrasenya}}<br>
Ranking: {{ croyale.ranking}}<br>
Nivel: {{ croyale.level}}<br><br>
{% endfor %}
{% endblock %}
", "EsqueletoBundle:Default:ranking.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/ranking.html.twig");
    }
}
