<html>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|',1,'right'); ?> <?php bloginfo(“name”); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" value="notranslate">

        <!-- Le styles -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo __i("/images/favicon.png"); ?>">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>
    <body>

        <script>
            // Google Analytics
        </script>

        <div class="navbar main-navigation">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo site_url() . '/' . SITELANG . '/'; ?>" alt="<?php _e(get_bloginfo('name') , 'prisma-bootstrap'); ?>"></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav social-nav">
                            <li><a target="_blank" href="https://www.facebook.com/pages/Updates-Prisma/555385874609469" alt="<?php _e('Facebook'); ?>"><img width="20" height="22" src="<?php echo __i("/images/nav-facebook.png"); ?>" alt="<?php _e('Facebook'); ?>" /></a></li>
                            <li><a target="_blank" href="https://twitter.com/updatesprisma" alt="<?php _e('Twitter'); ?>"><img width="20" height="22" src="<?php echo __i("/images/nav-twitter.png"); ?>" alt="<?php _e('Twitter'); ?>" /></a></li>
                            <li><a target="_blank" style="padding:2px 9px;" href="https://www.linkedin.com/company/prisma-tecnologia-computacional-sa-de-cv" alt="<?php _e('LinkedIn'); ?>"><img width="19" height="19" src="<?php echo __i("/images/nav-linkedin.png"); ?>" alt="<?php _e('LinkedIn'); ?>" /></a></li>
                        </ul>
                        <?php 
                            $main_menu = array(
                              'menu' => 'main-menu',
                              'container' => false,
                              'menu_class' => 'nav',
                              'depth' => 2,
                              'walker' => new Bootstrap_Walker_Nav_Menu()
                            );
                            wp_nav_menu( $main_menu );
                            //wp_list_pages(array('title_li' => '', 'exclude' => 666666, 'depth' => 2)); 
                        ?>
                        <?php if (SITELANG == 'es'){ ?>
                            <span class="menu-item menu-item-type-post_type menu-item-object-page" style="display:inline-block;padding-top:8px;">
                                <a href="/en/"><img src="<?php echo __i('images/lang-toggle-en.png'); ?>" width="25" height="13"/></a>
                            </span>
                        <?php }else{ ?>
                            <span class="menu-item menu-item-type-post_type menu-item-object-page" style="display:inline-block;padding-top:8px;">
                                <a href="/es/"><img src="<?php echo __i('images/lang-toggle-es.png'); ?>" width="23" height="53"/></a>
                            </span>
                        <?php } ?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div id="page-content-container">
