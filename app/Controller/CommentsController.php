<?php

class CommentsController extends AppController
{
    public function latest()
    {
        if (empty($this->request->params['requested'])) {
            throw new ForbiddenException();
        }

        return $this->Comment->find('all', [
            'order' => 'Comment.created DESC', 
            'limit' => 10
        ]);
}