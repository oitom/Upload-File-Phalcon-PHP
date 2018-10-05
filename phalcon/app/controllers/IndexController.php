<?php
class IndexController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) 
            {
                if($file->moveTo('./uploads/' . $file->getName()))
                    $this->view->setVar("msg", array('Sucesso!'));
                else
                    $this->view->setVar("msg", array('Erro!'));
            }
        }
    }
}