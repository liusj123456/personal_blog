<?php
class SystemAction extends CommonAction {
     public function menu(){
		if(ACTION_NAME=='menu'){
			$list = M('menu')->order('sort asc')->select();
			$parents = M('menu')->where('pid = 0')->order('sort asc')->select();
			//$menu = selectParents($list['id'],);
			//$list = M('menu')->where('pid = 0')->order('sort asc')->select();
			$menu =array();
			//var_dump($list);die;
			foreach($parents as $key=>$val){			
				$child = M('menu')->where(array('pid'=>$val['id']))->order('sort asc')->select();
				foreach($child as $k=>$v){//二级
					$child[$k]['name'] = '----'.$v['name'];
					$children = M('menu')->where(array('pid'=>$v['id']))->order('sort asc')->select();
						foreach($children as $kk=>$vv){//三级
							$children[$kk]['name'] = '--------'.$vv['name'];
						}
					$child[$k]['son'] = $children;
				} 
				$parents[$key]['son'] = $child;
			}
			//echo "<pre>".print_r($parents,true)."<pre>";die;
			$this->assign('menus',$parents);
		}
		$this->display();
    } 
	public function menus(){
		$list = M('menu')->order('sort asc')->select();
		$this->menus = $this->unlimit($list);
		//p($menus);die;+
		
		$this->display();
	}
	public function unlimit($list,$pid=0,$html='----'){
		$arr = array();
		foreach($list as $val){
			if($val['pid']==$pid){
				$val['html']=str_repeat($html,$val['level']-1);
				$arr[]=$val;
				$arr = array_merge($arr,$this->unlimit($list,$val['id'],$html));
			}
		}
		return $arr;
	}
	public function menuDel(){
		$info=M('menu')->where(array('id'=>$_GET['id']))->delete();
		if($info){
			$this->success('删除成功',U(MODULE_NAME.'/menus'));
		}else{
			$this->error('删除失败',U(MODULE_NAME.'/menus'));		
		}
    }
	public function menuAdd(){
		
		if(IS_POST){
			$data = array(
				'pid'=>I('pid'),
				'url'=>I('url'),
				'name'=>I('name'),
				'level'=>I('level'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				'addUser'=>session('username'),
				'addTime'=>time()
			);
			if(empty($data['name'])){
				$this->error('名称不为空');
			}
			if(empty($data['sort'])){
				$this->error('排序不为空');
			}
			if(empty($data['url']) && $data['pid']!=0){
				$this->error('地址不为空');
			}
			if(M('menu')->where(array('name'=>$data['name']))->find()){
				$this->error('名称已存在');
			}
			$info=M('menu')->add($data);
			if($info){
				$this->success('添加成功',U(GROUP_NAME.'/System/menu'));
			}else{
				$this->error('添加失败');		
			}
		}else{
			$level = !empty($_GET['level'])?($_GET['level']+1):1;
			$pid = !empty($_GET['id'])?$_GET['id']:0;
			if($pid!=0){
				$name = M('menu')->where(array('id'=>$pid))->getField('name');
				$this->assign('parents',$name);
			}
			$this->assign('level',$level);
			$this->assign('pid',$pid);
			$this->display();
		}
    }
	public function menuEdit(){
		$id=$_GET['id'];
		if(IS_POST){
			
			$data = array(
				'id'=>I('id'),
				'url'=>I('url'),
				'name'=>I('name'),
				//'level'=>I('level'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				//'addUser'=>session('username'),
				//'addTime'=>time()
			);
			if(empty($data['name'])){
				$this->error('名称不为空');
			}
			if(empty($data['sort'])){
				$this->error('排序不为空');
			}
			if(empty($data['url']) && $data['pid']!=0){
				$this->error('地址不为空');
			}
			$info=M('menu')->save($data);
			//echo M('menu')->getLastSql();die;
			if($info){
				$this->success('修改成功',U(GROUP_NAME.'/System/menus'));
			}else{
				$this->error('修改失败');		
			}
		}else{
			$info=M('menu')->where(array('id'=>$id))->find();
			//p($info);
			$this->assign('v',$info);
			$this->display();
		}
    }
	public function indexAdd(){
		$menu = M('index');
		if(IS_POST){
			$data = array(
				'pid'=>I('pid'),
				'url'=>I('url'),
				'name'=>I('name'),
				'level'=>I('level'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				'addUser'=>session('username'),
				'addTime'=>time()
			);
			if(empty($data['name'])){
				$this->error('名称不为空');
			}
			if(empty($data['sort'])){
				$this->error('排序不为空');
			}
			if(empty($data['url']) && $data['pid']!=0){
				$this->error('地址不为空');
			}
			if($menu->where(array('name'=>$data['name']))->find()){
				$this->error('名称已存在');
			}
			$info=$menu->add($data);
			if($info){
				$this->success('添加成功',U(GROUP_NAME.'/System/indexList'));
			}else{
				$this->error('添加失败');		
			}
		}else{
			$level = !empty($_GET['level'])?($_GET['level']+1):1;
			$pid = !empty($_GET['id'])?$_GET['id']:0;
			if($pid!=0){
				$name = $menu->where(array('id'=>$pid))->getField('name');
				$this->assign('parents',$name);
			}
			$this->assign('level',$level);
			$this->assign('pid',$pid);
			$this->display();
		}
    }
	public function indexList(){
		$index_menu = M('index')->select();
		//p($index_menu);die();
		$this->menus = $this->indexUnlimited($index_menu);
		//p($menu);die;
		$this->display();
    } 
	public function indexUnlimited($list,$pid=0,$html='----'){
		$arr = array();
		foreach($list as $val){
			if($val['pid']==$pid){
				$val['html']=str_repeat($html,$val['level']-1);
				$arr[]=$val;
				$arr = array_merge($arr,$this->indexUnlimited($list,$val['id'],$html));
			}
		}
		return $arr;
	}
	public function indexDel(){
		$id = $_GET['id'];
		if(M('index')->where("id = $id")->delete()){
			$this->success('成功删除');
		}else{
			$this->error('删除失败');
		}
	}
	public function indexEdit(){
		$id=$_GET['id'];
		if(IS_POST){	
			$data = array(
				'id'=>I('id'),
				'url'=>I('url'),
				'name'=>I('name'),
				//'level'=>I('level'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				//'addUser'=>session('username'),
				//'addTime'=>time()
			);
			if(empty($data['name'])){
				$this->error('名称不为空');
			}
			if(empty($data['sort'])){
				$this->error('排序不为空');
			}
			if(empty($data['url']) && $data['pid']!=0){
				$this->error('地址不为空');
			}
			$info=M('index')->save($data);
			//echo M('menu')->getLastSql();die;
			if($info){
				$this->success('修改成功',U(GROUP_NAME.'/System/indexList'));
			}else{
				$this->error('修改失败');		
			}
		}else{
			$info=M('index')->where(array('id'=>$id))->find();
			//p($info);
			$this->assign('v',$info);
			$this->display();
		}
    }
	//banner
	public function bannerList(){
		$list = M('banner')->order('id desc')->select();
		foreach($list as $key=>$val){
			$list[$key]['pic']=unserialize($val['pic']);
		}
		$this->assign('banner',$list);
		$this->display();
    }
	public function bannerDel(){
		$info = M('banner')->where(array('id'=>$_GET['id']))->delete();
		if($info){
				$this->success('删除banner成功');
			}else{
				$this->error('删除banner失败');
			}
    }
	public function bannerAdd(){
		if(IS_POST){
			//p($_POST);die;
			$data = array(
				'pic'=>serialize(I('pic')),
				'title'=>I('title'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				'desc'=>I('desc'),
				'addUser'=>session('username'),
				'addTime'=>time()
			);
			$info = M('banner')->add($data);
			if($info){
				$this->success('添加banner成功');
			}else{
				$this->error('添加banner失败');
			}
		}else{
			$this->display();
		}
		
		
    }
	public function bannerEdit(){
		$id=$_GET['id'];
		if(IS_POST){
			//p($_POST);die;
			$data = array(
				'id'=>I('id'),
				'pic'=>serialize(I('pic')),
				'title'=>I('title'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				'desc'=>I('desc')
			);
			if(empty($data['pic'])){
				$this->error('图片不为空');
			}
			if(empty($data['title'])){
				$this->error('标题不为空');
			}
			$info=M('banner')->save($data);
			//echo M('banner')->getLastSql();die();
			if($info){
				$this->success('修改成功',U(GROUP_NAME.'/System/bannerList'));
			}else{
				$this->error('修改失败');		
			}
		}else{
			$info=M('banner')->where(array('id'=>$id))->find();
			$info['pic']=unserialize($info['pic']);
			//p($info);die;
			$this->assign('be',$info);
			$this->display();
		}
    }
	//友链
	public function friendList(){
		$list = M('friends')->order('id desc')->select();
		$this->assign('friend',$list);
		$this->display();
    }
	public function friendDel(){
		$info = M('friends')->where(array('id'=>$_GET['id']))->delete();
		if($info){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
    }
	public function friendAdd(){
		if(IS_POST){
			//p($_POST);die;
			$data = array(
				'title'=>I('title'),
				'url'=>I('url'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				'beian'=>I('beian'),
				'addUser'=>session('username'),
				'addTime'=>time()
			);
			$info = M('friends')->add($data);
			if($info){
				$this->success('添加banner成功');
			}else{
				$this->error('添加banner失败');
			}
		}else{
			$this->display();
		}
		
		
    }
	public function friendEdit(){
		$id=$_GET['id'];
		if(IS_POST){
			//p($_POST);die;
			$data = array(
				'id'=>I('id'),
				'title'=>I('title'),
				'url'=>I('url'),
				'display'=>I('display'),
				'sort'=>I('sort'),
				'beian'=>I('beian')
			);
			/* if(empty($data['pic'])){
				$this->error('图片不为空');
			}
			if(empty($data['title'])){
				$this->error('标题不为空');
			} */
			$info=M('friends')->save($data);
			//echo M('friends')->getLastSql();die();
			if($info){
				$this->success('修改成功',U(GROUP_NAME.'/System/friendList'));
			}else{
				$this->error('修改失败');		
			}
		}else{
			$info=M('friends')->where(array('id'=>$id))->find();
			//p($info);die;
			$this->assign('friend',$info);
			$this->display();
		}
    }
}