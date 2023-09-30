<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration

{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'apellido'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'contraseña'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '250',
                    ],
                    'telefono'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '250',
                ],
                'direccion'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '250',
            ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('usuers');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}
