<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea0f44f4e5bad406c4d40359b8d60f3067cb12a9642dbeedc02aa64a4e9f37fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0f44f4e5bad406c4d40359b8d60f3067cb12a9642dbeedc02aa64a4e9f37fd->enter($__internal_ea0f44f4e5bad406c4d40359b8d60f3067cb12a9642dbeedc02aa64a4e9f37fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_54b4cc4e0b00e335ead795bbdf8b68bf2102944a26bbf512f9f49e1be8d8fd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b4cc4e0b00e335ead795bbdf8b68bf2102944a26bbf512f9f49e1be8d8fd4c->enter($__internal_54b4cc4e0b00e335ead795bbdf8b68bf2102944a26bbf512f9f49e1be8d8fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


</style>
</head>
<body>

<ul>
  <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
  <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Usuarios</a></li>
  <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ranking");
        echo "\">Ranking</a></li>
  <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a></li>
  <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">Register</a></li>
  <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cards");
        echo "\">Cards</a></li>

</ul>
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "</body>
</html>
";
        
        $__internal_ea0f44f4e5bad406c4d40359b8d60f3067cb12a9642dbeedc02aa64a4e9f37fd->leave($__internal_ea0f44f4e5bad406c4d40359b8d60f3067cb12a9642dbeedc02aa64a4e9f37fd_prof);

        
        $__internal_54b4cc4e0b00e335ead795bbdf8b68bf2102944a26bbf512f9f49e1be8d8fd4c->leave($__internal_54b4cc4e0b00e335ead795bbdf8b68bf2102944a26bbf512f9f49e1be8d8fd4c_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_43329b726d186962bc38fa130416f74d5bd35c607b25a998dba535f7f20e32d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43329b726d186962bc38fa130416f74d5bd35c607b25a998dba535f7f20e32d4->enter($__internal_43329b726d186962bc38fa130416f74d5bd35c607b25a998dba535f7f20e32d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9af05ae9f878515edb8c686b2d3655ebbde14fee1f843d86cc1df3dbe0119234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af05ae9f878515edb8c686b2d3655ebbde14fee1f843d86cc1df3dbe0119234->enter($__internal_9af05ae9f878515edb8c686b2d3655ebbde14fee1f843d86cc1df3dbe0119234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9af05ae9f878515edb8c686b2d3655ebbde14fee1f843d86cc1df3dbe0119234->leave($__internal_9af05ae9f878515edb8c686b2d3655ebbde14fee1f843d86cc1df3dbe0119234_prof);

        
        $__internal_43329b726d186962bc38fa130416f74d5bd35c607b25a998dba535f7f20e32d4->leave($__internal_43329b726d186962bc38fa130416f74d5bd35c607b25a998dba535f7f20e32d4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  94 => 49,  92 => 47,  86 => 44,  82 => 43,  78 => 42,  74 => 41,  70 => 40,  66 => 39,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


</style>
</head>
<body>

<ul>
  <li><a href=\"{{ path('home') }}\">Home</a></li>
  <li><a href=\"{{ path('usuario_index') }}\">Usuarios</a></li>
  <li><a href=\"{{ path('ranking') }}\">Ranking</a></li>
  <li><a href=\"{{ path('login') }}\">Login</a></li>
  <li><a href=\"{{ path('register') }}\">Register</a></li>
  <li><a href=\"{{ path('cards') }}\">Cards</a></li>

</ul>
{% block body %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\app\\Resources\\views\\base.html.twig");
    }
}
