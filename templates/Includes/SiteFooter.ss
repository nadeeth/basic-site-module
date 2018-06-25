<!-- FOOTER -->
<footer class="">
    <div class="clearfix container">
        <ul class="social-icons float-left">
            <% if $SiteConfig.LinkedinLink %>
                <li><a class="fab fa-linkedin" href="$SiteConfig.LinkedinLink" target="_blank"></a></li>
            <% end_if %>
            <% if $SiteConfig.TwitterLink %>
                <li><a class="fab fa-twitter" href="$SiteConfig.TwitterLink" target="_blank"></a></li>
            <% end_if %>
            <% if $SiteConfig.FacebookLink %>
                <li><a class="fab fa-facebook" href="$SiteConfig.FacebookLink" target="_blank"></a></li>
            <% end_if %>
            <% if $SiteConfig.GoogleplusLink %>
                <li><a class="fab fa-google-plus" href="$SiteConfig.GoogleplusLink" target="_blank"></a></li>
            <% end_if %>
        </ul>
        <p class="float-right"><a href="#">Back to top</a></p>
    </div>
    <p class="center">
        <% loop $SiteConfig.FooterMenu %>
            <a href="$Link">$MenuTitle</a> <% if not $Last %>&middot;<% end_if %>
        <% end_loop %>
    </p>
    <p class="center copyright">$SiteConfig.CopyrightText</p>
</footer>
