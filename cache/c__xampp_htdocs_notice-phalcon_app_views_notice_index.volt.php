      <?php echo $this->getContent(); ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Notice-Phalcon </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                       <?php 'Welcome '?>
                          <a><?= $this->tag->linkTo(['notice', 'Notice']) ?>
                            </a>
                        </li>
                        <li>
                           <a><?= $this->tag->linkTo(['users/logout', 'Logout']) ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card">
                            <div class="header">
                            <?php
                         echo $this->tag->form(
                             [
                                 "notice/search",
                                 "autocomplete" => "off",
                                 "class" => "form-horizontal"
                             ]
                         );
                     ?>
                             <?php echo $this->tag->textField(["id", "type" => "number", "class" => "", "id" => "fieldId"]) ?>
                            <li class="next"><?php echo $this->tag->linkTo(["notice/add", "Add notice "]); ?></li>
                            </br>
                             <?php foreach ($page->items as $notice): ?>
                                <h4 class="title"><?php echo $notice->title?></h4>
                                <p class="category"><?php echo $notice->description?></p>
                                <?php echo $this->tag->linkTo(["notice/read/" . $notice->id, "Read"]); ?>
                               <?php echo $this->tag->linkTo(["notice/edit/" . $notice->id, "Edit"]); ?>
                               <?php echo $this->tag->linkTo(["notice/delete/" . $notice->id,"Delete"]); ?>

                               </br>
                                  </br>
                                <?php endforeach; ?>


                            <div class="row">
                                <div class="col-sm-1">
                                    <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                                        <?php echo $page->current, "/", $page->total_pages ?>
                                    </p>
                          </div>
                          <div class="col-sm-11">
                              <nav>
                                  <ul class="pagination">
                                      <li><?php echo $this->tag->linkTo("notice/index", "First") ?></li>
                                      <li><?php echo $this->tag->linkTo("notice/index?page=" . $page->before, "Previous") ?></li>
                                      <li><?php echo $this->tag->linkTo("notice/index?page=" . $page->next, "Next") ?></li>
                                      <li><?php echo $this->tag->linkTo("notice/index?page=" . $page->last, "Last") ?></li>
                                  </ul>
                              </nav>
                          </div>
                        </div>
                </div>
             </div> 

                            
                      

