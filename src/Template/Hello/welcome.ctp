	<div class="row">
    	<div class="col-xs-12 ">
        <div class="btn-group btn-group-justified">
          <a href="#" class="btn btn-primary">Left</a>
          <a href="#" class="btn btn-primary">Middle</a>
          <a href="#" class="btn btn-primary">Right</a>
          <?= $this->Html->link(__('New User Setting'), ['controller' => 'Users', 'action' => 'add'],['class'=>"btn btn-primary"]) ?>
        </div>

    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Setting'), ['action' => 'add'],['class'=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div></div>
<div class="userSettings index large-9 medium-8 columns content">
  <p>hello</p>

    <p><?= $this->Html->link(__('ユーザー登録はこちら'), ['controller' => 'Users', 'action' => 'add']) ?></p>
    </div>
</div>
