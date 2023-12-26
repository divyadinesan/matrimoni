<?php
$this->load->view('Admin/layouts/header');
?>


<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Matrimoni
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="<?php echo base_url('index.php/Admin_controller/adding_mat')?>" method="post" enctype="multipart/form-data">
                            	

                                <div class="form-group">
                                    <label>Matrimoni Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                  <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                  <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country">
                                </div>
                                  <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="no">
                                </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                                </div>
                               <div class="form-group">
                                    <label>Experience</label>
                                    <input type="text" class="form-control" name="exp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <input type="file" id="exampleInputFile" name="mtrimny_image">

                                </div>

                                <button type="submit" class="btn btn-info">ADD</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>


















<?php
$this->load->view('Admin/layouts/footer');
?>