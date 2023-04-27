<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class BaseModel extends Model {
public $referance_culomn;
function __construct()
{
$this->referance_culomn = "id";
}

}


























?>
