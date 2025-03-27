<?php include("header.php"); ?>

<div class="container">
    <main class="main">
        <div class="row mb-4 mt-2">
            <div class="col-sm-8">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="col-sm-4 text-end">
                <a href="add.php">
                    <button type="button" class="btn btn-info add-new"><i class="bi bi-plus"></i> Add New</button>
                </a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry </td>
                    <td>Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </main>
</div>

<?php include("footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>