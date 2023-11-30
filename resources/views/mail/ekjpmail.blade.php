<p>Permohonan {{ $maklumat['user']['nama'] }} untuk kursus berikut akan diproses.</p>
<p>Sebarang soalan atau pertanyaan boleh email ke hanifah@jtm.gov.my</p>
<hr>

<p><b>MAKLUMAT PEMOHON: </b></p>
<table>
    <tr>
        <td><b>NAMA: </b></td>
        <td>{{ $maklumat['user']['nama'] }}</td>
    </tr>
    <tr>
        <td><b>NO. KAD PENGENALAN: </b></td>
        <td>{{ $maklumat['user']['noic'] }}</td>
    </tr>
    <tr>
        <td><b>TELEFON: </b></td>
        <td>{{ $maklumat['user']['telefon'] }}</td>
    </tr>
    <tr>
        <td><b>EMAIL: </b></td>
        <td>{{ $maklumat['user']['email'] }}</td>
    </tr>
    <tr>
        <td><b>TARIKH PERMOHONAN: </b></td>
        <td>{{ date('Y-m-d H:i:s') }}</td>
    </tr>
</table>

<hr>

<p><b>MAKLUMAT KURSUS: </b></p>

<table>
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
