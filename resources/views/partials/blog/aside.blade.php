<aside id="secondary" class="widget-area" aria-label="Blog Sidebar">
    <div id="search-2" class="widget widget_search">



        <form method="get" class="search-form" action="{{url('/search/')}}">
            <label for="search-form-62d674f53a6e7">
                <span class="screen-reader-text">Recherche pour:</span>
            </label>
            <input type="search" id="search-form-62d674f53a6e7" required="required" class="search-field" placeholder="Rechercher" value="" name="q" />
            <button type="submit" title="rechercher" class="search-submit"><i class="fa fa-search"></i><span class="screen-reader-text">Rechercher</span></button>
        </form>
    </div>
    <div id="recent-posts-2" class="widget widget_recent_entries">
        <h2 class="widget-title">Articles récents</h2>
        @foreach($articleRecentFive as $articleRecentFive)
        <ul>

            <li>
                <a href="/blog/{{$articleRecentFive->urlTitre}}" title="{{$articleRecentFive->libelle}}">
                    {{ substr($articleRecentFive->libelle, 0, 32)}}
                    @if(strlen($articleRecentFive->libelle) > 32)
                    ...
                    @endif
                </a>
            </li>
        </ul>
        @endforeach
    </div>
    <div id="recent-posts-2" class="widget widget_recent_entries">
        <h2 class="widget-title">Articles populaires</h2>
        <ul>
            @foreach($articlePopFives as $articlePopFive)
            <li>
                <a href="/blog/{{$articlePopFive->urlTitre}}" title="{{$articlePopFive->libelle}}">
                    {{ substr($articlePopFive->libelle, 0, 32)}}
                    @if(strlen($articlePopFive->libelle) > 32)
                    ...
                    @endif
                </a>
            </li>
            @endforeach
        </ul>

    </div>
    <div id="recent-comments-2" class="widget widget_recent_comments">
        <h2 class="widget-title">Commentaires récents</h2>
        <ul id="recentcomments">
            @foreach($articleCommentes as $articleCommente)
            <li class="recentcomments"><span class="comment-author-link">
                    {{$articleCommente->name}} --</span>
                <a href="/blog/{{$articleCommente->article->urlTitre}}#c{{$articleCommente->id}}" title="{{$articleCommente->name}}">
                    {{ substr($articleCommente->description, 0, 45)}}
                    @if(strlen($articleCommente->description) > 45)
                    ...
                    @endif
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div id="categories-2" class="widget widget_categories">
        <h2 class="widget-title">Catégories</h2>


        <ul>
            @if($categories->count() > 0)

            @foreach($categories as $categorie)
            <li class="cat-item cat-item-21">
                <a href="/categorie/{{$categorie->urlTitre}}" title="{{$categorie->lib}}">
                    {{ substr($categorie->lib, 0, 32)}}
                    @if(strlen($categorie->lib) > 32)
                    ...
                    @endif
                </a>
            </li>
            @endforeach
            @endif
        </ul>

    </div>

    <div id="tag_cloud-1" style="padding: 20px;" class="widget widget_tag_cloud">
        <!-- <h2 class="widget-title">Public</h2> -->
        <div class="tagcloud">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    @php
                    $i = 0;
                    @endphp
                    @foreach($publicites as $publicites)
                    @php
                    $i++;
                    @endphp
                    <div class="carousel-item @if($i == 1) active @endif">
                        <a href="{{$publicites->libelle}}" target="_blank" rel="noopener noreferrer" title="{{$categorie->lib}}">
                            <img class="d-block w-100 pub" src="{{asset($publicites->img_url)}}" alt="{{$categorie->lib}}">
                        </a>

                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" title="précédent">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" title="Suivant">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>

        </div>
    </div>
</aside>
<style>
    img.pub {
        border-radius: 5px;
        height: 25rem
    }
</style>
<script>
    // jQuery(document).ready(function() {
    //     jQuery(document).on('submit', 'form#appino_subscription', function(e) {
    //         e.preventDefault();
    //         var sub_name = jQuery('#subnewsname').val();
    //         var sub_email = jQuery('#subnewsemail').val();
    //         //alert(sub_email);
    //         jQuery.ajax({
    //             url: "https://wordpress.iqonic.design/appino/particles-3/wp-admin/admin-ajax.php",
    //             type: 'POST',
    //             data: {
    //                 sub_email: sub_email,
    //                 action: 'check_info_details'
    //             },
    //             success: function(results) {
    //                 jQuery('.epic_results').html(results);
    //                 jQuery('#subnewsemail').val('');
    //             },
    //             complete: function() {
    //                 jQuery('.loading').hide();
    //                 jQuery(".news_text").show();
    //                 jQuery("#sidebar_button").show();
    //                 jQuery('.epic_results').show();
    //             },
    //             beforeSend: function() {
    //                 jQuery('.loading').show();
    //                 jQuery(".news_text").show();
    //                 jQuery("#sidebar_button").show();
    //                 jQuery('.epic_results').hide();
    //             }
    //         });

    //     });

    // });
</script>
