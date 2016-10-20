<div class="row">
<div class="col-xs-12">

  <?=($this->Html->image("skytree.jpg",array('alt'=>'CakePHP','class'=>'img-responsive center-block'))); ?>
    <h1 style="text-align:center">準備が完了しました</h1>
</div>
</div>
<div class="row">
<div class="col-xs-2 col-xs-offset-5">

  <p style="align:center"><?= $this->Html->link(__('Home'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-success center-block"]) ?></p>
</div>
</div>
