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

/* user/index.html.twig */
class __TwigTemplate_9ba4168650984dc28c007c5e8e2ec55e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Admin Usuarios";
        
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


        .example-wrapper {
            margin: 2em auto;
            max-width: 1000px;
            width: 95%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font: 18px/1.5 sans-serif;
            text-align: center; /* Centrado de contenido */
        }


        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto; /* Centrado de la tabla */
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .table a {
            padding: 6px 12px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .table a:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }


        .links-container {
            display: flex;
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

    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"example-wrapper\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 118
            yield "                <tr>
                    <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                    <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 120), "html", null, true);
            yield "</td>
                    <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 121), "html", null, true);
            yield "</td>
                    <td>";
            // line 122
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 122)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 122)), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telefono", [], "any", false, false, false, 123), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\">Editar</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 129
            yield "                <tr>
                    <td colspan=\"8\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "            </tbody>
        </table>

        <div class=\"links-container\">
            <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">Crear nuevo usuario</a>
            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\">Inicio</a>
        </div>
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
        return "user/index.html.twig";
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
        return array (  270 => 138,  266 => 137,  260 => 133,  251 => 129,  242 => 125,  237 => 123,  233 => 122,  229 => 121,  225 => 120,  221 => 119,  218 => 118,  213 => 117,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Usuarios{% endblock %}

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


        .example-wrapper {
            margin: 2em auto;
            max-width: 1000px;
            width: 95%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font: 18px/1.5 sans-serif;
            text-align: center; /* Centrado de contenido */
        }


        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto; /* Centrado de la tabla */
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .table a {
            padding: 6px 12px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .table a:hover {
            background-color: #6d87c6;
            border-color: #ffffff;
            color: white;
        }


        .links-container {
            display: flex;
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

    </style>

    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"example-wrapper\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.nombre }}</td>
                    <td>{{ user.apellidos }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                    <td>{{ user.telefono }}</td>
                    <td>
                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">Editar</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div class=\"links-container\">
            <a href=\"{{ path('app_user_new') }}\">Crear nuevo usuario</a>
            <a href=\"{{ path('app_main') }}\">Inicio</a>
        </div>
    </div>

{% endblock %}
", "user/index.html.twig", "/www/html/restaurante_dwes/templates/user/index.html.twig");
    }
}
