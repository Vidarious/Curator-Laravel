<?php

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Mass assignment.
    protected $fillable = ['username',
                           'displayName',
                           'passwordHash',
                           'givenName',
                           'familyName',
                           'email',
                           'statusID'];

    //Use a specific name for ID.
    protected $primaryKey = 'userID';

    //Use a specific table name.
    protected $table = 'User';

    //Relationship: Each user can have a single Status. One to many.
    public function status()
    {
        return $this->belongsTo('Curator\Models\Status', 'statusID', 'statusID');
    }

    //Relationship: Each user can have many activity logs. One to many.
    public function activity()
    {
        return $this->hasMany('Curator\Models\Activity', 'activityID');
    }

    //Relationship: Each user can have many flags. Many to many.
    //User belongsToMany Flag as defined by UserFlag with userID and flagID.
    public function flags()
    {
        return $this->belongsToMany('Curator\Models\Flag', 'UserFlag', 'userID', 'flagID');
    }
/*
    //Relationship: Each user can have many roles.
    public function role()
    {
        return $this->hasMany('Role', 'userID');
    }

    //Relationship: Each user can have many permissions.
    public function permission()
    {
        return $this->hasMany('Permission', 'userID');
    }
    */
}
