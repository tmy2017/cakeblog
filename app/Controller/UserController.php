<?php

class UserController extends AppController
{
    public function delete($id)
    {
        // delete code goes here, and then...
        if ($this->referer() != '/') {
            return $this->redirect($this->referer());
        }

        return $this->redirect(['action' => 'index']);
    }
}