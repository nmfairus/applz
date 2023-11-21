<section>
<table cellspacing="0" cellpadding="0" style="width:100%">
	<tbody>
		<tr>
			<td><span style="font-size:10px">Pekeliling Perbendaharaan Malaysia</span></td>
			<td style="text-align:right"><span style="font-size:10px">AM 2.4 Lampiran B</span></td>
		</tr>
        <tr>
            <td style="text-align:right" colspan="2"><span style="font-size:10px">KEW.PA-10</span></td>
        </tr>
	</tbody>
</table>
<p></p>
<table cellspacing="0" cellpadding="0" style="width:100%">
	<tbody>
		<tr>
			<td style="text-align:center"><strong>BORANG ADUAN KEROSAKAN ASET ALIH</strong></td>
		</tr>
	</tbody>
</table>
<p><strong>Bahagian I (Untuk diisi oleh Pengadu)</strong></p>

<table cellspacing="9" cellpadding="0" style="width:100%">
	<tbody>
		<tr>
			<td style="width:5%">1.</td>
            <td style="width:30%">Jenis Aset</td>
            <td style="width:65%">: {{ $aduanuppa->jenis_aset }}</td>
		</tr>
        <tr>
			<td>2.</td>
            <td>Nombor Siri Pendaftaran Aset/ Komponen</td>
            <td>: {{ $aduanuppa->no_siri }}</td>
		</tr>
        <tr>
			<td>3.</td>
            <td>Pengguna Terakhir</td>
            <td>: {{ $aduanuppa->nama_pelapor }}</td>
		</tr>
        <tr>
			<td>4.</td>
            <td>Tarikh kerosakan</td>
            <td>: {{ $aduanuppa->tarikh_laporan }}</td>
		</tr>
        <tr>
			<td>5.</td>
            <td>Perihal Kerosakan</td>
            <td>: {{ $aduanuppa->perihal_kerosakan }}</td>
		</tr>
        <tr>
			<td>6.</td>
            <td>Nama dan Jawatan</td>
            <td>: {{ $aduanuppa->nama_pelapor }}/{{ $aduanuppa->jawatan_pelapor }}</td>
		</tr>
        <tr>
			<td>7.</td>
            <td>Tarikh</td>
            <td>: {{ $aduanuppa->tarikh_laporan }}</td>
		</tr>
	</tbody>
</table>

<p><strong>Bahagian II (Untuk diisi oleh Pegawai Aset/ Pegawai Teknikal)</strong></p>

<table cellspacing="9" cellpadding="0" style="width:100%">
	<tbody>
		<tr>
			<td style="width:5%">8.</td>
            <td style="width:50%">Jumlah Kos Penyelenggaraan Terdahulu</td>
            <td>: RM {{ $aduanuppa->kos_terdahulu }}</td>
		</tr>
        <tr>
			<td>9.</td>
            <td style="width:40%">Anggaran Kos Penyelenggaraan</td>
            <td>: RM {{ $aduanuppa->anggaran_kos }}</td>
		</tr>
        <tr>
			<td>10.</td>
            <td>Syor Dan Ulasan</td>
            <td>: {{ $aduanuppa->syor_tindakan }}</td>
		</tr>
        <tr>
			<td>11.</td>
            <td>Nama Dan Jawatan</td>
            <td>: {{ $aduanuppa->nama_peg_aset}} <br />&nbsp; {{ $aduanuppa->jawatan_peg_aset }}</td>
		</tr>
        <tr>
			<td>12.</td>
            <td>Tarikh</td>
            <td>: {{ $aduanuppa->tarikh_tindakan }}</td>
		</tr>
	</tbody>
</table>

<p><strong>Bahagian III (Keputusan Ketua Jabatan/ Bahagian/ Seksyen/ Unit)</strong></p>

<p>Diluluskan / Tidak Diluluskan</p>
<p>Ulasan : ...........................................................................................................</p>
<p></p>
<p>........................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tandatangan</p>
<table cellspacing="5" cellpadding="0" style="width:100%">
	<tbody>
		<tr>
			<td style="width:15%">Nama</td>
            <td style="width:5%">:</td>
            <td></td>
		</tr>
        <tr>
			<td>Jawatan</td>
            <td>:</td>
            <td></td>
		</tr>
        <tr>
			<td>Tarikh</td>
            <td>:</td>
            <td></td>
		</tr>
        <tr>
			<td colspan="3"><small>Nota: * Potong mana yang tidak berkenaan</small></td>
		</tr>
	</tbody>
</table>
</section>
