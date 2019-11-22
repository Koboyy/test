<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $categories;

    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }
    
    public function index()
    {
        $categories = $this->categories->paginate(10);
        
        return view('work_test.category.index', compact('categories'));
    }
    
    public function create()
    {
        return view('work_test.category.create');
    }

    public function store(Request $request)
    {
        $this->categories->create($request->all());
        
        return redirect()->route('work_test.categories.index');
    }

    public function edit($id)
    {
        $category = $this->categories->find($id);

        return view('work_test.category.edit', compact('category'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');

        $this->categories->update($data, $id);
        
        return redirect()->route('work_test.categories.index');
    }
    
    public function destroy($id)
    {
        $this->categories->delete($id);

        return redirect()->back();
    }
}
