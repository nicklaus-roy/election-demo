<?php
    require('../layouts/master.view.php');
?>
    <br>
    <div class="container">
        <?php require('../layouts/breadcrumbs.view.php');?>
        <div class="card">
            <div class="card-header">
                Update Position
            </div>
            <div class="card-body">
                <form action="../positions/update.php" method="POST">
                    <input type="hidden" name='id' value="<?=$position->id?>">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="Name">Name:</label>
                                <input type="text" class="form-control" name='name' value='<?=$position->name?>'>
                            </div>
                            <button class="btn btn-primary" type="submit" name='submit'>Update</button>                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    require('../layouts/footer.view.php');
?>
