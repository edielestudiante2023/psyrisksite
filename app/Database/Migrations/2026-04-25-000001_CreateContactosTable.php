<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nombre'     => ['type' => 'VARCHAR', 'constraint' => 120],
            'email'      => ['type' => 'VARCHAR', 'constraint' => 160],
            'telefono'   => ['type' => 'VARCHAR', 'constraint' => 40, 'null' => true],
            'empresa'    => ['type' => 'VARCHAR', 'constraint' => 160, 'null' => true],
            'asunto'     => ['type' => 'VARCHAR', 'constraint' => 40],
            'mensaje'    => ['type' => 'TEXT'],
            'ip'         => ['type' => 'VARCHAR', 'constraint' => 45, 'null' => true],
            'leido'      => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('email');
        $this->forge->addKey('created_at');
        $this->forge->createTable('contactos');
    }

    public function down()
    {
        $this->forge->dropTable('contactos');
    }
}
