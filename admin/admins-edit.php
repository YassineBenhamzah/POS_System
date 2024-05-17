<?php include('includes/header.php') ?>
                    <div class="container-fluid px-4">
                        <div class="card mt-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="mb-0">Edit Admin
                                    <a href="admins.php" class="btn btn-danger float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php alerMessage(); ?>
                                <form action="code.php" method="POST">
                                    <?php
                                        if(isset($_GET['id'])){
                                            if($_GET['id'] != ''){
                                                $adminId = $_GET['id'];
                                            }else{
                                                echo '<h4>no id found</h4>';
                                                return false;
                                            }
                                        }else{
                                            echo '<h4>no id given in params</h4>';
                                            return false;
                                        }
                                        
                                        $adminData = getById('admins' , $adminId);
                                        if($adminData){
                                            if($adminData['status'] == 200){
                                                ?>
                                                <input type="hidden" name="adminId" value="<?= $adminData['data']['id']; ?>">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Name</label>
                                                        <input type="text" required name="name" value="<?= $adminData['data']['name']; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="">Email</label>
                                                        <input type="email" required name="email" value="<?= $adminData['data']['email']; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="">Password</label>
                                                        <input type="password"  name="password" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="">phone</label>
                                                        <input type="number" required name="phone" value="<?= $adminData['data']['phone']; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Is Ban</label>
                                                        <br>
                                                        <input type="checkbox"  name="is_ban" <?= $adminData['data']['is_ban'] == true ?'checked' : ''; ?> style="width: 30px;height:30px;" >
                                                    </div>
                                                    <div class="col-md-3 mb-3 text-end">
                                                        <button type="submit" name="updateAdmin" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                                <?php
                                            }else{
                                                echo '<h5>'.$adminData['message'].'</h5>';
                                            }
                                        }else{
                                            echo '<h4>something went wrong</h4>';
                                                return false;
                                        }
                                    ?>
                                    
                                </form>
                            </div>
                        </div>
                    </div>

<?php include('includes/footer.php') ?>