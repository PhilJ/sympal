<?php

/**
 * BasesfSympalPluginAuthor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $email
 * @property Doctrine_Collection $Plugins
 * 
 * @method string               getName()    Returns the current record's "name" value
 * @method string               getEmail()   Returns the current record's "email" value
 * @method Doctrine_Collection  getPlugins() Returns the current record's "Plugins" collection
 * @method sfSympalPluginAuthor setName()    Sets the current record's "name" value
 * @method sfSympalPluginAuthor setEmail()   Sets the current record's "email" value
 * @method sfSympalPluginAuthor setPlugins() Sets the current record's "Plugins" collection
 * 
 * @package    sympal
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7200 2010-02-21 09:37:37Z beberlei $
 */
abstract class BasesfSympalPluginAuthor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_sympal_plugin_author');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfSympalPlugin as Plugins', array(
             'local' => 'id',
             'foreign' => 'plugin_author_id'));
    }
}