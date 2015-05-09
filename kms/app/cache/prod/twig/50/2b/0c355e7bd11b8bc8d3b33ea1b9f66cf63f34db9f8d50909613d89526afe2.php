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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">

    ";
        // line 8
        $this->displayBlock('customStylesheet', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "</body>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 17
        $this->displayBlock('customScripts', $context, $blocks);
        // line 19
        echo "</html>";
    }

    // line 8
    public function block_customStylesheet($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
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
        return array (  74 => 17,  69 => 12,  65 => 9,  62 => 8,  58 => 19,  56 => 17,  52 => 16,  48 => 15,  45 => 14,  43 => 12,  39 => 10,  37 => 8,  31 => 5,  27 => 4,  22 => 1,);
    }
}
