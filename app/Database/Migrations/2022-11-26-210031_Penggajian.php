<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penggajian extends Migration
{
    public function up()
    {
        // tbl_admin
        $this->forge->addField([
            'id_admin' => ['type' => 'INT', 'constraint' => 5],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 30],
            'username' => ['type' => 'VARCHAR', 'constraint' => 10],
            'password' => ['type' => 'VARCHAR', 'constraint' => 50]
        ]);
        $this->forge->addPrimaryKey('id_admin');
        $this->forge->createTable('tbl_admin');

        // tbl_jabatan
        $this->forge->addField([
            'id_jabatan' => ['type' => 'INT', 'constraint' => 5],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 20],
            'uang_lembur' => ['type' => 'INT', 'constraint' => 5],
            'uang_makan' => ['type' => 'INT', 'constraint' => 5]
        ]);
        $this->forge->addPrimaryKey('id_jabatan');
        $this->forge->createTable('tbl_jabatan');

        // tbl_wilayah
        $this->forge->addField([
            'id_wilayah' => ['type' => 'INT', 'constraint' => 5],
            'nama' => ['type' => 'INT', 'constraint' => 20]
        ]);
        $this->forge->addPrimaryKey('id_wilayah');
        $this->forge->createTable('tbl_wilayah');

        // tbl_pegawai
        $this->forge->addField([
            'id_pegawai' => ['type' => 'INT', 'constraint' => 5],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 30],
            'nip' => ['type' => 'INT', 'constraint' => 18],
            'password' => ['type' => 'VARCHAR', 'constraint' => 50],
            'id_jabatan' => ['type' => 'INT', 'constraint' => 5],
            'id_wilayah' => ['type' => 'INT', 'constraint' => 5],
        ]);
        $this->forge->addPrimaryKey('id_pegawai');
        $this->forge->addKey('id_jabatan');
        $this->forge->addKey('id_wilayah');
        $this->forge->addForeignKey('id_jabatan', 'tbl_jabatan', 'id_jabatan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_wilayah', 'tbl_wilayah', 'id_wilayah', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_pegawai');

        // tbl_absensi
        $this->forge->addField([
            'id_absensi' => ['type' => 'INT', 'constraint' => 5],
            'id_pegawai' => ['type' => 'INT', 'constraint' => 5],
            'tgl_absensi' => ['type' => 'DATETIME'],
            'status_absensi' => ['type' => 'ENUM', 'constraint' => ['hadir', 'alpa'], 'default' => 'alpa']
        ]);
        $this->forge->addPrimaryKey('id_absensi');
        $this->forge->addKey('id_pegawai');
        $this->forge->addForeignKey('id_pegawai', 'tbl_pegawai', 'id_pegawai', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_absensi');

        // tbl_gaji
        $this->forge->addField([
            'id_gaji' => ['type' => 'INT', 'constraint' => 5],
            'id_pegawai' => ['type' => 'INT', 'constraint' => 5],
            'total_gaji' => ['type' => 'INT', 'constraint' => 20],
            'tgl_gaji' => ['type' => 'DATE']
        ]);
        $this->forge->addPrimaryKey('id_gaji');
        $this->forge->addKey('id_pegawai');
        $this->forge->addForeignKey('id_pegawai', 'tbl_pegawai', 'id_pegawai', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_gaji');
    }

    public function down()
    {
        // tbl_admin
        $this->forge->dropTable('tbl_admin');
        // tbl_jabatan
        $this->forge->dropTable('tbl_jabatan');
        // tbl_wilayah
        $this->forge->dropTable('tbl_wilayah');
        // tbl_pegawai
        $this->forge->dropTable('tbl_pegawai');
        // tbl_absensi
        $this->forge->dropTable('tbl_absensi');
        // tbl_gaji
        $this->forge->dropTable('tbl_gaji');
    }
}
