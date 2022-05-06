<?php

namespace App\Http\Controllers;

use App\Exceptions\LoginFailed;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Ramsey\Uuid\Uuid;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    protected $userRepositoryInterface;
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $user = $request->only(['email', 'password']);

        $uuid = Uuid::uuid4();

        $token = auth()
            ->setTTl(9999999)
            ->claims(['token_id' => $uuid])
            ->attempt($user);
        if (!$token) {
            throw new LoginFailed(__('message.login_failure'));
        }

        return $this->responseWithToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->only(['email', 'password', 'profile_id', 'role_id', 'room_id']);
            $data['password'] = bcrypt($request->password);
            $user = $this->userRepositoryInterface->createUser($data);
            DB::commit();
            return responseCreated($user);
        } catch (\Exception $exception) {
            DB::rollBack();
            return responseError(500, $exception->getMessage());
        }
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $accessTokenId = auth('api')
            ->payload()
            ->get('token_id');
        // dd($accessTokenId);
        auth()->logout();

        return responseOK();
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile()
    {
        return response()->json(auth()->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function responseWithToken($token)
    {
        $response = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user(),
        ];

        return responseOK($response);
    }

    public function changePassWord(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->update(
            ['password' => bcrypt($request->new_password)]
        );

        return response()->json([
            'message' => 'User successfully changed password',
            'user' => $user,
        ], 201);
    }
}
