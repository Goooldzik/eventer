<?php


namespace App\Services;


use App\Http\Requests\PageRequest;
use App\Models\Page;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class PageService
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('dashboard.pages.index', [
            'pages' => Page::query()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create(): View
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   PageRequest $request
     * @return  JsonResponse
     */
    public function store(PageRequest $request): JsonResponse
    {
        try {

            Page::query()
                ->create($request->validated());

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie utworzono podstrone!'
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
     * @param   Page $page
     * @return  View
     */
    public function show(Page $page): View
    {
        return view('pages.show', [
            'page' => $page
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   Page $page
     * @return  View
     */
    public function edit(Page $page): View
    {
        return view('dashboard.pages.edit', [
            'page' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   PageRequest $request
     * @param   Page $page
     * @return  JsonResponse
     */
    public function update(PageRequest $request, Page $page): JsonResponse
    {
        try {

            $page->update($request->validated());

            return response()
                ->json([
                   'status' => 'success',
                   'message' => 'Pomyślnie edytowano podstrone!'
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
     * @param   Page $page
     * @return  JsonResponse
     */
    public function destroy(Page $page): JsonResponse
    {
        try {

            $page->delete();

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie usunięto podstrone!'
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
