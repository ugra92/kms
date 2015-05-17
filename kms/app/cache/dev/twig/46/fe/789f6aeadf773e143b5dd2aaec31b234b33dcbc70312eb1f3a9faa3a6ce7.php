<?php

/* :layout:master.html.twig */
class __TwigTemplate_46fe789f6aeadf773e143b5dd2aaec31b234b33dcbc70312eb1f3a9faa3a6ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate(":layout:master-blank.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":layout:master-blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "   ";
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "
    <div id=\"page-wrapper\" class=\"clearfix\">
                ";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "     </div>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "                ";
    }

    public function getTemplateName()
    {
        return ":layout:master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  53 => 5,  48 => 7,  46 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
