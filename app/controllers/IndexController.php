<?php
use \Phalcon\Paginator\Adapter\QueryBuilder as PaginacionBuilder;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
         $notice = $this->modelsManager->createBuilder()
        ->from('Notice')
        ->WHERE('soft_delete =false')
        ->orderBy('id');

        $paginator = new PaginacionBuilder(array(
            "builder" => $notice,
            "limit"=> 5,
            "page" => $this->request->getQuery('page', 'int')
        ));
         $this->view->page = $paginator->getPaginate();
    }
    
      public function readAction($id)
    {

            $notice = Notice::findFirstByid($id);
            $this->view->id = $notice->id;
            $this->tag->setDefault("id", $notice->id);
            $this->tag->setDefault("title", $notice->title);
            $this->tag->setDefault("description", $notice->description);
            $this->tag->setDefault("author", $notice->author);
            $this->tag->setDefault("created_date", $notice->created_date);
            $this->tag->setDefault("updated_date", $notice->updated_date);
            
        
    }

}

