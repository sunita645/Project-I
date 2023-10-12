<html>
<style>
    * {
        box-sizing: border-box;
    }

    .column {
        float: left;
        width: 25%;
        padding: 10px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .setting {
        width: 50%;
        height: 50%;
        text-align: center;
    }
</style>

<body>

    <div class="row">
        <div class="column setting" style="background-color:#2b2626;color:white">
            <h1>Add Data</h1>
            <form action="insert.php" method="post">
                User Id: &nbsp;&nbsp;&nbsp; <input type="text" name="id" /><br><br>
                Username: <input type="text" name="name" /><br><br>
                Password: &nbsp;<input type="text" name="password" /><br><br>
                <input type="submit" style="color: #0e0d0d; background-color: #ececec;border: 0px;width: 30%;height: 8%;font-weight: bolder;" />
            </form>
        </div>
        <div class="column setting" style="background-color:#293954;">
            <h1>View Data</h1>
            <?php
            require_once "select.php";
            ?>
        </div>
        <div class="column setting" style="background-color:#ccc;">
            <br>
            <h1>Remove Data</h1>
            <form action="delete.php" method="post">
                User Id: <input type="text" name="uid" /><br><br>
                <input type="submit" style="color: #0e0d0d; background-color: #7b7b7b;border: 0px;width: 30%;height: 8%;font-weight: bolder;" />
            </form>
        </div>
        <div class="column setting" style="background-color:#ddd;">
            <h1>Update Data</h1>
            <?php
            require_once "update.php";
            ?>
        </div>
    </div>

</body>