<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?=$this->include('incfile/insidelinkz')?>
</head>
<body>
    <?=$this->include('incfile/innernavi')?>
    <div class="container">
        <div class="col-md 6">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>User Name</th>
                        <th>Quiz Title</th>
                        <th>Your Score</th>                       
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item) : ?>
                    <?php 

                        $userId = $item['user_id'];

                        $db      = \Config\Database::connect();
                        $builder = $db->table('users');
                        $resu = $builder->where('id', $userId)->orderBy('id', 'DESC');
                        $query = $resu->get(1);

                        foreach ($query->getResult() as $row)
                        {                              
                            $UserName = $row->name;                  
                        }

                        $quizId = $item['Quiz_id'];

                        $db      = \Config\Database::connect();
                        $builder = $db->table('quizs');
                        $resu = $builder->where('id', $quizId)->orderBy('id', 'DESC');
                        $query2 = $resu->get();

                        foreach ($query2->getResult() as $row2)
                        {                              
                            $QuizTitle = $row2->title;
                            echo "
                            <tr class=''>";
                                echo "<td class='text-center'>1</td>";
                                echo "<td><h4 class='rowback'>".$UserName."</h4></td>";
                                echo "<td><h4 class='rowback'>".$QuizTitle."</h4></td>";
                                echo "<td><h4 class='rowback'>".$item['score']."</h4></td>";
                            echo "    
                            </tr>
                            ";                       
                        }

                        // if ($_SESSION['id'] == $item['id']) {
                        //     // echo "done";
                            
                        // } else {
                        //     echo "
                        //     <tr class=''>";
                        //         echo "<td class='text-center'>1</td>";
                        //         echo "<td><h4 class=''>".$item['name']."</h4></td>";
                        //         echo "<td><h4 class=''>".$item['email']."</h4></td>";
                        //         echo "<td><h4 class=''>".$item['rank']."</h4></td>";
                        //     echo "    
                        //     </tr>
                        //     ";
                        // }
                            
                    ?>                   
                    <?php endforeach ?> 
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</body>
</html>