<?php
gp_title( sprintf( __( 'Edit Project %s &lt; GlotPress' ),  $project->name ) );
gp_breadcrumb( array(
	gp_link_home_get(),
	gp_link_project_get( $project, $project->name ),
) );
gp_tmpl_header();
?>
<h2><?php _e( sprintf( __('Edit project <q>%s</q>'), gp_h( $project->name ) ) ); ?></h2>
<form action="<?php echo $form_action ?>" method="post">
<?php gp_tmpl_load( 'project-form', get_defined_vars()); ?>
	<p><input type="submit" name="submit" value="<?php echo gp_a( __('Save') ); ?>" id="submit" /></p>
</form>
<?php gp_tmpl_footer();