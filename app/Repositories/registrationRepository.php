<?php

namespace App\Repositories;

use App\Models\registration;
use App\Repositories\BaseRepository;

/**
 * Class registrationRepository
 * @package App\Repositories
 * @version October 26, 2021, 6:34 pm UTC
*/

class registrationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'birthdate',
        'age',
        'sex'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return registration::class;
    }
}
