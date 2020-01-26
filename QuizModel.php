<?php namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
        protected $table      = 'quizs';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['title', 'type', 'time', 'timetype', 'email', 'description'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
}