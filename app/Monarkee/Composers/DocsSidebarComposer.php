<?php namespace Monarkee\Composers;

use Monarkee\Models\Page;

class DocsSidebarComposer
{
    /**
     * @var Page
     */
    private $page;

    function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function compose($view)
    {
        $view->with('pageLinks', $this->page->active()->docs()->orderBy('sort', 'asc')->get());
    }
}
