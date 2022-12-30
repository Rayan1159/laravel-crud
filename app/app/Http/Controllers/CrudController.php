<?php

namespace App\Http\Controllers;

use App\Models\User;
use Doctrine\DBAL\Schema\Exception\ColumnDoesNotExist;
use http\Env\Response;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): ?JsonResponse
    {
        $validated = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if ($validated) {
            $username = $request->post("username");
            $userData = \UserUtil::findUser($username);
            if (\UserUtil::verifyPassword($request->post("password"), $userData->password)) {
                return \response("")->json([
                    'status' => "ok"
                ]);
            }
        }
        return null;
    }

    public function register(Request $request) {
        $validated = $request->validate([
            "username" => ["required", "min:4"],
            "password" => ["required", "min:8"]
        ]);

        if ($validated) {
            $username = $request->post("username");
            $password = Hash::make($request->post("password"));

            return \response()->json([
                "user" => \UserUtil::registerUser($username, $password)
            ]);
        }
    }
}
