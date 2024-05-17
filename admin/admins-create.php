<?php include('includes/header.php') ?>
                    <div class="container-fluid px-4">
                        <div class="card mt-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="mb-0">Add Admin
                                    <a href="admins.php" class="btn btn-danger float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php alerMessage(); ?>
                                <form action="code.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" required name="name" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Email</label>
                                            <input type="email" required name="email" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Password</label>
                                            <input type="password" required name="password" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">phone</label>
                                            <input type="number" required name="phone" class="form-control">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="">Is Ban</label>
                                            <input type="checkbox"  name="is_ban" style="width: 30px;height:30px;" >
                                        </div>
                                        <div class="col-md-3 mb-3 text-end">
                                            <button type="submit" name="saveAdmin" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

<?php include('includes/footer.php') ?>