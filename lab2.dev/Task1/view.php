<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile statistics</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Automobile statistics tool</h1>
    <form method="GET" action="index.php">
        <fieldset>
            <legend>Filtering options</legend>

            <?php if (isset($error)) { ?>
                <div class="error">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php } ?>

            <select name="manufacturer" id="manufacturer">
                <option value="">Pick a brand</option>
                <?php foreach ($manufacturers as $id => $title) { ?>
                    <option value="<?php echo $id; ?>"><?php echo htmlspecialchars($title); ?></option>
                <?php } ?>
            </select>

            <select name="color" id="color">
                <option value="">Pick a color</option>
                <?php foreach ($colors as $id => $title) { ?>
                    <option value="<?php echo $id; ?>"><?php echo htmlspecialchars($title); ?></option>
                <?php } ?>
            </select>

            <label for="year">Production year</label>
            <input type="number" name="year" min="2010" max="2020" />

            <button type="submit" name="submit">Apply filters </button>
        </fieldset>

    </form>

    <section id="main">
        <?php if (sizeof($results) > 0) {
        ?>
            <table style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;">Brand/Manufacturer</th>
                    <th style="border: 1px solid black;">Model</th>
                    <th style="border: 1px solid black;">Count</th>
                </tr>

                <!-- TODO: Output a table row for each result line -->
                <?php
                    foreach($results as $row) {  // for each row:
                        ?>
                        <tr style="border: 1px solid black;">
                            <th style="border: 1px solid black;"><?php echo $row["manufacturer"]; ?></th>
                            <th style="border: 1px solid black;"><?php echo $row["model"]; ?></th>
                            <th style="border: 1px solid black;"><?php echo $row["count"]; ?></th>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        <?php
        }
        ?>
    </section>

</body>

</html>