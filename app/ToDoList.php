<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class ToDoList extends Model
{

    protected $fillable = [
        'title' , 'description'

    ];
 

}
