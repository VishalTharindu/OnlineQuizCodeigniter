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
        <div class="row">        
            <div class="col-md-12">
                <div class="card">                      
                    <div class="card-content">                                                                                      
                            <div class="col-md-2">
                                <img src="/img/profile.jpg" alt="Circle Image" class="img-circle img-responsive">
                            </div>  
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="title"><span class="tim-note">Title : </span><?= $item['title'] ?></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="title"><span class="tim-note">Type : </span><?= $item['type'] ?></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="title"><span class="tim-note">Time : </span><?= $item['time'] ?></span><?= $item['timetype'] ?></h5>
                                    </div>                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><?= $item['description'] ?></p> 
                                    </div>                                                  
                                </div>              
                                <div class="row">
                                    <div class="col-md-8">
                                        
                                    </div>
                                    <div class="col-md-4">
                                    <a href="/edit/quiz/<?= $item['id'] ?>"><button type="submit" class="btn btn-warning">Edit</button></a>
                                    <a href="/delete/quiz/<?= $item['id'] ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                                </div> 
                                </div>                                           
                            </div>                      
                        </div>                                     
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