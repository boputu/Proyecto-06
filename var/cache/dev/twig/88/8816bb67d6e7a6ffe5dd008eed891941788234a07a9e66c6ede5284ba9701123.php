<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e14f25760d986ef084390dd718e559a641490608ba9a4d5e64f594428b933dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e14f25760d986ef084390dd718e559a641490608ba9a4d5e64f594428b933dc->enter($__internal_7e14f25760d986ef084390dd718e559a641490608ba9a4d5e64f594428b933dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e03c6176a8ea4c8bb14104b8bbc1bd11483e5156fd2c8521dcc80bb23d26b93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03c6176a8ea4c8bb14104b8bbc1bd11483e5156fd2c8521dcc80bb23d26b93a->enter($__internal_e03c6176a8ea4c8bb14104b8bbc1bd11483e5156fd2c8521dcc80bb23d26b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7e14f25760d986ef084390dd718e559a641490608ba9a4d5e64f594428b933dc->leave($__internal_7e14f25760d986ef084390dd718e559a641490608ba9a4d5e64f594428b933dc_prof);

        
        $__internal_e03c6176a8ea4c8bb14104b8bbc1bd11483e5156fd2c8521dcc80bb23d26b93a->leave($__internal_e03c6176a8ea4c8bb14104b8bbc1bd11483e5156fd2c8521dcc80bb23d26b93a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa42aa019b106fdf419f829a52faa239af5ceb85cb8c9c9e6d72cebc218a5367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa42aa019b106fdf419f829a52faa239af5ceb85cb8c9c9e6d72cebc218a5367->enter($__internal_aa42aa019b106fdf419f829a52faa239af5ceb85cb8c9c9e6d72cebc218a5367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c87620d48a72b7015c8d8f1db1e7ea58fb9ad7c64ff235c0a79524e2832adbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87620d48a72b7015c8d8f1db1e7ea58fb9ad7c64ff235c0a79524e2832adbb1->enter($__internal_c87620d48a72b7015c8d8f1db1e7ea58fb9ad7c64ff235c0a79524e2832adbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c87620d48a72b7015c8d8f1db1e7ea58fb9ad7c64ff235c0a79524e2832adbb1->leave($__internal_c87620d48a72b7015c8d8f1db1e7ea58fb9ad7c64ff235c0a79524e2832adbb1_prof);

        
        $__internal_aa42aa019b106fdf419f829a52faa239af5ceb85cb8c9c9e6d72cebc218a5367->leave($__internal_aa42aa019b106fdf419f829a52faa239af5ceb85cb8c9c9e6d72cebc218a5367_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_878124b380f02fca5b8039887c7bb821fb710c24c0b13dd1bd0226652bdb38f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878124b380f02fca5b8039887c7bb821fb710c24c0b13dd1bd0226652bdb38f1->enter($__internal_878124b380f02fca5b8039887c7bb821fb710c24c0b13dd1bd0226652bdb38f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5bf704446ce5f80352772dcb5690c1fb58dcce31bb05ba9e7413adc1075db17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf704446ce5f80352772dcb5690c1fb58dcce31bb05ba9e7413adc1075db17a->enter($__internal_5bf704446ce5f80352772dcb5690c1fb58dcce31bb05ba9e7413adc1075db17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5bf704446ce5f80352772dcb5690c1fb58dcce31bb05ba9e7413adc1075db17a->leave($__internal_5bf704446ce5f80352772dcb5690c1fb58dcce31bb05ba9e7413adc1075db17a_prof);

        
        $__internal_878124b380f02fca5b8039887c7bb821fb710c24c0b13dd1bd0226652bdb38f1->leave($__internal_878124b380f02fca5b8039887c7bb821fb710c24c0b13dd1bd0226652bdb38f1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d05115f274bf5195ea7428a5f2f2f494948f506b8b30a247c21b8bca2af51ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05115f274bf5195ea7428a5f2f2f494948f506b8b30a247c21b8bca2af51ebf->enter($__internal_d05115f274bf5195ea7428a5f2f2f494948f506b8b30a247c21b8bca2af51ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_795d2a19af9dbc1c260753934b1abaa7911f99ff18fde66a5c50e4184f59a1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795d2a19af9dbc1c260753934b1abaa7911f99ff18fde66a5c50e4184f59a1f1->enter($__internal_795d2a19af9dbc1c260753934b1abaa7911f99ff18fde66a5c50e4184f59a1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_795d2a19af9dbc1c260753934b1abaa7911f99ff18fde66a5c50e4184f59a1f1->leave($__internal_795d2a19af9dbc1c260753934b1abaa7911f99ff18fde66a5c50e4184f59a1f1_prof);

        
        $__internal_d05115f274bf5195ea7428a5f2f2f494948f506b8b30a247c21b8bca2af51ebf->leave($__internal_d05115f274bf5195ea7428a5f2f2f494948f506b8b30a247c21b8bca2af51ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
