<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CardHistories Controller
 *
 * @property \App\Model\Table\CardHistoriesTable $CardHistories
 */
class CardHistoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cardHistories = $this->paginate($this->CardHistories);

        $this->set(compact('cardHistories'));
        $this->set('_serialize', ['cardHistories']);
    }

    /**
     * View method
     *
     * @param string|null $id Card History id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardHistory = $this->CardHistories->get($id, [
            'contain' => []
        ]);

        $this->set('cardHistory', $cardHistory);
        $this->set('_serialize', ['cardHistory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardHistory = $this->CardHistories->newEntity();
        if ($this->request->is('post')) {
            $cardHistory = $this->CardHistories->patchEntity($cardHistory, $this->request->data);
            if ($this->CardHistories->save($cardHistory)) {
                $this->Flash->success(__('The card history has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The card history could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cardHistory'));
        $this->set('_serialize', ['cardHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Card History id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardHistory = $this->CardHistories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardHistory = $this->CardHistories->patchEntity($cardHistory, $this->request->data);
            if ($this->CardHistories->save($cardHistory)) {
                $this->Flash->success(__('The card history has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The card history could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cardHistory'));
        $this->set('_serialize', ['cardHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Card History id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardHistory = $this->CardHistories->get($id);
        if ($this->CardHistories->delete($cardHistory)) {
            $this->Flash->success(__('The card history has been deleted.'));
        } else {
            $this->Flash->error(__('The card history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
