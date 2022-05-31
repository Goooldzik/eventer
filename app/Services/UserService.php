<?php


namespace App\Services;


use App\Http\Kernel;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('dashboard.users.index', [
            'users' => User::query()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create(): View
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   UserRequest $request
     * @return  JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        try {

            User::query()
                ->create($request->validated() + ['password' => Hash::make($request->get('password'))]);

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie utworzono użytkownika!'
                ]);

        } catch (Exception $exception) {

            return response()
                ->json([
                    'status' => 'error',
                    'message' => $exception->getMessage()
                ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param   User $user
     * @return  View
     */
    public function show(User $user): View
    {
        return view('dashboard.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   User $user
     * @return  View
     */
    public function edit(User $user): View
    {
        return view('dashboard.users.edit', [
            'user' => $user
        ]);
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
        try {

            $user->update($request->validated());

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie edytowano użytkownika!'
                ]);

        } catch (Exception $exception) {

            return response()
                ->json([
                    'status' => 'error',
                    'message' => $exception->getMessage()
                ]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   User $user
     * @return  JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        try {

        $user->delete();

        return response()
            ->json([
                'status' => 'success',
                'message' => 'Pomyślnie usunięto użytkownika!'
            ]);

    } catch (Exception $exception) {

        return response()
            ->json([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);

    }
    }
}
