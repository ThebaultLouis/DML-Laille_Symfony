<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\BaseListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\CleanListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Adapter\\AdapterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Adapter\\ORM\\DoctrineORMAdapter.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\RemoveListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\UploadListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

$a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$b = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
$c = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
$d = ($this->services['vich_uploader.upload_handler'] ?? $this->load('getVichUploader_UploadHandlerService.php'));

$a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('brochure', $b, $c, $d));
$a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('brochure', $b, $c, $d));
$a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('brochure', $b, $c, $d));
$a->addEventListener(array(0 => 'loadClassMetadata'), new \Doctrine\ORM\Tools\AttachEntityListenersListener());

return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array()))->createConnection(array('driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array(), 'serverVersion' => '5.7', 'defaultTableOptions' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci')), new \Doctrine\DBAL\Configuration(), $a, array());
