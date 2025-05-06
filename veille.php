<?php include 'header.php'; ?>
<section class="section" id="veille">
    <div class="card">
        <h2>Pourquoi j’ai choisi l’IA et l’informatique quantique</h2>
        <p>
            J’ai choisi de centrer ma veille sur l’intelligence artificielle (IA) et les ordinateurs quantiques car ce sont deux domaines technologiques à fort impact, en pleine évolution, et dont les interactions promettent de transformer en profondeur l’informatique de demain.
        </p>
        <p>
            En tant qu’étudiant en BTS SIO option SLAM, je m’intéresse particulièrement à la façon dont ces technologies influencent le développement logiciel, les algorithmes, la sécurité et les performances des systèmes.
        </p>
        <p>
            L’IA est déjà omniprésente dans le développement web et logiciel (avec des outils comme GitHub Copilot ou ChatGPT), tandis que l’informatique quantique ouvre des perspectives inédites en matière de calcul, notamment pour l’optimisation, le chiffrement ou l’intelligence artificielle elle-même.
        </p>
        <p>
            Ce sujet m’a également attiré pour son aspect prospectif : comprendre aujourd’hui ces technologies permet d’anticiper les compétences à acquérir pour évoluer dans les métiers du numérique.
        </p>
    </div>
</section>

<section class="section">
    <div class="card">
        <h2>Évolution technologique</h2>
        <ul>
            <li><strong>Intelligence artificielle :</strong>
                <ul>
                    <li>Évolution des systèmes experts (années 80) vers le machine learning (ML) et le deep learning (DL).</li>
                    <li>Modèles de langage avancés comme GPT (OpenAI) ou Bard (Google).</li>
                    <li>Intégration dans les IDE, moteurs de recherche, assistants vocaux, et applications métiers.</li>
                </ul>
            </li>
            <li><strong>Informatique quantique :</strong>
                <ul>
                    <li>Progrès depuis la "quantum supremacy" annoncée par Google en 2019.</li>
                    <li>Accès public à des ordinateurs quantiques via le cloud (IBM Quantum).</li>
                    <li>Qubits de plus en plus stables, dépassant parfois les 100 qubits.</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<section class="section">
    <div class="card">
        <h2>Cas d’usage actuels</h2>
        <ul>
            <li><strong>IA :</strong>
                <ul>
                    <li>Détection de fraude bancaire, maintenance prédictive, médecine personnalisée.</li>
                    <li>Développement assisté par IA (GitHub Copilot, Codex).</li>
                    <li>Chatbots, automatisation, recommandations (Netflix, Amazon).</li>
                </ul>
            </li>
            <li><strong>Informatique quantique :</strong>
                <ul>
                    <li>Optimisation logistique (itinéraires, livraisons).</li>
                    <li>Recherche pharmaceutique (modélisation moléculaire).</li>
                    <li>Cryptographie (étude des faiblesses du chiffrement classique).</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<section class="section">
    <div class="card">
        <h2>Perspectives</h2>
        <ul>
            <li>L’IA va continuer à se démocratiser dans tous les métiers de l’informatique (développeur augmenté).</li>
            <li>Les ordinateurs quantiques seront utilisés pour des calculs spécialisés à haute intensité, sans remplacer les ordinateurs classiques.</li>
            <li>L’union IA + quantique pourrait permettre l’entraînement de modèles très complexes encore plus rapidement.</li>
            <li>Des défis éthiques émergent : contrôle, cybersécurité, emploi, dépendance aux grandes entreprises technologiques.</li>
        </ul>
    </div>
</section>

<section class="section">
    <div class="card">
        <h2>Veille technologique - Flux RSS</h2>
        <h3>Intelligence artificielle</h3>
        <ul>
            <?php
            $rss = @simplexml_load_file('https://www.technologyreview.com/feed/');
            if ($rss && isset($rss->channel->item)) {
                $count = 0;
                foreach ($rss->channel->item as $item) {
                    echo '<li><a href="'.$item->link.'" target="_blank">'.htmlspecialchars($item->title).'</a></li>';
                    if (++$count == 5) break;
                }
            } else {
                echo "<li>Erreur de chargement du flux RSS.</li>";
            }
            ?>
        </ul>

        <h3>Informatique quantique</h3>
        <ul>
            <?php
            $rss = @simplexml_load_file('https://www.quantamagazine.org/tag/quantum-computing/feed/');
            if ($rss && isset($rss->channel->item)) {
                $count = 0;
                foreach ($rss->channel->item as $item) {
                    echo '<li><a href="'.$item->link.'" target="_blank">'.htmlspecialchars($item->title).'</a></li>';
                    if (++$count == 5) break;
                }
            } else {
                echo "<li>Erreur de chargement du flux RSS.</li>";
            }
            ?>
        </ul>
        <br>
        <a href="https://feedly.com/i/my/me">Lien vers Feedly</a>
    </div>
</section>

<?php include 'footer.php'; ?>
