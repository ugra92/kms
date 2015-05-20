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
        echo "    ";
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "
    <section id=\"main-content\">
        <section class=\"wrapper\">
            ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "        </section>
    </section>
    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "            ";
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
        return array (  62 => 7,  59 => 6,  55 => 12,  53 => 11,  49 => 8,  47 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
