<?php
/**
 * Created by PhpStorm.
 * User: FVHBB94
 * Date: 22/12/2016
 * Time: 14:12
 */
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;//todo: change
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src/App/domain"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',//'9cnHadtZTjoGtzUPY8ge',
    'dbname'   => 'gamedb',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);