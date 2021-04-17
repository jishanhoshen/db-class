<?php
use DB\Database;
require 'database/class/Database.php';
class thePost{
    public $postId;
    public $DB;
    public function __construct($postId){
        $this->postId = $postId;
        $this->getConn();
        $this->DB;
    }
    public function getConn(){
        $server = "localhost";
        $dbUser = "dreamcre_classroom";
        $dbPass = "classroompassword";
        $dbName = "dreamcre_classroom";
        //db object
        $this->DB = new Database(
            $server,
            $dbUser,
            $dbPass,
            $dbName
        );
    }
    public function post(){
        $query = "select * from post where ?";
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
$singlePost = new thePost(1);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Post - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
</head>

<body>

<div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                <article class="article">
                    <div class="article-img">
                        <img src="https://via.placeholder.com/800x350/87CEFA/000000" title="" alt="">
                    </div>
                    <div class="article-title">
                        <h6><a href="#">Lifestyle</a></h6>
                        <h2><?php echo $singlePost->postTitle()?></h2>
                        <div class="media">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <label><?php echo $singlePost->postAuthor()?></label>
                                <span><?php echo $singlePost->postDate()?></span>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <?php echo $singlePost->postContent()?>
                    </div>
                    <div class="nav tag-cloud">
                        <a href="#">Design</a>
                        <a href="#">Development</a>
                        <a href="#">Travel</a>
                        <a href="#">Web Design</a>
                        <a href="#">Marketing</a>
                        <a href="#">Research</a>
                        <a href="#">Managment</a>
                    </div>
                </article>
                <div class="contact-form article-comment">
                    <h4>Leave a Reply</h4>
                    <form id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside">
                <!-- Author -->
                <div class="widget widget-author">
                    <div class="widget-title">
                        <h3>Author</h3>
                    </div>
                    <div class="widget-body">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Hello, I'm<br> Rachel Roth</h6>
                            </div>
                        </div>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores</p>
                    </div>
                </div>
                <!-- End Author -->
                <!-- Trending Post -->
                <div class="widget widget-post">
                    <div class="widget-title">
                        <h3>Trending Now</h3>
                    </div>
                    <div class="widget-body">

                    </div>
                </div>
                <!-- End Trending Post -->
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Latest Post</h3>
                    </div>
                    <div class="widget-body">
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        Rachel Roth
                                    </a>
                                    <a class="date" href="#">
                                        26 FEB 2020
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="https://via.placeholder.com/400x200/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        Rachel Roth
                                    </a>
                                    <a class="date" href="#">
                                        26 FEB 2020
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="https://via.placeholder.com/400x200/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        Rachel Roth
                                    </a>
                                    <a class="date" href="#">
                                        26 FEB 2020
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="https://via.placeholder.com/400x200/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Latest Post -->
                <!-- widget Tags -->
                <div class="widget widget-tags">
                    <div class="widget-title">
                        <h3>Latest Tags</h3>
                    </div>
                    <div class="widget-body">
                        <div class="nav tag-cloud">
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">Travel</a>
                            <a href="#">Web Design</a>
                            <a href="#">Marketing</a>
                            <a href="#">Research</a>
                            <a href="#">Managment</a>
                        </div>
                    </div>
                </div>
                <!-- End widget Tags -->
            </div>
        </div>
    </div>
</div>
</body>

</html>
