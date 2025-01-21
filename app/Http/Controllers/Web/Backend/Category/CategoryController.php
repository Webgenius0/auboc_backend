<?php

namespace App\Http\Controllers\Web\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    /**
     * Displays the list of category.
     *
     * This method handles AJAX requests to fetch and return product data
     * in a format suitable for DataTables, including columns for publish
     * products. If not an AJAX request, it returns the main view for products.
     *
     * @param Request $request The incoming HTTP request.
     */

    public function index(Request $request)
    {
        $data = Category::latest();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    $status = '';
                    $status .= '<div class="switch-sm icon-state">';
                    $status .= '<label class="switch">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';

                    // Check if the status is active
                    if ($data->status == "active") {
                        $status .= ' checked';
                    }

                    $status .= '>';
                    $status .= '<span class="switch-state"></span>'; // This is the visual switch
                    $status .= '</label>';
                    $status .= '</div>';
                    $status .= '</div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="' . route('category.edit',  $data->id) . '" type="button" class="action edit text-success" title="Edit">
                                  <i class="icon-pencil-alt"></i>
                                  </a>&nbsp;
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="action delete text-danger" title="Delete">
                                  <i class="icon-trash"></i>
                                </a>
                                </div>';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }

        return view('backend.layouts.category.index');
    }

    /**
     * Show the form for creating a new category dynamic page.
     */

    public function create()
    {
        return view('backend.layouts.category.create');
    }


    /**
     * Store a newly created dynamic page in the database.
     *
     * @param Request $request
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();


        return redirect()->route('category.index')->with('notify-success', 'Category Created Successfully');
    }

    /**
     * Display the specified category to edit and update.
     *
     * @param  string  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.layouts.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('category.index')->with('notify-success', 'Category Updated Successfully');
    }

    /**
     * Delete the specified dynamic page from the category database.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->products()->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot delete category with associated products.',
            ]);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully.',
        ]);
    }


    /**
     * Update the status of a category.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function status($id)
    {
        $data = Category::findOrFail($id);

        if ($data->status == 'active') {
            $data->status = 'inactive';
            $data->save();
            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'active';
            $data->save();
            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        }
    }
}
