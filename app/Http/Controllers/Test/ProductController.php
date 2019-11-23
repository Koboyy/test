<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }
    
    public function index()
    {
        $products = $this->product->paginate(10);
        
        return view('work_test.product.index', compact('products'));
    }
    
    public function create()
    {
        return view('work_test.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['photo'] = null;
        
        if ($request->hasFile('photo')) {
            $data['photo'] = saveFile($request->name, $request->file('photo'));
        }
        
        $this->product->create($data);
        
        return redirect()->route('work_test.products.index');
    }

    public function edit($id)
    {
        $product = $this->product->find($id);

        return view('work_test.product.edit', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');

        $product = $this->product->find($id);
        
        if ($request->hasFile('photo')) {
            !empty($product->photo) ? deleteFile('uploads/product/', $product->photo):null;
            $data['photo'] = saveFile($request->name, $request->file('photo'));
        }

        $this->product->update($data, $id);
        
        return redirect()->route('work_test.products.index');
    }
    
    public function destroy($id)
    {
        $product = $this->product->find($id);

        if (!empty($product->photo)) {
            deleteFile('uploads/product/', $product->photo);
        }

        $this->product->delete($id);

        return redirect()->back();
    }
}
