<?php
/*
 * @file Template file for Quickstart/First Steps block.
 */

/*
 * Variables
 */
$images = drupal_get_path('module', 'stanford_sites_helper') . '/images/';
$edit_site_info = l(t("Edit Your Site's Information"), 'admin/config/system/site-information', array('attributes' => array('class' => array('btn'))));
$create_new_page = l(t("Create a New Page"), 'node/add/page', array('attributes' => array('class' => array('btn'))));
$learn_more_content_types = l(t("Learn more about content types in Drupal"), 'http://drupal.org/node/21947');
$edit_main_menu = l(t("Edit Your Main Menu"), 'admin/structure/menu/manage/main-menu', array('attributes' => array('class' => array('btn'))));
$create_new_menu = l(t("Create a New Menu"), 'admin/structure/menu/add', array('attributes' => array('class' => array('btn'))));
$learn_more_menus = l(t("Learn more about menus in Drupal"), 'http://drupal.org/documentation/modules/menu');
$modules = l(t("Visit Your Modules"), 'admin/modules', array('attributes' => array('class' => array('btn'))));
$learn_more_modules = l(t("Learn more about the available modules on Stanford Sites"), 'https://itservices.stanford.edu/service/web/stanfordsites/userguide');
$edit_theme_settings = l(t("Edit Your Theme Settings"), 'admin/appearance/settings', array('attributes' => array('class' => array('btn'))));
$create_css_injector = l(t("Create a CSS Injector rule"), 'admin/config/development/css-injector/add');
$add_user = l(t("Add a new user"), 'admin/people/create');
$add_role = l(t("Create a new user role"), 'admin/people/permissions/roles');
$edit_permissions = l(t("Edit permissions"), 'admin/people/permissions');
$edit_blocks = l(t("Adjust the layout of your blocks"), 'admin/structure/block');
$create_view = l(t("Create a new View"), 'admin/structure/views/add');
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif;?>
  <?php print render($title_suffix); ?>
  
  <div id="welcome">
  <h1>Quick steps to get started:</h1>
  <div id="quickstart">
    <ol>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>plant.png" alt="plant"> <span class="fieldset-legend">Change your site's name and information</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">You can rename your site, add a slogan, or set an existing page to be the homepage of your site by visiting the site information page.</p>
            <p> <?php print $edit_site_info; ?> </p>
            
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>pencil.png" alt="pencil"> <span class="fieldset-legend">Add content to your homepage</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Use your homepage to add a static welcome or introduction to your site.</p>
            <p><a href="#" class="btn">Edit Your Homepage</a></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>plus.png" alt="plus"> <span class="fieldset-legend">Create a new page on your site</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Do you want an &quot;about&quot; or other page  on your site? When creating new pages, you can directly add them to the Main Menu navigation in the Menu Settings section of the form.</p>
            <p><?php print $create_new_page; ?></p>
            <p><?php print $learn_more_content_types; ?></p>
          </div>
        </fieldset>
      </li>
    </ol>
  </div>
  <h1>More advanced tasks:</h1>
  <div id="nextsteps">
    <ol>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>menu.png" alt="menu"> <span class="fieldset-legend">Edit your  navigation menus</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Drupal comes pre-packaged with a Main menu navigation  to which you can add your existing pages. First create new pages, and then add them to your menu. You can create a new menu and add items to it by visiting the Menus page. Move your menus around using the Blocks page.</p>
            <p><?php print $edit_main_menu; ?><?php print $create_new_menu; ?></p>
            <p><?php print $learn_more_menus; ?></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>gear.png" alt="gear"> <span class="fieldset-legend">Add functionality and features</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Want to add a blog to your site? Looking to do more with your site? Enable functionality on the Modules page, but first you might want to learn what the available modules do and why you might want to enable them.</p>
            <p><?php print $modules; ?></p>
            <p><?php print $learn_more_modules; ?></p>
          </div>
        </fieldset>
      </li>
      <li>
        <fieldset class="field-group-fieldset collapsible collapsed">
          <legend><img src="<?php print $images ?>brush.png" alt="brush"> <span class="fieldset-legend">Edit the look and feel of your site</span></legend>
          <div class="fieldset-wrapper">
            <p class="intro">Your site comes pre-packaged with the Stanford Basic theme. Edit the settings for Stanford Basic to add a background image and change the color scheme. If you're looking to do more custom CSS for your site, use the CSS Injector module.</p>
            <p><?php print $edit_theme_settings; ?></p>
            <p><?php print $create_css_injector; ?></p>
          </div>
        </fieldset>
      </li>
    </ol>
  </div>
  <h1>Going further:</h1>
  <div id="shortcuts">
    <ul>
      <li><?php print $add_user; ?></li>
      <li><?php print $add_role; ?></li>
      <li><?php print $edit_permissions; ?></li>
      <li><?php print $edit_blocks; ?></li>
      <li><?php print $create_view; ?></li>
    </ul>
  </div>
</div>
