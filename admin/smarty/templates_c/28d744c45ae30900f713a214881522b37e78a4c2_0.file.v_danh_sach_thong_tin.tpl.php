<?php
/* Smarty version 3.1.30, created on 2023-04-19 15:56:51
  from "D:\Desktop\xampp\htdocs\shophoa\admin\views\thong_tin\v_danh_sach_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_643ff3238c1362_82206510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d744c45ae30900f713a214881522b37e78a4c2' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\admin\\views\\thong_tin\\v_danh_sach_thong_tin.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/thong_tin/v_modal_sua_thong_tin.tpl' => 1,
  ),
),false)) {
function content_643ff3238c1362_82206510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên Thông Tin</th>
      <th>Đường dẫn</th>
      <th>Thời gian</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_thong_tin']->value, 'thong_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_tin']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
">
      <td width="175px" style="max-width: 175px; max-height: 200px;"><img src="../public/images/banner/<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->TieuDe;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->ThoiGian;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" >Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
)" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/thong_tin/v_modal_sua_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
