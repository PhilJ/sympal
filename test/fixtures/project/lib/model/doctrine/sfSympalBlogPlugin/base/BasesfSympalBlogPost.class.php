<?php

/**
 * BasesfSympalBlogPost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property clob $teaser
 * 
 * @method string           getTitle()  Returns the current record's "title" value
 * @method clob             getTeaser() Returns the current record's "teaser" value
 * @method sfSympalBlogPost setTitle()  Sets the current record's "title" value
 * @method sfSympalBlogPost setTeaser() Sets the current record's "teaser" value
 * 
 * @package    sympal
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasesfSympalBlogPost extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_sympal_blog_post');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('teaser', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $sfsympalcontenttypetemplate0 = new sfSympalContentTypeTemplate();
        $this->actAs($sfsympalcontenttypetemplate0);
    }
}