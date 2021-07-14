<?php

// namespace Sakura;

define('SAKURA_VERSION', wp_get_theme()->get('Version'));
define('SAKURA_TEXT_DOMAIN', wp_get_theme()->get('TextDomain'));

define('SAKURA_DEVEPLOMENT', true);
define('SAKURA_DEVEPLOMENT_HOST', 'http://127.0.0.1:9000');

// PHP loaders
require_once(__DIR__ . '/loader.php');

new Sakura\Helpers\SetupHelper();
new Sakura\Helpers\WhoopsHelper();
new Sakura\Helpers\ViteHelper();
new Sakura\Helpers\AdminPageHelper();
new Sakura\Helpers\CustomMenuMetaFieldsHelper();
new Sakura\Helpers\CommentHelper();
new Sakura\Helpers\PostQueryHelper('post');

new Sakura\Routers\ApiRouter();
new Sakura\Routers\PagesRouter();

function sakura_options(string $namespace, $default)
{
  $CF = new Sakura\Controllers\ConfigurationController();
  return $CF->sakura_options($namespace, $default);
}
