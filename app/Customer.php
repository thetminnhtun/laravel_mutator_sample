<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['first_name', 'last_name'];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = title_case($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = title_case($value);
    }

    public function getFullNameAttribute($value)
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getDateAttribute($value)
    {
        return $this->created_at->toFormattedDateString();
    }

    public function getTimeAttribute($value)
    {
        return $this->created_at->diffForHumans();
    }

    public function getAvatarAttribute($value)
    {
        return '<img class="rounded-circle" src="https://api.adorable.io/avatars/50/' . $this->full_name . '.png">';
    }
}
