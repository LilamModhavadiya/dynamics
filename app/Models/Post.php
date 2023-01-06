<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
  
class Post extends Model



{
    protected $fillable = ['name','cat','description','vid','cgmid','area','surveyno','District','subdistrict','villageortown','mineral',];
  
    

    public function setCatAttribute($value)
    {
        $this->attributes['cat'] = json_encode($value);
    }
    public function getCatAttribute($value)
    {
        return $this->attributes['cat'] = json_decode($value);
    }




    public function setVidAttribute($value)
    {
        $this->attributes['vid'] = json_encode($value);
    }

    public function getVidAttribute($value)
    {
        return $this->attributes['vid'] = json_decode($value);
    }


    public function setDistrictAttribute($value)
    {
        $this->attributes['district'] = json_encode($value);
    }

    public function getDistrictAttribute($value)
    {
        return $this->attributes['district'] = json_decode($value);
    }


    public function setSubdistrictAttribute($value)
    {
        $this->attributes['subdistrict'] = json_encode($value);
    }

    public function getSubdistrictAttribute($value)
    {
        return $this->attributes['subdistrict'] = json_decode($value);
    }


    public function setVillageortownAttribute($value)
    {
        $this->attributes['villageortown'] = json_encode($value);
    }

    public function getVillageortownAttribute($value)
    {
        return $this->attributes['villageortown'] = json_decode($value);
    }


    public function setMineralAttribute($value)
    {
        $this->attributes['mineral'] = json_encode($value);
    }

    public function getMineralAttribute($value)
    {
        return $this->attributes['mineral'] = json_decode($value);
    }

}