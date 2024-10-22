<?php echo get_component('default', 'updateCheck'); ?>

<?php echo get_component('default', 'privacyMessage'); ?>

<?php if ($sf_user->isAdministrator() && '' === (string) QubitSetting::getByName('siteBaseUrl')) { ?>
  <div class="site-warning">
    <?php echo link_to(__('Please configure your site base URL'), 'settings/siteInformation', ['rel' => 'home', 'title' => __('Home')]); ?>
  </div>
<?php } ?>

<header id="top-bar">
  <?php if (sfConfig::get('app_toggleLogo')) { ?>
    <?php echo link_to(image_tag('logo', ['alt' => 'AtoM']), '@homepage', ['id' => 'logo', 'rel' => 'home']); ?>
  <?php } ?>

  <?php if (sfConfig::get('app_toggleTitle')) { ?>
    <h1 id="site-name">
      <?php echo link_to('<span>'.esc_specialchars(sfConfig::get('app_siteTitle')).'</span>', '@homepage', ['rel' => 'home', 'title' => __('Home')]); ?>
    </h1>
  <?php } ?>

  <nav>
  
    <?php echo get_component('menu', 'userMenu'); ?>
    <?php if (sfConfig::get('app_toggleLanguageMenu')) { ?>
      <?php echo get_component('menu', 'changeLanguageMenu'); ?>
    <?php } ?>
    <?php echo get_component('menu', 'clipboardMenu'); ?>
    <?php echo get_component('menu', 'mainMenu', ['sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID()]); ?>
    <?php echo get_component('menu', 'quickLinksMenu'); ?>
    <div class="menu-header">
    <a href="/" title="Início">Início</a>
    <a href="/about" title="Sobre">Sobre</a>
    <a href="/privacy" title="Política de privacidade">Política de privacidade</a>
  <a href="http://docs.accesstomemory.org/" title="Ajuda">Ajuda</a>
  </div>
  </nav>

  <?php echo get_component_slot('header'); ?>

</header>

<?php if (sfConfig::get('app_toggleDescription')) { ?>
  <div id="site-slogan">
    <div class="container">
    <div class="site-novo-verso3frontendalterado121">
    <?php echo get_component('search', 'box'); ?>
    </div>
      <div class="row">
        <div class="span12">
          <span><?php echo esc_specialchars(sfConfig::get('app_siteDescription')); ?></span>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
