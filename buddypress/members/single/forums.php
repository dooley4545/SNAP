<?php
/**
 * BuddyPress - Users Forums
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<div id="subnav" aria-label="<?php esc_attr_e( 'Member secondary navigation', 'buddypress' ); ?>" role="navigation">
	<ul>
		<?php bp_get_options_nav(); ?>

		<li id="forums-order-select" class="last filter">

			<label for="forums-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
			<select id="forums-order-by">
				<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
				<option value="popular"><?php _e( 'Most Posts', 'buddypress' ); ?></option>
				<option value="unreplied"><?php _e( 'Unreplied', 'buddypress' ); ?></option>

				<?php

				/**
				 * Fires inside the members forums order options select input.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_forums_directory_order_options' ); ?>

			</select>
		</li>
	</ul>
</div><!-- .item-list-tabs -->
<div id="content-wrapper">
<div id="template-notices" role="alert" aria-atomic="true">
	<?php

	/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
	do_action( 'template_notices' ); ?>

</div>
<?php

if ( bp_is_current_action( 'favorites' ) ) :
	bp_get_template_part( 'members/single/forums/topics' );

else :

	/**
	 * Fires before the display of member forums content.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_before_member_forums_content' ); ?>

	<div class="forums myforums">

		<?php bp_get_template_part( 'forums/forums-loop' ) ?>

	</div>

	<?php

	/**
	 * Fires after the display of member forums content.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_after_member_forums_content' ); ?>

<?php endif; ?>
</div>
