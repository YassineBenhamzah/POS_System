<?php include('includes/header.php') ?>
                    <div class="container-fluid px-4">
                        <div class="card mt-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="mb-0">Admin/Staf
                                    <a href="admins-create.php" class="btn btn-primary float-end">Add Admin</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php alerMessage(); ?>
                                <?php
                                     $admins = getAll('admins');
                                     if(!$admins){
                                        echo '<h4>something went wrong</h4>';
                                        return false;
                                     }
                                      if(mysqli_num_rows($admins) > 0){  
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>is ban</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php foreach($admins as $adminItem): ?>
                                            <tr>    
                                                <td><?= $adminItem['id'] ?></td>
                                                <td><?= $adminItem['name'] ?></td>
                                                <td><?= $adminItem['email'] ?></td>
                                                <td>
                                                    <?php
                                                        if($adminItem['is_ban'] == 1){
                                                            echo '<span class="badge bg-danger">banned</span>';
                                                        }else{
                                                            echo '<span class="badge bg-success">active</span>';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="admins-edit.php?id=<?= $adminItem['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="admins-delete.php?id=<?= $adminItem['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                    }else{
                                     ?>
                                    <tr>
                                     <td class="mb-0">No records</td>
                                    </tr>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>

<?php include('includes/footer.php') ?>