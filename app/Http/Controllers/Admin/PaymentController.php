<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Payment;
use Validator;
use Str;
use Auth;
class PaymentController extends Controller
{
    public function index() {
        $payments = Payment::all();
        return view('admin.payment.index', compact('payments'));
    }

    public function create() {
        return view('admin.payment.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'url_payment' => 'required',
        ]);

        Payment::create([
            'url_payment' => $request->input('url_payment'),
        ]);

        return redirect()->route('payment')->with('success', 'Payment URL created successfully');
    }

    public function destroy($id) {
        $payment = Payment::find($id);
    
        if (!$payment) {
            return redirect()->route('payment')->with('error', 'Payment URL not found');
        }
    
        $payment->delete();
    
        return redirect()->route('payment')->with('success', 'Payment URL deleted successfully');
    }    
}
