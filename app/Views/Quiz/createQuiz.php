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
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <h2 class="text-center text-danger">Create Your Quiz</h2>
                    <div class="my-5"></div>
                    <form action="">
                        <div class="form-group">
                            <label class="form-control-label" for="input-country">Quiz Title</label>
                            <input name="title" class="form-control" type="text">
                        </div>                  
                        <label class="form-control-label" for="input-country">Quiz Type</label>
                        <div class="form-group">
                            <select name="type" class="form-control" id="Type">
                                <option value="Genaral Knowladge">Genaral Knowladge</option>
                                <option  value="Networking">Networking</option>
                                <option  value="Programming">Programming</option>
                                <option  value="Mathamatic">Mathamatic</option>
                                <option  value="Finance">Finance</option>
                            </select>            
                        </div>
                        <label class="form-control-label" for="input-country">Quiz Time</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="time" class="form-control" type="text"> 
                                </div>                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="timetype" class="form-control" id="Type">
                                        <option value="Minute">Minute</option>
                                        <option  value="Hour">Hour</option>                            
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <label class="form-control-label" for="input-country">User Email</label>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="time" class="form-control" type="text"> 
                                </div>                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-country">Description</label>               
                            <textarea id="drive-demo" rows="4" name="description" class="form-control" placeholder="" value="" ></textarea>
                        </div>
                        <input type="button" class="btn btn-success" value="Add">
                    </form>                                                                
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