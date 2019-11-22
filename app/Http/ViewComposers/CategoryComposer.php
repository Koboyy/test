<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Services\Contracts\CategoryServiceContract;

class CategoryComposer
{
    protected $category;
    
    public function __construct(CategoryServiceContract $category)
    {
        $this->category = $category;
    }
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $categories = $this->category->all();
        
        $view->with('categories', $categories);
    }
}