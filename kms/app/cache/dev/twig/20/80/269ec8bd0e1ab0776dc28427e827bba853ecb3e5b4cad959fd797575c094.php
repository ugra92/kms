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
        $context['_seq'] = twig_ensure_traversable((isset($context["user_articles"]) ? $context["user_articles"] : $this->getContext($context, "user_articles")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["user_comments"]) ? $context["user_comments"] : $this->getContext($context, "user_comments")));
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

    <div class=\"[ col-xs-12 col-sm-offset-1 col-sm-5 ]\">
        <div class=\"[ panel panel-default ] panel-google-plus\">
            <div class=\"dropdown\">
                    <span class=\"dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                        <span class=\"[ glyphicon glyphicon-chevron-down ]\"></span>
                    </span>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                </ul>
            </div>
            <div class=\"panel-google-plus-tags\">
                <ul>
                    <li>#Millennials</li>
                    <li>#Generation</li>
                </ul>
            </div>
            <div class=\"panel-heading\">
                <img class=\"[ img-circle pull-left ]\" src=\"https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg\" alt=\"Mouse0270\" />
                <h3>Robert McIntosh</h3>
                <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
            </div>
            <div class=\"panel-body\">
                <p>Do people born in 2000 get to choose if they are Generation Y or Generation Z? How do you decide what generation you want to belong to?</p>
            </div>
            <div class=\"panel-footer\">
                <button type=\"button\" class=\"[ btn btn-default ]\">+1</button>
                <button type=\"button\" class=\"[ btn btn-default ]\">
                    <span class=\"[ glyphicon glyphicon-share-alt ]\"></span>
                </button>
                <div class=\"input-placeholder\">Add a comment...</div>
            </div>
            <div class=\"panel-google-plus-comment\">
                <img class=\"img-circle\" src=\"https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46\" alt=\"User Image\" />
                <div class=\"panel-google-plus-textarea\">
                    <textarea rows=\"4\"></textarea>
                    <button type=\"submit\" class=\"[ btn btn-success disabled ]\">Post comment</button>
                    <button type=\"reset\" class=\"[ btn btn-default ]\">Cancel</button>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
    }

    // line 87
    public function block_customScripts($context, array $blocks = array())
    {
        // line 88
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
        return array (  172 => 88,  169 => 87,  116 => 37,  114 => 36,  112 => 35,  110 => 34,  101 => 26,  93 => 24,  88 => 23,  84 => 22,  75 => 15,  67 => 13,  62 => 12,  58 => 11,  51 => 6,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
