<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{

    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize("Users-read");
        $users = User::whereNotIn("email", ["admin@admin.com"])->latest()->paginate(150);
        return view("admin.users.index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("Users-create");
        $isSuperAdmin = auth()->user()->hasRole("Super Admin");
        $roles = getAllRoles();
        return view("admin.users.add", get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'username' => ['required', 'unique:users'],
        ]);

        try {
            \DB::beginTransaction();
            $input = $request->all();
            $input["password"] = Hash::make($request->password);

            $user = $this->userRepository->create($input);

            $user->assignRole($request->role);

            return redirect()->route("admin.user.index")->with("success", __('messages.user.create'));

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            return redirect()->route("admin.user.index")->with("error", $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize("Users-update");
        $user->load("roles");
        return view("admin.users.edit", get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($user,$request->all());
        $validated =  $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'is_active' => ['required']
        ]);

        $validated['is_active'] = $request->is_active == "true" ? true : false;
        if ($request->password) {
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);
        $user->syncRoles($request->role);
        return redirect()->route("admin.user.index")->with("success", "User Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize("Users-delete");
        $user->delete();
        return redirect()->route("admin.user.index")->with("success", "User Deleted Successfully");
    }

    public function changePasswordIndex()
    {
        return view("admin.users.changepassword");
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        $input = $request->all();

        try {
            $user = $this->userRepository->changePassword($input);
            return redirect()->back()->with('success', __('messages.user.update_password'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
