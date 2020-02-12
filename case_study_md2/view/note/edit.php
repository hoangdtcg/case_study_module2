<div class="col-12 mt-4">
    <form action="" method="POST" class="form-group mt-4">
        <label for="">Title: </label>
        <input type="text" name="title" class="form-control" value="<?php echo $note->getTitle() ?>">
        <label for="">Content:</label>
        <textarea name="content" class="form-control" rows="3"> <?php echo $note->getContent() ?></textarea>
        <label for="">Type: </label>
        <select name="type_id" class="form-control">
            <?php foreach ($types as $type): ?>
                <option value="<?php echo $type->getId(); ?>" <?php if ($note->getTypeId() == $type->getId()) echo "selected" ?>>
                    <?php echo $type->getName(); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="reset" value="Cancel" class="btn btn-danger mt-3"
               onclick="return confirm('Are you want discard this change ?')">
        <input type="submit" value="Save" class="btn btn-success mt-3"
               onclick="return confirm('Are you sure ?')">
    </form>
</div>