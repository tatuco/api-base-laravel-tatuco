<?php
namespace App\Http\Services\Acl;

use App\Acl\Src\Models\Role;
use App\Core\TatucoService;
use App\Core\Utils;
use App\Http\Repositories\Acl\UserRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class UserService extends TatucoService
{
    protected $name = "user";
    protected $namePlural = "users";

    public function __construct()
    {
        parent::__construct(new UserRepository());
    }

//    public function index($request)
//    {
//        $users = parent::index($request);
//        foreach ($users as $user) {
//            $roles = $user->roles;
//            $person = $user->person;
//            if (count($roles) > 0) {
//                $user->role_id = $roles[0]->id;
//                $user->role_name = $roles[0]->name;
//                $user->role_slug = $roles[0]->slug;
//            }
//
//            unset($user->roles);
//
//        }
//       return ['data' => $users];
//
//    }

    public function store(Request $request){
        try {
           // DB::beginTransaction();
           // $decrypted = Utils::cryptoJsAesDecrypt("prumplunch", $request->password);
            $pass = bcrypt($request->password);
            $request->merge(['password' => $pass]);
            //return $request->all();
            $user = User::create($request->all());

            if ($request->json(['roleId'])) {
                $this->assignedRole($user->id, $request->json(['roleId']));
            }
            $user->roles = $user->getRoles();
            //DB::commit();
            return response()->json([
                $user
            ], 200);
          //return $decrypted;
        } catch (\Exception $e) {
            //DB::rollBack();
            return parent::errorException($e);
        }

    }
    public function update($id,Request $request)
    {
         if($request->json(['password'])){
           $pass = bcrypt($request->json(['password']));
           $request->merge(['password' => $pass]);
        }

        return parent::update($id, $request);
    }

    public function assignedRole($idUser, $idRole)
    {
        try{
            /**
             * antes de asignar el rol, revocar los roles
             */
            $user=User::find($idUser);
            $roles = Role::all();
            $rolesAsigned = [];
            foreach ($roles as $role) {
                $user->revokeRole($role->id);
            }
            $user->assignRole($idRole);
            $user=User::find($idUser);
            $rolesAsigned=$user->getRoles();

            if($rolesAsigned){
                Log::info('Rol Asignado');
                return response()->json([
                    'status'=> true,
                    'message'=> 'role asignado satisfactoriamente. ',
                    'rolesAsigned' => $rolesAsigned
                ], 200);
            }
        }catch (\Exception $e){
            Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
              return response()->json([
            "message" => "Error de servidor",
            "exception" => $e->getMessage(),
            "file" => $e->getFile(),
            "line" => $e->getLine(),
            "code" => $e->getCode()
            ], 500);
        }
    }

    public function revokeRole($idUser, $idRole)
    {
        try{
            $user=User::find($idUser);
            if ($user->revokeRole($idRole)){
                $rolesAsigned=$user->getRoles();
                return response()->json([
                    'status' => true,
                    'msj' => 'Role revocado Satisfactoriamente',
                    'rolesAsigned' => $rolesAsigned
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'msj' => 'Error al revocar el rol',
                ], 500);
            }
        }catch(\Exception $e){
            Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
              return response()->json([
            "message" => "Error de servidor",
            "exception" => $e->getMessage(),
            "file" => $e->getFile(),
            "line" => $e->getLine(),
            "code" => $e->getCode()
            ], 500);
        }
    }

}
