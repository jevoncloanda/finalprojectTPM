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
            'verification_status' => 'unverified',
        ]);

        return redirect(route('getPaymentPage'));
    }

    public function viewPayment(Request $request, $id)
    {
        $user = User::find($id);
        return view('', compact('user'));
    }

    public function acceptPayment($id){

        $user = User::find($id);

        $user->update([
            'verification_status' => 'verified',
        ]);

        return redirect(route('getTeamPayment'));
    }

    public function rejectPayment($id){

        $user = User::find($id);

        $user->update([
            'verification_status'=> null,
        ]);

        return redirect(route('getTeamPayment'));
    }

}
