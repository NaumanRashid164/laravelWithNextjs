<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends BaseController
{
    /** @var UserRepository */
    private $userRepository;

    public function  __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $user = $request->user();
        return $this->sendResponse($user, "");
    }
    /**
     * Display a listing of the resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function register(StoreUserRequest $request)
    {

        try {
            \DB::beginTransaction();
            $input = $request->all();
            $input['email_verified_at'] = now();
            $input["password"] = Hash::make($request->password);

            $user = $this->userRepository->create($input);
            $user["token"] = $user->createToken('Register')->accessToken;
            \DB::commit();
            return $this->sendResponse($user, __('messages.user.create'));
        } catch (\Exception $e) {
            \DB::rollBack();
            return $this->sendError($e->getMessage(), $e->getCode());
        }
    }

    public function login(Request $request): JsonResponse
    {
        $validated =  $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) {
            $user = Auth::user();
            $user["token"] = $user->createToken('Login')->accessToken;
            return $this->sendResponse($user, __('messages.user.login'));
        } else {
            return response()->json([
                'success' => true,
                'statusCode' => 401,
                'message' => 'Unauthorized.',
                'errors' => 'Unauthorized',
            ], 401);
        }
    }
}
