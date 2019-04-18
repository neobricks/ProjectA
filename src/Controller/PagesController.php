<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Utility\Inflector;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{
    public function display(...$path)
    {

        # src/Template/Layout/public.ctp
        $this->viewBuilder()->setLayout('public');
        $count = count($path);
        if (!$count) {
            # src/Template/Pages/public/index.ctp
            $this->viewBuilder()->setTemplate('public/index');
        } else {
            # TODO: make it better:
            if (in_array('..', $path, true) || in_array('.', $path, true)) {
                throw new ForbiddenException();
            }
            try {
                $this->render('public/' . implode('/', $path));
            } catch (MissingTemplateException $exception) {
                if (Configure::read('debug')) {
                    throw $exception;
                }
                throw new NotFoundException();
            }
        }
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $pages = $this->Paginator->paginate($this->Pages->find());
        $this->set(compact('pages'));
    }

    public function view($slug = null)
    {
        $page = $this->Pages->findBySlug($slug)->firstOrFail();
        $this->set(compact('page'));
    }

    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $page->user_id = 1;

            if ($this->Pages->save($page)) {
                $this->Flash->success(__('Your page has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your page.'));
        }
        // Get a list of tags.
        $tags = $this->Pages->Tags->find('list');

        // Set tags to the view context
        $this->set('tags', $tags);

        $this->set('page', $page);
    }

    public function edit($slug)
    {
        $page = $this->Pages->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('Your page has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your page.'));
        }

        $this->set('page', $page);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $page = $this->Pages->findBySlug($slug)->firstOrFail();
        if ($this->Pages->delete($page)) {
            $this->Flash->success(__('The {0} page has been deleted.', $page->title));
            return $this->redirect(['action' => 'index']);
        }
    }
}
