<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="boostrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel panel-heading">My Data List</div>
                <div class="panel panel_body">
                    <table class="table">
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Edit</td>
                            <td>delete</td>
                        </tr>
                        <?php
                        include 'my_db.php';
                        $myData=new Product();
                        $myFile=$myData->getMyData();
                        foreach ($myFile as $row):
                            ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><a href="#" data-toggle="modal" data-target="#<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><?php echo $row['name']?></h4>
                                            </div>
                                            <div class="modal-body">
                                               <form method="post" action="post-update.php">
                                                   <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                                   <div class="form-group">
                                                       <label for="name" class="control-label">Name</label>
                                                       <input value="<?php echo $row['name']?>" type="text" id="name" class="form-control" name="name">
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="price" class="control-label">Price</label>
                                                       <input value="<?php echo $row['price']?>" type="number" id="price" name="price" class="form-control">
                                                   </div>
                                                   <div class="form-group"></div>
                                                   <button type="submit" class="btn btn-primary btn-block">Save</button>
                                               </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td><a href="get_delete.php?id=<?php echo $row['id']?>">Delete</a></td>

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
                <div class="panel-heading">New Data</div>
                <div class="panel-body">
                    <form method="post" action="post_new.php">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>
                            <input type="number" id="price" name="price" class="form-control">
                        </div>
                        <div class="form-group"></div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="boostrap/js/jQuery.js"></script>
<script src="boostrap/js/bootstrap.js"></script>
</body>
</html>