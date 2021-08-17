<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['active'])){
        $active = 1;
    }else{
        $active = 0;
    }
    $sql = "INSERT INTO pages (name, content, active) VALUES ('{$_POST['name']}', '{$_POST['content']}', {$active})";
    $res = mysqli_query($connection, $sql);
    debug($sql);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div>
        <form method="post">
            <div class="form-group">
                <label>Название статьи</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label >Статья</label>
                <textarea class="form-control" name="content" required></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox"  name="active">
                <label class="form-check-label" for="active">Показывать на сайте</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->