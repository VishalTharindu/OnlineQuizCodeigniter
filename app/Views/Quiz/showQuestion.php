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

    <style>
        .text-dark{
            color:#000;
        }
    </style>
</head>
<body>
    <?=$this->include('incfile/innernavi')?>
    <?php foreach ($data as $item) : ?>    
    <div class="container">
        <div class="col-md-12">
            <h1></h1>
            <div class="card">
                <div class="card-content">
                    <div class="my-5"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="title"><?= $item['questionNo'] ?><?= $item['question'] ?></h5>
                        </div>                   
                    </div>
                    <div class="radio">
                        <label class="text-success">                                                  
                            <input type="radio" name="optionsRadios">                            
                            <p class="text-dark">1.&nbsp;&nbsp;<?= $item['fstanswer'] ?></p>
                        </label>
                    </div>
                    <div class="radio">
                        <label>                           
                            <input type="radio" name="optionsRadios">
                            <p class="text-dark">2.&nbsp;&nbsp;<?= $item['secanswer'] ?></p>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios">
                            <p class="text-dark">3.&nbsp;&nbsp;<?= $item['thranswer'] ?></p>                            
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios">                          
                            <p class="text-dark">4.&nbsp;&nbsp;<?= $item['frtanswer'] ?></p>
                        </label>
                    </div>
                </div>                                                                      
            </div>
        </div>
    </div>
    <?php endforeach ?>   
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