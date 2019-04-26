<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include 'nav_bar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Data List</div>
                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <td>Delete</td>
                        </tr>
                        <?php
                        include 'config.php';
                        $myObj=new User();
                        $myVar=$myObj->getData ();
                        foreach ($myVar as $row):
                            ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo date('D-m-Y : h:i:s A', strtotime ($row['created_at'])) ?></td>
                            <td><a href="#" data-toggle="modal" data-target="#<?php echo $row['id'] ?>">Edit</a></td>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo $row['name'] ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="post_update.php">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <div class="form-group">
                                                    <input value="<?php echo $row['name'] ?>" type="text" name="name" class="form-control" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="address" class="form-control" placeholder="Address"><?php echo $row['address'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-lg">Save Change</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td><a href="get_delete.php?myId=<?php echo $row['id'] ?>">Delete</a></td>
                        </tr>

                        <?php
                        endforeach;
                        ?>
                    </table>


                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">New Insert Data</div>
                <div class="panel-body">
                    <form method="post" action="post_insert.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Save Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>