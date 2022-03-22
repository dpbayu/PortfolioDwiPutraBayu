<?php
    include '../include/db.php';
    $data = mysqli_query($db, "SELECT * FROM skills WHERE id = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);
    $skill_name = $r['skill_name'];
    $skill_level = $r['skill_level'];
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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Edit Skill</title>
</head>

<body style="margin: 20px;">
    <!-- Update Skill -->
    <div class="cards">
        <div class="row">
            <div class="col">
                <div class="card-header">
                    <h4 class="card-title">Edit Skill</h4>
                </div>
                <!-- Form Skill -->
                <form role="form" method="post">
                    <div class="card-body">
                        <!-- Skill Name -->
                        <div class="form-group col-6">
                            <label style="font-weight: 700;">Skill Name</label>
                            <input type="text" class="form-control" value="<?php echo $skill_name?>" name="skill_name">
                        </div>
                        <!-- Skill Name -->
                        <!-- Skill Level -->
                        <div class="form-group col-6">
                            <label style="font-weight: 700;">Skill Level</label>
                            <input type="range" min="1" max="100" class="form-control" value="<?php echo $skill_level?>"
                                name="skill_level">
                            <input type="text" min="1" max="100" class="form-control" value="<?php echo $skill_level?>"
                                name="skill_level">
                        </div>
                        <!-- Skill Level -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="kirim" value="update" class="btn btn-primary">Edit Skill</button>
                        <a href="../admin/index.php?aboutsetting=true" style="margin-left: 50px;">Back About</a>
                    </div>
                </form>
                <!-- Form Skill -->
            </div>
        </div>
    </div>
    <!-- Update Skill -->
</body>

</html>

<?php
if(isset($_POST['kirim'])){
    $skill_name = $_POST['skill_name'];
    $skill_level = $_POST['skill_level'];
    
    if($skill_name !=''){
        $update = mysqli_query($db, "UPDATE skills SET
        skill_name = '".$skill_name."',
        skill_level = '".$skill_level."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo "<script>alert('Data berhasil di update!');history.go(-1);</script>";
        } else {
            echo "<script>alert('Data gagal di update!');history.go(-1);</script>";
        }
    }
}
?>