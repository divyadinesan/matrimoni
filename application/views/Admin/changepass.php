<?php
$this->load->view('Admin/layouts/header');
?>
                        <?php
                        foreach($change as $row)
                        ?>
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           My Profile
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 <form role="form" action="<?php echo base_url('index.php/Admin_controller/passupdate')?>" method="post">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" readonly name="Email"  class="form-control" id="exampleInputPassword1" value="<?php echo $row->Email?>" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="password"  class="form-control" id="exampleInputEmail1" value="<?php echo $row->Password?>">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Changepassword</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>


                               
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

   <!--  <header class="panel-heading">
                            Change Password
                        </header>
                        <?php
                        foreach($change as $row)
                        	?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="<?php echo base_url('index.php/Admin_controller/passupdate')?>" method="post">
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" readonly name="Email"  class="form-control" id="exampleInputPassword1" value="<?php echo $row->Email?>" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="password"  class="form-control" id="exampleInputEmail1" value="<?php echo $row->Password?>">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Changepassword</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>


                               
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>

 -->










<?php
$this->load->view('Admin/layouts/footer');
?>