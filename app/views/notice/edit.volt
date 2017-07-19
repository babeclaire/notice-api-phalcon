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
       Update Notice
    </h1>
<?php echo $this->getContent(); ?>
<?php
    echo $this->tag->form(
        [
            "notice/save",
            "autocomplete" => "off",
            "class" => "form-horizontal"
        ]
    );
?>
<div class="form-group">
    <label for="fieldTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["title","class" => "form-control", "id" => "fieldTitle","required"=>"required"]) ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textArea(["description", "cols" => "4", "rows" => 10,"class" => "form-control", "id" => "fieldDescription","placeholder"=>"Describe your notice here...","required"=>"required"]) ?>
    </div>
</div>
<div class="form-group">
    <label for="fieldAuthor" class="col-sm-2 control-label">Author</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(["author","class" => "form-control", "id" => "fieldAuthor"]) ?>
        <?php echo $this->tag->hiddenField("id") ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->submitButton(["Update", "class" => "btn btn-default"]) ?>
    </div>
</div>
</div>
  </section><!-- content -->

<?php echo $this->tag->endForm(); ?>
