<div class="row">
    <div class="col-xs-12 ">
      <div class="btn-group btn-group-justified">
        <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-primary"]) ?>
        <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-success"]) ?>
      </div>



<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('新規ユーザー登録') ?></legend>
        <div class="form-group">
          <div class="col-lg-7">
            <?php  echo $this->Form->input('firstname',array('type' =>"text",'class' =>"form-control",'placeholder'=>"firstname" ));?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-7">
            <?php  echo $this->Form->input('lastname',array('type' =>"text",'class' =>"form-control",'placeholder'=>"lastname" ));?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-7">
            <?php  echo $this->Form->input('email',array('type' =>"text",'class' =>"form-control",'placeholder'=>"email" ));?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-7">
            <?php  echo $this->Form->input('password',array('type' =>"password",'class' =>"form-control",'placeholder'=>"password" ));?>
          </div>
        </div>

    </fieldset>
    <?= $this->Form->button(__('登録')) ?>
    <?= $this->Form->end() ?>
</div>
