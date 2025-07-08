<style>
    .pagination-custom {
        display: flex;
        justify-content: center;
        gap: 8px;
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    .pagination-custom li a,
    .pagination-custom li span {
        display: inline-block;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #24524A;
        text-decoration: none;
        font-size: 14px;
    }

    .pagination-custom li.active span {
        background-color: #51B8A7;
        color: white;
        border-color: #51B8A7;
    }

    .pagination-custom li.disabled span {
        color: #aaa;
        cursor: not-allowed;
    }
</style>

<ul class="pagination-custom">
    <?php if ($pager->hasPrevious()) : ?>
        <li><a href="<?= $pager->getPreviousPage() ?>">« Sebelumnya</a></li>
    <?php else: ?>
        <li class="disabled"><span>« Sebelumnya</span></li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li class="<?= $link['active'] ? 'active' : '' ?>">
            <?php if ($link['active']): ?>
                <span><?= $link['title'] ?></span>
            <?php else: ?>
                <a href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            <?php endif ?>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li><a href="<?= $pager->getNextPage() ?>">Selanjutnya »</a></li>
    <?php else: ?>
        <li class="disabled"><span>Selanjutnya »</span></li>
    <?php endif ?>
</ul>