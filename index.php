<!-- PHP -->
<?php
require('include/db.php');
$query = "SELECT * FROM section_control, social_media, home, about, contact, seo";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>
<!-- PHP -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title><?=$user_data['page_title']?></title>
    <!-- Page Title -->
    <!-- Icon -->
    <link rel="shortcut icon" href="assets/img/<?=$user_data['siteicon']?>">
    <!-- Icon -->
    <!-- Description -->
    <meta content="<?=$user_data['description']?>" name="description">
    <!-- Description -->
    <!-- Keywords -->
    <meta content="<?=$user_data['keywords']?>" name="keywords">
    <!-- Keywords -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/webfonts">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- Page Loader Start -->
    <div class="page-loader fade-out" style="display: none;">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- Page Loader End -->

    <!-- Background Box Start -->
    <div class="bg-box">
        <div class="square" style="--i:1; top: 150px; left: -100px; width: 150px; height: 150px;"></div>
        <div class="square" style="--i:2; bottom: 50px; right: -60px; width: 175px; height: 175px;"></div>
    </div>
    <!-- Background Box End -->

    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Main Start -->
    <div class="main">
        <!-- Header Start -->
        <header class="header">
            <div class="container">
                <div class="row flex-end">
                    <button type="button" class="nav-toggler">
                        <span class="animated"></span>
                    </button>
                    <nav class="nav">
                        <div class="nav-inner">
                            <ul>
                                <!-- Home -->
                                <?php 
                                if($user_data['home_section']){
                                ?>
                                <li><a href="#home" class="nav-item link-item">Home</a></li>
                                <?php
                                }
                                ?>
                                <!-- Home -->
                                <!-- About -->
                                <?php 
                                if($user_data['about_section']){
                                ?>
                                <li><a href="#about" class="nav-item link-item">About</a></li>
                                <?php
                                }
                                ?>
                                <!-- About -->
                                <!-- Resume -->
                                <?php 
                                if($user_data['resume_section']){
                                ?>
                                <li><a href="#resume" class="nav-item link-item">Resume</a></li>
                                <?php
                                }
                                ?>
                                <!-- Resume -->
                                <!-- Portfolio -->
                                <?php 
                                if($user_data['portfolio_section']){
                                ?>
                                <li><a href="#portfolio" class="nav-item link-item">Portfolio</a></li>
                                <?php
                                }
                                ?>
                                <!-- Portfolio -->
                                <!-- Contact -->
                                <?php 
                                if($user_data['contact_section']){
                                ?>
                                <li><a href="#contact" class="nav-item link-item">Contact</a></li>
                                <?php
                                }
                                ?>
                                <!-- Contact -->
                                <li><a href="admin/index.php" class="nav-item link-item">Admin</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Home Section Start -->
        <section class="home-section align-item-center active" id="home">
            <div class="container">
                <div class="row align-item-center">
                    <div class="home-info">
                        <p>Hello, I'm</p>
                        <!-- Title -->
                        <h1><?=$user_data['title']?></h1>
                        <!-- Title -->
                        <!-- Subtitle -->
                        <h2>The <span class="txt-type animated" data-wait="2000"
                                data-words="[&quot;<?=$user_data['word1']?>&quot;, &quot;<?=$user_data['word2']?>&quot;, &quot;<?=$user_data['word3']?>&quot;]"><span
                                    class="txt"></h2>
                        <!-- Subtitle -->
                        <a href="#about" class="btn link-item">More About Me</a>
                        <a href="#portfolio" class="btn link-item">Portfolio</a>
                        <!-- Social Media -->
                        <div class="social-links">
                            <?php 
                            if($user_data['showicons']){
                            ?>
                            <!-- Facebook -->
                            <?php if($user_data['facebook']!=''){
                            ?>
                            <a href="https://www.facebook.com/<?=$user_data['facebook']?>" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Facebook -->
                            <!-- Instagram -->
                            <?php if($user_data['instagram']!=''){
                            ?>
                            <a href="https://www.instagram.com/<?=$user_data['instagram']?>" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Instagram -->
                            <!-- Linkedin -->
                            <?php if($user_data['linkedin']!=''){
                            ?>
                            <a href="https://www.linkedin.com/in/<?=$user_data['linkedin']?>" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Linkedin -->
                            <!-- Github -->
                            <?php if($user_data['github']!=''){
                            ?>
                            <a href="https://github.com/<?=$user_data['github']?>" target="_blank"><i
                                    class="fab fa-github"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Github -->
                            <!-- Behance -->
                            <?php if($user_data['behance']!=''){
                            ?>
                            <a href="https://www.behance.net/<?=$user_data['behance']?>" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Behance -->
                            <?php
                            }
                            ?>
                        </div>
                        <!-- Social Media -->
                    </div>
                    <!-- Homepage Picture -->
                    <div class="home-img">
                        <div class="img-box">
                            <img src="assets/img/<?=$user_data['home_pic']?>" alt="profile">
                        </div>
                    </div>
                    <!-- Homepage Picture -->
                </div>
            </div>
        </section>
        <!-- Home Section End -->

        <!-- About Section Start -->
        <section class="about-section sec-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>About Me</h2>
                        <!-- About Title -->
                        <h3><?=$user_data['about_title']?></h3>
                        <!-- About Title -->
                    </div>
                </div>
                <div class="row">
                    <!-- About Profile Picture -->
                    <div class="about-img">
                        <div class="img-box">
                            <img src="assets/img/<?=$user_data['about_pic']?>" alt="about img">
                        </div>
                    </div>
                    <!-- About Profile Picture -->
                    <div class="about-text">
                        <!-- About Desc -->
                        <p><?=$user_data['about_desc']?></p>
                        <!-- About Desc -->
                        <div class="about-tabs">
                            <button type="button" class="tab-item active" data-target="#interests">Interests</button>
                            <button type="button" class="tab-item" data-target="#services">Services</button>
                        </div>
                        <!-- Interest Start -->
                        <div class="tab-content active" id="interests">
                            <div class="row" style="justify-content: center;">
                                <!-- Interest PHP -->
                                <?php 
                                $query2 = "SELECT * FROM interests";
                                $run2 = mysqli_query($db,$query2);
                                while($interest = mysqli_fetch_array($run2)){
                                ?>
                                <div class="interest">
                                    <div class="card">
                                        <img src="assets/img/interest/<?=$interest['icon_interest']?>">
                                        <div class="card-body">
                                            <p class="card-text"><?=$interest['title_interest']?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                                <!-- Interest PHP -->
                            </div>
                        </div>
                        <!-- Interest End -->
                        <!-- Services Start -->
                        <div class="tab-content" id="services">
                            <div class="row" style="justify-content: center;">
                                <!-- Services PHP -->
                                <?php 
                                $query3 = "SELECT * FROM services";
                                $run3 = mysqli_query($db,$query3);
                                while($service = mysqli_fetch_array($run3)){
                                ?>
                                <div class="service-content">
                                    <img src="assets/img/service/<?=$service['icon_service']?>">
                                    <h3><?=$service['title_service']?></h3>
                                    <p><?=$service['desc_service']?></p>
                                </div>
                                <?php 
                                    }
                                    ?>
                                <!-- Services PHP -->
                            </div>
                        </div>
                    </div>
                    <!-- Services End -->
                </div>
                <!-- Skills -->
                <div class="skills">
                    <h2>Skills</h2>
                    <!-- Skill PHP -->
                    <?php 
                        $query4 = "SELECT * FROM skills";
                        $run4 = mysqli_query($db,$query4);
                        while($skill = mysqli_fetch_array($run4)){
                        ?>
                    <div class="skill">
                        <!-- Skill Name -->
                        <div class="skill-name"><?=$skill['skill_name']?></div>
                        <!-- Skill Name -->
                        <div class="skill-bar">
                            <!-- Skill Level -->
                            <div class="skill-per" per="<?=$skill['skill_level']?>"></div>
                            <!-- Skill Level -->
                        </div>
                    </div>
                    <?php 
                        }
                        ?>
                    <!-- Skill PHP -->
                </div>
                <!-- Skills -->
            </div>
        </section>
        <!-- About Section End -->

        <!-- Resume Section Start -->
        <section class="resume-section sec-padding" id="resume">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Check My Resume</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Education Start -->
                    <div class="resume-education">
                        <div class="title">
                            <h3>Education</h3>
                        </div>
                        <!-- Education PHP -->
                        <?php 
                        $query5 = "SELECT * FROM resume";
                        $run5 = mysqli_query($db,$query5);
                        while($resume = mysqli_fetch_array($run5)){
                        if($resume['type']=='e'){
                        ?>
                        <div class="timeline">
                            <div class="timeline-item">
                                <span class="date"><?=$resume['time']?></span>
                                <h4><?=$resume['title']?> - <span><?=$resume['org']?></span></h4>
                                <p><?=$resume['exp']?></p>
                            </div>
                        </div>
                        <?php
                        }
                        }
                        ?>
                        <!-- Education PHP -->
                    </div>
                    <!-- Education End -->
                    <!-- Professional Start -->
                    <div class="resume-professional">
                        <div class="title">
                            <h3>Professional Experience</h3>
                        </div>
                        <!-- Professional PHP -->
                        <?php 
                        $query5 = "SELECT * FROM resume";
                        $run5 = mysqli_query($db,$query5);
                        while($resume = mysqli_fetch_array($run5)){
                            if($resume['type']=='p'){
                            ?>
                        <div class="timeline">
                            <div class="timeline-item">
                                <span class="date"><?=$resume['time']?></span>
                                <h4><?=$resume['title']?> - <span><?=$resume['org']?></span></h4>
                                <p><?=$resume['exp']?></p>
                            </div>
                        </div>
                        <?php 
                        }
                        }
                        ?>
                        <!-- Professional PHP -->
                    </div>
                    <!-- Professional End -->
                </div>
            </div>
        </section>
        <!-- Resume Section End -->

        <!-- Portfolio Section Start -->
        <section class="portfolio-section sec-padding" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Recent Work</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Portfolio Item -->
                    <!-- Portfolio PHP -->
                    <?php 
                    $query6 = "SELECT * FROM portfolio";
                    $run6 = mysqli_query($db,$query6);
                    while($portfolio = mysqli_fetch_array($run6)){
                    ?>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumbnail">
                            <img src="assets/img/portfolio/<?=$portfolio['project_pic']?>" alt="portfolio item thumb">
                        </div>
                        <h3 class="portfolio-item-title"><?=$portfolio['project_type']?> <?=$portfolio['project_name']?>
                        </h3>
                        <button type="button" class="btn view-project-btn">View Project</button>
                        <div class="portfolio-item-details">
                            <div class="description text-center">
                                <p><?=$portfolio['project_desc']?></p>
                            </div>
                            <div class="general-info">
                                <ul>
                                    <li>Created - <span><?=$portfolio['project_date']?></span></li>
                                    <li>Role - <span><?=$portfolio['project_role']?></span></li>
                                    <li>View Online - <span><a href="<?=$portfolio['project_link']?>"
                                                target="_blank"><?=$portfolio['project_linkname']?></a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                    <!-- Portfolio PHP -->
                    <!-- Portfolio Item -->
                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->

        <!-- Contact Section Start -->
        <section class="contact-section sec-padding" id="contact">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                    </div>
                </div>
                <div class="row" style="justify-content: center;">
                    <div class="contact-info1">
                        <div class="col">
                            <div class="contact-box">
                                <?php 
                                $query7 = "SELECT * FROM contact";
                                $run7 = mysqli_query($db,$query7);
                                while($contact = mysqli_fetch_array($run7)){
                                ?>
                                <div class="contact-info-item">
                                    <i class="fas fa-globe-asia"></i>
                                    <h3>Address</h3>
                                    <p><?=$contact['address']?></p>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="contact-box">
                                <?php 
                                $query7 = "SELECT * FROM contact";
                                $run7 = mysqli_query($db,$query7);
                                while($contact = mysqli_fetch_array($run7)){
                                ?>
                                <div class="contact-info-item">
                                    <i class="fas fa-envelope"></i>
                                    <h3>Email Me</h3>
                                    <p><?=$contact['email']?></p>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info2">
                        <div class="col">
                            <div class="contact-box">
                                <?php 
                                $query7 = "SELECT * FROM contact";
                                $run7 = mysqli_query($db,$query7);
                                while($contact = mysqli_fetch_array($run7)){
                                ?>
                                <div class="contact-info-item">
                                    <i class="fas fa-phone-alt"></i>
                                    <h3>Mobile Phone</h3>
                                    <p><?=$contact['mobile']?></p>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="contact-box">
                                <?php 
                                $query7 = "SELECT * FROM contact";
                                $run7 = mysqli_query($db,$query7);
                                while($contact = mysqli_fetch_array($run7)){
                                ?>
                                <div class="contact-info-item">
                                    <i class="fas fa-envelope"></i>
                                    <h3>Follow Me</h3>
                                    <div class="social-links">
                                        <?php 
                                        if($user_data['showicons']){
                                        ?>
                                        <!-- Facebook -->
                                        <?php if($user_data['facebook']!=''){
                                        ?>
                                        <a href="https://www.facebook.com/<?=$user_data['facebook']?>"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <!-- Facebook -->
                                        <!-- Instagram -->
                                        <?php if($user_data['instagram']!=''){
                                        ?>
                                        <a href="https://www.instagram.com/<?=$user_data['instagram']?>"
                                            target="_blank"><i class="fab fa-instagram"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <!-- Instagram -->
                                        <!-- Linkedin -->
                                        <?php if($user_data['linkedin']!=''){
                                        ?>
                                        <a href="https://www.linkedin.com/in/<?=$user_data['linkedin']?>"
                                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <!-- Linkedin -->
                                        <!-- Github -->
                                        <?php if($user_data['github']!=''){
                                        ?>
                                        <a href="https://github.com/<?=$user_data['github']?>" target="_blank"><i
                                                class="fab fa-github"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <!-- Github -->
                                        <!-- Behance -->
                                        <?php if($user_data['behance']!=''){
                                        ?>
                                        <a href="https://www.behance.net/<?=$user_data['behance']?>" target="_blank"><i
                                                class="fab fa-behance"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <!-- Behance -->
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
    </div>
    <!-- Main End -->

    <!-- Portfolio Item Details Popup Start -->
    <div class="portfolio-popup">
        <div class="pp-inner">
            <div class="pp-content">
                <div class="pp-header">
                    <button type="button" class="btn pp-close"><i class="fas fa-times"></i></button>
                    <div class="pp-thumbnail">
                        <img alt="pp-thumbnail">
                    </div>
                    <h3></h3>
                </div>
                <div class="pp-body">
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="general-info"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Item Details Popup End -->

    <!-- Javascript -->
    <script src="assets/js/script.js"></script>
    <!-- Javascript -->

</body>

</html>