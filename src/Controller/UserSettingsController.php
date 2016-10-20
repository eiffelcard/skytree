<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserSettings Controller
 *
 * @property \App\Model\Table\UserSettingsTable $UserSettings
 */
class UserSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userSettings = $this->paginate($this->UserSettings);

        $this->set(compact('userSettings'));
        $this->set('_serialize', ['userSettings']);
    }

    public function index2()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userSettings = $this->paginate($this->UserSettings);

        $this->set(compact('userSettings'));
        $this->set('_serialize', ['userSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id User Setting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userSetting = $this->UserSettings->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userSetting', $userSetting);
        $this->set('_serialize', ['userSetting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userSetting = $this->UserSettings->newEntity();
        if ($this->request->is('post')) {
            $userSetting = $this->UserSettings->patchEntity($userSetting, $this->request->data);
            if ($this->UserSettings->save($userSetting)) {
                $this->Flash->success(__('The user setting has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'addresses','action'=>'add']);
            } else {
                $this->Flash->error(__('The user setting could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserSettings->Users->find('list', ['limit' => 200]);
        $this->set(compact('userSetting', 'users'));
        $this->set('_serialize', ['userSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Setting id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userSetting = $this->UserSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userSetting = $this->UserSettings->patchEntity($userSetting, $this->request->data);
            if ($this->UserSettings->save($userSetting)) {
                $this->Flash->success(__('The user setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user setting could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserSettings->Users->find('list', ['limit' => 200]);
        $this->set(compact('userSetting', 'users'));
        $this->set('_serialize', ['userSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Setting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userSetting = $this->UserSettings->get($id);
        if ($this->UserSettings->delete($userSetting)) {
            $this->Flash->success(__('The user setting has been deleted.'));
        } else {
            $this->Flash->error(__('The user setting could not be deleted. Please, try again.'));
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
    } else {
        $this->Flash->error(__('failed! Please, try again.'));
    }
    }


    public function pic2()
    {
      $users = $this->UserSettings->Users->find('list', ['limit' => 200]);
      $this->set(compact('userSetting', 'users'));
      $this->set('_serialize', ['userSetting']);

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
    $userSetting = $this->UserSettings->newEntity();
    if ($this->request->is('post')) {
        $userSetting = $this->UserSettings->patchEntity($userSetting,
        array(
          'user_id'=>$this->request->data['user_id'],
          'picture'=>$newfilename,
            'display_name'=>$this->request->data['display_name'],
              'firstname_local'=>$this->request->data['firstname_local'],
                'lastname_local'=>$this->request->data['lastname_local'],
                  'birthday'=>$this->request->data['birthday'],
                    'language'=>$this->request->data['language'],));

        if ($this->UserSettings->save($userSetting)) {
            $this->Flash->success(__('The user setting has been saved.'));
          return $this->redirect(['controller' => 'Hello','action'=>'ready']);
        } else {
            $this->Flash->error(__('The user setting could not be saved. Please, try again.'));
        }
    }


    }


}
