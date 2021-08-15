<?php

class RecipesContrller extends AppController
{
    // $name controller attribute usage example
    public $name = 'Recipes';
    public $uses = ['Recipe', 'User'];
    public $helpers = ['Js'];
    public $components = ['RequestHandler'];

    public function view($id)
    {
        // action logic goes here...
    }

    public function share($cutomerId, $recipeId)
    {
        // action logic goes here...
    }

    public function search($query)
    {
        // Render the view in /View/Recipes/search.ctp
        $this->render();
    }

    public function popular()
    {
        $popular = $this->Recipe->popular();

        if (!empty($this->request->params['requested'])) {
            return $popular;
        }

        $this->set('popular', $popular);
    }

    public function place_order()
    {
        // Logic for finalizing order goes here
        if ($success) {
            return $this->redirect(
                ['controller' => 'orders', 'action' => 'thanks']
            );
        }

        return $this->redirect(
            ['controller' => 'orders', 'action' => 'confirm']
        );
    }
}