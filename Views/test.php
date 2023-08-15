<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/vanilla-calendar.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/themes/light.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/themes/dark.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/assets/index.css">
    <link rel="stylesheet" href="/assets/css/pharma.css">

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="/assets/modules/fontawesome6.1.1/css/all.css">

    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="/assets/modules/boxicons/css/boxicons.min.css">

    <!-- datatables CSS-->
    <link rel="stylesheet" href="/assets/modules/DataTables/datatables.min.css">

    <!-- js files -->
    <!-- <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet"> -->
</head>

<body>

    <main>
        <h1>this is what you do</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="departmentSelect" class="form-label">Select Department</label>
                <select class="form-select" name="department" id="departmentSelect" aria-describedby="departmentHelp">
                    <option value="Nurse">Nurse</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Pharmacist">Pharmacist</option>
                </select>
                <div id="departmentHelp" class="form-text">Choose the department you belong to.</div>
            </div>

            <div class="mb-3">
                <label for="messageTextArea" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="messageTextArea" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="purposeInput" class="form-label">Purpose</label>
                <input type="text" class="form-control" name="purpose" id="purposeInput">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </main>

    <!-- JS Libraies -->
    <script src="/assets/modules/jquery/jquery.min.js"></script>
    <script src="/assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/modules/popper/popper.min.js"></script>
    <script src="/assets/modules/sweetalert/sweetalert.all.min.js"></script>
    <script src="/assets/modules/DataTables/datatables.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/vanilla-calendar.min.js" defer></script> -->

    <!-- My JS File -->
    <script src="/assets/js/dash.js"></script>
    <script src="/assets/js/requests.js"></script>
    <script src="/assets/js/medicines.js"></script>


</body>

</html>