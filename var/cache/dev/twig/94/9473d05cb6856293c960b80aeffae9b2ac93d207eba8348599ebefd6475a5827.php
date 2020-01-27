<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_844fb33cabbdbc6ceb267f6b5cc4e08692ac153d372e0c3d969146bf2b4f3264 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Symfony Bibliometr ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "inc/under_nav_panel.html.twig");
        echo "

";
        // line 9
        echo twig_include($this->env, $context, "inc/logo.html.twig");
        echo "

<table id=\"table_id\" class=\"display main-table\">

    <thead>
        <tr>
\t\t\t<th>Autor</th>
\t\t\t<th>Nazwa publikacji</th>
\t\t\t<th>Data Publikacji</th>
\t\t\t<th>DOI</th>
\t\t\t<th>Tytuł</th>
\t\t\t<th>Punkty</th>

\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t\t\t<th>Edytuj</th>
\t\t\t\t\t<th>Usuń</th>
\t\t\t";
        }
        // line 26
        echo "        </tr>
    </thead>
    <tbody>
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "\t\t
        <tr>
\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getAuthor", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPublicationName", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "getPublicdate", [], "method", false, false, false, 34), "format", [0 => "Y-m-d"], "method", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getDoi", [], "method", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPoints", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>

\t\t\t

\t\t\t";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
                // line 42
                echo "\t\t\t\t\t<td>";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "userId", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 42)]), "html", null, true);
                    echo "\">Edytuj</a>";
                }
                echo "</td>
\t\t\t\t\t<td>";
                // line 43
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "userId", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 43)]), "html", null, true);
                    echo "\">Usuń</a>";
                }
                echo "</td>
\t\t\t";
            }
            // line 45
            echo "        </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tbody>
</table>

";
        // line 50
        echo twig_include($this->env, $context, "inc/db-export.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 50,  186 => 47,  179 => 45,  170 => 43,  161 => 42,  159 => 41,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 30,  124 => 29,  119 => 26,  114 => 23,  112 => 22,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Symfony Bibliometr {% endblock %}

{% block body %}

{{ include('inc/under_nav_panel.html.twig') }}

{{ include('inc/logo.html.twig') }}

<table id=\"table_id\" class=\"display main-table\">

    <thead>
        <tr>
\t\t\t<th>Autor</th>
\t\t\t<th>Nazwa publikacji</th>
\t\t\t<th>Data Publikacji</th>
\t\t\t<th>DOI</th>
\t\t\t<th>Tytuł</th>
\t\t\t<th>Punkty</th>

\t\t\t{% if app.user %}
\t\t\t\t\t<th>Edytuj</th>
\t\t\t\t\t<th>Usuń</th>
\t\t\t{% endif %}
        </tr>
    </thead>
    <tbody>
\t\t{% for article in articles %}
\t\t
        <tr>
\t\t\t<td>{{ article.getAuthor() }}</td>
\t\t\t<td>{{ article.getPublicationName() }}</td>
\t\t\t<td>{{ article.getPublicdate().format(\"Y-m-d\") }}</td>
\t\t\t<td>{{ article.getDoi() }}</td>
\t\t\t<td>{{ article.getTitle() }}</td>
\t\t\t<td>{{ article.getPoints() }}</td>

\t\t\t

\t\t\t{% if app.user %}
\t\t\t\t\t<td>{% if article.userId == app.user.id %}<a href=\"{{ path('app_edit_article', {'id': article.getId() }) }}\">Edytuj</a>{% endif %}</td>
\t\t\t\t\t<td>{% if article.userId == app.user.id %}<a href=\"{{ path('app_delete_article', {'id': article.getId() }) }}\">Usuń</a>{% endif %}</td>
\t\t\t{% endif %}
        </tr>
\t\t{% endfor %}
    </tbody>
</table>

{{ include('inc/db-export.html.twig') }}

{% endblock %}
", "home.html.twig", "C:\\xampp\\htdocs\\symfony-project\\templates\\home.html.twig");
    }
}
