<?php
session_start();

include 'ThemeSettings.php';
include 'SystemSettings.php';
include 'NotificationsSettings.php';
include 'BackupRestore.php';
include 'ChangePassword.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Club Tryara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Load the app.js file that requests products from php/get_products.php -->
    <script defer src="js/app.js"></script>
</head>
<body>
    <noscript>
        <div class="noscript-warning">This app requires JavaScript to function correctly. Please enable JavaScript.</div>
    </noscript>

    <!-- Sidebar -->
    <aside class="sidebar" role="complementary" aria-label="Sidebar">
        <div class="sidebar-header">
            <img src="assets/logo1.png" alt="Club Hiraya logo" class="sidebar-header-img">
        </div>

        <nav class="sidebar-menu" role="navigation" aria-label="Main menu">
            <a href="php/home.php" class="sidebar-btn active" aria-current="page">
                <span class="sidebar-icon"><img src="assets/home.png" alt="Home icon"></span>
                <span>Home</span>
            </a>
            <a href="php/tables.php" class="sidebar-btn">
                <span class="sidebar-icon"><img src="assets/table.png" alt="Tables icon"></span>
                <span>Tables</span>
            </a>
            <a href="php/inventory.php" class="sidebar-btn">
                <span class="sidebar-icon"><img src="assets/inventory.png" alt="Inventory icon"></span>
                <span>Inventory</span>
            </a>
            <a href="php/sales_report.php" class="sidebar-btn">
                <span class="sidebar-icon"><img src="assets/sales.png" alt="Sales report icon"></span>
                <span>Sales Report</span>
            </a>
            <a href="../settings/settings.php" class="sidebar-btn">
                <span class="sidebar-icon"><img src="assets/setting.png" alt="Settings icon"></span>
                <span>Settings</span>
            </a>
        </nav>

        <div style="flex:1" aria-hidden="true"></div>

        <button class="sidebar-logout" type="button" aria-label="Logout">
            <span>Logout</span>
        </button>
    </aside>

    <!-- Main Content -->
    <main class="main-content" role="main" aria-label="Main content">
        
<link rel="stylesheet" href="settings.css">

<div class="settings-container">
    <div class="settings-box">
        <?php renderChangePassword(); ?>
    </div>
    <div class="settings-row">
        <div class="settings-box"><?php renderThemeSettings(); ?></div>
        <div class="settings-box"><?php renderSystemSettings(); ?></div>
    </div>
    <div class="settings-row">
        <div class="settings-box"><?php renderNotificationsSettings(); ?></div>
        <div class="settings-box"><?php renderBackupRestore(); ?></div>
    </div>
</div>