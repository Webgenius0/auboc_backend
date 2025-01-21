<?php

namespace App\Http\Controllers\Web\Backend\FAQ;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{
    /**
     * Displays the list of frequently asked questions(faq).
     *
     * This method handles AJAX requests to fetch and return faq's data
     * in a format suitable for DataTables, including columns for publish
     * products. If not an AJAX request, it returns the main view for process.
     *
     * @param Request $request The incoming HTTP request.
     */
    public function index(Request $request)
    {
        $data = faq::latest();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('question', function ($data) {
                    $question = $data->question;
                    $shortQuestion = strlen($question) > 55 ? substr($question, 0, 55) . '...' : $question;
                    return '<span class="question-tooltip" style="cursor: pointer;" title="' . $question . '">' . $shortQuestion . '</span>';
                })
                ->addColumn('answer', function ($data) {
                    $answer = $data->answer;
                    $shortAnswer = strlen($answer) > 55 ? substr($answer, 0, 55) . '...' : $answer;
                    return '<span class="question-tooltip" style="cursor: pointer;" title="' . $answer . '">' . $shortAnswer . '</span>';
                })
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
                                  <a href="' . route('faq.edit',  $data->id) . '" type="button" class="action edit text-success" title="Edit">
                                  <i class="icon-pencil-alt"></i>
                                  </a>&nbsp;
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="action delete text-danger" title="Delete">
                                  <i class="icon-trash"></i>
                                </a>
                                </div>';
                })
                ->rawColumns(['question', 'answer', 'status', 'action'])
                ->filterColumn('question', function ($query, $keyword) {
                    $query->where('question', 'like', "%{$keyword}%");
                })
                ->filterColumn('answer', function ($query, $keyword) {
                    $query->where('answer', 'like', "%{$keyword}%");
                })
                ->make(true);
        }

        return view('backend.layouts.faq.index');
    }



    /**
     * Show the form for creating a new faq dynamic page.
     */
    public function create()
    {
        return view('backend.layouts.faq.create');
    }



    /**
     * Store a newly created faq page in the database.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer'   => 'required',
        ]);


        $data = new faq();
        $data->question = $request->question;
        $data->answer   = $request->answer;
        $data->save();

        return redirect()->route('faq.index')->with('notify-success', 'Faq Created Successfully');
    }

    /**
     * Display the specified faq to edit and update.
     *
     * @param  string  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */

    public function edit($id)
    {
        $data = faq::find($id);
        return view('backend.layouts.faq.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer'   => 'required',
        ]);


        $data = faq::find($id);
        $data->question = $request->question;
        $data->answer   = $request->answer;
        $data->save();

        return redirect()->route('faq.index')->with('notify-success', 'Faq Updated Successfully');
    }
    /**
     * Delete the specified dynamic page from the faq database.
     *
     * @param int $id
     */
    public function destroy($id)
    {

        $data = faq::find($id);

        $data->delete();

        return response()->json([
            'success' => true,
            'message'   => 'Deleted successfully.',
        ]);
    }


    /**
     * Update the status of a faq.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function status($id)
    {
        $data = faq::findOrFail($id);

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
