<?php
namespace app\controllers;

use app\models\Panel;
use app\models\User;
use app\models\Categorys;
use app\models\Admin;
use app\models\Settings;

use webrium\core\Session;

use Gregwar\Captcha\CaptchaBuilder;

class settingsController
{

  public function index()
  {
    $config = Settings::config();
    $configArray = Settings::getAllConfigArray();

    return Panel::view('settings',['config'=>$config,'configArray'=>$configArray]);
  }

  public function save(){
    Settings::save();
    return['ok'=>true];
  }

  public function removeConfig()
  {
    Settings::removeConfig(input('name',false));
    return['ok'=>true];
  }

  public function itemsPage()
  {
    $id = input('id',false);
    if ($id) {
      $config = Settings::getConfigById($id);
      return Panel::view('items-manage',['config'=>$config]);
    }
    else {
      return Panel::view('items-manage');
    }
  }

  public function saveItems()
  {
    Settings::saveItems();
    return['ok'=>true];
  }
}
