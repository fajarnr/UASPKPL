<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '002',
            'nama' => 'Ali Tarmuji, S.T., M. Cs.',
            'jabfung' => 'AA',
            'email_dosen' => '002@tif.uad.ac.id',
        ]);

        $this->assertEquals('002', $dosen->nipy);
        $this->assertEquals('002', $dosen->nidn);
        $this->assertEquals('Ali Tarmuji, S.T., M. Cs.', $dosen->nama);
        $this->assertEquals('AA', $dosen->jabfung);
        $this->assertEquals('002@tif.uad.ac.id', $dosen->email_dosen);
    }
}
