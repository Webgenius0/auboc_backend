<?php

namespace App\Http\Controllers\Web\Backend\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubscriptionController extends Controller
{
//    public function index()
//    {
//        $subscriptions = Subscription::all();
//        return view('backend.layouts.subscription.index', compact('subscriptions'));
//    }



    public function index(Request $request)
    {
        $data = Subscription::latest();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    // Format the date
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->make(true);
        }

        return view('backend.layouts.subscription.index');
    }
}
