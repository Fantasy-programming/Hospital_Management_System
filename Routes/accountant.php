<?php

// Dashboard
$router->get('/accountant/dashboard', 'accountant\Accountant', 'viewHome');
$router->get('/accountant/invoices', 'accountant\Accountant', 'viewInvoices');
$router->get('/accountant/requests', 'accountant\Accountant', 'viewRequests');
$router->get('/accountant/records', 'accountant\Accountant', 'viewRecords');
$router->get('/accountant/settings', 'accountant\Accountant', 'viewSettings');
