<?php if (!defined('THINK_PATH')) exit();?><div id="footer">
    <div class="flybox1">
       <div class="leftbox1">
           <h2>关注职协</h2>
           <p>获得更多动态</p>
           <p>微博<a href="http://weibo.com/zhbitscda" target="_blank">@北理工珠海学院职协</a></font></p>
        </div>
    </div>
    <div class="flybox2">
       <h2>友情链接:</h2>
    </div>
    <div class="flybox3">
    <!-- left -->
    <div class="leftfriend">
    <?php if(is_array($friends)): foreach($friends as $k=>$v): if($k < 5): ?><div class="friend"><a href="<?php echo ($v["more"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></div>
        <?php else: ?>
            <?php if($k == 5): ?></div>
                <div class="rightfriend"><?php endif; ?>
            <div class="friend"><a href="<?php echo ($v["more"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></div><?php endif; endforeach; endif; ?>
    </div>
    
    <!-- right 
    <div class="rightfriend">
    <div class="friend"><img src="" alt="" width="28" height="28"/><a href="#">暨南大学大学生职业发展协会</a></div>
    <div class="friend"><img src="" alt="" width="28" height="28"/><a href="#">中山大学大学生职业发展协会</a></div> 
    <div class="friend"><img src="" alt="" width="28" height="28"/><a href="#">广东工业大学大学生职业发展协会</a></div> 
    <div class="friend"><img src="" alt="" width="28" height="28"/><a href="#">北师珠大学生职业发展协会</a></div> 
    <div class="friend"><img src="" alt="" width="28" height="28"/><a href="#">征集中...</a></div> 
    </div>-->
    </div>
    <br class="clear" />
</div>