<?php
    include '../include/db.php';
    $data = mysqli_query($db, "SELECT * FROM interests WHERE id = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);
    $title_interest = $r['title_interest'];
    $icon_interest = $r['icon_interest'];
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
    <title>Edit Interest</title>
</head>

<body style="margin: 20px;">
    <!-- Update Interest -->
    <div class="cards">
        <div class="row">
            <div class="col">
                <h4 class="card-title">Edit Interests</h4>
                <!-- Form Interest -->
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <!-- Interest Icon -->
                        <div class="form-group col-12">
                            <label style="font-weight: 700;">Interest Icon</label>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $icon_interest?>">
                            <input type="file" class="form-control" name="icon_interest">
                            <img src="../assets/img/interest/<?php echo $icon_interest?>"
                                style="width: 100px; height: 100px; margin:10px">
                        </div>
                        <!-- Interest Icon -->
                        <!-- Title Interest -->
                        <div class="form-group col-12">
                            <label style="font-weight: 700;">Title Interest</label>
                            <input type="text" class="form-control" value="<?php echo $title_interest?>"
                                name="title_interest">
                        </div>
                        <!-- Title Interest -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="kirim" value="update" class="btn btn-primary">Edit Interest</button>
                        <a href="../admin/index.php?aboutsetting=true">Back About</a>
                    </div>
                </form>
                <!-- Form Interest -->
            </div>
        </div>
    </div>
    <!-- Update Interest -->
</body>

</html>

<?php
if(isset($_POST['kirim'])){
    $title_interest = $_POST['title_interest'];
    $icon_interest = $_FILES['icon_interest']['name'];
    if($icon_interest !=''){
        move_uploaded_file($_FILES['icon_interest']['tmp_name'],"../assets/img/interest/$icon_interest");
        $update = mysqli_query($db, "UPDATE interests SET
        title_interest = '".$title_interest."',
        icon_interest = '".$icon_interest."' 
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'Berhasil Update';
        } else {
            echo 'Gagal Update';
        }
    } else {
        $update = mysqli_query($db, "UPDATE interests SET
        title_interest = '".$title_interest."'
        WHERE id = '".$_GET['id']."'");
        if($update){
            echo "<script>alert('Data berhasil di update!');history.go(-1);</script>";
        }else{
            echo "<script>alert('Data gagal di update!');history.go(-1);</script>";
        }
    }
}
?>