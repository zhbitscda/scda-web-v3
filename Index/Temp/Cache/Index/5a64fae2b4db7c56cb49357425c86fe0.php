<?php if (!defined('THINK_PATH')) exit();?><div id="right">
   <div class="right_blackgrand">
      <div class="right_title">栏目简介</div>
   </div>
   <div id="sidebar">
      <!-- inframe_1 -->
      <div class="inframe_1">
         <div class="introduccon">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($intro["introduce"]); ?></p>
         </div>      
      </div>

      <!-- inframe_2 -->
      <div class="inframe_2">
         <div class="place">点击排行榜</div>
         <!--排行榜列表-->
         <?php if(is_array($hot)): foreach($hot as $k=>$v): ?><div class="list_2">
               <div class="num"><?php echo ($k+1); ?></div>
               <a href="<?php echo U(Group_name.'/Index/Assess/show');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
            </div><?php endforeach; endif; ?>                      
      </div>  

   </div>
</div>