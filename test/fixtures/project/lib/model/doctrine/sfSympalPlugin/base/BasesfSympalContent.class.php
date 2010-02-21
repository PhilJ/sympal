<?php

/**
 * BasesfSympalContent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $site_id
 * @property integer $content_type_id
 * @property integer $last_updated_by_id
 * @property integer $created_by_id
 * @property timestamp $date_published
 * @property string $custom_path
 * @property string $theme
 * @property string $template
 * @property string $module
 * @property string $action
 * @property boolean $publicly_editable
 * @property string $page_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $i18n_slug
 * @property sfGuardUser $LastUpdatedBy
 * @property sfGuardUser $CreatedBy
 * @property sfSympalSite $Site
 * @property sfSympalContentType $Type
 * @property Doctrine_Collection $Groups
 * @property Doctrine_Collection $EditGroups
 * @property Doctrine_Collection $Slots
 * @property Doctrine_Collection $Links
 * @property Doctrine_Collection $Redirects
 * @property Doctrine_Collection $sfSympalContentLinks
 * @property Doctrine_Collection $ContentSlotRefs
 * @property Doctrine_Collection $ContentGroups
 * @property Doctrine_Collection $ContentEditGroups
 * @property sfSympalMenuItem $MenuItem
 * @property Doctrine_Collection $Assets
 * @property Doctrine_Collection $sfSympalContentAssets
 * @property Doctrine_Collection $Comments
 * @property Doctrine_Collection $ContentComments
 * 
 * @method integer             getSiteId()                Returns the current record's "site_id" value
 * @method integer             getContentTypeId()         Returns the current record's "content_type_id" value
 * @method integer             getLastUpdatedById()       Returns the current record's "last_updated_by_id" value
 * @method integer             getCreatedById()           Returns the current record's "created_by_id" value
 * @method timestamp           getDatePublished()         Returns the current record's "date_published" value
 * @method string              getCustomPath()            Returns the current record's "custom_path" value
 * @method string              getTheme()                 Returns the current record's "theme" value
 * @method string              getTemplate()              Returns the current record's "template" value
 * @method string              getModule()                Returns the current record's "module" value
 * @method string              getAction()                Returns the current record's "action" value
 * @method boolean             getPubliclyEditable()      Returns the current record's "publicly_editable" value
 * @method string              getPageTitle()             Returns the current record's "page_title" value
 * @method string              getMetaKeywords()          Returns the current record's "meta_keywords" value
 * @method string              getMetaDescription()       Returns the current record's "meta_description" value
 * @method string              getI18nSlug()              Returns the current record's "i18n_slug" value
 * @method sfGuardUser         getLastUpdatedBy()         Returns the current record's "LastUpdatedBy" value
 * @method sfGuardUser         getCreatedBy()             Returns the current record's "CreatedBy" value
 * @method sfSympalSite        getSite()                  Returns the current record's "Site" value
 * @method sfSympalContentType getType()                  Returns the current record's "Type" value
 * @method Doctrine_Collection getGroups()                Returns the current record's "Groups" collection
 * @method Doctrine_Collection getEditGroups()            Returns the current record's "EditGroups" collection
 * @method Doctrine_Collection getSlots()                 Returns the current record's "Slots" collection
 * @method Doctrine_Collection getLinks()                 Returns the current record's "Links" collection
 * @method Doctrine_Collection getRedirects()             Returns the current record's "Redirects" collection
 * @method Doctrine_Collection getSfSympalContentLinks()  Returns the current record's "sfSympalContentLinks" collection
 * @method Doctrine_Collection getContentSlotRefs()       Returns the current record's "ContentSlotRefs" collection
 * @method Doctrine_Collection getContentGroups()         Returns the current record's "ContentGroups" collection
 * @method Doctrine_Collection getContentEditGroups()     Returns the current record's "ContentEditGroups" collection
 * @method sfSympalMenuItem    getMenuItem()              Returns the current record's "MenuItem" value
 * @method Doctrine_Collection getAssets()                Returns the current record's "Assets" collection
 * @method Doctrine_Collection getSfSympalContentAssets() Returns the current record's "sfSympalContentAssets" collection
 * @method Doctrine_Collection getComments()              Returns the current record's "Comments" collection
 * @method Doctrine_Collection getContentComments()       Returns the current record's "ContentComments" collection
 * @method sfSympalContent     setSiteId()                Sets the current record's "site_id" value
 * @method sfSympalContent     setContentTypeId()         Sets the current record's "content_type_id" value
 * @method sfSympalContent     setLastUpdatedById()       Sets the current record's "last_updated_by_id" value
 * @method sfSympalContent     setCreatedById()           Sets the current record's "created_by_id" value
 * @method sfSympalContent     setDatePublished()         Sets the current record's "date_published" value
 * @method sfSympalContent     setCustomPath()            Sets the current record's "custom_path" value
 * @method sfSympalContent     setTheme()                 Sets the current record's "theme" value
 * @method sfSympalContent     setTemplate()              Sets the current record's "template" value
 * @method sfSympalContent     setModule()                Sets the current record's "module" value
 * @method sfSympalContent     setAction()                Sets the current record's "action" value
 * @method sfSympalContent     setPubliclyEditable()      Sets the current record's "publicly_editable" value
 * @method sfSympalContent     setPageTitle()             Sets the current record's "page_title" value
 * @method sfSympalContent     setMetaKeywords()          Sets the current record's "meta_keywords" value
 * @method sfSympalContent     setMetaDescription()       Sets the current record's "meta_description" value
 * @method sfSympalContent     setI18nSlug()              Sets the current record's "i18n_slug" value
 * @method sfSympalContent     setLastUpdatedBy()         Sets the current record's "LastUpdatedBy" value
 * @method sfSympalContent     setCreatedBy()             Sets the current record's "CreatedBy" value
 * @method sfSympalContent     setSite()                  Sets the current record's "Site" value
 * @method sfSympalContent     setType()                  Sets the current record's "Type" value
 * @method sfSympalContent     setGroups()                Sets the current record's "Groups" collection
 * @method sfSympalContent     setEditGroups()            Sets the current record's "EditGroups" collection
 * @method sfSympalContent     setSlots()                 Sets the current record's "Slots" collection
 * @method sfSympalContent     setLinks()                 Sets the current record's "Links" collection
 * @method sfSympalContent     setRedirects()             Sets the current record's "Redirects" collection
 * @method sfSympalContent     setSfSympalContentLinks()  Sets the current record's "sfSympalContentLinks" collection
 * @method sfSympalContent     setContentSlotRefs()       Sets the current record's "ContentSlotRefs" collection
 * @method sfSympalContent     setContentGroups()         Sets the current record's "ContentGroups" collection
 * @method sfSympalContent     setContentEditGroups()     Sets the current record's "ContentEditGroups" collection
 * @method sfSympalContent     setMenuItem()              Sets the current record's "MenuItem" value
 * @method sfSympalContent     setAssets()                Sets the current record's "Assets" collection
 * @method sfSympalContent     setSfSympalContentAssets() Sets the current record's "sfSympalContentAssets" collection
 * @method sfSympalContent     setComments()              Sets the current record's "Comments" collection
 * @method sfSympalContent     setContentComments()       Sets the current record's "ContentComments" collection
 * 
 * @package    sympal
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasesfSympalContent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_sympal_content');
        $this->hasColumn('site_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('content_type_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('last_updated_by_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('created_by_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('date_published', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('custom_path', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('theme', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('template', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('module', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('action', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('publicly_editable', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('page_title', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('meta_keywords', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('meta_description', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('i18n_slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));


        $this->index('date_published', array(
             'fields' => 
             array(
              0 => 'date_published',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as LastUpdatedBy', array(
             'local' => 'last_updated_by_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('sfGuardUser as CreatedBy', array(
             'local' => 'created_by_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('sfSympalSite as Site', array(
             'local' => 'site_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfSympalContentType as Type', array(
             'local' => 'content_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('sfGuardGroup as Groups', array(
             'refClass' => 'sfSympalContentGroup',
             'local' => 'content_id',
             'foreign' => 'group_id'));

        $this->hasMany('sfGuardGroup as EditGroups', array(
             'refClass' => 'sfSympalContentEditGroup',
             'local' => 'content_id',
             'foreign' => 'group_id'));

        $this->hasMany('sfSympalContentSlot as Slots', array(
             'refClass' => 'sfSympalContentSlotRef',
             'local' => 'content_id',
             'foreign' => 'content_slot_id'));

        $this->hasMany('sfSympalContent as Links', array(
             'refClass' => 'sfSympalContentLink',
             'local' => 'content_id',
             'foreign' => 'linked_content_id'));

        $this->hasMany('sfSympalRedirect as Redirects', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasMany('sfSympalContentLink as sfSympalContentLinks', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasMany('sfSympalContentSlotRef as ContentSlotRefs', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasMany('sfSympalContentGroup as ContentGroups', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasMany('sfSympalContentEditGroup as ContentEditGroups', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasOne('sfSympalMenuItem as MenuItem', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasMany('sfSympalAsset as Assets', array(
             'refClass' => 'sfSympalContentAsset',
             'local' => 'content_id',
             'foreign' => 'asset_id'));

        $this->hasMany('sfSympalContentAsset as sfSympalContentAssets', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $this->hasMany('sfSympalComment as Comments', array(
             'refClass' => 'sfSympalContentComment',
             'local' => 'content_id',
             'foreign' => 'comment_id'));

        $this->hasMany('sfSympalContentComment as ContentComments', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sfsympalrecordtemplate0 = new sfSympalRecordTemplate();
        $this->actAs($timestampable0);
        $this->actAs($sfsympalrecordtemplate0);
    }
}