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

/* inc/articles.html.twig */
class __TwigTemplate_65e75b5601f8bc85a6226411834d7991b0fac4341cff7979bd0165dd39086085 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/articles.html.twig"));

        // line 1
        echo "<table>
\t<tr>
\t\t<th>Nazwa</th>
\t\t<th>Data Publikacji</th>
\t\t<th>Udziały</th>
\t\t<th>Punkty</th>
\t\t<th>Magazyn</th>
\t\t<th>DOI/URL</th>

\t\t";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "\t\t\t";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "role", [], "any", false, false, false, 11), "admin")) {
                // line 12
                echo "\t\t\t\t<th>Edytuj</th>
\t\t\t\t<th>Usuń</th>
\t\t\t";
            }
            // line 15
            echo "\t\t";
        }
        // line 16
        echo "\t\t
\t</tr>
\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "\t<tr>
\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getName", [], "method", false, false, false, 20), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "getPublicdate", [], "method", false, false, false, 21), "format", [0 => "Y-m-d"], "method", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getShare", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPoints", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getMag", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getDoi", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "role", [], "any", false, false, false, 27), "admin")) {
                    // line 28
                    echo "\t\t\t\t<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 28)]), "html", null, true);
                    echo "\">Edytuj</a></td>
\t\t\t\t<td><a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 29)]), "html", null, true);
                    echo "\">Usuń</a></td>
\t\t\t";
                }
                // line 31
                echo "\t\t";
            }
            // line 32
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  120 => 32,  117 => 31,  112 => 29,  107 => 28,  104 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  67 => 16,  64 => 15,  59 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table>
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
</table>", "inc/articles.html.twig", "C:\\xampp\\htdocs\\templates\\inc\\articles.html.twig");
    }
}
