<?php /* Smarty version 3.1.23, created on 2015-05-15 15:38:03
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ci3/application/modules/welcome/views/smartytest.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4007239075556522365ad33_75888748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85fb5c56c92d902e6c7ed68b8aac30851bafec2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ci3/application/modules/welcome/views/smartytest.tpl',
      1 => 1427923120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4007239075556522365ad33_75888748',
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_55565223691886_47359811',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55565223691886_47359811')) {
function content_55565223691886_47359811 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '4007239075556522365ad33_75888748';
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

</body>
</html><?php }
}
?>