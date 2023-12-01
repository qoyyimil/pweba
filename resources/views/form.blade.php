<html>
  <head>
    <title>Responsive Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      function validateForm() {
        var nama = document.getElementById("nama");
        var nrp = document.getElementById("nrp");
        var setuju = document.getElementById("switch1");


        // alert(setuju.checked);
        // return false;

        if (nama.value == "") {
          nama.focus();
          Swal.fire('Nama harus diisi terlebih dahulu');
          return false;
        }

        if (nrp.value == "") {
          nrp.focus();
          Swal.fire('NRP harus diisi terlebih dahulu');
          return false;
        }

        if (isNaN(nrp.value)) {
          nrp.focus();
          Swal.fire('NRP harus angka');
          return false;
        }

        if (nrp.value.length != 10) {
          nrp.focus();
          Swal.fire('NRP harus 10 digit');
          return false;
        }

        if (nrp.value.substring(0,4) != "5026") {
          nrp.focus();
          Swal.fire('4 digit NRP harus 5026');
          return false;
        }

        if (setuju.checked == false) {
          Swal.fire('Anda harus menyetujui peraturan');
          return false;
        }
        //defaultnyya return true
        //jika false, formnya tidak terkirim
      }
    </script>
  </head>

  <body>
    <div class="container">
      <h1>Form Pendaftaran Anggota HMSI</h1>
      <!--return true, form bisa terkirim. return false, form tidak terkirim-->
      <form action="https://www.google.com" onsubmit="return validateForm();">
        <div class="form-group">
          <label for="nama">Nama Mahasiswa :</label>
          <input id="nama" type="text" class="form-control"
            placeholder="Harus diisi"/>
        </div>
        <div class="form-group">
          <label for="nrp">NRP :</label>
          <input id="nrp" type="text" class="form-control"
            placeholder="Harus diisi"/>
        </div>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="switch1">
          <label class="custom-control-label" for="switch1">Saya setuju dengan
            peraturan di atas</label>
        </div>
        <br>
        <input type="submit" class="btn btn-dark" value="Kirim">
      </form>
    </div>
  </body>
</html>
