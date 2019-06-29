<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 28/06/19
 * Time: 17:09
 */

namespace App\Http\Repositories\impl;


use App\Http\Repositories\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
protected $model;
public function __construct()
{
    $this->setModel();
}
abstract public function getModel();
public function setModel(){
    $this->model = app()->make($this->getModel());
}
public function getAll()
{
    return $this->model->all();
}
}