<?php
/* Smarty version 3.1.33, created on 2019-06-28 14:45:58
  from '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/auro2/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1628260a35b4_24381126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790cbe6f77e9cade4a3a6d25691c78f01ac583f8' => 
    array (
      0 => '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/auro2/views/default.master.tpl',
      1 => 1561732559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1628260a35b4_24381126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.t.php','function'=>'smarty_function_t',),2=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.link.php','function'=>'smarty_function_link',),3=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.logo.php','function'=>'smarty_function_logo',),4=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.categories_link.php','function'=>'smarty_function_categories_link',),5=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.discussions_link.php','function'=>'smarty_function_discussions_link',),6=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),7=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.module.php','function'=>'smarty_function_module',),8=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.profile_link.php','function'=>'smarty_function_profile_link',),9=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.inbox_link.php','function'=>'smarty_function_inbox_link',),10=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.bookmarks_link.php','function'=>'smarty_function_bookmarks_link',),11=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.dashboard_link.php','function'=>'smarty_function_dashboard_link',),12=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.signinout_link.php','function'=>'smarty_function_signinout_link',),13=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.signin_link.php','function'=>'smarty_function_signin_link',),14=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),15=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.searchbox.php','function'=>'smarty_function_searchbox',),16=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),17=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
" class="sticky-footer-html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo smarty_function_asset(array('name'=>"Head"),$_smarty_tpl);?>

  </head>
  <body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
 sticky-footer-body">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?php echo smarty_function_t(array('c'=>"Toggle navigation"),$_smarty_tpl);?>
</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo smarty_function_link(array('path'=>"home"),$_smarty_tpl);?>
"><?php echo smarty_function_logo(array(),$_smarty_tpl);?>
</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php echo smarty_function_categories_link(array(),$_smarty_tpl);?>

            <?php echo smarty_function_discussions_link(array(),$_smarty_tpl);?>

            <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

          </ul>
		 
          <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
            <ul class="nav navbar-nav navbar-right hidden-xs">
              <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

            </ul>
            <ul class="nav navbar-nav navbar-right visible-xs">
              <?php echo smarty_function_profile_link(array(),$_smarty_tpl);?>

              <?php echo smarty_function_inbox_link(array(),$_smarty_tpl);?>

              <?php echo smarty_function_bookmarks_link(array(),$_smarty_tpl);?>

              <?php echo smarty_function_dashboard_link(array(),$_smarty_tpl);?>

              <?php echo smarty_function_signinout_link(array(),$_smarty_tpl);?>

            </ul>
          <?php } else { ?>
            <ul class="nav navbar-nav navbar-right">
              <?php echo smarty_function_signin_link(array(),$_smarty_tpl);?>

            </ul>
          <?php }?>
        </div>
      </div>
    </nav>

    <section class="container">
      <div class="row">
        <main class="page-content" role="main">
          
		   <?php if (!InSection(array("CategoryList","CategoryDiscussionList","DiscussionList","RegisterPage"))) {?>
           <?php echo smarty_function_breadcrumbs(array(),$_smarty_tpl);?>

		    <?php }?>
          
          <?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>

        </main>

        <aside class="page-sidebar" role="complementary">
		 <?php if (InSection(array("CategoryList","CategoryDiscussionList","DiscussionList"))) {?>
            <div class="well search-form"><?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>
</div>
          <?php }?>
          <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

        </aside>
      </div>
    </section>

    <footer class="page-footer sticky-footer">
      <div class="container">
        <div class="clearfix">
          <p class="pull-left"><?php echo smarty_function_t(array('c'=>"Copyright"),$_smarty_tpl);?>
 &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <p>
         <p class="pull-right"><a href="http://auronews.in/">Auronews.in</a></p>
        </div>
        <?php echo smarty_function_asset(array('name'=>"Foot"),$_smarty_tpl);?>

      </div>
    </footer>

    <?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>



  </body>
</html>
<?php }
}
