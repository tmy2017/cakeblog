<?php

class UsersController extends AppController
{
    public function delete($id)
    {
        // delete code goes here, and then...
        if ($this->referer() != '/') {
            return $this->redirect($this->referer());
        }

        return $this->redirect('https://8765-' . substr(getenv('GITPOD_WORKSPACE_URL'),8));;
    }

    public function view_active()
    {
        $this->set('title_for_layout', 'View Active Users');
        $this->layout = 'default_small_ad');
    }

    public function view_image()
    {
        $this->layout = 'image';
        // Output user image
    }

    public function view_active()
    {
        $this->layout = 'Contacts.contact';
    }
}