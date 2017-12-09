<?php
namespace Magenest\Movie\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface {
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context){
        //if (version_compare($context->getVersion(), '1.0.1') < 0) {
            $installer = $setup;
            $installer->startSetup();
            $connect = $installer->getConnection();

            $magenest_director = $installer->getConnection()->newTable(
                $installer->getTable('magenest_director')
            )->addColumn(
                'director_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,[
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'Director Id'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Name of Director'
            )->setComment('Magenest director')->setOption('type', 'InnoDB')->setOption('charset','utf8');
            $installer->getConnection()->createTable($magenest_director);

            $magenest_movie = $installer->getConnection()->newTable(
                $installer->getTable('magenest_movie')
            )->addColumn(
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'Movie Id'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Name of Movie'
            )->addColumn(
                'description',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Description of Movie'
            )->addColumn(
                'rating',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                11,
                [],
                'Rating of Movie'
            )->addColumn(
                'director_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                11,
                [],
                'Director Id'
            )->setComment('Add new table')->setOption('type', 'InnoDB')->setOption('charset', 'utf8');
            $installer->getConnection()->createTable($magenest_movie);

            $magenest_actor = $installer->getConnection()->newTable(
                $installer->getTable('magenest_actor')
            )->addColumn(
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,[
                    'identity' => true,
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true
                ],
                'Actor Id'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Name of Actor'
            )->setComment('Magenest Actor')->setOption('type','InnoDB')->setOption('charset','utf8');
            $installer->getConnection()->createTable($magenest_actor);

            $magenest_movie_actor = $installer->getConnection()->newTable(
                $installer->getTable('magenest_movie_actor')
            )->addColumn(
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                11,
                [],
                'Movie Id'
            )->addColumn(
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                11,
                [],
                'Actor Id'
            )->setComment('Magenest Movie Actor')->setOption('type','InnoDB')->setOption('charser','utf8');
            $installer->getConnection()->createTable($magenest_movie_actor);
       // }
        $installer->endSetup();
    }
}