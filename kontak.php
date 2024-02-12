<?php include "header.php"; ?>
    <div class="container kontak">

        <h3 class="mb-4">Hubungi Kami</h3>
        <form action="">
            <div class="formKontakKiri">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>

                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="email" class="form-control" id="nama">
                </div>

                <div class="form-group">
                    <label for="nama">No Telp</label>
                    <input type="number" class="form-control" id="nama">
                </div>
            </div>


            <div class="formKontakKanan">
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" cols="30" rows="8" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary float-right">Kirim</button>
            </div>
        </form>
    </div>
    <!-- sosmed icon -->
    <div class="iconBox">
        <a href="" class="perIconBox wa">
            <i class="fab fa-whatsapp"></i>
        </a>

        <a href="" class="perIconBox fb">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="" class="perIconBox ig">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="" class="perIconBox yt">
            <i class="fab fa-youtube"></i>
        </a>

        <a href="" class="perIconBox linkin">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>

    <div class="footer footerHubungiKami">
 <?php include"footer.php";?>       
  