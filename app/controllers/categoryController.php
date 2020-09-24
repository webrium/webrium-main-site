<?php
namespace app\controllers;

use app\models\Panel;
use app\models\Categorys;

class categoryController
{

  public function list(){

    $list = Categorys::getAll();

    return Panel::view('category-list',['list'=>$list]);
  }

  public function add(){

    $name = input('name');

    Categorys::save(['name'=>$name]);

    return ['ok'=>true];
  }

  function remove(){

    $id = input('id');

    Categorys::removeById($id);

    return ['ok'=>true];
  }

  function edit(){

    $id = input('id');
    $name = input('name');

    Categorys::update($id,['name'=>$name]);

    return ['ok'=>true];
  }

}
