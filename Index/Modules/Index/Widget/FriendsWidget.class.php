<?php

class FriendsWidget extends Widget{

    public function render($data){
        //友情连接
        $data['friends'] = M('friends')->limit(10)->select();
        return $this->renderFile('',$data);
    }
}

?>