        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Notice-phalcon</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a>{{ link_to('users', 'Login') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
         <div class="card">
                            <div class="header">
                           
                            <li class="next"><?php echo $this->tag->linkTo(["notice/add", "Add notice "]); ?></li>
                            </br>
                             <?php foreach ($page->items as $notice): ?>
                                <h4 class="title"><?php echo $notice->title?></h4>
                                <p class="category"><?php echo $notice->description?></p>
                                <?php echo $this->tag->linkTo(["index/read/" . $notice->id, "Read"]); ?>
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
                      

