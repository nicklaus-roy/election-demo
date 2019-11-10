<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb):?>
            <?php if($breadcrumb['active'] == 'active'):?>
                <li class="breadcrumb-item active" aria-current="page">
                <?=$breadcrumb['text']?>
            <?php else: ?>
                <li class="breadcrumb-item">
                <a href="<?=$breadcrumb['link']?>"><?=$breadcrumb['text']?></a>
            <?php endif;?>
            </li>
        <?php endforeach;?>
    </ol>
</nav>
