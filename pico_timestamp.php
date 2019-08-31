<?php

/**
 * Pico Timestamp Plugin
 * ファイルのタイムスタンプを表示するプラグイン
 *
 * @author  Takami Chie
 * @link    http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */
final class Pico_Timestamp extends AbstractPicoPlugin
{
  protected $enabled = false;

  private $content_dir;

  private $content_ext;

  public function onConfigLoaded(array &$config)
  {
    $this->contend_dir = $config["content_dir"];
    $this->contend_ext = $config["content_ext"];
  }

  public function onSinglePageLoaded(array &$pageData)
  {
    $fn = $this->contend_dir . $pageData["id"] . $this->contend_ext;
    $pageData['fileupdate'] = filemtime($fn);
  }
  
}
