<?php

namespace App\Repositories;


use App\Models\Setting;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Exception;
use Hash;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class UserRepository
 *
 * @version January 11, 2020, 11:09 am UTC
 */
class UserRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return User::class;
    }


    public function changePassword($input)
    {
        try {
            $user = Auth::user();
            if (! Hash::check($input['current_password'], $user->password)) {
                throw new UnprocessableEntityHttpException(__('messages.user.invalid_password'));
            }
            $input['password'] = Hash::make($input['password']);
            $user->update($input);

            return true;
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

}
