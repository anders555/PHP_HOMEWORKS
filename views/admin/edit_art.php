<?php 
$sql = "SELECT * FROM pages WHERE id =".$_GET['id'];
$res = mysqli_query($connection, $sql);
$page = mysqli_fetch_assoc($res);

if($page['active']){
    $isActive = 'checked';
}else {
    $isActive = '';
}
debug($page);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['active'])){
        $active = 1;
    }else{
        $active = 0;
    }
    $sql = "UPDATE pages SET name = '{$_POST['name']}', content = '{$_POST['content']}', active = '{$active}' WHERE id =".$_GET['id'];
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
                <input type="text" class="form-control" name="name" value="<?=$page['name'] ?>" required>
            </div>
            <div class="form-group">
                <label >Статья</label>
                <textarea class="form-control" name="content"  required><?=$page['content'] ?></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox"  name="active" <?=$isActive ?>>
                <label class="form-check-label" for="active">Показывать на сайте</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->