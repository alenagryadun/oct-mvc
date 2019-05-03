<?php foreach ($this->tasks as $task): ?>

    <div id="tasksDiv">
        <p>
        <div>
            <input type="text" value="<?= $task['name'] ?>" disabled name="taskText"/>
            <input type='hidden' value="<?= $task['id'] ?>"/>
        </div>
        <div>
            <form method = "POST" action="/tasks/save">
                <input type="submit" value=" " class="w3-button w3-flat-turquoise btn save hidden" name="saveBtn" id="<?= $task['id'] ?>"/>
            </form>
        </div>
        <div>
            <form>
                <input type="button" value=" " class="w3-button w3-flat-turquoise btn edit" name="editBtn" id="<?= $task['id'] ?>"/>
            </form>
        </div>
        <div>
            <form method = "POST" action="/tasks/delete">
                <input type="submit" value=" " class="w3-button w3-flat-turquoise btn delete" name="deleteBtn" id="<?= $task['id'] ?>"/>
            </form>
        </div>
    
    </div>
<script src="../../js/tasks.js" type="text/javascript"></script>




<?php endforeach; ?>

<form method = "POST" action="/tasks/create">
    <input class ="w3-button w3-flat-turquoise" type="submit" value="+"/>
</form>
