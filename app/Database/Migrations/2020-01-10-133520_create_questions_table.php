<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuestionTables extends Migration
{
    /**
     * Database creation is both an art and a science: there are many best practices,
     * but there are also aspects that are left up to develop opinions. This migration
     * file offers a few different philosophies to table definitions - follow the
     * format that fits your style.
     *
     */
    public function up()
    {
        /**
         * Heroes
         *
         * We include all three data fields (created_at, updated_at, deleted_at) so we
         * can use both features of CodeIgniter\Model, $useTimestamps and $useSoftDeletes.
         */
        $fields = [
            'quizNo' => ['type' => 'varchar', 'constraint' => 255],
            'questionNo' => ['type' => 'varchar', 'constraint' => 255],
            'question' => ['type' => 'varchar', 'constraint' => 255],
            'fstanswer' => ['type' => 'varchar', 'constraint' => 255],
            'secanswer' => ['type' => 'varchar', 'constraint' => 255],
            'thranswer' => ['type' => 'varchar', 'constraint' => 255],
            'frtanswer' => ['type' => 'varchar', 'constraint' => 255],
            'correctAnswer' => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],

        ];

        // 'id' is a buzzword that indicates to addField() that this will be a primary key
        // We could also have provided this in $fields, as we do below
        $this->forge->addField('id');
        $this->forge->addField($fields);
        // Keys help optimize database performance; we'll add some for fields we are likely
        // to search or filter by
        $this->forge->addKey('quizNo');
        $this->forge->addKey('created_at');
        

        // While not necessary, indexing against `deleted_at` is a good idea if your model
        // is using soft deletes, since most SELECT statements will include `deleted_at`

        $this->forge->createTable('questions');

    }
    public function down()
    {
        $this->forge->dropTable('questions');
    }
}
