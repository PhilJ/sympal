<?php

/**
 * BasesfSympalContentList
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property integer $content_type_id
 * @property integer $rows_per_page
 * @property string $sort_column
 * @property enum $sort_order
 * @property string $table_method
 * @property clob $dql_query
 * @property sfSympalContentType $ContentType
 * 
 * @method string              getTitle()           Returns the current record's "title" value
 * @method integer             getContentTypeId()   Returns the current record's "content_type_id" value
 * @method integer             getRowsPerPage()     Returns the current record's "rows_per_page" value
 * @method string              getSortColumn()      Returns the current record's "sort_column" value
 * @method enum                getSortOrder()       Returns the current record's "sort_order" value
 * @method string              getTableMethod()     Returns the current record's "table_method" value
 * @method clob                getDqlQuery()        Returns the current record's "dql_query" value
 * @method sfSympalContentType getContentType()     Returns the current record's "ContentType" value
 * @method sfSympalContentList setTitle()           Sets the current record's "title" value
 * @method sfSympalContentList setContentTypeId()   Sets the current record's "content_type_id" value
 * @method sfSympalContentList setRowsPerPage()     Sets the current record's "rows_per_page" value
 * @method sfSympalContentList setSortColumn()      Sets the current record's "sort_column" value
 * @method sfSympalContentList setSortOrder()       Sets the current record's "sort_order" value
 * @method sfSympalContentList setTableMethod()     Sets the current record's "table_method" value
 * @method sfSympalContentList setDqlQuery()        Sets the current record's "dql_query" value
 * @method sfSympalContentList setContentType()     Sets the current record's "ContentType" value
 * 
 * @package    sympal
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7200 2010-02-21 09:37:37Z beberlei $
 */
abstract class BasesfSympalContentList extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_sympal_content_list');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('content_type_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('rows_per_page', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sort_column', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('sort_order', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'ASC',
              1 => 'DESC',
             ),
             ));
        $this->hasColumn('table_method', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('dql_query', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfSympalContentType as ContentType', array(
             'local' => 'content_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $sfsympalcontenttypetemplate0 = new sfSympalContentTypeTemplate();
        $this->actAs($sfsympalcontenttypetemplate0);
    }
}