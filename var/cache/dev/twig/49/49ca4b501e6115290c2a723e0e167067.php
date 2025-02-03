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

/* reserva/index.html.twig */
class __TwigTemplate_8e1fb6a35acc01c2a3b2c35c2f18af5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserva/index.html.twig", 1);
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

        yield "Admin Reservas";
        
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
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
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
            padding: 7px;
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
        .btn {
            padding:10px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            font-size: 18px;

        }

        .btn:hover {
            background-color: #dd3c3c;
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
                <th>Nº de Reserva</th>
                <th>Usuario</th>
                <th>Fecha y hora reserva</th>
                <th>Comensales</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 129
            yield "                <tr>
                    <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                    <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "usuario", [], "any", false, false, false, 131), "nombre", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                    <td>";
            // line 132
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "fecha", [], "any", false, false, false, 132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "fecha", [], "any", false, false, false, 132), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "comensales", [], "any", false, false, false, 133), "html", null, true);
            yield "</td>
                    <td class=\"links-container\">
                        <a href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\">Mostrar</a>
                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\">Editar</a>
                        ";
            // line 137
            yield Twig\Extension\CoreExtension::include($this->env, $context, "reserva/_delete_form.html.twig", ["button_label" => "Eliminar"]);
            yield "
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 141
            yield "                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reserva'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "            </tbody>
        </table>

        <div class=\"links-container\">
            <a href=\"";
        // line 149
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
        return "reserva/index.html.twig";
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
        return array (  302 => 149,  296 => 145,  287 => 141,  270 => 137,  266 => 136,  262 => 135,  257 => 133,  253 => 132,  249 => 131,  245 => 130,  242 => 129,  224 => 128,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Reservas{% endblock %}

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
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
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
            padding: 7px;
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
        .btn {
            padding:10px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            font-size: 18px;

        }

        .btn:hover {
            background-color: #dd3c3c;
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
                <th>Nº de Reserva</th>
                <th>Usuario</th>
                <th>Fecha y hora reserva</th>
                <th>Comensales</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            {% for reserva in reservas %}
                <tr>
                    <td>{{ reserva.id }}</td>
                    <td>{{ reserva.usuario.nombre }}</td>
                    <td>{{ reserva.fecha ? reserva.fecha|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ reserva.comensales }}</td>
                    <td class=\"links-container\">
                        <a href=\"{{ path('app_reserva_show', {'id': reserva.id}) }}\">Mostrar</a>
                        <a href=\"{{ path('app_reserva_edit', {'id': reserva.id}) }}\">Editar</a>
                        {{ include('reserva/_delete_form.html.twig', { button_label: 'Eliminar' }) }}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div class=\"links-container\">
            <a href=\"{{ path('app_main') }}\">Inicio</a>
        </div>
    </div>
{% endblock %}", "reserva/index.html.twig", "/www/html/restaurante_dwes/templates/reserva/index.html.twig");
    }
}
