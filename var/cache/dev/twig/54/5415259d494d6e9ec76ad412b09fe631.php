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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_223965264ebcfa24201d4ccff343bd98 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        yield "<h1>Hola! Por favor confirma tu Email!</h1>

<p>
    Por favor confirma tu email haciendo click en el siguiente link: <br><br>
    <a href=\"";
        // line 5
        yield (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 5, $this->source); })());
        yield "\">Confirmar mi Email</a>.
    Este enlace expirará en ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 6, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 6, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        yield ".
</p>

<p>
    Gracias!
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/confirmation_email.html.twig";
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
        return array (  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Hola! Por favor confirma tu Email!</h1>

<p>
    Por favor confirma tu email haciendo click en el siguiente link: <br><br>
    <a href=\"{{ signedUrl|raw }}\">Confirmar mi Email</a>.
    Este enlace expirará en {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
</p>

<p>
    Gracias!
</p>
", "registration/confirmation_email.html.twig", "/www/html/restaurante_dwes/templates/registration/confirmation_email.html.twig");
    }
}
