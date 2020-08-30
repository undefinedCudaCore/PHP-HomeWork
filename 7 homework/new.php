<?php
echo '<br><br>--------------------------Uzduotis nr. 6<br><br>';
echo '<form action="" method="get">
            <button type="submit" name="get"">ONE</button>
        </form>';

echo '<form action="" method="post">
            <button type="submit" name="post">TWO</button>
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
if (isset($_POST['post'])) {
    echo $post;
}