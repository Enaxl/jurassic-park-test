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

/* reuse/display/cloneDisplay.html.twig */
class __TwigTemplate_74d9d7b52bb4d92f60e2aa3a3addc15f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/display/cloneDisplay.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reuse/display/cloneDisplay.html.twig"));

        // line 1
        yield "<div class=\"fixed inset-0 flex justify-center items-center bg-black/30 hidden z-50\" id=\"duplicateDisplay\"  onClick=\"fermerCloneData()\">
    <div class=\"w-[40%] bg-gray-100 p-5 rounded-lg shadow-lg z-60\" onClick=\"event.stopPropagation()\">
        <h2 class=\"text-xl font-bold mb-4\">Dupliquer un dinosaure</h2>
        <div id=\"duplicateContainer\">
            <p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>
        </div>
    </div>
</div>

<script>
function cloneData(id) {
    const modal = document.getElementById('duplicateDisplay');
    const formContainer = document.getElementById('duplicateContainer');

    modal.style.display = \"flex\";
    const url = \"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dinosaure_duplicate_form");
        yield "\" + \"?id=\" + encodeURIComponent(id);

    fetch(url)
        .then(response => response.text())
        .then(html => {
            formContainer.innerHTML = html;
            const form = formContainer.querySelector(\"form\");
            if (form) {
                form.addEventListener(\"submit\", function (e) {
                    e.preventDefault();

                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: \"POST\",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert(\"Erreur : \" + data.errors);
                        }
                    })
                    .catch(() => {
                        alert(\"Erreur réseau.\");
                    });
                });
            }
        })
        .catch(error => {
            formContainer.innerHTML = \"<span class='text-red-500'>Erreur lors du chargement.</span>\";
        });
    }

function fermerCloneData() {
    document.getElementById('duplicateDisplay').style.display = \"none\";
}
function fermerCloneData() {
    document.getElementById('duplicateDisplay').style.display = \"none\";
}
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reuse/display/cloneDisplay.html.twig";
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
        return array (  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"fixed inset-0 flex justify-center items-center bg-black/30 hidden z-50\" id=\"duplicateDisplay\"  onClick=\"fermerCloneData()\">
    <div class=\"w-[40%] bg-gray-100 p-5 rounded-lg shadow-lg z-60\" onClick=\"event.stopPropagation()\">
        <h2 class=\"text-xl font-bold mb-4\">Dupliquer un dinosaure</h2>
        <div id=\"duplicateContainer\">
            <p class=\"text-gray-400 text-sm\">Chargement du formulaire...</p>
        </div>
    </div>
</div>

<script>
function cloneData(id) {
    const modal = document.getElementById('duplicateDisplay');
    const formContainer = document.getElementById('duplicateContainer');

    modal.style.display = \"flex\";
    const url = \"{{ path('app_dinosaure_duplicate_form') }}\" + \"?id=\" + encodeURIComponent(id);

    fetch(url)
        .then(response => response.text())
        .then(html => {
            formContainer.innerHTML = html;
            const form = formContainer.querySelector(\"form\");
            if (form) {
                form.addEventListener(\"submit\", function (e) {
                    e.preventDefault();

                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: \"POST\",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert(\"Erreur : \" + data.errors);
                        }
                    })
                    .catch(() => {
                        alert(\"Erreur réseau.\");
                    });
                });
            }
        })
        .catch(error => {
            formContainer.innerHTML = \"<span class='text-red-500'>Erreur lors du chargement.</span>\";
        });
    }

function fermerCloneData() {
    document.getElementById('duplicateDisplay').style.display = \"none\";
}
function fermerCloneData() {
    document.getElementById('duplicateDisplay').style.display = \"none\";
}
</script>", "reuse/display/cloneDisplay.html.twig", "/var/www/html/templates/reuse/display/cloneDisplay.html.twig");
    }
}
