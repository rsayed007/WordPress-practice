
	<div class="header-top-search">
        <form action="<?php echo home_url('/'); ?>">
            <input type="search" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder','carnews' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>