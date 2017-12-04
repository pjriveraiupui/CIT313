<?php

class BlogController extends Controller{

	public $postObject;
	public $commentObject;

   	public function post($pID){
        $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);
   	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

	public function comment(){
        $this->commentObject = new Comment();
		$users = $this->userObject->getComment();
		$this->set('commentID', $commentID);
		$this->set('commentText',$commentText);
		$this->set('date',$date);
		$this->set('postID',$postID);
	}
	public function addComment(){
	$this->commentObject = new Comment();
	
	$this->set('task', 'save');
}


public function save(){
	$this->commentObject = new Comment();
	$data = array('commentID'=>$_POST['commentID'],'uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'], 'postID'=>$_POST['postID']);
	//$this->getCategories();

	$result = $this->commentObject->addComment($data);
	$this->set($outcome);
}
}

?>
