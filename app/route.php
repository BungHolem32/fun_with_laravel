<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class route extends Model {

    /**
     * Get the Language for the route.
     */
    public function language()
    {
        return $this->belongsTo('App\Languages');
    }

    /**
     * Get the Page for the route.
     */
    public function page()
    {
        return $this->hasOne('App\Page');
    }


}
