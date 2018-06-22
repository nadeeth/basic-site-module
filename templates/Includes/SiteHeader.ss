<!-- Header Start -->
<header class="mb-auto">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="/">ButterflyRay.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <% loop $Menu(1) %>
                    <li class="nav-item<% if $isCurrent %> active<% end_if %><% if $Children %> dropdown<% end_if %>">
                        <% if $Children %>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{$ID}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                $MenuTitle
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown{$ID}">
                                <% loop $Children %>
                                    <a class="dropdown-item <% if $isCurrent %>active<% end_if %>" href="$Link">$MenuTitle</a>
                                <% end_loop %>
                            </div>
                        <% else %>
                            <a class="nav-link" href="$Link" title="Go to the $Title page">$MenuTitle</a>
                        <% end_if %>
                    </li>
                <% end_loop %>
            </ul>
        </div>
    </nav>
</header>
<!-- Header End -->
