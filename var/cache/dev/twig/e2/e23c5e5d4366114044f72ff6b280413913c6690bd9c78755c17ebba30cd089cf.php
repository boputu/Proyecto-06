<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2d81854e0f2b4224b6fa5b73e4718848477fea0e157b9426de63eb5e51e4dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f133c8e76c42e1503e94bb09920a218cd29c892d50a75fc70da4f9e9c4c2257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f133c8e76c42e1503e94bb09920a218cd29c892d50a75fc70da4f9e9c4c2257->enter($__internal_5f133c8e76c42e1503e94bb09920a218cd29c892d50a75fc70da4f9e9c4c2257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a75b9c82384bd8557e5ae508ed17b3538b7b036bc6d5ee3b9d5c5890308dce4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75b9c82384bd8557e5ae508ed17b3538b7b036bc6d5ee3b9d5c5890308dce4b->enter($__internal_a75b9c82384bd8557e5ae508ed17b3538b7b036bc6d5ee3b9d5c5890308dce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f133c8e76c42e1503e94bb09920a218cd29c892d50a75fc70da4f9e9c4c2257->leave($__internal_5f133c8e76c42e1503e94bb09920a218cd29c892d50a75fc70da4f9e9c4c2257_prof);

        
        $__internal_a75b9c82384bd8557e5ae508ed17b3538b7b036bc6d5ee3b9d5c5890308dce4b->leave($__internal_a75b9c82384bd8557e5ae508ed17b3538b7b036bc6d5ee3b9d5c5890308dce4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fdf4d9465778f957152d8caf1af35d630c40bc53cfd3b6faea742e4abcc5f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdf4d9465778f957152d8caf1af35d630c40bc53cfd3b6faea742e4abcc5f5e->enter($__internal_9fdf4d9465778f957152d8caf1af35d630c40bc53cfd3b6faea742e4abcc5f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ceb16aecb86cc7829e027fa38787f5c36eac9154fe711cb6beebf15b4e61c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceb16aecb86cc7829e027fa38787f5c36eac9154fe711cb6beebf15b4e61c0c->enter($__internal_4ceb16aecb86cc7829e027fa38787f5c36eac9154fe711cb6beebf15b4e61c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4ceb16aecb86cc7829e027fa38787f5c36eac9154fe711cb6beebf15b4e61c0c->leave($__internal_4ceb16aecb86cc7829e027fa38787f5c36eac9154fe711cb6beebf15b4e61c0c_prof);

        
        $__internal_9fdf4d9465778f957152d8caf1af35d630c40bc53cfd3b6faea742e4abcc5f5e->leave($__internal_9fdf4d9465778f957152d8caf1af35d630c40bc53cfd3b6faea742e4abcc5f5e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_899e85cd62c02eaaea09e2b9bf3e6e786febc5b88c4f3dd91105771f39f47153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899e85cd62c02eaaea09e2b9bf3e6e786febc5b88c4f3dd91105771f39f47153->enter($__internal_899e85cd62c02eaaea09e2b9bf3e6e786febc5b88c4f3dd91105771f39f47153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac97798c50d550d251796686eb353b1e790744818b6225e2f0325cca2baba26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac97798c50d550d251796686eb353b1e790744818b6225e2f0325cca2baba26b->enter($__internal_ac97798c50d550d251796686eb353b1e790744818b6225e2f0325cca2baba26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac97798c50d550d251796686eb353b1e790744818b6225e2f0325cca2baba26b->leave($__internal_ac97798c50d550d251796686eb353b1e790744818b6225e2f0325cca2baba26b_prof);

        
        $__internal_899e85cd62c02eaaea09e2b9bf3e6e786febc5b88c4f3dd91105771f39f47153->leave($__internal_899e85cd62c02eaaea09e2b9bf3e6e786febc5b88c4f3dd91105771f39f47153_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e99276d1b66c0fb0f33b2a28693d01ec4f884b1b4ece7ec160f9bc8a6f2fade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e99276d1b66c0fb0f33b2a28693d01ec4f884b1b4ece7ec160f9bc8a6f2fade->enter($__internal_4e99276d1b66c0fb0f33b2a28693d01ec4f884b1b4ece7ec160f9bc8a6f2fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5ffb886537e93b5bb559d6f8ff8f55f4b3beee64c7eb6b7a2b0f451b8a47ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ffb886537e93b5bb559d6f8ff8f55f4b3beee64c7eb6b7a2b0f451b8a47ecf->enter($__internal_c5ffb886537e93b5bb559d6f8ff8f55f4b3beee64c7eb6b7a2b0f451b8a47ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c5ffb886537e93b5bb559d6f8ff8f55f4b3beee64c7eb6b7a2b0f451b8a47ecf->leave($__internal_c5ffb886537e93b5bb559d6f8ff8f55f4b3beee64c7eb6b7a2b0f451b8a47ecf_prof);

        
        $__internal_4e99276d1b66c0fb0f33b2a28693d01ec4f884b1b4ece7ec160f9bc8a6f2fade->leave($__internal_4e99276d1b66c0fb0f33b2a28693d01ec4f884b1b4ece7ec160f9bc8a6f2fade_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
