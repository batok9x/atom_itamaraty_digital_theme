<h1><?php echo __('Edit %1% permissions of %2%', ['%1%' => lcfirst(sfConfig::get('app_ui_label_term')), '%2%' => render_title($resource)]); ?></h1>

<?php echo get_component('aclGroup', 'termAclForm', ['resource' => $resource, 'permissions' => $permissions, 'form' => $form]); ?>
