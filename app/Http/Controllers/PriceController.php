<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Models\Price;
use App\Http\Resources\PriceCollection;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PriceCollection(Price::all());
    }
}
