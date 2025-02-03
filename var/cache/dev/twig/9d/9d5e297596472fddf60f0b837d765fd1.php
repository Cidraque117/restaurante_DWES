<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* encuentra/index.html.twig */
class __TwigTemplate_a6b0287eddcd638d4b46d9398b15b26e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encuentra/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encuentra/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "encuentra/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Encuéntranos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3b61c8;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .btn {
            padding: 12px 25px;
            background-color: #f0f0f0;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }

        .links-container {
            text-align: center;
            margin-top: 20px;
        }

        .links-container a {
            padding: 12px 25px;
            background-color: #f0f0f0;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .links-container a:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }

        .map-container {
            margin: 20px auto;
            max-width: 1000px;
            width: 95%;
            height: 500px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .location-info {
            text-align: center;
            margin: 20px 0;
            font-size: 1.2em;
            color: #333;
        }

        .location-info a {
            color: #3b61c8;
            text-decoration: none;
            font-weight: bold;
        }

        .location-info a:hover {
            text-decoration: underline;
        }
    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <!-- Mapa de Google Maps -->
    <div class=\"map-container\">
        <iframe
                src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3252.6724309904075!2d-0.3169105079895777!3d39.516691104933756!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2ses!4v1738021022246!5m2!1ses!2ses\"
                allowfullscreen=\"\"
                loading=\"lazy\"
                referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </div>

    <!-- Información de ubicación -->
    <div class=\"location-info\">
        Playa de Meliana S/N, Aparcamiento gratuito.
        <a href=\"https://maps.app.goo.gl/iHVeUR2ajQCyuwMs6\" target=\"_blank\">RESTAURANTE DWES</a>
    </div>

    <!-- Botón de Inicio -->
    <div class=\"links-container\">
        <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\" class=\"btn\">Inicio</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "encuentra/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  218 => 122,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Encuéntranos{% endblock %}

{% block body %}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3b61c8;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .btn {
            padding: 12px 25px;
            background-color: #f0f0f0;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }

        .links-container {
            text-align: center;
            margin-top: 20px;
        }

        .links-container a {
            padding: 12px 25px;
            background-color: #f0f0f0;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .links-container a:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }

        .map-container {
            margin: 20px auto;
            max-width: 1000px;
            width: 95%;
            height: 500px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .location-info {
            text-align: center;
            margin: 20px 0;
            font-size: 1.2em;
            color: #333;
        }

        .location-info a {
            color: #3b61c8;
            text-decoration: none;
            font-weight: bold;
        }

        .location-info a:hover {
            text-decoration: underline;
        }
    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <!-- Mapa de Google Maps -->
    <div class=\"map-container\">
        <iframe
                src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3252.6724309904075!2d-0.3169105079895777!3d39.516691104933756!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2ses!4v1738021022246!5m2!1ses!2ses\"
                allowfullscreen=\"\"
                loading=\"lazy\"
                referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </div>

    <!-- Información de ubicación -->
    <div class=\"location-info\">
        Playa de Meliana S/N, Aparcamiento gratuito.
        <a href=\"https://maps.app.goo.gl/iHVeUR2ajQCyuwMs6\" target=\"_blank\">RESTAURANTE DWES</a>
    </div>

    <!-- Botón de Inicio -->
    <div class=\"links-container\">
        <a href=\"{{ path('app_main') }}\" class=\"btn\">Inicio</a>
    </div>
{% endblock %}", "encuentra/index.html.twig", "/www/html/restaurante_dwes/templates/encuentra/index.html.twig");
    }
}
