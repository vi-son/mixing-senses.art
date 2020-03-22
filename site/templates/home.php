<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Document</title>
    <?= css("assets/css/style.css") ?>
  </head>
  <body>
    <header>
      <h1 class="title"><?= $page->title() ?></h1>
      <h2 class="title-subline"><?= $page->headline() ?></h2>
    </header>

    <?php foreach($page->blocks()->toBuilderBlocks() as $block): ?>
      <?php if ($block->visible()->toBool()): ?>
        <?php snippet('blocks/' . $block->_key(),
                      ['data' => $block]) ?>
       <?php endif ?>
    <?php endforeach ?>

  </body>
</html>
