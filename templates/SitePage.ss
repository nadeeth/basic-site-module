<!DOCTYPE html>
<html lang="$ContentLocale">
    <head>
        <% base_tag %>
        <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        $MetaTags(false)
        <link rel="shortcut icon" href="site/themes/site/templates/images/icons/favicon.ico" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:900|Montserrat" rel="stylesheet">
    </head>
    <body>
    <% include SiteHeader %>
    $Layout
    <% include SiteSearchModal %>
    <%-- <% include SiteFooter %> --%>
    </body>
</html>
