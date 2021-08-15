<?php

class ArticlesController extends AppController
{
    public $component = [
        'Paginator' => [
            'Article' => [
                'conditions' => ['published' => 1]
            ]
        ]
    ];

    public function sendFile($id)
    {
        $file = $this->Attachement->getFile($id);
        $this->response->file($file['path']);

        // Return response object to prevent controller from trying to render
        // a view
        return $this->response;
    }

    public function sendIcs()
    {
        $icsString = $this->Calendar->generateIcs();
        $this->response->body($icsString);
        $this->response->type('ics');

        // Optionally force file download
        $this->response->download('filename_for_download.ics');

        // Return response object to prevent controller from trying to render
        // a view
        return $this->response;
    }

    public function index()
    {
        $articles = $this->Article->find('all');
        $this->response->etag($this->Article->generateHash($articles));

        if ($this->response->checkNotModified($this->request)) {
            return $this->response;
        }
    }

    public function my_data()
    {
        // set the Cache-Control as private for 3600 seconds
        $this->response->sharable(false, 3600);
    }

    public function view()
    {
        $article = $this->Article->find('first');
        $this->response->modified($article['Article']['modified']);

        if ($this->response->checkNotModified($this->request)) {
            return $this->response;
        }
    }
}
