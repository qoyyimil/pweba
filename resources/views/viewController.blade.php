<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <p>
        Nama : {{ $nama }} <br> <!--double bracket buat nampilkan valuenya--> <!--kalo array pake 'for each'-->
        Alamat : {{ $alamat }} <br>
        Umur : {{ $umur }} <br>
        Mata Kuliah :
        <ul>
            @foreach ($matkul as $mk)
                <li> {{ $mk }} </li>
            @endforeach
        </ul>
    </p>
    <a href="view-jam/{{ date('G:i:s') }}">Klik Disini</a>

</body>
</html>
