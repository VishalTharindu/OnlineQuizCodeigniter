<?php namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
        protected $table      = 'questions';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['quizNo', 'questionNo', 'question', 'fstanswer', 'secanswer', 'thranswer', 'frtanswer', 'correctAnswer'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
}