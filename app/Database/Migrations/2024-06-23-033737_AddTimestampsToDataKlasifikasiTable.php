<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToDataKlasifikasiTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_klasifikasi', [
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_klasifikasi', ['created_at', 'updated_at']);
    }
}
