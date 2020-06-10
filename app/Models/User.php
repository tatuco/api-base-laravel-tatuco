<?php

namespace App\Models;

use App\Acl\Src\Traits\ShinobiTrait;
use App\Core\DateRange;
use App\Core\TatucoModel as Tatuco;
use App\Notifications\ResetPassword;
use App\Query\QueryBuilder;
use App\Traits\doWhereTrait;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;



class User extends Authenticatable implements JWTSubject
{
    use ShinobiTrait, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use DateRange;
    protected $images;
    protected $modelo;
    protected $casts = ["deleted" => 'boolean'];
    protected $fillable = [
        'name', 'email', 'password', 'remember_token','date_expiration_password', "deleted"
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','date_expiration_password'
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function scopeDoWhere($query, $request) {
        $user = JWTAuth::parseToken()->authenticate();
        $list = QueryBuilder::for(static::class)
            ->select($this->getColumns($request))
            ->doJoin($this->getJoins($request))
            ->doWhere($this->getWhere($request))
            ->where("deleted", false)
            ->sort($this->getSort($request));

        if(isset($_GET['limit']))
        {
            $list->limit($_GET['limit']);
        }

        if(isset($_GET['count']))
        {
            $list->selectRaw("count({$_GET['count']}) as total");
        }
        if(isset($_GET['group']))
        {
            $list->groupBy($this->getGroups($request));
        }
        return $list;
    }

    public function limit($request)
    {
        if(isset($_GET['paginate']))
        {
            $paginate = $request->paginate;
        }
        return $paginate;
    }

    public function getPag($request)
    {
        $paginate = 10;
        if(isset($_GET['paginate']))
        {
            $paginate = $request->paginate;
        }
        return $paginate;
    }

    public function getJoins($request)
    {
        $joins = null;
        if(isset($_GET['join']))
        {
            $joins = $request->join;
        }
        return $joins;
    }

    public function getSort($request)
    {
        $sort = null;
        if(isset($_GET['sort']))
        {
            $sort = $request->sort;
        }
        return $sort;
    }

    public function getColumns($request)
    {
        $columns = ['*'];
        if(isset($_GET['columns']))
        {
            $c = json_decode($request->columns);
            $columns = $c;
        }

        return $columns;
    }

    public function getGroups($request)
    {
        $groups = ['*'];
        if(isset($_GET['group']))
        {
            $c = json_decode($request->group);
            $groups = $c;
        }

        return $groups;
    }


    public function getWhere($request)
    {
        $where = null;
        if(isset($_GET['where']))
        {
            $where = $request->where;
        }

        return $where;
    }

    public function getModel()
    {

        return get_class($this);

    }
    public function getNameOfClass()
    {
        return static::class;
    }

    /* public function setImagesAttribute($value)
     {
         $i=0;
         $img = "[";
         $cont = count($value);
         if (isset($value)) {
             foreach ($value as $v) {
                 $i++;
                 $img .= ImageService::image($v);
                 if($cont != $i ){
                     $img .= ",";
                 }
             }
             $img .= "]";
         }
         $this->attributes['image'] = $img;
     }*/

    public function imageService()
    {
        //  return new ImageService();
    }

    public function getCreatedAtAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->subHours(5)->format('Y-m-d h:ia');
    }

    public function getUpdatedAtAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->subHours(5)->format('Y-m-d h:ia');
    }

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
