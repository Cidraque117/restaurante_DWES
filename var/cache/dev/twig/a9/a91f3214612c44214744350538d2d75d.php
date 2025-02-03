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

/* main/index.html.twig */
class __TwigTemplate_05efe9c8d561d7955e2d8cf7e0438f7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        yield "Restaurante DWES";
        
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
        /* Estilo para el contenedor principal */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header */
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

        /* Contenedor de enlaces */
        .example-wrapper {
            margin: 2em auto;
            max-width: 800px;
            width: 95%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font: 18px/1.5 sans-serif;
            text-align: center;
        }

        .example-wrapper h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 1em;
        }

        .example-wrapper p {
            margin: 1em 0;
        }

        /* Contenedor de enlaces */
        .links-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .links-container a {
            padding: 12px 20px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .links-container a:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }

        #user{
            color: #0042ff;
        }

        #admin{
            border: solid 3px #6d87c6;

        }
        footer {
            background-color: #3b61c8;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin-top: 10px;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: all 0.5s ease-out;
        }



        footer a:hover {
            padding: 5px 15px;
            border-radius: 10px;
            border: 2px solid white;
        }

    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"example-wrapper\">
        <h2>Bienvenido al Restaurante DWES</h2>

        <p>En el restaurante DWES podrás encontrar un espacio para ti y tus componentes favoritos
            dentro de contenedores personalizados en los que podrás frustrarte dentro de la
            más absoluta privacidad.</p>

        <!-- Contenedor de enlaces -->
        <div class=\"links-container\">
            ";
        // line 128
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 129
            yield "                <p id=\"user\">¡Hola ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "nombre", [], "any", false, false, false, 129), "html", null, true);
            yield "!</p>
                <a href=";
            // line 130
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield ">Desconectar</a>
                ";
            // line 131
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 132
                yield "                    <a id=\"admin\" href=";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield ">Administración de usuarios</a>
                    <a id=\"admin\" href=";
                // line 133
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_index");
                yield ">Administración de reservas</a>
                ";
            } else {
                // line 135
                yield "                    ";
                // line 136
                yield "                ";
            }
            // line 137
            yield "                    <a href=";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show");
            yield ">Perfil de Usuario</a>
                    <a href=";
            // line 138
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_new");
            yield ">Reservar</a>

            ";
        } else {
            // line 141
            yield "                <a href=";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield ">Logueo</a>
                <a href=";
            // line 142
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield ">Registro</a>
            ";
        }
        // line 144
        yield "                <a href=";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carta");
        yield ">Carta</a>
                <a href=";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_encuentra");
        yield ">Encuéntranos</a>
                <a href=";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quienes");
        yield ">Quienes somos</a>

        </div>
    </div>
    <footer>
        <p>&copy; 2025 Restaurante DWES. Todos los derechos reservados.</p>
    </footer>

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
        return "main/index.html.twig";
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
        return array (  282 => 146,  278 => 145,  273 => 144,  268 => 142,  263 => 141,  257 => 138,  252 => 137,  249 => 136,  247 => 135,  242 => 133,  237 => 132,  235 => 131,  231 => 130,  226 => 129,  224 => 128,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Restaurante DWES{% endblock %}

{% block body %}
    <style>
        /* Estilo para el contenedor principal */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header */
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

        /* Contenedor de enlaces */
        .example-wrapper {
            margin: 2em auto;
            max-width: 800px;
            width: 95%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font: 18px/1.5 sans-serif;
            text-align: center;
        }

        .example-wrapper h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 1em;
        }

        .example-wrapper p {
            margin: 1em 0;
        }

        /* Contenedor de enlaces */
        .links-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .links-container a {
            padding: 12px 20px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .links-container a:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }

        #user{
            color: #0042ff;
        }

        #admin{
            border: solid 3px #6d87c6;

        }
        footer {
            background-color: #3b61c8;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin-top: 10px;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: all 0.5s ease-out;
        }



        footer a:hover {
            padding: 5px 15px;
            border-radius: 10px;
            border: 2px solid white;
        }

    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"example-wrapper\">
        <h2>Bienvenido al Restaurante DWES</h2>

        <p>En el restaurante DWES podrás encontrar un espacio para ti y tus componentes favoritos
            dentro de contenedores personalizados en los que podrás frustrarte dentro de la
            más absoluta privacidad.</p>

        <!-- Contenedor de enlaces -->
        <div class=\"links-container\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <p id=\"user\">¡Hola {{ app.user.nombre }}!</p>
                <a href={{ path('app_logout') }}>Desconectar</a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a id=\"admin\" href={{ path('app_user_index') }}>Administración de usuarios</a>
                    <a id=\"admin\" href={{ path('app_reserva_index') }}>Administración de reservas</a>
                {% else %}
                    {#<a href={{ path('app_reserva_new') }}>Reservar</a>#}
                {% endif %}
                    <a href={{ path('app_user_show') }}>Perfil de Usuario</a>
                    <a href={{ path('app_reserva_new') }}>Reservar</a>

            {% else %}
                <a href={{ path('app_login') }}>Logueo</a>
                <a href={{ path('app_register') }}>Registro</a>
            {% endif %}
                <a href={{ path('app_carta') }}>Carta</a>
                <a href={{ path('app_encuentra') }}>Encuéntranos</a>
                <a href={{ path('app_quienes') }}>Quienes somos</a>

        </div>
    </div>
    <footer>
        <p>&copy; 2025 Restaurante DWES. Todos los derechos reservados.</p>
    </footer>

{% endblock %}
", "main/index.html.twig", "/www/html/restaurante_dwes/templates/main/index.html.twig");
    }
}
