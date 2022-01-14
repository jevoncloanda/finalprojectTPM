<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function addPayment(Request $request, $id){

        $user = User::find($id);

        $file = $request->payment;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->payment->move('storagePayment',$filename);

        $user->update([
            'payment'=>$filename,
            'verification_status' => false,
        ]);

        return redirect(route(''));

    }

    public function viewPayment(Request $request, $id)
    {
        $user = User::find($id);
        return view('', compact('user'));
    }

    public function approvePayment($id){

        $user = User::find($id);

        $user->update([
            'verification_status' => true,
        ]);

        return redirect(route(''));
    }

    public function declinePayment($id){

        $user = User::find($id);

        $user->update([
            'verification_status'=> null,
        ]);

        return redirect(route(''));
    }

}
