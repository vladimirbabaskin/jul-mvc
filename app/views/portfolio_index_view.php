<h2>Portfolio</h2>
<dl>
<?php foreach ($this->portfolio as $portfolio_item): ?>
    <dt><a href="<?= $portfolio_item['site']?>" target="blank"><?= $portfolio_item['site']?></a> (<?= $potfolio_item['year'] ?>)</dt>
    <dd><?= $portfolio_item['description'] ?></dd>
    <?php endforeach;?>
</dl>
