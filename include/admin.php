<?php 
require('../include/db.php');
if(isset($_POST['update-section'])){
    // print_r($_POST);
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $portfolio = $_POST['portfolio'] ?? 0;
    $resume = $_POST['resume'] ?? 0;
    $contact = $_POST['contact'] ?? 0;
    
    $query = "UPDATE section_control SET ";
    $query.="home_section='$home',";
    $query.="about_section='$about',";
    $query.="resume_section='$resume',";
    $query.="portfolio_section='$portfolio',";
    $query.="contact_section='$contact' WHERE id=1";
    
    $run = mysqli_query($db,$query);
    if($run){
    echo "<script>window.location.href='../admin/index.php';</script>";                    
    }
}

if(isset($_POST['update-home'])){
    // print_r($_POST);
    // var_dump($_FILES);
    $title = mysqli_real_escape_string($db,$_POST['title']);
    $word1 = mysqli_real_escape_string($db,$_POST['word1']);
    $word2 = mysqli_real_escape_string($db,$_POST['word2']);
    $word3 = mysqli_real_escape_string($db,$_POST['word3']);
    $showicons = $_POST['showicons'] ?? 0;
    $imagename = time().$_FILES['homeprofile']['name'];
    $imgtemp = $_FILES['homeprofile']['tmp_name'];
    if($imgtemp==''){
        $q = "SELECT * FROM home WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['home_pic'];
    }
    
    move_uploaded_file($imgtemp,"../assets/img/$imagename");
    
    $query = "UPDATE home SET ";
    $query.="title='$title',";
    $query.="word1='$word1',";
    $query.="word2='$word2',";
    $query.="word3='$word3',";
    $query.="home_pic='$imagename',";
    $query.="showicons='$showicons' WHERE id=1";
    
    $run = mysqli_query($db,$query);
    if($run){
    echo "<script>window.location.href='../admin/index.php?homesetting=true';</script>";                    
    }
}

if(isset($_POST['update-about'])){
    // print_r($_POST);
    // var_dump($_FILES);
    $title = mysqli_real_escape_string($db,$_POST['title']);
    $desc = mysqli_real_escape_string($db,$_POST['desc']);
    $imagename = time().$_FILES['profile']['name'];
    $imgtemp = $_FILES['profile']['tmp_name'];
    if($imgtemp==''){
        $q = "SELECT * FROM about WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['about_pic'];
    }
    
    move_uploaded_file($imgtemp,"../assets/img/$imagename");
    
        $query = "UPDATE about SET ";
        $query.="about_title='$title',";
        $query.="about_pic='$imagename',";
        $query.="about_desc='$desc' WHERE id=1";
        
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    
        }
}

if(isset($_POST['add-interest'])){
    // print_r($_POST);
    $title_interest = $_POST['title_interest'];
    $icon_interest = time().$_FILES['icon_interest']['name'];
    
    move_uploaded_file($_FILES['icon_interest']['tmp_name'],"../assets/img/interest/$icon_interest");
    
    $query = "INSERT INTO interests (icon_interest,title_interest) VALUES ('$icon_interest','$title_interest')";
        
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    
        }
}

if(isset($_POST['add-service'])){
    // print_r($_POST);
    $title_service = $_POST['title_service'];
    $desc_service = $_POST['desc_service'];
    $icon_service = time().$_FILES['icon_service']['name'];
    
    move_uploaded_file($_FILES['icon_service']['tmp_name'],"../assets/img/service/$icon_service");
    
    $query = "INSERT INTO services (icon_service,title_service,desc_service) VALUES ('$icon_service','$title_service','$desc_service')";
        
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    
        }
}

if(isset($_POST['add-skill'])){
    // print_r($_POST);
    $skillname = $_POST['skillname'];
    $skilllevel = $_POST['skilllevel'];
    
    $query = "INSERT INTO skills (skill_name,skill_level) VALUES ('$skillname','$skilllevel')";
        
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    
        }
}

