<?php
include 'config/database.php';
?>
<div class="col-md-12">

  <div class=" d-flex justify-content-between">
    <button type="button" class="btn btn-primary px-3 my-3 btnAumenta rounded-5">
      <i class="bi bi-plus-circle"></i> Aumenta Dadus Alumni</button>

    <button type="button" class="btn btn-warning px-3 my-3 btnReport rounded-5">
      <i class="bi bi-printer"></i> Report </button>

  </div>

  <?php
  createTable("id alumi,Naran , seksu,Idade,ID Fak,ID Dep,ID Mp,Email,Imagem", "primary", "dadusTabela");
  closeTable();
  ?>
</div>

<?php
createModal("lg", "Form Dadus Alumi");

createModalReport("fullscreen", "Report Dadus Alumi");
?>
<div class='dadusFiltru row d-none'>
  <label class="form-label col-md-4">Alumni</label>
  <div class="col-md-8">
    <select class="form-select" id="nre">
      <option selected value="hotu"> Dadus Hotu </option>
      <?php
      $Q = $con->query("SELECT * FROM t_alumi");
      while ($d = $Q->fetch(PDO::FETCH_LAZY)) {
        echo "<option value='$d->id_alumi'> $d->naran </option>";
      }
      ?>
    </select>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    const dataForm = "pages/alumni/form.php";
    const dataProsesu = "pages/alumni/prosesu.php";
    const loadDadus = "pages/alumni/dadus.php";

    $(".btnAumenta").on("click", function() {
      $("#modalForm").modal("show");
      lokeForm('foun');
    });

    //prosesu nian


    $(".filtru").html($(".dadusFiltru").html());

    $(".btnReport").click(function() {
      $("#modalReport").modal("show");
      $("#fatinReport").attr("src", "pages/alumni/report.php");
    });

    $(".btnPrint").on("click", function() {
      $("#fatinReport").contents().find(".print").trigger("click");
    });

    $("#nre").change(function() {
      var vnre = $(this).val();
      $("#fatinReport").attr("src", "pages/alumni/report.php?vid=" + vnre);
    });

    function lokeDadus() {
      $.post(loadDadus, {
        sobre: "vSobre"
      }, function(rezDadus) {
        $(".dadusTabela").html(rezDadus);
      });
    }


    lokeDadus();

    function lokeForm(vSobre) {
      $.post(dataForm, {
        sobre: vSobre
      }, function(rezForm) {
        $("#fatinForm").html(rezForm);
      });
    }

    $("#formData").on("submit", function(f) {
      f.preventDefault();
      var dadus = new FormData(this);

      $.ajax({
        type: 'POST',
        url: dataProsesu,
        data: dadus,
        cache: false,
        contentType: false,
        processData: false,
        success: function(rezProsesu) {
          lokeDadus();
          Mix.fire({
            title: rezProsesu == 1 ? 'Rai dadus susesu' : rezProsesu,
            icon: rezProsesu == 1 ? 'success' : 'error',
          });
          $(".btnAumenta").trigger("click");
        }
      });
    });

    $(".dadusTabela").delegate(".btnEdit", "click", function() {
      var vid = this.id;
      $("#modalForm").modal("show");
      lokeForm(vid);
    });

    $(".dadusTabela").delegate(".btnApaga", "click", function() {
      var nrnalumi = $(this).data("nrnalumi");
      var vid = this.id;
      Swal.fire({
        icon: 'question',
        title: 'Konfirmasaun',
        html: `<div class='px-5'>Hakarak apaga 
				dadus alumi : ${nrnalumi}
				 husi Database? </div>`,
        showCancelButton: true,
        confirmButtonText: `<i class='bi bi-trash'></i> Apaga`,
        cancelButtonText: `<i class='bi bi-x'></i> Cancela`,
        cancelButtonClass: 'bg-success rounded-5',
        confirmButtonClass: 'bg-danger rounded-5',
      }).then((konfirma) => {
        if (konfirma.isConfirmed) {
          $.ajax({
            type: 'post',
            url: dataProsesu,
            data: {
              sobre: 'apaga',
              id: vnaran
            },
            cache: false,
            dataType: 'json',
            success: function(rezDel) {
              Mix.fire({
                title: rezDel.text,
                icon: rezDel.icon,
              });
              lokeDadus();
            }
          });
        }
      });
    });

    var Mix = Swal.mixin({
      toast: true,
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      position: 'center'
    });


  });
</script>