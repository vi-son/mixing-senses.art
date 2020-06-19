  <?php $pages = $site->children()->listed() ?>

  <section class="footer-block">
    <nav class="footer-nav">
      <?php foreach($pages as $p): ?>
        <?= $p->title()->link() ?>
      <?php endforeach ?>
    </nav>
    <div class="support">
      <small>
        <?=  $site->secrets()->toStructure()->shuffle()->first()->text()->kt() ?>
      </small>
      <a href="https://getkirby.com" target="_blank">
        <?= svg("assets/svg/kirby-logo.svg") ?>
      </a>
    </div>
  </section>

  </body>
</html>