if(isset($_POST['add-resume'])){
    // print_r($_POST);
    $type = $_POST['type'];
    $title = $_POST['title']; 
    $time = $_POST['time'];
    $org = $_POST['org'];
    $exp = $_POST['exp'];
    
    $query = "INSERT INTO resume (type,title,time,org,exp) VALUES ('$type','$title','$time','$org','$exp')";
        
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>";                    
        }
}

if(isset($_POST['add-project'])){
    // print_r($_POST);
    $type = $_POST['type'];
    $project_name = $_POST['project_name'];
    $project_desc = $_POST['project_desc'];
    $project_date = $_POST['project_date'];
    $project_role = $_POST['project_role'];
    $project_link = $_POST['project_link'];
    $project_linkname = $_POST['project_linkname'];
    $project_image = time().$_FILES['project_pic']['name'];
    
    move_uploaded_file($_FILES['project_pic']['tmp_name'],"../assets/img/portfolio/$project_image");
    
    $query = "INSERT INTO portfolio (project_type,project_pic,project_name,project_desc,project_date,project_role,project_link,project_linkname) VALUES ('$type','$project_image','$project_name','$project_desc','$project_date','$project_role','$project_link','$project_linkname')";
    
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>window.location.href='../admin/index.php?portfoliosetting=true';</script>";                    
        }
    
}

if(isset($_POST['update-contact'])){
    // print_r($_POST);
    $address = mysqli_real_escape_string($db,$_POST['contact_address']);
    $email = $_POST['contact_email'];
    $mobile = $_POST['contact_mobile'];
    
    $query = "UPDATE contact SET ";
    $query.="address='$address',";
    $query.="email='$email',";
    $query.="mobile='$mobile' WHERE id=1";
    
    $run = mysqli_query($db,$query);
    if($run){
    echo "<script>window.location.href='../admin/index.php?contactsetting=true';</script>";                    
    }
}

if(isset($_POST['update-socialmedia'])){
    // print_r($_POST);
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $behance = $_POST['behance'];
    
    $query = "UPDATE social_media SET ";
    $query.="facebook='$facebook',";
    $query.="instagram='$instagram',";
    $query.="linkedin='$linkedin',";
    $query.="github='$github',";
    $query.="behance='$behance' WHERE id=1";
    
    $run = mysqli_query($db,$query);
    if($run){
    echo "<script>window.location.href='../admin/index.php?contactsetting=true';</script>";                    
    }
}

if(isset($_POST['update-seo'])){
    $title = mysqli_real_escape_string($db,$_POST['page_title']);
    $keywords = mysqli_real_escape_string($db,$_POST['keywords']);
    $desc = mysqli_real_escape_string($db,$_POST['description']);
    $imagename = time().$_FILES['siteicon']['name'];
    $imgtemp = $_FILES['siteicon']['tmp_name'];
    
    if($imgtemp==''){
        $q = "SELECT * FROM seo WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['siteicon'];
    }
    
    move_uploaded_file($imgtemp,"../assets/img/$imagename");
    
    $query = "UPDATE seo SET ";
    $query.="page_title='$title',";
    $query.="keywords='$keywords',";
    $query.="description='$desc',";
    $query.="siteicon='$imagename' WHERE id=1";
    
    $run = mysqli_query($db,$query);
    if($run){
    echo "<script>window.location.href='../admin/index.php?seosetting=true';</script>";                    
    }
}

if(isset($_POST['update-account'])){
    $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $imagename = time().$_FILES['profilepic']['name'];
    $imgtemp = $_FILES['profilepic']['tmp_name'];
    
    if($imgtemp==''){
        $q = "SELECT * FROM admin WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['admin_profile'];
    }
    
    move_uploaded_file($imgtemp,"../assets/img/$imagename");
    
    $query = "UPDATE admin SET ";
    $query.="fullname='$fullname',";
    $query.="username='$username',";
    $query.="password='$password',";
    $query.="admin_profile='$imagename' WHERE id=1";
    
    $run = mysqli_query($db,$query);
    if($run){
    echo "<script>window.location.href='../admin/index.php?accountsetting=true';</script>";                    
    }
}

?>