<?php
/* Smarty version 3.1.33, created on 2019-06-28 12:40:26
  from '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/theme-boilerplate/views/partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d160aba1f5807_94514975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f9f404066798c3a7d5bd51982fd8806cffe9e4' => 
    array (
      0 => '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/themes/theme-boilerplate/views/partials/header.tpl',
      1 => 1561725174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/hamburger.html' => 1,
  ),
),false)) {
function content_5d160aba1f5807_94514975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.home_link.php','function'=>'smarty_function_home_link',),1=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.logo.php','function'=>'smarty_function_logo',),2=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.mobile_logo.php','function'=>'smarty_function_mobile_logo',),3=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.categories_link.php','function'=>'smarty_function_categories_link',),4=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.discussions_link.php','function'=>'smarty_function_discussions_link',),5=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),6=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.module.php','function'=>'smarty_function_module',),7=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.activity_link.php','function'=>'smarty_function_activity_link',),));
$_smarty_tpl->_assignInScope('linkFormat', "<div class='Navigation-linkContainer'>
        <a href='%url' class='Navigation-link %class'>
            %text
        </a>
    </div>");?>

<header id="MainHeader" class="Header">
    <div class="Container">
        <div class="row">
            <div class="Hamburger">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/hamburger.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <a href="<?php echo smarty_function_home_link(array('format'=>"%url"),$_smarty_tpl);?>
" class="Header-logo">
                <?php echo smarty_function_logo(array(),$_smarty_tpl);?>

            </a>
            <a href="<?php echo smarty_function_home_link(array('format'=>"%url"),$_smarty_tpl);?>
" class="Header-logo mobile">
                <?php echo smarty_function_mobile_logo(array(),$_smarty_tpl);?>

            </a>
            <nav class="Header-desktopNav">
                <?php echo smarty_function_categories_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

                <?php echo smarty_function_discussions_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

                <?php echo smarty_function_custom_menu(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

            </nav>
            <div class="Header-flexSpacer"></div>
            <div class="Header-right">
                <div class="MeBox-header">
                    <?php echo smarty_function_module(array('name'=>"MeModule",'CssClass'=>"FlyoutRight"),$_smarty_tpl);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
                    <button class="mobileMeBox-button">
                        <?php echo smarty_function_module(array('name'=>"UserPhotoModule"),$_smarty_tpl);?>

                    </button>
                <?php }?>
            </div>
        </div>
    </div>
    <nav class="Navigation needsInitialization js-nav">
        <div class="Container">
            <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
                <div class="Navigation-row NewDiscussion">
                    <div class="NewDiscussion mobile">
                        <?php echo smarty_function_module(array('name'=>"NewDiscussionModule"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php } else { ?>
                <div class="Navigation-row">
                    <div class="SignIn mobile">
                        <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php }?>
            <?php echo smarty_function_categories_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

            <?php echo smarty_function_discussions_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

            <?php echo smarty_function_activity_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

            <?php echo smarty_function_custom_menu(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        </div>
    </nav>
    <nav class="mobileMebox js-mobileMebox needsInitialization">
        <div class="Container">
            <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

            <button class="mobileMebox-buttonClose Close">
                <span>×</span>
            </button>
        </div>
    </nav>
</header>
<?php }
}
