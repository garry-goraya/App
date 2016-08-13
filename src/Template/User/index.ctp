<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('User') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('First_Name') ?></th>
                <th><?= $this->Paginator->sort('Last_Name') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('Mobile') ?></th>
                <th><?= $this->Paginator->sort('City') ?></th>
                <th><?= $this->Paginator->sort('Country') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->ID) ?></td>
                <td><?= h($user->First_Name) ?></td>
                <td><?= h($user->Last_Name) ?></td>
                <td><?= h($user->Email) ?></td>
                <td><?= $this->Number->format($user->Mobile) ?></td>
                <td><?= h($user->City) ?></td>
                <td><?= h($user->Country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
