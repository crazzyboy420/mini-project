<?php

include_once('connection.php');
$sql = "SELECT * FROM todo";
$result = mysqli_query($db_connection,$sql);

?>
<?php include_once("./header.php"); ?>
<div class="todo-list">
    <div class="title">
        <h3>Todo list</h3>
       <a href="create-form.php">Add new</a>
    </div>
    <div class="list-item">
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <li>
                <div>
                    <?php if ($row["complete"]==1) :?>
                    <svg width="20" viewBox="0 0 20 20">
                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                    </svg>
                        <p><s><?php echo $row["todo_text"] ?></s></p>
                    <?php else: ?>
                    <span class="circle"></span>
                        <p><?php echo $row["todo_text"] ?></p>
                    <?php endif; ?>

                </div>

                <div class="crud-btn">
                    <a class="btn edit" href="edit-form.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="btn delete"  onclick="return confirm('Are you sure you want to delete this item?');" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </div>
                <?php endwhile; ?>
            </li>
        </ul>
    </div>
</div>

<?php include_once("./footer.php") ?>
