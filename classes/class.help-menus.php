<?php
/**
 * This file controls all of the content for the help tabs.
 */

# Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class CPTUI_Help_Menu {
	public function post_types_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'post_types_starter_notes',
			'title'   => __( 'Post Type Starter Notes', 'cpt-plugin' ),
			'content' => sprintf(
				'<ol><li>%s</li><li>%s</li><li>%s</li></ol>',
				sprintf( __( 'Post Type names should have %s max 20 characters %s, and only contain alphanumeric, lowercase characters, underscores in place of spaces and letters that do not have accents. Reserved names: post, page, attachment, revision, nav_menu_item.', 'custom-post-type-ui' ), '<strong class="wp-ui-highlight">', '</strong>' ),
				sprintf( __( 'If you are unfamiliar with the advanced post type settings, just fill in the %s Post Type Name %s and %s Label %s fields. Remaining settings will use default values. Labels, if left blank, will be automatically created based on the post type name', 'custom-post-type-ui' ), '<strong class="wp-ui-highlight">','</strong>','<strong class="wp-ui-highlight">', '</strong>' ),
				sprintf( __( 'Deleting custom post types will %s NOT %s delete any content into the database or added to those post types. You can easily recreate your post types and the content will still exist.', 'custom-post-type-ui' ), '<strong class="wp-ui-highlight">', '</strong>' )
			)
		) );

		$screen->add_help_tab( array(
			'id'      => 'post_types_labels',
			'title'   => __( 'Post Type Labels', 'cpt-plugin' ),
			'content' => sprintf(
				'<ul><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li></ul>',
				__( 'Post Type Slug: The post type name. Used to retrieve custom post type content. Should be short and unique', 'custom-post-type-ui' ),
				__( 'Plural Label: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Singular Label: Custom Post Type Singular label. Used in WordPress when a singular label is needed.', 'custom-post-type-ui' ),
				__( 'Description: Custom Post Type Description. Describe what your custom post type is used for.', 'custom-post-type-ui' ),
				__( 'Migration: Check this to migrate posts if and when renaming your post type.', 'custom-post-type-ui' ),
				__( 'Menu Name: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'All Items: Custom menu name for your custom post type.', 'custom-post-type-ui' ),
				__( 'Add New: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Add New Item: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Edit: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Edit Item: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'New Item: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'View: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'View Item: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Search Item: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Not Found: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Not Found In Trash: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' ),
				__( 'Parent: Post type label. Used in the admin menu for displaying post types.', 'custom-post-type-ui' )
		) ) );

		$screen->add_help_tab( array(
			'id'      => 'post_types_settings',
			'title'   => __( 'Post Type Settings', 'cpt-plugin' ),
			'content' => sprintf(
				'<ul><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li></ul>',
				__( 'WordPress core defaults to false. CPTUI defaults to true for user sake. Whether posts of this type should be shown in the admin UI and is publicly queryable.', 'custom-post-type-ui' ),
				__( 'Whether to generate a default UI for managing this post type.', 'custom-post-type-ui' ),
				__( 'Whether to show this post type data in the WP REST API.', 'custom-post-type-ui' ),
				__( 'Whether the post type will have a post type archive URL.', 'custom-post-type-ui' ),
				__( 'Slug to be used for archive URL.', 'custom-post-type-ui' ),
				__( 'Whether to exclude posts with this post type from front end search results.', 'custom-post-type-ui' ),
				__( 'The post type to use for checking read, edit, and delete capabilities', 'custom-post-type-ui' ),
				__( 'Whether the post type can have parent-child relationships', 'custom-post-type-ui' ),
				__( 'Whether or not WordPress should use rewrites for this post type', 'custom-post-type-ui' ),
				__( 'Custom post type slug to use instead of the default.', 'custom-post-type-ui' ),
				__( 'Should the permastruct be prepended with the front base.', 'custom-post-type-ui' ),
				__( 'Sets the query_var key for this post type.', 'custom-post-type-ui' ),
				__( 'Custom query var slug to use instead of the default.', 'custom-post-type-ui' ),
				__( 'The position in the menu order the post type should appear. show_in_menu must be true.', 'custom-post-type-ui' ),
				__( 'Whether to show the post type in the admin menu and where to show that menu.', 'custom-post-type-ui' ),
				__( 'Top-level page file name to make post type a sub-menu of.', 'custom-post-type-ui' ),
				__( 'URL to image to be used as menu icon or Dashicon class to use instead.', 'custom-post-type-ui' ),
				__( 'Adds the title meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the content editor meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the excerpt meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the trackbacks meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the custom fields meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the comments meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the revisions meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the featured image meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the author meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds the page attribute meta box when creating content for this custom post type', 'custom-post-type-ui' ),
				__( 'Adds post format support', 'custom-post-type-ui' ),
				__( 'Remove all support features', 'custom-post-type-ui' ),
				__( 'Provide custom support slugs here.', 'custom-post-type-ui' ),
				__( 'Adds %s support', 'custom-post-type-ui' )
		) ) );
	}

	public function taxonomies_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'taxonomies_starter_notes',
			'title'   => __( 'Taxonomy Starter Notes', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'taxonomies_labels',
			'title'   => __( 'Taxonomy Labels', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'taxonomies_settings',
			'title'   => __( 'Taxonomy Settings', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );
	}

	public function import_export_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'import_export',
			'title'   => __( 'Importing/Exporting', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'get_code',
			'title'   => __( 'Get Code Tab', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );
	}
}
