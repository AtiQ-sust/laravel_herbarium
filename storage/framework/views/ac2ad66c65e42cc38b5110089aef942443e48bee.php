<?php $__env->startSection('title', 'Dashboard'); ?>


<?php $__env->startSection('content-css'); ?>

<style>
    
    #exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : black;
  background-color: #428bca;
  padding : 5px 15px;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div id="wpwrap">

    <div id="adminmenumain" role="navigation" aria-label="Main menu">
        <a href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>
        <a href="#wp-toolbar" class="screen-reader-shortcut">Skip to toolbar</a>
        <div id="adminmenuback"></div>
        <div id="adminmenuwrap" style="position: fixed;">
            <ul id="adminmenu">

                <li class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last" id="menu-dashboard">
                    <a href="index.php" class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-dashboard">
                            <br>
                        </div>
                        <div class="wp-menu-name">Dashboard</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Dashboard</li>
                        <li class="wp-first-item"><a href="index.php" class="wp-first-item">Home</a></li>
                        <li><a href="update-core.php">Updates <span class="update-plugins count-1"><span class="update-count">1</span></span></a></li>
                    </ul>
                </li>
                <li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
                    <div class="separator"></div>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" id="menu-posts">
                    <a href="edit.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-post">
                            <br>
                        </div>
                        <div class="wp-menu-name">Posts</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Posts</li>
                        <li class="wp-first-item"><a href="edit.php" class="wp-first-item">All Posts</a></li>
                        <li><a href="post-new.php">Add New</a></li>
                        <li><a href="edit-tags.php?taxonomy=category">Categories</a></li>
                        <li><a href="edit-tags.php?taxonomy=post_tag">Tags</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
                    <a href="upload.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-media">
                            <br>
                        </div>
                        <div class="wp-menu-name">Media</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Media</li>
                        <li class="wp-first-item"><a href="upload.php" class="wp-first-item">Library</a></li>
                        <li><a href="media-new.php">Add New</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-page" id="menu-pages">
                    <a href="edit.php?post_type=page" class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-page" aria-haspopup="false">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-page">
                            <br>
                        </div>
                        <div class="wp-menu-name">Pages</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Pages</li>
                        <li class="wp-first-item"><a href="edit.php?post_type=page" class="wp-first-item">All Pages</a></li>
                        <li class="current"><a href="post-new.php?post_type=page" class="current">Add New</a></li>
                    </ul>
                </li>
                <li class="wp-not-current-submenu menu-top menu-icon-comments" id="menu-comments">
                    <a href="edit-comments.php" class="wp-not-current-submenu menu-top menu-icon-comments">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-comments">
                            <br>
                        </div>
                        <div class="wp-menu-name">Comments <span class="awaiting-mod count-1"><span class="pending-count">1</span></span>
                        </div>
                    </a>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_wpcf7 menu-top-last" id="toplevel_page_wpcf7">
                    <a href="admin.php?page=wpcf7" class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_wpcf7 menu-top-last" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-email">
                            <br>
                        </div>
                        <div class="wp-menu-name">Contact</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Contact</li>
                        <li class="wp-first-item"><a href="admin.php?page=wpcf7" class="wp-first-item">Contact Forms</a></li>
                        <li><a href="admin.php?page=wpcf7-new">Add New</a></li>
                        <li><a href="admin.php?page=wpcf7-integration">Integration</a></li>
                    </ul>
                </li>
                <li class="wp-not-current-submenu wp-menu-separator woocommerce" aria-hidden="true">
                    <div class="separator"></div>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_woocommerce menu-top-first" id="toplevel_page_woocommerce">
                    <a href="edit.php?post_type=shop_order" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_woocommerce menu-top-first" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-generic">
                            <br>
                        </div>
                        <div class="wp-menu-name">WooCommerce</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap" style="">
                        <li class="wp-submenu-head" aria-hidden="true">WooCommerce</li>
                        <li class="wp-first-item"><a href="edit.php?post_type=shop_order" class="wp-first-item">Orders</a></li>
                        <li><a href="edit.php?post_type=shop_coupon">Coupons</a></li>
                        <li><a href="admin.php?page=wc-reports">Reports</a></li>
                        <li><a href="admin.php?page=wc-settings">Settings</a></li>
                        <li><a href="admin.php?page=wc-status">Status</a></li>
                        <li><a href="admin.php?page=wc-addons">Extensions</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-product menu-top-last" id="menu-posts-product">
                    <a href="edit.php?post_type=product" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-product menu-top-last" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-post">
                            <br>
                        </div>
                        <div class="wp-menu-name">Products</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Products</li>
                        <li class="wp-first-item"><a href="edit.php?post_type=product" class="wp-first-item">All Products</a></li>
                        <li><a href="post-new.php?post_type=product">Add New</a></li>
                        <li><a href="edit-tags.php?taxonomy=product_cat&amp;post_type=product">Categories</a></li>
                        <li><a href="edit-tags.php?taxonomy=product_tag&amp;post_type=product">Tags</a></li>
                        <li><a href="edit.php?post_type=product&amp;page=product_attributes">Attributes</a></li>
                    </ul>
                </li>
                <li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
                    <div class="separator"></div>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
                    <a href="themes.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-appearance">
                            <br>
                        </div>
                        <div class="wp-menu-name">Appearance</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Appearance</li>
                        <li class="wp-first-item"><a href="themes.php" class="wp-first-item">Themes</a></li>
                        <li class="hide-if-no-customize"><a href="customize.php?return=%2Fwp-admin%2Fpost-new.php%3Fpost_type%3Dpage" class="hide-if-no-customize">Customize</a></li>
                        <li><a href="widgets.php">Widgets</a></li>
                        <li><a href="nav-menus.php">Menus</a></li>
                        <li class="hide-if-no-customize"><a href="customize.php?return=%2Fwp-admin%2Fpost-new.php%3Fpost_type%3Dpage&amp;autofocus%5Bcontrol%5D=header_image" class="hide-if-no-customize">Header</a></li>
                        <li><a href="themes.php?page=tyche-welcome">About Tyche<span class="badge-action-count">1</span></a></li>
                        <li><a href="themes.php?page=tgmpa-install-plugins">Install Plugins</a></li>
                        <li><a href="themes.php?page=custom-header">Header</a></li>
                        <li><a href="theme-editor.php">Editor</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" id="menu-plugins">
                    <a href="plugins.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-plugins">
                            <br>
                        </div>
                        <div class="wp-menu-name">Plugins <span class="update-plugins count-1"><span class="plugin-count">1</span></span>
                        </div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Plugins <span class="update-plugins count-1"><span class="plugin-count">1</span></span>
                        </li>
                        <li class="wp-first-item"><a href="plugins.php" class="wp-first-item">Installed Plugins</a></li>
                        <li><a href="plugin-install.php">Add New</a></li>
                        <li><a href="plugin-editor.php">Editor</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" id="menu-users">
                    <a href="users.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-users">
                            <br>
                        </div>
                        <div class="wp-menu-name">Users</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Users</li>
                        <li class="wp-first-item"><a href="users.php" class="wp-first-item">All Users</a></li>
                        <li><a href="user-new.php">Add New</a></li>
                        <li><a href="profile.php">Your Profile</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" id="menu-tools">
                    <a href="tools.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-tools">
                            <br>
                        </div>
                        <div class="wp-menu-name">Tools</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Tools</li>
                        <li class="wp-first-item"><a href="tools.php" class="wp-first-item">Available Tools</a></li>
                        <li><a href="import.php">Import</a></li>
                        <li><a href="export.php">Export</a></li>
                        <li><a href="tools.php?page=sns">Scripts n Styles</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
                    <a href="options-general.php" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-settings">
                            <br>
                        </div>
                        <div class="wp-menu-name">Settings</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Settings</li>
                        <li class="wp-first-item"><a href="options-general.php" class="wp-first-item">General</a></li>
                        <li><a href="options-writing.php">Writing</a></li>
                        <li><a href="options-reading.php">Reading</a></li>
                        <li><a href="options-discussion.php">Discussion</a></li>
                        <li><a href="options-media.php">Media</a></li>
                        <li><a href="options-permalink.php">Permalinks</a></li>
                    </ul>
                </li>
                <li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
                    <div class="separator"></div>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_custom-permalinks-post-permalinks menu-top-first" id="toplevel_page_custom-permalinks-post-permalinks">
                    <a href="admin.php?page=custom-permalinks-post-permalinks" class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_custom-permalinks-post-permalinks menu-top-first" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-links">
                            <br>
                        </div>
                        <div class="wp-menu-name">Custom Permalinks</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Custom Permalinks</li>
                        <li class="wp-first-item"><a href="admin.php?page=custom-permalinks-post-permalinks" class="wp-first-item">PostTypes Permalinks</a></li>
                        <li><a href="admin.php?page=custom-permalinks-category-permalinks">Category Permalinks</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_maxmegamenu" id="toplevel_page_maxmegamenu">
                    <a href="admin.php?page=maxmegamenu" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_maxmegamenu" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-generic">
                            <br>
                        </div>
                        <div class="wp-menu-name">Mega Menu</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap" style="">
                        <li class="wp-submenu-head" aria-hidden="true">Mega Menu</li>
                        <li class="wp-first-item"><a href="admin.php?page=maxmegamenu" class="wp-first-item">General Settings</a></li>
                        <li><a href="admin.php?page=maxmegamenu_theme_editor">Menu Themes</a></li>
                        <li><a href="admin.php?page=maxmegamenu_menu_locations">Menu Locations</a></li>
                        <li><a href="admin.php?page=maxmegamenu_tools">Tools</a></li>
                    </ul>
                </li>
                <li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_hugeit_maps menu-top-last" id="toplevel_page_hugeit_maps">
                    <a href="admin.php?page=hugeit_maps" class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_hugeit_maps menu-top-last" aria-haspopup="true">
                        <div class="wp-menu-arrow">
                            <div></div>
                        </div>
                        <div class="wp-menu-image dashicons-before"><img src="http://utl.chieferp.com/wp-content/plugins/google-maps/assets/images/google-maps-20-x-20.png" alt=""></div>
                        <div class="wp-menu-name">Google Maps</div>
                    </a>
                    <ul class="wp-submenu wp-submenu-wrap">
                        <li class="wp-submenu-head" aria-hidden="true">Google Maps</li>
                        <li class="wp-first-item"><a href="admin.php?page=hugeit_maps" class="wp-first-item">Google Maps</a></li>
                        <li><a href="admin.php?page=hugeit_maps_featured_plugins">Featured plugins</a></li>
                        <li><a href="admin.php?page=hugeit_maps_licensing">Licensing</a></li>
                    </ul>
                </li>
                <li id="collapse-menu" class="hide-if-no-js">
                    <button type="button" id="collapse-button" aria-label="Collapse Main menu" aria-expanded="true"><span class="collapse-button-icon" aria-hidden="true"></span><span class="collapse-button-label">Collapse menu</span></button>
                </li>
            </ul>
        </div>
    </div>
    <div id="wpcontent">

        <div id="wpadminbar" class="">
            <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
                <ul id="wp-admin-bar-root-default" class="ab-top-menu">
                    <li id="wp-admin-bar-menu-toggle"><a class="ab-item" href="#" aria-expanded="false"><span class="ab-icon"></span><span class="screen-reader-text">Menu</span></a> </li>
                    <li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://utl.chieferp.com/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">About WordPress</span></a>
                        <div class="ab-sub-wrapper">
                            <ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
                                <li id="wp-admin-bar-about"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/about.php">About WordPress</a> </li>
                            </ul>
                            <ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
                                <li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a> </li>
                                <li id="wp-admin-bar-documentation"><a class="ab-item" href="https://codex.wordpress.org/">Documentation</a> </li>
                                <li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/">Support Forums</a> </li>
                                <li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://utl.chieferp.com/">Universal Technologies</a>
                        <div class="ab-sub-wrapper">
                            <ul id="wp-admin-bar-site-name-default" class="ab-submenu">
                                <li id="wp-admin-bar-view-site"><a class="ab-item" href="http://utl.chieferp.com/">Visit Site</a> </li>
                                <li id="wp-admin-bar-view-store"><a class="ab-item" href="http://utl.chieferp.com/shop/">Visit Store</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li id="wp-admin-bar-updates"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/update-core.php" title="1 Plugin Update"><span class="ab-icon"></span><span class="ab-label">1</span><span class="screen-reader-text">1 Plugin Update</span></a> </li>
                    <li id="wp-admin-bar-comments"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/edit-comments.php"><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-1" aria-hidden="true">1</span><span class="screen-reader-text">1 comment awaiting moderation</span></a> </li>
                    <li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://utl.chieferp.com/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">New</span></a>
                        <div class="ab-sub-wrapper">
                            <ul id="wp-admin-bar-new-content-default" class="ab-submenu">
                                <li id="wp-admin-bar-new-post"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/post-new.php">Post</a> </li>
                                <li id="wp-admin-bar-new-media"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/media-new.php">Media</a> </li>
                                <li id="wp-admin-bar-new-page"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/post-new.php?post_type=page">Page</a> </li>
                                <li id="wp-admin-bar-new-product"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/post-new.php?post_type=product">Product</a> </li>
                                <li id="wp-admin-bar-new-shop_order"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/post-new.php?post_type=shop_order">Order</a> </li>
                                <li id="wp-admin-bar-new-shop_coupon"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/post-new.php?post_type=shop_coupon">Coupon</a> </li>
                                <li id="wp-admin-bar-new-user"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/user-new.php">User</a> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
                    <li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://utl.chieferp.com/wp-admin/profile.php">Howdy, <span class="display-name">wp-admin</span><img alt="" src="http://2.gravatar.com/avatar/5f720f9b931695a2cb233a9f2b7e36f5?s=26&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/5f720f9b931695a2cb233a9f2b7e36f5?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"></a>
                        <div class="ab-sub-wrapper">
                            <ul id="wp-admin-bar-user-actions" class="ab-submenu">
                                <li id="wp-admin-bar-user-info">
                                    <a class="ab-item" tabindex="-1" href="http://utl.chieferp.com/wp-admin/profile.php"><img alt="" src="http://2.gravatar.com/avatar/5f720f9b931695a2cb233a9f2b7e36f5?s=64&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/5f720f9b931695a2cb233a9f2b7e36f5?s=128&amp;d=mm&amp;r=g 2x" class="avatar avatar-64 photo" height="64" width="64"><span class="display-name">wp-admin</span></a>
                                </li>
                                <li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://utl.chieferp.com/wp-admin/profile.php">Edit My Profile</a> </li>
                                <li id="wp-admin-bar-logout"><a class="ab-item" href="http://utl.chieferp.com/wp-login.php?action=logout&amp;_wpnonce=bf4b1158fe">Log Out</a> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="screen-reader-shortcut" href="http://utl.chieferp.com/wp-login.php?action=logout&amp;_wpnonce=bf4b1158fe">Log Out</a>
        </div>

        <div id="wpbody" role="main">

            <div id="wpbody-content" aria-label="Main content" tabindex="0" style="overflow: hidden;">
                <div id="screen-meta" class="metabox-prefs">

                    <div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Contextual Help Tab">
                        <div id="contextual-help-back"></div>
                        <div id="contextual-help-columns">
                            <div class="contextual-help-tabs">
                                <ul>

                                    <li id="tab-link-about-pages" class="active">
                                        <a href="#tab-panel-about-pages" aria-controls="tab-panel-about-pages">
                                    About Pages                             </a>
                                    </li>

                                    <li id="tab-link-inserting-media">
                                        <a href="#tab-panel-inserting-media" aria-controls="tab-panel-inserting-media">
                                    Inserting Media                             </a>
                                    </li>

                                    <li id="tab-link-page-attributes">
                                        <a href="#tab-panel-page-attributes" aria-controls="tab-panel-page-attributes">
                                    Page Attributes                             </a>
                                    </li>

                                    <li id="tab-link-scripts-n-styles">
                                        <a href="#tab-panel-scripts-n-styles" aria-controls="tab-panel-scripts-n-styles">
                                    Scripts n Styles                                </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="contextual-help-sidebar">
                                <p><strong>For more information:</strong></p>
                                <p><a href="http://wordpress.org/extend/plugins/scripts-n-styles/faq/" target="_blank">Frequently Asked Questions</a></p>
                                <p><a href="https://github.com/unFocus/Scripts-n-Styles" target="_blank">Source on github</a></p>
                                <p><a href="http://wordpress.org/tags/scripts-n-styles" target="_blank">Support Forums</a></p>
                            </div>

                            <div class="contextual-help-tabs-wrap">

                                <div id="tab-panel-about-pages" class="help-tab-content active">
                                    <p>Pages are similar to posts in that they have a title, body text, and associated metadata, but they are different in that they are not part of the chronological blog stream, kind of like permanent posts. Pages are not categorized or tagged, but can have a hierarchy. You can nest pages under other pages by making one the “Parent” of the other, creating a group of pages.</p>
                                    <p>Creating a Page is very similar to creating a Post, and the screens can be customized in the same way using drag and drop, the Screen Options tab, and expanding/collapsing boxes as you choose. This screen also has the distraction-free writing space, available in both the Visual and Text modes via the Fullscreen buttons. The Page editor mostly works the same as the Post editor, but there are some Page-specific features in the Page Attributes box.</p>
                                </div>

                                <div id="tab-panel-inserting-media" class="help-tab-content">
                                    <p>You can upload and insert media (images, audio, documents, etc.) by clicking the Add Media button. You can select from the images and files already uploaded to the Media Library, or upload new media to add to your page or post. To create an image gallery, select the images to add and click the “Create a new gallery” button.</p>
                                    <p>You can also embed media from many popular websites including Twitter, YouTube, Flickr and others by pasting the media URL on its own line into the content of your post/page. Please refer to the Codex to <a href="https://codex.wordpress.org/Embeds">learn more about embeds</a>.</p>
                                </div>

                                <div id="tab-panel-page-attributes" class="help-tab-content">
                                    <p><strong>Parent</strong> — You can arrange your pages in hierarchies. For example, you could have an “About” page that has “Life Story” and “My Dog” pages under it. There are no limits to how many levels you can nest pages.</p>
                                    <p><strong>Template</strong> — Some themes have custom templates you can use for certain pages that might have additional features or custom layouts. If so, you’ll see them in this dropdown menu.</p>
                                    <p><strong>Order</strong> — Pages are usually ordered alphabetically, but you can choose your own order by entering a number (1 for first, etc.) in this field.</p>
                                </div>

                                <div id="tab-panel-scripts-n-styles" class="help-tab-content">
                                    <p>In default (non MultiSite) WordPress installs, both <em>Administrators</em> and <em>Editors</em> can access <em>Scripts-n-Styles</em> on individual edit screens. Only <em>Administrators</em> can access this Options Page. In MultiSite WordPress installs, only <em>"Super Admin"</em> users can access either <em>Scripts-n-Styles</em> on individual edit screens or this Options Page. If other plugins change capabilities (specifically "unfiltered_html"), other users can be granted access.</p>
                                    <p><strong>Reference: jQuery Wrappers</strong></p><pre><code>jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
    });</code></pre><pre><code>(function($) {
    // $() will work as an alias for jQuery() inside of this function
    })(jQuery);</code></pre> </div>
                            </div>
                        </div>
                    </div>
                    <div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="Screen Options Tab">
                        <form id="adv-settings" method="post">
                            <fieldset class="metabox-prefs">
                                <legend>Boxes</legend>
                                <label for="pageparentdiv-hide">
                                    <input class="hide-postbox-tog" name="pageparentdiv-hide" type="checkbox" id="pageparentdiv-hide" value="pageparentdiv" checked="checked">Page Attributes</label>
                                <label for="postimagediv-hide">
                                    <input class="hide-postbox-tog" name="postimagediv-hide" type="checkbox" id="postimagediv-hide" value="postimagediv" checked="checked">Featured Image</label>
                                <label for="SnS_meta_box-hide">
                                    <input class="hide-postbox-tog" name="SnS_meta_box-hide" type="checkbox" id="SnS_meta_box-hide" value="SnS_meta_box" checked="checked">Scripts n Styles</label>
                                <label for="postcustom-hide">
                                    <input class="hide-postbox-tog" name="postcustom-hide" type="checkbox" id="postcustom-hide" value="postcustom" checked="checked">Custom Fields</label>
                                <label for="commentstatusdiv-hide">
                                    <input class="hide-postbox-tog" name="commentstatusdiv-hide" type="checkbox" id="commentstatusdiv-hide" value="commentstatusdiv" checked="checked">Discussion</label>
                                <label for="slugdiv-hide">
                                    <input class="hide-postbox-tog" name="slugdiv-hide" type="checkbox" id="slugdiv-hide" value="slugdiv" checked="checked">Slug</label>
                                <label for="authordiv-hide">
                                    <input class="hide-postbox-tog" name="authordiv-hide" type="checkbox" id="authordiv-hide" value="authordiv" checked="checked">Author</label>
                            </fieldset>
                            <fieldset class="columns-prefs">
                                <legend class="screen-layout">Layout</legend>
                                <label class="columns-prefs-1">
                                    <input type="radio" name="screen_columns" value="1" checked="checked"> 1 column </label>
                                <label class="columns-prefs-2">
                                    <input type="radio" name="screen_columns" value="2"> 2 columns </label>
                            </fieldset>
                            <fieldset class="editor-expand hidden" style="display: block;">
                                <legend>Additional settings</legend>
                                <label for="editor-expand-toggle">
                                    <input type="checkbox" id="editor-expand-toggle" checked="checked">Enable full-height editor and distraction-free functionality.</label>
                            </fieldset>
                            <input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="186470d021">
                        </form>
                    </div>
                </div>
                <div id="screen-meta-links">
                    <div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
                        <button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Help</button>
                    </div>
                    <div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
                        <button type="button" id="show-settings-link" class="button show-settings" aria-controls="screen-options-wrap" aria-expanded="false">Screen Options</button>
                    </div>
                </div>

                <div class="wrap">
                    <h1 class="wp-heading-inline">Add New Page</h1>

                    <hr class="wp-header-end">
                    <div id="lost-connection-notice" class="error hidden">
                        <p><span class="spinner"></span> <strong>Connection lost.</strong> Saving has been disabled until you’re reconnected. <span class="hide-if-no-sessionstorage">We’re backing up this post in your browser, just in case.</span>
                        </p>
                    </div>
                    <div id="local-storage-notice" class="hidden notice is-dismissible">
                        <p class="local-restore">
                            The backup of this post in your browser is different from the version below.
                            <button type="button" class="button restore-backup">Restore the backup</button>
                        </p>
                        <p class="help">
                            This will replace the current editor content with the last backup version. You can use undo and redo in the editor to get the old content back or to return to the restored version. </p>
                        <button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>
                    </div>

                    <form name="post" action="post.php" method="post" id="post">
                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="46ad261b06">
                        <input type="hidden" name="_wp_http_referer" value="/wp-admin/post-new.php?post_type=page">
                        <input type="hidden" id="user-id" name="user_ID" value="1">
                        <input type="hidden" id="hiddenaction" name="action" value="editpost">
                        <input type="hidden" id="originalaction" name="originalaction" value="editpost">
                        <input type="hidden" id="post_author" name="post_author" value="1">
                        <input type="hidden" id="post_type" name="post_type" value="page">
                        <input type="hidden" id="original_post_status" name="original_post_status" value="auto-draft">
                        <input type="hidden" id="referredby" name="referredby" value="http://utl.chieferp.com/wp-admin/index.php">
                        <input type="hidden" name="_wp_original_http_referer" value="http://utl.chieferp.com/wp-admin/index.php">
                        <input type="hidden" id="auto_draft" name="auto_draft" value="1">
                        <input type="hidden" id="post_ID" name="post_ID" value="475">
                        <input type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="4c2fe8ed27">
                        <input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="c9ec2f2a27">
                        <input type="hidden" id="original_post_title" name="original_post_title" value="">
                        <div id="poststuff">
                            <div id="post-body" class="metabox-holder columns-1">
                                <div id="post-body-content" style="position: relative;">

                                    <div id="titlediv">
                                        <div id="titlewrap">
                                            <label class="" id="title-prompt-text" for="title">Enter title here</label>
                                            <input type="text" name="post_title" size="30" value="" id="title" spellcheck="true" autocomplete="off">
                                        </div>
                                        <div class="inside">
                                            <div id="edit-slug-box" class="hide-if-no-js">
                                            </div>
                                        </div>
                                        <input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="eb891c1465">
                                    </div>
                                    <!-- /titlediv -->
                                    <div id="postdivrich" class="postarea wp-editor-expand">

                                        <div id="wp-content-wrap" class="wp-core-ui wp-editor-wrap tmce-active has-dfw" style="padding-top: 55px;">
                                            <link rel="stylesheet" id="editor-buttons-css" href="http://utl.chieferp.com/wp-includes/css/editor.min.css?ver=4.8.2" type="text/css" media="all">
                                            <div id="wp-content-editor-tools" class="wp-editor-tools hide-if-no-js" style="position: absolute; top: 0px; width: 1164px;">
                                                <div id="wp-content-media-buttons" class="wp-media-buttons">
                                                    <button type="button" id="insert-media-button" class="button insert-media add_media" data-editor="content"><span class="wp-media-buttons-icon"></span> Add Media</button>
                                                    <a class="button thickbox" title="Select Huge IT Google Maps to insert into post" href="#TB_inline?width=400&amp;inlineId=hugeit_maps&amp;width=753&amp;height=200">
                                                        <span class="wp-media-buttons-icon" style="background: url(http://utl.chieferp.com/wp-content/plugins/google-maps/assets/images/google-maps-20-x-20.png); background-repeat: no-repeat; background-position: left bottom;background-size: 18px 18px;"></span>Add Google Maps</a>
                                                </div>
                                                <div class="wp-editor-tabs">
                                                    <button type="button" id="content-tmce" class="wp-switch-editor switch-tmce" data-wp-editor-id="content">Visual</button>
                                                    <button type="button" id="content-html" class="wp-switch-editor switch-html" data-wp-editor-id="content">Text</button>
                                                </div>
                                            </div>
                                            <div id="wp-content-editor-container" class="wp-editor-container">
                                                <div id="ed_toolbar" class="quicktags-toolbar" style="position: absolute; top: 0px; width: 1124px;">
                                                    <input type="button" id="qt_content_strong" class="ed_button button button-small" aria-label="Bold" value="b">
                                                    <input type="button" id="qt_content_em" class="ed_button button button-small" aria-label="Italic" value="i">
                                                    <input type="button" id="qt_content_link" class="ed_button button button-small" aria-label="Insert link" value="link">
                                                    <input type="button" id="qt_content_block" class="ed_button button button-small" aria-label="Blockquote" value="b-quote">
                                                    <input type="button" id="qt_content_del" class="ed_button button button-small" aria-label="Deleted text (strikethrough)" value="del">
                                                    <input type="button" id="qt_content_ins" class="ed_button button button-small" aria-label="Inserted text" value="ins">
                                                    <input type="button" id="qt_content_img" class="ed_button button button-small" aria-label="Insert image" value="img">
                                                    <input type="button" id="qt_content_ul" class="ed_button button button-small" aria-label="Bulleted list" value="ul">
                                                    <input type="button" id="qt_content_ol" class="ed_button button button-small" aria-label="Numbered list" value="ol">
                                                    <input type="button" id="qt_content_li" class="ed_button button button-small" aria-label="List item" value="li">
                                                    <input type="button" id="qt_content_code" class="ed_button button button-small" aria-label="Code" value="code">
                                                    <input type="button" id="qt_content_more" class="ed_button button button-small" aria-label="Insert Read More tag" value="more">
                                                    <input type="button" id="qt_content_close" class="ed_button button button-small" title="Close all open tags" value="close tags">
                                                    <button type="button" id="qt_content_dfw" class="ed_button qt-dfw" title="Distraction-free writing mode"></button>
                                                </div>
                                                <div id="mceu_25" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;">
                                                    <div id="mceu_25-body" class="mce-container-body mce-stack-layout">
                                                        <div id="mceu_26" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item mce-first" hidefocus="1" tabindex="-1" role="group" style="position: absolute; top: 0px; width: 1162px;">
                                                            <div id="mceu_26-body" class="mce-container-body mce-stack-layout">
                                                                <div id="mceu_27" class="mce-container mce-toolbar mce-stack-layout-item mce-first" role="toolbar">
                                                                    <div id="mceu_27-body" class="mce-container-body mce-flow-layout">
                                                                        <div id="mceu_28" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                                                                            <div id="mceu_28-body">
                                                                                <div id="mceu_0" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-haspopup="true">
                                                                                    <button id="mceu_0-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Paragraph</span> <i class="mce-caret"></i></button>
                                                                                </div>
                                                                                <div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Bold">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button>
                                                                                </div>
                                                                                <div id="mceu_2" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Italic">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button>
                                                                                </div>
                                                                                <div id="mceu_3" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Bulleted list">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button>
                                                                                </div>
                                                                                <div id="mceu_4" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Numbered list">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button>
                                                                                </div>
                                                                                <div id="mceu_5" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Blockquote">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button>
                                                                                </div>
                                                                                <div id="mceu_6" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Align left">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button>
                                                                                </div>
                                                                                <div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Align center">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button>
                                                                                </div>
                                                                                <div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Align right">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button>
                                                                                </div>
                                                                                <div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Insert/edit link">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button>
                                                                                </div>
                                                                                <div id="mceu_10" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Remove link">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button>
                                                                                </div>
                                                                                <div id="mceu_11" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Insert Read More tag">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-wp_more"></i></button>
                                                                                </div>
                                                                                <div id="mceu_12" class="mce-widget mce-btn mce-wp-dfw" tabindex="-1" role="button" aria-label="Distraction-free writing mode">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dfw"></i></button>
                                                                                </div>
                                                                                <div id="mceu_13" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Toolbar Toggle">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-wp_adv"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="mceu_29" class="mce-container mce-toolbar mce-stack-layout-item mce-last" role="toolbar" style="display: none;">
                                                                    <div id="mceu_29-body" class="mce-container-body mce-flow-layout">
                                                                        <div id="mceu_30" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                                                                            <div id="mceu_30-body">
                                                                                <div id="mceu_14" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Strikethrough">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-strikethrough"></i></button>
                                                                                </div>
                                                                                <div id="mceu_15" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Horizontal line">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-hr"></i></button>
                                                                                </div>
                                                                                <div id="mceu_16" class="mce-widget mce-btn mce-colorbutton" role="button" tabindex="-1" aria-haspopup="true" aria-label="Text color">
                                                                                    <button role="presentation" hidefocus="1" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mceu_16-preview" class="mce-preview"></span></button>
                                                                                    <button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button>
                                                                                </div>
                                                                                <div id="mceu_17" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Paste as text">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-pastetext"></i></button>
                                                                                </div>
                                                                                <div id="mceu_18" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Clear formatting">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-removeformat"></i></button>
                                                                                </div>
                                                                                <div id="mceu_19" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Special character">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-charmap"></i></button>
                                                                                </div>
                                                                                <div id="mceu_20" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Decrease indent">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button>
                                                                                </div>
                                                                                <div id="mceu_21" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Increase indent">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button>
                                                                                </div>
                                                                                <div id="mceu_22" class="mce-widget mce-btn mce-disabled" tabindex="-1" role="button" aria-label="Undo" aria-disabled="true">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button>
                                                                                </div>
                                                                                <div id="mceu_23" class="mce-widget mce-btn mce-disabled" tabindex="-1" role="button" aria-label="Redo" aria-disabled="true">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button>
                                                                                </div>
                                                                                <div id="mceu_24" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Keyboard Shortcuts">
                                                                                    <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-wp_help"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_31" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px; padding-top: 37px;">
                                                            <iframe id="content_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press Alt-Shift-H for help." style="width: 100%; height: 300px; display: block;"></iframe>
                                                        </div>
                                                        <div id="mceu_32" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="visibility: hidden;">
                                                            <div id="mceu_32-body" class="mce-container-body mce-flow-layout">
                                                                <div id="mceu_33" class="mce-path mce-flow-layout-item mce-first mce-last">
                                                                    <div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_33-0" aria-level="1">p</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <textarea class="wp-editor-area" style="height: 300px; margin-top: 37px; display: none;" autocomplete="off" cols="40" name="content" id="content" aria-hidden="true"></textarea>
                                            </div>
                                            <div class="uploader-editor">
                                                <div class="uploader-editor-content">
                                                    <div class="uploader-editor-title">Drop files to upload</div>
                                                </div>
                                            </div>
                                        </div>

                                        <table id="post-status-info" style="">
                                            <tbody>
                                                <tr>
                                                    <td id="wp-word-count" class="hide-if-no-js">Word count: <span class="word-count">0</span></td>
                                                    <td class="autosave-info">
                                                        <span class="autosave-message">&nbsp;</span>
                                                    </td>
                                                    <td id="content-resize-handle" class="hide-if-no-js">
                                                        <br>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- /post-body-content -->

                                <div id="postbox-container-1" class="postbox-container">
                                    <div id="side-sortables" class="meta-box-sortables ui-sortable" style="">
                                        <div id="submitdiv" class="postbox ">
                                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Publish</span><span class="toggle-indicator" aria-hidden="true"></span></button>
                                            <h2 class="hndle ui-sortable-handle"><span>Publish</span></h2>
                                            <div class="inside">
                                                <div class="submitbox" id="submitpost">

                                                    <div id="minor-publishing">

                                                        <div style="display:none;">
                                                            <p class="submit">
                                                                <input type="submit" name="save" id="save" class="button" value="Save">
                                                            </p>
                                                        </div>

                                                        <div id="minor-publishing-actions">
                                                            <div id="save-action">
                                                                <input type="submit" name="save" id="save-post" value="Save Draft" class="button">
                                                                <span class="spinner"></span>
                                                            </div>
                                                            <div id="preview-action">
                                                                <a class="preview button" href="http://utl.chieferp.com/?page_id=475&amp;preview=true" target="wp-preview-475" id="post-preview">Preview<span class="screen-reader-text"> (opens in a new window)</span></a>
                                                                <input type="hidden" name="wp-preview" id="wp-preview" value="">
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- #minor-publishing-actions -->

                                                        <div id="misc-publishing-actions">

                                                            <div class="misc-pub-section misc-pub-post-status">
                                                                Status: <span id="post-status-display">Draft</span>
                                                                <a href="#post_status" class="edit-post-status hide-if-no-js" role="button"><span aria-hidden="true">Edit</span> <span class="screen-reader-text">Edit status</span></a>

                                                                <div id="post-status-select" class="hide-if-js">
                                                                    <input type="hidden" name="hidden_post_status" id="hidden_post_status" value="draft">
                                                                    <label for="post_status" class="screen-reader-text">Set status</label>
                                                                    <select name="post_status" id="post_status">
                                                                        <option value="pending">Pending Review</option>
                                                                        <option selected="selected" value="draft">Draft</option>
                                                                    </select>
                                                                    <a href="#post_status" class="save-post-status hide-if-no-js button">OK</a>
                                                                    <a href="#post_status" class="cancel-post-status hide-if-no-js button-cancel">Cancel</a>
                                                                </div>

                                                            </div>
                                                            <!-- .misc-pub-section -->

                                                            <div class="misc-pub-section misc-pub-visibility" id="visibility">
                                                                Visibility: <span id="post-visibility-display">Public</span>
                                                                <a href="#visibility" class="edit-visibility hide-if-no-js" role="button"><span aria-hidden="true">Edit</span> <span class="screen-reader-text">Edit visibility</span></a>

                                                                <div id="post-visibility-select" class="hide-if-js">
                                                                    <input type="hidden" name="hidden_post_password" id="hidden-post-password" value="">
                                                                    <input type="hidden" name="hidden_post_visibility" id="hidden-post-visibility" value="public">
                                                                    <input type="radio" name="visibility" id="visibility-radio-public" value="public" checked="checked">
                                                                    <label for="visibility-radio-public" class="selectit">Public</label>
                                                                    <br>
                                                                    <input type="radio" name="visibility" id="visibility-radio-password" value="password">
                                                                    <label for="visibility-radio-password" class="selectit">Password protected</label>
                                                                    <br>
                                                                    <span id="password-span"><label for="post_password">Password:</label> <input type="text" name="post_password" id="post_password" value="" maxlength="255" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"><br></span>
                                                                    <input type="radio" name="visibility" id="visibility-radio-private" value="private">
                                                                    <label for="visibility-radio-private" class="selectit">Private</label>
                                                                    <br>

                                                                    <p>
                                                                        <a href="#visibility" class="save-post-visibility hide-if-no-js button">OK</a>
                                                                        <a href="#visibility" class="cancel-post-visibility hide-if-no-js button-cancel">Cancel</a>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                            <!-- .misc-pub-section -->

                                                            <div class="misc-pub-section curtime misc-pub-curtime">
                                                                <span id="timestamp">
    Publish <b>immediately</b></span>
                                                                <a href="#edit_timestamp" class="edit-timestamp hide-if-no-js" role="button"><span aria-hidden="true">Edit</span> <span class="screen-reader-text">Edit date and time</span></a>
                                                                <fieldset id="timestampdiv" class="hide-if-js">
                                                                    <legend class="screen-reader-text">Date and time</legend>
                                                                    <div class="timestamp-wrap">
                                                                        <label><span class="screen-reader-text">Month</span>
                                                                            <select id="mm" name="mm">
                                                                                <option value="01" data-text="Jan">01-Jan</option>
                                                                                <option value="02" data-text="Feb">02-Feb</option>
                                                                                <option value="03" data-text="Mar">03-Mar</option>
                                                                                <option value="04" data-text="Apr">04-Apr</option>
                                                                                <option value="05" data-text="May">05-May</option>
                                                                                <option value="06" data-text="Jun">06-Jun</option>
                                                                                <option value="07" data-text="Jul">07-Jul</option>
                                                                                <option value="08" data-text="Aug">08-Aug</option>
                                                                                <option value="09" data-text="Sep">09-Sep</option>
                                                                                <option value="10" data-text="Oct" selected="selected">10-Oct</option>
                                                                                <option value="11" data-text="Nov">11-Nov</option>
                                                                                <option value="12" data-text="Dec">12-Dec</option>
                                                                            </select>
                                                                        </label>
                                                                        <label><span class="screen-reader-text">Day</span>
                                                                            <input type="text" id="jj" name="jj" value="12" size="2" maxlength="2" autocomplete="off">
                                                                        </label>,
                                                                        <label><span class="screen-reader-text">Year</span>
                                                                            <input type="text" id="aa" name="aa" value="2017" size="4" maxlength="4" autocomplete="off">
                                                                        </label> @
                                                                        <label><span class="screen-reader-text">Hour</span>
                                                                            <input type="text" id="hh" name="hh" value="08" size="2" maxlength="2" autocomplete="off">
                                                                        </label>:
                                                                        <label><span class="screen-reader-text">Minute</span>
                                                                            <input type="text" id="mn" name="mn" value="48" size="2" maxlength="2" autocomplete="off">
                                                                        </label>
                                                                    </div>
                                                                    <input type="hidden" id="ss" name="ss" value="12">

                                                                    <input type="hidden" id="hidden_mm" name="hidden_mm" value="10">
                                                                    <input type="hidden" id="cur_mm" name="cur_mm" value="10">
                                                                    <input type="hidden" id="hidden_jj" name="hidden_jj" value="12">
                                                                    <input type="hidden" id="cur_jj" name="cur_jj" value="12">
                                                                    <input type="hidden" id="hidden_aa" name="hidden_aa" value="2017">
                                                                    <input type="hidden" id="cur_aa" name="cur_aa" value="2017">
                                                                    <input type="hidden" id="hidden_hh" name="hidden_hh" value="08">
                                                                    <input type="hidden" id="cur_hh" name="cur_hh" value="08">
                                                                    <input type="hidden" id="hidden_mn" name="hidden_mn" value="48">
                                                                    <input type="hidden" id="cur_mn" name="cur_mn" value="48">

                                                                    <p>
                                                                        <a href="#edit_timestamp" class="save-timestamp hide-if-no-js button">OK</a>
                                                                        <a href="#edit_timestamp" class="cancel-timestamp hide-if-no-js button-cancel">Cancel</a>
                                                                    </p>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>

                                                    <div id="major-publishing-actions">
                                                        <div id="delete-action">
                                                            <a class="submitdelete deletion" href="http://utl.chieferp.com/wp-admin/post.php?post=475&amp;action=trash&amp;_wpnonce=5327d687c1">Move to Trash</a></div>

                                                        <div id="publishing-action">
                                                            <span class="spinner"></span>
                                                            <input name="original_publish" type="hidden" id="original_publish" value="Publish">
                                                            <input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Publish">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="pageparentdiv" class="postbox ">
                                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Page Attributes</span><span class="toggle-indicator" aria-hidden="true"></span></button>
                                            <h2 class="hndle ui-sortable-handle"><span>Page Attributes</span></h2>
                                            <div class="inside">
                                                <p class="post-attributes-label-wrapper">
                                                    <label class="post-attributes-label" for="parent_id">Parent</label>
                                                </p>
                                                <select name="parent_id" id="parent_id">
                                                    <option value="">(no parent)</option>
                                                    <option class="level-0" value="231">Blog</option>
                                                    <option class="level-0" value="5">Cart</option>
                                                    <option class="level-0" value="6">Checkout</option>
                                                    <option class="level-0" value="10">Contact</option>
                                                    <option class="level-0" value="120">Home</option>
                                                    <option class="level-0" value="230">Home</option>
                                                    <option class="level-0" value="210">home page</option>
                                                    <option class="level-0" value="7">My account</option>
                                                    <option class="level-0" value="138">Our Sectors</option>
                                                    <option class="level-0" value="384">Products</option>
                                                    <option class="level-0" value="269">Shop</option>
                                                </select>
                                                <p class="post-attributes-label-wrapper">
                                                    <label class="post-attributes-label" for="page_template">Template</label>
                                                </p>
                                                <select name="page_template" id="page_template">
                                                    <option value="default">Default Template</option>

                                                    <option value="page-templates/contact.php">Contact Page Template</option>
                                                </select>
                                                <p class="post-attributes-label-wrapper">
                                                    <label class="post-attributes-label" for="menu_order">Order</label>
                                                </p>
                                                <input name="menu_order" type="text" size="4" id="menu_order" value="0">
                                                <p>Need help? Use the Help tab above the screen title.</p>
                                            </div>
                                        </div>
                                        <div id="postimagediv" class="postbox ">
                                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Featured Image</span><span class="toggle-indicator" aria-hidden="true"></span></button>
                                            <h2 class="hndle ui-sortable-handle"><span>Featured Image</span></h2>
                                            <div class="inside">
                                                <p class="hide-if-no-js"><a href="http://utl.chieferp.com/wp-admin/media-upload.php?post_id=475&amp;type=image&amp;TB_iframe=1&amp;width=753&amp;height=200" id="set-post-thumbnail" class="thickbox">Set featured image</a></p>
                                                <input type="hidden" id="_thumbnail_id" name="_thumbnail_id" value="-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="postbox-container-2" class="postbox-container">
                                    <div id="normal-sortables" class="meta-box-sortables ui-sortable">

                                        <div id="commentstatusdiv" class="postbox ">
                                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Discussion</span><span class="toggle-indicator" aria-hidden="true"></span></button>
                                            <h2 class="hndle ui-sortable-handle"><span>Discussion</span></h2>
                                            <div class="inside">
                                                <input name="advanced_view" type="hidden" value="1">
                                                <p class="meta-options">
                                                    <label for="comment_status" class="selectit">
                                                        <input name="comment_status" type="checkbox" id="comment_status" value="open"> Allow comments</label>
                                                    <br>
                                                    <label for="ping_status" class="selectit">
                                                        <input name="ping_status" type="checkbox" id="ping_status" value="open"> Allow <a href="https://codex.wordpress.org/Introduction_to_Blogging#Managing_Comments">trackbacks and pingbacks</a> on this page</label>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="slugdiv" class="postbox ">
                                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Slug</span><span class="toggle-indicator" aria-hidden="true"></span></button>
                                            <h2 class="hndle ui-sortable-handle"><span>Slug</span></h2>
                                            <div class="inside">
                                                <label class="screen-reader-text" for="post_name">Slug</label>
                                                <input name="post_name" type="text" size="13" id="post_name" value="">
                                            </div>
                                        </div>
                                        <div id="authordiv" class="postbox ">
                                            <button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Author</span><span class="toggle-indicator" aria-hidden="true"></span></button>
                                            <h2 class="hndle ui-sortable-handle"><span>Author</span></h2>
                                            <div class="inside">
                                                <label class="screen-reader-text" for="post_author_override">Author</label>
                                                <select name="post_author_override" id="post_author_override" class="">
                                                    <option value="1" selected="selected">wp-admin (wp-admin)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="advanced-sortables" class="meta-box-sortables ui-sortable"></div>
                                </div>
                            </div>
                            <!-- /post-body -->
                            <br class="clear">
                        </div>
                        <!-- /poststuff -->
                    </form>
                </div>

                <form method="get">
                    <table style="display:none;">
                        <tbody id="com-reply">
                            <tr id="replyrow" class="inline-edit-row" style="display:none;">
                                <td colspan="2" class="colspanchange">
                                    <fieldset class="comment-reply">
                                        <legend>
                                            <span class="hidden" id="editlegend">Edit Comment</span>
                                            <span class="hidden" id="replyhead">Reply to Comment</span>
                                            <span class="hidden" id="addhead">Add new Comment</span>
                                        </legend>

                                        <div id="replycontainer">
                                            <label for="replycontent" class="screen-reader-text">Comment</label>
                                            <div id="wp-replycontent-wrap" class="wp-core-ui wp-editor-wrap html-active">
                                                <div id="wp-replycontent-editor-container" class="wp-editor-container">
                                                    <div id="qt_replycontent_toolbar" class="quicktags-toolbar">
                                                        <input type="button" id="qt_replycontent_strong" class="ed_button button button-small" aria-label="Bold" value="b">
                                                        <input type="button" id="qt_replycontent_em" class="ed_button button button-small" aria-label="Italic" value="i">
                                                        <input type="button" id="qt_replycontent_link" class="ed_button button button-small" aria-label="Insert link" value="link">
                                                        <input type="button" id="qt_replycontent_block" class="ed_button button button-small" aria-label="Blockquote" value="b-quote">
                                                        <input type="button" id="qt_replycontent_del" class="ed_button button button-small" aria-label="Deleted text (strikethrough)" value="del">
                                                        <input type="button" id="qt_replycontent_ins" class="ed_button button button-small" aria-label="Inserted text" value="ins">
                                                        <input type="button" id="qt_replycontent_img" class="ed_button button button-small" aria-label="Insert image" value="img">
                                                        <input type="button" id="qt_replycontent_ul" class="ed_button button button-small" aria-label="Bulleted list" value="ul">
                                                        <input type="button" id="qt_replycontent_ol" class="ed_button button button-small" aria-label="Numbered list" value="ol">
                                                        <input type="button" id="qt_replycontent_li" class="ed_button button button-small" aria-label="List item" value="li">
                                                        <input type="button" id="qt_replycontent_code" class="ed_button button button-small" aria-label="Code" value="code">
                                                        <input type="button" id="qt_replycontent_close" class="ed_button button button-small" title="Close all open tags" value="close tags">
                                                    </div>
                                                    <textarea class="wp-editor-area" rows="20" cols="40" name="replycontent" id="replycontent"></textarea>
                                                </div>
                                                <div class="uploader-editor">
                                                    <div class="uploader-editor-content">
                                                        <div class="uploader-editor-title">Drop files to upload</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div id="edithead" style="display:none;">
                                            <div class="inside">
                                                <label for="author-name">Name</label>
                                                <input type="text" name="newcomment_author" size="50" value="" id="author-name">
                                            </div>

                                            <div class="inside">
                                                <label for="author-email">Email</label>
                                                <input type="text" name="newcomment_author_email" size="50" value="" id="author-email">
                                            </div>

                                            <div class="inside">
                                                <label for="author-url">URL</label>
                                                <input type="text" id="author-url" name="newcomment_author_url" class="code" size="103" value="">
                                            </div>
                                        </div>

                                        <p id="replysubmit" class="submit">
                                            <a href="#comments-form" class="save button button-primary alignright">
                                                <span id="addbtn" style="display:none;">Add Comment</span>
                                                <span id="savebtn" style="display:none;">Update Comment</span>
                                                <span id="replybtn" style="display:none;">Submit Reply</span></a>
                                            <a href="#comments-form" class="cancel button alignleft">Cancel</a>
                                            <span class="waiting spinner"></span>
                                            <span class="error" style="display:none;"></span>
                                        </p>

                                        <input type="hidden" name="action" id="action" value="">
                                        <input type="hidden" name="comment_ID" id="comment_ID" value="">
                                        <input type="hidden" name="comment_post_ID" id="comment_post_ID" value="">
                                        <input type="hidden" name="status" id="status" value="">
                                        <input type="hidden" name="position" id="position" value="1">
                                        <input type="hidden" name="checkbox" id="checkbox" value="0">
                                        <input type="hidden" name="mode" id="mode" value="single">
                                        <input type="hidden" id="_ajax_nonce-replyto-comment" name="_ajax_nonce-replyto-comment" value="f3fecb0a4f">
                                        <input type="hidden" id="_wp_unfiltered_html_comment" name="_wp_unfiltered_html_comment" value="cab0dbd4f3"> </fieldset>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <script type="text/javascript">
                    try {
                        document.post.title.focus();
                    } catch (e) {}
                </script>

                <div class="clear"></div>
            </div>
            <!-- wpbody-content -->
            <div class="clear"></div>
        </div>
        <!-- wpbody -->
        <div class="clear"></div>
    </div>
    <!-- wpcontent -->

    <style>
        .tb_popup_form {
            position: relative;
            display: block;
        }
        
        .tb_popup_form li {
            display: block;
            height: 35px;
            width: 70%;
        }
        
        .tb_popup_form li label {
            float: left;
            width: 35%
        }
        
        .tb_popup_form li input {
            float: left;
            width: 60%;
        }
        
        .slider,
        .slider-container {
            display: block;
            position: relative;
            height: 35px;
            line-height: 35px;
        }
    </style>
    <div id="hugeit_maps" style="display:none;">

        <form method="post" action="">
            <h3>Select The Map</h3>

            <select id="huge_it_map_select">
                <option value="1">My First Map</option>
            </select>
            <button class="button primary" id="hugeitmapinsert">Insert Map</button>
            <ul class="tb_popup_form">
                <li class="has_background">
                    <label for="map_name">Map name</label>
                    <input type="text" name="map_name" id="map_name" value="My First Map">
                </li>
                <li>
                    <label for="map_type">Map type</label>
                    <select id="map_type" name="map_type">
                        <option value="ROADMAP" selected="">Roadmap
                        </option>
                        <option value="SATELLITE">Satellite
                        </option>
                        <option value="HYBRID">Hybrid
                        </option>
                        <option value="TERRAIN">Terrain
                        </option>
                    </select>
                </li>

                <li class="has_background">
                    <label for="map_width">Map width</label>
                    <div class="slider-container" style="float:left; width:55%; height:25px; ">
                        <div class="slider" id="map_width-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 135px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 135px;"></div>
                        </div>
                        <input name="map_width" id="map_width" data-slider-highlight="true" data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="100" style="display: none;">
                        <span style="position:absolute; top: -1px; right: 0;">100%</span>
                    </div>
                </li>
                <li>
                    <label for="map_height">Map height</label>
                    <input type="text" name="map_height" id="map_height" value="300">
                </li>
                <li class="has_background">
                    <label for="map_align">Map align</label>
                    <select name="map_align" id="map_align">
                        <option value="left">left
                        </option>
                        <option value="center" selected="">center
                        </option>
                        <option value="right">right
                        </option>
                    </select>
                </li>
                <li>
                    <label for="map_border_radius">Border radius</label>
                    <input type="text" name="map_border_radius" id="map_border_radius" value="0">
                </li>
            </ul>
        </form>
    </div>
    <div id="post-lock-dialog" class="notification-dialog-wrap hidden">
        <div class="notification-dialog-background"></div>
        <div class="notification-dialog">
            <div class="post-taken-over">
                <div class="post-locked-avatar"></div>
                <p class="wp-tab-first" tabindex="0">
                    <span class="currently-editing"></span>
                    <br>
                    <span class="locked-saving hidden"><img src="http://utl.chieferp.com/wp-admin/images/spinner-2x.gif" width="16" height="16" alt=""> Saving revision…</span>
                    <span class="locked-saved hidden">Your latest changes were saved as a revision.</span>
                </p>
                <p><a class="button button-primary wp-tab-last" href="http://utl.chieferp.com/wp-admin/edit.php?post_type=page">All Pages</a></p>
            </div>
        </div>
    </div>
    <!--[if lte IE 8]>
    <style>
        .attachment:focus {
            outline: #1e8cbe solid;
        }
        .selected.attachment {
            outline: #1e8cbe solid;
        }
    </style>
    <![endif]-->
    
    <div id="wp-link-backdrop" style="display: none"></div>
    <div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-labelledby="link-modal-title">
        <form id="wp-link" tabindex="-1">
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="0d39b5cd60">
            <h1 id="link-modal-title">Insert/edit link</h1>
            <button type="button" id="wp-link-close"><span class="screen-reader-text">Close</span></button>
            <div id="link-selector">
                <div id="link-options">
                    <p class="howto" id="wplink-enter-url">Enter the destination URL</p>
                    <div>
                        <label><span>URL</span>
                            <input id="wp-link-url" type="text" aria-describedby="wplink-enter-url">
                        </label>
                    </div>
                    <div class="wp-link-text-field">
                        <label><span>Link Text</span>
                            <input id="wp-link-text" type="text">
                        </label>
                    </div>
                    <div class="link-target">
                        <label><span></span>
                            <input type="checkbox" id="wp-link-target"> Open link in a new tab</label>
                    </div>
                </div>
                <p class="howto" id="wplink-link-existing-content">Or link to existing content</p>
                <div id="search-panel">
                    <div class="link-search-wrapper">
                        <label>
                            <span class="search-label">Search</span>
                            <input type="search" id="wp-link-search" class="link-search-field" autocomplete="off" aria-describedby="wplink-link-existing-content">
                            <span class="spinner"></span>
                        </label>
                    </div>
                    <div id="search-results" class="query-results" tabindex="0">
                        <ul></ul>
                        <div class="river-waiting">
                            <span class="spinner"></span>
                        </div>
                    </div>
                    <div id="most-recent-results" class="query-results" tabindex="0">
                        <div class="query-notice" id="query-notice-message">
                            <em class="query-notice-default">No search term specified. Showing recent items.</em>
                            <em class="query-notice-hint screen-reader-text">Search or use up and down arrow keys to select an item.</em>
                        </div>
                        <ul></ul>
                        <div class="river-waiting">
                            <span class="spinner"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submitbox">
                <div id="wp-link-cancel">
                    <button type="button" class="button">Cancel</button>
                </div>
                <div id="wp-link-update">
                    <input type="submit" value="Add Link" class="button button-primary" id="wp-link-submit" name="wp-link-submit">
                </div>
            </div>
        </form>
    </div>

    <div class="clear"></div>
