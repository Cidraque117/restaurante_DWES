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

/* reserva/edit.html.twig */
class __TwigTemplate_a9a6b44a7e2cfcc4721cde8f82b56287 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserva/edit.html.twig", 1);
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

        yield "Editar Reserva";
        
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
        yield "<style>
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

    .links-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 20px;
    }

    .flex-container {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        align-content:center ;
        height: 100vh;
        text-align: center;
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

    .btn {
        padding: 12px 20px;
        background-color: #f0f0f0;
        color: #333;
        text-decoration: none;
        border-radius: 6px;
        border: 1px solid #ccc;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        font-size: 16px;
        cursor: pointer;
        margin-top: 1rem;
    }

    .btn:hover {
        background-color: #6d87c6;
        border-color: #ffffff;
        color: white;
    }

    .btn-danger:hover{
        background-color: #df2929;
        color: white;
    }
    .form-input {
        margin-bottom: 20px;
        width: 60%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }.form-input2 {
         margin-bottom: 20px;
         width: 10%;
         padding: 5px;
         border: 1px solid #ccc;
         border-radius: 4px;
         font-size: 16px;
     }
     </style>
    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"flex-container\">
        <h1>Editar Reserva de ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 104, $this->source); })()), "usuario", [], "any", false, false, false, 104), "nombre", [], "any", false, false, false, 104), "html", null, true);
        yield "</h1>
        <div class=\"links-container\">

            ";
        // line 107
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reserva/_form.html.twig", ["button_label" => "Actualizar"]);
        yield "

            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserva_index");
        yield "\">Volver a la lista</a>
            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\">Inicio</a>

           ";
        // line 112
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reserva/_delete_form.html.twig");
        yield "
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
        return "reserva/edit.html.twig";
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
        return array (  220 => 112,  215 => 110,  211 => 109,  206 => 107,  200 => 104,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar Reserva{% endblock %}

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

    .links-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 20px;
    }

    .flex-container {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        align-content:center ;
        height: 100vh;
        text-align: center;
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

    .btn {
        padding: 12px 20px;
        background-color: #f0f0f0;
        color: #333;
        text-decoration: none;
        border-radius: 6px;
        border: 1px solid #ccc;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        font-size: 16px;
        cursor: pointer;
        margin-top: 1rem;
    }

    .btn:hover {
        background-color: #6d87c6;
        border-color: #ffffff;
        color: white;
    }

    .btn-danger:hover{
        background-color: #df2929;
        color: white;
    }
    .form-input {
        margin-bottom: 20px;
        width: 60%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }.form-input2 {
         margin-bottom: 20px;
         width: 10%;
         padding: 5px;
         border: 1px solid #ccc;
         border-radius: 4px;
         font-size: 16px;
     }
     </style>
    <header>
        <h1>Restaurante DWES</h1>
    </header>

    <div class=\"flex-container\">
        <h1>Editar Reserva de {{ reserva.usuario.nombre }}</h1>
        <div class=\"links-container\">

            {{ include('reserva/_form.html.twig', {'button_label': 'Actualizar'}) }}

            <a href=\"{{ path('app_reserva_index') }}\">Volver a la lista</a>
            <a href=\"{{ path('app_main') }}\">Inicio</a>

           {{ include('reserva/_delete_form.html.twig') }}
        </div>
    </div>

{% endblock %}
", "reserva/edit.html.twig", "/www/html/restaurante_dwes/templates/reserva/edit.html.twig");
    }
}
