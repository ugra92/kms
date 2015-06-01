<?php

/* layout/menu.html.twig */
class __TwigTemplate_94f19e6e8779f92aa6f041c10ae684aac71222716c2fd660bf2adfa82375351a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"header dark-bg\">
    <div class=\"toggle-nav\">
        <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"></div>
    </div>

    <!--logo start-->
    <a href=\"index.html\" class=\"logo\">Nice <span class=\"lite\">Admin</span></a>
    <!--logo end-->

    <div class=\"nav search-row\" id=\"top_menu\">
        <!--  search form start -->
        <ul class=\"nav top-menu\">
            <li>
                <form class=\"navbar-form\">
                    <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>

    <div class=\"top-nav notification-row\">
        <!-- notificatoin dropdown start-->
        <ul class=\"nav pull-right top-menu\">

            <!-- task notificatoin start -->
            <li id=\"task_notificatoin_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"fa fa-tasks\">
                                ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tasks", array())) > 0)) {
            // line 31
            echo "                            <span class=\"badge bg-important\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tasks", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 33
        echo "                        </span></a>
                <ul class=\"dropdown-menu extended tasks-bar\">
                    <div class=\"notify-arrow notify-arrow-blue\"></div>
                    <li>
                        <p class=\"blue\">You have ";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tasks", array())), "html", null, true);
        echo " pending tasks</p>
                    </li>
                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tasks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 40
            echo "                        <li>
                            <a href=\"#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</div>
                                    <div class=\"percent\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "status", array()), "html", null, true);
            echo "%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "status", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "status", array()), "html", null, true);
            echo "%\">
                                        <span class=\"sr-only\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "status", array()), "html", null, true);
            echo "% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                    <li class=\"external\">
                        <a href=\"#\">See All Tasks</a>
                    </li>
                </ul>
            </li>
            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->
            <li id=\"mail_notificatoin_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                    <i class=\"fa fa-envelope\"></i>
                    <span class=\"badge bg-important\">5</span>
                </a>
                <ul class=\"dropdown-menu extended inbox\">
                    <div class=\"notify-arrow notify-arrow-blue\"></div>
                    <li>
                        <p class=\"blue\">You have 5 new messages</p>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"http://www.thebalsagroup.org/wp-content/uploads/2014/10/Five-Promotional-Items-For-the-Savvy-Businessman.png\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Greg  Martin</span>
                                    <span class=\"time\">1 min</span>
                                    </span>
                                    <span class=\"message\">
                                        I really like this admin panel.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"http://www.thebalsagroup.org/wp-content/uploads/2014/10/Five-Promotional-Items-For-the-Savvy-Businessman.png\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Bob   Mckenzie</span>
                                    <span class=\"time\">5 mins</span>
                                    </span>
                                    <span class=\"message\">
                                     Hi, What is next project plan?
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"http://www.thebalsagroup.org/wp-content/uploads/2014/10/Five-Promotional-Items-For-the-Savvy-Businessman.png\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Phillip   Park</span>
                                    <span class=\"time\">2 hrs</span>
                                    </span>
                                    <span class=\"message\">
                                        I am like to buy this Admin Template.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"http://www.thebalsagroup.org/wp-content/uploads/2014/10/Five-Promotional-Items-For-the-Savvy-Businessman.png\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Ray   Munoz</span>
                                    <span class=\"time\">1 day</span>
                                    </span>
                                    <span class=\"message\">
                                        Icon fonts are great.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox notificatoin end -->
            <!-- alert notification start-->
            <li id=\"alert_notificatoin_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                    <i class=\"fa fa-bell\"></i>
                    <span class=\"badge bg-important\">7</span>
                </a>
                <ul class=\"dropdown-menu extended notification\">
                    <div class=\"notify-arrow notify-arrow-blue\"></div>
                    <li>
                        <p class=\"blue\">You have 4 new notifications</p>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"label label-primary\"><i class=\"icon_profile\"></i></span>
                            Friend Request
                            <span class=\"small italic pull-right\">5 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"label label-warning\"><i class=\"icon_pin\"></i></span>
                            John location.
                            <span class=\"small italic pull-right\">50 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"label label-danger\"><i class=\"icon_book_alt\"></i></span>
                            Project 3 Completed.
                            <span class=\"small italic pull-right\">1 hr</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"label label-success\"><i class=\"icon_like\"></i></span>
                            Mick appreciated your work.
                            <span class=\"small italic pull-right\"> Today</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">See all notifications</a>
                    </li>
                </ul>
            </li>
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <img alt=\"\" src=\"http://www.thebalsagroup.org/wp-content/uploads/2014/10/Five-Promotional-Items-For-the-Savvy-Businessman.png\">
                            </span>
                    <span class=\"username\">";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "</span>
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu extended logout\">
                    <div class=\"log-arrow-up\"></div>
                    <li class=\"eborder-top\">
                        <a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\"><i class=\"icon_profile\"></i> My Profile</a>
                    </li>
                    ";
        // line 187
        echo "                        ";
        // line 188
        echo "                    ";
        // line 189
        echo "                    ";
        // line 190
        echo "                        ";
        // line 191
        echo "                    ";
        // line 192
        echo "                    ";
        // line 193
        echo "                        ";
        // line 194
        echo "                    ";
        // line 195
        echo "                    <li>
                        <a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon_key_alt\"></i> Log Out</a>
                    </li>
                    ";
        // line 199
        echo "                        ";
        // line 200
        echo "                    ";
        // line 201
        echo "                    ";
        // line 202
        echo "                        ";
        // line 203
        echo "                    ";
        // line 204
        echo "                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
