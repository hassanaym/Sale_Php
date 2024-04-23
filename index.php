<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <h1>ajouter une vente</h1>
        </header>
        <section>
            <form action="saveTicketSale.php" method="post">
                <div class="input-groupe">
                    <label for="">Nombre</label>
                    <input type="number" name="number" id="number">
                </div>

                <div class="input-groupe">
                    <label for="">Client</label>
                    <input type="texte" name="client" id="client">
                </div>

                <div class="input-groupe">
                    <label for="">Catégorie</label>
                    <input type="text" name="category" id="category">
                </div>

                <div class="input-groupe">
                    <button>Save</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>