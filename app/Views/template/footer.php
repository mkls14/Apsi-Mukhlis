<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            &copy; <strong><span>Multi Works, Tech</span></strong>. 2023
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin ingin keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Klik "Keluar" jika anda yakin ingin keluar.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-danger" href="<?= base_url('logout'); ?>">Keluar</a>
    </div>
</div>
</div>
</div>

<script>
        setTimeout(function() {
            document.getElementById('alert').style.display = 'none';
        }, 3000); // Mengatur waktu tampilnya alert selama 5 detik (5000 milidetik)
</script>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js1/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>


<!-- scripts row table datatables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#userlist').DataTable();
    });
</script>

<script>
        $(document).ready(function() {
            setInterval(function(){
                updateContent()
            },1000)
            // Fungsi untuk memperbarui konten secara real-time
            function updateContent() { 
                $.ajax({
                    url: "<?= base_url('user/get_data'); ?>",
                    success: function(result) {
                        data =JSON.parse(result)
                        $('#pastesuhu').html(data.suhu + ' °C')
                        $('#pastekelembaban').html(data.kelembapan + ' %')
                    },
                });
            }
        });
    </script>
<script>
        $(document).ready(function() {
            setInterval(function(){
                updateContent()
            },1000)
            // Fungsi untuk memperbarui konten secara real-time
            function updateContent() { 
                $.ajax({
                    url: "<?= base_url('admin/get_data'); ?>",
                    success: function(result) {
                        data =JSON.parse(result)
                        $('#pastesuhuadmin').html(data.suhu + ' °C')
                        $('#pastekelembabanadmin').html(data.kelembapan + ' %')
                    },
                });
            }
        });
    </script>
</body>

</html>
