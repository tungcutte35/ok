<?php
/* Smarty version 3.1.30, created on 2023-04-21 16:19:12
  from "D:\Desktop\xampp\htdocs\shophoa\views\chi_tiet_hoa\v_thong_tin_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64429b60e5b248_25761034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47dff57e1ecb303f16ee8527f4c789ba1a53e58' => 
    array (
      0 => 'D:\\Desktop\\xampp\\htdocs\\shophoa\\views\\chi_tiet_hoa\\v_thong_tin_hoa.tpl',
      1 => 1682086621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64429b60e5b248_25761034 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="short-description hidden-xs">
    <div class="clearfix magic-category">
        <div class="clearfix block-title-tabs">
            <ul class="magictabs">
                <li class="item active loaded">
                    <span class="title" data-toggle="tab" href="#menu1">Thông tin chi tiết</span>
                </li>
                <li class="item" >
                    <span class="title" data-toggle="tab" href="#menu2">Thông tin kỹ thuật</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
            <p><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</p>
        </div>
        <div id="menu2" class="tab-pane fade in">
            <div class="box-collateral box-additional active">
                <table class="data-table" id="product-attribute-specs-table">
                    <colgroup>
                        <col width="25%"><col>
                    </colgroup>
                    <tbody>
                        <tr class="first odd">
                            <th class="label">Vật liệu hoa</th>
                            <td class="data"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</td>
                        </tr>
                        <tr class="even">
                            <th class="label">Loại hoa</th>
                            <td class="data"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php }
}
