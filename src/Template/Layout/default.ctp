<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?= $this->Html->link('Articles', ['controller' => 'Articles', 'action' => 'index']) ?></h1>				
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link('New Article', ['controller' => 'Articles', 'action' => 'add']) ?></li>
                <!--<li><?= $this->Html->link('Log In', ['controller' => 'Users', 'action' => 'login']) ?></li>-->
            </ul>
        </section>
    </nav>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
		<nav class="top-bar expanded" data-topbar role="navigation">
			<ul class="title-area large-3 medium-4 columns">
				<li class="name">
					<h1><li><a target="_blank" href="https://github.com/Skim0082/PROG8180_Assignment3.git">SungJoe KIM</a></li></h1>
				</li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li><a target="_blank" href="https://github.com/Skim0082/PROG8180_Assignment3.git">PROG8180 Assignment 3 - GitHub URL</a></li>
				</ul>
			</section>
		</nav>	
	
    </footer>
</body>
</html>
