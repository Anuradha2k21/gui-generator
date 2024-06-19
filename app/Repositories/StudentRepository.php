<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\BaseRepository;

class StudentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'gender',
        'date_of_birth'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Student::class;
    }
}
