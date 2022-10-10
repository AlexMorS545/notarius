<?php

namespace App\Http\Controllers;

use App\Actions\Cookies\GetToken;
use App\Actions\Records\CreateRecord;
use App\Actions\RememberToken\AddRememberToken;
use App\Actions\User\CreateUser;
use App\Http\Requests\RecordRequest;
use App\Http\Resources\RemeberTokenResource;
use App\Models\RememberToken;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Request;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        $token = (new GetToken)();
        return RemeberTokenResource::collection(RememberToken::where('token', $token)->get());
    }

    public function store(RecordRequest $request)
    {
        $data = $request->all();
        $token = (new GetToken)();
        $remember_token = RememberToken::where('token', $token)->first();

        $user = (new CreateUser)($data);

        $data['user_id'] = $user->id;
        $record = (new CreateRecord)($data);

        (new AddRememberToken)($remember_token, $user);

        return response()->json(['success' => true, 'message' => 'Вы успешно записались']);
    }
}
