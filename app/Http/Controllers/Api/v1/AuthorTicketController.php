<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AuthorTicketController extends Controller
{
    public function index($authorId, TicketFilter $filters){
        return TicketResource::collection(
            Ticket::where('user_id', $authorId)->filter($filters)->paginate());
    }
}
