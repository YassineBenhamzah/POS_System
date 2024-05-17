<?php include('includes/header.php') ?>
                    <div class="container-fluid px-4">
                        <div class="card mt-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="mb-0">Customers
                                    <a href="customers-create.php" class="btn btn-primary float-end">Add Customer</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php alerMessage(); ?>
                                <?php
                                     $customers = getAll('customers');
                                     if(!$customers){
                                        echo '<h4>something went wrong</h4>';
                                        return false;
                                     }
                                      if(mysqli_num_rows($customers) > 0){  
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php foreach($customers as $item): ?>
                                            <tr>    
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['name'] ?></td>
                                                <td><?= $item['email'] ?></td>
                                                <td><?= $item['phone'] ?></td>
                                                <td>
                                                    <?php
                                                        if($item['status'] == 1){
                                                            echo '<span class="badge bg-danger">Hidden</span>';
                                                        }else{
                                                            echo '<span class="badge bg-success">Visible</span>';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="customers-edit.php?id=<?= $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="customers-delete.php?id=<?= $item['id']; ?>"
                                                     class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete this')">Delete</a>
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