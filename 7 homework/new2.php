
<?php
echo '<br><br>--------------------------Uzduotis nr. 7<br><br>';

echo '<form action="" method="get">
            <button type="submit" name="get" value="old">ONE</button>
        </form>';

echo '<form action="?get2=new2" method="post">
            <button type="submit" name="post" value="post">TWO</button>
        </form>';

$get = '<style>

                    body {
                        background: green;
                    }

                </style>';

$post = '<style>

                    body {
                        background: yellow;
                    }

                </style>';

if (isset($_GET['get'])) {
    echo $get;
}
// if (isset($_POST['post'])) {
//     echo $post;
// }

$header = './new2.php';

if (isset($_GET['get2']) && $_GET['get2'] = 'new2') {
    header("Location: ./new2.php");
    die();
}