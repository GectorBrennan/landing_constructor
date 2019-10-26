<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Block extends Model
{
    const DEFAULT_BLOCKS_DIRECTORY = 'blocks/images';

    const STATE_HIDE = 0;
    const STATE_SHOW = 1;

    protected $fillable = [
        'landing_id',
        'type',
        'order',
        'state',
        'content',
        'title'
    ];

    protected $casts = [
        'state' => 'boolean',
        'content' => 'array'
    ];

    public function landing()
    {
        return $this->hasMany(Landing::class);
    }

    public function getTitleAttribute($value)
    {
        return ['text' => $value];
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value['text'];
    }
}
