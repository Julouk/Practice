<?php include('includes/header.php'); ?>

<main class="container mt-5">
    <h1>Ota yhteyttä</h1>
    <p>Tähän tulee yhteydenottolomake ja mahdollisesti kartta. Lomake voidaan käsitellä PHP:llä, esim. tiedostoon tallennus tai sähköpostilähetys.</p>

    <form action="php/handle_form.php" method="POST" class="w-50">
        <div class="mb-3">
            <label for="nimi" class="form-label">Nimi</label>
            <input type="text" name="nimi" id="nimi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Sähköposti</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="viesti" class="form-label">Viesti</label>
            <textarea name="viesti" id="viesti" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lähetä</button>
    </form>
</main>

<?php include('includes/footer.php'); ?>