<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <?php
                        if($this->session->flashdata('status')) :
                    ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('status') ?>
                    </div>
                    <?php
                        endif;
                    ?>
                    <h3>Database test
                        <a 
                            href="<?php echo base_url('employee/add'); ?>"
                            class="btn btn-primary float-end"
                        >
                            Add empregado
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Editar</th>
                                <th>Remover</th>
                                <th>Confirmar Remoção</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employee as $row) : ?>
                            <tr>
                                <th><?php echo $row -> id; ?></th>
                                <th><?= $row -> firstName ?></th>
                                <th><?= $row -> lastName ?></th>
                                <th><?= $row -> phoneNum ?></th>
                                <th><?= $row -> emailID ?></th>
                                <td>
                                    <a href="<?php echo base_url('employee/edit/'.$row -> id) ?>" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('employee/delete/'.$row -> id) ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger confirm-delete" value="<?= $row -> id; ?>">Confirme Delete</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>