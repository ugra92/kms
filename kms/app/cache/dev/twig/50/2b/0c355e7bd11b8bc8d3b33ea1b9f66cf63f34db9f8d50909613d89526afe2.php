<?php

/* :layout:master-blank.html.twig */
class __TwigTemplate_502b0c355e7bd11b8bc8d3b33ea1b9f66cf63f34db9f8d50909613d89526afe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'customStylesheet' => array($this, 'block_customStylesheet'),
            'body' => array($this, 'block_body'),
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>Knowledge Management System</title>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/css/metisMenu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/css/style.css"), "html", null, true);
        echo "\">
    <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">

    ";
        // line 10
        $this->displayBlock('customStylesheet', $context, $blocks);
        // line 12
        echo "</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "</body>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/metisMenu.js"), "html", null, true);
        echo "\"></script>
";
        // line 21
        $this->displayBlock('customScripts', $context, $blocks);
        // line 23
        echo "</html>";
    }

    // line 10
    public function block_customStylesheet($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_customScripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":layout:master-blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  85 => 14,  81 => 11,  78 => 10,  74 => 23,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  51 => 14,  47 => 12,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
