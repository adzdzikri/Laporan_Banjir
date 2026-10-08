<?php

namespace Tests\Feature;

use Tests\TestCase;

class LaporBanjirTest extends TestCase
{
    public function test_root_redirects_to_form(): void
    {
        $this->get('/')->assertRedirect(route('laporan.form'));
    }

    public function test_form_page_uses_layout(): void
    {
        $this->get(route('laporan.form'))
            ->assertOk()
            ->assertSee('LaporBanjir')
            ->assertSee('Kirim Laporan')
            ->assertSee(route('laporan.daftar'), false);
    }

    public function test_konfirmasi_shows_submitted_data_and_alert(): void
    {
        $this->post(route('laporan.konfirmasi'), [
            'nama' => 'Andi', 'lokasi' => 'Baleendah', 'tinggi' => 45,
        ])->assertOk()
          ->assertSee('Laporan berhasil dikirim')
          ->assertSee('Andi')
          ->assertSee('Baleendah')
          ->assertSee('45 cm');
    }

    public function test_konfirmasi_validates_input(): void
    {
        $this->post(route('laporan.konfirmasi'), [])
            ->assertSessionHasErrors(['nama', 'lokasi', 'tinggi']);
    }

    public function test_daftar_shows_all_three_statuses(): void
    {
        $this->get(route('laporan.daftar'))
            ->assertOk()
            ->assertSee('Waspada')
            ->assertSee('Siaga')
            ->assertSee('Awas');
    }
}
