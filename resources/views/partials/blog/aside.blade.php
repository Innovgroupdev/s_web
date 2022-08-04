<aside id="secondary" class="widget-area" aria-label="Blog Sidebar">
    <div id="search-2" class="widget widget_search">
        <form method="get" class="search-form" action="https://wordpress.iqonic.design/appino/particles-3/">
            <label for="search-form-62d674f53a6e7">
                <span class="screen-reader-text">Recherche pour:</span>
            </label>
            <input type="search" id="search-form-62d674f53a6e7" class="search-field" placeholder="Rechercher" value="" name="s" />
            <button type="submit" class="search-submit"><i class="fa fa-search"></i><span class="screen-reader-text">Rechercher</span></button>
        </form>
    </div>
    <div id="recent-posts-2" class="widget widget_recent_entries">
        <h2 class="widget-title">Articles récents</h2>
        @foreach($articleRecentFive as $articleRecentFive)
        <ul>

            <li>
                <a href="blog/{{$articleRecentFive->id}}">{{$articleRecentFive->libelle}}</a>
            </li>
        </ul>
        @endforeach
    </div>
    <div id="recent-posts-2" class="widget widget_recent_entries">
        <h2 class="widget-title">Articles populaires</h2>
        <ul>
            <li>
                <a href="{{route('detail')}}">Life Lack
                    Meaning</a>
            </li>
            <li>
                <a href="{{route('detail')}}">Construction
                    industry</a>
            </li>
            <li>
                <a href="{{route('detail')}}">Build
                    Construction</a>
            </li>
            <li>
                <a href="{{route('detail')}}">Construction
                    industry</a>
            </li>
            <li>
                <a href="{{route('detail')}}">Life Lack
                    Meaning</a>
            </li>
        </ul>

    </div>
    <div id="recent-comments-2" class="widget widget_recent_comments">
        <h2 class="widget-title">Commentaires récents</h2>
        <ul id="recentcomments">
            @foreach($articleCommentes as $articleCommente)
            <li class="recentcomments"><span class="comment-author-link">
                    <a rel='external nofollow ugc' class='url'>rink</a></span>
                <a href="blog/{{$articleCommente->article_id}}">{{$articleCommente->description}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- <div id="archives-2" class="widget widget_archive">
                                <h2 class="widget-title">Archives</h2>
                                <ul>
                                    <li><a href='../2018/12/index.html'>December 2018</a></li>
                                </ul>

                            </div> -->
    <div id="categories-2" class="widget widget_categories">
        <h2 class="widget-title">Catégories</h2>

        <ul>
            <li class="cat-item cat-item-21"><a href="{{route('category')}}">Fashion</a>
            </li>
            <li class="cat-item cat-item-23"><a href="{{route('category')}}">Photography</a>
            </li>
            <li class="cat-item cat-item-24"><a href="{{route('category')}}">Technology</a>
            </li>
        </ul>

    </div>
    <!-- <div id="meta-2" class="widget widget_meta">
                                <h2 class="widget-title">Meta</h2>
                                <ul>
                                    <li><a href="../wp-login.html">Log in</a></li>
                                    <li><a href="../feed/index.html">Entries feed</a></li>
                                    <li><a href="../comments/feed/index.html">Comments feed</a></li>

                                    <li><a href="https://wordpress.org/">WordPress.org</a></li>
                                </ul>

                            </div> -->
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
                        <a href="{{$publicites->libelle}}" target="_blank" rel="noopener noreferrer">
                        <img class="d-block w-100 pub" src="{{asset($publicites->img_url)}}" alt="First slide">
                        </a>

                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
        height: 18rem
    }
</style>
<script>
    jQuery(document).ready(function() {
        jQuery(document).on('submit', 'form#appino_subscription', function(e) {
            e.preventDefault();
            var sub_name = jQuery('#subnewsname').val();
            var sub_email = jQuery('#subnewsemail').val();
            //alert(sub_email);
            jQuery.ajax({
                url: "https://wordpress.iqonic.design/appino/particles-3/wp-admin/admin-ajax.php",
                type: 'POST',
                data: {
                    sub_email: sub_email,
                    action: 'check_info_details'
                },
                success: function(results) {
                    jQuery('.epic_results').html(results);
                    jQuery('#subnewsemail').val('');
                },
                complete: function() {
                    jQuery('.loading').hide();
                    jQuery(".news_text").show();
                    jQuery("#sidebar_button").show();
                    jQuery('.epic_results').show();
                },
                beforeSend: function() {
                    jQuery('.loading').show();
                    jQuery(".news_text").show();
                    jQuery("#sidebar_button").show();
                    jQuery('.epic_results').hide();
                }
            });

        });

    });
</script>
