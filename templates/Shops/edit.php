<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shop $shop
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shop->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Shops'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shops form content">
            <?= $this->Form->create($shop) ?>
            <fieldset>
                <legend><?= __('Edit Shop') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('start_date');
                    echo $this->Form->control('end_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
