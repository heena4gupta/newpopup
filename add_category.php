<?php
include "connection.php";
?>
<?php
include 'adminheader.php';
?>

<!doctype html>
<html lang="en">
<head>
<style>
    hr {
        margin-top: 60px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }

    body {
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }

    .panel {
        margin: 20px 20px;
        background-color: #fff;
        border: 1px solid #d0caca;
        border-radius: 6px;
        -webkit-box-shadow: 0 1px 1px #555;
        box-shadow: 0 1px 1px #555;
        text-align: center;
    }
    .panel-heading {
        font-size: 30px;
        font-weight: bold;
        letter-spacing: 0.025em;
        height: 80px;
        line-height: 20px;
        text-align: center;
    }



</style>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head><hr>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <form action="add_category_process.php" method="post">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"><h2>Add Category</h2></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name" placeholder="Enter the category" class="form-control" required/>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <a href="category.php" class="btn btn-danger btn-sm">CANCEL</a>
                         <button type="submit" name="add" value="Add" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Add</button>
</div>
                    </div>
					
					 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Category added sucessfully</p>
        </div>
        <div class="modal-footer">
         <a href="category.php"  class="btn btn-primary">close</a>
      <!----  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>---->
                    
</div>
      </div>
      
    </div>
  </div>
                </div>
        </div>
        </form>
    </div>