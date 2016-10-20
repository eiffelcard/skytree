<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Product Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($productMaster) ?>
    <fieldset>
        <legend><?= __('Add Product Master') ?></legend>
        <?php
            echo $this->Form->input('product_number');
            echo $this->Form->input('product_picture');
            echo $this->Form->input('product_name');
            echo $this->Form->input('category');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
