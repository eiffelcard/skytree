<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductMasters Controller
 *
 * @property \App\Model\Table\ProductMastersTable $ProductMasters
 */
class HelloController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

    }

    public function welcome()
    {

    }

    public function ready()
    {

    }

    public function main()
    {

    }

    public function setting()
    {

    }
    /**
     * View method
     *
     * @param string|null $id Product Master id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
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


    public function pic()
    {
      if($this->request->data){
        $file=$this->request->data['file'];
        $original_filename=$file['name'];
        $uploaded_file=$file['tmp_name'];
        $filesize=$file['size'];
        $filetype=$file['type'];
        $newfilename=md5(uniqid(rand(),true)).".jpg";

        $dest_fullpath='img/'.$newfilename;
        move_uploaded_file($file['tmp_name'],$dest_fullpath);
        $this->Flash->success(__('picture uploaded'));
        //こっから登録

    } else {
        $this->Flash->error(__('failed! Please, try again.'));
    }
      $productMaster = $this->ProductMasters->newEntity();
    if ($this->request->is('post')) {
        $productMaster = $this->ProductMasters->patchEntity($productMaster,
        array(
          'product_number'=>$this->request->data['product_number'],
          'product_picture'=>$newfilename,
            'product_name'=>$this->request->data['product_name'],
              'category'=>$this->request->data['category'],
                'price'=>$this->request->data['price']));

          if ($this->ProductMasters->save($productMaster)) {
            $this->Flash->success(__('The productmaster has been saved.'));
          return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The productmaster could not be saved. Please, try again.'));
        }
    }
  }


}
