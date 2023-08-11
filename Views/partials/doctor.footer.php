<!-- JS Libraies -->
<script src="/assets/modules/jquery/jquery.min.js"></script>
<script src="/assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="/assets/modules/popper/popper.min.js"></script>
<script src="/assets/modules/sweetalert/sweetalert.all.min.js"></script>
<script src="/assets/modules/list.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/vanilla-calendar.min.js" defer></script> -->

<!-- My JS File -->
<script src="/assets/js/dash.js"></script>
<?= urlIs('/doctor/appointments') ? '<script src="/assets/js/calendar.js"></script>' : "" ?>
<script src="/assets/js/sort.js"></script>

</body>

</html>