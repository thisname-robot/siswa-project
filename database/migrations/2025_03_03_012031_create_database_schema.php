<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseSchema extends Migration
{
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('role_name');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->uuid('role_id');
            $table->timestamp('create_at')->useCurrent();

            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
        });

        Schema::create('data_siswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_users');
            $table->string('Jalur_masuk_PPDB');
            $table->string('Nama_Siswa');
            $table->string('Jenis_Kelamin');
            $table->string('NISN')->unique();
            $table->string('NIK')->unique();
            $table->string('NO_KK');
            $table->date('Tgl_Lahir');
            $table->string('Tempat_Lahir');
            $table->string('Agama');
            $table->text('Alamat_Rumah');
            $table->string('RT');
            $table->string('RW');
            $table->string('Dusun');
            $table->string('Desa_Kelurahan');
            $table->string('Kecamatan');
            $table->string('Kode_Pos');
            $table->text('Koordinat_Alamat_Rumah');
            $table->boolean('Tinggal_Bersama');
            $table->string('Alat_Transportasi');
            $table->integer('Anak_Keberapa');
            $table->string('Hobby');
            $table->string('Cita_cita');
            $table->boolean('Menerima_KIP_KPS_PIP');
            $table->string('No_Hp_Siswa');
            $table->string('No_Hp_ortu');
            $table->string('Email_Siswa');
            $table->string('No_Ijazah_SMP_MTts');
            $table->string('No_SKHUN');
            $table->string('Jenis_Sekolah_Asal');
            $table->string('Asal_sekolah');
            $table->string('NPSN_SMP_MTs');
            $table->string('Kab_Kota_asal_sekolah');
            $table->string('Kec_asal_sekolah');
            $table->string('Asal_SD_MI');
            $table->decimal('TB', 5, 2);
            $table->decimal('BB', 5, 2);
            $table->decimal('Lingkar_Kepala', 5, 2);
            $table->integer('jarak_rumah_sekolah_km');
            $table->integer('jarak_rumah_sekolah_menit');
            $table->integer('Jmlh_saudara_kandung');
            $table->decimal('rata_rata_semester1', 5, 2);
            $table->decimal('rata_rata_semester2', 5, 2);
            $table->decimal('rata_rata_semester3', 5, 2);
            $table->decimal('rata_rata_semester4', 5, 2);
            $table->decimal('rata_rata_semester5', 5, 2);
            $table->boolean('vaksin1');
            $table->boolean('vaksin2');
            $table->boolean('vaksin3');
            $table->string('upload_kk');
            $table->string('upload_skl');
            
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
        });
        
        Schema::create('matpel', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('Nama_Matpel');
            $table->text('Deskripsi')->nullable();
        });

        Schema::create('nilai', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id');
            $table->uuid('id_matpel');
            $table->text('Deskripsi')->nullable();
            $table->decimal('nilai', 5, 2);
            $table->integer('semester');
            $table->string('tahun_ajaran');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_matpel')->references('id')->on('matpel')->onDelete('cascade');
        });
        
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id');
            $table->decimal('jumlah', 10, 2);
            $table->date('tanggal');
            $table->string('jenis');
            $table->string('status');
            $table->text('keterangan')->nullable();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
        
        Schema::create('point_tatib', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id');
            $table->string('jenis_pelanggaran');
            $table->integer('point');
            $table->date('tanggal_pelanggaran');
            $table->text('keterangan')->nullable();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('ekstra', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('Nama_Ekstra');
            $table->text('Deskripsi')->nullable();
            $table->string('jadwal');
            $table->string('pengajar');
        });

        Schema::create('partisipasi_ekstra', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id');
            $table->uuid('ekstra_id');
            $table->date('tanggal_masuk');
            $table->string('status');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ekstra_id')->references('id')->on('ekstra')->onDelete('cascade');
        });
        
        Schema::create('data_ayah', function (Blueprint $table) {
            $table->uuid('id_ayah')->primary();
            $table->uuid('id_siswa');
            $table->string('Nama_ayah');
            $table->date('Thn_Lhr_ayah');
            $table->string('NIK_ayah');
            $table->string('Pnddikan_trakhir_ayah');
            $table->string('Pekerjaan_ayah');
            $table->decimal('Penghasilan_bulan_ayah', 10, 2);

            $table->foreign('id_siswa')->references('id')->on('data_siswa')->onDelete('cascade');
        });
        
        Schema::create('data_ibu', function (Blueprint $table) {
            $table->uuid('id_ibu')->primary();
            $table->uuid('id_siswa');
            $table->string('Nama_ibu');
            $table->date('Thn_Lhr_ibu');
            $table->string('NIK_ibu');
            $table->string('Pnddikan_trakhir_ibu');
            $table->string('Pekerjaan_ibu');
            $table->decimal('Penghasilan_bulan_ibu', 10, 2);

            $table->foreign('id_siswa')->references('id')->on('data_siswa')->onDelete('cascade');
        });
        
        Schema::create('data_wali', function (Blueprint $table) {
            $table->uuid('id_wali')->primary();
            $table->uuid('id_siswa');
            $table->string('Nama_wali');
            $table->date('Thn_Lhr_wali');
            $table->string('NIK_wali');
            $table->string('Pnddikan_trakhir_wali');
            $table->string('Pekerjaan_wali');
            $table->decimal('Penghasilan/bulan_wali', 10, 2);
            $table->text('Alamat_wali');

            $table->foreign('id_siswa')->references('id')->on('data_siswa')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('role');
        Schema::dropIfExists('data_siswa');
        Schema::dropIfExists('matpel');
        Schema::dropIfExists('nilai');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('point_tatib');
        Schema::dropIfExists('ekstra');
        Schema::dropIfExists('partisipasi_ekstra');
        Schema::dropIfExists('data_ayah');
        Schema::dropIfExists('data_ibu');
        Schema::dropIfExists('data_wali');
    }
};
