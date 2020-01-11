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
                    <!-- <div class="my-5"></div> -->
                    <h2 class="text-center text-danger">Create Your Quiz</h2>
                    <div class="my-5"></div>
                    <form action="/store/quiz" method="post">
                        <div class="form-group">
                            <label class="form-control-label" for="input-country">Quiz Title</label>
                            <input name="title" class="form-control" type="text">                            
                        </div>
                        <p class='text-danger'>
                            <?php 
                                if(\Config\Services::validation()->hasError('title'))
                                {
                                    echo $validation->showError('title');
                                }
                            ?>
                        </p>                  
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
                        <p class=''>
                            <?php 
                                if(\Config\Services::validation()->hasError('type'))
                                {
                                    echo $validation->showError('type');
                                }
                            ?>
                        </p>
                        <label class="form-control-label" for="input-country">Quiz Time</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="time" class="form-control" type="text">
                                </div>
                                <p class=''>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('time'))
                                        {
                                            echo $validation->showError('time');
                                        }
                                    ?>
                                </p>                                 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="timetype" class="form-control" id="Type">
                                        <option value="Minute">Minute</option>
                                        <option  value="Hour">Hour</option>                            
                                    </select>                                   
                                </div>
                                <p class='required'>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('timetype'))
                                        {
                                            echo $validation->showError('timetype');
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">                        
                            <div class="col-md-12">
                            <label class="form-control-label" for="input-country">User Email</label>
                                <div class="form-group">
                                    <input name="email" class="form-control" type="text">                                   
                                </div>
                                <p class='text-danger'>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('email'))
                                        {
                                            echo $validation->showError('email');
                                        }
                                    ?>
                                </p>                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-country">Description</label>               
                            <textarea id="drive-demo" rows="4" name="description" class="form-control" placeholder="" value="" ></textarea>                            
                        </div>
                        <h4 class='text-danger'>
                            <?php 
                                if(\Config\Services::validation()->hasError('description'))
                                {
                                    echo $validation->showError('description');
                                }
                            ?>
                        </h4>
                        <button type="submit" class="btn btn-success">Add</button>
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