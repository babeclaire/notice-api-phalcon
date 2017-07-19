   <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Notice-Phalcon </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                       <?php 'Welcome '?>
                          <a>{{ link_to('notice', 'Notice') }}
                            </a>
                        </li>
                        <li>
                           <a>{{ link_to('users/logout', 'Logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
 <section id="content">
    <h1>
       Read Notice 
    </h1>
<?php echo $this->getContent(); ?>
<?php
    echo $this->tag->form(
        [
           
        ]
    );
?>
<div class="form-group">
    <label for="fieldTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["title","class" => "form-control","readonly"=>"true","id" => "fieldTitle","required"=>"required"]) ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textArea(["description", "cols" => "5","readonly"=>"true", "rows" => 15,"class" => "form-control", "id" => "fieldDescription","placeholder"=>"Describe your notice here...","required"=>"required"]) ?>
    </div>
</div>
</br>
<div class="form-group">
    <label for="fieldAuthor" class="col-sm-2 control-label">Author</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["author","class" => "form-control", "readonly"=>"true","id" => "fieldAuthor"]) ?>
        <?php echo $this->tag->hiddenField("id") ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldCreatedDate" class="col-sm-2 control-label">Created date</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["created_date","class" => "form-control", "readonly"=>"true","id" => "fieldCreatedDate"]) ?>
        <?php echo $this->tag->hiddenField("id") ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldupdated_date" class="col-sm-2 control-label">Modified date</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["updated_date","class" => "form-control", "readonly"=>"true","id" => "fieldupdated_date"]) ?>
    </div>
</div>
</div>
  </section><!-- content -->

<?php echo $this->tag->endForm(); ?>
