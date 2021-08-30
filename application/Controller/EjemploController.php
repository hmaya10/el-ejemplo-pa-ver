<?php


namespace Mini\Controller;

class EjemploController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/ejemplo/index.php';
        require APP . 'view/_templates/footer.php';
    }

}
