<?php
include '../bootstrap.php';

$patient = new Patient(Database::connect());
$p = $patient->edit($_GET['id']);
$patient->update($_GET['id']);

?>

<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <form method="POST">
            <h1 class="mb-8 text-3xl text-center">Edit patient</h1>
            Name:

            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="name"

                value="<?= $p['name']?>"
                >
            Email:
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                value="<?= $p['email']?>"
                placeholder="" />
             Phone:
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="phone_number"
                value="<?= $p['phone_number']?>"
                placeholder="" />
            Address:
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="address"
                value="<?= $p['address']?>"
                placeholder="" />
            Medical condition:
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="medical_condition"
                value="<?= $p['medical_condition']?>"
                placeholder="" />
            Blood type:
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="blood_type"
                value="<?= $p['blood_type']?>"
                placeholder="" />
            <button
                type="submit" name="update" class="p-2 rounded bg-black text-white"
            >Edit </button>
            </form>
    </div>
</div>
