<!-- PHP -->
<?php
require('../include/db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";                    
}
$query = "SELECT * FROM section_control, social_media, home, about, contact, seo, admin";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>
<!-- PHP -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/assets/css/font-awesome.css">
    <link rel="stylesheet" href="../admin/assets/css/stylepanel.css">
    <link rel="stylesheet" href="../admin/assets/css/responsivepanel.css">
    <link rel="stylesheet" href="../admin/assets/webfonts">
    <link rel="shortcut icon" href="../assets/img/1636622810codesvein.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../admin/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../admin/assets/js/jquery.min.js"></script>
    <title>Control Panel</title>
</head>

<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
    </section>
    <div class="box">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
    </div>
    <div class="container">
        <div class="navbar">
            <!-- Account -->
            <div class="account">
                <img src="../assets/img/<?=$user_data['admin_profile']?>" width="50x;" height="50px;">
                <span class="name"><?=$user_data['fullname']?></span>
                <span class="username"><?=$user_data['username']?></span>
            </div>
            <!-- Account -->
            <!-- Link Top -->
            <div class="nav-item">
                <li><a class="nav-link" href="../include/logout.php">LOGOUT</a></li>
                <li><a class="nav-link" href="../index.php">WEBSITE</a></li>
            </div>
            <!-- Link Top -->
        </div>
        <div class="container-body">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <ul class="nav">
                            <li class="active">
                                <a href="index.php">
                                    <i class="fas fa-sliders-h"></i>
                                    <p>Control Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?homesetting=true">
                                    <i class="fa fa-home"></i>
                                    <p>Home Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?aboutsetting=true">
                                    <i class="fas fa-user"></i>
                                    <p>About Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?resumesetting=true">
                                    <i class="fas fa-graduation-cap"></i>
                                    <p>Resume Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?portfoliosetting=true">
                                    <i class="fas fa-briefcase"></i>
                                    <p>Portfolio Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?contactsetting=true">
                                    <i class="fas fa-id-card"></i>
                                    <p>Contact Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?seosetting=true">
                                    <i class="fas fa-atom"></i>
                                    <p>SEO Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?accountsetting=true">
                                    <i class="fas fa-user-alt"></i>
                                    <p>Account Setting</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <!-- Content -->
                    <div class="main-body">
                        <!-- Greeting -->
                        <div class="title">
                            <span class="greeting">Hai, <?=$user_data['fullname']?></span>
                            <h2>Overview</h2>
                        </div>
                        <!-- Greeting -->
                        <div class="tab-content">
                            <?php
                            if (isset($_GET['homesetting'])){ 
                            ?>
                            <!-- Update Home -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Update Home</h4>
                                        <form role="form" action="../include/admin.php" method="post"
                                            enctype="multipart/form-data">
                                            <div class="card-body">
                                                <!-- Home Profile -->
                                                <img src="../assets/img/<?=$user_data['home_pic']?>" class="col-3">
                                                <div class="form-group">
                                                    <label>Home Profile Picture</label>
                                                    <input type="file" class="form-control" name="homeprofile">
                                                </div>
                                                <!-- Home Profile -->
                                                <!-- Title -->
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title"
                                                        value="<?=$user_data['title']?>" placeholder="Enter Title">
                                                </div>
                                                <!-- Title -->
                                                <!-- Word 1 -->
                                                <div class="form-group">
                                                    <label>Word 1</label>
                                                    <input type="text" class="form-control" name="word1"
                                                        value="<?=$user_data['word1']?>" placeholder="Enter Word 1">
                                                </div>
                                                <!-- Word 1 -->
                                                <!-- Word 2 -->
                                                <div class="form-group">
                                                    <label>Word 2</label>
                                                    <input type="text" class="form-control" name="word2"
                                                        value="<?=$user_data['word2']?>" placeholder="Enter Word 2">
                                                </div>
                                                <!-- Word 2 -->
                                                <!-- Word 3 -->
                                                <div class="form-group">
                                                    <label>Word 3</label>
                                                    <input type="text" class="form-control" name="word3"
                                                        value="<?=$user_data['word3']?>" placeholder="Enter Word 3">
                                                </div>
                                                <!-- Word 3 -->
                                                <!-- Show Icon -->
                                                <div class="form-check">
                                                    <input type="checkbox" name="showicons" class="form-check-input" <?php
                                                    if($user_data['showicons']){
                                                    echo "checked";
                                                    }
                                                    ?>>
                                                    <label class="form-check-label">Show Social Icons</label>
                                                </div>
                                                <!-- Show Icon -->
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="update-home" class="btn btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Update Home -->
                            <?php
                            } else if (isset($_GET['aboutsetting'])){
                            ?>
                            <!-- Update About -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Update About</h4>
                                        <form role="form" action="../include/admin.php" method="post"
                                            enctype="multipart/form-data">
                                            <div class="card-body">
                                                <!-- About Profile -->
                                                <img src="../assets/img/<?=$user_data['home_pic']?>" class="col-3">
                                                <div class="form-group">
                                                    <label>About Profile Picture</label>
                                                    <input type="file" class="form-control" name="profile">
                                                </div>
                                                <!-- About Profile -->
                                                <!-- About Title -->
                                                <div class="form-group">
                                                    <label>About Title</label>
                                                    <input type="text" class="form-control" name="title"
                                                        value="<?=$user_data['about_title']?>"
                                                        placeholder="Enter Title">
                                                </div>
                                                <!-- About Title -->
                                                <!-- About Desc -->
                                                <div class="form-group">
                                                    <label>About Description</label><br>
                                                    <textarea name="desc"><?=$user_data['about_desc']?></textarea>
                                                </div>
                                                <!-- About Desc -->
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="update-about" class="btn btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Update About Info -->
                            </div>
                            <!-- Update About Info -->
                            <!-- Update Interest -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <div class="cards">
                                            <h4 class="card-title">Manage Interests</h4>
                                            <div class="cards">
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th>Interest Icon</th>
                                                                <th>Interest Title</th>
                                                                <th style="width: 40px">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $q = "SELECT * from interests";
                                                            $r = mysqli_query($db,$q);
                                                            $c =1;
                                                            while($interest=mysqli_fetch_array($r)){
                                                            ?>
                                                            <tr>
                                                                <td><?=$c?></td>
                                                                <td><img src="../assets/img/interest/<?=$interest['icon_interest']?>"
                                                                        style="width:50px" height="50px" /></td>
                                                                <td><?=$interest['title_interest']?></td>
                                                                <td>
                                                                    <a
                                                                        href="../include/editinterest.php?id=<?=$interest['id']?>">Edit</a>
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="../include/deleteinterest.php?id=<?=$interest['id']?>">Delete</a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $c++;
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Interest -->
                                        <div class="row">
                                            <form role="form" action="../include/admin.php" method="post"
                                                enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <!-- Interest Icon -->
                                                    <div class="form-group">
                                                        <label>Interest Icon</label>
                                                        <input type="file" class="form-control" name="icon_interest">
                                                    </div>
                                                    <!-- Interest Icon -->
                                                    <!-- Title Interest -->
                                                    <div class="form-group">
                                                        <label>Title Interest</label>
                                                        <input type="text" placeholder="Enter Title"
                                                            class="form-control" name="title_interest">
                                                    </div>
                                                    <!-- Title Interest -->
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" place name="add-interest"
                                                        class="btn btn-primary">Add
                                                        Interest</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Form Interest -->
                                    </div>
                                </div>
                            </div>
                            <!-- Update Interest -->
                            <!-- Update Services -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <div class="cards">
                                            <h4 class="card-title">Manage Services</h4>
                                        </div>
                                        <div class="cards">
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Service Icon</th>
                                                            <th>Service Title</th>
                                                            <th>Service Desc</th>
                                                            <th style="width: 40px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $q = "SELECT * from services";
                                                        $r=mysqli_query($db,$q);
                                                        $c =1;
                                                        while($service=mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><img src="../assets/img/service/<?=$service['icon_service']?>"
                                                                    style="width:50px" height="50px" /></td>
                                                            <td><?=$service['title_service']?></td>
                                                            <td><?=$service['desc_service']?></td>
                                                            <td>
                                                                <a
                                                                    href="../include/editservice.php?id=<?=$service['id']?>">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="../include/deleteservice.php?id=<?=$service['id']?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $c++;
                                                            }
                                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Form Service -->
                                        <div class="row">
                                            <form role="form" action="../include/admin.php" method="post"
                                                enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <!-- Service Icon -->
                                                    <div class="form-group">
                                                        <label>Service Icon</label>
                                                        <input type="file" class="form-control" name="icon_service">
                                                    </div>
                                                    <!-- Service Icon -->
                                                    <!-- Title Service -->
                                                    <div class="form-group">
                                                        <label>Title Service</label>
                                                        <input type="text" placeholder="Enter Title"
                                                            class="form-control" name="title_service">
                                                    </div>
                                                    <!-- Title Service -->
                                                    <!-- Description Service -->
                                                    <div class="form-group">
                                                        <label>Desc Service</label>
                                                        <input type="text" placeholder="Enter Desc" class="form-control"
                                                            name="desc_service">
                                                    </div>
                                                    <!-- Description Service -->
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" name="add-service" class="btn btn-primary">Add
                                                        Service</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Form Service -->
                                    </div>
                                </div>
                            </div>
                            <!-- Update Service -->
                            <!-- Update Skills -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Manage Skills</h4>
                                        <div class="cards">
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Skill Name</th>
                                                            <th>Skill Level</th>
                                                            <th style="width: 40px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $q = "SELECT * from skills";
                                                        $r=mysqli_query($db,$q);
                                                        $c =1;
                                                        while($skill=mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><?=$skill['skill_name']?></td>
                                                            <td>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar progress-bar-danger"
                                                                        style="width: <?=$skill['skill_level']?>%">
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="badge bg-light"><?=$skill['skill_level']?>%</span>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="../include/editskill.php?id=<?=$skill['id']?>">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="../include/deleteskill.php?id=<?=$skill['id']?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $c++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Form Skill -->
                                        <div class="row">
                                            <form role="form" action="../include/admin.php" method="post">
                                                <div class="card-body">
                                                    <!-- Skill Name -->
                                                    <div class="form-group">
                                                        <label>Skill Name</label>
                                                        <input type="text" placeholder="Enter Skill"
                                                            class="form-control" name="skillname">
                                                    </div>
                                                    <!-- Skill Name -->
                                                    <!-- Skill Level -->
                                                    <div class="form-group">
                                                        <label>Skill Level</label>
                                                        <input type="range" min="1" max="100" class="form-control"
                                                            name="skilllevel">
                                                        <input type="text" placeholder="Enter from 1 - 100" min="1"
                                                            max="100" class="form-control" name="skilllevel">
                                                    </div>
                                                    <!-- Skill Level -->
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" name="add-skill" class="btn btn-primary">Add
                                                        Skill</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Form Skill -->
                                    </div>
                                </div>
                            </div>
                            <!-- Update Skill -->
                            <?php
                            } else if (isset($_GET['resumesetting'])){
                            ?>
                            <!-- Update Resume -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Manage Resume</h4>
                                        <div class="cards">
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Type</th>
                                                            <th>Title</th>
                                                            <th>Institute / Company</th>
                                                            <th>Description</th>
                                                            <th style="width: 40px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $q = "SELECT * from resume";
                                                        $r=mysqli_query($db,$q);
                                                        $c =1;
                                                        while($resume=mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><?=$resume['type']?></td>
                                                            <td><?=$resume['title']?></td>
                                                            <td><?=$resume['org']?></td>
                                                            <td><?=$resume['exp']?></td>
                                                            <td>
                                                                <a
                                                                    href="../include/editresume.php?id=<?=$resume['id']?>">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="../include/deleteresume.php?id=<?=$resume['id']?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $c++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Form Resume -->
                                        <div class="row">
                                            <form role="form" action="../include/admin.php" method="post">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Select Type</label><br>
                                                        <select name="type" class="form-control">
                                                            <option value="e">Education</option>
                                                            <option value="p">Professional</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" placeholder="Enter Title"
                                                            class="form-control" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Institute / Company</label>
                                                        <input type="text" placeholder="Enter Institute or Company"
                                                            class="form-control" name="org">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="text" placeholder="Enter Time" class="form-control"
                                                            name="time">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea placeholder="Enter Desc" style="resize: none;"
                                                            cols="95" rows="5" name="exp"></textarea>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" name="add-resume" class="btn btn-primary">Add
                                                        Resume</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Form Resume -->
                                    </div>
                                </div>
                            </div>
                            <!-- Update Resume -->
                            <?php
                            } else if (isset($_GET['portfoliosetting'])){
                            ?>
                            <!-- Update Portfolio -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Manage Portfolio</h4>
                                        <div class="cards">
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Type</th>
                                                            <th>Image</th>
                                                            <th>Name</th>
                                                            <th>Role</th>
                                                            <th>Link</th>
                                                            <th style="width: 40px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $q = "SELECT * from portfolio";
                                                        $r=mysqli_query($db,$q);
                                                        $c =1;
                                                        while($portfolio=mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><?=$portfolio['project_type']?></td>
                                                            <td><img src="../assets/img/portfolio/<?=$portfolio['project_pic']?>"
                                                                    style="width:75px" height="75px" /></td>
                                                            <td><?=$portfolio['project_name']?></td>
                                                            <td><?=$portfolio['project_role']?></td>
                                                            <td><a href="<?=$portfolio['project_link']?>"
                                                                    target="_blank">Open
                                                                    Link</a></td>
                                                            <td>
                                                                <a
                                                                    href="../include/editportfolio.php?id=<?=$portfolio['id']?>">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="../include/deleteportfolio.php?id=<?=$portfolio['id']?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $c++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Form Portfolio -->
                                        <div class="row">
                                            <form role="form" action="../include/admin.php" method="post"
                                                enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Select Type</label><br>
                                                        <select name="type" class="form-control">
                                                            <option value="Web Design">Web Design</option>
                                                            <option value="Website">Website</option>
                                                            <option value="UI/UX Design">UI/UX Design</option>
                                                            <option value="Design">Design</option>
                                                            <option value="Animatoion">Animation</option>
                                                        </select>
                                                    </div>
                                                    <!-- Project Image -->
                                                    <div class="form-group">
                                                        <label>Project Image</label>
                                                        <input type="file" class="form-control" name="project_pic">
                                                    </div>
                                                    <!-- Project Image -->
                                                    <!-- Project Name -->
                                                    <div class="form-group">
                                                        <label>Project Name</label>
                                                        <input type="text" placeholder="Enter Project Name"
                                                            class="form-control" name="project_name">
                                                    </div>
                                                    <!-- Project Name -->
                                                    <!-- Project Description -->
                                                    <div class="form-group">
                                                        <label>Project Description</label>
                                                        <textarea placeholder="Enter Project Desc"
                                                            name="project_desc"></textarea>
                                                    </div>
                                                    <!-- Project Description -->
                                                    <!-- Project Date -->
                                                    <div class="form-group">
                                                        <label>Project Date</label>
                                                        <input type="text" placeholder="Enter Project Date"
                                                            class="form-control" name="project_date">
                                                    </div>
                                                    <!-- Project Date -->
                                                    <!-- Project Role -->
                                                    <div class="form-group">
                                                        <label>Project Role</label>
                                                        <input type="text" placeholder="Enter Project Role"
                                                            class="form-control" name="project_role">
                                                    </div>
                                                    <!-- Project Role -->
                                                    <!-- Project Link -->
                                                    <div class="form-group">
                                                        <label>Project Link</label>
                                                        <input type="text" placeholder="Enter Project Link"
                                                            class="form-control" name="project_link">
                                                    </div>
                                                    <!-- Project Link -->
                                                    <!-- Project Name Link -->
                                                    <div class="form-group">
                                                        <label>Project Link Name</label>
                                                        <input type="text" placeholder="Enter Project Link Name"
                                                            class="form-control" name="project_linkname">
                                                    </div>
                                                    <!-- Project Name Link -->
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" name="add-project" class="btn btn-primary">Add
                                                        Project</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Form Portfolio -->
                                    </div>
                                </div>
                            </div>
                            <!-- Update Portfolio -->
                            <?php
                            } else if (isset($_GET['contactsetting'])){
                            ?>
                            <!-- Update Contact -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Update Contact</h4>
                                        <form role="form" action="../include/admin.php" method="post">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="contact_address"
                                                        value="<?=$user_data['address']?>" placeholder="Enter address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="contact_email"
                                                        value="<?=$user_data['email']?>" placeholder="Enter Email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input type="text" class="form-control" name="contact_mobile"
                                                        value="<?=$user_data['mobile']?>" placeholder="Enter mobile">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="update-contact" class="btn btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Update Contact -->
                            <!-- Update Social Media -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Update Social Media</h4>
                                        <form role="form" action="../include/admin.php" method="post">
                                            <div class="card-body">
                                                <!-- Facebook -->
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" class="form-control" name="facebook"
                                                        value="<?=$user_data['facebook']?>"
                                                        placeholder="Enter Username">
                                                </div>
                                                <!-- Facebook -->
                                                <!-- Instagram -->
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" class="form-control" name="instagram"
                                                        value="<?=$user_data['instagram']?>"
                                                        placeholder="Enter username">
                                                </div>
                                                <!-- Instagram -->
                                                <!-- Linkedin -->
                                                <div class="form-group">
                                                    <label>Linkedin</label>
                                                    <input type="text" class="form-control" name="linkedin"
                                                        value="<?=$user_data['linkedin']?>"
                                                        placeholder="Enter username">
                                                </div>
                                                <!-- Linkedin -->
                                                <!-- Github -->
                                                <div class="form-group">
                                                    <label>Github</label>
                                                    <input type="text" class="form-control" name="github"
                                                        value="<?=$user_data['github']?>" placeholder="Enter username">
                                                </div>
                                                <!-- Github -->
                                                <!-- Behance -->
                                                <div class="form-group">
                                                    <label>Behance</label>
                                                    <input type="text" class="form-control" name="behance"
                                                        value="<?=$user_data['behance']?>" placeholder="Enter username">
                                                </div>
                                                <!-- Behance -->
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="update-socialmedia"
                                                    class="btn btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Update Social Media -->
                            </div>
                            <?php
                            } else if (isset($_GET['seosetting'])){
                            ?>
                            <!-- Update SEO -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Update SEO</h4>
                                        <form role="form" action="../include/admin.php" method="post"
                                            enctype="multipart/form-data">
                                            <img src="../assets/img/<?=$user_data['siteicon']?>" class="col-3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Siteicon</label>
                                                    <input type="file" class="form-control" name="siteicon">
                                                </div>
                                                <div class="form-group">
                                                    <label>Page Title</label>
                                                    <input type="text" class="form-control" name="page_title"
                                                        value="<?=$user_data['page_title']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter Keywords (separte with ,)</label>
                                                    <input type="text" class="form-control" name="keywords"
                                                        value="<?=$user_data['keywords']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                        value="<?=$user_data['description']?>">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="update-seo" class="btn btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Update SEO -->
                            <?php
                            } else if (isset($_GET['accountsetting'])){
                            ?>
                            <!-- Update Account -->
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">Update Account Setting</h4>
                                        <form role="form" action="../include/admin.php" method="post"
                                            enctype="multipart/form-data">
                                            <img src="../assets/img/<?=$user_data['admin_profile']?>" class="col-3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Profile Picture</label>
                                                    <input type="file" class="form-control" name="profilepic">
                                                </div>
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="fullname"
                                                        value="<?=$user_data['fullname']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        value="<?=$user_data['username']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" name="password"
                                                        value="<?=$user_data['password']?>">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="update-account"
                                                    class="btn btn-primary">Update
                                                    Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Update Account -->
                            <?php
                            } else {
                            ?>
                            <div class="cards">
                                <div class="row">
                                    <div class="col">
                                        <form method="post" action="../include/admin.php">
                                            <!-- Switch Home -->
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="home" class="custom-control-input"
                                                    id="customSwitch1" <?php
                                                    if($user_data['home_section']){
                                                    echo "checked";
                                                    }
                                                    ?>>
                                                <label class="custom-control-label" for="customSwitch1">Home
                                                    Section</label>
                                            </div>
                                            <!-- Switch Home -->
                                            <!-- Switch About -->
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="about" class="custom-control-input"
                                                    id="customSwitch2" <?php
                                                    if($user_data['about_section']){
                                                    echo "checked";
                                                    }
                                                    ?>>
                                                <label class="custom-control-label" for="customSwitch2">About
                                                    Section</label>
                                            </div>
                                            <!-- Switch About -->
                                            <!-- Switch Resume -->
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="resume" class="custom-control-input"
                                                    id="customSwitch3" <?php
                                                    if($user_data['resume_section']){
                                                    echo "checked";
                                                    }
                                                    ?>>
                                                <label class="custom-control-label" for="customSwitch3">Resume
                                                    Section</label>
                                            </div>
                                            <!-- Switch Resume -->
                                            <!-- Switch Portfolio -->
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="portfolio" class="custom-control-input"
                                                    id="customSwitch4" <?php
                                                    if($user_data['portfolio_section']){
                                                    echo "checked";
                                                    }
                                                    ?>>
                                                <label class="custom-control-label" for="customSwitch4">Portfolio
                                                    Section</label>
                                            </div>
                                            <!-- Switch Portfolio -->
                                            <!-- Switch Contact -->
                                            <div
                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" name="contact" class="custom-control-input"
                                                    id="customSwitch5" <?php
                                                    if($user_data['contact_section']){
                                                    echo "checked";
                                                    }
                                                    ?>>
                                                <label class="custom-control-label" for="customSwitch5">Contact
                                                    Section</label>
                                            </div>
                                            <!-- Switch Contact -->
                                            <input type="submit" class="btn btn-sm btn-primary" name="update-section"
                                                value="Save Changes">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                    }
                    ?>
                        </div>
                    </div>
                    <!-- Content -->
                </div>
            </div>
        </div>
</body>

</html>