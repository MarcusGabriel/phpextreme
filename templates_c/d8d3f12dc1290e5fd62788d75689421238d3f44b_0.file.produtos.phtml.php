<?php
/* Smarty version 3.1.31, created on 2017-01-01 20:18:46
  from "/var/www/html/phpextreme/templates/admin/produtos.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58699c6640ec78_24562035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d3f12dc1290e5fd62788d75689421238d3f44b' => 
    array (
      0 => '/var/www/html/phpextreme/templates/admin/produtos.phtml',
      1 => 1483316321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58699c6640ec78_24562035 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p><center><h3> Produtos </h3><a href="?edit=0">Adicionar Produto</center></a></p>

<?php if ($_smarty_tpl->tpl_vars['edit']->value >= 0) {?>
	<form method="post" enctype="multipart/form-data"> 
		<label>
			Categoria: 
					<select name="data[categoria_id]">
						<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categorias']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['edit']->value != 0) {
if ($_smarty_tpl->tpl_vars['produto']->value['categoria_id'] == $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>selected="selected"<?php }
}?>>
								<?php echo $_smarty_tpl->tpl_vars['categorias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>

							</option>
						<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>								
					</select>
		</label>
		<label>
			Nome: <input type="text" name="data[nome]" <?php if ($_smarty_tpl->tpl_vars['edit']->value != 0) {?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
" <?php }?>>	
		</label>
		<label>
			Autor: <input type="text" name="data[autor]" <?php if ($_smarty_tpl->tpl_vars['edit']->value != 0) {?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['autor'];?>
" <?php }?>>	
		</label>
		<label>
			Editora: <input type="text" name="data[editora]" <?php if ($_smarty_tpl->tpl_vars['edit']->value != 0) {?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['editora'];?>
" <?php }?>>	
		</label>
		<label>
			Valor: <input type="text" name="data[valor]" <?php if ($_smarty_tpl->tpl_vars['edit']->value != 0) {?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['valor'];?>
" <?php }?>>	
		</label>
		<label>
			Imagem: <input type="file" name="file">	
		</label>
		<label>
			Descrição: 
				<textarea rows="4" name="data[descricao]" disable><?php if ($_smarty_tpl->tpl_vars['edit']->value != 0) {
echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];
}?></textarea>
		</label>
		<label>
			<input type="submit" name="salvar" value="Salvar">	
		</label>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
">				
	</form>

	<div class="clearfix"></div>
<?php }?>


<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Autor</th>
			<th>Editora</th>
			<th>Valor</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['produtos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['autor'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['editora'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['valor'];?>
</td>
				<td>
					<a href="?edit=<?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><img src="images/icons/edit.png"></a> &nbsp;
					<a href="?delete=<?php echo $_smarty_tpl->tpl_vars['produtos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><img src="images/icons/delete.png"></a>				
				</td>
			</tr>
		<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
	</tbody>


</table>



<?php }
}
