<?php /** @var array $customers */ ?>
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <h1>Customer Accounts</h1>
    <table border="1" cellpadding="6">
        <tr><th>Full Name</th><th>Email</th><th>Phone</th></tr>
        <?php foreach ($customers as $c): ?>
            <tr>
                <td><?= esc($c['full_name']) ?></td>
                <td><?= esc($c['email']) ?></td>
                <td><?= esc($c['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?= $this->endSection() ?>
