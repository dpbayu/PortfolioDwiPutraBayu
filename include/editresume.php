<?php
    include '../include/db.php';
    $data = mysqli_query($db, "SELECT * FROM resume WHERE id = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);
    $type = $r['type'];
    $title = $r['title'];
    $org = $r['org'];
    $time = $r['time'];
    $exp = $r['exp'];
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
    <title>Edit Resume</title>
</head>

<body style="margin: 20px;">
    <!-- Update Skill -->
    <div class="cards">
        <div class="row">
            <div class="col">
                <div class="card-header">
                    <h4 class="card-title">Edit Resume</h4>
                </div>
                <!-- Form Resume -->
                <form role="form" method="post">
                    <div class="card-body">
                        <div class="form-group col-6">
                            <label>Select Type</label><br>
                            <select name="type" class="form-control">
                                <option value="e">Education</option>
                                <option value="p">Professional</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Title</label>
                            <input type="text" class="form-control" value="<?php echo $title?>" name="title">
                        </div>
                        <div class="form-group col-6">
                            <label>Institute / Company</label>
                            <input type="text" class="form-control" value="<?php echo $org?>" name="org">
                        </div>
                        <div class="form-group col-6">
                            <label>Time</label>
                            <input type="text" class="form-control" value="<?php echo $time?>" name="time">
                        </div>
                        <div class="form-group col-12">
                            <label>Description</label><br>
                            <textarea placeholder="Enter Desc" style="resize: none;" cols="95" rows="4" name="exp"><?php echo $exp?></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="kirim" value="update" class="btn btn-primary">Edit Resume</button>
                        <a href="../admin/index.php?resumesetting=true" style="margin-left: 50px;">Back About</a>
                    </div>
                </form>
                <!-- Form Resume -->
            </div>
        </div>
    </div>
    <!-- Update Skill -->
</body>

</html>

<?php
if(isset($_POST['kirim'])){
    $type = $_POST['type'];
    $title = $_POST['title'];
    $org = $_POST['org'];
    $time = $_POST['time'];
    $exp = $_POST['exp'];
    
    if($type !=''){
        $update = mysqli_query($db, "UPDATE resume SET
        type = '".$type."',
        title = '".$title."',
        org = '".$org."',
        time = '".$time."',
        exp = '".$exp."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'Berhasil Update';
        } else {
            echo 'Gagal Update';
        }
    }
}
?>