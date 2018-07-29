<?php

namespace App\Repositories;

use App\Models\Qrcode;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QrcodeRepository
 * @package App\Repositories
 * @version July 29, 2018, 7:12 pm UTC
 *
 * @method Qrcode findWithoutFail($id, $columns = ['*'])
 * @method Qrcode find($id, $columns = ['*'])
 * @method Qrcode first($columns = ['*'])
*/
class QrcodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'website',
        'company_name',
        'product_name',
        'product_url',
        'qrcode_path',
        'callback_url',
        'amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Qrcode::class;
    }
}
