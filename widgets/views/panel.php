<div class="ibox float-e-margins">
    <?php if ($title): ?>
        <div class="ibox-title">
            <h5><?= $title ?> <?= $description ? '<small class="m-l-sm">' . $description . '</small>' : '' ?></h5>


            <div class="ibox-tools">
                <?php if ($collapse_button): ?>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                <?php endif ?>

                <?php if (!empty($toolbar)): ?>
                    <?php foreach ($toolbar as $item): ?>
                        <?php if (isset($item['items'])): ?>
                            <a class="dropdown-toggle <?= $item['class'] ?>" data-toggle="dropdown" href="#">
                                <?= $item['icon'] ? '<i class="fa fa-' . $item['icon'] . '"></i>' : '' ?>
                                <?= $item['title'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($item['items'] as $sub_item): ?>
                                    <li>
                                        <a href="<?= $sub_item['link'] ?>">
                                            <?= $sub_item['icon'] ? '<i class="fa fa-fw fa-' . $sub_item['icon'] . '"></i> ' : '' ?>
                                            <?= $sub_item['title'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <a href="<?= $item['link'] ?>" class="<?= $item['class'] ?>">
                                <?= $item['icon'] ? '<i class="fa fa-' . $item['icon'] . '"></i>' : '' ?>
                                <?= isset($item['title']) ? $item['title'] : '' ?>
                            </a>
                        <?php endif ?>
                    <?php endforeach ?>

                <?php endif ?>

                <?php if ($close_button): ?>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                <?php endif ?>
            </div>

        </div>
    <?php endif ?>
    <?php if ($image): ?>
        <div class="ibox-content no-padding border-left-right">
            <?php if ($image): ?>
                <img src="<?= $image ?>" class="img-responsive">
            <?php endif ?>
        </div>
    <?php endif ?>
    <div class="ibox-content">
        <?= $content ?>
    </div>
    <?php if ($footer): ?>
        <div class="ibox-footer">
            <?= $footer ?>
            <div class="clearfix"></div>
        </div>
    <?php endif ?>
</div>