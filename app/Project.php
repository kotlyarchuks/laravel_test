<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use \App\Task;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'user_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
