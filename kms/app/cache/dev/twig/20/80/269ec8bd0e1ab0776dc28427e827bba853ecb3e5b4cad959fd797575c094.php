<?php

/* :Dashboard:index.html.twig */
class __TwigTemplate_2080269ec8bd0e1ab0776dc28427e827bba853ecb3e5b4cad959fd797575c094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate(":layout:master.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'customStylesheet' => array($this, 'block_customStylesheet'),
            'content' => array($this, 'block_content'),
            'customScripts' => array($this, 'block_customScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":layout:master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_customStylesheet($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "   <section id=\"dashboard\">
       <div class=\"col-lg-12\">
           <h3 class=\"page-header\"><i class=\"fa fa-home\"></i> Dashboard</h3>
           <ol class=\"breadcrumb\">
               <li><i class=\"fa fa-home\"></i><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("article-main");
        echo "\">Dashboard</a></li>
           </ol>
       </div>

   </section>
";
    }

    // line 16
    public function block_customScripts($context, array $blocks = array())
    {
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/js/posts.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return ":Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  65 => 16,  55 => 10,  49 => 6,  46 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
