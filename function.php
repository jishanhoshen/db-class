<?php
require "config.php";
class singlePost extends dbConf {
    public int $postId;
    public function __construct($postId)
    {
        parent::getConn();
        $this->postId = $postId;
    }

    public function post(): array
    {
        $query = "select * from post where ID = ? ";
        $paramType = "i";
        $paramArray = array($this->postId);
        return $this->DB->select($query,$paramType,$paramArray);
    }
    function postAuthor(){
        $thePost = $this->post();
        return $thePost['0']['post_author'];
    }
    function postDate(){
        $thePost = $this->post();
        $date = $thePost['0']['post_date'];
        return date("d M Y", strtotime($date));
    }
    function postModifiedDate(){
        $thePost = $this->post();
        return $thePost['0']['post_modified'];
    }
    function postTitle(){
        $thePost = $this->post();
        return $thePost['0']['post_title'];
    }
    function postContent(){
        $thePost = $this->post();
        return $thePost['0']['post_content'];
    }
    function postPassword(){
        $thePost = $this->post();
        return $thePost['0']['post_password'];
    }
    function postStatus(){
        $thePost = $this->post();
        return $thePost['0']['post_status'];
    }
}