
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    font-family: "Poppins", sans-serif;
}
    </style>
    <head>
        <title>taskManager</title>

    </head>
    <body>
        <h3>taskManager</h3>
        <form action="" method="POST">
        <label>Title</label>
        <input type="text" name="title">
        <label>Description</label>
        <input type="text" name="desc">
        <button type="submit" name="submit">Submit</button>
        </form>
        <br>
        <div class="div">
            <h3>Pending tasks</h3>
            <form action="" method="POST">
                <?php 
                if (!empty($tasks0)){
                foreach ($tasks0 as $task) {
                echo ' <spam id="title">- ' . $task['title'] . ' </spam>/
                <spam id="desc">' .  $task['description'] . '</spam> <button type="submit" name="complete">✔ Completed</button><br><br>';
                } 
            } else {
                    echo 'No tasks';
                }
            
                ?>
            </form>
        </div>
        <div class="div">
                <h3>Completed tasks</h3>
                <form action="" method="POST">
                <?php 
                if (!empty($tasks1)){
                foreach ($tasks1 as $task) {
                echo ' <spam id="title">- ' . $task['title'] . ' </spam>/
                <spam id="desc">' .  $task['description'] . '</spam> <button type="submit" name="delete">X Delete</button><br><br>';
                } 
            } else {
                    echo 'No tasks';
                }
            
                ?>
            </form>

        </div>
    </body>
</html>