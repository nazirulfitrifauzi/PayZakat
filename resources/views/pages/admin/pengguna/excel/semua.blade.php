<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat Emel</th>
            <th>Tarikh Daftar</th>
            <th>Peranan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach($user as $users)
        <tr>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->created_at->format('d F Y') }}</td>
            <td>{{ $users->role == 0 ? 'Admin' : 'Ejen' }}</td>
            <td>
                @if($users->active == 0)
                    Tidak Aktif
                @elseif($users->active == 1)
                    Aktif
                @else
                    Ditolak
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
