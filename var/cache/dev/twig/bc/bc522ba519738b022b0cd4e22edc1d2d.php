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

/* carta/index.html.twig */
class __TwigTemplate_9ad72107de29c66d3be8b339a4cfad3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carta/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carta/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carta/index.html.twig", 1);
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

        yield "Carta";
        
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

        .menu-container {
            margin: 2em auto;
            max-width: 1000px;
            width: 95%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font: 18px/1.5 sans-serif;
        }

        .menu-section {
            margin-bottom: 30px;
        }

        .menu-section h2 {
            color: #3b61c8;
            border-bottom: 2px solid #3b61c8;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .menu-item h3 {
            margin: 0;
            color: #333;
        }

        .menu-item p {
            margin: 5px 0;
            color: #666;
        }

        .menu-item .price {
            color: #3b61c8;
            font-weight: bold;
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

        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background-color: #3b61c8;
            color: white;
            border-radius: 8px;
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
    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"menu-container\">
        <!-- Sección de Entradas -->
        <div class=\"menu-section\">
            <h2>Entradas</h2>
            <div class=\"menu-item\">
                <div>
                    <h3>Ensalada César</h3>
                    <p>Lechuga romana, croutones, queso parmesano y aderezo César.</p>
                </div>
                <div class=\"price\">€7.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Bruschetta</h3>
                    <p>Pan tostado con tomate, albahaca y aceite de oliva.</p>
                </div>
                <div class=\"price\">€5.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Sopa del Día</h3>
                    <p>Sopa casera preparada diariamente con ingredientes frescos.</p>
                </div>
                <div class=\"price\">€6.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Empanadas</h3>
                    <p>Empanadas de carne o pollo, horneadas y servidas con salsa chimichurri.</p>
                </div>
                <div class=\"price\">€8.50</div>
            </div>
        </div>

        <!-- Sección de Platos Principales -->
        <div class=\"menu-section\">
            <h2>Platos Principales</h2>
            <div class=\"menu-item\">
                <div>
                    <h3>Filete de Salmón</h3>
                    <p>Salmón a la parrilla con vegetales frescos y arroz.</p>
                </div>
                <div class=\"price\">€13.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Pasta Alfredo</h3>
                    <p>Pasta con salsa Alfredo casera y pollo a la parrilla.</p>
                </div>
                <div class=\"price\">€10.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Lomo de Res</h3>
                    <p>Lomo de res a la parrilla con puré de papas y espárragos.</p>
                </div>
                <div class=\"price\">€16.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Pizza Margarita</h3>
                    <p>Pizza clásica con tomate, mozzarella y albahaca fresca.</p>
                </div>
                <div class=\"price\">€9.50</div>
            </div>
        </div>

        <!-- Sección de Postres -->
        <div class=\"menu-section\">
            <h2>Postres</h2>
            <div class=\"menu-item\">
                <div>
                    <h3>Tiramisú</h3>
                    <p>El clásico postre italiano con café y cacao.</p>
                </div>
                <div class=\"price\">€4.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Cheesecake</h3>
                    <p>Cheesecake de fresa con base de galleta.</p>
                </div>
                <div class=\"price\">€5.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Flan de Vainilla</h3>
                    <p>Flan casero con caramelo y vainilla.</p>
                </div>
                <div class=\"price\">€3.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Brownie con Helado</h3>
                    <p>Brownie de chocolate con helado de vainilla.</p>
                </div>
                <div class=\"price\">€6.50</div>
            </div>
        </div>
    </div>

    <!-- Botón de Inicio -->
    <div class=\"links-container\">
        <a href=\"";
        // line 226
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
        return "carta/index.html.twig";
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
        return array (  322 => 226,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carta{% endblock %}

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

        .menu-container {
            margin: 2em auto;
            max-width: 1000px;
            width: 95%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font: 18px/1.5 sans-serif;
        }

        .menu-section {
            margin-bottom: 30px;
        }

        .menu-section h2 {
            color: #3b61c8;
            border-bottom: 2px solid #3b61c8;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .menu-item h3 {
            margin: 0;
            color: #333;
        }

        .menu-item p {
            margin: 5px 0;
            color: #666;
        }

        .menu-item .price {
            color: #3b61c8;
            font-weight: bold;
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

        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background-color: #3b61c8;
            color: white;
            border-radius: 8px;
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
    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"menu-container\">
        <!-- Sección de Entradas -->
        <div class=\"menu-section\">
            <h2>Entradas</h2>
            <div class=\"menu-item\">
                <div>
                    <h3>Ensalada César</h3>
                    <p>Lechuga romana, croutones, queso parmesano y aderezo César.</p>
                </div>
                <div class=\"price\">€7.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Bruschetta</h3>
                    <p>Pan tostado con tomate, albahaca y aceite de oliva.</p>
                </div>
                <div class=\"price\">€5.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Sopa del Día</h3>
                    <p>Sopa casera preparada diariamente con ingredientes frescos.</p>
                </div>
                <div class=\"price\">€6.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Empanadas</h3>
                    <p>Empanadas de carne o pollo, horneadas y servidas con salsa chimichurri.</p>
                </div>
                <div class=\"price\">€8.50</div>
            </div>
        </div>

        <!-- Sección de Platos Principales -->
        <div class=\"menu-section\">
            <h2>Platos Principales</h2>
            <div class=\"menu-item\">
                <div>
                    <h3>Filete de Salmón</h3>
                    <p>Salmón a la parrilla con vegetales frescos y arroz.</p>
                </div>
                <div class=\"price\">€13.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Pasta Alfredo</h3>
                    <p>Pasta con salsa Alfredo casera y pollo a la parrilla.</p>
                </div>
                <div class=\"price\">€10.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Lomo de Res</h3>
                    <p>Lomo de res a la parrilla con puré de papas y espárragos.</p>
                </div>
                <div class=\"price\">€16.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Pizza Margarita</h3>
                    <p>Pizza clásica con tomate, mozzarella y albahaca fresca.</p>
                </div>
                <div class=\"price\">€9.50</div>
            </div>
        </div>

        <!-- Sección de Postres -->
        <div class=\"menu-section\">
            <h2>Postres</h2>
            <div class=\"menu-item\">
                <div>
                    <h3>Tiramisú</h3>
                    <p>El clásico postre italiano con café y cacao.</p>
                </div>
                <div class=\"price\">€4.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Cheesecake</h3>
                    <p>Cheesecake de fresa con base de galleta.</p>
                </div>
                <div class=\"price\">€5.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Flan de Vainilla</h3>
                    <p>Flan casero con caramelo y vainilla.</p>
                </div>
                <div class=\"price\">€3.50</div>
            </div>
            <div class=\"menu-item\">
                <div>
                    <h3>Brownie con Helado</h3>
                    <p>Brownie de chocolate con helado de vainilla.</p>
                </div>
                <div class=\"price\">€6.50</div>
            </div>
        </div>
    </div>

    <!-- Botón de Inicio -->
    <div class=\"links-container\">
        <a href=\"{{ path('app_main') }}\" class=\"btn\">Inicio</a>
    </div>
{% endblock %}", "carta/index.html.twig", "/www/html/restaurante_dwes/templates/carta/index.html.twig");
    }
}
