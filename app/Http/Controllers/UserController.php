<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\User;

class UserController extends Controller
{
    protected $userRepository;
    protected $nbrPerPage = 4;

    public function __construct(UserRepository $usesrRepositpry)
    {
        $this->userRepository = $usesrRepositpry;
    }

    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $user = $this->userRepository->store($request->all());

        return redirect()->route('user.index')->withOk("L'utilisateur " . $user->name . " a été créé.");
    }

    public function show(User $user)
    {
        return view('users.show',  compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',  compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $this->userRepository->update($user, $request->all());

        return redirect()->route('user.index')->withOk("L'utilisateur " . $request->name . " a été modifié.");
    }

    public function destroy(User $user)
    {
        $this->userRepository->destroy($user);

        return back();
    }
}
