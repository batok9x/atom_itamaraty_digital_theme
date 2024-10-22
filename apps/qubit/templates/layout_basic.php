<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture(); ?>" dir="<?php echo sfCultureInfo::getInstance($sf_user->getCulture())->direction; ?>">
  <head>
    <?php echo get_component('default', 'tagManager', ['code' => 'script']); ?>
    <?php include_http_metas(); ?>
    <?php include_metas(); ?>
    <?php include_title(); ?>
    <link rel="shortcut icon" href="<?php echo public_path('favicon.ico'); ?>"/>
    <?php include_stylesheets(); ?>
    <?php include_component_slot('css'); ?>
    <?php if ($sf_context->getConfiguration()->isDebug()) { ?>
      <script type="text/javascript" charset="utf-8">
        less = { env: 'development', optimize: 0, relativeUrls: true };
      </script>
    <?php } ?>
    <?php include_javascripts(); ?>
  </head>
  <body class="yui-skin-sam <?php echo $sf_context->getModuleName(); ?> <?php echo $sf_context->getActionName(); ?>">

    <?php echo get_component('default', 'tagManager', ['code' => 'noscript']); ?>

    <?php echo get_partial('alerts'); ?>

    <?php include_slot('pre'); ?>

    <?php if (!include_slot('content')) { ?>
      <div id="content" role="main">
        <?php echo $sf_content; ?>
      </div>
    <?php } ?>

    <?php include_slot('post'); ?>

    <?php echo get_partial('footer'); ?>

  </body>
</html>