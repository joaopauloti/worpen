<?php
$title_page = "Hello world";
include PATH_template.'header.php';
?>

<section class="section text-center bg-black">
  <div class="area">
    <h1><?= TEXT_header_title ?></h1>
    <p><?= TEXT_header_content ?></p>
    <br>
  </div>
</section>

<section class="section">
  <div class="area">
    <div class="row">
      <div class="col-sm-4">
        <h4><span class="glyphicon glyphicon-thumbs-up"></span> &nbsp; <?= TEXT_box_title ?></h4>
        <p><?= TEXT_box_content ?></p>
        <br><br>
      </div>
      <div class="col-sm-4">
        <h4><span class="glyphicon glyphicon-bell"></span> &nbsp; <?= TEXT_box_title ?></h4>
        <p><?= TEXT_box_content ?></p>
        <br><br>
      </div>
      <div class="col-sm-4">
        <h4><span class="glyphicon glyphicon-comment"></span> &nbsp; <?= TEXT_box_title ?></h4>
        <p><?= TEXT_box_content ?></p>
        <br><br>
      </div>
      <div class="col-sm-4">
        <h4><span class="glyphicon glyphicon-education"></span> &nbsp; <?= TEXT_box_title ?></h4>
        <p><?= TEXT_box_content ?></p>
        <br><br>
      </div>
      <div class="col-sm-4">
        <h4><span class="glyphicon glyphicon-lamp"></span> &nbsp; <?= TEXT_box_title ?></h4>
        <p><?= TEXT_box_content ?></p>
        <br><br>
      </div>
      <div class="col-sm-4">
        <h4><span class="glyphicon glyphicon-king"></span> &nbsp; <?= TEXT_box_title ?></h4>
        <p><?= TEXT_box_content ?></p>
        <br><br>
      </div>
    </div>
  </div>
</section>

<?php
include PATH_template.'footer.php';