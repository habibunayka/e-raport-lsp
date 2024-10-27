@extends('layout.app')

@section('content')
    <div class="show-container">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="3"  style="text-align: center;">Data Siswa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Wali Kelas</td>
                    <td>HANI, S. Pd</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>ARI ARYA</td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>XI RPL 2</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="show-container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                {{--
                <tr>
                    <td>1</td>
                    <td>Matematika</td>
                    <td>{{ $student->matematika }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bahasa Indonesia</td>
                    <td>{{ $student->b_indonesia }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bahasa Inggris</td>
                    <td>{{ $student->b_inggris }}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kejuruan</td>
                    <td>{{ $student->kejuruan }}</td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Rata-rata</strong></td>
                    <td><strong>{{ number_format(($student->matematika + $student->b_indonesia + $student->b_inggris + $student->kejuruan) / 4, 2) }}</strong></td>
                </tr> --}}

                {{-- Data dummy --}}
                <tr>
                    <td>1</td>
                    <td>Matematika</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bahasa Indonesia</td>
                    <td>85</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bahasa Inggris</td>
                    <td>78</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kejuruan</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Rata-rata</strong></td>
                    <td><strong>{{ number_format((80 + 85 + 78 + 90) / 4, 2) }}</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
