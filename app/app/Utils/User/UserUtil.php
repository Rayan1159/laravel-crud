<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
class UserUtil {

    /**
     * @param string $username
     * @return array|null
     */
    public static function findUser(string $username): ?object {
        $data = User::where("username", $username)->first();
        if ($data) {
            return $data;
        }
        return null;
    }

    public static function registerUser(string $username, string $password): ?Collection {
        if  ($username && $password) {
            return User::factory()->create(["username" => $username, "password" => $password]);
        }
    }

    /**
     * @param string $password
     * @param string $userPassword
     * @return bool
     */
    public static function verifyPassword(string $password, string $userPassword): bool {
        if ($password && $userPassword) {
            return Hash::check($password, $userPassword);
        } else {
            return false;
        }
    }
}
