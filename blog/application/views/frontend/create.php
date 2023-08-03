<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Database testeee
                        <a 
                            href="<?php echo base_url('employee'); ?>"
                            class="btn btn-primary float-end"
                        >
                            Retornar
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('employee/store'); ?>" method="POST">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstName" class="form-control">
                            <small><?php echo form_error('firstName'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastName" class="form-control">
                            <small><?php echo form_error('lastName'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" name="phoneNum" class="form-control">
                            <small><?php echo form_error('phoneNum'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Email ID</label>
                            <input type="text" name="emailID" class="form-control">
                            <small><?php echo form_error('emailID'); ?></small>
                        </div>

                        <div class="form-group">
                            <button type="subtmit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>