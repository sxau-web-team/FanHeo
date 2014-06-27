<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="/fanheo/Public/Common/css/base.css" />
        <link rel="stylesheet" href="/fanheo/Public/Admin/css/channel.css" />
        <script type="text/javascript" src="/fanheo/Public/Common/js/jquery-1.8.3.js"></script>
         <script type="text/javascript" src="/fanheo/Public/Admin/js/order.js"></script>
         <script type="text/javascript">
             var mod = "<?php echo U(mod_remark);?>";
         </script>
    </head>
    <body>
        <table class="channel_list">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>商品数量</td>
                    <td>价钱总计</td>
                    <td>订单备注</td>
                    <td>订单状态</td>

                </tr>
            </thead>
        <tbody>
        <?php if(is_array($mes)): foreach($mes as $key=>$n): ?><tr>
                   <td><?php echo ($n["id"]); ?></td>
                   <td ><?php echo ($n["quantity"]); ?></td>
                   <td><?php echo ($n["subtotal"]); ?>
                         <input type="hidden" value="<?php echo ($n["id"]); ?>" />
                   </td>
                   <td class="remark">
               <?php if($n['remark']): echo ($n["remark"]); ?>
                   <?php else: ?>
                     请输入备注<?php endif; ?>
                   </td>
                   <td>
                   <?php if($n['status'] == '待发货'): ?><a class="btn btn-success">                          
                           待发货				
                       </a>
                       <?php elseif($n['status'] == '待付款'): ?>
                           <a class="btn btn-danger">                           
                             待付款						
                       </a>
                           <?php elseif($n['status'] == '已发货'): ?>
                               <a  class="btn btn-info">                           
                               已发货
                               </a><?php endif; ?>
                       
                   </td>
               
               </tr><?php endforeach; endif; ?>
         </tbody>
        </table>
        <div class="page">
          <?php echo ($page); ?>
        </div>
    </body>
</html>