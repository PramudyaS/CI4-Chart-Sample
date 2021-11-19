<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'barang_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_barang'    => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('barang_id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
