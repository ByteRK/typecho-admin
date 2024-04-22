<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>


</div>



    <script src="./ricken/js/bootstrap.bundle.min.js"></script>
    <script src="./ricken/js/js.cookie.js"></script>
    <script src="./ricken/js/jquery.scrollbar.min.js"></script>
    <script src="./ricken/js/jquery-scrollLock.min.js"></script>
    <script src="./ricken/js/jquery.lavalamp.min.js"></script>
    <!-- Optional JS -->
<!--    <script src="./ricken/js/moment.min.js"></script>-->
<!--    <script src="./ricken/js/fullcalendar.min.js"></script>-->
<!--    <script src="./ricken/js/sweetalert2.min.js"></script>-->
<!--    <script src="./ricken/js/jquery-jvectormap.min.js"></script>-->
<!--    <script src="./ricken/js/jquery-jvectormap-world-mill.js"></script>-->
    <!-- Argon JS -->
    <script src="./ricken/js/argon.min.js?v=1.0.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="./ricken/js/demo.min.js"></script>
<script>
    // Facebook Pixel Code Don't Delete
//    ! function(f, b, e, v, n, t, s) {
//        if (f.fbq) return;
//        n = f.fbq = function() {
//            n.callMethod ?
//                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
//        };
//        if (!f._fbq) f._fbq = n;
//        n.push = n;
//        n.loaded = !0;
//        n.version = '2.0';
//        n.queue = [];
//        t = b.createElement(e);
//        t.async = !0;
//        t.src = v;
//        s = b.getElementsByTagName(e)[0];
//        s.parentNode.insertBefore(t, s)
//    }(window,
//        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

//    try {
//        fbq('init', '111649226022273');
//        fbq('track', "PageView");
//
//    } catch (err) {
//        console.log('Facebook Track Error:', err);
//    }
</script>
<!--<noscript>-->
<!--    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />-->
<!--</noscript>-->
</body>

</html>


<?php
/** 注册一个结束插件 */
Typecho_Plugin::factory('admin/footer.php')->end();