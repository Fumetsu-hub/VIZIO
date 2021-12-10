<!doctype html>
<html lang="en">
  <head>
    <title>test</title>

    <link rel="stylesheet" href="./bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3/css/bootstrap-theme.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="./bootstrap-5.1.3/js/rightde.js"></script>

  </head>
  <body>
  <?php
  
include('./utilitaire/barre_de_navigation.php');

  ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="./bootstrap-5.1.3/js/jquery.min.js"></script>
<script src="./bootstrap-5.1.3/js/bootstrap.min.js"></script>

  </body>
</html>