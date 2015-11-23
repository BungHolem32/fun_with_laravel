<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'group_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
    protected $accessArray;


    public function group()
    {
        return RankedGroups::findOrFail($this->group_id);


        /*$temp = \DB::select("SELECT * FROM rankedgroups WHERE id = {$this->group_id}");
        if(!empty($temp))
            return $temp[0];

        return false;*/
        //return $this->belongsTo('App\RankedGroups' );
    }

    public function allowed($val){
        if(!isset($this->accessArray))
            $this->accessArray = $this->group()->allowed();

        if(in_array('*', $this->accessArray))
            return true;

        return (bool) in_array($val, $this->accessArray);
    }
}
