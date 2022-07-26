<?php
include '../bootstrap.php';
Secure::session();
$patients = new Patient(Database::connect());
?>
<header class="pt-10">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8 bg-gray-100">
        <div class="sm:justify-between sm:items-center sm:flex">
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                    <?php if (isset($_SESSION['email'])) : ?>
                        Welcome back to dashboard, <?= $_SESSION['email'] ?>!
                    <?php endif; ?>
                </h1>
                <p class="mt-1.5 text-sm text-gray-500">
                    Manage patients below.
                </p>
            </div>

            <div class="flex flex-col gap-4 mt-4 sm:flex-row sm:mt-0 sm:items-center">

                <form action="../Auth/logout.php">
                    <input
                            class="block px-5 py-3 text-sm font-medium text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring"
                            type="submit" value="Log out"
                    >
                </form>
            </div>
        </div>
    </div>
</header>
<div class="flex justify-center p-5">
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Medical Condition</th>
            <th>Blood type</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <?php foreach ($patients->all() as $patient) : ?>
            <td><?= $patient['name'] ?></td>
            <td><?= $patient['email'] ?></td>
            <td><?= $patient['phone_number'] ?></td>
            <td><?= $patient['address'] ?></td>
            <td><?= $patient['medical_condition'] ?></td>
            <td><?= $patient['blood_type'] ?></td>
            <td><a href="edit.php?id=<?= $patient['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $patient['id'] ?>">Delete</a></td>
        </tr>
            <?php endforeach; ?>
    </table>
</div>
