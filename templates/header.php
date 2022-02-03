<?php /** @var Copper\Component\Templating\ViewHandler $view */

use Copper\Component\AssetsManager\AssetsManager;
use Copper\Component\HTML\HTML;
use Copper\Kernel;

$title = $view->dataBag->get('title', $view->appConfig->title);
$description = $view->dataBag->get('description', $view->appConfig->description);
$author = $view->dataBag->get('author', $view->appConfig->author);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $view->out($title) ?></title>
    <?= HTML::meta('description', $description) . PHP_EOL ?>
    <?= HTML::meta('author', $author) . PHP_EOL ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= Kernel::getAppPublicUri('apple-touch-icon.png', true) ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Kernel::getAppPublicUri('favicon-32x32.png', true) ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Kernel::getAppPublicUri('favicon-16x16.png', true) ?>">
    <link rel="manifest" href="<?= Kernel::getAppPublicUri('site.webmanifest', true) ?>">
    <link rel="mask-icon" href="<?= Kernel::getAppPublicUri('safari-pinned-tab.svg', true) ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?= AssetsManager::css('style.css') ?>
    <?= AssetsManager::js('script.js') ?>
</head>