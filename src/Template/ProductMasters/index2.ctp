<div class="row">
    <div class="col-xs-12 ">
      <div class="btn-group btn-group-justified">
        <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-primary"]) ?>
        <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-success"]) ?>
      <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-primary"]) ?>
      </div>
    </div></div>

    <div class="row">
        <div class="col-xs-12 ">

    <h3><?= __('カード一覧') ?></h3>
    <table>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('商品名') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('写真') ?></th>
                <th scope="col"><?= $this->Paginator->sort('価格') ?></th>
                <th scope="col"><?= $this->Paginator->sort('登録日時') ?></th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($productMasters as $productMaster): ?>
            <tr>
                <td><?= $this->Number->format($productMaster->id) ?></td>
                <td><?=  h($productMaster->product_name) ?></td>
                  <td><?=($this->Html->image(h($productMaster->product_picture),array('alt'=>'CakePHP','height'=>'200','width'=>'400'))); ?></td>
                <td><?= $this->Number->format($productMaster->price) ?></td>
                <td><?= h($productMaster->created) ?></td>


            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  <?= $this->Html->link(__('追加'), ['controller' => 'ProductMasters', 'action' => 'pic']) ?>
    </div>
</div>
