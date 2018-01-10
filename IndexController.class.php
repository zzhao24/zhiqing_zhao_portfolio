<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
		if(IS_POST){
			
			$common_user = M('common_user');
			
			$data = I();
			$result = $common_user->add($data);
			if($result){
				
				$this->success('success');
				
			}else{
				
				$this->error('error');
				
			}
			
			
		}else{
			
			 $this->display();
			
		}
		
       
		
		
    }
}