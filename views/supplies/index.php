<?php
$title = $title ?? 'Supplies';
$supplies = $supplies ?? [];
$created = $created ?? false;

function stockStatus(int $quantity): string
{
    if ($quantity <= 0) {
        return 'Out of stock';
    }

    if ($quantity <= 10) {
        return 'Low stock';
    }

    return 'Available';
}

function stockClass(int $quantity): string
{
    if ($quantity <= 0) {
        return 'danger';
    }

    if ($quantity <= 10) {
        return 'warning';
    }

    return 'success';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>

<header class="topbar">
    <strong>PHP Mini Medical Supplies Router</strong>

    <nav>
        <a href="/">Home</a>
        <a href="/supplies">Supplies</a>
        <a href="/supplies/create">Create Supply</a>
        <a href="/health">Health</a>
        <a href="/login">Login</a>
    </nav>
</header>

<main class="container">

    <?php if ($created): ?>
        <div class="alert success">
            Supply form submitted successfully. Redirect response worked.
        </div>
    <?php endif; ?>

    <div class="page-header">
        <div>
            <h1>Medical Supplies List</h1>
            <p>This page is handled by SupplyController@index.</p>
        </div>

        <a class="button" href="/supplies/create">Create Supply</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Group</th>
            <th>Supplier</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($supplies as $supply): ?>
            <tr>
                <td><?= htmlspecialchars($supply['code']) ?></td>
                <td><?= htmlspecialchars($supply['name']) ?></td>
                <td><?= htmlspecialchars($supply['group']) ?></td>
                <td><?= htmlspecialchars($supply['supplier']) ?></td>
                <td><?= number_format($supply['price']) ?> VND</td>
                <td><?= htmlspecialchars((string) $supply['quantity']) ?></td>
                <td>
                    <span class="badge <?= stockClass((int) $supply['quantity']) ?>">
                        <?= stockStatus((int) $supply['quantity']) ?>
                    </span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</main>

</body>
</html>