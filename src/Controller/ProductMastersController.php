<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductMasters Controller
 *
 * @property \App\Model\Table\ProductMastersTable $ProductMasters
 */
class ProductMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $productMasters = $this->paginate($this->ProductMasters);

        $this->set(compact('productMasters'));
        $this->set('_serialize', ['productMasters']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Master id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productMaster = $this->ProductMasters->get($id, [
            'contain' => []
        ]);

        $this->set('productMaster', $productMaster);
        $this->set('_serialize', ['productMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productMaster = $this->ProductMasters->newEntity();
        if ($this->request->is('post')) {
            $productMaster = $this->ProductMasters->patchEntity($productMaster, $this->request->data);
            if ($this->ProductMasters->save($productMaster)) {
                $this->Flash->success(__('The product master has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product master could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('productMaster'));
        $this->set('_serialize', ['productMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Master id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productMaster = $this->ProductMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productMaster = $this->ProductMasters->patchEntity($productMaster, $this->request->data);
            if ($this->ProductMasters->save($productMaster)) {
                $this->Flash->success(__('The product master has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product master could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('productMaster'));
        $this->set('_serialize', ['productMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Master id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productMaster = $this->ProductMasters->get($id);
        if ($this->ProductMasters->delete($productMaster)) {
            $this->Flash->success(__('The product master has been deleted.'));
        } else {
            $this->Flash->error(__('The product master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
