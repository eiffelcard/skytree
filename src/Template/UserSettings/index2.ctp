<div class="row">
    <div class="col-xs-12 ">
      <div class="btn-group btn-group-justified">
        <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-primary"]) ?>
        <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-success"]) ?>
          <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
    <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-primary"]) ?>
      </div>
    </div></div>

    <div class="row">
        <div class="col-xs-12 ">
    <h3><?= __('友だち一覧') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('名前') ?></th>
                <th scope="col"><?= $this->Paginator->sort('登録日時') ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($userSettings as $userSetting): ?>
            <tr>
                <td><?= $this->Number->format($userSetting->id) ?></td>
                <td><?= $userSetting->has('user') ? $this->Html->link($userSetting->user->id, ['controller' => 'Users', 'action' => 'view', $userSetting->user->id]) : '' ?></td>
                <td><?=($this->Html->image(h($userSetting->picture),array('alt'=>'CakePHP','height'=>'100','width'=>'200'))); ?></td>
                <td><?= h($userSetting->display_name) ?></td>

                <td><?= h($userSetting->created) ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
