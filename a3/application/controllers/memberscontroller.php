<?php

class MemberController extends Controller{
public function defaultTask(){

  $this->postObject = new Users();
  $users = $this->postObject->getAllPosts();
  $this->set('title', 'The Default Members View');
  $this->set('members',$users);

}
}
