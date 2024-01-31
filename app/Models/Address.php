<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AddressRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'address';
    protected $fillable = ["address", "latitude", "longitude", "token"];

    public function setAddressAttribute($value)
    {
        $this->attributes['address'] =  $value;
    }

    public function setLatitudeAttribute($value)
    {
        $this->attributes['latitude'] = $value;
    }

    public function setLongitudeAttribute($value)
    {
        $this->attributes['longitude'] = $value;
    }

    public function setTokenAttribute($value)
    {
        $this->attributes['token'] =  $value;
    }

    protected function validarDado($campo, $valor)
    {
        return true;
        $request = new AddressRequest(); 
        $request->merge([$campo => $valor]);

        $validator = $request->getValidatorInstance();
        
        if ($validator->fails()) {
            throw new \InvalidArgumentException($validator->errors()->first($campo));
        }

        return $valor;
    }
}
