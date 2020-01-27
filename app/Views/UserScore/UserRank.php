<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Rank</title>
    <?=$this->include('incfile/insidelinkz')?>
    <style>
        .rowback{
            color:red!important;
        }
    </style>
</head>
<body>
<?=$this->include('incfile/innernavi')?>
<div class="container">
        <div class="col-md 6">
            <table class="table">
                <thead>
                    <tr class="">
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Total Score</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item) : ?>
                    
                    <?php
                        if ($_SESSION['id'] == $item['id']) {
                            // echo "done";
                            echo "
                            <tr class=''>";
                                echo "<td class='text-center'>1</td>";
                                echo "<td><h4 class='rowback'>".$item['name']."</h4></td>";
                                echo "<td><h4 class='rowback'>".$item['email']."</h4></td>";
                                echo "<td><h4 class='rowback'>".$item['rank']."</h4></td>";
                            echo "    
                            </tr>
                            ";
                        } else {
                            echo "
                            <tr class=''>";
                                echo "<td class='text-center'>1</td>";
                                echo "<td><h4 class=''>".$item['name']."</h4></td>";
                                echo "<td><h4 class=''>".$item['email']."</h4></td>";
                                echo "<td><h4 class=''>".$item['rank']."</h4></td>";
                            echo "    
                            </tr>
                            ";
                        }
                            
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