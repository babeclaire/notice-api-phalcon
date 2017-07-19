<div class="container">
 <section id="content">
<?php echo $this->getContent(); ?>
<?php
    echo $this->tag->form(
        [
            "signup/create",
            "autocomplete" => "off",
            "class" => "form-horizontal"
        ]
    );
?>

  <h1>
       Sign up
    </h1>
<div class="form-group">
    <label for="fieldName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["name","class" => "form-control", "id" => "fieldName"]) ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["email", "class" => "form-control", "id" => "fieldEmail"]) ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldUsername" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["username","class" => "form-control", "id" => "fieldUsername"]) ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <?php echo $this->tag->passwordField(["password","class" => "form-control", "id" => "fieldPassword"]) ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->submitButton(["Sign up", "class" => "btn btn-default"]) ?>
    </div>
</div>
  </section><!-- content -->
</div><!-- container -->
<?php echo $this->tag->endForm(); ?>
