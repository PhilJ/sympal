<?php

abstract class sfSympalVersionUpgrade extends sfSympalUpgrade
{
  protected
    $_version,
    $_number;

  public function upgrade()
  {
    $result = parent::upgrade();

    $versionHistory = sfSympalConfig::get('upgrade_version_history', null, array());
    $versionHistory[] = $this->_version.'__'.$this->_number;

    sfSympalConfig::writeSetting('upgrade_version_history', $versionHistory);

    return $result;
  }

  public function setVersion($version)
  {
    $this->_version = $version;
  }

  public function setNumber($number)
  {
    $this->_number = $number;
  }

  /**
   * Returns a finder that exclude upgrade scripts from being upgraded!
   *
   * @param  string $type String directory or file or any (for both file and directory)
   *
   * @return sfFinder A sfFinder instance
   */
  protected function _getFinder($type)
  {
    return sfFinder::type($type)->prune('symfony')->prune('versions')->discard('symfony');
  }

  public function _getPluginDirectories()
  {
    return $this->_configuration->getPluginPaths();
  }

  /**
   * Returns all project directories where you can put PHP classes.
   */
  protected function _getProjectClassDirectories()
  {
    return array_merge(
      $this->_getProjectLibDirectories(),
      $this->_getProjectActionDirectories()
    );
  }

  /**
   * Returns all project directories where you can put templates.
   */
  protected function _getProjectTemplateDirectories()
  {
    return array_merge(
      glob(sfConfig::get('sf_apps_dir').'/*/modules/*/templates'),
      glob(sfConfig::get('sf_apps_dir').'/*/templates')
    );
  }

  /**
   * Returns all project directories where you can put actions and components.
   */
  protected function _getProjectActionDirectories()
  {
    return glob(sfConfig::get('sf_apps_dir').'/*/modules/*/actions');
  }

  /**
   * Returns all project lib directories.
   * 
   * @param string $subdirectory A subdirectory within lib (i.e. "/form")
   */
  protected function _getProjectLibDirectories($subdirectory = null)
  {
    return array_merge(
      glob(sfConfig::get('sf_apps_dir').'/*/modules/*/lib'.$subdirectory),
      glob(sfConfig::get('sf_apps_dir').'/*/lib'.$subdirectory),
      array(
        sfConfig::get('sf_apps_dir').'/lib'.$subdirectory,
        sfConfig::get('sf_lib_dir').$subdirectory,
      )
    );
  }

  /**
   * Returns all project config directories.
   */
  protected function _getProjectConfigDirectories()
  {
    return array_merge(
      glob(sfConfig::get('sf_apps_dir').'/*/modules/*/config'),
      glob(sfConfig::get('sf_apps_dir').'/*/config'),
      glob(sfConfig::get('sf_config_dir'))
    );
  }

  /**
   * Returns all application names.
   *
   * @return array An array of application names
   */
  protected function _getApplications()
  {
    return sfFinder::type('dir')->maxdepth(0)->relative()->in(sfConfig::get('sf_apps_dir'));
  }
}