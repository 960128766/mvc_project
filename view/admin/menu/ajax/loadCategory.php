<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'shop1';
$sql = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $username, $password);
$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql->exec('set names utf8');
$query = $sql->prepare('select * from menu');
$query->execute();
$menu = $query->fetchAll();
?>
<label for="parentMenu">زیر منوها:</label>
<select name="parentId" id="parentMenu" class="form-control">
    <option value="0">بدون دسته</option>
    <?php
    foreach ($menu as $item) {
        ?>
        <option value="<?php echo $item['id'] ?>"><?php echo $item['title'] ?></option>
        <?php
    }
    ?>
</select>
