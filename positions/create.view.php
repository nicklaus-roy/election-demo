<?php
    require('../layouts/master.view.php');
?>
    <br>
    <div class="container">
        <?php require('../layouts/breadcrumbs.view.php');?>
        <div class="card">
            <div class="card-header">
                Create a new Position
            </div>
            <div class="card-body">
                <form action="../positions/store.php" method="POST">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="Name">Name:</label>
                                <input type="text" class="form-control" name='name'>
                            </div>
                            <button class="btn btn-primary" type="submit" name='submit'>Create</button>                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    require('../layouts/footer.view.php');
?>
