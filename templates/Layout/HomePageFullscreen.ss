<!-- Slider Start -->
<div id="carouselControls" class="cover-slider-container carousel slide w-100 h-100" data-ride="carousel">
    <div class="carousel-inner h-100">
        <% loop Slides %>
            <div class="carousel-item <% if First %>active<% end_if %> h-100">
                <img class="d-block w-100 h-100" src="$Image.Fill(2000,1333).URL" alt="$Title">
                <div class="carousel-caption d-none d-md-block">
                    $Text
                </div>
            </div>
        <% end_loop %>
    </div>
    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Slider End -->
