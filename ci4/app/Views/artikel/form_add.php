<style>
    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        cursor: pointer;
        background-color: #0e55a0;
        color: #ffffff;
        border: none;
    }

    .btn:hover {
        background-color: #2980b9;
    }
</style>


<?= $this->include('template/admin_header'); ?>
<h2 style="margin:10px 10px 10px 10px;">
    <?= $title; ?>
</h2>
<form action="" method="post" enctype="multipart/form-data" style="margin:10px 10px 10px 10px;">
    <p style="margin-bottom:10px;">
        <input type="text" name="judul">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p style="margin-bottom:10px;">
        <input type="file" name="gambar">
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>
<?= $this->include('template/admin_footer'); ?>