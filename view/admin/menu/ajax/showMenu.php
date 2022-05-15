<ul>
    <?php
    menu();
    function menu($level = 0)
    {
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'shop1';
        $sql = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $username, $password);
        $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql->exec('set names utf8');
        $query = $sql->prepare('select * from menu where parentId=?');
        $query->bindValue(1, $level);
        $query->execute();
        $menu = $query->fetchAll();
        foreach ($menu as $item) {
            $id = $item['id'];
            $newMenu = $sql->prepare('select * from menu where id=?');
            $newMenu->bindValue(1, $id);
            $newMenu->execute();
            $result = $newMenu->fetchAll();
            $count = $newMenu->rowCount();

            ?>

            <li><?php echo $item['title'] ?>
                <?php if ($count>0) { ?>
                <ul>
                   <?php menu($item['id']) ?>
                </ul>
                <?php } ?>
            </li>
            <?php
        }
    }
    ?>

</ul>
