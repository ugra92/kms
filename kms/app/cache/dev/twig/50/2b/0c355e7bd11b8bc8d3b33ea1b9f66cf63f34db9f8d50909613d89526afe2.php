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

    ";
        // line 5
        $this->env->loadTemplate("layout/stylesheets.html.twig")->display($context);
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('customStylesheet', $context, $blocks);
        // line 9
        echo "</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "</body>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Base/js/metisMenu.js"), "html", null, true);
        echo "\"></script>
";
        // line 18
        $this->displayBlock('customScripts', $context, $blocks);
        // line 20
        echo "</html>";
    }

    // line 7
    public function block_customStylesheet($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 18
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
        return array (  78 => 18,  73 => 11,  69 => 8,  66 => 7,  62 => 20,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  41 => 13,  39 => 11,  35 => 9,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