<aside>
    <div id=\"sidebar\"  class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\">
            <li class=\"sub-menu\">
                <a class=\"\" href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <i class=\"fa fa-home\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a href=\"";
        // line 222
        echo $this->env->getExtension('routing')->getPath("department-main");
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-laptop\"></i>
                    <span>Departments</span>
                    <span class=\"menu-arrow arrow_carrot-right\"></span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("tasks_main");
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-tasks\"></i>
                    <span>Tasks</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a href=\"#\" class=\"menu-item\">
                    <i class=\"fa fa-file-text-o\"></i>
                    <span>Articles</span>
                    <span class=\"fa fa-chevron-down\"></span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"\" href=\"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("article-main");
        echo "\"><i class=\"fa fa-eye\"></i>View All</a></li>
                    <li><a class=\"\" href=\"";
        // line 242
        echo $this->env->getExtension('routing')->getPath("article-add");
        echo "\"><span><i class=\"fa fa-plus\"></i>Add new</span></a></li>
                    <li><a class=\"\" href=\"blank.html\"><i class=\"fa fa-pencil\"></i>  Edit</a></li>
                </ul>
            </li>
            <li>
                <a  href=\"";
        // line 247
        echo $this->env->getExtension('routing')->getPath("category_main");
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-folder-open\"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a  href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("id" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"))), "html", null, true);
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-user\"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a class=\"menu-item\"href=\"#\">
                    <i class=\"fa fa-code\"></i>
                   <span>Code Post</span>
                    <span class=\"fa fa-chevron-down\"></span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"\" href=\"";
        // line 265
        echo $this->env->getExtension('routing')->getPath("code_add");
        echo "\"><i class=\"fa fa-plus\"></i>Add new</a></li>
                </ul>
            </li>

            <li class=\"sub-menu\">
                <a href=\"javascript:;\" class=\"\">
                    <i class=\"icon_table\"></i>
                    <span>Tables</span>
                    <span class=\"menu-arrow arrow_carrot-right\"></span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"\" href=\"basic_table.html\">Basic Table</a></li>
                </ul>
            </li>

            <li class=\"sub-menu\">
                <a href=\"javascript:;\" class=\"\">
                    <i class=\"icon_documents_alt\"></i>
                    <span>Pages</span>
                    <span class=\"menu-arrow arrow_carrot-right\"></span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"\" href=\"profile.html\">Profile</a></li>
                    <li><a class=\"\" href=\"login.html\"><span>Login Page</span></a></li>
                    <li><a class=\"\" href=\"blank.html\">Blank Page</a></li>
                    <li><a class=\"\" href=\"404.html\">404 Error</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
";
    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 265,  349 => 253,  340 => 247,  332 => 242,  328 => 241,  313 => 229,  303 => 222,  294 => 216,  280 => 204,  278 => 203,  276 => 202,  274 => 201,  272 => 200,  270 => 199,  265 => 196,  262 => 195,  260 => 194,  258 => 193,  256 => 192,  254 => 191,  252 => 190,  250 => 189,  248 => 188,  246 => 187,  241 => 184,  232 => 178,  106 => 54,  94 => 48,  88 => 47,  82 => 44,  78 => 43,  73 => 40,  69 => 39,  64 => 37,  58 => 33,  52 => 31,  50 => 30,  19 => 1,);
    }
}
