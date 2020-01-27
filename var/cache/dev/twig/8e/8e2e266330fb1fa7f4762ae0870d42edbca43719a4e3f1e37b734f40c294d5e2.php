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

/* articles.html.twig */
class __TwigTemplate_ba22d9d4a0735966854357ae6512e4a6331601764868946091d5a45b7bd6ea0b extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<table>
\t<tr>
\t\t<th>Nazwa</th>
\t\t<th>Data Publikacji</th>
\t\t<th>Udziały</th>
\t\t<th>Punkty</th>
\t\t<th>Magazyn</th>
\t\t<th>DOI/URL</th>

\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "role", [], "any", false, false, false, 18), "admin")) {
                // line 19
                echo "\t\t\t\t<th>Edytuj</th>
\t\t\t\t<th>Usuń</th>
\t\t\t";
            }
            // line 22
            echo "\t\t";
        }
        // line 23
        echo "\t\t
\t</tr>
\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "\t<tr>
\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getName", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "getPublicdate", [], "method", false, false, false, 28), "format", [0 => "Y-m-d"], "method", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getShare", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPoints", [], "method", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getMag", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getDoi", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "role", [], "any", false, false, false, 34), "admin")) {
                    // line 35
                    echo "\t\t\t\t<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 35)]), "html", null, true);
                    echo "\">Edytuj</a></td>
\t\t\t\t<td><a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 36)]), "html", null, true);
                    echo "\">Usuń</a></td>
\t\t\t";
                }
                // line 38
                echo "\t\t";
            }
            // line 39
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 41,  166 => 39,  163 => 38,  158 => 36,  153 => 35,  150 => 34,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 28,  124 => 27,  121 => 26,  117 => 25,  113 => 23,  110 => 22,  105 => 19,  102 => 18,  100 => 17,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"base.html.twig\" %}

{% block title %} Symfony Bibliometr {% endblock %}

{% block body %}

<table>
\t<tr>
\t\t<th>Nazwa</th>
\t\t<th>Data Publikacji</th>
\t\t<th>Udziały</th>
\t\t<th>Punkty</th>
\t\t<th>Magazyn</th>
\t\t<th>DOI/URL</th>

\t\t{% if app.user %}
\t\t\t{% if app.user.role == \"admin\" %}
\t\t\t\t<th>Edytuj</th>
\t\t\t\t<th>Usuń</th>
\t\t\t{% endif %}
\t\t{% endif %}
\t\t
\t</tr>
\t{% for article in articles %}
\t<tr>
\t\t<td>{{ article.getName() }}</td>
\t\t<td>{{ article.getPublicdate().format(\"Y-m-d\") }}</td>
\t\t<td>{{ article.getShare() }}</td>
\t\t<td>{{ article.getPoints() }}</td>
\t\t<td>{{ article.getMag() }}</td>
\t\t<td>{{ article.getDoi() }}</td>
\t\t{% if app.user %}
\t\t\t{% if app.user.role == \"admin\" %}
\t\t\t\t<td><a href=\"{{ path('app_edit_article', {'id': article.getId() }) }}\">Edytuj</a></td>
\t\t\t\t<td><a href=\"{{ path('app_delete_article', {'id': article.getId() }) }}\">Usuń</a></td>
\t\t\t{% endif %}
\t\t{% endif %}
\t</tr>
\t{% endfor %}
</table>

{% endblock %}
", "articles.html.twig", "C:\\xampp\\htdocs\\templates\\articles.html.twig");
    }
}
