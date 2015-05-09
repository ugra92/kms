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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dashboard/css/dashboard.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-sm-6\">
    <div class=\"white-panel pn\">
        <div class=\"white-header\">
        <h3>My Recent Articles</h3>
    </div>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_articles"]) ? $context["user_articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "            <div class=\"article-heading\"><h5><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "heading", array()), "html", null, true);
            echo "</a> </h5></div>
            <div class=\"article-content\"><p>";
            // line 13
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "content", array()), 0, 150), "html", null, true);
            echo "<a href=\"#\">...</a></p></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
    </div>
    <div class=\"col-sm-6\">
        <div class=\"white-panel pn\">
            <div class=\"white-header\">
                <h3>Recent Comments</h3>
            </div>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_comments"]) ? $context["user_comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 23
            echo "                <div class=\"article-heading\"><h5><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "articleId", array()), "heading", array()), "html", null, true);
            echo "</a> </h5></div>
                <div class=\"article-content\"><p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "<a href=\"#\">  view comment</a></p></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"white-panel pn\">
            <div class=\"white-header\">
                <h3>News Feed</h3>
            </div>
            ";
        // line 34
        echo "                ";
        // line 35
        echo "                ";
        // line 36
        echo "                ";
        // line 37
        echo "        </div>
    </div>
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
        return array (  115 => 37,  113 => 36,  111 => 35,  109 => 34,  100 => 26,  92 => 24,  87 => 23,  83 => 22,  74 => 15,  66 => 13,  61 => 12,  57 => 11,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
