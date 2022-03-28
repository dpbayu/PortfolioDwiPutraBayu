<?php
    include '../include/db.php';
    $data = mysqli_query($db, "SELECT * FROM portfolio WHERE id = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);
    $project_type = $r['project_type'];
    $project_name = $r['project_name'];
    $project_pic = $r['project_pic'];
    $project_desc = $r['project_desc'];
    $project_date = $r['project_date'];
    $project_role = $r['project_role'];
    $project_link = $r['project_link'];
    $project_linkname = $r['project_linkname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ionicons -->
    <link rel="shortcut icon" href="../assets/img/1636622810codesvein.png">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/css/styleedit.css">
    <link rel="stylesheet" href="../admin/assets/css/responsivestyleedit.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Edit Portfolio</title>
</head>

<body style="margin: 20px;">
    <!-- Update Portfolio -->
    <div class="cards">
        <div class="row">
            <div class="col">
                <h4 class="card-title">Edit Portfolio</h4>
                <!-- Form Portfolio -->
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <label>Select Type</label><br>
                            <select name="project_type" class="form-control">
                                <option value="Web Design">Web Design</option>
                                <option value="Website">Website</option>
                                <option value="UI / UX Design">UI / UX Design</option>
                                <option value="Design">Design</option>
                                <option value="Animatoion">Animation</option>
                            </select>
                        </div>
                        <!-- Project Image -->
                        <div class="form-group col-12">
                            <label>Project Image</label>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $project_pic?>">
                            <input type="file" class="form-control" name="project_pic">
                            <img src="../assets/img/portfolio/<?php echo $project_pic?>"
                                style="width: 400px; height: 250px; margin:10px">
                        </div>
                        <!-- Project Image -->
                        <!-- Project Name -->
                        <div class="form-group col-12">
                            <label>Project Name</label>
                            <input type="text" class="form-control" value="<?php echo $project_name?>"
                                name="project_name">
                        </div>
                        <!-- Project Name -->
                        <!-- Project Description -->
                        <div class="form-group col-12">
                            <label>Project Description</label><br>
                            <textarea style="resize: none;" cols="160" rows="4"
                                name="project_desc"><?php echo $project_desc?></textarea>
                        </div>
                        <!-- Project Description -->
                        <!-- Project Date -->
                        <div class="form-group col-12">
                            <label>Project Date</label>
                            <input type="text" class="form-control" value="<?php echo $project_date?>"
                                name="project_date">
                        </div>
                        <!-- Project Date -->
                        <!-- Project Role -->
                        <div class="form-group col-12">
                            <label>Project Role</label>
                            <input type="text" class="form-control" value="<?php echo $project_role?>"
                                name="project_role">
                        </div>
                        <!-- Project Role -->
                        <!-- Project Link -->
                        <div class="form-group col-12">
                            <label>Project Link</label>
                            <input type="text" class="form-control" value="<?php echo $project_link?>"
                                name="project_link">
                        </div>
                        <!-- Project Link -->
                        <!-- Project Name Link -->
                        <div class="form-group col-12">
                            <label>Project Link Name</label>
                            <input type="text" class="form-control" value="<?php echo $project_linkname?>"
                                name="project_linkname">
                        </div>
                        <!-- Project Name Link -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="kirim" value="update" class="btn btn-primary">Edit
                            Portfolio</button>
                        <a href="../admin/index.php?portfoliosetting=true" style="margin-left: 50px;">Back About</a>
                    </div>
                </form>
                <!-- Form Portfolio -->
            </div>
        </div>
    </div>
    <!-- Update Portfolio -->
</body>

</html>

<?php
if(isset($_POST['kirim'])){
    $project_type = $_POST['project_type'];
    $project_name = $_POST['project_name'];
    $project_pic = $_FILES['project_pic']['name'];
    $project_desc = $_POST['project_desc'];
    $project_date = $_POST['project_date'];
    $project_role = $_POST['project_role'];
    $project_link = $_POST['project_link'];
    $project_linkname = $_POST['project_linkname'];
    if($project_pic !=''){
        move_uploaded_file($_FILES['project_pic']['tmp_name'],"../assets/img/portfolio/$project_pic");
        $update = mysqli_query($db, "UPDATE portfolio SET
        project_type = '".$project_type."',
        project_name = '".$project_name."',
        project_pic = '".$project_pic."',
        project_desc = '".$project_desc."',
        project_date = '".$project_date."',
        project_role = '".$project_role."',
        project_link = '".$project_link."',
        project_linkname = '".$project_linkname."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'Berhasil Update';
        } else {
            echo 'Gagal Update';
        }
    }  else {
        $update = mysqli_query($db, "UPDATE portfolio SET
        project_type = '".$project_type."',
        project_name = '".$project_name."',        
        project_desc = '".$project_desc."',
        project_date = '".$project_date."',
        project_role = '".$project_role."',
        project_link = '".$project_link."',
        project_linkname = '".$project_linkname."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo "<script>alert('Data berhasil di update!');history.go(-1);</script>";
        }else{
            echo "<script>alert('Data gagal di update!');history.go(-1);</script>";
        }
    }
}
?>