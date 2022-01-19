<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Vendedor extends Model
{
    use HasFactory;

    protected $table = 'vendedor';

    protected $primaryKey = 'id_vendedor';

    protected $fillable = [
        'nome',
        'email',
    ];

    protected $attributes = [
        'comissao' => 0.065
    ];

    public $timestamps = false;

    protected $connection = 'mysql';

    protected $rules = array(
        'nome' => 'required|max:30',
        'email' => 'required|max:50'
    );
    
    public function validate($inputs) {
        $obValidator = Validator::make($inputs, $this->rules);
        if($obValidator->passes()) 
        return true;
        $this->errors = $obValidator->messages();
        return false;
    }
}
