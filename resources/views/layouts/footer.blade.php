<!--start: Footer-->
<div class="content-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <article>
                    {!! @$content_four->content !!}
                </article>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{@$footer_page->title}}
                <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
            <!-- Histats.com  START  (aync)-->
            <script type="text/javascript">var _Hasync= _Hasync|| [];
            _Hasync.push(['Histats.start', '1,4524307,4,7,200,30,00010000']);
            _Hasync.push(['Histats.fasi', '1']);
            _Hasync.push(['Histats.track_hits', '']);
            (function() {
            var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
            hs.src = ('//s10.histats.com/js15_as.js');
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
            })();</script>
            <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4524307&101" alt="" border="0"></a></noscript>
            <!-- Histats.com  END  -->
            </div>
        </div>
    </div>
</div>
<!--end: Footer-->
