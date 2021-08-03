<?php

function disqus_thread($pageURL, $pageIdentifier) {
    echo " 
        <div id = \"disqus_thread\">
            <h4 class=\"comments-holder\"><a href=\"#\" onclick=\"loadDisqus();return false;\">Show/Post Comments</a></h4>
        </div>
 
        <script>
        var disqus_config = function () {
            this.page.url = '$pageURL';
            this.page.identifier = '$pageIdentifier';
        };
        var is_disqus_loaded = false;
        function loadDisqus() {
            if (!is_disqus_loaded) {
                is_disqus_loaded = true;
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://letsapi.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            }
        }; 
        </script> 
        <noscript> Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
    ";} 
?>