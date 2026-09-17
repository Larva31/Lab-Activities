<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 02 Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100" style="background-color: #f7f6f2;">

<div class="container py-4" style="max-width: 550px;">

    <div class="card shadow-lg border-0 rounded-5">
        <div class="card-header text-center py-3" style="background-color: #FFF9E3;">
            <h5 class="mb-0 fw-bold">LAB 02 CHALLENGE ADD-ONS</h5>
            <small class="text-muted">XAMPP Setup &amp; PHP Output</small>
        </div>
        <div class="card-body p-4">

            <?php
            // echo does not return a value (void), while print always returns the integer 1.
            // This means print can be used in expressions (e.g. $x = print "hi"), but echo cannot.

            $full_name = "Lorein Q. Alvarez";
            $course = "CC 6 416";
            $year_level = "3rd Year";
            $section = "Bloc 1";

            // Sentence (Alert) - centered
            echo "<div class='alert alert-warning py-2 small text-center'>I am <strong>$full_name</strong>, a <strong>$year_level</strong> student in <strong>$section</strong>.</div>";
            ?>

            <!-- Two Columns: Echo | Print -->
            <div class="row g-3 mb-3">
                <div class="col-6">
                    <div class="p-2 rounded shadow-sm" style="background-color: #FFF9E3; transform: translateY(-2px);">
                        <span class="badge rounded-pill text-bg-warning mb-2">echo</span>
                        <?php
                        echo "<p class='mb-0 small'>Name: $full_name<br/>";
                        echo "Course: $course<br/>";
                        echo "Year: $year_level<br/>";
                        echo "Section: $section</p>";
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-2 rounded shadow-sm" style="background-color: #FFF9E3; transform: translateY(-2px);">
                        <span class="badge rounded-pill text-bg-warning mb-2">print</span>
                        <?php
                        print "<p class='mb-0 small'>Name: $full_name<br/>";
                        print "Course: $course<br/>";
                        print "Year: $year_level<br/>";
                        print "Section: $section</p>";
                        ?>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <table class="table table-sm table-bordered align-middle">
                <thead style="background-color: #FFF9E3;">
                    <tr>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Name</td><td><?php echo $full_name; ?></td></tr>
                    <tr><td>Course</td><td><?php echo $course; ?></td></tr>
                    <tr><td>Year Level</td><td><?php echo $year_level; ?></td></tr>
                    <tr><td>Section</td><td><?php echo $section; ?></td></tr>
                </tbody>
            </table>

        </div>
        <div class="card-footer text-center py-2" style="background-color: #FFF9E3;">
            <small class="text-muted">echo = void &nbsp;|&nbsp; print = returns 1</small>
        </div>
    </div>

</div>

</body>
</html>   