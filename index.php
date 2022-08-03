<?php
include('server.php');
include('header.html');
?>

<form>
    <div class="form-group">
        <label for="city">Enter the name of a city</label>
        <input type="text" class="form-control" name="city" id="city" aria-describedby="city" value="<?php echo array_key_exists('city', $_GET) ? $_GET['city'] : ''; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div id="weather" class="mt-2">
    <?php
    if ($weather) {
        echo '<div class="alert alert-success" role="alert">
                  ' . $weather . '
                </div>';
    } else if ($error) {
        echo '<div class="alert alert-danger" role="alert">
                  ' . $error . '
                </div>';
    }
    ?>

    <?php
    include('footer.html');
    ?>