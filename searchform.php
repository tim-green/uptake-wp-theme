<?php
/**
 * The template for displaying search forms
 */
?>
<div class="search">
	<div class="search-form">
		<form method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" placeholder="Search here..." name="search" />
            <button type="submit">
              <span><i class="fa fa-search"></i></span>
            </button>
		</form>
	</div>
</div>
  <!--Search Form-->