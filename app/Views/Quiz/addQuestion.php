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
            <h1></h1>
            <div class="card">
                <div class="card-content">
                <div class="my-5"></div>
                    <form action="/store/question" method="post">
                        <?php
                            $db      = \Config\Database::connect();
                            $builder = $db->table('quizs');
                            $resu = $builder->orderBy('id', 'DESC');
                            $query = $resu->get(1);
                            foreach ($query->getResult() as $row)
                            {
                                    echo "
                                        <input class='form-control' name='quizNo' value='$row->id'placeholder='Example: 1' type='hidden'>
                                    "; 
                                
                            }
                        ?>
                        <div class="row">
                            <label class="text-muted" for="input-country">Question No</label> 
                            <div class="form-group">                         
                                <div class="col-md-6">
                                    <input class="form-control" name='questionNo' placeholder='Example: 1' type="text">
                                </div>
                            </div>
                            <p class='text-danger'>
                                <?php 
                                    if(\Config\Services::validation()->hasError('questionNo'))
                                    {
                                        echo $validation->showError('questionNo');
                                    }
                                ?>
                            </p> 
                        </div>
                        <div class="my-5"></div>
                        <div class="row">
                            <label class="form-control-label text-muted" for="input-country">Question</label>               
                            <textarea id="drive-demo" rows="4" name="question" class="form-control" placeholder="" value="" ></textarea>
                            <p class='text-danger'>
                                <?php 
                                    if(\Config\Services::validation()->hasError('question'))
                                    {
                                        echo $validation->showError('question');
                                    }
                                ?>
                            </p> 
                        </div>
                        <div class="my-5"></div>
                        <div class="row"> 
                            <div class="col-md-1">
                            <label class="form-control-label text-muted" for="input-country">AnswerNo</label>   
                                <div class="form-group">
                                    <select name="timetype" class="form-control" id="Type">
                                        <option value="1">1</option>                                                             
                                    </select>                                   
                                </div>  
                            </div>                                         
                            <div class="col-md-5">
                            <label class="form-control-label text-muted" for="input-country">Answer</label>                          
                                <div class="form-group">
                                    <input name='fstanswer' class="form-control" type="text">
                                </div>
                                <p class='text-danger'>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('fstanswer'))
                                        {
                                            echo $validation->showError('fstanswer');
                                        }
                                    ?>
                                </p> 
                            </div>
                            <div class="col-md-1">
                                <label class="form-control-label text-muted" for="input-country">AnswerNo</label>   
                                <div class="form-group">
                                    <select name="timetype" class="form-control" id="Type">
                                        <option value="2">2</option>                                                                
                                    </select>                                   
                                </div>
                            </div>
                            <div class="col-md-5">  
                                <label class="form-control-label text-muted" for="input-country">Answer</label>                        
                                <div class="form-group">
                                    <input name='secanswer' class="form-control" type="text">
                                </div>
                                        <p class='text-danger'>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('secanswer'))
                                        {
                                            echo $validation->showError('secanswer');
                                        }
                                    ?>
                                </p> 
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-1">
                            <label class="form-control-label text-muted" for="input-country">AnswerNo</label>   
                                <div class="form-group">
                                    <select name="timetype" class="form-control" id="Type">
                                        <option value="3">3</option>                                                              
                                    </select>                                   
                                </div>  
                            </div>                                         
                            <div class="col-md-5">
                            <label class="form-control-label text-muted" for="input-country">Answer</label>                          
                                <div class="form-group">
                                    <input name='thranswer' class="form-control" type="text">
                                </div>
                                <p class='text-danger'>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('thranswer'))
                                        {
                                            echo $validation->showError('thranswer');
                                        }
                                    ?>
                                </p> 
                            </div>
                            <div class="col-md-1">
                                <label class="form-control-label text-muted" for="input-country">AnswerNo</label>   
                                <div class="form-group">
                                    <select name="timetype" class="form-control" id="Type">
                                        <option value="4">4</option>                                                                  
                                    </select>                                   
                                </div> 
                            </div>
                            <div class="col-md-5">  
                                <label class="form-control-label text-muted" for="input-country">Answer</label>                        
                                <div class="form-group">
                                    <input name='frtanswer' class="form-control" type="text">
                                </div>
                                <p class='text-danger'>
                                    <?php 
                                        if(\Config\Services::validation()->hasError('frtanswer'))
                                        {
                                            echo $validation->showError('frtanswer');
                                        }
                                    ?>
                                </p> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <label class="form-control-label text-muted" for="input-country">Correct Answer</label> 
                            <select name="correctAnswer" class="form-control" id="Type">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>                                          
                            </div>
                            <p class='text-danger'>
                                <?php 
                                    if(\Config\Services::validation()->hasError('correctAnswer'))
                                    {
                                        echo $validation->showError('correctAnswer');
                                    }
                                ?>
                            </p> 
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button class="btn btn-success"><a href="/" class='text-white'>Return Home</a></button>
                    </form>
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