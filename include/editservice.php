<?php
    include '../include/db.php';
    $data = mysqli_query($db, "SELECT * FROM services WHERE id = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);
    $icon_service = $r['icon_service'];
    $title_service = $r['title_service'];
    $desc_service = $r['desc_service'];
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
    <title>Edit Service</title>
</head>

<body style="margin: 20px;">
    <!-- Update Service -->
    <div class="cards">
        <div class="row">
            <div class="col">
                <div class="card-header">
                    <h4 class="card-title">Edit Service</h4>
                </div>
                <!-- Form Service -->
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <!-- Service Icon -->
                        <div class="form-group col-6">
                            <label style="font-weight: 700;">Service Icon</label>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $icon_service?>">
                            <input type="file" class="form-control" name="icon_service">
                            <img src="../assets/img/service/<?php echo $icon_service?>"
                                style="width: 100px; height: 100px; margin:10px">
                        </div>
                        <!-- Service Icon -->
                        <!-- Title Service -->
                        <div class="form-group col-6">
                            <label style="font-weight: 700;">Title Service</label>
                            <input type="text" class="form-control" value="<?php echo $title_service?>"
                                name="title_service">
                        </div>
                        <!-- Title Service -->
                        <!-- Description Service -->
                        <div class="form-group col-6">
                            <label style="font-weight: 700;">Description Service</label>
                            <input type="text" class="form-control" value="<?php echo $desc_service?>"
                                name="desc_service">
                        </div>
                        <!-- Description Service -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="kirim" value="update" class="btn btn-primary">Edit Service</button>
                        <a href="../admin/index.php?aboutsetting=true" style="margin-left: 50px;">Back About</a>
                    </div>
                </form>
                <!-- Form Service -->
            </div>
        </div>
    </div>
    <!-- Update Service -->
</body>

</html>

<?php
if(isset($_POST['kirim'])){
    $title_service = $_POST['title_service'];
    $desc_service = $_POST['desc_service'];
    $icon_service = $_FILES['icon_service']['name'];
    
    if($icon_service !=''){
        move_uploaded_file($_FILES['icon_service']['tmp_name'],"../assets/img/service/$icon_service");
        $update = mysqli_query($db, "UPDATE services SET
        title_service = '".$title_service."',
        desc_service = '".$desc_service."',
        icon_service = '".$icon_service."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'Berhasil Update';
        } else {
            echo 'Gagal Update';
        }
    } else {
        $update = mysqli_query($db, "UPDATE services SET
        title_service = '".$title_service."',
        desc_service = '".$desc_service."'
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'Berhasil';
        }else{
            echo 'Gagal';
        }
    }
}
?>