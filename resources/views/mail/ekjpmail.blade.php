<p>Permohonan {{ $maklumat['user']['nama'] }} untuk kursus berikut akan diproses.</p>
<p>Sebarang soalan atau pertanyaan boleh email ke ekjp adtec kulim</p>
<hr>
<p><b>MAKLUMAT KURSUS: </b></p>
<tr>
    <td><b>KURSUS: </b></td>
    <td>{{ $maklumat['kursus']['kursus'] }} Hari</td>
</tr>
<tr>
    <td><b>BIDANG: </b></td>
    <td>{{ $maklumat['kursus']['bidang'] }} Hari</td>
</tr>
<tr>
    <td><b>TEMPOH: </b></td>
    <td>{{ $maklumat['kursus']['tempoh'] }} Hari</td>
</tr>
<tr>
    <td><b>TARIKH: </b></td>
    <td>
        <pre>{{ $maklumat['kursus']['tarikh'] }}</pre>
    </td>
</tr>
<tr>
    <td><b>YURAN: </b></td>
    <td>RM{{ $maklumat['kursus']['yuran'] }}</td>
</tr>
<tr>
    <td><b>KANDUNGAN: </b></td>
    <td>
        <pre>{{ $maklumat['kursus']['kandungan'] }}</pre>
    </td>
</tr>
<tr>
    <td><b>CATATAN: </b></td>
    <td>
        <pre>{{ $maklumat['kursus']['catatan'] }}</pre>
    </td>
</tr>
</table>
