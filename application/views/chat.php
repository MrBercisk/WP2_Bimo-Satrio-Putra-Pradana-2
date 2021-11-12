<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <?php foreach ($chat as $list) {
                    echo "<p>
                    <span><b>$list->nama</b></span>
                    <span>$list->pesan</span>

                    </p>";
                } ?>
                <div id="pesan">
                    <div class="form-grup">
                        <input type="text" name="nama" id="nama" class="form" placeholder="Nama Anda">
                        <input type="text" name="pesan" id="pesan" class="form" placeholder="Ketik Pesan">

                        <input type="button" value="Kirim" class="btn btn-primary btn-block" onclick="store();">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function store() {
            var value = {
                nama: $('#nama').val(),
                pesan: $('#pesan').val()
            }
            $.ajax({
                url: '<?= site_url(); ?>/chat/store',
                type: 'POST',
                data: value,
                dataType: 'JSON'

            });
        }
    </script>
</body>

</html>