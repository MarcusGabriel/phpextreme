<?php
/* Smarty version 3.1.31, created on 2017-01-01 13:07:58
  from "/var/www/html/phpextreme/templates/admin/categoria.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5869376e4fb6f3_77356995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f60da8b1c82898eecce297d0d14472bd5f11d087' => 
    array (
      0 => '/var/www/html/phpextreme/templates/admin/categoria.phtml',
      1 => 1483290477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5869376e4fb6f3_77356995 (Smarty_Internal_Template $_smarty_tpl) {
?>


<p><center><h3> Categoria </h3><a href="?edit=0">Adicionar nova Categoria</center></a></p>

<?php if ($_smarty_tpl->tpl_vars['edit']->value >= 0) {?>
	<form method="post">
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Ação</th>
				</tr>
			</thead>	
			<tbody>
				<tr>
					<?php if ($_smarty_tpl->tpl_vars['edit']->value == 0) {?>
						<td><input type="text" name="data[nome]" value="" autocomplete="off"></td>
					<?php } else { ?>	
						<td><input type="text" name="data[nome]" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nome'];?>
"></td>
					<?php }?>
					<td>
						<input type="submit" value="Salvar" name="submit">
						<!--<a href="./admin_categorias.php"><button class="btn btn-sm btn-alert" >Cancelar</button></a>-->
					</td>

				</tr>
			</tbody>
		</table>	
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
">
	</form>
	<div id="clearfix"></div>
<?php }?>


<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Ação</th>
		</tr>
	</thead>
	
	<tbody>
		<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categorias']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
</td>
			<td>
				<a href="?edit=<?php echo $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><img src="images/icons/edit.png"></a> &nbsp;
				<a href="?delete=<?php echo $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><img src="images/icons/delete.png"></a>
			</td>
		</tr>
		<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>		
	</tbody>

</table>
<?php }
}
