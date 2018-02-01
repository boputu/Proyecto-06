<?php

/* EsqueletoBundle:Default:index.html.twig */
class __TwigTemplate_b4c221ef94b860078f7d6918a973d6d987299d5cfbb79d0747ed7fa773d6724d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:index.html.twig", 1);
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
        $__internal_576ebd916493ebc407fe544ad7d5bad545cf06fdf43a3131f89df53a02900ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576ebd916493ebc407fe544ad7d5bad545cf06fdf43a3131f89df53a02900ec3->enter($__internal_576ebd916493ebc407fe544ad7d5bad545cf06fdf43a3131f89df53a02900ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:index.html.twig"));

        $__internal_3d04cfcbdbcd646e708f9ccfb23a9ce456b5a612720e2e99abc830c27be40666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d04cfcbdbcd646e708f9ccfb23a9ce456b5a612720e2e99abc830c27be40666->enter($__internal_3d04cfcbdbcd646e708f9ccfb23a9ce456b5a612720e2e99abc830c27be40666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576ebd916493ebc407fe544ad7d5bad545cf06fdf43a3131f89df53a02900ec3->leave($__internal_576ebd916493ebc407fe544ad7d5bad545cf06fdf43a3131f89df53a02900ec3_prof);

        
        $__internal_3d04cfcbdbcd646e708f9ccfb23a9ce456b5a612720e2e99abc830c27be40666->leave($__internal_3d04cfcbdbcd646e708f9ccfb23a9ce456b5a612720e2e99abc830c27be40666_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dcb9f2a9fec034302f7ee1ab62802e3f7bdb62519e7fd82cf99636841b2a1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcb9f2a9fec034302f7ee1ab62802e3f7bdb62519e7fd82cf99636841b2a1ed->enter($__internal_7dcb9f2a9fec034302f7ee1ab62802e3f7bdb62519e7fd82cf99636841b2a1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e75c694df2278291d4409c3a8e3c46f0216bcb4af5ae7330872a0eb4efe80efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75c694df2278291d4409c3a8e3c46f0216bcb4af5ae7330872a0eb4efe80efc->enter($__internal_e75c694df2278291d4409c3a8e3c46f0216bcb4af5ae7330872a0eb4efe80efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e75c694df2278291d4409c3a8e3c46f0216bcb4af5ae7330872a0eb4efe80efc->leave($__internal_e75c694df2278291d4409c3a8e3c46f0216bcb4af5ae7330872a0eb4efe80efc_prof);

        
        $__internal_7dcb9f2a9fec034302f7ee1ab62802e3f7bdb62519e7fd82cf99636841b2a1ed->leave($__internal_7dcb9f2a9fec034302f7ee1ab62802e3f7bdb62519e7fd82cf99636841b2a1ed_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:index.html.twig";
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
", "EsqueletoBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/index.html.twig");
    }
}
