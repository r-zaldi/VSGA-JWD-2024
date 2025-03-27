<?php include("header.php"); ?>


<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include("sidebar.php") ?>


        <!-- Main Content -->
        <div class="col-md-10" id="content">
            <div class="row mb-4 mt-2">
                <div class="col-sm-8">
                    <h2>Data Anggota</h2>
                </div>
                <div class="col-md-4 text-end">
                    <a href="add.php">
                        <button type="button" class="btn btn-info add-new"><i class="bi bi-plus"></i> Add New</button>
                    </a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Anggota</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                </tbody>
            </table>
        </div>
    </div>
</div>