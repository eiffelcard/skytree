
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
