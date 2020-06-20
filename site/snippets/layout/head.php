<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title><?= $page->title() ?></title>
    <link
      rel="icon"
      type="image/svg+xml"
      href="<?= $kirby->url("assets") ?>/svg/favicon.svg"
      sizes="any">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <?= css("assets/css/style.css") ?>

    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = window._paq || [];
      _paq.push(['requireConsent']);
      _paq.push(['trackPageView']);
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
      _paq.push(["setCookieDomain", "*.mixing-senses.art"]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//matomo.guidoschmidt.cc/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '2']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//matomo.guidoschmidt.cc/matomo.php?idsite=2&amp;rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->

  </head>
  <body>
