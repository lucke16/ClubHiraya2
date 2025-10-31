<?php
function renderSystemSettings() {
    $currency = isset($_SESSION['currency']) ? $_SESSION['currency'] : 'PHP';
    $tax = isset($_SESSION['tax']) ? $_SESSION['tax'] : '12';
    $service = isset($_SESSION['service_charge']) ? $_SESSION['service_charge'] : '10';

    echo '
    <div>
        <h2>System Settings</h2>
        <form method="POST">
            <label>Currency
                <select name="currency" onchange="this.form.submit()">
                    <option value="PHP" '.($currency=='PHP'?'selected':'').'>PHP</option>
                    <option value="USD" '.($currency=='USD'?'selected':'').'>Dollar</option>
                    <option value="JPY" '.($currency=='JPY'?'selected':'').'>Yen</option>
                    <option value="EUR" '.($currency=='EUR'?'selected':'').'>Euro</option>
                </select>
            </label>
            <br>
            <label>Tax % <input type="number" name="tax" value="'.$tax.'" onchange="this.form.submit()"></label>
            <br>
            <label>Service Charge % <input type="number" name="service_charge" value="'.$service.'" onchange="this.form.submit()"></label>
        </form>
    </div>
    ';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['currency'])) $_SESSION['currency'] = $_POST['currency'];
        if (isset($_POST['tax'])) $_SESSION['tax'] = $_POST['tax'];
        if (isset($_POST['service_charge'])) $_SESSION['service_charge'] = $_POST['service_charge'];
    }
}
?>