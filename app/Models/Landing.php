<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Landing extends Model
{
    const DEFAULT_LOGOS_DIRECTORY = 'landings/logos';

    const STATUS_UNPUBLISHED = 0;
    const STATUS_PUBLISHED = 1;

    protected $fillable = [
        'user_id',
        'landable_id',
        'landable_type',
        'name',
        'logo',
        'domain',
        'scripts',
        'status',
        'meta_title',
        'meta_description'
    ];

    protected $casts = [
        'status' => 'int',
    ];

    public function landable()
    {
        return $this->morphTo();
    }

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }

    public function getLogoAttribute($value)
    {
        return ['img' => $value];
    }

    public function setLogoAttribute($value)
    {
        $this->attributes['logo'] = $value['img'];
    }

    public function getNameAttribute($value)
    {
        return ['text' => $value];
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value['text'];
    }
}
