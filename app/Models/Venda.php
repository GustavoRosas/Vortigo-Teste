<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes(array(
        'data_venda' => date("Y-m-d")));
    }
    use HasFactory;

    protected $table = 'venda';

    protected $primaryKey = 'id_venda';

    protected $fillable = [
        'id_vendedor',
        'preco_venda',
        'vendedor_comissao'
    ];

    public $timestamps = false;

    protected $connection = 'mysql';
}
