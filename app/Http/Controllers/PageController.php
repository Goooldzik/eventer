<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @var     PageService
     */
    protected PageService $pageService;

    /**
     * PageController constructor.
     * @param   PageService $pageService
     */
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->pageService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create(): View
    {
        return $this->pageService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   PageRequest $request
     * @return  JsonResponse
     */
    public function store(PageRequest $request): JsonResponse
    {
        return $this->pageService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param   Page $page
     * @return  View
     */
    public function show(Page $page): View
    {
        return $this->pageService->show($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   Page $page
     * @return  View
     */
    public function edit(Page $page): View
    {
        return $this->pageService->edit($page);
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
        return $this->pageService->update($request, $page);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Page $page
     * @return  JsonResponse
     */
    public function destroy(Page $page): JsonResponse
    {
        return $this->pageService->destroy($page);
    }
}
