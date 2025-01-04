<?php
  $page_title = 'Tempered Search';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php include_once('layouts/header.php'); ?>
<h1>Tempered Glass Searching</h1>

<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
    <form method="post" action="tempered_ajax.php" autocomplete="off" id="sug-form-tempered">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary">Find It</button>
            </span>
            <input type="text" id="sug_input" class="form-control" name="title"  placeholder="Search for tempered glass">
         </div>
         <div id="result" class="list-group"></div>
        </div>
    </form>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Sale Edit</span>
       </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="add_sale.php">
         <table class="table table-bordered">
           <thead>
            <th> Item </th>
            <th> Location </th>
            <th> Price </th>
            <th> Qty </th>
            <th> Total </th>
            <th> Date</th>
            <th> Action</th>
           </thead>
             <tbody  id="product_info_tempered"> </tbody>
         </table>
       </form>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
