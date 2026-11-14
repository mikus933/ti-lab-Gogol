<?php
$firma = 'Szprycha';
$rok = date('Y');

// Tablica z usługami do zadania 3
$cennik = [
    ['nazwa' => 'Przegląd', 'cena' => 120],
    ['nazwa' => 'Kompletny serwis', 'cena' => 250],
    ['nazwa' => 'Wymiana dętki', 'cena' => 50],
    ['nazwa' => 'Centrowanie koła', 'cena' => 70],
    ['nazwa' => 'Mycie roweru', 'cena' => 40]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Szprycha - serwis rowerowy</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <!-- Zadanie 4: Logo SVG z dorysowaną ramą z polyline -->
        <a class="logo" href="#" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;">
            <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
                <title id="logo-tytul">Szprycha</title>
                <circle cx="28" cy="42" r="18" fill="none" stroke="#4426FF" stroke-width="5"/>
                <circle cx="92" cy="42" r="18" fill="none" stroke="#4426FF" stroke-width="5"/>
                <polyline points="28,42 48,14 80,14 92,42" fill="none" stroke="#111" stroke-width="5"/>
                <polyline points="48,14 60,42 80,14" fill="none" stroke="#111" stroke-width="5"/>
            </svg>
            <span>Szprycha</span>
        </a>
        
        <button class="menu-toggle" aria-expanded="false">Menu</button>
        
        <nav class="menu">
            <a href="#uslugi">Usługi</a>
            <a href="#cennik">Cennik</a>
            <a href="#kontakt">Kontakt</a>
        </nav>
    </header>

    <main>
        <section id="uslugi">
            <h2>Nasze usługi</h2>
            <div class="cards">
                <article class="card">
                    <h3>Przegląd</h3>
                    <p>Hamulce i przerzutki.</p>
                    <p class="card_price">od 120 zł</p>
                </article>
                <article class="card card--highlight">
                    <p><strong>Najczęściej wybierane</strong></p>
                    <h3>Kompletny serwis</h3>
                    <p>Mycie, smarowanie, regulacja.</p>
                    <p class="card_price">od 250 zł</p>
                </article>
                <article class="card">
                    <h3>Wymiana dętki</h3>
                    <p>Szybka wymiana dętki i opony.</p>
                    <p class="card_price">od 50 zł</p>
                </article>
            </div>
        </section>

        <section id="cennik">
            <h2>Cennik</h2>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Usługa</th>
                        <th class="num">Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Zadanie 3: Pętla foreach iterująca po tablicy $cennik -->
                    <?php foreach ($cennik as $usluga): ?>
                    <tr>
                        <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
                        <td class="num"><?= $usluga['cena'] ?> zł</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer id="kontakt">
        <h2>Kontakt</h2>
        <p>Pracownia Rowerowa Szprycha, Bydgoszcz</p>
        <p>Zadzwoń: <a href="tel:+48500100200">500 100 200</a></p>
        <p>Napisz: <a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
        <!-- Zadanie 2: Stopka z dynamicznymi zmiennymi PHP -->
        <p>&copy; <?= $rok ?> <?= $firma ?></p>
    </footer>
</body>
</html>