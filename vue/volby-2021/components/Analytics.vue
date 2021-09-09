<template>
<div class="no-height">
  <iframe src="https://a.volebnikalkulacka.cz/session/" width="0" height="0" frameborder="0"></iframe>
  <noscript><div><img src="https://mc.yandex.ru/watch/35615280" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- <noscript><p><img src="//piwik.kohovolit.eu/piwik.php?idsite=1&rec=1" style="border:0;" alt="" /></p></noscript> -->
</div>
</template>
<script>
/* eslint-disable */
if (process.browser) {
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-8592359-7', 'auto');
  ga('send', 'pageview');
}

// if (process.browser) {
//   var _paq = _paq || [];
//   // tracker methods like "setCustomDimension" should be called before "trackPageView"
//   _paq.push(['trackPageView']);
//   _paq.push(['enableLinkTracking']);
//   (function() {
//     var u = "//piwik.kohovolit.eu/";
//     _paq.push(['setTrackerUrl', u + 'piwik.php']);
//     _paq.push(['setSiteId', '1']);
//     var d = document,
//       g = d.createElement('script'),
//       s = d.getElementsByTagName('script')[0];
//     g.type = 'text/javascript';
//     g.async = true;
//     g.defer = true;
//     g.src = u + 'piwik.js';
//     s.parentNode.insertBefore(g, s);
//   })();
// }



// var _paq = _paq || [];
// // tracker methods like "setCustomDimension" should be called before "trackPageView"
// _paq.push(["setCookieDomain", "*.volebnikalkulacka.cz"]);
// _paq.push(['trackPageView']);
// _paq.push(['enableLinkTracking']);
// (function() {
//   var u = "//piwik.kohovolit.eu/";
//   _paq.push(['setTrackerUrl', u + 'piwik.php']);
//   _paq.push(['setSiteId', '1']);
//   var d = document,
//     g = d.createElement('script'),
//     s = d.getElementsByTagName('script')[0];
//   g.type = 'text/javascript';
//   g.async = true;
//   g.defer = true;
//   g.src = u + 'piwik.js';
//   s.parentNode.insertBefore(g, s);
// })();


if (process.browser) {
  (function (d, w, c) {
      (w[c] = w[c] || []).push(function() {
          try {
              w.yaCounter35615280 = new Ya.Metrika({
                  id:35615280,
                  clickmap:true,
                  trackLinks:true,
                  accurateTrackBounce:true,
                  webvisor:true
              });
          } catch(e) { }
      });

      var n = d.getElementsByTagName("script")[0],
          s = d.createElement("script"),
          f = function () { n.parentNode.insertBefore(s, n); };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";

      if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
      } else { f(); }
  })(document, window, "yandex_metrika_callbacks");
}
/* eslint-enable */
</script>

<style scoped>
  .no-height {
    max-height: 0;
  }
</style>