</div>





   
				
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content-orphan'); ?>

	

	
	
	
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-js'); ?>

        <script type="text/html" id="tmpl-media-frame">
        <div class="media-frame-menu"></div>
        <div class="media-frame-title"></div>
        <div class="media-frame-router"></div>
        <div class="media-frame-content"></div>
        <div class="media-frame-toolbar"></div>
        <div class="media-frame-uploader"></div>
    </script>

    <script type="text/html" id="tmpl-media-modal">
        <div class="media-modal wp-core-ui">
            <button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span>
            </button>
            <div class="media-modal-content"></div>
        </div>
        <div class="media-modal-backdrop"></div>
    </script>

    <script type="text/html" id="tmpl-uploader-window">
        <div class="uploader-window-content">
            <h1>Drop files to upload</h1>
        </div>
    </script>

    <script type="text/html" id="tmpl-uploader-editor">
        <div class="uploader-editor-content">
            <div class="uploader-editor-title">Drop files to upload</div>
        </div>
    </script>

    <script type="text/html" id="tmpl-uploader-inline">
        <# var messageClass=d ata.message ? 'has-upload-message' : 'no-upload-message'; #>
            <# if ( data.canClose ) { #>
                <button class="close dashicons dashicons-no"><span class="screen-reader-text">Close uploader</span></button>
                <# } #>
                    <div class="uploader-inline-content <?php echo e(messageClass); ?>">
                        <# if ( data.message ) { #>
                            <h2 class="upload-message"><?php echo e(data.message); ?></h2>
                            <# } #>
                                <div class="upload-ui">
                                    <h2 class="upload-instructions drop-instructions">Drop files anywhere to upload</h2>
                                    <p class="upload-instructions drop-instructions">or</p>
                                    <button type="button" class="browser button button-hero">Select Files</button>
                                </div>

                                <div class="upload-inline-status"></div>

                                <div class="post-upload-ui">

                                    <p class="max-upload-size">Maximum upload file size: 8 MB.</p>

                                    <# if ( data.suggestedWidth && data.suggestedHeight ) { #>
                                        <p class="suggested-dimensions">
                                            Suggested image dimensions: <?php echo e(data.suggestedWidth); ?> by <?php echo e(data.suggestedHeight); ?> pixels. </p>
                                        <# } #>

                                </div>
                    </div>
    </script>

    <script type="text/html" id="tmpl-media-library-view-switcher">
        <a href="/wp-admin/post-new.php?post_type=page&#038;mode=list" class="view-list">
            <span class="screen-reader-text">List View</span>
        </a>
        <a href="/wp-admin/post-new.php?post_type=page&#038;mode=grid" class="view-grid current">
            <span class="screen-reader-text">Grid View</span>
        </a>
    </script>

    <script type="text/html" id="tmpl-uploader-status">
        <h2>Uploading</h2>
        <button type="button" class="button-link upload-dismiss-errors"><span class="screen-reader-text">Dismiss Errors</span></button>

        <div class="media-progress-bar">
            <div></div>
        </div>
        <div class="upload-details">
            <span class="upload-count">
                <span class="upload-index"></span> / <span class="upload-total"></span>
            </span>
            <span class="upload-detail-separator">&ndash;</span>
            <span class="upload-filename"></span>
        </div>
        <div class="upload-errors"></div>
    </script>

    <script type="text/html" id="tmpl-uploader-status-error">
        <span class="upload-error-filename"><?php echo e(data.filename); ?></span>
        <span class="upload-error-message"><?php echo e(data.message); ?></span>
    </script>

    <script type="text/html" id="tmpl-edit-attachment-frame">
        <div class="edit-media-header">
            <button class="left dashicons <# if ( ! data.hasPrevious ) { #> disabled <# } #>"><span class="screen-reader-text">Edit previous media item</span></button>
            <button class="right dashicons <# if ( ! data.hasNext ) { #> disabled <# } #>"><span class="screen-reader-text">Edit next media item</span></button>
        </div>
        <div class="media-frame-title"></div>
        <div class="media-frame-content"></div>
    </script>

    <script type="text/html" id="tmpl-attachment-details-two-column">
        <div class="attachment-media-view <?php echo e(data.orientation); ?>">
            <div class="thumbnail thumbnail-<?php echo e(data.type); ?>">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div></div>
                    </div>
                    <# } else if ( data.sizes && data.sizes.large ) { #>
                        <img class="details-image" src="<?php echo e(data.sizes.large.url); ?>" draggable="false" alt="" />
                        <# } else if ( data.sizes && data.sizes.full ) { #>
                            <img class="details-image" src="<?php echo e(data.sizes.full.url); ?>" draggable="false" alt="" />
                            <# } else if ( -1===j Query.inArray( data.type, [ 'audio', 'video' ] ) ) { #>
                                <img class="details-image icon" src="<?php echo e(data.icon); ?>" draggable="false" alt="" />
                                <# } #>

                                    <# if ( 'audio'===d ata.type ) { #>
                                        <div class="wp-media-wrapper">
                                            <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
                                                <source type="<?php echo e(data.mime); ?>" src="<?php echo e(data.url); ?>" />
                                            </audio>
                                        </div>
                                        <# } else if ( 'video'===d ata.type ) { var w_rule='' ; if ( data.width ) { w_rule='width: ' + data.width + 'px;'; } else if ( wp.media.view.settings.contentWidth ) { w_rule='width: ' + wp.media.view.settings.contentWidth + 'px;'; } #>
                                            <div style="<?php echo e(w_rule); ?>" class="wp-media-wrapper wp-video">
                                                <video controls="controls" class="wp-video-shortcode" preload="metadata" <# if ( data.width ) { #>width="<?php echo e(data.width); ?>"
                                                    <# } #>
                                                        <# if ( data.height ) { #>height="<?php echo e(data.height); ?>"
                                                            <# } #>
                                                                <# if ( data.image && data.image.src !==d ata.icon ) { #>poster="<?php echo e(data.image.src); ?>"
                                                                    <# } #>>
                                                                        <source type="<?php echo e(data.mime); ?>" src="<?php echo e(data.url); ?>" />
                                                </video>
                                            </div>
                                            <# } #>

                                                <div class="attachment-actions">
                                                    <# if ( 'image'===d ata.type && ! data.uploading && data.sizes && data.can.save ) { #>
                                                        <button type="button" class="button edit-attachment">Edit Image</button>
                                                        <# } else if ( 'pdf'===d ata.subtype && data.sizes ) { #>
                                                            Document Preview
                                                            <# } #>
                                                </div>
            </div>
        </div>
        <div class="attachment-info">
            <span class="settings-save-status">
                <span class="spinner"></span>
            <span class="saved">Saved.</span>
            </span>
            <div class="details">
                <div class="filename"><strong>File name:</strong> <?php echo e(data.filename); ?></div>
                <div class="filename"><strong>File type:</strong> <?php echo e(data.mime); ?></div>
                <div class="uploaded"><strong>Uploaded on:</strong> <?php echo e(data.dateFormatted); ?></div>

                <div class="file-size"><strong>File size:</strong> <?php echo e(data.filesizeHumanReadable); ?></div>
                <# if ( 'image'===d ata.type && ! data.uploading ) { #>
                    <# if ( data.width && data.height ) { #>
                        <div class="dimensions"><strong>Dimensions:</strong> <?php echo e(data.width); ?> &times; <?php echo e(data.height); ?></div>
                        <# } #>
                            <# } #>

                                <# if ( data.fileLength ) { #>
                                    <div class="file-length"><strong>Length:</strong> <?php echo e(data.fileLength); ?></div>
                                    <# } #>

                                        <# if ( 'audio'===d ata.type && data.meta.bitrate ) { #>
                                            <div class="bitrate">
                                                <strong>Bitrate:</strong> <?php echo e(Math.round( data.meta.bitrate / 1000 )); ?>kb/s
                                                <# if ( data.meta.bitrate_mode ) { #>
                                                    <?php echo e(' ' + data.meta.bitrate_mode.toUpperCase()); ?>

                                                    <# } #>
                                            </div>
                                            <# } #>

                                                <div class="compat-meta">
                                                    <# if ( data.compat && data.compat.meta ) { #>
                                                        <?php echo e(data.compat.meta); ?>

                                                        <# } #>
                                                </div>
            </div>

            <div class="settings">
                <label class="setting" data-setting="url">
                    <span class="name">URL</span>
                    <input type="text" value="<?php echo e(data.url); ?>" readonly />
                </label>
                <# var maybeReadOnly=d ata.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
                    <label class="setting" data-setting="title">
                        <span class="name">Title</span>
                        <input type="text" value="<?php echo e(data.title); ?>" <?php echo e(maybeReadOnly); ?> />
                    </label>
                    <# if ( 'audio'===d ata.type ) { #>
                        <label class="setting" data-setting="artist">
                            <span class="name">Artist</span>
                            <input type="text" value="<?php echo e(data.artist || data.meta.artist || ''); ?>" />
                        </label>
                        <label class="setting" data-setting="album">
                            <span class="name">Album</span>
                            <input type="text" value="<?php echo e(data.album || data.meta.album || ''); ?>" />
                        </label>
                        <# } #>
                            <label class="setting" data-setting="caption">
                                <span class="name">Caption</span>
                                <textarea <?php echo e(maybeReadOnly); ?>><?php echo e(data.caption); ?></textarea>
                            </label>
                            <# if ( 'image'===d ata.type ) { #>
                                <label class="setting" data-setting="alt">
                                    <span class="name">Alt Text</span>
                                    <input type="text" value="<?php echo e(data.alt); ?>" <?php echo e(maybeReadOnly); ?> />
                                </label>
                                <# } #>
                                    <label class="setting" data-setting="description">
                                        <span class="name">Description</span>
                                        <textarea <?php echo e(maybeReadOnly); ?>><?php echo e(data.description); ?></textarea>
                                    </label>
                                    <label class="setting">
                                        <span class="name">Uploaded By</span>
                                        <span class="value"><?php echo e(data.authorName); ?></span>
                                    </label>
                                    <# if ( data.uploadedToTitle ) { #>
                                        <label class="setting">
                                            <span class="name">Uploaded To</span>
                                            <# if ( data.uploadedToLink ) { #>
                                                <span class="value"><a href="<?php echo e(data.uploadedToLink); ?>"><?php echo e(data.uploadedToTitle); ?></a></span>
                                                <# } else { #>
                                                    <span class="value"><?php echo e(data.uploadedToTitle); ?></span>
                                                    <# } #>
                                        </label>
                                        <# } #>
                                            <div class="attachment-compat"></div>
            </div>

            <div class="actions">
                <a class="view-attachment" href="<?php echo e(data.link); ?>">View attachment page</a>
                <# if ( data.can.save ) { #> |
                    <a href="post.php?post=<?php echo e(data.id); ?>&action=edit">Edit more details</a>
                    <# } #>
                        <# if ( ! data.uploading && data.can.remove ) { #> |
                            <button type="button" class="button-link delete-attachment">Delete Permanently</button>
                            <# } #>
            </div>

        </div>
    </script>

    <script type="text/html" id="tmpl-attachment">
        <div class="attachment-preview js--select-attachment type-<?php echo e(data.type); ?> subtype-<?php echo e(data.subtype); ?> <?php echo e(data.orientation); ?>">
            <div class="thumbnail">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div style="width: <?php echo e(data.percent); ?>%"></div>
                    </div>
                    <# } else if ( 'image'===d ata.type && data.sizes ) { #>
                        <div class="centered">
                            <img src="<?php echo e(data.size.url); ?>" draggable="false" alt="" />
                        </div>
                        <# } else { #>
                            <div class="centered">
                                <# if ( data.image && data.image.src && data.image.src !==d ata.icon ) { #>
                                    <img src="<?php echo e(data.image.src); ?>" class="thumbnail" draggable="false" alt="" />
                                    <# } else if ( data.sizes && data.sizes.medium ) { #>
                                        <img src="<?php echo e(data.sizes.medium.url); ?>" class="thumbnail" draggable="false" alt="" />
                                        <# } else { #>
                                            <img src="<?php echo e(data.icon); ?>" class="icon" draggable="false" alt="" />
                                            <# } #>
                            </div>
                            <div class="filename">
                                <div><?php echo e(data.filename); ?></div>
                            </div>
                            <# } #>
            </div>
            <# if ( data.buttons.close ) { #>
                <button type="button" class="button-link attachment-close media-modal-icon"><span class="screen-reader-text">Remove</span></button>
                <# } #>
        </div>
        <# if ( data.buttons.check ) { #>
            <button type="button" class="check" tabindex="-1"><span class="media-modal-icon"></span><span class="screen-reader-text">Deselect</span></button>
            <# } #>
                <# var maybeReadOnly=d ata.can.save || data.allowLocalEdits ? '' : 'readonly'; if ( data.describe ) { if ( 'image'===d ata.type ) { #>
                    <input type="text" value="<?php echo e(data.caption); ?>" class="describe" data-setting="caption" placeholder="Caption this image&hellip;" <?php echo e(maybeReadOnly); ?> />
                    <# } else { #>
                        <input type="text" value="<?php echo e(data.title); ?>" class="describe" data-setting="title" <# if ( 'video'===d ata.type ) { #> placeholder="Describe this video&hellip;"
                        <# } else if ( 'audio'===d ata.type ) { #>
                            placeholder="Describe this audio file&hellip;"
                            <# } else { #>
                                placeholder="Describe this media file&hellip;"
                                <# } #> <?php echo e(maybeReadOnly); ?> />
                                    <# } } #>
    </script>

    <script type="text/html" id="tmpl-attachment-details">
        <h2>
            Attachment Details          <span class="settings-save-status">
                <span class="spinner"></span>
                <span class="saved">Saved.</span>
            </span>
        </h2>
        <div class="attachment-info">
            <div class="thumbnail thumbnail-<?php echo e(data.type); ?>">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div></div>
                    </div>
                    <# } else if ( 'image'===d ata.type && data.sizes ) { #>
                        <img src="<?php echo e(data.size.url); ?>" draggable="false" alt="" />
                        <# } else { #>
                            <img src="<?php echo e(data.icon); ?>" class="icon" draggable="false" alt="" />
                            <# } #>
            </div>
            <div class="details">
                <div class="filename"><?php echo e(data.filename); ?></div>
                <div class="uploaded"><?php echo e(data.dateFormatted); ?></div>

                <div class="file-size"><?php echo e(data.filesizeHumanReadable); ?></div>
                <# if ( 'image'===d ata.type && ! data.uploading ) { #>
                    <# if ( data.width && data.height ) { #>
                        <div class="dimensions"><?php echo e(data.width); ?> &times; <?php echo e(data.height); ?></div>
                        <# } #>

                            <# if ( data.can.save && data.sizes ) { #>
                                <a class="edit-attachment" href="<?php echo e(data.editLink); ?>&amp;image-editor" target="_blank">Edit Image</a>
                                <# } #>
                                    <# } #>

                                        <# if ( data.fileLength ) { #>
                                            <div class="file-length">Length: <?php echo e(data.fileLength); ?></div>
                                            <# } #>

                                                <# if ( ! data.uploading && data.can.remove ) { #>
                                                    <button type="button" class="button-link delete-attachment">Delete Permanently</button>
                                                    <# } #>

                                                        <div class="compat-meta">
                                                            <# if ( data.compat && data.compat.meta ) { #>
                                                                <?php echo e(data.compat.meta); ?>

                                                                <# } #>
                                                        </div>
            </div>
        </div>

        <label class="setting" data-setting="url">
            <span class="name">URL</span>
            <input type="text" value="<?php echo e(data.url); ?>" readonly />
        </label>
        <# var maybeReadOnly=d ata.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
            <label class="setting" data-setting="title">
                <span class="name">Title</span>
                <input type="text" value="<?php echo e(data.title); ?>" <?php echo e(maybeReadOnly); ?> />
            </label>
            <# if ( 'audio'===d ata.type ) { #>
                <label class="setting" data-setting="artist">
                    <span class="name">Artist</span>
                    <input type="text" value="<?php echo e(data.artist || data.meta.artist || ''); ?>" />
                </label>
                <label class="setting" data-setting="album">
                    <span class="name">Album</span>
                    <input type="text" value="<?php echo e(data.album || data.meta.album || ''); ?>" />
                </label>
                <# } #>
                    <label class="setting" data-setting="caption">
                        <span class="name">Caption</span>
                        <textarea <?php echo e(maybeReadOnly); ?>><?php echo e(data.caption); ?></textarea>
                    </label>
                    <# if ( 'image'===d ata.type ) { #>
                        <label class="setting" data-setting="alt">
                            <span class="name">Alt Text</span>
                            <input type="text" value="<?php echo e(data.alt); ?>" <?php echo e(maybeReadOnly); ?> />
                        </label>
                        <# } #>
                            <label class="setting" data-setting="description">
                                <span class="name">Description</span>
                                <textarea <?php echo e(maybeReadOnly); ?>><?php echo e(data.description); ?></textarea>
                            </label>
    </script>

    <script type="text/html" id="tmpl-media-selection">
        <div class="selection-info">
            <span class="count"></span>
            <# if ( data.editable ) { #>
                <button type="button" class="button-link edit-selection">Edit Selection</button>
                <# } #>
                    <# if ( data.clearable ) { #>
                        <button type="button" class="button-link clear-selection">Clear</button>
                        <# } #>
        </div>
        <div class="selection-view"></div>
    </script>

    <script type="text/html" id="tmpl-attachment-display-settings">
        <h2>Attachment Display Settings</h2>

        <# if ( 'image'===d ata.type ) { #>
            <label class="setting align">
                <span>Alignment</span>
                <select class="alignment" data-setting="align" <# if ( data.userSettings ) { #>
                    data-user-setting="align"
                    <# } #>>

                        <option value="left">
                            Left </option>
                        <option value="center">
                            Center </option>
                        <option value="right">
                            Right </option>
                        <option value="none" selected>
                            None </option>
                </select>
            </label>
            <# } #>

                <div class="setting">
                    <label>
                        <# if ( data.model.canEmbed ) { #>
                            <span>Embed or Link</span>
                            <# } else { #>
                                <span>Link To</span>
                                <# } #>

                                    <select class="link-to" data-setting="link" <# if ( data.userSettings && ! data.model.canEmbed ) { #>
                                        data-user-setting="urlbutton"
                                        <# } #>>

                                            <# if ( data.model.canEmbed ) { #>
                                                <option value="embed" selected>
                                                    Embed Media Player </option>
                                                <option value="file">
                                                    <# } else { #>
                                                        <option value="none" selected>
                                                            None </option>
                                                        <option value="file">
                                                            <# } #>
                                                                <# if ( data.model.canEmbed ) { #>
                                                                    Link to Media File
                                                                    <# } else { #>
                                                                        Media File
                                                                        <# } #>
                                                        </option>
                                                        <option value="post">
                                                            <# if ( data.model.canEmbed ) { #>
                                                                Link to Attachment Page
                                                                <# } else { #>
                                                                    Attachment Page
                                                                    <# } #>
                                                        </option>
                                                        <# if ( 'image'===d ata.type ) { #>
                                                            <option value="custom">
                                                                Custom URL </option>
                                                            <# } #>
                                    </select>
                    </label>
                    <input type="text" class="link-to-custom" data-setting="linkUrl" />
                </div>

                <# if ( 'undefined' !==t ypeof data.sizes ) { #>
                    <label class="setting">
                        <span>Size</span>
                        <select class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                            data-user-setting="imgsize"
                            <# } #>>
                                <# var size=d ata.sizes[ 'thumbnail']; if ( size ) { #>
                                    <option value="thumbnail">
                                        Thumbnail &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                    </option>
                                    <# } #>
                                        <# var size=d ata.sizes[ 'medium']; if ( size ) { #>
                                            <option value="medium">
                                                Medium &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                            </option>
                                            <# } #>
                                                <# var size=d ata.sizes[ 'large']; if ( size ) { #>
                                                    <option value="large">
                                                        Large &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                                    </option>
                                                    <# } #>
                                                        <# var size=d ata.sizes[ 'full']; if ( size ) { #>
                                                            <option value="full" selected='selected'>
                                                                Full Size &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                                            </option>
                                                            <# } #>
                        </select>
                    </label>
                    <# } #>
    </script>

    <script type="text/html" id="tmpl-gallery-settings">
        <h2>Gallery Settings</h2>

        <label class="setting">
            <span>Link To</span>
            <select class="link-to" data-setting="link" <# if ( data.userSettings ) { #>
                data-user-setting="urlbutton"
                <# } #>>

                    <option value="post" <# if ( ! wp.media.galleryDefaults.link || 'post'==w p.media.galleryDefaults.link ) { #>selected="selected"
                        <# } #>> Attachment Page </option>
                    <option value="file" <# if ( 'file'==w p.media.galleryDefaults.link ) { #>selected="selected"
                        <# } #>> Media File </option>
                    <option value="none" <# if ( 'none'==w p.media.galleryDefaults.link ) { #>selected="selected"
                        <# } #>> None </option>
            </select>
        </label>

        <label class="setting">
            <span>Columns</span>
            <select class="columns" name="columns" data-setting="columns">
                <option value="1" <# if ( 1==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 1 </option>
                <option value="2" <# if ( 2==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 2 </option>
                <option value="3" <# if ( 3==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 3 </option>
                <option value="4" <# if ( 4==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 4 </option>
                <option value="5" <# if ( 5==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 5 </option>
                <option value="6" <# if ( 6==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 6 </option>
                <option value="7" <# if ( 7==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 7 </option>
                <option value="8" <# if ( 8==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 8 </option>
                <option value="9" <# if ( 9==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 9 </option>
            </select>
        </label>

        <label class="setting">
            <span>Random Order</span>
            <input type="checkbox" data-setting="_orderbyRandom" />
        </label>

        <label class="setting size">
            <span>Size</span>
            <select class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                data-user-setting="imgsize"
                <# } #>
                    >
                    <option value="thumbnail">
                        Thumbnail </option>
                    <option value="medium">
                        Medium </option>
                    <option value="large">
                        Large </option>
                    <option value="full">
                        Full Size </option>
            </select>
        </label>
    </script>

    <script type="text/html" id="tmpl-playlist-settings">
        <h2>Playlist Settings</h2>

        <# var emptyModel=_ .isEmpty( data.model ), isVideo='video'===d ata.controller.get( 'library').props.get( 'type'); #>

            <label class="setting">
                <input type="checkbox" data-setting="tracklist" <# if ( emptyModel ) { #> checked="checked"
                <# } #> />
                    <# if ( isVideo ) { #>
                        <span>Show Video List</span>
                        <# } else { #>
                            <span>Show Tracklist</span>
                            <# } #>
            </label>

            <# if ( ! isVideo ) { #>
                <label class="setting">
                    <input type="checkbox" data-setting="artists" <# if ( emptyModel ) { #> checked="checked"
                    <# } #> />
                        <span>Show Artist Name in Tracklist</span>
                </label>
                <# } #>

                    <label class="setting">
                        <input type="checkbox" data-setting="images" <# if ( emptyModel ) { #> checked="checked"
                        <# } #> />
                            <span>Show Images</span>
                    </label>
    </script>

    <script type="text/html" id="tmpl-embed-link-settings">
        <label class="setting link-text">
            <span>Link Text</span>
            <input type="text" class="alignment" data-setting="linkText" />
        </label>
        <div class="embed-container" style="display: none;">
            <div class="embed-preview"></div>
        </div>
    </script>

    <script type="text/html" id="tmpl-embed-image-settings">
        <div class="thumbnail">
            <img src="<?php echo e(data.model.url); ?>" draggable="false" alt="" />
        </div>

        <label class="setting caption">
            <span>Caption</span>
            <textarea data-setting="caption" />
        </label>

        <label class="setting alt-text">
            <span>Alt Text</span>
            <input type="text" data-setting="alt" />
        </label>

        <div class="setting align">
            <span>Align</span>
            <div class="button-group button-large" data-setting="align">
                <button class="button" value="left">
                    Left </button>
                <button class="button" value="center">
                    Center </button>
                <button class="button" value="right">
                    Right </button>
                <button class="button active" value="none">
                    None </button>
            </div>
        </div>

        <div class="setting link-to">
            <span>Link To</span>
            <div class="button-group button-large" data-setting="link">
                <button class="button" value="file">
                    Image URL </button>
                <button class="button" value="custom">
                    Custom URL </button>
                <button class="button active" value="none">
                    None </button>
            </div>
            <input type="text" class="link-to-custom" data-setting="linkUrl" />
        </div>
    </script>

    <script type="text/html" id="tmpl-image-details">
        <div class="media-embed">
            <div class="embed-media-settings">
                <div class="column-image">
                    <div class="image">
                        <img src="<?php echo e(data.model.url); ?>" draggable="false" alt="" />

                        <# if ( data.attachment && window.imageEdit ) { #>
                            <div class="actions">
                                <input type="button" class="edit-attachment button" value="Edit Original" />
                                <input type="button" class="replace-attachment button" value="Replace" />
                            </div>
                            <# } #>
                    </div>
                </div>
                <div class="column-settings">
                    <label class="setting caption">
                        <span>Caption</span>
                        <textarea data-setting="caption"><?php echo e(data.model.caption); ?></textarea>
                    </label>

                    <label class="setting alt-text">
                        <span>Alternative Text</span>
                        <input type="text" data-setting="alt" value="<?php echo e(data.model.alt); ?>" />
                    </label>

                    <h2>Display Settings</h2>
                    <div class="setting align">
                        <span>Align</span>
                        <div class="button-group button-large" data-setting="align">
                            <button class="button" value="left">
                                Left </button>
                            <button class="button" value="center">
                                Center </button>
                            <button class="button" value="right">
                                Right </button>
                            <button class="button active" value="none">
                                None </button>
                        </div>
                    </div>

                    <# if ( data.attachment ) { #>
                        <# if ( 'undefined' !==t ypeof data.attachment.sizes ) { #>
                            <label class="setting size">
                                <span>Size</span>
                                <select class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                                    data-user-setting="imgsize"
                                    <# } #>>
                                        <# var size=d ata.sizes[ 'thumbnail']; if ( size ) { #>
                                            <option value="thumbnail">
                                                Thumbnail &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                            </option>
                                            <# } #>
                                                <# var size=d ata.sizes[ 'medium']; if ( size ) { #>
                                                    <option value="medium">
                                                        Medium &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                                    </option>
                                                    <# } #>
                                                        <# var size=d ata.sizes[ 'large']; if ( size ) { #>
                                                            <option value="large">
                                                                Large &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                                            </option>
                                                            <# } #>
                                                                <# var size=d ata.sizes[ 'full']; if ( size ) { #>
                                                                    <option value="full">
                                                                        Full Size &ndash; <?php echo e(size.width); ?> &times; <?php echo e(size.height); ?>

                                                                    </option>
                                                                    <# } #>
                                                                        <option value="custom">
                                                                            Custom Size </option>
                                </select>
                            </label>
                            <# } #>
                                <div class="custom-size<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>">
                                    <label><span>Width <small>(px)</small></span>
                                        <input data-setting="customWidth" type="number" step="1" value="<?php echo e(data.model.customWidth); ?>" />
                                    </label><span class="sep">&times;</span>
                                    <label><span>Height <small>(px)</small></span>
                                        <input data-setting="customHeight" type="number" step="1" value="<?php echo e(data.model.customHeight); ?>" />
                                    </label>
                                </div>
                                <# } #>

                                    <div class="setting link-to">
                                        <span>Link To</span>
                                        <select data-setting="link">
                                            <# if ( data.attachment ) { #>
                                                <option value="file">
                                                    Media File </option>
                                                <option value="post">
                                                    Attachment Page </option>
                                                <# } else { #>
                                                    <option value="file">
                                                        Image URL </option>
                                                    <# } #>
                                                        <option value="custom">
                                                            Custom URL </option>
                                                        <option value="none">
                                                            None </option>
                                        </select>
                                        <input type="text" class="link-to-custom" data-setting="linkUrl" />
                                    </div>
                                    <div class="advanced-section">
                                        <h2><button type="button" class="button-link advanced-toggle">Advanced Options</button></h2>
                                        <div class="advanced-settings hidden">
                                            <div class="advanced-image">
                                                <label class="setting title-text">
                                                    <span>Image Title Attribute</span>
                                                    <input type="text" data-setting="title" value="<?php echo e(data.model.title); ?>" />
                                                </label>
                                                <label class="setting extra-classes">
                                                    <span>Image CSS Class</span>
                                                    <input type="text" data-setting="extraClasses" value="<?php echo e(data.model.extraClasses); ?>" />
                                                </label>
                                            </div>
                                            <div class="advanced-link">
                                                <div class="setting link-target">
                                                    <label>
                                                        <input type="checkbox" data-setting="linkTargetBlank" value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"
                                                        <# } #>>Open link in a new tab</label>
                                                </div>
                                                <label class="setting link-rel">
                                                    <span>Link Rel</span>
                                                    <input type="text" data-setting="linkRel" value="<?php echo e(data.model.linkClassName); ?>" />
                                                </label>
                                                <label class="setting link-class-name">
                                                    <span>Link CSS Class</span>
                                                    <input type="text" data-setting="linkClassName" value="<?php echo e(data.model.linkClassName); ?>" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/html" id="tmpl-image-editor">
        <div id="media-head-<?php echo e(data.id); ?>"></div>
        <div id="image-editor-<?php echo e(data.id); ?>"></div>
    </script>

    <script type="text/html" id="tmpl-audio-details">
        <# var ext, html5types={ mp3: wp.media.view.settings.embedMimes.mp3, ogg: wp.media.view.settings.embedMimes.ogg }; #>

            <div class="media-embed media-embed-details">
                <div class="embed-media-settings embed-audio-settings">
                    <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="<?php echo e(_.isUndefined( data.model.width ) ? 400 : data.model.width); ?>" preload="<?php echo e(_.isUndefined( data.model.preload ) ? 'none' : data.model.preload); ?>" <# if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) { #> autoplay
                        <# } if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) { #> loop
                            <# } #>
                                >
                                <# if ( ! _.isEmpty( data.model.src ) ) { #>
                                    <source src="<?php echo e(data.model.src); ?>" type="<?php echo e(wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ]); ?>" />
                                    <# } #>

                                        <# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
                                            <source src="<?php echo e(data.model.mp3); ?>" type="<?php echo e(wp.media.view.settings.embedMimes[ 'mp3' ]); ?>" />
                                            <# } #>
                                                <# if ( ! _.isEmpty( data.model.ogg ) ) { #>
                                                    <source src="<?php echo e(data.model.ogg); ?>" type="<?php echo e(wp.media.view.settings.embedMimes[ 'ogg' ]); ?>" />
                                                    <# } #>
                                                        <# if ( ! _.isEmpty( data.model.m4a ) ) { #>
                                                            <source src="<?php echo e(data.model.m4a); ?>" type="<?php echo e(wp.media.view.settings.embedMimes[ 'm4a' ]); ?>" />
                                                            <# } #>
                                                                <# if ( ! _.isEmpty( data.model.wav ) ) { #>
                                                                    <source src="<?php echo e(data.model.wav); ?>" type="<?php echo e(wp.media.view.settings.embedMimes[ 'wav' ]); ?>" />
                                                                    <# } #>
                    </audio>

                    <# if ( ! _.isEmpty( data.model.src ) ) { ext=d ata.model.src.split( '.').pop(); if ( html5types[ ext ] ) { delete html5types[ ext ]; } #>
                        <label class="setting">
                            <span>SRC</span>
                            <input type="text" disabled="disabled" data-setting="src" value="<?php echo e(data.model.src); ?>" />
                            <button type="button" class="button-link remove-setting">Remove audio source</button>
                        </label>
                        <# } #>
                            <# if ( ! _.isEmpty( data.model.mp3 ) ) { if ( ! _.isUndefined( html5types.mp3 ) ) { delete html5types.mp3; } #>
                                <label class="setting">
                                    <span>MP3</span>
                                    <input type="text" disabled="disabled" data-setting="mp3" value="<?php echo e(data.model.mp3); ?>" />
                                    <button type="button" class="button-link remove-setting">Remove audio source</button>
                                </label>
                                <# } #>
                                    <# if ( ! _.isEmpty( data.model.ogg ) ) { if ( ! _.isUndefined( html5types.ogg ) ) { delete html5types.ogg; } #>
                                        <label class="setting">
                                            <span>OGG</span>
                                            <input type="text" disabled="disabled" data-setting="ogg" value="<?php echo e(data.model.ogg); ?>" />
                                            <button type="button" class="button-link remove-setting">Remove audio source</button>
                                        </label>
                                        <# } #>
                                            <# if ( ! _.isEmpty( data.model.m4a ) ) { if ( ! _.isUndefined( html5types.m4a ) ) { delete html5types.m4a; } #>
                                                <label class="setting">
                                                    <span>M4A</span>
                                                    <input type="text" disabled="disabled" data-setting="m4a" value="<?php echo e(data.model.m4a); ?>" />
                                                    <button type="button" class="button-link remove-setting">Remove audio source</button>
                                                </label>
                                                <# } #>
                                                    <# if ( ! _.isEmpty( data.model.wav ) ) { if ( ! _.isUndefined( html5types.wav ) ) { delete html5types.wav; } #>
                                                        <label class="setting">
                                                            <span>WAV</span>
                                                            <input type="text" disabled="disabled" data-setting="wav" value="<?php echo e(data.model.wav); ?>" />
                                                            <button type="button" class="button-link remove-setting">Remove audio source</button>
                                                        </label>
                                                        <# } #>

                                                            <# if ( ! _.isEmpty( html5types ) ) { #>
                                                                <div class="setting">
                                                                    <span>Add alternate sources for maximum HTML5 playback:</span>
                                                                    <div class="button-large">
                                                                        <# _.each( html5types, function (mime, type) { #>
                                                                            <button class="button add-media-source" data-mime="<?php echo e(mime); ?>"><?php echo e(type); ?></button>
                                                                            <# } ) #>
                                                                    </div>
                                                                </div>
                                                                <# } #>

                                                                    <div class="setting preload">
                                                                        <span>Preload</span>
                                                                        <div class="button-group button-large" data-setting="preload">
                                                                            <button class="button" value="auto">Auto</button>
                                                                            <button class="button" value="metadata">Metadata</button>
                                                                            <button class="button active" value="none">None</button>
                                                                        </div>
                                                                    </div>

                                                                    <label class="setting checkbox-setting autoplay">
                                                                        <input type="checkbox" data-setting="autoplay" />
                                                                        <span>Autoplay</span>
                                                                    </label>

                                                                    <label class="setting checkbox-setting">
                                                                        <input type="checkbox" data-setting="loop" />
                                                                        <span>Loop</span>
                                                                    </label>
                </div>
            </div>
    </script>

    <script type="text/html" id="tmpl-video-details">
        <# var ext, html5types={ mp4: wp.media.view.settings.embedMimes.mp4, ogv: wp.media.view.settings.embedMimes.ogv, webm: wp.media.view.settings.embedMimes.webm }; #>

            <div class="media-embed media-embed-details">
                <div class="embed-media-settings embed-video-settings">
                    <div class="wp-video-holder">
                        <# var w=! data.model.width || data.model.width> 640 ? 640 : data.model.width, h = ! data.model.height ? 360 : data.model.height; if ( data.model.width && w !== data.model.width ) { h = Math.ceil( ( h * w ) / data.model.width ); } #>

                            <# var w_rule='' , classes=[ ], w, h, settings=w p.media.view.settings, isYouTube=i sVimeo=f alse; if ( ! _.isEmpty( data.model.src ) ) { isYouTube=d ata.model.src.match(/youtube|youtu\.be/); isVimeo=- 1 !==d ata.model.src.indexOf( 'vimeo'); } if ( settings.contentWidth && data.model.width>= settings.contentWidth ) { w = settings.contentWidth; } else { w = data.model.width; } if ( w !== data.model.width ) { h = Math.ceil( ( data.model.height * w ) / data.model.width ); } else { h = data.model.height; } if ( w ) { w_rule = 'width: ' + w + 'px; '; } if ( isYouTube ) { classes.push( 'youtube-video' ); } if ( isVimeo ) { classes.push( 'vimeo-video' ); } #>
                                <div style="<?php echo e(w_rule); ?>" class="wp-video">
                                    <video controls class="wp-video-shortcode <?php echo e(classes.join( ' ' )); ?>" <# if ( w ) { #>width="<?php echo e(w); ?>"
                                        <# } #>
                                            <# if ( h ) { #>height="<?php echo e(h); ?>"
                                                <# } #>
                                                    <# if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) { #> poster="<?php echo e(data.model.poster); ?>"
                                                        <# } #>
                                                            preload="<?php echo e(_.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload); ?>"
                                                            <# if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) { #> autoplay
                                                                <# } if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) { #> loop
                                                                    <# } #>
                                                                        >
                                                                        <# if ( ! _.isEmpty( data.model.src ) ) { if ( isYouTube ) { #>
                                                                            <source src="<?php echo e(data.model.src); ?>" type="video/youtube" />
                                                                            <# } else if ( isVimeo ) { #>
                                                                                <source src="<?php echo e(data.model.src); ?>" type="video/vimeo" />
                                                                                <# } else { #>
                                                                                    <source src="<?php echo e(data.model.src); ?>" type="<?php echo e(settings.embedMimes[ data.model.src.split('.').pop() ]); ?>" />
                                                                                    <# } } #>

                                                                                        <# if ( data.model.mp4 ) { #>
                                                                                            <source src="<?php echo e(data.model.mp4); ?>" type="<?php echo e(settings.embedMimes[ 'mp4' ]); ?>" />
                                                                                            <# } #>
                                                                                                <# if ( data.model.m4v ) { #>
                                                                                                    <source src="<?php echo e(data.model.m4v); ?>" type="<?php echo e(settings.embedMimes[ 'm4v' ]); ?>" />
                                                                                                    <# } #>
                                                                                                        <# if ( data.model.webm ) { #>
                                                                                                            <source src="<?php echo e(data.model.webm); ?>" type="<?php echo e(settings.embedMimes[ 'webm' ]); ?>" />
                                                                                                            <# } #>
                                                                                                                <# if ( data.model.ogv ) { #>
                                                                                                                    <source src="<?php echo e(data.model.ogv); ?>" type="<?php echo e(settings.embedMimes[ 'ogv' ]); ?>" />
                                                                                                                    <# } #>
                                                                                                                        <# if ( data.model.flv ) { #>
                                                                                                                            <source src="<?php echo e(data.model.flv); ?>" type="<?php echo e(settings.embedMimes[ 'flv' ]); ?>" />
                                                                                                                            <# } #>
                                                                                                                                <?php echo e(data.model.content); ?>

                                    </video>
                                </div>

                                <# if ( ! _.isEmpty( data.model.src ) ) { ext=d ata.model.src.split( '.').pop(); if ( html5types[ ext ] ) { delete html5types[ ext ]; } #>
                                    <label class="setting">
                                        <span>SRC</span>
                                        <input type="text" disabled="disabled" data-setting="src" value="<?php echo e(data.model.src); ?>" />
                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                    </label>
                                    <# } #>
                                        <# if ( ! _.isEmpty( data.model.mp4 ) ) { if ( ! _.isUndefined( html5types.mp4 ) ) { delete html5types.mp4; } #>
                                            <label class="setting">
                                                <span>MP4</span>
                                                <input type="text" disabled="disabled" data-setting="mp4" value="<?php echo e(data.model.mp4); ?>" />
                                                <button type="button" class="button-link remove-setting">Remove video source</button>
                                            </label>
                                            <# } #>
                                                <# if ( ! _.isEmpty( data.model.m4v ) ) { if ( ! _.isUndefined( html5types.m4v ) ) { delete html5types.m4v; } #>
                                                    <label class="setting">
                                                        <span>M4V</span>
                                                        <input type="text" disabled="disabled" data-setting="m4v" value="<?php echo e(data.model.m4v); ?>" />
                                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                                    </label>
                                                    <# } #>
                                                        <# if ( ! _.isEmpty( data.model.webm ) ) { if ( ! _.isUndefined( html5types.webm ) ) { delete html5types.webm; } #>
                                                            <label class="setting">
                                                                <span>WEBM</span>
                                                                <input type="text" disabled="disabled" data-setting="webm" value="<?php echo e(data.model.webm); ?>" />
                                                                <button type="button" class="button-link remove-setting">Remove video source</button>
                                                            </label>
                                                            <# } #>
                                                                <# if ( ! _.isEmpty( data.model.ogv ) ) { if ( ! _.isUndefined( html5types.ogv ) ) { delete html5types.ogv; } #>
                                                                    <label class="setting">
                                                                        <span>OGV</span>
                                                                        <input type="text" disabled="disabled" data-setting="ogv" value="<?php echo e(data.model.ogv); ?>" />
                                                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                                                    </label>
                                                                    <# } #>
                                                                        <# if ( ! _.isEmpty( data.model.flv ) ) { if ( ! _.isUndefined( html5types.flv ) ) { delete html5types.flv; } #>
                                                                            <label class="setting">
                                                                                <span>FLV</span>
                                                                                <input type="text" disabled="disabled" data-setting="flv" value="<?php echo e(data.model.flv); ?>" />
                                                                                <button type="button" class="button-link remove-setting">Remove video source</button>
                                                                            </label>
                                                                            <# } #>
                    </div>

                    <# if ( ! _.isEmpty( html5types ) ) { #>
                        <div class="setting">
                            <span>Add alternate sources for maximum HTML5 playback:</span>
                            <div class="button-large">
                                <# _.each( html5types, function (mime, type) { #>
                                    <button class="button add-media-source" data-mime="<?php echo e(mime); ?>"><?php echo e(type); ?></button>
                                    <# } ) #>
                            </div>
                        </div>
                        <# } #>

                            <# if ( ! _.isEmpty( data.model.poster ) ) { #>
                                <label class="setting">
                                    <span>Poster Image</span>
                                    <input type="text" disabled="disabled" data-setting="poster" value="<?php echo e(data.model.poster); ?>" />
                                    <button type="button" class="button-link remove-setting">Remove poster image</button>
                                </label>
                                <# } #>
                                    <div class="setting preload">
                                        <span>Preload</span>
                                        <div class="button-group button-large" data-setting="preload">
                                            <button class="button" value="auto">Auto</button>
                                            <button class="button" value="metadata">Metadata</button>
                                            <button class="button active" value="none">None</button>
                                        </div>
                                    </div>

                                    <label class="setting checkbox-setting autoplay">
                                        <input type="checkbox" data-setting="autoplay" />
                                        <span>Autoplay</span>
                                    </label>

                                    <label class="setting checkbox-setting">
                                        <input type="checkbox" data-setting="loop" />
                                        <span>Loop</span>
                                    </label>

                                    <label class="setting" data-setting="content">
                                        <span>Tracks (subtitles, captions, descriptions, chapters, or metadata)</span>
                                        <# var content='' ; if ( ! _.isEmpty( data.model.content ) ) { var tracks=j Query( data.model.content ).filter( 'track' ); _.each( tracks.toArray(), function (track) { content +=t rack.outerHTML; #>
                                            <p>
                                                <input class="content-track" type="text" value="<?php echo e(track.outerHTML); ?>" />
                                                <button type="button" class="button-link remove-setting remove-track">Remove video track</button>
                                            </p>
                                            <# } ); #>
                                                <# } else { #>
                                                    <em>There are no associated subtitles.</em>
                                                    <# } #>
                                                        <textarea class="hidden content-setting"><?php echo e(content); ?></textarea>
                                    </label>
                </div>
            </div>
    </script>

    <script type="text/html" id="tmpl-editor-gallery">
        <# if ( data.attachments.length ) { #>
            <div class="gallery gallery-columns-<?php echo e(data.columns); ?>">
                <# _.each( data.attachments, function( attachment, index ) { #>
                    <dl class="gallery-item">
                        <dt class="gallery-icon">
                            <# if ( attachment.thumbnail ) { #>
                                <img src="<?php echo e(attachment.thumbnail.url); ?>" width="<?php echo e(attachment.thumbnail.width); ?>" height="<?php echo e(attachment.thumbnail.height); ?>" alt="" />
                            <# } else { #>
                                <img src="<?php echo e(attachment.url); ?>" alt="" />
                            <# } #>
                        </dt>
                        <# if ( attachment.caption ) { #>
                            <dd class="wp-caption-text gallery-caption">
                                <?php echo e(data.verifyHTML( attachment.caption )); ?>

                            </dd>
                            <# } #>
                    </dl>
                    <# if ( index % data.columns===d ata.columns - 1 ) { #>
                        <br style="clear: both;">
                        <# } #>
                            <# } ); #>
            </div>
            <# } else { #>
                <div class="wpview-error">
                    <div class="dashicons dashicons-format-gallery"></div>
                    <p>No items found.</p>
                </div>
                <# } #>
    </script>

    <script type="text/html" id="tmpl-crop-content">
        <img class="crop-image" src="<?php echo e(data.url); ?>" alt="Image crop area preview. Requires mouse interaction.">
        <div class="upload-errors"></div>
    </script>

    <script type="text/html" id="tmpl-site-icon-preview">
        <h2>Preview</h2>
        <strong aria-hidden="true">As a browser icon</strong>
        <div class="favicon-preview">
            <img src="http://utl.chieferp.com/wp-admin/images/browser.png" class="browser-preview" width="182" height="" alt="" />

            <div class="favicon">
                <img id="preview-favicon" src="<?php echo e(data.url); ?>" alt="Preview as a browser icon" />
            </div>
            <span class="browser-title" aria-hidden="true">Universal Technologies</span>
        </div>

        <strong aria-hidden="true">As an app icon</strong>
        <div class="app-icon-preview">
            <img id="preview-app-icon" src="<?php echo e(data.url); ?>" alt="Preview as an app icon" />
        </div>
    </script>

    <script type="text/javascript">
        list_args = {
            "class": "WP_Post_Comments_List_Table",
            "screen": {
                "id": "page",
                "base": "post"
            }
        };
    </script>
    <div id="wp-auth-check-wrap" class="hidden">
        <div id="wp-auth-check-bg"></div>
        <div id="wp-auth-check">
            <button type="button" class="wp-auth-check-close button-link"><span class="screen-reader-text">Close dialog</span></button>
            <div id="wp-auth-check-form" class="loading" data-src="http://utl.chieferp.com/wp-login.php?interim-login=1"></div>
            <div class="wp-auth-fallback">
                <p><b class="wp-auth-fallback-expired" tabindex="0">Session expired</b></p>
                <p><a href="http://utl.chieferp.com/wp-login.php" target="_blank">Please log in again.</a> The login page will open in a new window. After logging in you can close it and return to this page.</p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        /* <![CDATA[ */
        var inlinePopupL10n = {
            "nonce": "14eaa8ac3c"
        };
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var codemirror_options = {
            "theme": "default"
        };
        /* ]]> */
    </script>

    <script type="text/javascript">
        /* <![CDATA[ */
        var commonL10n = {
            "warnDelete": "You are about to permanently delete these items from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.",
            "dismiss": "Dismiss this notice.",
            "collapseMenu": "Collapse Main menu",
            "expandMenu": "Expand Main menu"
        };
        var heartbeatSettings = {
            "nonce": "5260bf8b7f"
        };
        var autosaveL10n = {
            "autosaveInterval": "60",
            "blog_id": "1"
        };
        var wpAjax = {
            "noPerm": "Sorry, you are not allowed to do that.",
            "broken": "An unidentified error has occurred."
        };
        var postBoxL10n = {
            "postBoxEmptyString": "Drag boxes here"
        };
        var uiAutocompleteL10n = {
            "noResults": "No results found.",
            "oneResult": "1 result found. Use up and down arrow keys to navigate.",
            "manyResults": "%d results found. Use up and down arrow keys to navigate.",
            "itemSelected": "Item selected."
        };
        var tagsSuggestL10n = {
            "tagDelimiter": ",",
            "removeTerm": "Remove term:",
            "termSelected": "Term selected.",
            "termAdded": "Term added.",
            "termRemoved": "Term removed."
        };
        var wordCountL10n = {
            "type": "words",
            "shortcodes": ["wp_caption", "caption", "gallery", "playlist", "audio", "video", "embed", "contact-form-7", "contact-form", "maxmenu", "maxmegamenu", "sns_shortcode", "hoops", "huge_it_maps"]
        };
        var postL10n = {
            "ok": "OK",
            "cancel": "Cancel",
            "publishOn": "Publish on:",
            "publishOnFuture": "Schedule for:",
            "publishOnPast": "Published on:",
            "dateFormat": "%1$s %2$s, %3$s @ %4$s:%5$s",
            "showcomm": "Show more comments",
            "endcomm": "No more comments found.",
            "publish": "Publish",
            "schedule": "Schedule",
            "update": "Update",
            "savePending": "Save as Pending",
            "saveDraft": "Save Draft",
            "private": "Private",
            "public": "Public",
            "publicSticky": "Public, Sticky",
            "password": "Password Protected",
            "privatelyPublished": "Privately Published",
            "published": "Published",
            "saveAlert": "The changes you made will be lost if you navigate away from this page.",
            "savingText": "Saving Draft\u2026",
            "permalinkSaved": "Permalink saved"
        };
        var thickboxL10n = {
            "next": "Next >",
            "prev": "< Prev",
            "image": "Image",
            "of": "of",
            "close": "Close",
            "noiframes": "This feature requires inline frames. You have iframes disabled or your browser does not support them.",
            "loadingAnimation": "http:\/\/utl.chieferp.com\/wp-includes\/js\/thickbox\/loadingAnimation.gif"
        };
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        var _wpMediaModelsL10n = {
            "settings": {
                "ajaxurl": "\/wp-admin\/admin-ajax.php",
                "post": {
                    "id": 0
                }
            }
        };
        var pluploadL10n = {
            "queue_limit_exceeded": "You have attempted to queue too many files.",
            "file_exceeds_size_limit": "%s exceeds the maximum upload size for this site.",
            "zero_byte_file": "This file is empty. Please try another.",
            "invalid_filetype": "Sorry, this file type is not permitted for security reasons.",
            "not_an_image": "This file is not an image. Please try another.",
            "image_memory_exceeded": "Memory exceeded. Please try another smaller file.",
            "image_dimensions_exceeded": "This is larger than the maximum size. Please try another.",
            "default_error": "An error occurred in the upload. Please try again later.",
            "missing_upload_url": "There was a configuration error. Please contact the server administrator.",
            "upload_limit_exceeded": "You may only upload 1 file.",
            "http_error": "HTTP error.",
            "upload_failed": "Upload failed.",
            "big_upload_failed": "Please try uploading this file with the %1$sbrowser uploader%2$s.",
            "big_upload_queued": "%s exceeds the maximum upload size for the multi-file uploader when used in your browser.",
            "io_error": "IO error.",
            "security_error": "Security error.",
            "file_cancelled": "File canceled.",
            "upload_stopped": "Upload stopped.",
            "dismiss": "Dismiss",
            "crunching": "Crunching\u2026",
            "deleted": "moved to the trash.",
            "error_uploading": "\u201c%s\u201d has failed to upload."
        };
        var _wpPluploadSettings = {
            "defaults": {
                "runtimes": "html5,flash,silverlight,html4",
                "file_data_name": "async-upload",
                "url": "\/wp-admin\/async-upload.php",
                "flash_swf_url": "http:\/\/utl.chieferp.com\/wp-includes\/js\/plupload\/plupload.flash.swf",
                "silverlight_xap_url": "http:\/\/utl.chieferp.com\/wp-includes\/js\/plupload\/plupload.silverlight.xap",
                "filters": {
                    "max_file_size": "8388608b",
                    "mime_types": [{
                        "extensions": "jpg,jpeg,jpe,gif,png,bmp,tiff,tif,ico,asf,asx,wmv,wmx,wm,avi,divx,flv,mov,qt,mpeg,mpg,mpe,mp4,m4v,ogv,webm,mkv,3gp,3gpp,3g2,3gp2,txt,asc,c,cc,h,srt,csv,tsv,ics,rtx,css,htm,html,vtt,dfxp,mp3,m4a,m4b,ra,ram,wav,ogg,oga,mid,midi,wma,wax,mka,rtf,js,pdf,class,tar,zip,gz,gzip,rar,7z,psd,xcf,doc,pot,pps,ppt,wri,xla,xls,xlt,xlw,mdb,mpp,docx,docm,dotx,dotm,xlsx,xlsm,xlsb,xltx,xltm,xlam,pptx,pptm,ppsx,ppsm,potx,potm,ppam,sldx,sldm,onetoc,onetoc2,onetmp,onepkg,oxps,xps,odt,odp,ods,odg,odc,odb,odf,wp,wpd,key,numbers,pages"
                    }]
                },
                "multipart_params": {
                    "action": "upload-attachment",
                    "_wpnonce": "ca6d6255cb"
                }
            },
            "browser": {
                "mobile": false,
                "supported": true
            },
            "limitExceeded": false
        };
        var mejsL10n = {
            "language": "en-US",
            "strings": {
                "Close": "Close",
                "Fullscreen": "Fullscreen",
                "Turn off Fullscreen": "Turn off Fullscreen",
                "Go Fullscreen": "Go Fullscreen",
                "Download File": "Download File",
                "Download Video": "Download Video",
                "Play": "Play",
                "Pause": "Pause",
                "Captions\/Subtitles": "Captions\/Subtitles",
                "None": "None",
                "Time Slider": "Time Slider",
                "Skip back %1 seconds": "Skip back %1 seconds",
                "Video Player": "Video Player",
                "Audio Player": "Audio Player",
                "Volume Slider": "Volume Slider",
                "Mute Toggle": "Mute Toggle",
                "Unmute": "Unmute",
                "Mute": "Mute",
                "Use Up\/Down Arrow keys to increase or decrease volume.": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."
            }
        };
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/"
        };
        var _wpMediaViewsL10n = {
            "url": "URL",
            "addMedia": "Add Media",
            "search": "Search",
            "select": "Select",
            "cancel": "Cancel",
            "update": "Update",
            "replace": "Replace",
            "remove": "Remove",
            "back": "Back",
            "selected": "%d selected",
            "dragInfo": "Drag and drop to reorder media files.",
            "uploadFilesTitle": "Upload Files",
            "uploadImagesTitle": "Upload Images",
            "mediaLibraryTitle": "Media Library",
            "insertMediaTitle": "Insert Media",
            "createNewGallery": "Create a new gallery",
            "createNewPlaylist": "Create a new playlist",
            "createNewVideoPlaylist": "Create a new video playlist",
            "returnToLibrary": "\u2190 Return to library",
            "allMediaItems": "All media items",
            "allDates": "All dates",
            "noItemsFound": "No items found.",
            "insertIntoPost": "Insert into page",
            "unattached": "Unattached",
            "trash": "Trash",
            "uploadedToThisPost": "Uploaded to this page",
            "warnDelete": "You are about to permanently delete this item from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.",
            "warnBulkDelete": "You are about to permanently delete these items from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.",
            "warnBulkTrash": "You are about to trash these items.\n  'Cancel' to stop, 'OK' to delete.",
            "bulkSelect": "Bulk Select",
            "cancelSelection": "Cancel Selection",
            "trashSelected": "Trash Selected",
            "untrashSelected": "Untrash Selected",
            "deleteSelected": "Delete Selected",
            "deletePermanently": "Delete Permanently",
            "apply": "Apply",
            "filterByDate": "Filter by date",
            "filterByType": "Filter by type",
            "searchMediaLabel": "Search Media",
            "searchMediaPlaceholder": "Search media items...",
            "noMedia": "No media files found.",
            "attachmentDetails": "Attachment Details",
            "insertFromUrlTitle": "Insert from URL",
            "setFeaturedImageTitle": "Featured Image",
            "setFeaturedImage": "Set featured image",
            "createGalleryTitle": "Create Gallery",
            "editGalleryTitle": "Edit Gallery",
            "cancelGalleryTitle": "\u2190 Cancel Gallery",
            "insertGallery": "Insert gallery",
            "updateGallery": "Update gallery",
            "addToGallery": "Add to gallery",
            "addToGalleryTitle": "Add to Gallery",
            "reverseOrder": "Reverse order",
            "imageDetailsTitle": "Image Details",
            "imageReplaceTitle": "Replace Image",
            "imageDetailsCancel": "Cancel Edit",
            "editImage": "Edit Image",
            "chooseImage": "Choose Image",
            "selectAndCrop": "Select and Crop",
            "skipCropping": "Skip Cropping",
            "cropImage": "Crop Image",
            "cropYourImage": "Crop your image",
            "cropping": "Cropping\u2026",
            "suggestedDimensions": "Suggested image dimensions: %1$s by %2$s pixels.",
            "cropError": "There has been an error cropping your image.",
            "audioDetailsTitle": "Audio Details",
            "audioReplaceTitle": "Replace Audio",
            "audioAddSourceTitle": "Add Audio Source",
            "audioDetailsCancel": "Cancel Edit",
            "videoDetailsTitle": "Video Details",
            "videoReplaceTitle": "Replace Video",
            "videoAddSourceTitle": "Add Video Source",
            "videoDetailsCancel": "Cancel Edit",
            "videoSelectPosterImageTitle": "Select Poster Image",
            "videoAddTrackTitle": "Add Subtitles",
            "playlistDragInfo": "Drag and drop to reorder tracks.",
            "createPlaylistTitle": "Create Audio Playlist",
            "editPlaylistTitle": "Edit Audio Playlist",
            "cancelPlaylistTitle": "\u2190 Cancel Audio Playlist",
            "insertPlaylist": "Insert audio playlist",
            "updatePlaylist": "Update audio playlist",
            "addToPlaylist": "Add to audio playlist",
            "addToPlaylistTitle": "Add to Audio Playlist",
            "videoPlaylistDragInfo": "Drag and drop to reorder videos.",
            "createVideoPlaylistTitle": "Create Video Playlist",
            "editVideoPlaylistTitle": "Edit Video Playlist",
            "cancelVideoPlaylistTitle": "\u2190 Cancel Video Playlist",
            "insertVideoPlaylist": "Insert video playlist",
            "updateVideoPlaylist": "Update video playlist",
            "addToVideoPlaylist": "Add to video playlist",
            "addToVideoPlaylistTitle": "Add to Video Playlist",
            "settings": {
                "tabs": [],
                "tabUrl": "http:\/\/utl.chieferp.com\/wp-admin\/media-upload.php?chromeless=1",
                "mimeTypes": {
                    "image": "Images",
                    "audio": "Audio",
                    "video": "Video"
                },
                "captions": true,
                "nonce": {
                    "sendToEditor": "093a7690ff",
                    "wpRestApi": "490fb9868c"
                },
                "post": {
                    "id": 475,
                    "nonce": "46ad261b06",
                    "featuredImageId": -1
                },
                "defaultProps": {
                    "link": "none",
                    "align": "",
                    "size": ""
                },
                "attachmentCounts": {
                    "audio": 1,
                    "video": 1
                },
                "oEmbedProxyUrl": "http:\/\/utl.chieferp.com\/wp-json\/oembed\/1.0\/proxy",
                "embedExts": ["mp3", "ogg", "m4a", "wav", "mp4", "m4v", "webm", "ogv", "flv"],
                "embedMimes": {
                    "mp3": "audio\/mpeg",
                    "ogg": "audio\/ogg",
                    "m4a": "audio\/mpeg",
                    "wav": "audio\/wav",
                    "mp4": "video\/mp4",
                    "m4v": "video\/mp4",
                    "webm": "video\/webm",
                    "ogv": "video\/ogg",
                    "flv": "video\/x-flv"
                },
                "contentWidth": 600,
                "months": [{
                    "year": "2017",
                    "month": "10",
                    "text": "October 2017"
                }],
                "mediaTrash": 0
            }
        };
        var mceViewL10n = {
            "shortcodes": ["wp_caption", "caption", "gallery", "playlist", "audio", "video", "embed", "contact-form-7", "contact-form", "maxmenu", "maxmegamenu", "sns_shortcode", "hoops", "huge_it_maps", "product", "product_page", "product_category", "product_categories", "add_to_cart", "add_to_cart_url", "products", "recent_products", "sale_products", "best_selling_products", "top_rated_products", "featured_products", "product_attribute", "related_products", "shop_messages", "woocommerce_order_tracking", "woocommerce_cart", "woocommerce_checkout", "woocommerce_my_account", "woocommerce_messages"]
        };
        var imageEditL10n = {
            "error": "Could not load the preview image. Please reload the page and try again."
        };
        var authcheckL10n = {
            "beforeunload": "Your session has expired. You can log in again from this page or go to the login page.",
            "interval": "180"
        };
        var quicktagsL10n = {
            "closeAllOpenTags": "Close all open tags",
            "closeTags": "close tags",
            "enterURL": "Enter the URL",
            "enterImageURL": "Enter the URL of the image",
            "enterImageDescription": "Enter a description of the image",
            "textdirection": "text direction",
            "toggleTextdirection": "Toggle Editor Text Direction",
            "dfw": "Distraction-free writing mode",
            "strong": "Bold",
            "strongClose": "Close bold tag",
            "em": "Italic",
            "emClose": "Close italic tag",
            "link": "Insert link",
            "blockquote": "Blockquote",
            "blockquoteClose": "Close blockquote tag",
            "del": "Deleted text (strikethrough)",
            "delClose": "Close deleted text tag",
            "ins": "Inserted text",
            "insClose": "Close inserted text tag",
            "image": "Insert image",
            "ul": "Bulleted list",
            "ulClose": "Close bulleted list tag",
            "ol": "Numbered list",
            "olClose": "Close numbered list tag",
            "li": "List item",
            "liClose": "Close list item tag",
            "code": "Code",
            "codeClose": "Close code tag",
            "more": "Insert Read More tag"
        };
        var wpLinkL10n = {
            "title": "Insert\/edit link",
            "update": "Update",
            "save": "Add Link",
            "noTitle": "(no title)",
            "noMatchesFound": "No results found.",
            "linkSelected": "Link selected.",
            "linkInserted": "Link inserted."
        }; /* ]]> */
    </script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=hoverIntent,common,admin-bar,heartbeat,autosave,suggest,wp-ajax-response,jquery-color,wp-lists,jquery-ui-sortable,postbox,jquery&amp;load%5B%5D=-ui-position,jquery-ui-menu,wp-a11y,jquery-ui-autocomplete,tags-suggest,tags-box,underscore,word-count,post,editor-expand,thickb&amp;load%5B%5D=ox,shortcode,backbone,wp-util,wp-backbone,media-models,wp-plupload,mediaelement,wp-mediaelement,media-views,media-editor,media-a&amp;load%5B%5D=udiovideo,mce-view,imgareaselect,image-edit,svg-painter,wp-auth-check,editor,jquery-ui-tabs,quicktags,wplink,media-upload,wp-emb&amp;load%5B%5D=ed&amp;ver=4.8.2"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-content/plugins/google-maps/assets/js/simple-slider.js?ver=4.8.2"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-content/plugins/google-maps/assets/js/admin/inline-popup.js?ver=4.8.2"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-content/plugins/google-maps/assets/js/jquery.timepicker.min.js?ver=4.8.2"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-content/plugins/scripts-n-styles/vendor/chosen/chosen.jquery.min.js?ver=1.0.0"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-content/plugins/scripts-n-styles/js/meta-box.js?ver=3.4.3"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-content/plugins/custom-permalinks/frontend/js/script-form.min.js?ver=4.8.2"></script>

    <script type="text/javascript">
        tinyMCEPreInit = {
            baseURL: "http://utl.chieferp.com/wp-includes/js/tinymce",
            suffix: ".min",
            dragDropUpload: true,
            mceInit: {
                'content': {
                    theme: "modern",
                    skin: "lightgray",
                    language: "en",
                    formats: {
                        alignleft: [{
                            selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li",
                            styles: {
                                textAlign: "left"
                            }
                        }, {
                            selector: "img,table,dl.wp-caption",
                            classes: "alignleft"
                        }],
                        aligncenter: [{
                            selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li",
                            styles: {
                                textAlign: "center"
                            }
                        }, {
                            selector: "img,table,dl.wp-caption",
                            classes: "aligncenter"
                        }],
                        alignright: [{
                            selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li",
                            styles: {
                                textAlign: "right"
                            }
                        }, {
                            selector: "img,table,dl.wp-caption",
                            classes: "alignright"
                        }],
                        strikethrough: {
                            inline: "del"
                        }
                    },
                    relative_urls: false,
                    remove_script_host: false,
                    convert_urls: false,
                    browser_spellcheck: true,
                    fix_list_elements: true,
                    entities: "38,amp,60,lt,62,gt",
                    entity_encoding: "raw",
                    keep_styles: false,
                    cache_suffix: "wp-mce-4603-20170530",
                    resize: false,
                    menubar: false,
                    branding: false,
                    preview_styles: "font-family font-size font-weight font-style text-decoration text-transform",
                    end_container_on_empty_block: true,
                    wpeditimage_html5_captions: true,
                    wp_lang_attr: "en-US",
                    wp_shortcut_labels: {
                        "Heading 1": "access1",
                        "Heading 2": "access2",
                        "Heading 3": "access3",
                        "Heading 4": "access4",
                        "Heading 5": "access5",
                        "Heading 6": "access6",
                        "Paragraph": "access7",
                        "Blockquote": "accessQ",
                        "Underline": "metaU",
                        "Strikethrough": "accessD",
                        "Bold": "metaB",
                        "Italic": "metaI",
                        "Code": "accessX",
                        "Align center": "accessC",
                        "Align right": "accessR",
                        "Align left": "accessL",
                        "Justify": "accessJ",
                        "Cut": "metaX",
                        "Copy": "metaC",
                        "Paste": "metaV",
                        "Select all": "metaA",
                        "Undo": "metaZ",
                        "Redo": "metaY",
                        "Bullet list": "accessU",
                        "Numbered list": "accessO",
                        "Insert\/edit image": "accessM",
                        "Remove link": "accessS",
                        "Toolbar Toggle": "accessZ",
                        "Insert Read More tag": "accessT",
                        "Insert Page Break tag": "accessP",
                        "Distraction-free writing mode": "accessW",
                        "Keyboard Shortcuts": "accessH"
                    },
                    content_css: "http://utl.chieferp.com/wp-includes/css/dashicons.min.css?ver=4.8.2,http://utl.chieferp.com/wp-includes/js/tinymce/skins/wordpress/wp-content.css?ver=4.8.2,http://utl.chieferp.com/wp-admin/admin-ajax.php?_wpnonce=d47a5b2eab&post_id=475&action=sns_tinymce_styles",
                    plugins: "charmap,colorpicker,hr,lists,media,paste,tabfocus,textcolor,fullscreen,wordpress,wpautoresize,wpeditimage,wpemoji,wpgallery,wplink,wpdialogs,wptextpattern,wpview",
                    selector: "#content",
                    wpautop: true,
                    indent: false,
                    toolbar1: "formatselect,bold,italic,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink,wp_more,spellchecker,dfw,wp_adv",
                    toolbar2: "strikethrough,hr,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help",
                    toolbar3: "",
                    toolbar4: "",
                    tabfocus_elements: "content-html,save-post",
                    body_class: "content post-type-page post-status-auto-draft page-template-default locale-en-us",
                    wp_autoresize_on: true,
                    add_unload_trigger: false
                }
            },
            qtInit: {
                'content': {
                    id: "content",
                    buttons: "strong,em,link,block,del,ins,img,ul,ol,li,code,more,close,dfw"
                },
                'replycontent': {
                    id: "replycontent",
                    buttons: "strong,em,link,block,del,ins,img,ul,ol,li,code,close"
                }
            },
            ref: {
                plugins: "charmap,colorpicker,hr,lists,media,paste,tabfocus,textcolor,fullscreen,wordpress,wpautoresize,wpeditimage,wpemoji,wpgallery,wplink,wpdialogs,wptextpattern,wpview",
                theme: "modern",
                language: "en"
            },
            load_ext: function(url, lang) {
                var sl = tinymce.ScriptLoader;
                sl.markDone(url + '/langs/' + lang + '.js');
                sl.markDone(url + '/langs/' + lang + '_dlg.js');
            }
        };
    </script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-includes/js/tinymce/tinymce.min.js?ver=4603-20170530"></script>
    <script type="text/javascript" src="http://utl.chieferp.com/wp-includes/js/tinymce/plugins/compat3x/plugin.min.js?ver=4603-20170530"></script>
    <script type="text/javascript">
        tinymce.addI18n('en', {
            "Ok": "OK",
            "Bullet list": "Bulleted list",
            "Insert\/Edit code sample": "Insert\/edit code sample",
            "Url": "URL",
            "Spellcheck": "Check Spelling",
            "Row properties": "Table row properties",
            "Cell properties": "Table cell properties",
            "Paste row before": "Paste table row before",
            "Paste row after": "Paste table row after",
            "Cut row": "Cut table row",
            "Copy row": "Copy table row",
            "Merge cells": "Merge table cells",
            "Split cell": "Split table cell",
            "Paste is now in plain text mode. Contents will now be pasted as plain text until you toggle this option off.": "Paste is now in plain text mode. Contents will now be pasted as plain text until you toggle this option off.\n\nIf you\u2019re looking to paste rich content from Microsoft Word, try turning this option off. The editor will clean up text pasted from Word automatically.",
            "Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help": "Rich Text Area. Press Alt-Shift-H for help.",
            "You have unsaved changes are you sure you want to navigate away?": "The changes you made will be lost if you navigate away from this page.",
            "Your browser doesn't support direct access to the clipboard. Please use the Ctrl+X\/C\/V keyboard shortcuts instead.": "Your browser does not support direct access to the clipboard. Please use keyboard shortcuts or your browser\u2019s edit menu instead.",
            "Edit ": "Edit"
        });
        tinymce.ScriptLoader.markDone('http://utl.chieferp.com/wp-includes/js/tinymce/langs/en.js');
    </script>
    <script type="text/javascript">
        (function() {
            var init, id, $wrap;

            if (typeof tinymce !== 'undefined') {
                if (tinymce.Env.ie && tinymce.Env.ie < 11) {
                    tinymce.$('.wp-editor-wrap ').removeClass('tmce-active').addClass('html-active');
                    return;
                }

                for (id in tinyMCEPreInit.mceInit) {
                    init = tinyMCEPreInit.mceInit[id];
                    $wrap = tinymce.$('#wp-' + id + '-wrap');

                    if (($wrap.hasClass('tmce-active') || !tinyMCEPreInit.qtInit.hasOwnProperty(id)) && !init.wp_skip_init) {
                        tinymce.init(init);

                        if (!window.wpActiveEditor) {
                            window.wpActiveEditor = id;
                        }
                    }
                }
            }

            if (typeof quicktags !== 'undefined') {
                for (id in tinyMCEPreInit.qtInit) {
                    quicktags(tinyMCEPreInit.qtInit[id]);

                    if (!window.wpActiveEditor) {
                        window.wpActiveEditor = id;
                    }
                }
            }
        }());
    </script>

<?php $__env->stopSection(); ?>
		



    
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>