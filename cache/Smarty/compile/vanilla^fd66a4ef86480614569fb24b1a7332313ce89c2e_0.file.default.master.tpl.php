<?php
/* Smarty version 3.1.33, created on 2019-06-28 14:00:00
  from '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/sanmyaku/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d161d6036aca0_88083345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd66a4ef86480614569fb24b1a7332313ce89c2e' => 
    array (
      0 => '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/sanmyaku/views/default.master.tpl',
      1 => 1561728071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d161d6036aca0_88083345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.logo.php','function'=>'smarty_function_logo',),2=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.link.php','function'=>'smarty_function_link',),3=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/sanmyaku/SmartyPlugins/function.register_link.php','function'=>'smarty_function_register_link',),4=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.categories_link.php','function'=>'smarty_function_categories_link',),5=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.discussions_link.php','function'=>'smarty_function_discussions_link',),6=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.activity_link.php','function'=>'smarty_function_activity_link',),7=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),8=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/sanmyaku/SmartyPlugins/function.theme_partial.php','function'=>'smarty_function_theme_partial',),9=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.profile_link.php','function'=>'smarty_function_profile_link',),10=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.inbox_link.php','function'=>'smarty_function_inbox_link',),11=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.bookmarks_link.php','function'=>'smarty_function_bookmarks_link',),12=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.drafts_link.php','function'=>'smarty_function_drafts_link',),13=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.dashboard_link.php','function'=>'smarty_function_dashboard_link',),14=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.signinout_link.php','function'=>'smarty_function_signinout_link',),15=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.searchbox.php','function'=>'smarty_function_searchbox',),16=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/sanmyaku/SmartyPlugins/function.foundation_breadcrumbs.php','function'=>'smarty_function_foundation_breadcrumbs',),17=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),18=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=10" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic|Josefin+Sans:400,700,300' rel='stylesheet' type='text/css'>
  <?php echo smarty_function_asset(array('name'=>"Head"),$_smarty_tpl);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">

  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
      <nav class="tab-bar">

        <section class="left-small left-off-canvas-toggle">
          <img class="hamburger" src="/themes/sanmyaku/design/images/open-menu.svg" alt="">
        </section>

        <section class="middle tab-bar-section TitleBar">
          <h1 class="title">
            <div class="logo"><?php echo smarty_function_logo(array(),$_smarty_tpl);?>
</div>
          </h1>
        </section>


        <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
        <div class="right-menu-signedin">
          <a href="#" class="right-off-canvas-toggle">
            <span class="UserName hide-for-small-only"><?php echo $_smarty_tpl->tpl_vars['User']->value['Name'];?>
</span>
            <img class="ProfilePhoto" src="<?php echo $_smarty_tpl->tpl_vars['User']->value['Photo'];?>
" alt="User Icon">
          </a>

          <section class="right-small right-off-canvas-toggle">
            <img class="hamburger" src="/themes/sanmyaku/design/images/open-menu.svg" alt="">
          </section>
        </div>

        <?php } else { ?>

        <div class="right-menu-signedout">
          <?php echo smarty_function_link(array('class'=>"header-login",'path'=>"signin",'text'=>"Login",'target'=>"current"),$_smarty_tpl);?>

          <?php echo smarty_function_register_link(array(),$_smarty_tpl);?>


          <section class="right-small">
            <img class="avatar-placeholder" src="/themes/sanmyaku/design/images/avatar-placeholder.svg" alt="">
          </section>
        </div>
        <?php }?>

      </nav>

      <aside class="left-off-canvas-menu">
        <div class="menu-top-bar">
          <div class="menu-top-bar-title">Main Menu</div>
          <div class="menu-top-bar-close">
            <span class="exit-off-canvas">
              <svg version="1.1" id="close-x1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="-296 388 18 18" enable-background="new -296 388 18 18" xml:space="preserve">
              <g id="cross">
              	<polygon points="-278,389.1 -279,388 -287,396 -295,388 -296,389.1 -288,397 -296,404.9 -295,406 -287,398 -279,406 -278,404.9
              		-286,397 	"/>
              </g>
              </svg>
            </span>
          </div>
        </div>

        <ul class="off-canvas-list">
          <?php if (!$_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
            <li class="mobile-login"><?php echo smarty_function_link(array('path'=>"signin",'text'=>"Login",'target'=>"current"),$_smarty_tpl);?>
</li>
            <li class="mobile-login"><?php echo smarty_function_register_link(array(),$_smarty_tpl);?>
</li>
          <?php }?>
          <li><a href="<?php echo smarty_function_link(array('path'=>"home"),$_smarty_tpl);?>
">Forum Home</a></li>
          <?php echo smarty_function_categories_link(array(),$_smarty_tpl);?>

          <?php echo smarty_function_discussions_link(array(),$_smarty_tpl);?>

          <?php echo smarty_function_activity_link(array(),$_smarty_tpl);?>

          <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

        </ul>

        <hr class="menu-seperator" />

        <?php echo smarty_function_asset(array('name'=>"ForumStats"),$_smarty_tpl);?>


        <hr class="menu-seperator" />

        <?php echo smarty_function_theme_partial(array('name'=>"social"),$_smarty_tpl);?>

      </aside>


      <aside class="right-off-canvas-menu">
        <div class="menu-top-bar">
          <div class="menu-top-bar-title">User Menu</div>
          <div class="menu-top-bar-close">
            <span class="exit-off-canvas">
              <svg version="1.1" id="close-x2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="-296 388 18 18" enable-background="new -296 388 18 18" xml:space="preserve">
                <g id="cross">
                	<polygon points="-278,389.1 -279,388 -287,396 -295,388 -296,389.1 -288,397 -296,404.9 -295,406 -287,398 -279,406 -278,404.9
                		-286,397 	"/>
                </g>
              </svg>
            </span>
          </div>
        </div>

        <ul class="off-canvas-list">
          <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
          <?php echo smarty_function_profile_link(array('text'=>"Profile"),$_smarty_tpl);?>

          <?php echo smarty_function_inbox_link(array('text'=>"Inbox"),$_smarty_tpl);?>

          <?php echo smarty_function_bookmarks_link(array('text'=>"Bookmarks"),$_smarty_tpl);?>

          <?php echo smarty_function_drafts_link(array('text'=>"Drafts"),$_smarty_tpl);?>

          <?php echo smarty_function_dashboard_link(array(),$_smarty_tpl);?>

          <?php echo smarty_function_signinout_link(array(),$_smarty_tpl);?>

          <?php }?>
        </ul>
      </aside>



      <section class="sub-header hidden-xs">
        <div class="big-search">
          <?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>

        </div>
      </section>

      <div class="breadcrumb-container">
        <?php echo smarty_function_foundation_breadcrumbs(array(),$_smarty_tpl);?>

      </div>



      <main class="row">

        <div class="page-content">
          <div class="is-content">
            <?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>

          </div>
          <div class="is-content">
            <?php echo smarty_function_asset(array('name'=>"OnlineNow"),$_smarty_tpl);?>

          </div>
        </div>


        <div class="page-sidebar">
          <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

          <div class="is-content">
            <?php echo smarty_function_theme_partial(array('name'=>"ads"),$_smarty_tpl);?>

          </div>
        </div>
      </main>

      <div class="global-footer">
        <div class="footer-links">
          <ul>
            <li><a href="<?php echo smarty_function_link(array('path'=>"home"),$_smarty_tpl);?>
">Forum Home</a></li>
            <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?> <?php echo smarty_function_profile_link(array('text'=>"Profile"),$_smarty_tpl);?>
 <?php }?>
            <?php echo smarty_function_discussions_link(array(),$_smarty_tpl);?>

            <?php echo smarty_function_activity_link(array(),$_smarty_tpl);?>

          </ul>
        </div>

        <div class="footer-main">
          <?php echo smarty_function_theme_partial(array('name'=>"footer"),$_smarty_tpl);?>


          <a href="http://vanillaforums.org">
            <div class="footer-logo"></div>
          </a>

          <?php echo smarty_function_asset(array('name'=>"Foot"),$_smarty_tpl);?>

        </div>

        <div class="footer-copyright">
            &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 Copyright. CodeSequence, All Rights Reserved.

            <?php echo smarty_function_theme_partial(array('name'=>"social"),$_smarty_tpl);?>

        </div>
      </div>

      <a class="exit-off-canvas"></a>

    </div>
  </div>

  <?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>


  <!-- Initialize Foundation -->
  <?php echo '<script'; ?>
>jQuery(document).foundation();<?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
