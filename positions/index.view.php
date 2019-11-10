<?php
    require('../layouts/master.view.php');
?>
    <br>
    <div class="container">
        <?php require('../layouts/breadcrumbs.view.php');?>
        <div class="card">
            <div class="card-header">
                Positions
            </div>
            <div class="card-body">
                <a href='../positions/create.php' class="btn btn-primary">Add a Position</a>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($positions as $position): ?>
                            <tr>
                                <td><?=$position->id?></td>
                                <td><?=$position->name?></td>
                                <td>
                                    <a href="../positions/edit.php?id=<?=$position->id?>">Edit</a>
                                    |
                                    <a href="#" onclick='confirmDelete("../positions/delete.php?id=<?=$position->id?>")'>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>
    function confirmDelete(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        })
    }
</script>
<?php
    require('../layouts/footer.view.php');
?>
