<?php
/* Smarty version 3.1.30, created on 2023-04-20 03:14:41
  from "D:\Desktop\xampp\htdocs\shophoa\admin\views\v_favicon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_644092013983c3_10181290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4bbb06b3e7885823300211e9bc58931712e42d5' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\admin\\views\\v_favicon.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644092013983c3_10181290 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="hinh" style="margin-bottom: 10px">Favicon Website:</label>
        <div class="row">
            <div class="col col-4">
                <div class="input-file-container">  
                    <input class="input-file" type="file" name="hinh" id="file"/>
                    <label tabindex="0" for="my-file" class="input-file-trigger">Tải ảnh mới</label>
                    <p class="file-return"></p>
                </div>
            </div>
            <div class="col col-3">
                <img id="hienThi" class="img-fluid" src="../public/images/<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
"/>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Cập nhật</button>
    </form>
</div>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
>
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Update Success!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "favicon.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
