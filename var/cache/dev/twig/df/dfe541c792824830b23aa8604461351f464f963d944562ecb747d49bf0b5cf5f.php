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

/* inc/home.html.twig */
class __TwigTemplate_4491ed8ce74755117dce82b02266b0d1277d2b29a2509bc590fce2389f28d714 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inc/home.html.twig", 1);
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
<table>
\t<tr>
\t\t<th>Nazwa</th>
\t\t<th>Data Publikacji</th>
\t\t<th>Udziały</th>
\t\t<th>Punkty</th>
\t\t<th>Magazyn</th>
\t\t<th>DOI/URL</th>

\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t\t";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "role", [], "any", false, false, false, 17), "admin")) {
                // line 18
                echo "\t\t\t\t<th>Edytuj</th>
\t\t\t\t<th>Usuń</th>
\t\t\t";
            }
            // line 21
            echo "\t\t";
        }
        // line 22
        echo "\t\t
\t</tr>
\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "\t<tr>
\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getName", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "getPublicdate", [], "method", false, false, false, 27), "format", [0 => "Y-m-d"], "method", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getShare", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPoints", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getMag", [], "method", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getDoi", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t";
            // line 32
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
                // line 33
                echo "\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "role", [], "any", false, false, false, 33), "admin")) {
                    // line 34
                    echo "\t\t\t<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 34)]), "html", null, true);
                    echo "\">Edytuj</a></td>
\t\t\t<td><a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 35)]), "html", null, true);
                    echo "\">Usuń</a></td>
\t\t";
                }
                // line 37
                echo "\t\t";
            }
            // line 38
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inc/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 40,  166 => 38,  163 => 37,  158 => 35,  153 => 34,  150 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  121 => 25,  117 => 24,  113 => 22,  110 => 21,  105 => 18,  102 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

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
\t\t{% if app.user.role == \"admin\" %}
\t\t\t<td><a href=\"{{ path('app_edit_article', {'id': article.getId() }) }}\">Edytuj</a></td>
\t\t\t<td><a href=\"{{ path('app_delete_article', {'id': article.getId() }) }}\">Usuń</a></td>
\t\t{% endif %}
\t\t{% endif %}
\t</tr>
\t{% endfor %}
</table>

{% endblock %}
", "inc/home.html.twig", "C:\\xampp\\htdocs\\templates\\inc\\home.html.twig");
    }
}
