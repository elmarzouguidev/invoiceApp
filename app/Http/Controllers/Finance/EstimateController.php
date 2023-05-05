<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    //

    public function index()
    {
        return view('Finance.Estimate.index');
    }
}
