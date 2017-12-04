
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <input type="text" class="search-text" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <button type="submit" id="searchsubmit" class="search-submit"></button>
</form>