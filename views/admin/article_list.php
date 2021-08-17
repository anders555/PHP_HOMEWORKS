<?php
/**
 * @var $connection array
 */
//debug();
$artPerPage = 10;
$curPage = $_GET['page'] ?? 1;
if($curPage< 1){
    $curPage =1;
}
$sql = "SELECT count(id) as count from pages";
$res = mysqli_query($connection, $sql);
$countArt = (mysqli_fetch_assoc($res))['count'];
$pageCount = ceil($countArt/$artPerPage);

$offset = $artPerPage *($curPage -1);

$sql = "SELECT * FROM pages LIMIT {$offset} , 10";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Статьи</h1>
    <a href="/admin?type=add_art">Добавить статью</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 274px;">id
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending" style="width: 408px;">
                                        Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 202px;">
                                        Content
                                    </th> <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 202px;">
                                        Active
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 202px;">
                                        Created at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 202px;">
                                        Action
                                    </th>
                                    </th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">id</th>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Content</th>
                                    <th rowspan="1" colspan="1">Active</th>
                                    <th rowspan="1" colspan="1">Created at</th>
                                    <th rowspan="1" colspan="1">Action</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                <?php for ($i=0; $i<count($pages); $i++):
                                    $page = $pages[$i];
                                ?>
                                <tr>
                                    <td><?=$page['id']?></td>
                                    <td><?=$page['name']?></td>
                                    <td><?=$page['content']?></td>
                                    <td><?=$page['active']?></td>
                                    <td><?=$page['created_at']?></td>
                                    <td>
                                        <a href="?type=edit_art&id=<?=$page['id']?>">Редактировать</a>
                                    </td>
                                </tr>
                                <?php endfor; ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1
                                to 10 of <?=$countArt?> entries -->
                            </div>
                        </div>
                        <?php if($countArt > $artPerPage): ?>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a
                                                href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                    <?php for ($i=1; $i<=$pageCount; $i++):?>
                                    <li class="paginate_button page-item active"><a href="<?=addGetParameterToUrl($_SERVER['REQUEST_URI'], 'page', $i)?>" aria-controls="dataTable"
                                                                                    data-dt-idx="<?=$i?>" tabindex="0"
                                                                                    class="page-link"><?=$i?></a></li>
                                    <?php endfor; ?>


                                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#"
                                                                                                      aria-controls="dataTable"
                                                                                                      data-dt-idx="7"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>