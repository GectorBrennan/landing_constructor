<?php

namespace App\Services;

use App\Models\Block;

final class BlocksService
{
    /** @var Block $model */
    private $model;

    public function __construct()
    {
        $this->model = Block::class;
    }

    public function store(array $blocks, int $landingId)
    {
        foreach ($blocks as $block) {
            $this->model::create(array_merge([
                'landing_id' => $landingId
            ], $block));
        }
    }

    public function update(array $blocks)
    {
        foreach ($blocks as $block) {
            $this->model::find($block['id'])->update($block);
        }
    }
}