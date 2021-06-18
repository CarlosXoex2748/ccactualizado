<?php

namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\Auth;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
  public function authenticate(Request $request)
  {
      $credentials = $request->only('email', 'password');
      try {
          if (! $token = JWTAuth::attempt($credentials)) {
              return response()->json(['error' => 'invalid_credentials'], 400);
          }
      } catch (JWTException $e) {
          return response()->json(['error' => 'could_not_create_token'], 500);
      }
      $response = compact('token');
      $response['user'] = Auth::user();

      return $response;

      //return redirect()->intended('intranet');

      //return response()->json(compact('token'));
  }
  public function getAuthenticatedUser()
  {
      try {
          if (!$user = JWTAuth::parseToken()->authenticate()) {
                  return response()->json(['user_not_found'], 404);
          }
          } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                  return response()->json(['token_expired'], $e->getStatusCode());
          } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                  return response()->json(['token_invalid'], $e->getStatusCode());
          } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                  return response()->json(['token_absent'], $e->getStatusCode());
          }
          return response()->json(compact('user'));
  }

  public function storeUser(Request $request){

    $user = new User();
    $user->name = $request -> input('name');
    $user->email = $request -> input('email');
    $user->password = Hash::make($request->password);

  }


  public function getUsers(){

    try{

      $users = User::All();
      return $users;

    return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

    }catch(\Exception $e){
        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
    }

  }
}
