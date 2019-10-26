<?php

namespace App\Services;

use App\Models\{
    ExpertLink, Landing, ProductLink
};
use Illuminate\Http\Request;

final class ImagesService
{
    /** @var mixed $sdk */
    private $sdk;

    public function __construct()
    {
        $this->sdk = resolve('se_sdk');
    }

    public function store($file, string $folderName): string
    {
        return $this->sdk->s3->putFileFromBase64($file, $folderName);
    }

    public function storeMany(array $attachments, string $folderName): string
    {
        $attachments = $this->sdk->s3->putFiles($attachments, $folderName);

        return json_encode($attachments);
    }
}