<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function Store(NewsRequest $request)
    {
        
        Newsletter::create($request->all());
        return back()->with('newsletter', 'saved');
    }
}
