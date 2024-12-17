<?php

namespace App\Repositories;

use App\Models\Post;

use Auth;
use Carbon\Carbon;
use Exception;
use Hash;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class PostRepository
 *
 */
class PostRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return Post::class;
    }

}
