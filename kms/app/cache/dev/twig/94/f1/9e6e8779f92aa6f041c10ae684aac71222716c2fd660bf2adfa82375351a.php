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
        echo "<aside>
    <div id=\"sidebar\"  class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\">
            <li class=\"sub-menu\">
                <a class=\"\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <i class=\"fa fa-home\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("department-main");
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-laptop\"></i>
                    <span>Departments</span>
                    <span class=\"menu-arrow arrow_carrot-right\"></span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a href=\"#\" class=\"menu-item\">
                    <i class=\"fa fa-file-text-o\"></i>
                    <span>Articles</span>
                    <span class=\"menu-arrow arrow_carrot-right\"></span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("article-main");
        echo "\"><i class=\"fa fa-eye\"></i>View All</a></li>
                    <li><a class=\"\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("article-add");
        echo "\"><span><i class=\"fa fa-plus\"></i>Add new</span></a></li>
                    <li><a class=\"\" href=\"blank.html\"><i class=\"fa fa-pencil\"></i>  Edit</a></li>
                </ul>
            </li>
            <li>
                <a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("category_main");
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-folder-open\"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a  href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("id" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"))), "html", null, true);
        echo "\" class=\"menu-item\">
                    <i class=\"fa fa-user\"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a class=\"\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("code_main");
        echo "\">
                    <i class=\"fa fa-code\"></i>
                    <span>Code Post</span>

                </a>

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
        // line 84
        echo "    ";
        // line 85
        echo "        ";
        // line 86
        echo "            ";
        // line 87
        echo "            ";
        // line 88
        echo "            ";
        // line 89
        echo "            ";
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        // line 92
        echo "    ";
        // line 93
        echo "    ";
        // line 94
        echo "
    ";
        // line 96
        echo "        ";
        // line 97
        echo "            ";
        // line 98
        echo "                ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "                ";
        // line 102
        echo "                    ";
        // line 103
        echo "                        ";
        // line 104
        echo "                            ";
        // line 105
        echo "                                    ";
        // line 106
        echo "                                        ";
        // line 107
        echo "                                    ";
        // line 108
        echo "                        ";
        // line 109
        echo "                        ";
        // line 110
        echo "                    ";
        // line 111
        echo "                ";
        // line 112
        echo "                ";
        // line 113
        echo "                ";
        // line 114
        echo "                    ";
        // line 115
        echo "                        ";
        // line 116
        echo "                            ";
        // line 117
        echo "                                    ";
        // line 118
        echo "                                        ";
        // line 119
        echo "                                    ";
        // line 120
        echo "                        ";
        // line 121
        echo "                        ";
        // line 122
        echo "                    ";
        // line 123
        echo "                ";
        // line 124
        echo "                ";
        // line 125
        echo "                ";
        // line 126
        echo "                    ";
        // line 127
        echo "                        ";
        // line 128
        echo "                            ";
        // line 129
        echo "                                    ";
        // line 130
        echo "                                        ";
        // line 131
        echo "                                    ";
        // line 132
        echo "                        ";
        // line 133
        echo "                        ";
        // line 134
        echo "                    ";
        // line 135
        echo "                ";
        // line 136
        echo "                ";
        // line 137
        echo "                ";
        // line 138
        echo "                    ";
        // line 139
        echo "                        ";
        // line 140
        echo "                        ";
        // line 141
        echo "                    ";
        // line 142
        echo "                ";
        // line 143
        echo "            ";
        // line 144
        echo "            ";
        // line 145
        echo "        ";
        // line 146
        echo "        ";
        // line 147
        echo "        ";
        // line 148
        echo "            ";
        // line 149
        echo "                ";
        // line 150
        echo "            ";
        // line 151
        echo "            ";
        // line 152
        echo "                ";
        // line 153
        echo "                    ";
        // line 154
        echo "                        ";
        // line 155
        echo "                            ";
        // line 156
        echo "                                ";
        // line 157
        echo "                                ";
        // line 158
        echo "                            ";
        // line 159
        echo "                            ";
        // line 160
        echo "                                ";
        // line 161
        echo "                                    ";
        // line 162
        echo "                                ";
        // line 163
        echo "                            ";
        // line 164
        echo "                        ";
        // line 165
        echo "                    ";
        // line 166
        echo "                ";
        // line 167
        echo "                ";
        // line 168
        echo "                ";
        // line 169
        echo "                    ";
        // line 170
        echo "                        ";
        // line 171
        echo "                            ";
        // line 172
        echo "                                ";
        // line 173
        echo "                                ";
        // line 174
        echo "                            ";
        // line 175
        echo "                            ";
        // line 176
        echo "                                ";
        // line 177
        echo "                                    ";
        // line 178
        echo "                                ";
        // line 179
        echo "                            ";
        // line 180
        echo "                        ";
        // line 181
        echo "                    ";
        // line 182
        echo "                ";
        // line 183
        echo "                ";
        // line 184
        echo "                ";
        // line 185
        echo "                    ";
        // line 186
        echo "                        ";
        // line 187
        echo "                            ";
        // line 188
        echo "                                ";
        // line 189
        echo "                                ";
        // line 190
        echo "                            ";
        // line 191
        echo "                            ";
        // line 192
        echo "                                ";
        // line 193
        echo "                                    ";
        // line 194
        echo "                                ";
        // line 195
        echo "                            ";
        // line 196
        echo "                        ";
        // line 197
        echo "                    ";
        // line 198
        echo "                ";
        // line 199
        echo "                ";
        // line 200
        echo "                ";
        // line 201
        echo "                    ";
        // line 202
        echo "                        ";
        // line 203
        echo "                            ";
        // line 204
        echo "                                ";
        // line 205
        echo "                                ";
        // line 206
        echo "                            ";
        // line 207
        echo "                            ";
        // line 208
        echo "                                ";
        // line 209
        echo "                                    ";
        // line 210
        echo "                                ";
        // line 211
        echo "                            ";
        // line 212
        echo "                        ";
        // line 213
        echo "                    ";
        // line 214
        echo "                ";
        // line 215
        echo "                ";
        // line 216
        echo "                ";
        // line 217
        echo "                    ";
        // line 218
        echo "                        ";
        // line 219
        echo "                        ";
        // line 220
        echo "                    ";
        // line 221
        echo "                ";
        // line 222
        echo "            ";
        // line 223
        echo "            ";
        // line 224
        echo "        ";
        // line 225
        echo "        ";
        // line 226
        echo "        ";
        // line 227
        echo "            ";
        // line 228
        echo "                ";
        // line 229
        echo "            ";
        // line 230
        echo "            ";
        // line 231
        echo "                ";
        // line 232
        echo "                    ";
        // line 233
        echo "                        ";
        // line 234
        echo "                            ";
        // line 235
        echo "                            ";
        // line 236
        echo "                        ";
        // line 237
        echo "                    ";
        // line 238
        echo "                ";
        // line 239
        echo "                ";
        // line 240
        echo "                ";
        // line 241
        echo "                    ";
        // line 242
        echo "                        ";
        // line 243
        echo "                            ";
        // line 244
        echo "                            ";
        // line 245
        echo "                        ";
        // line 246
        echo "                    ";
        // line 247
        echo "                ";
        // line 248
        echo "                ";
        // line 249
        echo "                ";
        // line 250
        echo "                    ";
        // line 251
        echo "                        ";
        // line 252
        echo "                            ";
        // line 253
        echo "                            ";
        // line 254
        echo "                        ";
        // line 255
        echo "                    ";
        // line 256
        echo "                ";
        // line 257
        echo "                ";
        // line 258
        echo "                ";
        // line 259
        echo "                    ";
        // line 260
        echo "                        ";
        // line 261
        echo "                            ";
        // line 262
        echo "                            ";
        // line 263
        echo "                        ";
        // line 264
        echo "                    ";
        // line 265
        echo "                ";
        // line 266
        echo "                ";
        // line 267
        echo "                ";
        // line 268
        echo "                    ";
        // line 269
        echo "                        ";
        // line 270
        echo "                            ";
        // line 271
        echo "                            ";
        // line 272
        echo "                        ";
        // line 273
        echo "                    ";
        // line 274
        echo "                ";
        // line 275
        echo "                ";
        // line 276
        echo "                ";
        // line 277
        echo "                    ";
        // line 278
        echo "                        ";
        // line 279
        echo "                        ";
        // line 280
        echo "                    ";
        // line 281
        echo "                ";
        // line 282
        echo "            ";
        // line 283
        echo "            ";
        // line 284
        echo "        ";
        // line 285
        echo "        ";
        // line 286
        echo "        ";
        // line 287
        echo "            ";
        // line 288
        echo "                ";
        // line 289
        echo "            ";
        // line 290
        echo "            ";
        // line 291
        echo "                ";
        // line 292
        echo "                ";
        // line 293
        echo "                ";
        // line 294
        echo "                ";
        // line 295
        echo "                ";
        // line 296
        echo "                ";
        // line 297
        echo "                ";
        // line 298
        echo "            ";
        // line 299
        echo "            ";
        // line 300
        echo "        ";
        // line 301
        echo "        ";
        // line 302
        echo "    ";
        // line 303
        echo "    ";
        // line 304
        echo "
    ";
        // line 306
        echo "        ";
        // line 307
        echo "            ";
        // line 308
        echo "                ";
        // line 309
        echo "                    ";
        // line 310
        echo "                        ";
        // line 311
        echo "                                ";
        // line 312
        echo "                                ";
        // line 313
        echo "                                    ";
        // line 314
        echo "                                ";
        // line 315
        echo "                            ";
        // line 316
        echo "                    ";
        // line 317
        echo "                    ";
        // line 318
        echo "                ";
        // line 319
        echo "                ";
        // line 320
        echo "                    ";
        // line 321
        echo "                ";
        // line 322
        echo "                ";
        // line 323
        echo "                    ";
        // line 324
        echo "                ";
        // line 325
        echo "                ";
        // line 326
        echo "                    ";
        // line 327
        echo "                ";
        // line 328
        echo "                ";
        // line 329
        echo "                    ";
        // line 330
        echo "                    ";
        // line 331
        echo "                        ";
        // line 332
        echo "                            ";
        // line 333
        echo "                        ";
        // line 334
        echo "                        ";
        // line 335
        echo "                            ";
        // line 336
        echo "                        ";
        // line 337
        echo "                    ";
        // line 338
        echo "                    ";
        // line 339
        echo "                ";
        // line 340
        echo "                ";
        // line 341
        echo "                    ";
        // line 342
        echo "                        ";
        // line 343
        echo "                    ";
        // line 344
        echo "                ";
        // line 345
        echo "                ";
        // line 346
        echo "                    ";
        // line 347
        echo "                ";
        // line 348
        echo "                ";
        // line 349
        echo "                    ";
        // line 350
        echo "                    ";
        // line 351
        echo "                        ";
        // line 352
        echo "                            ";
        // line 353
        echo "                        ";
        // line 354
        echo "                        ";
        // line 355
        echo "                            ";
        // line 356
        echo "                        ";
        // line 357
        echo "                        ";
        // line 358
        echo "                            ";
        // line 359
        echo "                        ";
        // line 360
        echo "                        ";
        // line 361
        echo "                            ";
        // line 362
        echo "                        ";
        // line 363
        echo "                        ";
        // line 364
        echo "                            ";
        // line 365
        echo "                        ";
        // line 366
        echo "                        ";
        // line 367
        echo "                            ";
        // line 368
        echo "                        ";
        // line 369
        echo "                    ";
        // line 370
        echo "                    ";
        // line 371
        echo "                ";
        // line 372
        echo "                ";
        // line 373
        echo "                    ";
        // line 374
        echo "                    ";
        // line 375
        echo "                        ";
        // line 376
        echo "                            ";
        // line 377
        echo "                        ";
        // line 378
        echo "                        ";
        // line 379
        echo "                            ";
        // line 380
        echo "                        ";
        // line 381
        echo "                        ";
        // line 382
        echo "                            ";
        // line 383
        echo "                            ";
        // line 384
        echo "                                ";
        // line 385
        echo "                                    ";
        // line 386
        echo "                                ";
        // line 387
        echo "                                ";
        // line 388
        echo "                                    ";
        // line 389
        echo "                                ";
        // line 390
        echo "                                ";
        // line 391
        echo "                                    ";
        // line 392
        echo "                                ";
        // line 393
        echo "                                ";
        // line 394
        echo "                                    ";
        // line 395
        echo "                                ";
        // line 396
        echo "                            ";
        // line 397
        echo "                            ";
        // line 398
        echo "                        ";
        // line 399
        echo "                    ";
        // line 400
        echo "                    ";
        // line 401
        echo "                ";
        // line 402
        echo "                ";
        // line 403
        echo "                    ";
        // line 404
        echo "                    ";
        // line 405
        echo "                        ";
        // line 406
        echo "                            ";
        // line 407
        echo "                        ";
        // line 408
        echo "                        ";
        // line 409
        echo "                            ";
        // line 410
        echo "                        ";
        // line 411
        echo "                    ";
        // line 412
        echo "                    ";
        // line 413
        echo "                ";
        // line 414
        echo "            ";
        // line 415
        echo "        ";
        // line 416
        echo "        ";
        // line 417
        echo "    ";
        // line 418
        echo "    ";
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
        return array (  789 => 418,  787 => 417,  785 => 416,  783 => 415,  781 => 414,  779 => 413,  777 => 412,  775 => 411,  773 => 410,  771 => 409,  769 => 408,  767 => 407,  765 => 406,  763 => 405,  761 => 404,  759 => 403,  757 => 402,  755 => 401,  753 => 400,  751 => 399,  749 => 398,  747 => 397,  745 => 396,  743 => 395,  741 => 394,  739 => 393,  737 => 392,  735 => 391,  733 => 390,  731 => 389,  729 => 388,  727 => 387,  725 => 386,  723 => 385,  721 => 384,  719 => 383,  717 => 382,  715 => 381,  713 => 380,  711 => 379,  709 => 378,  707 => 377,  705 => 376,  703 => 375,  701 => 374,  699 => 373,  697 => 372,  695 => 371,  693 => 370,  691 => 369,  689 => 368,  687 => 367,  685 => 366,  683 => 365,  681 => 364,  679 => 363,  677 => 362,  675 => 361,  673 => 360,  671 => 359,  669 => 358,  667 => 357,  665 => 356,  663 => 355,  661 => 354,  659 => 353,  657 => 352,  655 => 351,  653 => 350,  651 => 349,  649 => 348,  647 => 347,  645 => 346,  643 => 345,  641 => 344,  639 => 343,  637 => 342,  635 => 341,  633 => 340,  631 => 339,  629 => 338,  627 => 337,  625 => 336,  623 => 335,  621 => 334,  619 => 333,  617 => 332,  615 => 331,  613 => 330,  611 => 329,  609 => 328,  607 => 327,  605 => 326,  603 => 325,  601 => 324,  599 => 323,  597 => 322,  595 => 321,  593 => 320,  591 => 319,  589 => 318,  587 => 317,  585 => 316,  583 => 315,  581 => 314,  579 => 313,  577 => 312,  575 => 311,  573 => 310,  571 => 309,  569 => 308,  567 => 307,  565 => 306,  562 => 304,  560 => 303,  558 => 302,  556 => 301,  554 => 300,  552 => 299,  550 => 298,  548 => 297,  546 => 296,  544 => 295,  542 => 294,  540 => 293,  538 => 292,  536 => 291,  534 => 290,  532 => 289,  530 => 288,  528 => 287,  526 => 286,  524 => 285,  522 => 284,  520 => 283,  518 => 282,  516 => 281,  514 => 280,  512 => 279,  510 => 278,  508 => 277,  506 => 276,  504 => 275,  502 => 274,  500 => 273,  498 => 272,  496 => 271,  494 => 270,  492 => 269,  490 => 268,  488 => 267,  486 => 266,  484 => 265,  482 => 264,  480 => 263,  478 => 262,  476 => 261,  474 => 260,  472 => 259,  470 => 258,  468 => 257,  466 => 256,  464 => 255,  462 => 254,  460 => 253,  458 => 252,  456 => 251,  454 => 250,  452 => 249,  450 => 248,  448 => 247,  446 => 246,  444 => 245,  442 => 244,  440 => 243,  438 => 242,  436 => 241,  434 => 240,  432 => 239,  430 => 238,  428 => 237,  426 => 236,  424 => 235,  422 => 234,  420 => 233,  418 => 232,  416 => 231,  414 => 230,  412 => 229,  410 => 228,  408 => 227,  406 => 226,  404 => 225,  402 => 224,  400 => 223,  398 => 222,  396 => 221,  394 => 220,  392 => 219,  390 => 218,  388 => 217,  386 => 216,  384 => 215,  382 => 214,  380 => 213,  378 => 212,  376 => 211,  374 => 210,  372 => 209,  370 => 208,  368 => 207,  366 => 206,  364 => 205,  362 => 204,  360 => 203,  358 => 202,  356 => 201,  354 => 200,  352 => 199,  350 => 198,  348 => 197,  346 => 196,  344 => 195,  342 => 194,  340 => 193,  338 => 192,  336 => 191,  334 => 190,  332 => 189,  330 => 188,  328 => 187,  326 => 186,  324 => 185,  322 => 184,  320 => 183,  318 => 182,  316 => 181,  314 => 180,  312 => 179,  310 => 178,  308 => 177,  306 => 176,  304 => 175,  302 => 174,  300 => 173,  298 => 172,  296 => 171,  294 => 170,  292 => 169,  290 => 168,  288 => 167,  286 => 166,  284 => 165,  282 => 164,  280 => 163,  278 => 162,  276 => 161,  274 => 160,  272 => 159,  270 => 158,  268 => 157,  266 => 156,  264 => 155,  262 => 154,  260 => 153,  258 => 152,  256 => 151,  254 => 150,  252 => 149,  250 => 148,  248 => 147,  246 => 146,  244 => 145,  242 => 144,  240 => 143,  238 => 142,  236 => 141,  234 => 140,  232 => 139,  230 => 138,  228 => 137,  226 => 136,  224 => 135,  222 => 134,  220 => 133,  218 => 132,  216 => 131,  214 => 130,  212 => 129,  210 => 128,  208 => 127,  206 => 126,  204 => 125,  202 => 124,  200 => 123,  198 => 122,  196 => 121,  194 => 120,  192 => 119,  190 => 118,  188 => 117,  186 => 116,  184 => 115,  182 => 114,  180 => 113,  178 => 112,  176 => 111,  174 => 110,  172 => 109,  170 => 108,  168 => 107,  166 => 106,  164 => 105,  162 => 104,  160 => 103,  158 => 102,  156 => 101,  154 => 100,  152 => 99,  150 => 98,  148 => 97,  146 => 96,  143 => 94,  141 => 93,  139 => 92,  137 => 91,  135 => 90,  133 => 89,  131 => 88,  129 => 87,  127 => 86,  125 => 85,  123 => 84,  81 => 43,  72 => 37,  63 => 31,  55 => 26,  51 => 25,  35 => 12,  26 => 6,  19 => 1,);
    }
}
