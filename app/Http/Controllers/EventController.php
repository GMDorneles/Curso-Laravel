<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Function_;
use App\Models\Event;

class EventController extends Controller
{
   public function index()
   {
      $events = Event::all();
      return view('welcome', ['events' => $events]);
   }

   public function create()
   {
      return view('events.create');
   }
}