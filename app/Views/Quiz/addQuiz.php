<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    

    <?=$this->include('incfile/insidelinkz')?>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
    <?=$this->include('incfile/innernavi')?>
    <div class="container">
    <?php echo validation_errors(); ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                <label class="form-control-label" for="input-country">Question</label>               
                <textarea id="drive-demo" rows="4" name="description" class="form-control" placeholder="" value="" ></textarea>
                <div class="row">
                <label class="form-control-label" for="input-country">Question</label>    
                    <div class="col-md-6"><input class="form-control" type="text"></div>
                    <label class="form-control-label" for="input-country">Question</label>    
                    <div class="col-md-6"><input class="form-control" type="text"></div>
                </div>                   
                </div>
            </div>
        </div>
    </div>   
</body>
    <script>
        tinymce.init({
            selector: 'textarea#drive-demo',
            plugins: 'image media link tinydrive code imagetools',
            height: 600,
            toolbar: 'insertfile image link | code',
            tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
            tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
            tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
            tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID'
        });
    </script>
</html>