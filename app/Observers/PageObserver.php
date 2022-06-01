<?php

namespace App\Observers;

use App\Helpers\Sluggable;
use App\Models\Page;

class PageObserver
{
    /**
     *
     * @param   Page $page
     * @return  void
     */
    public function creating(Page $page)
    {
        $page->slug = Sluggable::generateSlug($page->title);
    }

    /**
     * Handle the Page "created" event.
     *
     * @param   Page $page
     * @return  void
     */
    public function created(Page $page)
    {
        //
    }

    /**
     * Handle the Page "updated" event.
     *
     * @param   Page $page
     * @return  void
     */
    public function updated(Page $page)
    {
        //
    }

    /**
     * Handle the Page "deleted" event.
     *
     * @param   Page $page
     * @return  void
     */
    public function deleted(Page $page)
    {
        //
    }

    /**
     * Handle the Page "restored" event.
     *
     * @param   Page $page
     * @return  void
     */
    public function restored(Page $page)
    {
        //
    }

    /**
     * Handle the Page "force deleted" event.
     *
     * @param   Page $page
     * @return  void
     */
    public function forceDeleted(Page $page)
    {
        //
    }
}
