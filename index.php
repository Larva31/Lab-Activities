<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 01 Challenge</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-xl p-10 max-w-md w-full">

        <h3 class="text-2xl font-bold text-slate-800 mb-2 border-b border-slate-200 pb-3">
            LAB 01 CHALLENGE ADD-ONS

        <p class="text-sm text-slate-500 mb-1">
            XAMPP Setup and Tailwind CSS Redesign
        </p>

        </h3>

        <?php
        $full_name = "Lorein Q. Alvarez";
        $section = "Bloc 1";
        $course_code = "CC 6 416";
        $subject_title = "Application Development";

        echo '<p class="text-gray-700 mb-2"><span class="font-semibold text-slate-600">Name:</span> ' . $full_name . '</p>';
        echo '<p class="text-gray-700 mb-2"><span class="font-semibold text-slate-600">Section:</span> ' . $section . '</p>';
        echo '<p class="text-gray-700 mb-2"><span class="font-semibold text-slate-600">Course:</span> ' . $course_code . ' _ ' . $subject_title . '</p>';
        echo '<p class="text-gray-700 mb-4"><span class="font-semibold text-slate-600">Date:</span> ' . date('l, F j, Y') . '</p>';
        echo '<p class="text-indigo-700 text-sm italic mt-4 text-center">This line is running from a localhost.</p>';
        ?>

    </div>

</body>
</html>   