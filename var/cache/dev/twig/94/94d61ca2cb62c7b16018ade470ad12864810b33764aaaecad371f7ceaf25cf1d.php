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

/* base.html.twig */
class __TwigTemplate_0c938131b16d5997eb400bdf3a071c03ce7d309a4f4a8e95dee137b1eb3b5f8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t</head>
\t<body>
\t\t<div class=\"container main-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<header class=\"col-sm-12\">
\t\t\t\t\t";
        // line 19
        echo twig_include($this->env, $context, "inc/header.html.twig");
        echo "
\t\t\t\t</header>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 mid-column\">
\t\t\t\t\t";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<footer class=\"col-sm-12\">
\t\t\t\t\t";
        // line 31
        echo twig_include($this->env, $context, "inc/footer.html.twig");
        echo "
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>

\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<script type=\"text/javascript\" src=\"assets/DataTables/datatables.js\"></script>
\t\t<script type=\"text/javascript\" src=\"assets/DataTables/dataTables.export.js\"></script>
\t\t<script>
\t\t\t\$(document).ready( function () {
\t\t\t\t\$('#table_id').DataTable();
\t\t\t} );

\t\t</script>

\t\t<script>
            var dt = \$('#table_id').DataTable();

            // Export to Word Document
            // On element with id=\"btn-export\" clicked
            \$('body').on('click', '.btn-export', function(e) {
            \$.fn.DataTable.Export.word(dt, {
                filename: 'publikacje',
                title: 'Lista publikacji',
                message: 'Lista publikacji',
                header: [
                    'Autor',
                    'Nazwa publikacji',
                    'Data publikacji',
                    'DOI',
\t\t\t\t\t'Tytuł',
\t\t\t\t\t'Punkty'
                ],
                fields: [
                    0,
\t\t\t\t\t1,
\t\t\t\t\t2,
\t\t\t\t\t3,
\t\t\t\t\t4,
\t\t\t\t\t5
                ]
            });
        });
        </script>
\t
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/DataTables/datatables.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"assets/css/style.css?sc\"/>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 25,  173 => 9,  163 => 8,  145 => 6,  85 => 31,  78 => 26,  76 => 25,  67 => 19,  60 => 14,  58 => 8,  55 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/DataTables/datatables.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"assets/css/style.css?sc\"/>
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<div class=\"container main-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<header class=\"col-sm-12\">
\t\t\t\t\t{{ include('inc/header.html.twig') }}
\t\t\t\t</header>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 mid-column\">
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<footer class=\"col-sm-12\">
\t\t\t\t\t{{ include('inc/footer.html.twig') }}
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>

\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<script type=\"text/javascript\" src=\"assets/DataTables/datatables.js\"></script>
\t\t<script type=\"text/javascript\" src=\"assets/DataTables/dataTables.export.js\"></script>
\t\t<script>
\t\t\t\$(document).ready( function () {
\t\t\t\t\$('#table_id').DataTable();
\t\t\t} );

\t\t</script>

\t\t<script>
            var dt = \$('#table_id').DataTable();

            // Export to Word Document
            // On element with id=\"btn-export\" clicked
            \$('body').on('click', '.btn-export', function(e) {
            \$.fn.DataTable.Export.word(dt, {
                filename: 'publikacje',
                title: 'Lista publikacji',
                message: 'Lista publikacji',
                header: [
                    'Autor',
                    'Nazwa publikacji',
                    'Data publikacji',
                    'DOI',
\t\t\t\t\t'Tytuł',
\t\t\t\t\t'Punkty'
                ],
                fields: [
                    0,
\t\t\t\t\t1,
\t\t\t\t\t2,
\t\t\t\t\t3,
\t\t\t\t\t4,
\t\t\t\t\t5
                ]
            });
        });
        </script>
\t
\t</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony-project\\templates\\base.html.twig");
    }
}
