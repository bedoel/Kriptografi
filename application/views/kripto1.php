<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Kripto</title>
</head>

<body>
    <div class="container">
        <div class="my-5">
            <form action="<?= base_url('Kripto/process'); ?>" method="post">
                <div class="row row-cols-2">
                    <div class="p-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="p-5">
                        <label for="pkey" class="form-label">Key</label>
                        <input type="text" class="form-control" name="pkey" id="pkey">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="usertext" class="form-label">Text</label>
                    <textarea class="form-control" name="usertext" id="usertext" rows="18"><?= $output ?? null; ?></textarea>
                </div>
                <div class="mt-5 text-end">
                    <button class="btn btn-primary me-2" type="submit" name="action" value="dekripsi">Dekripsi</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>