<?php
/* Smarty version 3.1.33, created on 2019-06-28 12:41:01
  from '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/plugins/rich-editor/views/rich-editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d160add602aa3_41138153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4600422a6b39ea1f99ddc1858297011fb88887bb' => 
    array (
      0 => '/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/plugins/rich-editor/views/rich-editor.tpl',
      1 => 1561725172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d160add602aa3_41138153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/data/web/virtuals/223948/virtual/www/domains/obcevkruhu.cz/library/SmartyPlugins/function.t.php','function'=>'smarty_function_t',),));
?>
<div class="richEditor isDisabled" aria-label="<?php echo smarty_function_t(array('c'=>"Type your message"),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorID'];?>
" aria-describedby="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" role="textbox" aria-multiline="true">
    <p id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" class="sr-only">
        <?php echo smarty_function_t(array('c'=>"richEditor.description.title"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.paragraphMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.inlineMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.embed"),$_smarty_tpl);?>

    </p>
    <div class="richEditor-frame InputBox">
        <div class="richEditor-textWrap">
            <div class="ql-editor richEditor-text userContent isDisabled" data-gramm="false" contenteditable="false" disabled="disabled" data-placeholder="Create a new post..." tabindex="0"></div>
        </div>
    </div>
</div>
<?php }
}
