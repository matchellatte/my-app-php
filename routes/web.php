<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/loan', function () {
    return view('loan-form');
});

Route::post('/loan', function (Request $request) {
    $loanAmount = $request->input('loan_amount');
    $paymentTerms = $request->input('payment_terms');

    $interest = $loanAmount * 0.01 * $paymentTerms;

    $monthlyAmortization = ($loanAmount + $interest) / $paymentTerms;

    return view('loan-result', [
        'loanAmount' => $loanAmount,
        'paymentTerms' => $paymentTerms,
        'interest' => $interest,
        'monthlyAmortization' => $monthlyAmortization
    ]);
});

Route::post('/loan/clear', function () {
    return redirect('/loan');
});
