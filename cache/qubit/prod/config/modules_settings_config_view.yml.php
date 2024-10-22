<?php
// auto-generated by sfViewConfigHandler
// date: 2024/10/19 17:46:44
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'importSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'treeviewSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'importSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $this->setComponentSlot('css', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'css', '', ''))));
  $this->setComponentSlot('header', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'header', '', ''))));
  $this->setComponentSlot('footer', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'footer', '', ''))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addHttpMeta('X-UA-Compatible', 'IE=edge,chrome=1', false);
  $response->addMeta('title', 'AtoM', false, false);
  $response->addMeta('description', 'Access to memory - Open information management toolkit', false, false);
  $response->addMeta('viewport', 'initial-scale=1.0, user-scalable=no', false, false);

  $response->addJavascript('/vendor/jquery', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/drupal', '', NULL);
  $response->addJavascript('/vendor/yui/yahoo-dom-event/yahoo-dom-event', '', NULL);
  $response->addJavascript('/vendor/yui/element/element-min', '', NULL);
  $response->addJavascript('/vendor/yui/button/button-min', '', NULL);
  $response->addJavascript('/vendor/modernizr', '', NULL);
  $response->addJavascript('/vendor/jquery-ui/jquery-ui.min.js', '', NULL);
  $response->addJavascript('/vendor/jquery.expander.js', '', NULL);
  $response->addJavascript('/vendor/jquery.masonry.js', '', NULL);
  $response->addJavascript('/vendor/jquery.imagesloaded.js', '', NULL);
  $response->addJavascript('/vendor/bootstrap/js/bootstrap', '', NULL);
  $response->addJavascript('/vendor/URI.js', '', NULL);
  $response->addJavascript('/vendor/meetselva/attrchange', '', NULL);
  $response->addJavascript('qubit', '', NULL);
  $response->addJavascript('treeView', '', NULL);
  $response->addJavascript('clipboard', '', NULL);
  $response->addJavascript('dominion', 'last', array ());
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/collapse', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/form', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/tableheader', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/textarea', '', NULL);
  $response->addJavascript('/vendor/yui/connection/connection-min', '', NULL);
  $response->addJavascript('/vendor/yui/datasource/datasource-min', '', NULL);
  $response->addJavascript('/vendor/yui/container/container-min', '', NULL);
  $response->addJavascript('/vendor/yui/autocomplete/autocomplete-min', '', NULL);
  $response->addJavascript('autocomplete', '', NULL);
}
else if ($templateName.$this->viewName == 'treeviewSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $this->setComponentSlot('css', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'css', '', ''))));
  $this->setComponentSlot('header', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'header', '', ''))));
  $this->setComponentSlot('footer', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'footer', '', ''))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addHttpMeta('X-UA-Compatible', 'IE=edge,chrome=1', false);
  $response->addMeta('title', 'AtoM', false, false);
  $response->addMeta('description', 'Access to memory - Open information management toolkit', false, false);
  $response->addMeta('viewport', 'initial-scale=1.0, user-scalable=no', false, false);

  $response->addJavascript('/vendor/jquery', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/drupal', '', NULL);
  $response->addJavascript('/vendor/yui/yahoo-dom-event/yahoo-dom-event', '', NULL);
  $response->addJavascript('/vendor/yui/element/element-min', '', NULL);
  $response->addJavascript('/vendor/yui/button/button-min', '', NULL);
  $response->addJavascript('/vendor/modernizr', '', NULL);
  $response->addJavascript('/vendor/jquery-ui/jquery-ui.min.js', '', NULL);
  $response->addJavascript('/vendor/jquery.expander.js', '', NULL);
  $response->addJavascript('/vendor/jquery.masonry.js', '', NULL);
  $response->addJavascript('/vendor/jquery.imagesloaded.js', '', NULL);
  $response->addJavascript('/vendor/bootstrap/js/bootstrap', '', NULL);
  $response->addJavascript('/vendor/URI.js', '', NULL);
  $response->addJavascript('/vendor/meetselva/attrchange', '', NULL);
  $response->addJavascript('qubit', '', NULL);
  $response->addJavascript('treeView', '', NULL);
  $response->addJavascript('clipboard', '', NULL);
  $response->addJavascript('dominion', 'last', array ());
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/collapse', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/form', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/tableheader', '', NULL);
  $response->addJavascript('description', '', NULL);
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $this->setComponentSlot('css', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'css', '', ''))));
  $this->setComponentSlot('header', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'header', '', ''))));
  $this->setComponentSlot('footer', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'footer', '', ''))));
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addHttpMeta('X-UA-Compatible', 'IE=edge,chrome=1', false);
  $response->addMeta('title', 'AtoM', false, false);
  $response->addMeta('description', 'Access to memory - Open information management toolkit', false, false);
  $response->addMeta('viewport', 'initial-scale=1.0, user-scalable=no', false, false);

  $response->addJavascript('/vendor/jquery', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/drupal', '', NULL);
  $response->addJavascript('/vendor/yui/yahoo-dom-event/yahoo-dom-event', '', NULL);
  $response->addJavascript('/vendor/yui/element/element-min', '', NULL);
  $response->addJavascript('/vendor/yui/button/button-min', '', NULL);
  $response->addJavascript('/vendor/modernizr', '', NULL);
  $response->addJavascript('/vendor/jquery-ui/jquery-ui.min.js', '', NULL);
  $response->addJavascript('/vendor/jquery.expander.js', '', NULL);
  $response->addJavascript('/vendor/jquery.masonry.js', '', NULL);
  $response->addJavascript('/vendor/jquery.imagesloaded.js', '', NULL);
  $response->addJavascript('/vendor/bootstrap/js/bootstrap', '', NULL);
  $response->addJavascript('/vendor/URI.js', '', NULL);
  $response->addJavascript('/vendor/meetselva/attrchange', '', NULL);
  $response->addJavascript('qubit', '', NULL);
  $response->addJavascript('treeView', '', NULL);
  $response->addJavascript('clipboard', '', NULL);
  $response->addJavascript('dominion', 'last', array ());
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/collapse', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/form', '', NULL);
  $response->addJavascript('/plugins/sfDrupalPlugin/vendor/drupal/misc/tableheader', '', NULL);
}

