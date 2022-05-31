<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var     UserService
     */
    protected UserService $userService;

    /**
     * UserController constructor.
     * @param   UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->userService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create(): View
    {
        return $this->userService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   UserRequest $request
     * @return  JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        return $this->userService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param   User $user
     * @return  View
     */
    public function show(User $user): View
    {
        return $this->userService->show($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   User $user
     * @return  View
     */
    public function edit(User $user): View
    {
        return $this->userService->edit($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   UserRequest $request
     * @param   User $user
     * @return  JsonResponse
     */
    public function update(UserRequest $request, User $user): JsonResponse
    {
        return $this->userService->update($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   User $user
     * @return  JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        return $this->userService->destroy($user);
    }
}
